<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $title; ?>
    </title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/favicon.ico'); ?>" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url('assets/css/styles-user.css'); ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/' . $css . ''); ?>" rel="stylesheet" />
</head>

<body id="uidesummit2022">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
        <div class="container px-3 px-sm-5">
            <a class="navbar-brand fw-bold" href="/">UIDESUMMIT 2022</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0"></ul>
                <div class="nav_btn_feedback">
                    <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                        <span class="d-flex align-items-center">
                            <i class="bi-chat-text-fill me-2"></i>
                            <span class="small">Send Feedback</span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mashead header-->
    <header class="masthead bg-gradient-primary-to-secondary">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <!-- Mashead text and app badges-->
                    <div class="mb-5 mb-lg-0 text-center text-lg-start">
                        <h1 class="display-1 lh-1 mb-3 text-white"><?= $hero; ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- main -->
    <main>
        <section class="bg-light" id="terms">
            <div class="container">
                <div class="terms_container">
                    <h3 class="mb-3">Assumenda, officiis eum ipsam quasi in incidunt</h3>
                    <p class="text_terms">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia debitis blanditiis perspiciatis omnis aspernatur veniam molestias fuga ex inventore autem iure natus, reprehenderit id cupiditate delectus, neque illo vel maiores. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident laudantium quo neque consequuntur velit, quas quaerat quibusdam facere aut perspiciatis? Illum deleniti impedit, culpa tempore molestias pariatur numquam accusamus ratione.</p>
                    <p class="text_terms">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam nobis, suscipit est sint animi illum aut consequatur, ipsum asperiores consectetur doloribus, enim in nulla vel perspiciatis reprehenderit quidem libero numquam.</p>
                    <p class="text_terms">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim, molestiae. Rem, accusamus aspernatur numquam reprehenderit consequuntur dicta inventore. Quod ducimus ratione voluptatem animi fugiat placeat sint a et cupiditate est! Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum expedita tempore reprehenderit, hic totam recusandae officiis fugiat. Similique perferendis impedit tempora, cumque sapiente modi minus aliquid tempore pariatur aperiam obcaecati? Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis maxime nesciunt excepturi, alias soluta quisquam quia magni dicta delectus suscipit quas fuga officia tenetur dolorum asperiores accusamus ullam inventore debitis.</p>
                    <h3 class="mt-5 mb-3">Tempore odit officia repudiandae.</h3>
                    <p class="text_terms">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut laboriosam pariatur labore culpa repellat temporibus iusto odit! Sunt, odio placeat, quis cupiditate consequatur eum perferendis veritatis, at esse amet voluptatum? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi illum suscipit minus fugiat esse, excepturi quo reiciendis eius non saepe a alias debitis ipsa itaque, autem nulla dicta dolor. Molestias?</p>
                    <p class="text_terms">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero vero perspiciatis sed distinctio sapiente natus nemo possimus laborum, molestias excepturi. Cumque repellendus voluptatibus aut at repudiandae fuga accusamus nemo ipsam.</p>
                    <p class="text_terms">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore odit temporibus dolores, libero recusandae sed, necessitatibus perferendis ut molestias rerum mollitia vel, aperiam est. Temporibus voluptatibus eius corporis numquam suscipit!</p>
                    <h3 class="mt-5 mb-3">Ipsa rem quam quas.</h3>
                    <p class="text_terms">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis hic corporis, expedita minima saepe laborum reprehenderit inventore. Cumque quidem maiores nihil officia, nulla labore iste aspernatur. Esse nostrum odit nulla.</p>
                </div>
            </div>
        </section>
    </main>

    <!-- Finish Footer-->
    <footer class="bg-black text-center py-5">
        <div class="container px-5">
            <div class="text-white-50 small">
                <div class="mb-2">&copy; UIDESUMMIT 2022. All Rights Reserved.</div>
                <a href="/privacy">Privacy</a>
                <span class="mx-1">&middot;</span>
                <a href="/terms">Terms</a>
                <span class="mx-1">&middot;</span>
                <a href="/faq">FAQ</a>
            </div>
        </div>
    </footer>

    <!-- Finish Feedback Modal-->
    <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-gradient-primary-to-secondary p-4">
                    <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Send feedback</h5>
                    <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body border-0 p-4">
                    <form id="formFeedback" method="post" action="/sendFeedback">
                        <!-- Name input-->
                        <div class="mb-3">
                            <label for="form-control" class="form-label fw-bold">Fullname</label>
                            <input type="text" class="form-control p-3" id="name" name="nameFeedback" placeholder="Enter your fullname">
                        </div>
                        <!-- Email input-->
                        <div class="mb-3">
                            <label for="form-control" class="form-label fw-bold">Email</label>
                            <input type="email" class="form-control p-3" id="email" name="emailFeedback" placeholder="Enter your email">
                        </div>
                        <!-- Phone number input-->
                        <div class="mb-3">
                            <label for="form-control" class="form-label fw-bold">Phone number</label>
                            <input type="text" class="form-control p-3" id="phone" name="phoneNumberFeedback" placeholder="Enter your phone number">
                        </div>
                        <!-- Message input-->
                        <div class="mb-3">
                            <label for="form-control" class="form-label fw-bold">Message</label>
                            <textarea class="form-control p-3" id="message" name="messageFeedback" rows="3" placeholder="Enter your message"></textarea>
                        </div>
                        <!-- Submit Button-->
                        <div class="d-grid"><button class="btn btn-primary rounded-pill btn-lg" id="submitButtonFeedback" type="submit">Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- script -->
    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- jquery validate -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.js"></script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url('assets/js/scripts-user.js'); ?>">
    </script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    <script>
        // validatePassword with JQuery
        // feedback form
        const exclamationCircle = "<i class='bi bi-exclamation-circle'></i>";

        $(document).ready(function() {
            $("#formFeedback").validate({
                rules: {
                    nameFeedback: {
                        required: true,
                    },
                    emailFeedback: {
                        required: true,
                    },
                    phoneNumberFeedback: {
                        required: true,
                        number: true,
                    },
                    messageFeedback: {
                        required: true,
                    },
                },
                messages: {
                    nameFeedback: {
                        required: exclamationCircle + "Please enter your name",
                    },
                    emailFeedback: {
                        required: exclamationCircle + "Please enter your email",
                        email: exclamationCircle + "Please enter a valid email",
                    },
                    phoneNumberFeedback: {
                        required: exclamationCircle + "Please enter your phone number",
                        number: exclamationCircle + "Please enter a valid phone number",
                    },
                    messageFeedback: {
                        required: exclamationCircle + "Please enter your message",
                    },
                },
            });

            $("#submitButtonFeedback").on("click", () => {
                console.log($("#formFeedback").valid());
            });
        });
    </script>
</body>

</html>