<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="//cdn.datatables.net/2.3.7/css/dataTables.dataTables.min.css" rel="stylesheet">

  <title>PHP Project 1-CRUD</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Edit Note</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <form action="index.php" method="post">
        <div class="modal-body">
          <input type="hidden" name="snoEdit" id="snoEdit">

          <div class="mb-3">
            <label class="form-label">Note title</label>
            <input type="text" class="form-control" id="titleEdit" name="titleEdit">
          </div>

          <div class="mb-3">
            <label class="form-label">Note Description</label>
            <textarea class="form-control" id="descriptionEdit" name="descriptionEdit"></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="font-family: cursive;">myNotes</a>
  </div>
</nav>

<!-- Alerts -->
<div class="container mt-3">

<?php if (isset($_GET['inserted'])) { ?>
  <div class="alert alert-success alert-dismissible fade show">
    <strong>SUCCESS!</strong> Your Note has been inserted successfully!
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  </div>
<?php } ?>

<?php if (isset($update) && $update) { ?>
  <div class="alert alert-success alert-dismissible fade show">
    <strong>SUCCESS!</strong> Your Note has been updated successfully!
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  </div>
<?php } ?>

<?php if (isset($delete) && $delete) { ?>
  <div class="alert alert-success alert-dismissible fade show">
    <strong>SUCCESS!</strong> Your Note has been deleted successfully!
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  </div>
<?php } ?>

</div>