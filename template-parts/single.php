
<?php get_header(); ?>

<main class="container mx-auto px-4 py-8">
    <div class="flex flex-col md:flex-row gap-8">
        <div class="md:w-2/3">
            <?php while (have_posts()) : the_post(); ?>
                <article class="bg-white rounded-lg shadow-md p-6">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('large', ['class' => 'w-full h-64 object-cover rounded-lg mb-6']); ?>
                    <?php endif; ?>
                    <h1 class="text-3xl font-bold mb-4"><?php the_title(); ?></h1>
                    <div class="prose max-w-none"><?php the_content(); ?></div>
                </article>
            <?php endwhile; ?>
        </div>
        <div class="md:w-1/3">
            <?php get_sidebar(); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
