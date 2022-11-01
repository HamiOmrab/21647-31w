Skip to content
Search or jump to…
Pull requests
Issues
Marketplace
Explore
 
@HamiOmrab 
eddytuto
/
21647-31w
Public
Code
Issues
Pull requests
Actions
Projects
Security
Insights
21647-31w/front-page.php /
@eddypmartin
eddypmartin c15-Début du de l'exercice #3. Liste des cours avec category-cours.ph…
…
Latest commit 76281af 7 minutes ago
 History
 1 contributor
40 lines (29 sloc)  926 Bytes


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
<!-- h1 class="trace">front-page.php</h1 -->
<?php get_header(); ?>

    <main class="site__main">
    <?php
		if ( have_posts() ) :
            while ( have_posts() ) :
				the_post(); ?>
                <h1><a href="<?php the_permalink(); ?>">
                <?php the_title(); ?></a></h1>
                

                <?php the_content(null, true); ?>
                
            <?php endwhile; ?>
        <?php endif; ?>
  
    </main>    
<?php get_footer(); ?>
</html>
