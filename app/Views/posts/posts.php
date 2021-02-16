<h2><?= esc($title) ?></h2>

<?php if (!empty($posts) && is_array($posts)) : ?>

    <?php foreach ($posts as $posts_item) : ?>

        <h3><?= esc($posts_item['title']) ?></h3>


        <p><a href="/posts/<?= esc($posts_item['slug'], 'url') ?>">View article</a></p>

    <?php endforeach; ?>

<?php else : ?>

    <h3>No Posts Yet</h3>

    <p>Unable to find any posts to show you.</p>

<?php endif ?>