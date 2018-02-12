<nav class="navbar navbar-light navbar-expand-md fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">Name/logo</a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" 
                data-target="#navbarCollapse" aria-controls="navbarCollapse" 
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto text-right">
            <?php
            // add links here
            $links = [
                ["/","HOME"],
                ["/about", "ABOUT US"],
                ["/index#services", "OUR SERVICES"],
                ["/contact", "CONTACT US"]
            ];

            foreach($links as $link) {
                echo '
                <li class="nav-item">
                    <a class="nav-link" href="' . $link[0] . '">' . $link[1] . '</a>
                </li>
                ';
            }
            ?>
            </ul>
        </div>
    </div>    
</nav>
