<?= $this->extend('layouts/templates'); ?>

<?= $this->section('maincontent'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 mb-2 text-gray-800">List feedbacks</h1>
            <p>Show all feedback.</p>
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">Feedbacks</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center table_feedback_number">No</th>
                            <th class="table_feedback_name">Name</th>
                            <th class="table_feedback_email">Email</th>
                            <th class="table_feedback_phone">Phone Number</th>
                            <th class="table_feedback_message">Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($listFeedback as $feedbacks) : ?>
                            <tr>
                                <td class="text-center"><?= $i++; ?>
                                </td>
                                <td><?= $feedbacks['name']; ?>
                                </td>
                                <td><?= $feedbacks['email']; ?>
                                </td>
                                <td><?= $feedbacks['phone_number']; ?>
                                </td>
                                <td><?= $feedbacks['message']; ?>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


<?= $this->endSection();
