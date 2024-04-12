<?php require_once VIEWS . '/template/header.php'; ?>

<main class="main py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="text-center"><?php echo $post['title'] ?></h2>
                <div class="card-text"><?php echo $post['content'] ?></div>
            </div>
            <?php require_once VIEWS . '/template/sidebar.php'; ?>
        </div>
</main>

<?php require_once VIEWS . '/template/footer.php'; ?>