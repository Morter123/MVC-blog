<?php require_once VIEWS . '/template/header.php'; ?>

<main class="main py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php echo $post; ?>
            </div>
            <?php require_once VIEWS . '/template/sidebar.php'; ?>
        </div>
</main>

<?php require_once VIEWS . '/template/footer.php'; ?>