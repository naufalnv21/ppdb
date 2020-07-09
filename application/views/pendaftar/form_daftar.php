<div class="card">
   <form action="<?php echo base_url('pendaftar/C_formulir/insertFormulir'); ?>" method="POST" class="card" enctype="multipart/form-data">
    <div class="card-header">
      <h3 class="card-title">FORMULIR PENDAFATRAN SISWA BARU</h3>
    </div>
    <div class="card-body">
        <br>
        <h4 style="border-bottom: 1px dotted #212121">Data Siswa</h4>
        <div class="form-group">
          <label class="form-label">Nomor Induk Kependudukan (NIK)<span class="form-required">*</span></label>
          <input type="text" name="nik_pendaftar" class="form-control" required />
        </div>
        <div class="form-group">
          <label class="form-label">Nomor SKHUN<span class="form-required">*</span></label>
          <input type="text" name="skhun_pendaftar" placeholder="9 Digit terakhir tanpa tanda titik (.)" class="form-control" required />
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                  <label class="form-label">Nama Lengkap<span class="form-required">*</span></label>
                  <input type="text" name="nama_pendaftar" class="form-control" required />
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                  <label class="form-label">Jenis Kelamin<span class="form-required">*</span></label>
                    <div class="custom-controls-stacked">
                      <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="jk_pendaftar" value="Laki-Laki">
                        <span class="custom-control-label">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Laki-Laki</span>
                      </label>
                      <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" name="jk_pendaftar" value="Perempuan">
                        <span class="custom-control-label">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Perempuan</span>
                      </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
          <label class="form-label">Tempat Tanggil Lahir<span class="form-required">*</span></label>
          <input type="text" name="ttl_pendaftar" class="form-control" required />
        </div>
        <div class="form-group">
          <label class="form-label">Alamat Jalan/Blok<span class="form-required">*</span></label>
          <textarea name="almt_jl_pendaftar" rows="2" class="form-control" required ></textarea>
        </div>
        <div class="form-group">
          <label class="form-label">Alamat Desa/Kelurahan<span class="form-required">*</span></label>
          <textarea name="almt_desa_pendaftar" rows="2" class="form-control" required ></textarea>
        </div>
        <div class="form-group">
          <label class="form-label">RT/RW<span class="form-required">*</span></label>
          <textarea name="almt_rt_rw_pendaftar" rows="2" class="form-control" required></textarea>
        </div>
        <div class="form-group">
          <label class="form-label">Kecamatan<span class="form-required">*</span></label>
          <textarea name="almt_kec_pendaftar" rows="2" class="form-control" required></textarea>
        </div>
        <div class="form-group">
          <label class="form-label">Kabupaten<span class="form-required">*</span></label>
          <textarea name="almt_kab_pendaftar" rows="2" class="form-control" required></textarea>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  <label class="form-label">No Hp<span class="form-required">*</span></label>
                  <input type="text" name="telp_hp_pendaftar" placeholder="08xxxxxx" class="form-control" required />
                </div>
            </div>
        </div>
        <div class="form-group">
                  <label class="form-label">Asal Sekolah<span class="form-required">*</span></label>
                  <input type="text" name="asal_sekolah_pendaftar" class="form-control" required />
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <label class="form-label">Nomor Ijazah<span class="form-required">*</span></label>
                    <input type="text" name="no_ijazah_pendaftar" class="form-control" required />
            </div>
          </div>
        </div>  
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <label class="form-label">Tahun Lulus<span class="form-required">*</span></label>
                    <input type="text" name="thn_lulus_pendaftar" class="form-control" required />
            </div>
          </div>
        </div>
        <h4 style="border-bottom: 1px dotted #212121; margin-top: 50px;">Pilih Jurusan</h4>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Pilihan <span class="form-required">*</span></label>
                    <select class="form-control" name="id_jurusan" required>
                      <option value="MULTIMEDIA">MULTIMEDIA</option>
                      <option value="PERBANKAN">PERBANKAN</option>
                    </select>
                </div>
            </div>
            <!-- <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Pilihan 2<span class="form-required">*</span></label>
                    <select class="form-control" name="id_jurusan" required>
                        <option value="MULTIMEDIA">MULTIMEDIA</option>
                        <option value="PERBANKAN">PERBANKAN</option>
                    </select>
                </div>
            </div> -->
        </div>
        <h4 style="border-bottom: 1px dotted #212121">Data Orang Tua</h4>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  <label class="form-label">Nama Ayah<span class="form-required">*</span></label>
                  <input type="text" name="nama_ayah_pendaftar" class="form-control" required />
                </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label">Nama Ibu<span class="form-required">*</span></label>
                <input type="text" name="nama_ibu_pendaftar" class="form-control" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label">Pekerjaan Orang Tua<span class="form-required">*</span></label>
                <input type="text" name="prj_orang_tua_pendaftar" class="form-control" required>
              </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Pendapatan Per Bulan<span class="form-required">*</span></label>
                    <select class="form-control" name="ppn_orang_tua_pendaftar" required>
                        <option value="islam">Rp.500 rb - Rp.1 Jt</option>
                        <option value="katholik">Rp.1 Jt - Rp.2 Jt</option>
                        <option value="protestan">Di Atas Rp.2 Jt</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Pendidikan Terakhir Orang Tua<span class="form-required">*</span></label>
                    <select class="form-control" name="pendidikan_orang_tua_pendaftar" required>
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
        <div class="form-group">
          <label class="form-label">Alamat Jalan/Blok<span class="form-required">*</span></label>
          <textarea name="almt_jl_orang_tua_pendaftar" rows="2" class="form-control" required ></textarea>
        </div>
        <div class="form-group">
          <label class="form-label">Alamat Desa/Kelurahan<span class="form-required">*</span></label>
          <textarea name="almt_desa_orang_tua_pendaftar" rows="2" class="form-control" required ></textarea>
        </div>
        <div class="form-group">
          <label class="form-label">RT/RW<span class="form-required">*</span></label>
          <textarea name="almt_rt_rw_orang_tua_pendaftar" rows="2" class="form-control" required></textarea>
        </div>
        <div class="form-group">
          <label class="form-label">Kecamatan<span class="form-required">*</span></label>
          <textarea name="almt_kec_orang_tua_pendaftar" rows="2" class="form-control" required></textarea>
        </div>
        <div class="form-group">
          <label class="form-label">Kabupaten<span class="form-required">*</span></label>
          <textarea name="almt_kab_orang_tua_pendaftar" rows="2" class="form-control" required></textarea>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  <label class="form-label">No Hp Orang Tua<span class="form-required">*</span></label>
                  <input type="text" name="telp_hp_orang_tua_pendaftar" placeholder="08xxxxxx" class="form-control" required />
                </div>
            </div>
        </div>
        <div class="form-group">
          <label class="form-label">Foto/Scan Kartu Keluarga <span class="form-required">*</span></label>
          <input type="file" name="file_kk_pendaftar" class="form-control" required />
        </div>
        <div class="form-group">
          <label class="form-label">Foto/Scan Akte <span class="form-required">*</span></label>
          <input type="file" name="file_akte_pendaftar" class="form-control" required= />
        </div>
        <div class="form-group">
          <label class="form-label">Foto/Scan KTP Orang Tua <span class="form-required">*</span></label>
          <input type="file" name="file_ktp_orang_tua_pendaftar" class="form-control" required />
        </div>
        <div class="form-group">
          <label class="form-label">Foto/Scan Ijazah <span class="form-required">*</span></label>
          <input type="file" name="file_ijazah_pendaftar" class="form-control" required />
        </div>
        <div class="form-group">
          <label class="form-label">Foto/Scan SKHUN <span class="form-required">*</span></label>
          <input type="file" name="file_skhun_pendaftar" class="form-control"  required />
        </div>
    </div>
    <div class="card-footer">
          <div class="btn-list">
            <button type="reset" class="btn btn-default"><i class="fa fa-refresh"></i> Reset</button>
            <button type="submit" name="daftar" class="btn btn-primary ml-auto"><i class="fa fa-user-plus"></i> Daftar Sekarang</button>
          </div>
        </div>
  </form>
</div>