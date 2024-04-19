<?php require_once VIEWS . '/template/header.php'; ?>

<main class="main mt-2">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 class="text-center">About site</h1>
                <?php foreach ($posts as $post) : ?>
                    <?php echo ($post['content']) ?>
                <?php endforeach ?>
            </div>
            <?php require_once VIEWS . '/template/sidebar.php'; ?>
        </div>
</main>

<?php require_once VIEWS . '/template/footer.php'; ?>