<?php
$id = $_GET['id'];
include('koneksi.php');
$sql = "DELETE FROM transaksi WHERE id = '$id'";
if (mysqli_query($conn, $sql)) {?>
    <script>
        alert('Record deleted successfully');
        window.location.href = "tabel_transaksi.php";
    </script>
<?php } else { ?>
    <script>
        alert('Error deleting record: <?php echo mysqli_error($conn); ?>');
        window.location.href = "tabel_transaksi.php";
    </script>
<?php } ?>