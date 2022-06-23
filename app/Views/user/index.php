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
    <!-- Finish Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
        <div class="container px-5">
            <a class="navbar-brand fw-bold" href="#uidesummit2022">UIDESUMMIT 2022</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#join_event">Event</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#workshop">Workshop</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#sponsor">Sponsor</a></li>
                </ul>
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
    <!-- Finish Mashead header-->
    <header class="masthead">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <!-- Mashead text and app badges-->
                    <div class="mb-5 mb-lg-0 text-center text-lg-start">
                        <h1 class="display-1 lh-1 mb-3">Showcase your design with us.</h1>
                        <p class="lead fw-normal text-muted mb-5">Now is the time to show your creations! An annual conference on all things design, bringing together thousands of Designer engineers from all over the world.</p>
                        <div>
                            <a href="#join_event" class="btn btn-primary rounded-pill px-5 py-3 mb-4">
                                <span class="d-flex align-items-center">
                                    <span class="small fw-bold">JOIN NOW!</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Masthead device mockup feature-->
                    <div class="masthead-device-mockup">
                        <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                    <stop class="gradient-start-color" offset="0%"></stop>
                                    <stop class="gradient-end-color" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83" xmlns="http://www.w3.org/2000/svg">
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(120.42 -49.88) rotate(45)"></rect>
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(-49.88 120.42) rotate(-45)"></rect>
                        </svg><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg>
                        <div class="device-wrapper">
                            <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                                <div class="screen bg-black">
                                    <!-- PUT CONTENTS HERE:-->
                                    <!-- * * This can be a video, image, or just about anything else.-->
                                    <!-- * * Set the max width of your media to 100% and the height to-->
                                    <!-- * * 100% like the demo example below.-->
                                    <video muted="muted" autoplay="" loop="" style="max-width: 100%; height: 100%">
                                        <source src="assets/img/demo-screen.mp4" type="video/mp4" />
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- main -->
    <main>
        <!-- Finish The event -->
        <aside class="text-center bg-gradient-primary-to-secondary" id="event_banner">
            <div class="d-flex w-100 justify-content-center">
                <p class="fw-bold mb-5 badge_event">The Event</p>
            </div>
            <p class="lead fw-normal text-white mb-3">Uidesummit is a celebration of good things coming together:</p>
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-xl-10">
                        <div class="h2 fs-1 text-white mb-4">A day of freedom to be creative with your soul and September in Amsterdam that shines. The in-person program starts at 9:00 CEST whereas the live stream starts at 13:00 CEST.<br />Stay tuned!</div>
                        <a href="/" class="link_event">@UIDESUMMIT 2022</a>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Join event -->
        <section class="bg-light" id="join_event">
            <div class="container px-5">
                <div class="join_event_title">
                    <h2 class="display-1 lh-1 mb-2">
                        Uidesummit 2022
                    </h2>
                    <p class="mb-4">Choose an event according to your interests. After you register, we will send you an email as soon as possible!</p>
                </div>
                <div class="row g-4">
                    <?php foreach ($listEvent as $event) : ?>
                        <div class="col-4">
                            <div class="card card_join_event h-100 w-100 d-flex flex-column rounded-4">
                                <div class="image_card">
                                    <img src="<?= base_url("assets/img/workshop-3.jpg"); ?>" class="card-img-top image_card_event" alt="event-1">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title"><?= $event['name_event']; ?>
                                    </h5>
                                    <p class="card-text"><?php $strDate = $event['date_event'];
                                                            echo date('F d<\s\u\p>S</\s\u\p>, Y', strtotime($strDate)); ?></p>
                                    <h6 class="card-subtitle mb-2 text-muted"><?= $event['information_event']; ?>
                                    </h6>
                                    <button type="button" class="btn btn-primary mt-auto" data-bs-toggle="modal" data-bs-target="#event_<?= $event['id_event']; ?>">
                                        Register now!
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Finish Call to action section-->
        <section class="cta">
            <div class="cta-content">
                <div class="container px-5">
                    <h2 class="text-white display-1 lh-1 mb-4">
                        Stop waiting.
                        <br />
                        Start building.
                    </h2>
                    <a class="btn btn-outline-light py-3 px-4 rounded-pill fw-bold" href="#join_event">GET FULL EVENTS</a>
                </div>
            </div>
        </section>

        <!-- Finish Workshop -->
        <section class="bg-light" id="workshop">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-12 col-md-7 mb-5 mb-md-0">
                        <h2 class="display-1 lh-1 mb-4">
                            Workshops<br />Free & Pro
                        </h2>
                        <p class="mb-3">Take full advantage of your conference experience, and get training from our best speakers and instructors. We'll cover ui design, ux design, design graphic, illustration, flat design, 3D design and while allocating enough time for practice. </p>
                        <p class="mb-1">Check the first announced workshops:</p>
                        <p class="mb-1"><a href="/" class="link_workshop">20+ Free Workshops</a> - included in the full ticket price.</p>
                        <p class="mb-1"><a href="/" class="link_workshop">PRO Workshops</a> - to be purchased separately.</p>
                    </div>
                    <div class="col-12 col-md-5">
                        <div class="row workshop_image_container">
                            <div class="col-4">
                                <figure class="figure_workshop"><img src="<?= base_url('assets/img/workshop-1.jpg'); ?>" alt="workshop-1" class="image_workshop"></figure>
                            </div>
                            <div class="col-4">
                                <figure class="figure_workshop"><img src="<?= base_url('assets/img/workshop-2.jpg'); ?>" alt="workshop-2" class="image_workshop"></figure>
                            </div>
                            <div class="col-4">
                                <figure class="figure_workshop">
                                    <img src="<?= base_url('assets/img/workshop-3.jpg'); ?>" alt="workshop-3" class="image_workshop">
                                </figure>
                            </div>
                            <div class="col-4">
                                <figure class="figure_workshop">
                                    <img src="<?= base_url('assets/img/workshop-4.jpg'); ?>" alt="workshop-4" class="image_workshop">
                                </figure>
                            </div>
                            <div class="col-4">
                                <figure class="figure_workshop">
                                    <img src="<?= base_url('assets/img/workshop-5.jpg'); ?>" alt="workshop-5" class="image_workshop">
                                </figure>
                            </div>
                            <div class="col-4">
                                <figure class="figure_workshop">
                                    <img src="<?= base_url('assets/img/workshop-6.jpg'); ?>" alt="workshop-6" class="image_workshop">
                                </figure>
                            </div>
                            <div class="col-4">
                                <figure class="figure_workshop">
                                    <img src="<?= base_url('assets/img/workshop-7.jpg'); ?>" alt="workshop-7" class="image_workshop">
                                </figure>
                            </div>
                            <div class="col-4">
                                <figure class="figure_workshop">
                                    <img src="<?= base_url('assets/img/workshop-8.jpg'); ?>" alt="workshop-8" class="image_workshop">
                                </figure>
                            </div>
                            <div class="col-4">
                                <figure class="figure_workshop">
                                    <img src="<?= base_url('assets/img/workshop-9.jpg'); ?>" alt="workshop-9" class="image_workshop">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Finish Sponsors -->
        <section class="bg-gradient-primary-to-secondary" id="sponsor">
            <div class="container px-lg-5">
                <h4 class="text-center text-white font-alt mb-5">Sponsors</h4>
                <p class="fw-normal text-center text-white mb-1">Would like to join the community and improve your tech brand?</p>
                <div class="text-center mb-5">
                    <a href="mailto:info@uidesummit.com" class="link_event">@info@uidesummit.com</a>
                </div>
                <div class="d-flex flex-row flex-wrap align-items-center justify-content-center mx-auto">
                    <a class="link_badge_sponsor" href="#!"><img class="app-badge badge_sponsor" src="assets/img/sponsor/figma.png" alt="figma" /></a>
                    <a class="link_badge_sponsor" href="#!"><img class="app-badge badge_sponsor" src="assets/img/sponsor/gimp.png" alt="gimp" /></a>
                    <a class="link_badge_sponsor" href="#!"><img class="app-badge badge_sponsor" src="assets/img/sponsor/illustrator.png" alt="illustrator" /></a>
                    <a class="link_badge_sponsor" href="#!"><img class="app-badge badge_sponsor" src="assets/img/sponsor/canva.png" alt="canva" /></a>
                    <a class="link_badge_sponsor" href="#!"><img class="app-badge badge_sponsor" src="assets/img/sponsor/indesign.png" alt="indesign" /></a>
                    <a class="link_badge_sponsor" href="#!"><img class="app-badge badge_sponsor" src="assets/img/sponsor/photoshop.png" alt="photoshop" /></a>
                    <a class="link_badge_sponsor" href="#!"><img class="app-badge badge_sponsor" src="assets/img/sponsor/sketch.png" alt="sketch" /></a>
                    <a class="link_badge_sponsor" href="#!"><img class="app-badge badge_sponsor" src="assets/img/sponsor/xd.png" alt="xd" /></a>
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
                    <form id="contactForm" method="post" action="/sendFeedback">
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" name="nameFeedback" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                            <label for="name">Full name</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" name="emailFeedback" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                            <label for="email">Email address</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" name="phoneNumberFeedback" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                            <label for="phone">Phone number</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.
                            </div>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" name="messageFeedback" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                            <label for="message">Message</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.
                            </div>
                        </div>
                        <!-- Submit Button-->
                        <div class="d-grid"><button class="btn btn-primary rounded-pill btn-lg" id="submitButton" type="submit">Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Join event modal -->
    <?php foreach ($listEvent as $event) : ?>
        <div class="modal fade" id="event_<?= $event['id_event']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Register </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="/saveRegister/<?= $event['id_event']; ?>" method="post">
                        <div class="modal-body">
                            <!-- name -->
                            <div class="mb-3">
                                <label for="fullname" class="form-label">Fullname</label>
                                <input type="text" class="form-control" name="fullname">
                            </div>
                            <!-- date birth -->
                            <div class="mb-3">
                                <label for="date_birth" class="form-label">Date of birth</label>
                                <input type="date" class="form-control" name="date_birth">
                            </div>
                            <!-- email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <!-- address -->
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" name="address">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Register</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>


    <!-- scripts -->
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url('assets/js/scripts-user.js'); ?>">
    </script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>