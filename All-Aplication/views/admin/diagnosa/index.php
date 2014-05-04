      <div class="container-fluid main-content">
        <div class="page-title">
          <h1>
         Master Diagnosa
          </h1>
        </div>
        <!-- DataTables Example -->
        <div class="row">
          <div class="col-lg-12">
            <div class="widget-container fluid-height clearfix">
              <div class="heading">
             <a class="btn btn-sm btn-primary-outline pull-right" href="<?= base_url();?>admin/tambah_diagnosa" ><i class="fa fa-plus"></i>Tambah Diagnosaa</a>
              </div>
              <div class="widget-content padded clearfix">
                <table class="table table-bordered table-striped" id="dataTable1">
                  <thead>
                   
                    <th>
                      No
                    </th>
                    <th>
                    Nama Diagnosa
                    </th>
                    
                    <th></th>
                  </thead>
                  <tbody>
			  <?
				  $no=1;
				  	foreach($diagnosa->result_array() as $data)
					   {
			   ?>
                    <tr>
                      
                      <td>
                    <?= $no;?>
                      </td>
                      <td>
                       <?= $data['ket'];?>
                      </td>
                     
                      <td class="actions">
                        <div class="action-buttons">
                          <a class="table-actions" href="<?= base_url();?>admin/edit_diagnosa/<?= $data['id_diagnosa'];?>"><i class="fa fa-pencil"></i></a>
                        </div>
                      </td>
                    </tr>
					<? $no++; } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- end DataTables Example -->