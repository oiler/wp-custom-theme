<?php 
/* Template Name: Index */
?>

<?php
get_header();
?>

<?php 
if( is_front_page() ) {
	$page_class = 'front';
} else {
	$page_class = 'notfront';
}
?>

<main id="site-content" role="main" class="clearfix fdl-page-content <?php echo esc_attr($page_class); ?>">

<!-- <section role="placeholder content"> -->
<?php 
    if ( is_front_page() ) {
        //get_template_part( 'template-parts/content', 'page' );
    }
    // if ( is_page() ) {
    //     echo "<h1>Hello Page</h1>";
    // }
    if ( is_singular() ) {
        //echo "<h1>Hello Post</h1>";
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
                get_template_part( 'template-parts/content', get_post_type() );
            }
        }
    
    }
?>
</main>
<!--<div id="sidebar-primary" class="sidebar labnotes-container">
	<?php // get_sidebar(); ?>
</div>-->

<?php
get_footer();

