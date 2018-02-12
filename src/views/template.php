<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <?php include('partials/head.php'); ?>
        <title>Title</title>
    </head>
    <body>
        <div id="app">
        <?php include('partials/navbar.php'); ?>
            <div class="container-fluid">
                <div class="row">
                    <?php require('../config/router.php'); ?>
                </div>
            </div>
        </div>
        <script src="/dist/js/app.js"></script>
        <script> var scroll = new SmoothScroll('a[href*="#"]', { offset: 56 }); </script>
    </body>
</html>