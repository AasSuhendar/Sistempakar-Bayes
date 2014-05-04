  <div class="container-fluid main-content">
        <div class="page-title">
          <h1>
            Hasil Diagnosa Penyakit
          </h1>
        </div>
        <div class="invoice">
          <div class="row">
            <div class="col-lg-12">
              <div class="row invoice-header">
                <div class="col-md-6">
                  <img width="183" src="<?= base_url();?>lucetechno/images/dokter.jpg" />
                </div>
                <div class="col-md-6 text-right">
                  <h2>
                    #<?= $this->uri->segment(3);?>
                  </h2>
                  <p>
                  <?= date('d-m-Y');?>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="well">
                <strong>TO</strong>
                <h3>
		
                 <?= $data['nama'];?>
                </h3>
                <p>
                  <br>Umur : <?= $data['umur'];?> Tahun<br>Telp : <?= $data['telp'];?><br><?= $data['email'];?></br></br>
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="well">
                <strong>Hasil</strong>
                <h3>
                  <?
				  if( $plus > $min )
				  {
				  echo '<div class="alert alert-danger">Anda Kemungkinan terindikasi penyakit leukemia, Untuk kepastiannya silahkan anda konsultasikan sama dokter</div>';
				  }
				  else
				  {
				  echo '<div class="alert alert-success">Kemungkinan anda tidak terindikasi penyakit leukemia, Jaga Kesehatan anda selalu</div>';
				  }
				  
				  
				  
				  ?>
				
				  
                </h3>
                <p>
				
                 Semua Informasi dan predikasi menggunakan metoda Teorema Bayes
                </p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="widget-container fluid-height">
                <div class="widget-content padded clearfix">
                  <table class="table table-striped invoice-table">
                    <thead>
                      <th width="50"></th>
                      <th>
                       Gejala
                      </th>
                      <th width="70">
                        Hasil
                      </th>
                     
                      
                    </thead>
                    <tbody>
						<?php
		$no=1;
		foreach($hasil->result_array() as $dp)
		{
	?>
                      <tr>
                        <td>
                          #<?= $no;?>
                        </td>
                        <td>
                         <? $a=$dp['id_diagnosa'];?>
						 <?= $this->rule->gejala($a);?>
                        </td>
                        <td>
                          <?= $dp['nilai'];?>
                        </td>
                        
                      </tr>
                      <? $no++; } ?>
                      
                    </tbody>
                    <tfoot>
                      <tr>
                        <td class="text-right" colspan="2">
                          <strong>Total Hasil "YA"</strong>
                        </td>
                        <td>
                          <?= $plus;?>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-right" colspan="2">
                          <strong>Total Hasil "Tidak"</strong>
                        </td>
                        <td>
                          <?= $min;?>
                        </td>
                      </tr>
                  
                      
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="well">
                <strong>NOTES</strong>
     
 <div class="alert alert-success">
Begitu banyak orang menghabiskan kesehatan mereka untuk mendapatkan kekayaan, dan kemudian harus menghabiskan kekayaan mereka untuk mendapatkan kembali kesehatan mereka                     
                     
                    </div> 
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <a class="btn btn-primary pull-right" onclick="javascript:window.print();"><i class="fa fa-print"></i>Print invoice</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  