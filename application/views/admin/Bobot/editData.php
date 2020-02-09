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
                    Edit Data Bobot
                </h1>
            </div>
        </div>

        <?php foreach ($bobot as $data) { ?>
        <form id="bobotForm" action="<?php echo site_url('BobotController/EditBobot/' . $data['id']);?>" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Absensi</label>
                <input type="number" name="absensi" class="form-control"  step="any" required value="<?php echo $data['absensi']?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Attitude</label>
                <input type="number" name="attitude" class="form-control"  step="any" required value="<?php echo $data['attitude']?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Skill</label>
                <input type="number" name="skill" class="form-control"  step="any" required value="<?php echo $data['skill']?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Performa</label>
                <input type="number" name="performa" class="form-control"  step="any" required value="<?php echo $data['performa']?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Leadership</label>
                <input type="number" name="leadership" class="form-control"  step="any" required value="<?php echo $data['leadership']?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Knowledge</label>
                <input type="number" name="knowledge" class="form-control"  step="any" required value="<?php echo $data['knowledge']?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Speak</label>
                <input type="number" name="speak" class="form-control"  step="any" required value="<?php echo $data['speak']?>">
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top:20px">Submit</button>
        </form>
        <?php }?>
<script>
$(document).ready(function () {
    $('#Dashboard').removeClass('active-menu');
    $('#Karyawan').removeClass('active-menu');
    $('#Bobot').addClass('active-menu');
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
alert('asd')
$(document).ready(function () {
    $('#bobotForm').validate({
        rules: {
            absensi: {
                 step="any" required: true,
                number: true,
                min: 0.1,
                max: 0.9,
            },
            attitude: {
                 step="any" required: true,
                number: true,
                min: 0.1,
                max: 0.9,
            },
            skill: {
                 step="any" required: true,
                number: true,
                min: 0.1,
                max: 0.9,
            },
            performa: {
                 step="any" required: true,
                number: true,
               min: 0.1,
                max: 0.9,
            },
            leadership: {
                 step="any" required: true,
                number: true,
                min: 0.1,
                max: 0.9,
            },
            knowledge: {
                 step="any" required: true,
                number: true,
                min: 0.1,
                max: 0.9,
            },
            speak: {
                 step="any" required: true,
                number: true,
                min: 0.1,
                max: 0.9,
            },
        },
        messages: {
            absensi: {
                 step="any" required: "Nilai Harus Terisi",
                number: "Input harus number",
                min: "minimal 0.1",
                max: "maksimal 0.9",
            },
            attitude: {
                 step="any" required: "Nilai Harus Terisi",
                number: "Input harus number",
                min: "minimal 0.1",
                max: "maksimal 0.9",
            },
            skill: {
                 step="any" required: "Nilai Harus Terisi",
                number: "Input harus number",
                min: "minimal 0.1",
                max: "maksimal 0.9",
            },
            performa: {
                 step="any" required: "Nilai Harus Terisi",
                number: "Input harus number",
                min: "minimal 0.1",
                max: "maksimal 0.9",
            },
            leadership: {
                 step="any" required: "Nilai Harus Terisi",
                number: "Input harus number",
                min: "minimal 0.1",
                max: "maksimal 0.9",
            },
            knowledge: {
                 step="any" required: "Nilai Harus Terisi",
                number: "Input harus number",
                min: "minimal 0.1",
                max: "maksimal 0.9",
            },
            speak: {
                 step="any" required: "Nilai Harus Terisi",
                number: "Input harus number",
                min: "minimal 0.1",
                max: "maksimal 0.9",
            },
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
});
</script>