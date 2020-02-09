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
                    Hasil Semua Karyawan
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
                                                <th class="text-center" width="10%">Ranking</th>
                                                <th class="text-center" width="50%">Nama</th>
                                                <th class="text-center" width="30%">Jabatan</th>
                                                <th class="text-center" width="10%">Nilai</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1; foreach ($karyawan as $data) { ?>
                                            <tr>
                                                <td class="text-center"><?php echo $no++?></td>
                                                <td class="text-center"><a style="color:black; text-decoration: none" href="<?php echo site_url('Route/DetailDataKaryawan/' . $data['id'])?>"><strong><?php echo $data['nama']?></strong></a></td>
                                                <td class="text-center"><?php echo $data['jabatan']?></td>
                                                <td class="text-center"><?php echo $data['nilai']?></td>
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
    $('#Normalisasi').removeClass('active-menu');
    $('#Reward').removeClass('active-menu');
    $('#Hasil').addClass('active-menu');
});
</script>

<?php
    $this->load->view('admin/layout/footer');
?>