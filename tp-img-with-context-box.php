<div class="section">
    <div class="examples">
        <div class="examples__left">
            <?php the_sub_field( 'text' ); ?>
        </div>
        <div class="examples__right">
            <?php
              $image = get_sub_field('image');
            ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
        </div>
    </div>
</div>