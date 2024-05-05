<?php require_once VIEWS . '/template/header.php'; ?>

<main class="main d-flex flex-column justify-content-center">

    <div class="container-fluid d-flex justify-content-center align-items-center h-100">

        <form class="w-50 text-center mb-2">
            <div class="row mb-3 align-items-center">
                <input type="login" class="form-control" placeholder="Логин">
            </div>
            <div class="row mb-3 align-items-center">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Почта">
            </div>
            <div class="row mb-3 align-items-center">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Пароль">
            </div>
            <div class="row mb-3 align-items-center">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Повторите пароль">
            </div>
            <button type="submit" class="btn btn-primary d-block mx-auto">Зарегистрироваться</button>
        </form>
    
    </div>
    <div class="text-center">Уже есть аккаунт? <a href="/auth">Войти</a></div>
</main>

<?php require_once VIEWS . '/template/footer.php'; ?>