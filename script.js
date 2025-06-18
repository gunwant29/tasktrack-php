function confirmDelete(id) {
  if (confirm("Are you sure you want to delete this task?")) {
    window.location.href = "index.php?delete=" + id;
  }
}
