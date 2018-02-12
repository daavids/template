<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <?php include('partials/head.php'); ?>
        <title>Title</title>
    </head>
    <body>
        <div id="app">
        <?php include('partials/navbar.php'); ?>
            <div class="container-fluid mainContainer">
                <?php require('../config/router.php'); ?>
            </div>
        </div>
        <script src="/dist/js/app.js"></script>
        <script> 
            var scroll = new SmoothScroll();

            var smoothScrollWithoutHash = function(selector, settings) {
                var clickHandler = function(event) {
                    var toggle = event.target.closest(selector);
                    if (!toggle || toggle.tagName.toLowerCase() !== 'a') { return; }
                    var anchor = document.querySelector(toggle.hash);
                    if (!anchor) { return; }

                    event.preventDefault();
                    scroll.animateScroll(anchor, toggle, settings || {});
                };

                window.addEventListener('click', clickHandler, false);
            };

            smoothScrollWithoutHash('a[href*="#"]', { offset: 56 });
        </script>
    </body>
</html>