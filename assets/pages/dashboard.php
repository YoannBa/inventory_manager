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
        <div class="dashboard-container">

            <div class="panel-left">
                <div class="user-info">
                    <div class="user-photo"></div>
                    <p class="user-name">Bruno Simon</p>
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
                    <div class="object-container dashboard-content-container">
                        <div class="object-photo"></div>
                        <div class="object-tags">
                            <p class="tag">Game</p>
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

                        <div class="modifications-object">
                            <form action="#" method="post">
                                <label for="tag">Tag</label>
                                <input type="text" id="tag" placeholder="Tools, Movies" value="Game, Xbox">
                                <label for="price">Price</label>
                                <input type="text" id="price" placeholder="200" value="50">
                                <label for="description">Description</label>
                                <input type="text" id="description" placeholder="My superb object has an awesome description" value="Overwatch, the game developped by Blizzard wich is awesome !">
                                <label for="number">Number in stock</label>
                                <input type="number" id="number" placeholder="50" value="20">
                            </form>
                        </div>
                    </div>
                </div>

                <div class="dashboard-slide users-slide">
                    <div class="top-name">Users</div>
                    <div class="users-container dashboard-content-container">
                        <div class="user-photo"></div>
                        <div class="user-name">Bruno Simon</div>
                        <div class="user-last-modification">
                            <p class="last-modification-title">Last modification : </p>
                            <p class="last-modification-content">Overwatch : Xbox One</p>
                            <p class="last-modification-date">20/02/2017</p>
                        </div>
                        <div class="user-creation-date">
                            <p class="creation-date-title">Created on :</p>
                            <p class="creation-date-content">19/03/2017</p>
                        </div>
                    </div>
                </div>

                <div class="dashboard-slide export-slide">
                    <div class="top-name">Export</div>
                    <div class="export-container dashboard-content-container">
                        <button class="export-button">Export</button>
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

        <script src="../js/main.js"></script>
    </body>
</html>
