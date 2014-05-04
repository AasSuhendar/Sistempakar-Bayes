 <div class="container-fluid main-content"><div class="page-title">
  <h1>
<?= $keterangan;?>
  </h1>
</div>
<div class="row">
  <div class="col-lg-12">
    <div class="widget-container fluid-height clearfix">
     
      <div class="widget-content padded">
	  <?= form_open(base_url('admin/simpan_diagnosa')); ?>
        
          <div class="form-group">
            <label class="control-label col-md-2">Nama Diagnosa</label>
            <div class="col-md-7">
              <input class="form-control" placeholder="Nama Diagnosa" name="ket" value="<?= $ket;?>"type="text">
            </div>
          </div>
         
          <div class="form-group">
            <label class="control-label col-md-2"></label>
            <div class="col-md-7">
			  <input type="hidden" name="st" value="<?= $st; ?>">
			  <input type="hidden" name="id_diagnosa" value="<?= $id_diagnosa; ?>">
              <button class="btn btn-primary" href="asdad" type="submit">Submit</button><button class="btn btn-default-outline">Cancel            </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>