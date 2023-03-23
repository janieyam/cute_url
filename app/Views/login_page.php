<?php
    


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<style>
    html, body {
        height: 100%;
        width: 100%;
        margin: 0;
        padding: 0;
    }
    body {
        background-color: #c3cbff; background: linear-gradient(to top, #c3cbff, #e5e5e5);
        background-size: 500% 470%;
    }
    
</style>
<body>

    <div class='container border shadow p-5 mt-5 mb-5' style=' border-radius: 1rem 1rem 1rem 1rem; background-color: #ffd89b; background: linear-gradient(to top, #ffd89b, #c4e0e5)'>
        <div class="row align-items-center g-lg-5 py-3">
            <div class="text-lg-start">
                <h1 class="display-4 fw-bold lh-1 mb-3 text-center">cuteURL</h1>
                <p class="fs-4 text-center">Login with your Account!</p>
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
                <div class="g-recaptcha" data-sitekey="6LdxFyYlAAAAAOIAjOKyb8AOqch06saK0C4VVdjT"></div>
                <br/>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
                <?php echo form_close(); ?>
            </div>
        </div>
        
    </div>
    <div class="container ">
        <footer class="py-3" style="position:fixed-bottom">
            <p class="text-center text-muted mb-0">© 2023 Cute URL - Shorten Your Long Link</p>
            <ul class="nav justify-content-center">
                <li class="nav-item"><a href="http://localhost/cute_url/public/" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Terms of Service</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
            </ul>
            
        </footer>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>