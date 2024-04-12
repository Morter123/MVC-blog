<div class="col-md-4">
    <ul class="list-group">
        <?php foreach ($recent_posts as $recent_post) : ?>
            <li class="list-group-item"><a href="post?id=<?php echo $recent_post['id'] ?>"><?php echo $recent_post['title'] ?></a></li>
        <?php endforeach ?>
    </ul>
</div>
