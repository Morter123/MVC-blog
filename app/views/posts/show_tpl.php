<?php require_once VIEWS . '/template/header.php'; ?>

<main class="main mt-2">
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-break d-flex flex-column">
                <h2 class=" text-center"><?php echo $post['title'] ?></h2>
                <div class="card-text mb-2"><?php echo $post['content'] ?></div>
                <?php if (isset($_SESSION['auth'])) : ?>
                    <form action="/posts" method="post" class="text-center mt-auto">
                        <input type="hidden" class="d-none" name="_method" value="delete">
                        <input type="hidden" class="d-none" name="id" value="<?php echo ($post['id']) ?>">
                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>
                <?php endif; ?>
            </div>
            <?php require_once VIEWS . '/template/sidebar.php'; ?>
        </div>
</main>

<?php require_once VIEWS . '/template/footer.php'; ?>