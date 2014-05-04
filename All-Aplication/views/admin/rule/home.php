      <div class="container-fluid main-content">
        <div class="page-title">
          <h1>
         Master Rule
          </h1>
        </div>

              <div class="heading">
             <a class="btn btn-sm btn-primary-outline pull-right" href="<?= base_url();?>rule/tambah" ><i class="fa fa-plus"></i>Tambah Rule</a>
              </div>
              <div class="widget-content padded clearfix">
                <table class="table table-bordered">
                  <thead>
                    <th>
                      Kode Rule</th>
		        
                  
                  	  <?
		
				  	foreach($diagnosa->result_array() as $data)
					   { ?>
					   <th> <? $b=$data['id_diagnosa'];?> <?= $data['ket'];?></th> <? }
			   ?>

                  </thead>
               <tbody>
	  <?
				  	foreach($kd->result_array() as $data)
					   { ?>
		
					<tr><td>RL<?= $a=$data['id_rule'];?></td>
					
					  <?
		
				  	foreach($diagnosa->result_array() as $data)
					   { ?>
					   <th><? $b=$data['id_diagnosa'];?>
					   <?
						$q = $this->db->query("select aksi from rule where id_rule='".$a."' and id_gejala='".$b."'");
					   foreach($q->result() as $q) { ?> <? $c= $q->aksi;
					   if( $c == 1 )
					   {
					   echo "YA";
					   }
					   else
					   {
					   echo "TIDAK";
					   }
					   
					   ?>
					<?   } ?></th> 
					<? }  ?>

		 <td></td>
		 </tr>
					 <? } ?>
                      
                
                      	  
					
                  </tbody>
	
				  </table>
              </div>
            </div>
          </div>
        </div>
        <!-- end DataTables Example -->