<?php get_header(); ?>

<main class="homepage">
    <section class="hero">
        <div class="container">
            <h2>Welcome to My WordPress Layout</h2>
            <p>This section matches your Figma design's hero text.</p>
        </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <h3>Testimonials</h3>
            <div class="testimonial-list">
                <?php
                $testimonials = new WP_Query(array('post_type' => 'testimonial', 'posts_per_page' => 3));
                if ($testimonials->have_posts()) :
                    while ($testimonials->have_posts()) : $testimonials->the_post();
                        get_template_part('template-parts/content', 'testimonials');
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>No testimonials found.</p>';
                endif;
                ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>