<?php
    get_header();
?>
		<article class="content mb-4 px-5 py-5 p-mx-5">
        

        <?php
        if (have_posts()) {
            
            while (have_posts()) {
                the_post_thumbnail();
                the_post();
                the_content();
            }
        }
        ?>

        </article>

<?php
    get_footer()
?>