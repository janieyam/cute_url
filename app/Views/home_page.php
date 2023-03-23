<?php



?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CuteURL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<style>
    html, body {
        height: 100%;
        width: 100%;
        margin: 0;
    }
    body {
        background-color: #c3cbff; background: linear-gradient(to top, #c3cbff, #e5e5e5);
        background-size: 200% 170%;
    }
    
</style>

<body>



    <div class="container col-xxl-8 ">
        <div class="row flex-lg-row-reverse align-items-center py-5">
            <div class="row-6 mt-5">
                <img src="<?php echo site_url('assets/img/img3.png') ?>" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="300" height="100" loading="lazy">
            </div>
            <div class="row-6">
                <div class='text-center'>
                    <h1 class="display-5 fw-bold lh-1 ">cuteURL</h1>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-5">
                    <a href="<?php echo site_url("login"); ?>" class="btn btn-primary btn-lg px-4 me-md-2">Get Started</a>
                    <a href="<?php echo site_url("login"); ?>" class="btn btn-outline-dark btn-lg px-4">Log in</a>
                </div>
                
            </div>
            
        </div>
    </div>

    
    </div>

    <div class="container">
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