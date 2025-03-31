
<?php get_header(); ?>

<main class="container mx-auto px-4 py-8">
    <div class="flex flex-col md:flex-row gap-8">
        <div class="md:w-2/3">
            <h1 class="text-3xl font-bold mb-8"><?php the_archive_title(); ?></h1>
            <div class="grid gap-8 md:grid-cols-2">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="bg-white rounded-lg shadow-md overflow-hidden">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('medium', ['class' => 'w-full h-48 object-cover']); ?>
                        <?php endif; ?>
                        <div class="p-6">
                            <h2 class="text-xl font-semibold mb-2">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>" class="text-blue-600 hover:text-blue-800">
                                <?php _e('Read More →', 'minimal-tailwind'); ?>
                            </a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
            <?php the_posts_pagination(); ?>
        </div>
        <div class="md:w-1/3">
            <?php get_sidebar(); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
