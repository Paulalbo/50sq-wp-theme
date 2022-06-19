<nav onclick="addclass()" id="navbar">
        <span class="mobilemenu closed"></span>
            <ul class="mobileitems itemsclosed">
                <?php wp_nav_menu( array ( 'theme_location' => 'primary_menu' ) ); ?>

                <!-- <li><a href="../index.php" data-item='Home'>Home</a></li> -->
                <!-- <li><a href="./blog" data-item='Blog'>Blog</a></li> -->
                <!-- <li><a href="./work-with-me" data-item='Work&nbsp;with&nbsp;me'>Work with me</a></li> -->
                <!-- <li><a href="./contact" data-item='Contact'>Contact</a></li> -->
            </ul>
        <script>
            //menu toggle
            var mobilemenu = document.querySelector('.mobilemenu');
            var mobileitems = document.querySelector('.mobileitems');

            function addclass() {
            		if (mobilemenu.classList.contains('open')) {
                  mobilemenu.classList.remove('open');
                  mobilemenu.classList.add('closed');
                  mobileitems.classList.remove('itemsopen');
                  mobileitems.classList.add('itemsclosed');
            		} else {
                  mobilemenu.classList.add('open');
                  mobilemenu.classList.remove('closed');
                  mobileitems.classList.add('itemsopen');
                  mobileitems.classList.remove('itemsclosed');
            		}
            	};
        </script>
        </nav>