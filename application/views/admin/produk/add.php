<?php $this->load->view('admin/header'); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah Produk</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
                <div class="row">                                
                    <?php echo form_open_multipart(); ?>
                        <div class="form-group">
                            <label>Nama</label>
                            <input class="form-control" name="nama">               
                            <?php echo form_error('nama', '<p class="help-block">', '</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input class="form-control" name="harga">
                            <?php echo form_error('harga', '<p class="help-block">', '</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea class="form-control" rows="3" name="deskripsi"></textarea>
                            <?php echo form_error('deskripsi', '<p class="help-block">', '</p>'); ?>
                        </div>
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" name="gambar">
                        </div>
                        <div class="form-group">
                            <label>Stok</label>
                            <input class="form-control" name="stok">
                            <?php echo form_error('stok', '<p class="help-block">', '</p>'); ?>
                        </div>
                        
                        <button type="submit" class="btn btn-default">Submit Button</button>
                        <button type="reset" class="btn btn-default">Reset Button</button>
                    <?php echo form_close(); ?>
                </div>
        </div>
        <!-- /#page-wrapper -->
<?php $this->load->view('admin/footer'); ?>