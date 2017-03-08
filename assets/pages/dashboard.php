<?php

    include '../php/config.php';
    include '../php/display_users.php';
    include '../php/upload_image.php';

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
        <link href="../css/reset.css" rel="stylesheet" type="text/css" />
        <link href="../css/general.css" rel="stylesheet" type="text/css" />
        <link href="../css/dashboard.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="dashboard-container inventory">

            <div class="panel-left">
                <div class="user-info">
                    <div class="photo-container">
                        <img class="user-photo" src="../users_images/<?= $photo_user[0]->photo_path ?>">
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
                        <li><a href="#" class="inventory-link">Inventory</a></li>
                        <li><a href="#" class="users-link">Users</a></li>
                        <li><a href="#" class="export-link">Export</a></li>
                        <li><a href="#" class="settings-link">Settings</a></li>
                    </ul>
                </div>
            </div>

            <div class="dahsboard-content">
                <div class="dashboard-slide inventory-slide">
                    <div class="top-name">Inventory</div>
                    <div class="objects-container dashboard-content-container">
                        <div class="object-info">
                            <div class="object-photo"></div>
                            <div class="object-tags">
                                <p class="tag">Game</p>
                                <p class="tag-separator"> / </p>
                                <p class="tag">Xbox</p>
                            </div>
                            <div class="object-number">
                                <p class="number-title">In Stock</p>
                                <p class="number-stock">20</p>
                            </div>
                            <div class="object-date">
                                <p class="number-title">Last modified on : </p>
                                <p class="number-stock">20/02/2017</p>
                            </div>
                            <p class="object-name">Overwatch : Xbox One</p>
                            <p class="object-description">Overwatch, the game developped by Blizzard wich is awesome !</p>
                            <p class="object-price">50€</p>
                            <button class="button-modify button button-2">Modify</button>
                        </div>

                        <div class="modifications-object">
                            <form action="#" method="post">
                                <label for="name">Name</label>
                                <input type="text" id="name" placeholder="Awesome name" value="Overwatch : Xbox One">
                                <label for="description">Description</label>
                                <textarea id="description" placeholder="My superb object has an awesome description">Overwatch, the game developped by Blizzard wich is awesome !</textarea>
                                <label for="price">Price</label>
                                <input type="text" id="price" placeholder="200" value="50">
                                <label for="number">Number in stock</label>
                                <input type="number" id="number" placeholder="50" value="20">
                                <label for="tag">Tag</label>
                                <input type="text" id="tag" placeholder="Tools, Movies" value="Game, Xbox">
                                <input type="submit">
                            </form>
                            <button class="button-delete button button-1">Delete</button>
                        </div>
                    </div>
                </div>

                <div class="dashboard-slide users-slide">
                    <div class="top-name">Users</div>
                    <div class="users-container dashboard-content-container">

                        <?php foreach( $users as $_user ): ?>
                        <div class="user-infos">
                            <div class="user-photo"></div>
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

                <div class="dashboard-slide export-slide">
                    <div class="top-name">Export</div>
                    <div class="export-container dashboard-content-container">
                        <button class="export-button button button-2">Export</button>
                    </div>
                </div>

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

        <script src="../js/dashboard.js"></script>
    </body>
</html>
