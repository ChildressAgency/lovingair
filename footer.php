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

       <p class="copyright"><?php the_field( 'copyright_text', 'options' ); ?></p>
    </footer>
    
    <?php wp_footer(); ?>
</body>
</html>