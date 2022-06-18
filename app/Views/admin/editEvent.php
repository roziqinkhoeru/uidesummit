<?= $this->extend('layouts/templates'); ?>

<?= $this->section('maincontent'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit events</h1>
    <p class="mb-4">Manage the list of events to be held</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form edit event</h6>
        </div>
        <div class="card-body">
            <form
                action="/event/saveEditEvent/<?= $event['id_event']; ?>"
                method="post">
                <!-- name event -->
                <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Name event</label>
                    <div class="col-sm-10">
                        <input type="text" name="nameEvent" class="form-control" placeholder="input name event"
                            value="<?= $event['name_event']; ?>">
                    </div>
                </div>
                <!-- date event -->
                <div class="row mb-3">
                    <label for="inputDate" class="col-sm-2 col-form-label">Date event</label>
                    <div class="col-sm-10">
                        <input type="date" name="dateEvent" class="form-control"
                            value="<?= $event['date_event']; ?>">
                    </div>
                </div>
                <!-- information event -->
                <div class="row mb-3">
                    <label for="inputInformation" class="col-sm-2 col-form-label">Information event</label>
                    <div class="col-sm-10">
                        <textarea name="informationEvent" class="form-control" placeholder="input information event"
                            rows="5"><?= $event['information_event']; ?></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>

        </div>
    </div>
</div>


<?= $this->endSection();
