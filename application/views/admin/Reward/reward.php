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
                    Reward
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
        <?php foreach ($reward as $data) { ?>
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="text-right">
                            <a name="" id="" class="btn btn-info" href="<?php echo site_url('Route/EditDataReward')?>" role="button"><i class="fa fa-pencil"></i></a>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="row" style="padding-left:40px">
                            <div class="col-md-4">
                                <span class="float-md-left">Juara 1</span>
                            </div>
                            <div class="col-md-4">
                                <span class="float-md-right">: <?php echo $data['juara1']?></span>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="row" style="padding-left:40px">
                            <div class="col-md-4">
                                <span class="float-md-left">Juara 2</span>
                            </div>
                            <div class="col-md-4">
                                <span class="float-md-right">: <?php echo $data['juara2']?></span>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <div class="row" style="padding-left:40px">
                            <div class="col-md-4">
                                <span class="float-md-left">Juara 3</span>
                            </div>
                            <div class="col-md-4">
                                <span class="float-md-right">: <?php echo $data['juara3']?></span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <?php }?>
<script>
$(document).ready(function () {
    $('#Dashboard').removeClass('active-menu');
    $('#Karyawan').removeClass('active-menu');
    $('#Bobot').removeClass('active-menu');
    $('#Attribut').removeClass('active-menu');
    $('#Normalisasi').removeClass('active-menu');
    $('#Reward').addClass('active-menu');
    $('#Hasil').removeClass('active-menu');
});
</script>

<?php
    $this->load->view('admin/layout/footer');
?>