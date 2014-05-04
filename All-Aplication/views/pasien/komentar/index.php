 <!-- End Navigation -->
      <div class="container-fluid main-content"><div class="page-title">
  <h1>
  <?= $keterangan;?>
  </h1>
</div>
<div class="row">
  <div class="col-lg-12">
    <div class="widget-container fluid-height clearfix">
           <div class="widget-content padded">
        <form action="<?= base_url();?>komentar/simpan" method="post" class="form-horizontal">
          <div class="form-group">
            <label class="control-label col-md-2">Nama : </label>
            <div class="col-md-7">
              <input class="form-control" placeholder="nama" name="nama" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-2">Email :</label>
            <div class="col-md-7">
             <input class="form-control" id="email" name="email" type="email">
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="control-label col-md-2">Pesan : </label>
            <div class="col-md-7">
             <textarea class="form-control" name="pesan" rows="3"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-2"></label>
            <div class="col-md-7">
              <button class="btn btn-primary" type="submit">Kirim</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>