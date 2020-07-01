<div class="card">
   <form action="" method="POST" class="card" enctype="multipart/form-data">
    <div class="card-header">
      <h3 class="card-title">FORMULIR PENDAFATRAN SISWA BARU</h3>
      <!-- <div class="card-options">
            <a href="" class="btn btn-primary btn-sm"><i class="fa fa-reply"></i> Kembali</a>
        </div> -->
    </div>
    <div class="card-body">
        <!-- <h4 style="border-bottom: 1px dotted #212121">Data Asal Sekolah</h4> -->
        <div class="row">
            <!-- <div class="col-md-6">
                <div class="form-group">
                  <label class="form-label">Asal Sekolah<span class="form-required">*</span></label>
                  <input type="text" name="asal_sekolah" class="form-control" required />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label class="form-label">Tahun Lulus<span class="form-required">*</span></label>
                  <input type="text" name="tahun_lulus" class="form-control" required />
                </div>
            </div> -->
        </div>
        <br>
        <h4 style="border-bottom: 1px dotted #212121">Data Siswa</h4>
        <div class="form-group">
          <label class="form-label">Nomor Induk Kependudukan (NIK)<span class="form-required">*</span></label>
          <input type="text" name="nik" class="form-control" required />
        </div>
        <div class="form-group">
          <label class="form-label">Nomor SKHUN<span class="form-required">*</span></label>
          <input type="text" name="skhun" placeholder="9 Digit terakhir tanpa tanda titik (.)" class="form-control" required />
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                  <label class="form-label">Nama Lengkap<span class="form-required">*</span></label>
                  <input type="text" name="nama_lengkap" class="form-control" required />
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                  <label class="form-label">Jenis Kelamin<span class="form-required">*</span></label>
                    <div class="custom-controls-stacked">
                      <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="jenis_kelamin" value="Laki-Laki">
                        <span class="custom-control-label">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Laki-Laki</span>
                      </label>
                      <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="jenis_kelamin" value="Perempuan">
                        <span class="custom-control-label">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Perempuan</span>
                      </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
          <label class="form-label">Tempat Tanggil Lahir<span class="form-required">*</span></label>
          <input type="text" name="nisn" class="form-control" required />
        </div>
        <div class="form-group">
          <label class="form-label">Alamat Jalan/Blok<span class="form-required">*</span></label>
          <textarea name="alamat_jl" rows="2" class="form-control" required ></textarea>
        </div>
        <div class="form-group">
          <label class="form-label">Alamat Desa/Kelurahan<span class="form-required">*</span></label>
          <textarea name="alamat_desa" rows="2" class="form-control" required ></textarea>
        </div>
        <div class="form-group">
          <label class="form-label">RT/RW<span class="form-required">*</span></label>
          <textarea name="alamat_rtrw" rows="2" class="form-control" required></textarea>
        </div>
        <div class="form-group">
          <label class="form-label">Kecamatan<span class="form-required">*</span></label>
          <textarea name="alamat_kec" rows="2" class="form-control" required></textarea>
        </div>
        <div class="form-group">
          <label class="form-label">Kabupaten<span class="form-required">*</span></label>
          <textarea name="alamat_kab" rows="2" class="form-control" required></textarea>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  <label class="form-label">No Hp<span class="form-required">*</span></label>
                  <input type="text" name="no_hp" placeholder="08xxxxxx" class="form-control" required />
                </div>
            </div>
        </div>
        <div class="form-group">
                  <label class="form-label">Asal Sekolah<span class="form-required">*</span></label>
                  <input type="text" name="asal_sekolah" class="form-control" required />
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <label class="form-label">Nomor Ijazah<span class="form-required">*</span></label>
                    <input type="text" name="nisn" class="form-control" required />
            </div>
          </div>
        </div>  
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <label class="form-label">Tahun Lulus<span class="form-required">*</span></label>
                    <input type="text" name="nisn" class="form-control" required />
            </div>
          </div>
        </div>
        <h4 style="border-bottom: 1px dotted #212121; margin-top: 50px;">Pilih Jurusan</h4>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Pilihan 1<span class="form-required">*</span></label>
                    <select class="form-control" name="pil1" required>
                      <option value="MULTIMEDIA">MULTIMEDIA</option>
                      <option value="PERBANKAN">PERBANKAN</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Pilihan 2<span class="form-required">*</span></label>
                    <select class="form-control" name="pil2" required>
                        <option value="MULTIMEDIA">MULTIMEDIA</option>
                        <option value="PERBANKAN">PERBANKAN</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Agama<span class="form-required">*</span></label>
                    <select class="form-control" name="agama" required>
                        <option value="islam">ISLAM</option>
                        <option value="katholik">KAHTOLIK</option>
                        <option value="protestan">PROTESTAN</option>
                        <option value="hindu">HINDU</option>
                        <option value="budha">BUDHA</option>
                        <option value="konghucu">KONG HU CU</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Kewarganegaraan<span class="form-required">*</span></label>
                    <select class="form-control" name="kewarganegaraan" required>
                        <option value="indonesia">INDONESIA</option>
                        <option value="asing">ASING</option>
                    </select>
                </div>
            </div>
        </div> -->
        <!-- <div class="form-group">
          <label class="form-label">Asal Sekolah<span class="form-required">*</span></label>
          <textarea name="no_ijazah" rows="2" class="form-control" required></textarea>
        </div> -->
        <h4 style="border-bottom: 1px dotted #212121">Data Orang Tua</h4>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  <label class="form-label">Nama Ayah<span class="form-required">*</span></label>
                  <input type="text" name="email" class="form-control" required />
                </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label">Nama Ibu<span class="form-required">*</span></label>
                <input type="text" name="nama_ibu" class="form-control" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label">Pekerjaan Orang Tua<span class="form-required">*</span></label>
                <input type="text" name="Pekerjaan" class="form-control" required>
              </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Pendapatan Per Bulan<span class="form-required">*</span></label>
                    <select class="form-control" name="agama" required>
                        <option value="islam">Rp.500 rb - Rp.1 Jt</option>
                        <option value="katholik">Rp.1 Jt - Rp.2 Jt</option>
                        <option value="protestan">Di Atas Rp.2 Jt</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Pendidikan Terakhir<span class="form-required">*</span></label>
                    <select class="form-control" name="kewarganegaraan" required>
                        <option value="indonesia">SD</option>
                        <option value="asing">SMP</option>
                        <option value="SMA">SMA</option>
                        <option value="SMK">SMK</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <!-- <div class="form-group">
                  <label class="form-label">Tempat Tanggal Lahir<span class="form-required">*</span></label>
                  <input type="text" name="tmpt_lahir" class="form-control" required />
                </div> -->
            </div>
            <!-- <div class="col-md-6">
                <div class="form-group">
                  <label class="form-label">Tanggal Lahir<span class="form-required">*</span></label>
                  <input type="date" name="tgl_lahir" class="form-control" required />
                </div>
            </div> -->
        </div>
        <div class="form-group">
          <label class="form-label">Alamat Jalan/Blok<span class="form-required">*</span></label>
          <textarea name="alamat_jl" rows="2" class="form-control" required ></textarea>
        </div>
        <div class="form-group">
          <label class="form-label">Alamat Desa/Kelurahan<span class="form-required">*</span></label>
          <textarea name="alamat_desa" rows="2" class="form-control" required ></textarea>
        </div>
        <div class="form-group">
          <label class="form-label">RT/RW<span class="form-required">*</span></label>
          <textarea name="alamat_rtrw" rows="2" class="form-control" required></textarea>
        </div>
        <div class="form-group">
          <label class="form-label">Kecamatan<span class="form-required">*</span></label>
          <textarea name="alamat_kec" rows="2" class="form-control" required></textarea>
        </div>
        <div class="form-group">
          <label class="form-label">Kabupaten<span class="form-required">*</span></label>
          <textarea name="alamat_kab" rows="2" class="form-control" required></textarea>
        </div>
        <!-- <div class="row">
            
            
        </div> -->
        <!-- <div class="row">
            <div class="col-md-6">
                <label class="form-label">Berat Badan<span class="form-required">*</span></label>
                <div class="input-group">
                  <input type="text" name="bb" class="form-control" required />
                  <span class="input-group-append" id="basic-addon2">
                    <span class="input-group-text">KG</span>
                  </span>
                </div>
            </div>
            <div class="col-md-6">
                <label class="form-label">Tinggi Badan<span class="form-required">*</span></label>
                <div class="input-group">
                  <input type="text" name="tb" class="form-control" required />
                  <span class="input-group-append" id="basic-addon2">
                    <span class="input-group-text">CM</span>
                  </span>
                </div>
            </div>
        </div> -->
        <div class="form-group">
          <label class="form-label">Foto/Scan Kartu Keluarga <span class="form-required">*</span></label>
          <input type="file" name="userfile" class="form-control" required />
        </div>
        <div class="form-group">
          <label class="form-label">Foto/Scan Akte <span class="form-required">*</span></label>
          <input type="file" name="foto_akte" class="form-control" required= />
        </div>
        <div class="form-group">
          <label class="form-label">Foto/Scan KTP Orang Tua <span class="form-required">*</span></label>
          <input type="file" name="foto_ktp" class="form-control" required />
        </div>
        <div class="form-group">
          <label class="form-label">Foto/Scan Ijazah <span class="form-required">*</span></label>
          <input type="file" name="foto_ijazah" class="form-control" required />
        </div>
        <div class="form-group">
          <label class="form-label">Foto/Scan SKHUN <span class="form-required">*</span></label>
          <input type="file" name="foto_skhun" class="form-control"  required />
        </div>
        <!-- <h4 style="border-bottom: 1px dotted #212121; margin-top: 50px;">Nilai UN</h4> -->
        <!-- <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Bahasa Indonesia<span class="form-required">*</span></label>
                    <input type="number" step=0.01 name="bindo" placeholder="8.75" class="form-control" required />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Matematika<span class="form-required">*</span></label>
                    <input type="number" step=0.01 name="mtk" class="form-control" placeholder="8.75" required />
                </div>
            </div>
        </div> -->
        <!-- <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Bahasa Inggris<span class="form-required">*</span></label>
                    <input type="number" step=0.01 name="bingg" class="form-control" placeholder="8.75" required />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Ilmu Pengetahuan Alam<span class="form-required">*</span></label>
                    <input type="number" step=0.01 name="ipa" class="form-control" placeholder="8.00" required />
                </div>
            </div>
        </div> -->
    </div>
    <div class="card-footer">
          <div class="btn-list">
            <button type="reset" class="btn btn-default"><i class="fa fa-refresh"></i> Reset</button>
            <button type="submit" name="daftar" class="btn btn-primary ml-auto"><i class="fa fa-user-plus"></i> Daftar Sekarang</button>
          </div>
        </div>
  </form>
</div>