<div class="container">
    <div class="row">
      <div class="col-md-12 mt-3">
       <div class="card">
        <div class="card-header bg-danger text-light">
         DATA PETUGAS
     </div>
     <div class="card-body">
        <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahdata">Tambah Data</a>

        <div class="modal fade" id="tambahdata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Petugas</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST">
                            <div class="row mb-3">
                                <label class="col-md-4">Nama Lengkap</label>
                                <div class="col-md-8">
                                    <input type="text" name="nama_admin" class="form-control" placeholder="Masukkan Nama" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-4">Username</label>
                                <div class="col-md-8">
                                    <input type="text" name="username" class="form-control" placeholder="Masukkan Username" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-4">PASSWORD</label>
                                <div class="col-md-8">
                                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-4">TELP</label>
                                <div class="col-md-8">
                                    <input type="number" name="telp" class="form-control" placeholder="Masukkan Telp" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="kirim" class="btn btn-primary">Tambah Data</button>
                        </div>
                    </form>
                    <?php 
                    include'../config/koneksi.php';
                    if (isset($_POST['kirim'])) {
                        $nama = $_POST['nama_admin'];
                        $username = $_POST['username'];
                        $password = md5($_POST['password']);
                        $telp = $_POST['telp'];
                        $level = 'petugas';

                        $query = mysqli_query($koneksi, "INSERT INTO admin VALUES ('','$nama','$username','$password','$telp','$level')");

                        if ($query) {
                            header('location:index.php?page=petugas');
                        } 
                    }
                    ?>
                </div>
            </div>
        </div>

        <table class="table table-striped">
          <thead>
           <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>USERNAME</th>
            <th>TELP</th>
            <th>LEVEL</th>
            <th>AKSI</th>
        </tr>
    </thead>
    <tbody>
       <?php 
       include '../config/koneksi.php';
       $no = 1;
       $query = mysqli_query($koneksi, "SELECT * FROM admin");
       while ($data = mysqli_fetch_array($query)) { ?>

        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nama_admin'] ?></td>
            <td><?php echo $data['username'] ?></td>
            <td><?php echo $data['telp'] ?></td>
            <td><?php echo $data['level'] ?></td>

            <td>
             <a href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus<?php echo $data['id_admin'] ?>">Hapus</a>
             <!-- Modal Tanggapi -->
             <div class="modal fade" id="hapus<?php echo $data['id_admin'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="edit_data.php" method="POST">
                        <input type="hidden" name="id_admin" class="form-control" value="<?php echo $data['id_admin'] ?>">
                        <p>Apakah yakin akan mengapus tanggapan <br> <?php echo $data['nama_admin'] ?> </p>                                                                                       
                    </div>
                    <div class="modal-footer">
                     <button type="submit" name="hapus_admin" class="btn btn-danger">HAPUS</button>
                 </div>
             </form>

         </div>
     </div>
 </div>
</td>


</tr>
<?php } ?>
</tbody>
</table>
</div>	
</div>
</div>
</div>
</div>	