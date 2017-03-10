<?php

    include 'assets/php/config.php';
    include 'assets/php/handle_index.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Inventory</title>
        <meta name="description" content="The best tool to manage your inventory online" />

        <!-- Links -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
        <link href="assets/css/reset.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/general.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/index.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="index-container">

            <header>
                <a href="#" class="logo">
                    <img class="logo-image" src="assets/images/logo.png" alt="Inventory logo"></img>
                    <h1 class="logo-text">inventory</h1>
                </a>
            </header>

            <div class="landing-presentation">
                <h2 class="hero-title">Manage your inventory online without effort</h2>
                <p class="hero-subtitle">Inventory is an online collaborative tool to help you with your stocks. Invite users, manage items and export your inventory to your computer.</p>
                <div class="landing-illustration">
                    <img src="assets/images/landing_illustration.png" class="image-illustration" alt="Landing illustration">
                    <div class="blue-round"></div>
                </div>
                <div class="landing-access">
                    <a href="#" class="button-1 button connection">Login</a>
                    <a href="#" class="button-2 button sign-up">Sign up</a>
                </div>
            </div>

            <div class="connection pop-in">
                <div class="pop-tile">
                    <div class="pop-in-close">Close</div>
                    <div class="pop-in-title">Login</div>
                    <div class="underline-title"></div>
                    <form action="#" method="post">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="input-text" placeholder="Username">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="input-text" placeholder="Password">
                        <button type="submit" name="form" value="login" class="input-submit button button-1">Enter</button>
                    </form>
                </div>
            </div>

            <div class="sign-up pop-in">
                <div class="pop-tile">
                    <div class="pop-in-close">Close</div>
                    <div class="pop-in-title">Sign-up</div>
                    <div class="underline-title"></div>
                    <form action="#" method="post">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="input-text" placeholder="John Doe">
                        <label for="mail">E-mail</label>
                        <input type="email" name="mail" id="mail" class="input-text" placeholder="john.doe@inventory.com">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="input-text" placeholder="********">
                        <label for="confirm-pass">Confirm Password</label>
                        <input type="password" name="confirm-pass" id="confirm-pass" class="input-text" placeholder="********">
                        <button type="submit" name="form" value="signup" class="input-submit button button-1">Enter</button>
                    </form>
                </div>
            </div>

        </div>

        <script src="assets/js/index.js"></script>
    </body>
</html>
