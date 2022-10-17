<?php
/**
 *  Single template
 * 
 *  @package Hega
 */
get_header();
 ?>

 <div class="container">
    <h3><?php the_title(); ?></h3>
    <p><?php the_content(); ?></p>
    
 </div>



<?php
get_footer();
?>
