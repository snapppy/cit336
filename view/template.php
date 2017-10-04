<!DOCTYPE html>
<!--
Author: James Warner
Assignment: Acme home view Template
-->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ACME Template Page</title>
        <link media="screen" href="../css/template.css" type="text/css" rel="stylesheet">
    </head>
    <body>      
        <header>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/acme/common/header.php'; ?>
        </header>
        <nav>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/acme/common/nav.php'; ?>
        </nav>
        <main>
            <h1>Content Title Here</h1>
        </main>
        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/acme/common/footer.php'; ?>
        </footer>
    </body>
</html>
