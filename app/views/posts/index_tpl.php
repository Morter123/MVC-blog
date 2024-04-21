<?php require_once VIEWS . '/template/header.php'; ?>

<main class="main mt-2">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 class="text-center">All Posts</h1>
                <?php foreach ($posts as $post) : ?>
                    <div class="card mb-3">
                        <div class="card-img-top" alt="...">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title text-center mb-2"><?php echo $post['title'] ?></h5>
                                <p class="card-text"><?php echo $post['content'] ?></p>
                                <a class="btn btn-primary align-self-center" role="button" href="posts?id=<?php echo $post['id'] ?>">Перейти к посту  </a>
                                
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php require_once VIEWS . '/template/sidebar.php'; ?>
        </div>
</main>

<?php require_once VIEWS . '/template/footer.php'; ?>