<?php
    
    //Form handling scripts
    include 'assets/php/upload_user_image.php';
    include 'assets/php/add_item.php';
    include 'assets/php/update_item.php';
    include 'assets/php/csv_export.php';

    //Displaying scripts
    include 'assets/php/display_users.php';
    include 'assets/php/display_items.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Inventory - Dashboard</title>
        <meta name="description" content="Your dashboard - Manage all your inventory from here" />

        <!-- Links -->
        <link href="assets/css/reset.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/general.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/dashboard.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="dashboard-container inventory <?= !empty($error_messages) ? 'error' : '' ?>">
        <div class="errors-container"><?php

                if(!empty($error_messages))
                {
                    foreach ($error_messages as $_key => $_error)
                    {
                        echo '<p>'.$_key.' : '.$_error.'</p>';
                    }
                }

        ?></div>
            
            <!-- left panel for navigation -->
            <div class="panel-left">

                <a class="logo-section" href="index.php">
                    <div class="clear"></div>
                    <img src="assets/images/logo.png" class="logo-image" alt="Logo">
                    <h1 class="logo-text">inventory</h1>
                    <div class="clear"></div>
                </a>

                <div class="user-info">
                    <div class="photo-container">
                        <img class="user-photo" src="assets/users_images/<?= $photo_user[0]->photo_path ?>">
                        <div class="modify-image"></div>
                    </div>
                    <p class="user-name"><?= $_SESSION['username'] ?></p>
                </div>

                <div class="image-form pop-in">
                    <div class="pop-tile">
                        <div class="pop-in-close"></div>
                        <form action="#" method="post" enctype="multipart/form-data">
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image" class="input-file">
                            <button type="submit" name="form" value="image-upload" class="button button-1">Upload</button>
                        </form>
                    </div>
                </div>

                <div class="dashboard-nav">
                    <ul>
                        <li><a href="#" class="inventory-link"><img src="assets/images/icons/list.png" alt="Inventory icon"><span>Inventory</span></a></li>
                        <li><a href="#" class="users-link"><img src="assets/images/icons/users.png" alt="Users icon"><span>Users</span></a></li>
                        <li><a href="#" class="export-link"><img src="assets/images/icons/export.png" alt="Export icon"><span>Export</span></a></li>
                        <li><a href="#" class="settings-link"><img src="assets/images/icons/settings.png" alt="Settings icon"><span>Settings</span></a></li>
                    </ul>
                </div>

            </div>
            
            <!-- Main middle part -->
            <div class="dahsboard-content">

                <!-- Inventory slide -->
                <div class="dashboard-slide inventory-slide">
                    <div class="top-name">Inventory</div>
                    <div class="add-object-container">
                        <button class="add-object button button-1">Add item</button>
                    </div>
                    <div class="objects-container dashboard-content-container">
                        <?php foreach($items as $_item):?>
                        <div class="object-info">
                            <div class="photo-container">
                                <img src="assets/items_images/<?= $_item -> image_path ?>" class="object-photo">
                            </div>
                            <div class="object-number">
                                <p class="number-title">In Stock</p>
                                <p class="number-stock"><?= $_item -> stock_number ?></p>
                            </div>
                            <div class="object-date">
                                <p class="number-title">Last modification</p>
                                <p class="number-stock"><?= $_item -> date_modification ?></p>
                            </div>
                            <div class="object-name">
                            <span class="name-title"><?= $_item -> name ?></span>
                                <div class="object-tags"><?php
                                        $item_tags = explode(",", $_item -> tags);
                                        
                                        foreach ($item_tags as $_tag)
                                        {
                                            if (!($_tag == end($item_tags)))
                                                echo $_tag.' / ';
                                            else
                                                echo $_tag;
                                        }
                                ?></div>
                            </div>
                            <p class="object-description"><?= $_item -> description ?></p>
                            <div class="object-price">
                                <p class="price-title"> Price </p>
                                <p class="price"><?= $_item -> price ?>€</p>
                            </div>
                            <button data-index="<?= $_item -> id ?>" class="button-modify">Modify</button>
                        </div>
                        <?php endforeach;?>

                        <div class="modifications-object modif-form">
                            <button class="close">Close</button>
                            <form action="#" method="post" enctype="multipart/form-data">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" placeholder="Awesome name" value="Overwatch : Xbox One">
                                <label for="description">Description</label>
                                <textarea id="description" name="description" placeholder="My superb object has an awesome description">Overwatch, the game developped by Blizzard wich is awesome !</textarea>
                                <label for="price">Price</label>
                                <input type="text" name="price" id="price" placeholder="200" value="50">
                                <label for="number">Number in stock</label>
                                <input type="number" name="stock" id="number" placeholder="50" value="20">
                                <label for="tag">Tag</label>
                                <input type="text" name="tags" id="tag" placeholder="Tools, Movies" value="Game, Xbox">
                                <button type="submit" name="form" class="button button-1" value="modif-0">Save</button>
                            </form>
                            <button class="button-delete button button-1">Delete</button>
                        </div>

                        <div class="modifications-object adding-form">
                            <button class="close">Close</button>
                            <form action="#" method="post" enctype="multipart/form-data">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" placeholder="Awesome name">
                                <label for="description">Description</label>
                                <textarea id="description" name="description" placeholder="My superb object has an awesome description"></textarea>
                                <label for="price">Price</label>
                                <input type="text" name="price" id="price" placeholder="200">
                                <label for="number">Number in stock</label>
                                <input type="number" name="stock_number" id="number" placeholder="50">
                                <label for="tag">Tag</label>
                                <input type="text" name="tag" id="tag" placeholder="Tools, Movies" value="">
                                <input type="file" name="image" id="image" class="input-file">
                                <button type="submit" name="form" value="add_object" class="button button-1">Add object</button>
                            </form>
                        </div>
                    </div>
                </div>
                
                <!-- User slide -->
                <div class="dashboard-slide users-slide">
                    <div class="top-name">Users</div>
                    <div class="users-container dashboard-content-container">
                        <?php foreach( $users as $_user ): ?>
                        <div class="user-infos">
                            <div class="photo-container">
                                <img src="assets/users_images/<?= $_user->photo_path ?>" alt="User photo" class="user-photo"></img>
                            </div>
                            <p class="user-name"> <?= $_user->name; ?> </p>
                            <div class="user-last-modification">
                                <p class="last-modification-title">Last modification : </p>
                                <p class="last-modification-content">Overwatch : Xbox One</p>
                                <p class="last-modification-date">on 20/02/2017</p>
                            </div>
                            <div class="user-creation-date">
                                <p class="creation-date-title">Created on :</p>
                                <p class="creation-date-content"> <?= $_user->created_at; ?> </p>
                            </div>
                            <button class="user-delete button button-2">Delete</button>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                    
                <!-- Export slide -->
                <div class="dashboard-slide export-slide">
                    <div class="top-name">Export</div>
                    <div class="export-container dashboard-content-container">
                        <form action="#" method="post">
                            <button class="export-button button button-2" type="submit" value="export" name="form">Export</button>
                        </form>
                    </div>
                </div>
                
                <!-- Settings slide -->
                <div class="dashboard-slide settings-slide">
                    <div class="top-name">Settings</div>
                    <div class="settings-container dashboard-content-container">
                        <form action="#" method="post">
                            <label for="currency">Currency</label>
                            <select name="currency">
                                <option value="dollars">Dollars</option>
                                <option value="euros">Euros</option>
                                <option value="yens">Yens</option>
                            </select>
                            <label for="theme">Theme</label>
                            <select name="theme">
                                <option value="bright">Bright</option>
                                <option value="dark">Dark</option>
                            </select>
                        </form>
                    </div>
                </div>

            </div>

        </div>

        <script src="assets/js/dashboard.js"></script>
    </body>
</html>
