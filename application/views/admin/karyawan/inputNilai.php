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
                    Input Nilai Karyawan
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
            <h1 class="page-header">
                <?php echo $data['nama'] . ' ' . '(' . $data['jabatan'] . ')'?>
            </h1>
        <form id="nilaiForm" action="<?php echo site_url('KaryawanController/InputNilaiKaryawan/' . $data['id']);?>" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Absensi</label>
                <input type="number" name="absensi" class="form-control"  value="<?php echo $data['absensi']?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Attitude</label>
                <input type="number" name="attitude" class="form-control"  value="<?php echo $data['attitude']?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Skill</label>
                <input type="number" name="skill" class="form-control"  value="<?php echo $data['skill']?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Performa</label>
                <input type="number" name="performa" class="form-control"  value="<?php echo $data['performa']?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Leadership</label>
                <input type="number" name="leadership" class="form-control"  value="<?php echo $data['leadership']?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Knowledge</label>
                <input type="number" name="knowledge" class="form-control"  value="<?php echo $data['knowledge']?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Speak</label>
                <input type="number" name="speak" id="speak" class="form-control"  value="<?php echo $data['speak']?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <?php }?>

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

<script>
$(document).ready(function () {
    $('#nilaiForm').validate({
        rules: {
            absensi: {
                required: true,
                number: true,
                min: 1,
                max: 100,
            },
            attitude: {
                required: true,
                number: true,
                min: 1,
                max: 100,
            },
            skill: {
                required: true,
                number: true,
                min: 1,
                max: 100,
            },
            performa: {
                required: true,
                number: true,
                min: 1,
                max: 100,
            },
            leadership: {
                required: true,
                number: true,
                min: 1,
                max: 100,
            },
            knowledge: {
                required: true,
                number: true,
                min: 1,
                max: 100,
            },
            speak: {
                required: true,
                number: true,
                min: 1,
                max: 100,
            },
        },
        messages: {
            absensi: {
                required: "Nilai Harus Terisi",
                number: "Input harus number",
                min: "minimal 1",
                max: "maksimal 100",
            },
            attitude: {
                required: "Nilai Harus Terisi",
                number: "Input harus number",
                min: "minimal 1",
                max: "maksimal 100",
            },
            skill: {
                required: "Nilai Harus Terisi",
                number: "Input harus number",
                min: "minimal 1",
                max: "maksimal 100",
            },
            performa: {
                required: "Nilai Harus Terisi",
                number: "Input harus number",
                min: "minimal 1",
                max: "maksimal 100",
            },
            leadership: {
                required: "Nilai Harus Terisi",
                number: "Input harus number",
                min: "minimal 1",
                max: "maksimal 100",
            },
            knowledge: {
                required: "Nilai Harus Terisi",
                number: "Input harus number",
                min: "minimal 1",
                max: "maksimal 100",
            },
            speak: {
                required: "Nilai Harus Terisi",
                number: "Input harus number",
                min: "minimal 1",
                max: "maksimal 100",
            },
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
});
</script>