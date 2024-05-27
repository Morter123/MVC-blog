<?php require_once VIEWS . '/template/header.php'; ?>

<main class="main d-flex flex-column justify-content-center">

    <div class="container-fluid d-flex justify-content-center align-items-center h-100">

        <form class="w-50 mb-2" method="post">
            <div class="row mb-3 align-items-center">
                <input name="login" type="login" class="form-control" placeholder="Логин">
                <?php echo isset($validation) ? $validation->listErrors('login') : "" ?>
            </div>
            <div class="row mb-3 align-items-center">
                <input name="email" type="email" class="form-control" id="inputEmail3" placeholder="Почта">
                <?php echo isset($validation) ? $validation->listErrors('email') : "" ?>
            </div>
            <div class="row mb-3 align-items-center">
                <input name="password" type="password" class="form-control" id="inputPassword3" placeholder="Пароль">
                <?php echo isset($validation) ? $validation->listErrors('password') : "" ?>
            </div>
            <!-- <div class="row mb-3 align-items-center">
                <input name="confirm_password" type="password" class="form-control" id="inputPassword3" placeholder="Повторите пароль">
            </div> -->
            <button type="submit" class="btn btn-primary d-block mx-auto">Зарегистрироваться</button>
        </form>
    
    </div>
    <div class="text-center">Уже есть аккаунт? <a href="/login">Войти</a></div>
</main>

<?php require_once VIEWS . '/template/footer.php'; ?>