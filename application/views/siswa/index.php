<div class="container">

     <div class="row mt-3">
          <div class="col-12">
               <a href="<?= base_url(); ?>siswa/tambah " class="btn btn-primary">Tambah Data Siswa</a>
          </div>
     </div>

     <div class="row mt-3">
          <div class="col-12">
               <h3>Daftar Siswa</h3>
               <table class="table">
                    <thead>
                         <tr>
                              <th scope="col">No</th>
                              <th scope="col">Nis</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Kelas</th>
                              <th scope="col">Jurusan</th>
                              <th scope="col">Tanggal_Lahir</th>
                              <th scope="col">Aksi</th>
                         </tr>
                    </thead>
                    <?php foreach ($siswa as $swa) : ?>
                         <tbody>
                              <tr>
                                   <th scope="row"><?= $swa['id']; ?></th>
                                   <td><?= $swa['nis']; ?></td>
                                   <td><?= $swa['nama'];  ?></td>
                                   <td><?= $swa['kelas']; ?></td>
                                   <td><?= $swa['jurusan']; ?></td>
                                   <td><?= $swa['tanggal-lahir']; ?></td>
                                   <td><a href="<?= base_url(); ?>siswa/hapus/<?= $swa['id']; ?>" class="badge badge-danger " onclick="return confirm('yakin?');">Hapus</a> |
                                        <a href="<?= base_url(); ?>siswa/ubah/<?= $swa['id']; ?>" class="badge badge-success ">Ubah</a>
                                   </td>
                              </tr>
                         </tbody>
                    <?php endforeach; ?>
               </table>
          </div>
     </div>
</div>