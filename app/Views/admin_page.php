<?php


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
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
        background-color: #c3cbff; background: -webkit-linear-gradient(to top, #c3cbff, #e5e5e5); background: linear-gradient(to top, #c3cbff, #e5e5e5);
    }
    
</style>
<body>

    <header class="p-3 mb-3 border-bottom" style='background-color: #edeaf9 ;'>
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                    <i class="bi-bootstrap me-2"></i>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0" >
                    <li><a href="#" class="nav-link px-2 link-secondary">Dashboard</a></li>
                    <li><a href="<?php echo site_url('users') ?>" class="nav-link px-2 link-dark">Users</a></li>
                </ul>

                <div class="dropdown text-end">
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="<?php echo "https://i.pravatar.cc/150?u=" . $user['username']; ?>" alt="mdo" width="32" height="32" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small">
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="<?php echo site_url('logout') ?>">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <?php echo form_open('process/add_url'); ?>
        <div class="input-group mb-3">
            <input type="text" class="form-control form-control-lg" placeholder="Hey, make your URL cute!" name="source_url">
            <button class="btn btn-outline-secondary" type="submit"><i class="bi-send"></i></button>
        </div>
        <?php echo form_close(); ?>
        <ul class='container border shadow p-5' style=' border-radius: 1rem 1rem 1rem 1rem; background-color: #edeaf9 ; '>
            <?php
            foreach ($urls as $elem) {
                echo '<li><a href="' . site_url('cute/' . $elem['custom']) . '" target="_blank">' . site_url('cute/' . $elem['custom']) . '</a> redirect to <a href="' . $elem['source_url'] . '" target="_blank">' . $elem['source_url'] . '</a></li>';
            }
            ?>
        </ul>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>