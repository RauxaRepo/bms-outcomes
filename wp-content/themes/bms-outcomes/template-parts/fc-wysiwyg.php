<?php
/**
 * WYSIWYG
 */
  $layout = get_sub_field( 'layout' );
  $wysiwyg = get_sub_field( 'wysiwyg' );

  $backgroundColor =  $layout['background_color'] ? 'bg-color--'.$layout['background_color'] : '';
  $id = $layout['id'];
?>

<section class="<?php echo $backgroundColor; ?>" <?php if($id){ echo 'id="'.$id.'"'; } ?>>
  <div class="container wysiwyg__container">
    <article>
      <?php 
        if( $wysiwyg['copy'] ) {
          echo $wysiwyg['copy'];
        }
      ?>
    </article>
  </div>
</section>