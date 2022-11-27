<div class="modal-body">
                                        <form action="Pradika_MyItem.php" method="post" enctype="multipart/form-data">
                                            <div class="mb-3">
                                                <label for="nama_mobil" class="form-label fw-bold">Nama Mobil</label>
                                                <input type="text" class="form-control" id="nama_mobil" name="nama_mobil" value="<?= $data['nama_mobil']?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="pemilik" class="form-label fw-bold">Penulis</label>
                                                <input type="text" class="form-control" id="pemilik" name="pemilik" value="<?= $nama ?>" readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="merk_mobil" class="form-label fw-bold">Merk</label>
                                                <input type="text" class="form-control" id="merk_mobil" name="merk_mobil" value="<?= $data['merk_mobil']?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="tanggal_beli" class="form-label fw-bold">Tanggal</label>
                                                <input type="date" class="form-control" id="tanggal_beli" name="tanggal_beli" value="<?= $data['tanggal_beli']?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="deskripsi" class="form-label fw-bold">Deskripsi</label>
                                                <textarea class="form-control" rows="3" cols="30" name="deskripsi"> <?= preg_replace('~\x{00a0}~siu', '', $data['deskripsi']); ?> </textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label class="fw-bold">Foto</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="foto_mobil" name="foto_mobil">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="status_pembayaran" class="form-label fw-bold">Status Pembayaran</label>
                                                <div class="form-check form-check-inline" style="margin-left:15px">
                                                    <input class="form-check-input" type="radio" name="status_pembayaran" id="status_pembayaran" value="indonesia" <?php echo ($data['status_pembayaran']=='lunas' ? 'checked' : '');?>>
                                                    <label class="form-check-label" for="inlineRadio1">Lunas</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="status_pembayaran" id="status_pembayaran" value="lainnya" <?php echo ($data['status_pembayaran']=='belum lunas' ? 'checked' : '');?>>
                                                    <label class="form-check-label" for="inlineRadio2">Belum Lunas</label>
                                                </div>
                                            </div>
            
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                            </div>
                                        </form>
                                    </div>                                    
                                </div>