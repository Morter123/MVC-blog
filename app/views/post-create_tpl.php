<?php require_once VIEWS . '/template/header.php'; ?>

<main class="main mt-1">
    <div class="container">
        <h1 class="text-center">New post</h1>

        <form action="" method="post">

            <div class="">
                <label for="title" class="form-label"></label>
                <input name="title" type="text" class="form-control" id="title" placeholder="Post title" maxlength="30" value="<?php echo old('title'); ?>">
                <?php echo isset($validation) ? $validation->listErrors('title') : "" ?>

            </div>
            <div class="">
                <label for="excerpt" class="form-label"></label>
                <textarea name="excerpt" type="text" class="form-control" id="excerpt" placeholder="Excerpt" rows="2" maxlength="50"><?php echo old('excerpt'); ?></textarea>

                <?php echo isset($validation) ? $validation->listErrors('excerpt') : "" ?>

            </div>
            <div class="mb-3">
                <label for="content" class="form-label"></label>
                <textarea name="content" class="form-control" id="content" placeholder="Content" rows="10" maxlength="500"><?php echo old('content'); ?></textarea>

                <?php echo isset($validation) ? $validation->listErrors('content') : "" ?>

            </div>

            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-outline-success">Опубликовать</button>
            </div>
        </form>

    </div>
</main>



<?php require_once VIEWS . '/template/footer.php'; ?>