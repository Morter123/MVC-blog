<?php require_once VIEWS . '/template/header.php'; ?>

<main class="main py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php foreach ($posts as $post) : ?>
                    <div class="card mb-3">
                        <div class="card-img-top" alt="...">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-center"><?php echo $post['title'] ?></h5>
                                <p class="card-text"><?php echo $post['desc'] ?></p>
                                <a href="post/<?php echo $post['link'] ?>" class="align-self-center">Click Here!</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php require_once VIEWS . '/template/sidebar.php'; ?>
        </div>
</main>

<?php require_once VIEWS . '/template/footer.php'; ?>