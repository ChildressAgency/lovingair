    <footer>
       <nav class="navbar">
           <ul class="navbar-nav side-borders">
                <?php
                $nav_locations = get_nav_menu_locations();
                $menuID = $nav_locations['footer_menu'];
                $nav_items = wp_get_nav_menu_items( $menuID );

                foreach( $nav_items as $item ):
                ?>
                    <li class="nav-item"><a href="<?php echo $item->url; ?>" class="nav-link"><?php echo $item->title; ?></a></li>
                <?php endforeach; ?>
           </ul>
       </nav>

       <p class="copyright">&copy; 2018 Loving Air Inc. <span class="copyright__separator">/</span> Website designed by the Childress Agency<br/>Terms of Use <span class="copyright__separator">/</span> Privacy Policy</p>
    </footer>
    
    <?php wp_footer(); ?>
</body>
</html>