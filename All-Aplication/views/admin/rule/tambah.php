 <div class="container-fluid main-content"><div class="page-title">
  <h1>
<?= $keterangan;?>
  </h1>
</div>
<div class="row">
  <div class="col-lg-12">
    <div class="widget-container fluid-height clearfix">
     
      <div class="widget-content padded">
	  <?= form_open(base_url('rule/simpan')); ?>
              <input class="form-control" placeholder="Hasil Diagnosa " name="kode" value="<?= md5(rand()); ?>" type="hidden">

        	    <table class="table table-bordered">
                  <thead>
                   
                    <th align="center">
                      Diagnosa
                    </th>
                    <th align="center">
                   Aksi
                    </th>
		
                  </thead>
                  <tbody>
			  <?
				  $no=1;
				  	foreach($diagnosa->result_array() as $data)
					   {
			   ?>
                    <tr>
                      <td align="center">
                       <?= $data['ket'];?>
					    <input type="hidden" name="diagnosa<?= $no;?>" value=" <?= $data['id_diagnosa'];?>">
                      </td>
                        <td>
                     <select class="form-control" name="aksi<?= $no;?>" ><option value="1">YA</option>
					 <option value="0">TIDAK</option>
					</select>
					
					
                      </td>
                    </tr>
					<? $no++ ; } ?>
                  </tbody>
                </table>
         
		  
          <div class="form-group">
            <label class="control-label col-md-2"></label>
            <div class="col-md-7">
			  <input type="hidden" name="st" value="<?= $st; ?>">
			  <input type="hidden" name="t" value="<?= $no-1; ?>" />
			  <input type="hidden" name="id_diagnosa" value="<?= $id_diagnosa; ?>">
              <button class="btn btn-primary" href="asdad" type="submit">Submit</button><button class="btn btn-default-outline">Cancel            </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>