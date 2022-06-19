<?php include 'signature.php'; ?>
<?php include 'header.php'; ?>
<body class="home">
    
    <header class="home-header">
        <img class="home-header__img" src="./wp-content/uploads/2020/03/Logo-Fifty-50-Square-home.png">
    </header>

    <?php include 'navbar.php'; ?>

    <section class="home-content">
    <?php
            // TO SHOW THE PAGE CONTENTS
            while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
                <div class="home-container">
                    <?php 
                        the_content(); 
                    ?> <!-- Page Content -->
                </div><!-- .entry-content-page -->
            <?php
                endwhile; //resetting the page loop
                wp_reset_query(); //resetting the page query
        ?>
        <div id="map-canvas">
            <iframe height='400px' src="https://api.mapbox.com/styles/v1/paul-albrecht/cl0y5bw07003k14o00awqis5b.html?title=false&access_token=pk.eyJ1IjoicGF1bC1hbGJyZWNodCIsImEiOiJjbDBwZzgxeWUxd2x1M2tuczNnN2FjYnRyIn0.wJH6UQs7fv9MENguJGoDSQ&zoomwheel=false#12.71/45.06543/7.6699" title="50-square-map" style="border:none;"></iframe>
        </div>
    </section>


    <?php include 'footer.php'; ?>

</body>
</html>
