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
        <link href="assets/css/reset.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/general.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/index.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="index-container">

            <header>
                <a href="#" class="logo">
                    <div class="logo-image"></div>
                    <h1 class="logo-text">Inventory</h1>
                </a>
            </header>

            <div class="landing-presentation">
                <h2 class="hero-title">Keep track of your products</h2>
                <p class="hero-subtitle">The most efficient tool to manage your inventory online</p>
                <div class="landing-img"></div>
                <div class="landing-access">
                    <a href="#" class="button-1 button connection">Log In</a>
                    <a href="#" class="button-2 button sign-up">Sign up</a>
                </div>
            </div>

            <div class="connection pop-in">
                <div class="pop-tile">
                    <div class="pop-in-close"></div>
                    <form action="#" method="post">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="input-text" placeholder="John Doe">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="input-text" placeholder="********">
                        <button type="submit" name="form" value="login" class="button button-1">Login</button>
                    </form>
                </div>
            </div>

            <div class="sign-up pop-in">
                <div class="pop-tile">
                    <div class="pop-in-close"></div>
                    <form action="#" method="post">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="input-text" placeholder="John Doe">
                        <label for="mail">E-mail</label>
                        <input type="email" name="mail" id="mail" class="input-text" placeholder="john.doe@inventory.com">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="input-text" placeholder="********">
                        <label for="confirm-pass">Confirm Password</label>
                        <input type="password" name="confirm-pass" id="confirm-pass" class="input-text" placeholder="********">
                        <button type="submit" name="form" value="signup" class="button button-1">Sign up</button>
                    </form>
                </div>
            </div>

        </div>

        <script src="assets/js/index.js"></script>
    </body>
</html>
