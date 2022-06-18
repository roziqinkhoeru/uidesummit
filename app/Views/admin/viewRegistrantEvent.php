<?= $this->extend('layouts/templates'); ?>

<?= $this->section('maincontent'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">List registrant</h1>
    <p class="mb-4">Manage the list of events to be held</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Registrant</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th>Fullname</th>
                            <th>Email</th>
                            <th>Date Birth</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; ?>
                        <?php foreach ($listRegistrant as $registrant) :?>
                        <tr>
                            <td><?= $i++; ?>
                            </td>
                            <td><?= $registrant['name_registrant']; ?>
                            </td>
                            <td><?= $registrant['email_registrant']; ?>
                            </td>
                            <td><?= $registrant['date_birth_registrant']; ?>
                            </td>
                            <td><?= $registrant['address_registrant']; ?>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


<?= $this->endSection();
