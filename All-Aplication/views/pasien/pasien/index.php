 <div class="container-fluid main-content"><div class="page-title">
  <h1>
<?= $keterangan;?>
  </h1>
</div>
<div class="row">
  <div class="col-lg-12">
    <div class="widget-container fluid-height clearfix">
     
      <div class="widget-content padded">
	  <?= form_open(base_url('pasien/simpan')); ?>
	  <div class="row">
  <div class="col-md-12">
    <div class="widget-container">
      <div class="heading">
        <i class="fa fa-shield"></i>Data Pasien
      </div>
      <div class="widget-content padded">
     
          <fieldset>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="firstname">Nama :</label><input class="form-control" id="nama" name="nama" type="text">
                </div>
                <div class="form-group">
                  <label for="username">Tanggal Lahir :</label> <div class="input-group date datepicker" data-date-autoclose="true" data-date-format="dd-mm-yyyy">
                <input class="form-control" name="umur" type="text"><span class="input-group-addon"><i class="fa fa-calendar"></i></span></input>
              </div>
                </div>
                <div class="form-group">
                  <label for="password">Jenis Kelamin :</label><select class="form-control" name="jk" ><option value="L">LAKI-LAKI</option>
					 <option value="P">PEREMPUAN</option> </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="lastname">No Telp : </label><input class="form-control" data-inputmask="'mask': ['(999) 999-9999']" id="telp" name="telp" type="text">
                </div>
                <div class="form-group">
                  <label for="email">Email :</label><input class="form-control" id="email" name="email" type="email">
                </div>
               
              </div>
         
      </div>
    </div>
  </div>
</div>
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
			  <input type="hidden" name="id" value="<?= md5(rand()); ?>">
			  <input type="hidden" name="t" value="<?= $no-1; ?>" />
			  <input type="hidden" name="id_diagnosa" value="<?= $id_diagnosa; ?>">
              <button class="btn btn-primary" type="submit">Submit</button><button class="btn btn-default-outline">Cancel            </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>