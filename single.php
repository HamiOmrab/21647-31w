
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscore
 */
?>

<h1 class="trace">Single page</h1>
<?php get_header(); ?>

<main>
    <?php
		if ( have_posts() ) :
            while ( have_posts() ) :
				the_post(); 
                the_title('<h1>','</h1>');
                the_content(null, true);
    ?>
                <section>
                    <small>
                    <span> <?php the_weekday(); ?> </span>
                    <span> <?php the_date(); ?>    </span>
                    <span> <?php the_time(); ?>    </span>
                    </small>       
                </section>
                <code>
                    <span> <?php the_author(); ?> </span>
                </code>
                <pre>
                    <span> <?php the_category("cours"); ?> </span>
                </pre>
    <?php
            endwhile;
        endif;
    ?>    
    </main>    
<?php get_footer(); ?>
</html>






