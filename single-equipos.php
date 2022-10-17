<?php
/**
 *  Single Equipos template
 * Template Name: Equipos Single
 * 
 *  @package Hega
 */
get_header();
include( 'database/conection.php');
?>

<div class="container">
    <h3><?php the_title(); ?></h3>
    <p><?php echo $marca ?></p>
    
    
</div>

<?php 
get_footer();
?>

