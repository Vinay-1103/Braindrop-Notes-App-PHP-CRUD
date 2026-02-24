<div class="container my-3">
  <h1>BrainDrop 🧠💧</h1>
  <h3 style="font-family: cursive;">Organize your thoughts, effortlessly</h3>
  <p style="font-family: cursive">Your personal space for creating and organizing notes</p>

  <form action="index.php" method="post">
    <div class="mb-3">
      <label class="form-label">Note title</label>
      <input type="text" class="form-control" name="title" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Note Description</label>
      <textarea class="form-control" name="description" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Add Note</button>
  </form>
</div>


<div class="container my-4">
  <table class="table" id="myTable">
    <thead>
      <tr>
        <th>SNO</th>
        <th>Title</th>
        <th>Description</th>
        <th>Actions</th>
      </tr>
    </thead>

    <tbody>
      <?php
      $sno = 0;
      while ($row = $notes->fetch_assoc()) {
        $sno++;
      ?>
      <tr>
        <th><?= $sno ?></th>
        <td><?= $row['title'] ?></td>
        <td><?= $row['description'] ?></td>
        <td>
          <button class="edit btn btn-sm btn-primary" id="<?= $row['sno'] ?>">Edit</button>
          <button class="delete btn btn-sm btn-primary" id="d<?= $row['sno'] ?>">Delete</button>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>