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
                    Edit Data Reward
                </h1>
            </div>
        </div>
        <?php foreach ($reward as $data) { ?>
        <form action="<?php echo site_url('RewardController/EditReward/' . $data['id']);?>" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Juara 1</label>
                <textarea class="form-control" name="juara1" rows="7"><?php echo $data['juara1']?></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Juara 2</label>
                <textarea class="form-control" name="juara2" rows="7"><?php echo $data['juara2']?></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Juara 3</label>
                <textarea class="form-control" name="juara3" rows="7"><?php echo $data['juara3']?></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top:20px">Submit</button>
        </form>
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