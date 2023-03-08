<!-- DataTales Example -->
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success">Data Pengaduan</h6>
            </div>
            <div class="card-body" style="font-size: 14px">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Tanggal Pengaduan</th>
                      <th>NIK</th>
                      <th>Isi Laporan</th>
                      <th>Foto</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    
                  </tfoot>
                  <tbody>
                    <?php
                     include 'koneksi.php';
                     $sql ="SELECT*FROM pengaduan WHERE nik='$_SESSION[nik]' ORDER BY id_pengaduan DESC";
                     $query = mysqli_query($koneksi, $sql);
                     $no = 1;
                     while ($data=mysqli_fetch_array($query)) { ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $data['tgl_pengaduan']; ?></td>
                      <td><?= $data['nik']; ?></td>
                      <td><?= $data['isi_laporan']; ?></td>
                      <td><img src="foto/<?php echo $data['foto'];?>" width="150"></td>
                      <td><?= $data['status']; ?></td>
                      <td>
                      <!--ini tombol -->
                      <a href="?url=detail-pengaduan&id=<?= $data['id_pengaduan'] ?>" class="btn btn-success
                       btn-icon-split">
                      <span class="icon text-white-5">
                      <i class="fa fa-info"></i>
                      </span>
                      <span class="text"> Detail </span>
                      </a>

                      <!--ini tombol -->
                      <a href="?url=lihat-tanggapan&id=<?= $data['id_pengaduan'] ?>" class="btn btn-success btn-icon-split">
                      <span class="icon text-white-5">
                      <i class="fa fa-info"></i>
                      </span>
                      <span class="text"> Lihat Tanggapan </span>
                      </a>

                     <?php 
                          if ($data['status'] == '0') {
                        ?>
                        <a href="?url=edit-pengaduan&id=<?= $data['id_pengaduan'] ?>" class="btn btn-warning btn-icon-split">
                            <span class="icon text-white-5">
                                <i class="fa fa-edit"></i>
                            </span>
                          <span class="text"> Edit </span>
                        </a>
                        <?php
                      }
                      ?>
                        
                      

                      <a href="delete-pengaduan.php?id_pengaduan=<?php echo $data['id_pengaduan']; ?>" class="btn btn-danger btn-circle" onclick="return confirm('Yakin Mau Hapus?')">
                            <i class="fa fa-trash"></i>
                        </a>



                      </td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>