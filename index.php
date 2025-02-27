<?php get_header(); ?>

<main>
    <h1>Welcome to the theme</h1>
    <?php if(have_posts()) {
        while(have_posts()) : the_post();
            the_title('<h2>', '</h2>');
            the_content();
        endwhile;
    } else {
        echo '<p>No content available</p>'; // Added missing semicolon
    } ?>
</main>

<?php get_footer(); ?>
