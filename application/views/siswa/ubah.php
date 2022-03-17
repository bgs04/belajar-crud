<div class="container">
     <div class="row mt-3">
          <div class="col-12">
               <div class="card">
                    <div class="card-header">
                         Form Ubah Data Siswa
                     </div>
                    <div class="card-body">
                         <form action="" method="post">
                              <input type="hidden" name="id" value="<?= $siswa['id']; ?>">
                              <div class="form-group">
                                   <label for="nama">Nama </label>
                                   <input type="text" name="nama" class="form-control" id="nama" value="<?= $siswa['nama']; ?>">
                                   <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                              </div>
                              <div class="form-group">
                                   <label for="nis">Nis </label>
                                   <input type="text" name="nis" class="form-control" id="nis" value="<?= $siswa['nis']; ?>">
                                   <small class="form-text text-danger"><?= form_error('nis'); ?></small>
                              </div>
                              <div class="form-group">
                                   <label for="kelas">Kelas </label>
                                   <input type="text" name="kelas" class="form-control" id="kelas" value="<?= $siswa['kelas']; ?>">
                                   <small class="form-text text-danger"><?= form_error('kelas'); ?></small>
                              </div>
                              <div class="form-group">
                                   <label for="tanggal-lahir">Tanggal_Lahir </label>
                                   <input type="date" name="tanggal-lahir" class="form-control" id="tanggal-lahir" value="<?= $siswa['tanggal-lahir']; ?>">
                              </div>
                              <div class="form-group">
                                   <label for="jurusan"> Jurusan</label>
                                   <select class="form-control" id="jurusan" name="jurusan">
                                       <?php foreach ($jurusan as $j): ?>
                                          <?php if ($j == $siswa ['jurusan']): ?>
                                          <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                          <?php else: ?>
                                             <option value="<?= $j; ?>"><?= $j; ?></option>
                                             <?php endif; ?>
                                        <?php endforeach; ?>
                                   </select>
                              </div>
                              <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                         </form>
                    </div>
               </div>
          </div>
     </div>
</div>