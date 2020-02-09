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
                    Karyawan Terbaik
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
            <?php $noImg=1; $noJuara=1; foreach ($Terbaik as $data) { ?>
            <div class="col-md-4 text-center">
                <div class="card w-75">
                <img src="<?php echo base_url(); ?>karyawan/<?php echo $noImg++ . '.png'?>" class="card-img-top" style="height: 3vw"><br><br>
                <img src="<?php echo base_url(); ?>karyawan/<?php echo $data['foto']?>" class="card-img-top" style="height: 8vw">
                <div class="card-body">
                    <h4 class="card-title"><a style="color:black; text-decoration: none" href="<?php echo site_url('Route/DetailDataKaryawan/' . $data['id'])?>"><strong><?php echo $data['nama']?></strong></a></h4>
                    <h4 class="card-title"><?php echo $data['jabatan']?></h4>
                    <p class="card-text"><?php echo $dataReward->{'juara' . $noJuara++} ?></p>
                </div>
                </div>
            </div>
            <?php }?>
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