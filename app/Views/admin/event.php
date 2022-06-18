<?= $this->extend('layouts/templates'); ?>

<?= $this->section('maincontent'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">List events</h1>
    <p class="mb-4">Manage the list of events to be held</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Event</h6>
            <a href="/event/addEvent"><i class="fa-solid fa-plus"></i><span>Add event</span></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Information</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; ?>
                        <?php foreach ($listEvent as $event) :?>
                        <tr>
                            <td><?= $i++; ?>
                            </td>
                            <td><?= $event['name_event']; ?>
                            </td>
                            <td><?= $event['date_event']; ?>
                            </td>
                            <td><?= $event['information_event']; ?>
                            </td>
                            <td>
                                <a href=""><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href=""><i class="fa-solid fa-trash"></i></a>
                                <a href=""><i class="fa-solid fa-eye"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


<?= $this->endSection();
