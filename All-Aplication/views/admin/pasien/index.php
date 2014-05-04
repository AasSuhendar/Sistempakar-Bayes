 <!-- DataTables Example -->
        <div class="row">
          <div class="col-lg-12">
            <div class="widget-container fluid-height clearfix">
              <div class="heading">
                <i class="fa fa-table"></i>Log Konsultasi
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
                      Umur
                    </th>
                    <th class="hidden-xs">
                     Jenis Kelamin
                    </th>
                    <th class="hidden-xs">
                     Telp
                    </th>
					  <th class="hidden-xs">
                     Email
                    </th>
                
                  </thead>
                  <tbody>
				    <?
				  $no=1;
				  	foreach($pasien->result_array() as $data)
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
                          <?= $data['umur']; ?>
                      </td>
                      <td class="hidden-xs">
                        <? $a=$data['jk']; 
						if ( $a=="L" )
						{
						echo "LAKI-LAKI";
						}
						else{
						echo "PEREMPUAN";
						}?>
                      </td>
                      <td class="hidden-xs">
                          <?= $data['telp']; ?>
                      </td>
                      <td>
                         <?= $data['email']; ?>
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