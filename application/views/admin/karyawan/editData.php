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
                    Edit Data Karyawan
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
        <form id="karyawanForm" action="<?php echo site_url('KaryawanController/EditKaryawan/' . $data['id']);?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label >ID</label>
                <input type="text" name="idKaryawan" class="form-control" value="<?php echo $data['idKaryawan']?>">
            </div>
            <div class="form-group">
                <label >Nama</label>
                <input type="text" name="nama" class="form-control" value="<?php echo $data['nama']?>">
            </div>
            <div class="form-group">
                <label >Jenis Kelamin</label>
                <select class="form-control" name="gender">
                    <option value="Pria" selected>Pria</option>
                    <option value="Wanita">Wanita</option>
                </select>
            </div>
            <div class="form-group">
                <label >Tempat Lahir</label>
                <input type="text" name="tempatLahir" class="form-control" value="<?php echo $data['tempatLahir']?>">
            </div>
            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" name="tanggalLahir" class="form-control" value="<?php echo $data['tanggalLahir']?>">
            </div>
            <div class="form-group">
                <label >Jabatan</label>
                <select class="form-control" id="exampleFormControlSelect1" name="jabatan" value="<?php echo $data['jabatan']?>">
                     <?php if ($this->session->jabatan == 'admin') { ?>
                        <option <?php if($data['jabatan'] == 'Area Manager'){ echo 'selected="selected"'; } ?> value="Area Manager">Area Manager</option>
                        <option <?php if($data['jabatan'] == 'General Manager'){ echo 'selected="selected"'; } ?> value="General Manager">General Manager</option>
                        <option <?php if($data['jabatan'] == 'Assistant Manager'){ echo 'selected="selected"'; } ?> value="Assistant Manager">Assistant Manager</option>
                        <option <?php if($data['jabatan'] == 'Crew Leader'){ echo 'selected="selected"'; } ?> value="Crew Leader">Crew Leader</option>
                        <option <?php if($data['jabatan'] == 'Crew Full Time'){ echo 'selected="selected"'; } ?> value="Crew Full Time">Crew Full Time</option>
                        <option <?php if($data['jabatan'] == 'Crew Part Time'){ echo 'selected="selected"'; } ?> value="Crew Part Time">Crew Part Time</option>
                    <?php } else if ($this->session->jabatan == 'Operational Manager'){ ?>
                        <option <?php if($data['jabatan'] == 'Area Manager'){ echo 'selected="selected"'; } ?> value="Area Manager">Area Manager</option>
                    <?php } else if ($this->session->jabatan == 'Area Manager'){ ?>
                        <option <?php if($data['jabatan'] == 'General Manager'){ echo 'selected="selected"'; } ?> value="General Manager">General Manager</option>
                    <?php } else if ($this->session->jabatan == 'General Manager'){ ?>
                        <option <?php if($data['jabatan'] == 'Assistant Manager'){ echo 'selected="selected"'; } ?> value="Assistant Manager">Assistant Manager</option>
                    <?php } else if ($this->session->jabatan == 'Assistant Manager'){ ?>
                        <option <?php if($data['jabatan'] == 'Crew Leader'){ echo 'selected="selected"'; } ?> value="Crew Leader">Crew Leader</option>
                        <option <?php if($data['jabatan'] == 'Crew Full Time'){ echo 'selected="selected"'; } ?> value="Crew Full Time">Crew Full Time</option>
                        <option <?php if($data['jabatan'] == 'Crew Part Time'){ echo 'selected="selected"'; } ?> value="Crew Part Time">Crew Part Time</option>
                    <?php } else { ?>
                    <?php }?>
                </select>
            </div>
            <div class="form-group">
                <label >Alamat</label>
                <textarea name="alamat" class="form-control" cols="30" rows="10"><?php echo $data['alamat']?></textarea>
            </div>
            <div class="form-group">
                <label >Kontak</label>
                <input type="text" name="kontak" class="form-control" value="<?php echo $data['alamat']?>">
            </div>
            <div class="form-group">
                <label >Foto</label>
                <input type="file" name="foto" class="form-control" onchange="document.getElementById('imgFoto').src = window.URL.createObjectURL(this.files[0])">
                <img src="<?php echo base_url(); ?>karyawan/<?php echo $data['foto']?>" id="imgFoto" width="180" height="200">
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
    $('#karyawanForm').validate({
        rules: {
            idKaryawan: {
                required: true,
            },
            nama: {
                required: true,
            },
            tempatLahir: {
                required: true,
            },
            tanggalLahir: {
                required: true,
            },
            alamat: {
                required: true,
            },
            kontak: {
                required: true,
                number: true,
                minlength: 9,
                maxlength: 13,
            },
            // foto: {
            //     required: true,
            // },
        },
        messages: {
            idKaryawan: {
                required: 'id karyawan harus di isi',
            },
            nama: {
                required: 'nama karyawan harus di isi',
            },
            tempatLahir: {
                required: 'tempat lahir karyawan harus di isi',
            },
            tanggalLahir: {
                required: 'tanggal lahir karyawan harus di isi',
            },
            alamat: {
                required: 'alamat karyawan harus di isi',
            },
            kontak: {
                required: 'kontak karyawan harus di isi',
                number: 'harus nomer',
                minlength: 'minimal 9 digit',
                maxlength: 'maksimal 13 digit',
            },
            // foto: {
            //     required: 'foto harus di upload',
            // },
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
});
</script>