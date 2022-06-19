<footer class="footer">
    <h2 class="footer__heading">follow on <a href="https://www.instagram.com/50square_training_studio/" target="_blank"><b>@50square_training_studio</b></a></h2>

    <div id="footer-sidebar" class="secondary">
        <div id="footer-center">
            <?php
                if(is_active_sidebar('footer-center')){
                    dynamic_sidebar('footer-center');
                }
            ?>
        </div>
    </div>

</footer>