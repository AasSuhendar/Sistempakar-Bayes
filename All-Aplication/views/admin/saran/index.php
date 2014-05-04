 <!-- DataTables Example -->
        <div class="row">
          <div class="col-lg-12">
            <div class="widget-container fluid-height clearfix">
              <div class="heading">
                <i class="fa fa-table"></i>Kritik Dan Saran
              </div>
              <div class="widget-content padded clearfix">
                <table class="table table-bordered table-striped" id="datatable-editable">
                  <thead>
                    <th>
                      No
                    </th>
                    <th>
                      Nama
                    </th>
                    <th class="hidden-xs">
                      Pesan
                    </th>
                    <th class="hidden-xs">
                     Email
                    </th>
                    <th class="hidden-xs">
                     Waktu
                    </th>
					  <th class="hidden-xs">
                     IP Address
                    </th>
                
                  </thead>
                  <tbody>
				    <?
				  $no=1;
				  	foreach($pesan->result_array() as $data)
					   {
			   ?>
                    <tr>
                      <td>
                        <?= $no; ?>
                      </td>
                      <td>
                        <?= $data['nama']; ?>
                      </td>
                      <td class="hidden-xs">
                          <?= $data['pesan']; ?>
                      </td>
                      <td class="hidden-xs">
                        <?= $data['email']; ?>
                      </td>
                      <td class="hidden-xs">
                          <?= $data['waktu']; ?>
                      </td>
                      <td>
                         <?= $data['ip']; ?>
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
      </div>
    </div>