<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?>
    </title>
    <link rel="stylesheet" href="/assets/css/styles.css">

    <!-- css lib -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container_mod">
        <div class="container">
            <?php
            if (session()->getFlashdata('error')) {
                echo '<div class="alert alert-danger">'.session()->getFlashdata('error').'</div>';
            }
             ?>

            <form
                action="<?= base_url('auth/checkAuth'); ?>"
                method="post">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" name="email"
                        placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="password" class="form-control" id="floatingPassword" name="password"
                        placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="mb-5">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
<!doctype html>
<html lang="en">