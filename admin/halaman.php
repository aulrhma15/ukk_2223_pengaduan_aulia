<?php 

if(isset($_GET['url'])){
    switch ($_GET['url']) {
        case 'verifikasi-pengaduan';
        include 'verifikasi-pengaduan.php';
        break;

        case 'detail-pengaduan';
        include 'detail-pengaduan.php';
        break;

        case 'tanggapan-pengaduan';
        include 'tanggapan-pengaduan.php';
        break;

        case 'lihat-petugas';
        include 'lihat-petugas.php';
        break;

        case 'tambah-petugas';
        include 'tambah-petugas.php';
        break;

        case 'edit-petugas':
        include 'edit-petugas.php';
        break;

        case 'preview-petugas':
        include 'preview-petugas.php';
        break;

        case 'lihat-masyarakat':
        include 'lihat-masyarakat.php';
        break;
        
        case 'preview-masyarakat':
        include 'preview-masyarakat.php';
        break;

        case 'lihat-laporan':
        include 'lihat-laporan.php';
        break;

        case 'preview-laporan':
        include 'preview-laporan.php';
        break;

        case 'lihat-tanggapan':
        include 'lihat-tanggapan.php';
        break;

        case 'preview-tanggapan':
        include 'preview-tanggapan.php';
        break;

        case 'cetak-print':
        include 'cetak-print.php';
        break;

        case 'delete-pengaduan':
        include 'delete-pengaduan.php';
        break;

        case 'cetak-print1':
        include 'cetak-print1.php';
        break;


    }
}else{
    echo "Selamat Datang Di Aplikasi Pelaporan Pengaduan Masyarakat, dimana aplikasi ini dibuat 
    untuk memudahkan masyarakat dalam menyampaikan keluhan kepada pemerintah atas pelayanan yang tidak sesuai dengan 
    standar pelayanan atau pengabaian kewajiban serta pelanggaran larangan.<br><br>"; 
}

    require '../koneksi.php';
    $sql=mysqli_query($koneksi, "select * from pengaduan where status='0'");
    if($cek=mysqli_num_rows($sql)){
?>
<br>
<br>
 <!-- Content Row -->
          <div class="row">
    <div class="col-x-3 col-md-5 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
         <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="h5 mb-0 font-weight-bold text-primary-800-text-uppercase mb-2">Pengaduan Masuk : </div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">Ada <?php echo $cek; ?> Laporan dari masyarakat
            </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-comment fa-4x text-gray-300"></i>
                    <span class="badge badge-success badge-counter"><?php echo $cek; ?></span>
                </div>
            </div>
        </div>
        </div>
        </div>

        <?php
                        
          $sql=mysqli_query($koneksi, "select * from pengaduan where status='proses'");
          $cek=mysqli_num_rows($sql)
         ?>
         
 
    <div class="col-x-3 col-md-5 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
         <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="h5 mb-0 font-weight-bold text-primary-800-text-uppercase mb-2">Pengaduan Diproses : </div>
                <div class="h5 mb-0 font-weight-bold text-gray-800"> Ada <?php echo $cek; ?> Laporan yang sedang diproses</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-spinner fa-4x text-gray-300"></i>
                    <span class="badge badge-success badge-counter"><?php echo $cek; ?></span>
                </div>
            </div>
        </div>
        </div>
        </div>

        <?php
                        
          $sql=mysqli_query($koneksi, "select * from pengaduan where status='ditolak'");
          $cek=mysqli_num_rows($sql)
         ?>
         
 
    <div class="col-x-3 col-md-5 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
         <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="h5 mb-0 font-weight-bold text-primary-800-text-uppercase mb-2">Pengaduan Ditolak : </div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">Ada <?php echo $cek; ?> Laporan yang ditolak</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-times fa-4x text-gray-300"></i>
                    <span class="badge badge-success badge-counter"><?php echo $cek; ?></span>
                </div>
            </div>
        </div>
        </div>
        </div>

        <?php
                        
          $sql=mysqli_query($koneksi, "select * from pengaduan where status='selesai'");
          $cek=mysqli_num_rows($sql)
         ?>
         
 
    <div class="col-x-3 col-md-5 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
         <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="h5 mb-0 font-weight-bold text-primary-800-text-uppercase mb-2">Pengaduan Selesai : </div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">Ada <?php echo $cek; ?> Laporan yang sudah selesai</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-check fa-4x text-gray-300"></i>
                    <span class="badge badge-success badge-counter"><?php echo $cek; ?></span>
                </div>
            </div>
        </div>
        </div>
        </div>

   <?php  } ?>