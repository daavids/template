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
                    <div class="col-md-9 mx-auto mainContent">
                        <?php require('../config/router.php'); ?>
                    </div>
                </div>
            </div>
        </div>
        <script src="/dist/js/app.js"></script>
    </body>
</html>