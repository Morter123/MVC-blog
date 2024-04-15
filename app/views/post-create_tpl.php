<?php require_once VIEWS . '/template/header.php'; ?>

<main class="main py-3">
    <div class="container">
        <h1 class="text-center">New post</h1>

        <form action="" method="post">

            <div class="">
                <label for="title" class="form-label"></label>
                <input name="title" type="text" class="form-control" id="title" placeholder="Post title" maxlength="30" value="<?php echo old('title'); ?>">
                <?php if (isset($errors['title'])) : ?>
                    <div class="invalid-feedback d-block">
                        <?php echo $errors['title'] ?>
                    </div>
                <?php endif; ?>

            </div>
            <div class="">
                <label for="excerpt" class="form-label"></label>
                <textarea name="excerpt" type="text" class="form-control" id="excerpt" placeholder="Excerpt" rows="2" maxlength="50"><?php echo old('excerpt'); ?></textarea>

                <?php if (isset($errors['excerpt'])) : ?>
                    <div class="invalid-feedback d-block">
                        <?php echo $errors['excerpt'] ?>
                    </div>
                <?php endif; ?>

            </div>
            <div class="mb-3">
                <label for="content" class="form-label"></label>
                <textarea name="content" class="form-control" id="content" placeholder="Content" rows="10" maxlength="500"><?php echo old('content'); ?></textarea>

                <?php if (isset($errors['content'])) : ?>
                    <div class="invalid-feedback d-block">
                        <?php echo $errors['content'] ?>
                    </div>
                <?php endif; ?>

            </div>

            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-outline-success">Опубликовать</button>
            </div>
        </form>

    </div>
</main>

<?php require_once VIEWS . '/template/footer.php'; ?>