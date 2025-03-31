
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
