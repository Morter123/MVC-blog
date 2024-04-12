<?php require_once VIEWS . '/template/header.php'; ?>

<main class="main py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php foreach ($posts as $post): ?>
                <?php echo ($post['content']) ?>
                <?php endforeach?>
            </div>
            <?php require_once VIEWS . '/template/sidebar.php'; ?>
        </div>
</main>

<?php require_once VIEWS . '/template/footer.php'; ?>