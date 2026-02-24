<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script src="//cdn.datatables.net/2.3.7/js/dataTables.min.js"></script>

<script>
  let table = new DataTable('#myTable');
</script>

<script>
  edits = document.getElementsByClassName('edit');
  Array.from(edits).forEach((element) => {
    element.addEventListener("click", (e) => {

      tr = e.target.parentNode.parentNode;
      title = tr.getElementsByTagName("td")[0].innerText;
      description = tr.getElementsByTagName("td")[1].innerText;

      document.getElementById("titleEdit").value = title;
      document.getElementById("descriptionEdit").value = description;
      document.getElementById("snoEdit").value = e.target.id;

      var myModal = new bootstrap.Modal(document.getElementById('editModal'));
      myModal.show();
    });
  });

  deletes = document.getElementsByClassName('delete');
  Array.from(deletes).forEach((element) => {
    element.addEventListener("click", (e) => {
      sno = e.target.id.substr(1);
      if (confirm("Are you sure to delete!")) {
        window.location = `index.php?delete=${sno}`;
      }
    });
  });
</script>

</body>
</html>