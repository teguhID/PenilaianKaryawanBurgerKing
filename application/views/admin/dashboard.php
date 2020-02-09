<?php
    $this->load->view('admin/layout/header');
?>

                <!-- /. TOOGLE NAVBAR  -->
                <div class="row" style="display: none;">
				    <div class="col-md-5">
                    <div class="panel panel-default">
						<div class="panel-body">
							<div id="morris-area-chart"></div>
						</div>
					</div>   
					</div>		
					
					<div class="col-md-7">
					<div class="panel panel-default">
						<div class="panel-body">
							<div id="morris-line-chart"></div>
						</div>
					</div>  
					</div>
				</div> 
                <div class="row" style="display: none;">
                    <div class="col-md-9 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div id="morris-bar-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div id="morris-donut-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /. TOOGLE NAVBAR  -->

                <div class="row">
                    <div class="col-md-1">
                        <h1 class="page-header">
                           <img src="<?php echo base_url('assets/img/logo.png'); ?>" width="60" height="60"/>
                        </h1>
                    </div>
                    <div class="col-md-1">
                        <h1 class="page-header">
                            Dashboard
                        </h1>
                    </div>
                </div>
				
				
                <!-- /. ROW  -->

                <div class="row">

                    <div class="col-md-3">
                        <div class="card text-white mb-3" style="background-color:#2ecc71; border-radius: 25px; padding-bottom:20px; margin-bottom:25px">
                            <div class="card-body" style="padding:40px">
                                <p class="text-center" style="font-size:80px; font-weight:bold; color:white"><?php echo $jumlahKaryawan?></p>
                            </div>
                            <div class="card-footer"><p class="text-center" style="font-weight: bold; color:white">Jumlah Karyawan</p></div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card text-white mb-3" style="background-color:#f1c40f; border-radius: 25px; padding-bottom:20px; margin-bottom:25px">
                            <div class="card-body" style="padding:40px">
                                <p class="text-center" style="font-size:30px;font-weight: bold;"><?php echo $terbaik->nama . ' : ' . $terbaik->nilai?></p>
                            </div>
                            <div class="card-footer"><p class="text-center" style="font-weight: bold;">Karyawan Terbaik</p></div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card text-white mb-3" style="background-color:#3498db; border-radius: 25px; padding-bottom:20px; margin-bottom:25px">
                            <div class="card-body" style="padding:40px">
                                <p class="text-center" style="font-size:80px;font-weight: bold; color:white"><?php echo number_format($rata2Nilai,1)?></p>
                            </div>
                            <div class="card-footer"><p class="text-center" style="font-weight: bold; color:white">Nilai Rata-Rata</p></div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card text-white" style="background-color:#bdc3c7; border-radius: 25px; padding-bottom:20px; margin-bottom:25px">
                            <div class="card-header text-center" style="padding-top: 20px">
                                <h4><strong>Data Karyawan</strong></h4>
                            </div>    
                            <div class="card-body" style="padding:40px">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Jabatan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=1; foreach ($karyawan as $data) { ?>
                                        <tr>
                                            <th><?php echo $no++?></th>
                                            <td><?php echo $data['nama']?></td>
                                            <td><?php echo $data['jabatan']?></td>
                                        </tr>
                                    <?php }?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer text-right" style="margin-right: 40px">
                                <a href="<?php echo site_url('Route/Karyawan')?>" style="color:black">Detail ></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <div class="card text-white" style="background-color:#3498db; color:white; border-radius: 25px; padding-bottom:20px; margin-bottom:25px">
                            <div class="card-header text-center" style="padding-top: 20px">
                                <h4><strong>Nilai Karyawan</strong></h4>
                            </div>    
                            <div class="card-body" style="padding:40px">
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Jabatan</th>
                                        <th scope="col">Nilai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1; foreach ($nilaiKaryawan as $data) { ?>
                                            <tr>
                                                <th><?php echo $no++?></th>
                                                <td><?php echo $data['nama']?></td>
                                                <td><?php echo $data['jabatan']?></td>
                                                <td><?php echo $data['nilai']?></td>
                                            </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer text-right" style="margin-right: 40px">
                                <a href="<?php echo site_url('Route/HasilSemuaKaryawan')?>" style="color:white">Detail ></a>
                            </div>
                        </div>
                    </div>
                     <?php if ($this->session->jabatan == 'Operational Manager' || $this->session->jabatan == 'admin') { ?>
                    <div class="col-md-4">
                        <div class="card text-white bg-primary" style="border-radius: 25px; padding-bottom:20px; margin-bottom:25px">
                            <div class="card-header text-center" style="padding-top: 20px">
                                <h4><strong>Bobot</strong></h4>
                            </div>    
                            <div class="card-body" style="padding:40px">
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Bobot</th>
                                        <th scope="col">Nilai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($bobot as $data) { ?>
                                            <tr>
                                                <th>1</th>
                                                <th>Absensi</th>
                                                <td><?php echo $data['absensi']?></td>
                                            </tr>
                                            <tr>
                                                <th>2</th>
                                                <td>Attitude</td>
                                                <td><?php echo $data['attitude']?></td>
                                            </tr>
                                            <tr>
                                                <th>3</th>
                                                <td>Skill</td>
                                                <td><?php echo $data['skill']?></td>
                                            </tr>
                                            <tr>
                                                <th>4</th>
                                                <td>Performa</td>
                                                <td><?php echo $data['performa']?></td>
                                            </tr>
                                            <tr>
                                                <th>5</th>
                                                <td>Leadership</td>
                                                <td><?php echo $data['leadership']?></td>
                                            </tr>
                                            <tr>
                                                <th>6</th>
                                                <td>Knowledge</td>
                                                <td><?php echo $data['knowledge']?></td>
                                            </tr>
                                            <tr>
                                                <th>7</th>
                                                <td>Speak</td>
                                                <td><?php echo $data['speak']?></td>
                                            </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer text-right" style="margin-right: 40px">
                                <a href="<?php echo site_url('Route/Bobot')?>" style="color:white">Detail ></a>
                            </div>
                        </div>
                    </div>
                    <?php } else{ ?>

                    <?php }?>
                </div>
                
                <!-- /. ROW  -->

<script>
$(document).ready(function () {
    $('#Dashboard').addClass('active-menu');
    $('#Karyawan').removeClass('active-menu');
    $('#Bobot').removeClass('active-menu');
    $('#Attribut').removeClass('active-menu');
    $('#Normalisasi').removeClass('active-menu');
    $('#Reward').removeClass('active-menu');
    $('#Hasil').removeClass('active-menu');
});
</script>

<?php
    $this->load->view('admin/layout/footer');
?>