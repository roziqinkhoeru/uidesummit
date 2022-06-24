<?= $this->extend('layouts/templates'); ?>

<?= $this->section('maincontent'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">List events</h1>
    <p class="mb-4">Manage the list of events to be held</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h5 class="m-0 font-weight-bold text-primary">Event</h5>
            <a href="/event/addEvent" class="btn btn-primary d-flex align-items-center"><i class="fa-solid fa-plus mr-2 d-block"></i><span class="d-block">Add event</span></a>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center table_event_number">No</th>
                            <th class="table_event_name">Name</th>
                            <th class="table_event_date">Date</th>
                            <th class="table_event_information">Information</th>
                            <th class="text-center table_event_action">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($listEvent as $event) : ?>
                            <tr>
                                <td class="text-center"><?= $i++; ?>
                                </td>
                                <td><?= $event['name_event']; ?>
                                </td>
                                <td><?= $event['date_event']; ?>
                                </td>
                                <td><?= $event['information_event']; ?>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center justify-content-between px-2 w-100">
                                        <a href="/event/editEvent/<?= $event['id_event']; ?>"><i class="fa-solid fa-pen-to-square text-primary"></i></a>
                                        <a href="/event/viewRegistrantEvent/<?= $event['id_event']; ?>"><i class="fa-solid fa-eye text-success"></i></a>
                                        <a href="/event/deleteEvent/<?= $event['id_event']; ?>"><i class="fa-solid fa-trash text-danger"></i></a>
                                    </div>
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
