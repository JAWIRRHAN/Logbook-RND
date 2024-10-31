                
 



 
<?php


include "header.php";


?>



<script type="text/javascript" src="chartjs/Chart.js"></script>
                      
            
                       
<?php 
	include 'koneksi.php';
   
	?>
 <br>


 <div class="box" style="width: 40%; margin-left: 18%; margin-top: 0.5%">
	
	<div class="box-header">
		<h3 class="box-title">Grafik Data Logbook R&D</h3>                                    
	</div><!-- /.box-header -->
	<div class="box-body table-responsive">
		<table id="example1" class="table table-bordered table-striped" style="font-size: 80%">
                                <canvas id="myChart"></canvas>
								</table>
                            </div>
							
							</div>
                            <br>
                            <br><br>



                          
                            <?php 
                            $lr = mysqli_query($koneksi,"select * from form_list WHERE id");
                            $lr1 = mysqli_num_rows($lr);
                            ?>
                            <?php 
                            $ps = mysqli_query($koneksi,"select * from pengemesan_sampel where  id");
                            $ps1 = mysqli_num_rows($ps);
                            ?>
                            <?php 
                            $hg = mysqli_query($koneksi,"select * from homogen where  id");
                            $hg1 = mysqli_num_rows($hg);
                            ?>
                            <?php 
                            $sm = mysqli_query($koneksi,"select * from konsumen where  id");
                            $sm1 = mysqli_num_rows($sm);
                            ?>
                            <?php 
                            $rn = mysqli_query($koneksi,"select * from peminjaman where  id");
                            $rn1 = mysqli_num_rows($rn);
                            ?>
                            <?php 
                            $sb = mysqli_query($koneksi,"select * from base where  id");
                            $sb1 = mysqli_num_rows($sb);
                            ?>
                            <?php 
                            $os = mysqli_query($koneksi,"select * from alat where  id");
                            $os1 = mysqli_num_rows($os);
                            ?>
							 <?php 
                            $ab = mysqli_query($koneksi,"select * from alat_blender where  id");
                            $ab1 = mysqli_num_rows($ab);
                            ?>
							 <?php 
                            $km = mysqli_query($koneksi,"select * from kamera where  id");
                            $km1 = mysqli_num_rows($km);
                            ?>
							 <?php 
                            $hp = mysqli_query($koneksi,"select * from hotplate where  id");
                            $hp1 = mysqli_num_rows($hp);
                            ?>
							 <?php 
                            $at = mysqli_query($koneksi,"select * from alat_tokebi where  id");
                            $at1 = mysqli_num_rows($at);
                            ?>

<div class="box" style="width: 40%; margin-left: 59%; margin-top: -31.2%">
	
                                <div class="box-header">
                                    <h3 class="box-title">Data Logbook R&D</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped" style="font-size: 80%">
                                        <thead>
                                            <tr>
                                                <th style="background-color: blue; color: white;" width="20%"><center>Kode</center></th>
                                                <th style="background-color: blue; color: white;" width="60%"><center>Deskripsi</center></th>
                                                <th style="background-color: blue; color: white;" width="20%"><center>Total Data</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <tr>
                                                <td><center>LR</center></td>
                                                <td>Logbook List Data Retain</td>
                                                <td><center><?php echo $lr1?></center></td>
                                                </tr>
                                                <tr>
                                                <td><center>PS</center></td>
                                                <td>Logbook Pengemasan Sampel</td>
                                                <td><center><?php echo $ps1?></center></td>
                                                </tr>
                                                <tr>
                                                <td><center>HG</center></td>
                                                <td>Logbook Penggunaan Alat Homogenizer</td>
                                                <td><center><?php echo $hg1?></center></td>
                                                </tr>
                                                <tr>
                                                <td><center>SM</center></td>
                                                <td>Logbook Data Penyerahan Sampel Micro Stabtest</td>
                                                <td><center><?php echo $sm1?></center></td>
                                                </tr>
                                                <tr>
                                                <td><center>RN</center></td>
                                                <td>Logbook Peminjaman Retain R&D Departement</td>
                                                <td><center><?php echo $rn1?></center></td>
                                                </tr>
                                                <tr>
                                                <td><center>SB</center></td>
                                                <td>Logbook Serah Terima Base</td>
                                                <td><center><?php echo $sb1?></center></td>
                                                </tr>
                                                <td><center>OS</center></td>
                                                <td>Logbook Penggunaan Alat Overhead Stirrer</td>
                                                <td><center><?php echo $os1?></center></td>
                                                </tr>
                                                <tr>
                                                <td><center>AB</center></td>
                                                <td>Logbook Alat Blender</td>
                                                <td><center><?php echo $ab1?></center></td>
                                                </tr>
                                                <tr>
                                                <td><center>KM</center></td>
                                                <td>Logbook Penggunaan Kamera R&D</td>
                                                <td><center><?php echo $km1?></center></td>
                                                </tr>
                                                <tr>
                                                <td><center>HP</center></td>
                                                <td>Logbook Penggunaan Alat Hotplate</td>
                                                <td><center><?php echo $hp1?></center></td>
                                                </tr>
                                                <tr>
                                                <td><center>AT</center></td>
                                                <td>Logbook Penggunaan Alat Tokebi</td>
                                                <td><center><?php echo $at1?></center></td>
                                                </tr>
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>


                       

                   
                    
                        
                 
        
        <!-- <script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: ['LR', 'PS', 'HG', 'SM', 'RN', 'SB', 'OS', 'AB', 'KM', 'HP', 'AT',],
				datasets: [{
					// label: '',
					data: [
					<?php 
					$no_form = mysqli_query($koneksi,"select * from form_list WHERE id");
					echo mysqli_num_rows($no_form);
					?>,
					<?php 
					$no_form = mysqli_query($koneksi,"select * from pengemesan_sampel where  id");
					echo mysqli_num_rows($no_form);
					?>,
                    <?php 
					$no_form = mysqli_query($koneksi,"select * from homogen where  id");
					echo mysqli_num_rows($no_form);
					?>,
                    <?php 
					$no_form = mysqli_query($koneksi,"select * from konsumen where  id");
					echo mysqli_num_rows($no_form);
					?>,
                    <?php 
					$no_form = mysqli_query($koneksi,"select * from peminjaman where  id");
					echo mysqli_num_rows($no_form);
					?>,
                    <?php 
					$no_form = mysqli_query($koneksi,"select * from base where  id");
					echo mysqli_num_rows($no_form);
					?>,
                    <?php 
					$no_form = mysqli_query($koneksi,"select * from alat where  id");
					echo mysqli_num_rows($no_form);
					?>,
					<?php 
					$no_form = mysqli_query($koneksi,"select * from alat_blender where  id");
					echo mysqli_num_rows($no_form);
					?>,
					<?php 
					$no_form = mysqli_query($koneksi,"select * from kamera where  id");
					echo mysqli_num_rows($no_form);
					?>,
					<?php 
					$no_form = mysqli_query($koneksi,"select * from hotplate where  id");
					echo mysqli_num_rows($no_form);
					?>,
					<?php 
					$no_form = mysqli_query($koneksi,"select * from alat_tokebi where  id");
					echo mysqli_num_rows($no_form);
					?>,
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script> -->

<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var data = {
            labels: ['LR', 'PS', 'HG', 'SM', 'RN', 'SB', 'OS', 'AB', 'KM', 'HP', 'AT'],
				datasets: [
                    {
                    label: "",
                    data: [
                        <?php 
					$no_form = mysqli_query($koneksi,"select * from form_list WHERE id");
					echo mysqli_num_rows($no_form);
					?>,
					<?php 
					$no_form = mysqli_query($koneksi,"select * from pengemesan_sampel where  id");
					echo mysqli_num_rows($no_form);
					?>,
                    <?php 
					$no_form = mysqli_query($koneksi,"select * from homogen where  id");
					echo mysqli_num_rows($no_form);
					?>,
                    <?php 
					$no_form = mysqli_query($koneksi,"select * from konsumen where  id");
					echo mysqli_num_rows($no_form);
					?>,
                    <?php 
					$no_form = mysqli_query($koneksi,"select * from peminjaman where  id");
					echo mysqli_num_rows($no_form);
					?>,
                    <?php 
					$no_form = mysqli_query($koneksi,"select * from base where  id");
					echo mysqli_num_rows($no_form);
					?>,
                    <?php 
					$no_form = mysqli_query($koneksi,"select * from alat where  id");
					echo mysqli_num_rows($no_form);
					?>,
					<?php 
					$no_form = mysqli_query($koneksi,"select * from alat_blender where  id");
					echo mysqli_num_rows($no_form);
					?>,
					<?php 
					$no_form = mysqli_query($koneksi,"select * from kamera where  id");
					echo mysqli_num_rows($no_form);
					?>,
					<?php 
					$no_form = mysqli_query($koneksi,"select * from hotplate where  id");
					echo mysqli_num_rows($no_form);
					?>,
					<?php 
					$no_form = mysqli_query($koneksi,"select * from alat_tokebi where  id");
					echo mysqli_num_rows($no_form);
					?>,
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)'
					],
					borderWidth: 1
				}]
            
			};
            var myChart = new Chart(ctx,{
                type: 'line',
                data: data,
                options: {
                    legend: {
                        display: false
                    },
                    barValueSpacing: 20,
                    scales: {
                        yAxes: [{
                            ticks: {
                               min: 0,
                            }
                        }],
                        xAxes: [{
                            gridLines: {
                                color: "rgba(0,0,0,0)",
                            }
                        }]
                    }
                }
            })

	</script>





           

