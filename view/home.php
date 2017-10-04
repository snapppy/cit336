<!DOCTYPE html>
<!--
Author: James Warner
Assignment: ACME Home View
-->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ACME Template Page</title>
        <link media="screen" href="/acme/css/home.css" type="text/css" rel="stylesheet">
    </head>
    <body>      
        <header>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/header.php'; ?>
        </header>
        <nav>
            <!--<?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/nav.php'; ?>-->
            <?php echo $navList; ?>
        </nav>
        <main>
            <h1>Welcome to Acme!</h1>
            <div id="feature-image">
                <div id="feature-desc">
                    <h2>Acme Rocket</h2>
                    <ul>
                        <li>Quick lightning fuse</li>
                        <li>NHTSA approved seat belts</li>
                        <li>Mobile launch stand included</li>
                    </ul>
                </div>
                <div id="i-want-it-now-button">
                    <img alt="I want it now button" src="/acme/images/site/iwantit.gif">
                </div>
            </div>
<!--            background image (background of a div) make grid, two columns, text description, button beneath-->
            <div id="recipes-and-reviews">
                    <h3 id="review-title">Acme Rocket Reviews</h3>
                    <ul id="raving-reviews">
                        <li>"I don't know how I ever caught roadrunners before this." (4/5)</li>
                        <li>"That thing was fast!" (4/5)</li>
                        <li>"Talk about fast delivery." (5/5)</li>
                        <li>"I didn't even have to pull the meat apart." (4.5/5)</li>
                        <li>"I'm on my thirteenth one. I love these things!" (5/5)</li>
                    </ul>
                    <h3 id="recipe-title">Featured Recipes</h3>
                    <div id="feature-recipe-1">
                        <img alt="Pulled roadrunner BBQ" src="/acme/images/recipes/bbqsand.jpg">
                        <a href="#" title="Go to pulled roadrunner BBQ recipe">Pulled Roadrunner BBQ</a>
                    </div>
                    <div id="feature-recipe-2">
                        <img alt="Roadrunner pot pie" src="/acme/images/recipes/potpie.jpg">
                        <a href="#" title="Go to roadrunner pot pie recipe">Roadrunner Pot Pie</a>
                    </div>
                    <div id="feature-recipe-3">
                        <img alt="Roadrunner soup" src="/acme/images/recipes/soup.jpg">
                        <a href="#" title="Go to roadrunner soup recipe">Roadrunner Soup</a>
                    </div>
                    <div id="feature-recipe-4">
                        <img alt="Roadrunner taco" src="/acme/images/recipes/taco.jpg">
                        <a href="#" title="Go to roadrunner tacos recipe">Roadrunner Tacos</a>
                    </div>
                </div>
        </main>
        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?>
        </footer>
    </body>
</html>
