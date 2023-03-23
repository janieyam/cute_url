<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Users</title>
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
        background-color: #c3cbff;
    }
    
    
</style>
<body>

    <header class="p-3 mb-3 border-bottom" style='background-color: #edeaf9 ;'>
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                    <i class="bi-bootstrap me-2"></i>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="<?php echo site_url('admin') ?>" class="nav-link px-2 link-secondary">Dashboard</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">Users</a></li>
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

    <div class="container mb-5">

    <div class='container border shadow p-5 mt-5 mb-5' style=' border-radius: 1rem 1rem 1rem 1rem; background-color: #ffd89b; background: linear-gradient(to top, #ffd89b, #c4e0e5)'>
            <h2>Register a New User</h2>
            <?php echo form_open('process/register_user') ?>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingName" name="short_name" placeholder="Name">
                <label for="floatingName">Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="username" placeholder="Username">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" name="pass" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingConfirmPassword" name="pass2" placeholder="Confirm Password">
                <label for="floatingConfirmPassword">Confirm Password</label>
            </div>
            <button type="submit" class="btn btn-primary">Register user</button>
            <?php echo form_close(); ?>
        </div>

        <?php

        if (isset($edit_user)) {
        ?>
            <div class='container border shadow p-5 mt-5 mb-5' style=' border-radius: 1rem 1rem 1rem 1rem; background-color: #ffd89b; background: linear-gradient(to top, #ffd89b, #c4e0e5)'>
                <h2>Edit user</h2>
                <?php echo form_open('process/update_user') ?>
                <input type="hidden" name="id" value="<?php echo $edit_user['id'] ?>" />
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingName" name="short_name" placeholder="Name" value="<?php echo $edit_user['short_name'] ?>">
                    <label for="floatingName">Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="username" placeholder="Username" value="<?php echo $edit_user['username'] ?>">
                    <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" name="pass" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <button type="submit" class="btn btn-primary">Save changes</button>
                <?php echo form_close(); ?>
            </div>
        <?php
        }

        ?>

        <ul class='container border shadow p-5 mt-5 mb-5' style=' border-radius: 1rem 1rem 1rem 1rem; background-color: #ffd89b; background: linear-gradient(to top, #ffd89b, #c4e0e5)'>
            <?php
            foreach ($users as $elem) {
                echo "<li class='mb-3'><a href='" . site_url('users') . "?user_id=" . $elem['id'] . "' class='btn btn-warning'>Edit</a> <a href='" . site_url('process/delete_user') . "?user_id=" . $elem['id'] . "' class='btn btn-danger'>Delete</a> Name: " . $elem['short_name'] . ' Username: ' . $elem['username'] . "</li>";
            }
            ?>
        </ul>

    </div>
    <div class="container ">
        <footer class="py-3 ">
            <p class="text-center text-muted mb-0">© 2023 Cute URL - Shorten Your Long Link</p>
            <ul class="nav justify-content-center">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
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