<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cetak Laporan Pengaduan</title>

    <!-- Custom fonts for this template -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>
<!-- project  -->
<div class="project_area">
    <p class="tulisan_input2">Periode</p>
    <br/>
            <table align="center">
            <form target="_blank" action="cetak-pengaduan.php" method="post">
            <td><i class="fa fa-print" style="color:black;"></i></td>
            <td><input type="date" name="tgl1" class="form_input2" required></td>
            <td>s/d</td>
			<td><input type="date" name="tgl2" class="form_input2" required></td>
			<td><button type="submit" class="btn btn-warning" name="simpan" style="float:left; margin-right:25px;">Cetak Data </button></td>

            </form>
            </table>
            <br/>
    </div>