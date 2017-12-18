<div class="news">
  <div class="flexrow">
        <?php $post_object = get_field('links');
        if( $post_object ): $post = $post_object; setup_postdata( $post );  ?>
        <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large' ); ?>
    <div class="flexitem cat1" style="background:url(<?php echo $featuredImage; ?>)center center/cover no-repeat;">
          <a href="<?php the_permalink();?>" class="linkblock"></a>
          <div class="newsdetails">
            <h2 class="newsheadline"><?php the_title(); ?></h2>
            <h5 class="excerpt hidden"> <?php the_excerpt(); ?> </h5>
          </div>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        <?php endif; ?>
    </div>
            <?php $post_object = get_field('mitte');
        if( $post_object ): $post = $post_object; setup_postdata( $post );  ?>
        <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large' ); ?>
    <div class="flexitem cat4" style="background:url(<?php echo $featuredImage; ?>)center center/cover no-repeat;">
            <a href="<?php the_permalink();?>" class="linkblock"></a>
          <div class="newsdetails">
            <h2 class="newsheadline"><?php the_title(); ?></h2>
            <h5 class="excerpt hidden"> <?php the_excerpt(); ?> </h5>
          </div>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        <?php endif; ?>
    </div>
            <?php $post_object = get_field('rechts');
        if( $post_object ): $post = $post_object; setup_postdata( $post );  ?>
        <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large' ); ?>
    <div class="flexitem cat3" style="background:url(<?php echo $featuredImage; ?>)center center/cover no-repeat;">
            <a href="<?php the_permalink();?>" class="linkblock"></a>
          <div class="newsdetails">
            <h2 class="newsheadline"><?php the_title(); ?></h2>
            <h5 class="excerpt hidden"> <?php the_excerpt(); ?> </h5>
          </div>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        <?php endif; ?>
    </div>

            <?php $post_object = get_field('links2');
        if( $post_object ): $post = $post_object; setup_postdata( $post );  ?>
        <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large' ); ?>
    <div class="flexitem cat2" style="background:url(<?php echo $featuredImage; ?>)center center/cover no-repeat;">
            <a href="<?php the_permalink();?>" class="linkblock"></a>
          <div class="newsdetails">
            <h2 class="newsheadline"><?php the_title(); ?></h2>
            <h5 class="excerpt hidden"> <?php the_excerpt(); ?> </h5>
          </div>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        <?php endif; ?>
    </div>
            <?php $post_object = get_field('mitte2');
        if( $post_object ): $post = $post_object; setup_postdata( $post );  ?>
        <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large' ); ?>
    <div class="flexitem cat1" style="background:url(<?php echo $featuredImage; ?>)center center/cover no-repeat;">
            <a href="<?php the_permalink();?>" class="linkblock"></a>
          <div class="newsdetails">
            <h2 class="newsheadline"><?php the_title(); ?></h2>
            <h5 class="excerpt hidden"> <?php the_excerpt(); ?> </h5>
          </div>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        <?php endif; ?>
    </div>
            <?php $post_object = get_field('rechts2');
        if( $post_object ): $post = $post_object; setup_postdata( $post );  ?>
        <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large' ); ?>
    <div class="flexitem cat3" style="background:url(<?php echo $featuredImage; ?>)center center/cover no-repeat;">
            <a href="<?php the_permalink();?>" class="linkblock"></a>
          <div class="newsdetails">
            <h2 class="newsheadline"><?php the_title(); ?></h2>
            <h5 class="excerpt hidden"> <?php the_excerpt(); ?> </h5>
          </div>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        <?php endif; ?>
    </div>

                <?php $post_object = get_field('links3');
        if( $post_object ): $post = $post_object; setup_postdata( $post );  ?>
        <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large' ); ?>
    <div class="flexitem cat2" style="background:url(<?php echo $featuredImage; ?>)center center/cover no-repeat;">
            <a href="<?php the_permalink();?>" class="linkblock"></a>
          <div class="newsdetails">
            <h2 class="newsheadline"><?php the_title(); ?></h2>
            <h5 class="excerpt hidden"> <?php the_excerpt(); ?> </h5>
          </div>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        <?php endif; ?>
    </div>

                <?php $post_object = get_field('mitte3');
        if( $post_object ): $post = $post_object; setup_postdata( $post );  ?>
        <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large' ); ?>
    <div class="flexitem cat3" style="background:url(<?php echo $featuredImage; ?>)center center/cover no-repeat;">
            <a href="<?php the_permalink();?>" class="linkblock"></a>
          <div class="newsdetails">
            <h2 class="newsheadline"><?php the_title(); ?></h2>
            <h5 class="excerpt hidden"> <?php the_excerpt(); ?> </h5>
          </div>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        <?php endif; ?>
    </div>

                <?php $post_object = get_field('rechts3');
        if( $post_object ): $post = $post_object; setup_postdata( $post );  ?>
        <?php $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'large' ); ?>
    <div class="flexitem cat1" style="background:url(<?php echo $featuredImage; ?>)center center/cover no-repeat;">
            <a href="<?php the_permalink();?>" class="linkblock"></a>
          <div class="newsdetails">
            <h2 class="newsheadline"><?php the_title(); ?></h2>
            <h5 class="excerpt hidden"> <?php the_excerpt(); ?> </h5>
          </div>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        <?php endif; ?>
    </div>
  </div>
</div>