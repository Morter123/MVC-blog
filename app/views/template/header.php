<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC</title>
    <base href="<?php echo PATH ?>/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="public/assets/css/main.css">
    <link rel="icon" href="public/images/icons8-book-100.png">
</head>

<body>
    <div class="wrapper">
        <header>
            <nav class="navbar navbar-expand-lg bg-primary-subtle">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="posts/create">New post</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <?php if (check_auth('guest')): ?>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="login">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="register">Register</a>
                                </li>
                            <?php else: ?>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page">Привет, <?php echo ($_SESSION['auth']['name']); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="logout">Logout</a>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>

                </div>
            </nav>
        </header>
        <?php get_alerts(); ?>