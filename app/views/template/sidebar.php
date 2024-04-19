<div class="col-md-4">
    <h1 class="text-center">Recents Posts</h1>
    <div class="list-group">
        <?php foreach ($recent_posts as $recent_post) : ?>
            <a class="list-group-item list-group-item-action" aria-current="true" href="post?id=<?php echo $recent_post['id']; ?>"><?php echo $recent_post['title']; ?></a>
        <?php endforeach ?>
    </div>
</div>