<?= $this->extend('layouts/templates'); ?>

<?= $this->section('maincontent'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-flex justify-content-between align-items-center">
        <div>
            <h1 class="h3 mb-2 text-gray-800">Edit events</h1>
            <p class="mb-4">Form to change the event data to be held.</p>
        </div>
        <div>
            <a href="/event" class="btn d-flex align-items-center">
                <i class="fa-solid fa-angle-left mr-2 d-block"></i>
                <span class="d-block">Back</span>
            </a>
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">Form edit event</h5>
        </div>
        <div class="card-body">
            <form action="/event/saveEditEvent/<?= $event['id_event']; ?>" method="post" enctype="multipart/form-data" id="formEditEvent">
                <!-- name event -->
                <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Name event</label>
                    <div class="col-sm-10">
                        <input type="text" name="nameEvent" class="form-control" placeholder="input name event" value="<?= $event['name_event']; ?>">
                    </div>
                </div>
                <!-- date event -->
                <div class="row mb-3">
                    <label for="inputDate" class="col-sm-2 col-form-label">Date event</label>
                    <div class="col-sm-10">
                        <input type="date" name="dateEvent" class="form-control" value="<?= $event['date_event']; ?>">
                    </div>
                </div>
                <!-- information event -->
                <div class="row mb-3">
                    <label for="inputInformation" class="col-sm-2 col-form-label">Information event</label>
                    <div class="col-sm-10">
                        <textarea name="informationEvent" class="form-control" placeholder="input information event" rows="5"><?= $event['information_event']; ?></textarea>
                    </div>
                </div>
                <!-- image event -->
                <div class="row mb-5">
                    <label for="inputImage" class="col-sm-2 col-form-label">Image event</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" id="imageEvent" name="imageEvent">
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <a href="/event" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary ml-3" id="buttonEditEvent">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>

<?= $this->section('scriptAdmin'); ?>

<!-- jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- jquery validate -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.js"></script>

<script>
    // validatePassword with JQuery
    // feedback form
    const exclamationCircle = "<i class='fa-solid fa-circle-exclamation'></i>";

    $(document).ready(function() {
        $("#formEditEvent").validate({
            rules: {
                nameEvent: {
                    required: true,
                },
                dateEvent: {
                    required: true,
                },
                informationEvent: {
                    required: true,
                },
                imageEvent: {
                    required: true,
                },
            },
            messages: {
                nameEvent: {
                    required: exclamationCircle + " Name event is required",
                },
                dateEvent: {
                    required: exclamationCircle + " Date event is required",
                },
                informationEvent: {
                    required: exclamationCircle + " Information event is required",
                },
                imageEvent: {
                    required: exclamationCircle + " Image event is required",
                },
            },
        });

        $("#buttonEditEvent").on("click", () => {
            console.log($("#formEditEvent").valid());
        });
    });
</script>

<?= $this->endSection();
