<?php $this->load->view('admin/header'); ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah Produk</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
                <div class="row">                                
                    <form role="form">
                        <div class="form-group">
                            <label>Nama</label>
                            <input class="form-control" value="<?php echo $nama; ?>">               
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input class="form-control" value="<?php echo $harga; ?>">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea class="form-control" rows="3" ><?php echo $deskripsi; ?></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label>Gambar</label>
                            <br>
                            <img src="<?php echo $gambar; ?>">
                        </div>
                        <div class="form-group">
                            <label>Stok</label>
                            <input class="form-control" value="<?php echo $stok; ?>">
                        </div>
                        
                        <button type="submit" class="btn btn-default">Submit Button</button>
                        <button type="reset" class="btn btn-default">Reset Button</button>
                    </form>
                </div>
        </div>
        <!-- /#page-wrapper -->
<?php $this->load->view('admin/footer'); ?>