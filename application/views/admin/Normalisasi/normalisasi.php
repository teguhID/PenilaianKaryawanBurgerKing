<?php
    $this->load->view('admin/layout/header');
?>

         <div class="row">
            <div class="col-md-1">
                <h1 class="page-header">
                    <img src="<?php echo base_url('assets/img/logo.png'); ?>" width="60" height="60"/>
                </h1>
            </div>
            <div class="col-md-8">
                <h1 class="page-header">
                    Normalisasi
                </h1>
            </div>
        </div>

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
                <div class="col-md-12 col-sm-12 col-xs-12">

                    <div class="panel ">
                        <div class="panel-body">
                            <div class="table-responsive">
                                    <table class="table table-hover" id="tabel">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Jabatan</th>
                                                <th>Absensi</th>
                                                <th>Attitude</th>
                                                <th>Skill</th>
                                                <th>Performa</th>
                                                <th>Leadership</th>
                                                <th>Knowledge</th>
                                                <th>Speak</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($karyawan as $data) { ?>
                                            <tr>
                                                <td><?php echo $no++?></td>
                                                <td><a style="color:black; text-decoration: none" href="<?php echo site_url('Route/DetailDataKaryawan/' . $data['id'])?>"><strong><?php echo $data['nama']?></strong></a></td>
                                                <td><?php echo $data['jabatan']?></td>
                                                <td><?php echo $data['nAbsensi']?></td>
                                                <td><?php echo $data['nAttitude']?></td>
                                                <td><?php echo $data['nSkill']?></td>
                                                <td><?php echo $data['nPerforma']?></td>
                                                <td><?php echo $data['nLeadership']?></td>
                                                <td><?php echo $data['nKnowledge']?></td>
                                                <td><?php echo $data['nSpeak']?></td>
                                            </tr>
                                        <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

<script>
$(document).ready(function () {
    $('#Dashboard').removeClass('active-menu');
    $('#Karyawan').removeClass('active-menu');
    $('#Bobot').removeClass('active-menu');
    $('#Attribut').removeClass('active-menu');
    $('#Normalisasi').addClass('active-menu');
    $('#Reward').removeClass('active-menu');
    $('#Hasil').removeClass('active-menu');
});
</script>

<?php
    $this->load->view('admin/layout/footer');
?>