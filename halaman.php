<?php
if (isset($_GET['url'])){
    switch ($_GET['url']){
        case'tulis-pengaduan';
        include 'tulis-pengaduan.php';
        break;

        case'lihat-pengaduan';
        include 'lihat-pengaduan.php';
        break;

        case'detail-pengaduan';
        include 'detail-pengaduan.php';
        break;

        case'lihat-tanggapan';
        include 'lihat-tanggapan.php';
        break;

        case'edit-pengaduan';
        include 'edit-pengaduan.php';
        break;

        default:
        echo "Halaman Tidak Ditemukan";
        break;
    }
}else{
    echo "Selamat Datang Di Aplikasi Pelaporan Pengaduan Masyarakat, dimana aplikasi ini dibuat 
    untuk memudahkan masyarakat dalam menyampaikan keluhan kepada pemerintah atas pelayanan yang tidak sesuai dengan 
    standar pelayanan atau pengabaian kewajiban serta pelanggaran larangan.<br><br>"; 

}