<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body style="background-image: url('img/bg.jpg'); background-repeat: no-repeat; background-size: cover;">

    <?php include('includes/navbar.php'); ?>
    
    <div class="d-flex justify-content-center">
        <div class="card my-5 col-sm-3 p-4">
            <img src="img/logo1.svg" alt="" style="height: 10px;">
            <p class="text-center mt-2 fs-5">Log in to Flickr</p>
            <div class="form-floating mb-2">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-check mt-2">
                <input class="form-check-input" type="checkbox" value="" id="checkDefault">
                <label class="form-check-label" for="checkDefault">
                    Remember email address
                </label>
            </div>
            <button class="btn btn-primary mt-4">Sign in</button>
            <a class="text-center mt-3 text-decoration-none" href="">Forgot password?</a>
            <hr>
            <p class="text-center">Not a Flickr member? <a class="text-decoration-none" href="">Sign up here.</a></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>