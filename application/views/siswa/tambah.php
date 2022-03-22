<div class="container">
     <div class="row mt-3">
          <div class="col-12">
               <div class="card">
                    <div class="card-header">
                         Form Tambah Data Siswa
                    </div>
                    <div class="card-body">
                         <form action="" method="post">
                              <div class="form-group">
                                   <label for="nama">Nama </label>
                                   <input type="text" name="nama" class="form-control" id="nama">
                                   <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                              </div>
                              <div class="form-group">
                                   <label for="nis">Nis </label>
                                   <input type="text" name="nis" class="form-control" id="nis">
                                   <small class="form-text text-danger"><?= form_error('nis'); ?></small>
                              </div>
                              <div class="form-group">
                                   <label for="kelas">Kelas </label>
                                   <input type="text" name="kelas" class="form-control" id="kelas">
                                   <small class="form-text text-danger"><?= form_error('kelas'); ?></small>
                              </div>
                              <div class="form-group">
                                   <label for="tanggal-lahir">Tanggal_Lahir </label>
                                   <input type="date" name="tanggal-lahir" class="form-control" id="tanggal-lahir">
                              </div>
                              <div class="form-group">
                                   <label for="jurusan"> Jurusan</label>
                                   <select class="form-control" id="jurusan" name="jurusan">
                                        <option value="Rekayasa Perangkat Lunak">RPL</option>
                                        <option value="Teknik Komputer Dan Jaringan">TKJ</option>
                                        <option value="Teknik Mesin">Teknik Mesin</option>
                                        <option value="Multimedia">Multimedia</option>
                                        <option value="Arsitek"> Arsitek</option>
                                   </select>
                              </div>
                              <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                         </form>
                    </div>
               </div>
          </div>
     </div>
</div>