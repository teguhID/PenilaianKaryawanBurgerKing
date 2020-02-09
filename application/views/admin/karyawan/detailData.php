<?php
    $this->load->view('admin/layout/header');
?>

       <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    Detail Karyawan
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
        <?php foreach ($karyawan as $data) { ?>
        
            <div class="col-md-2">
                <img src="<?php echo base_url(); ?>karyawan/<?php echo $data['foto']?>" style="height: 12vw">
            </div>

            <div class="col-md-10">
                <hr style="border: 1px solid gray; margin:5px">
                <h4 style="margin-bottom: 20px"><strong>Biodata Singkat</strong></h4>
                <div class="row">
                    <div class="col-md-3"> Nama </div>
                    <div class="col-md-4"> : <?php echo $data['nama']?> </div>
                </div>
                <div class="row">
                    <div class="col-md-3"> Jenis Kelamin </div>
                    <div class="col-md-4"> : <?php echo $data['gender']?> </div>
                </div>
                <div class="row">
                    <div class="col-md-3"> Jabatan </div>
                    <div class="col-md-4"> : <?php echo $data['jabatan']?> </div>
                </div>
                <div class="row">
                    <div class="col-md-3"> Tempat Tanggal Lahir </div>
                    <div class="col-md-4"> : <?php echo $data['tempatLahir'] . ' / ' . date("d-m-Y", strtotime($data['tanggalLahir']))?>  </div>
                </div>
                <div class="row">
                    <div class="col-md-3"> Kontak Hp </div>
                    <div class="col-md-4"> : <?php echo $data['kontak']?>  </div>
                </div><br>

                <hr style="border: 1px solid gray; margin-top:15px; margin-bottom:10px">

                <h4 style="margin-bottom: 20px"><strong>Nilai</strong></h4>
                <div class="row">
                    <div class="col-md-3"> Absensi </div>
                    <div class="col-md-4"> : <?php echo $data['absensi']?> </div>
                </div>
                <div class="row">
                    <div class="col-md-3"> Attitude </div>
                    <div class="col-md-4"> : <?php echo $data['attitude']?> </div>
                </div>
                <div class="row">
                    <div class="col-md-3"> Skill </div>
                    <div class="col-md-4"> : <?php echo $data['skill']?> </div>
                </div>
                <div class="row">
                    <div class="col-md-3"> Performa </div>
                    <div class="col-md-4"> : <?php echo $data['performa']?> </div>
                </div>
                <div class="row">
                    <div class="col-md-3"> Leadership </div>
                    <div class="col-md-4"> : <?php echo $data['leadership']?> </div>
                </div>
                <div class="row">
                    <div class="col-md-3"> Knowledge </div>
                    <div class="col-md-4"> : <?php echo $data['knowledge']?> </div>
                </div>
                <div class="row">
                    <div class="col-md-3"> Speak </div>
                    <div class="col-md-4"> : <?php echo $data['speak']?> </div>
                </div>
                <div class="row">
                    <div class="col-md-4"> <h4><strong>Nilai Keseluruhan</strong></h4> </div>
                    <div class="col-md-5"><h4><strong> : <?php echo $data['nilai']?> </strong></h4> </div>
                </div>
            </div>
        <?php }; ?>

<script>
$(document).ready(function () {
    $('#Dashboard').removeClass('active-menu');
    $('#Karyawan').addClass('active-menu');
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