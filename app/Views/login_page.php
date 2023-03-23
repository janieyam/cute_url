<?php



?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<style>
    html, body {
        height: 100%;
        width: 100%;
        margin: 0;
    }
    body {
        background-color: #c3cbff; background: -webkit-linear-gradient(to top, #c3cbff, #e5e5e5); background: linear-gradient(to top, #c3cbff, #e5e5e5);
    }
    .container {
        position: absolute;
        top: 40%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
</style>
<body>

    <div class='container border border-primary border-2 shadow p-5' style=' border-radius: 1rem 1rem 1rem 1rem; background-color: #ffd89b; background: -webkit-linear-gradient(to top, #ffd89b, #c4e0e5); background: linear-gradient(to top, #ffd89b, #c4e0e5)'>
        <div class="row align-items-center g-lg-5 py-3">
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 mb-3">Shorten your links with ease</h1>
                <p class="col-lg-10 fs-4">Welcome to our URL shortening system! By signing in to your account, you can easily create short links for your long URLs, track clicks, and manage all your links in one place. So, sign in to your account today and start shortening your links with ease!</p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
                <?php
                echo form_open('process/login', 'class="p-4 p-md-5 border rounded-3 bg-light"')
                ?>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="username" placeholder="Username">
                    <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" name="pass" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" disabled> Remember me
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
                <?php echo form_close(); ?>
            </div>
        </div>
        
    </div>
    <footer class='fixed-bottom'>
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="<?php echo base_url(); ?>" class="nav-link px-2 text-muted">Home  |</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features  |</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing  |</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs  |</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About  </a></li>
            </ul>
            <p class="text-center text-muted mb-5">© 2023 Jiane May Q. Paez</p>
        </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>