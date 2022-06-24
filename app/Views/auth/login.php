<!doctype html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?>
    </title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/favicon.ico'); ?>" />

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/css/sb-admin-2.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/' . $css . ''); ?>" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
    <main>
        <div class="container main_login">
            <div class="row justify-content-center main_login_content align-items-center mx-auto">
                <div class="col-xl-10 col-lg-12 col-md-9">
                    <h2 class="brand_login">Uidesummit 2022</h2>
                    <div class="card o-hidden border-0 shadow-lg my-5 card_login">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-12">
                                    <div class="p-4 p-sm-5">
                                        <div class="text-center mb-4">
                                            <h1 class="h4 text-gray-900 mb-2 fw_bold">Welcome Back!</h1>
                                            <p>Login to Uidesummit Admin</p>
                                        </div>
                                        <form action="<?= base_url('auth/checkAuth'); ?>" method="post" id="formLogin">
                                            <!-- email input -->
                                            <div class="mb-3">
                                                <label for="email" class="form-label fw_bold">Email</label>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                                            </div>
                                            <!-- passsword input -->
                                            <div class="mb-4">
                                                <label for="password" class="form-label fw_bold">Password</label>
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                                            </div>
                                            <!-- submit -->
                                            <div class="mb-3">
                                                <button type="submit" class="btn btn-primary w-100 text-center" id="submitLogin">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- scripts -->
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>/assets/vendor/jquery/jquery.min.js">
    </script>
    <script src="<?= base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js">
    </script>
    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>/assets/vendor/jquery-easing/jquery.easing.min.js">
    </script>
    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>/assets/js/sb-admin-2.min.js"></script>
    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- jquery validate -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.js"></script>

    <script>
        // validatePassword with JQuery
        // LOGIN FORM
        const exclamationCircle = "<i class='bi bi-exclamation-circle'></i>";

        $(document).ready(function() {
            $("#formLogin").validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                    },
                },
                messages: {
                    email: {
                        required: exclamationCircle + " Email is required",
                        email: exclamationCircle + " Email is not valid"
                    },
                    password: {
                        required: exclamationCircle + " Password is required",
                    },
                },
            });

            $("#submitLogin").on("click", () => {
                console.log($("#formLogin").valid());
            });
        });
    </script>
</body>

</html>