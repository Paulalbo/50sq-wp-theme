<?php
/* Template Name: basic page template*/
include 'header.php'; ?>
<body id="basic">
    <section>
        <?php include 'navbar.php'; ?>
        <div id="section" class="section">
        <h1 id="weirdhyphen"><?php wp_title(''); ?></h1>
        <script>
            // workaround to delete weird hyphen in wp_title
            var weirdhyphen = document.querySelector("#weirdhyphen").innerText;
            weirdhyphen = weirdhyphen.slice(0, - 1);
            document.querySelector("#weirdhyphen").innerHTML = weirdhyphen;
        </script>

        <?php
            // TO SHOW THE PAGE CONTENTS
            while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
                <div class="entry-content-page">
                    <?php the_content(); ?> <!-- Page Content -->
                </div><!-- .entry-content-page -->
            <?php
                endwhile; //resetting the page loop
                wp_reset_query(); //resetting the page query
        ?>
        </div>

</section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="module" src="./script/script.js"></script>
    <script type="module" src="./script/classes.js"></script>
</body>
</html>