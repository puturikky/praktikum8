<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Data Peminjam
    <small>Edit Data Peminjam</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Data Peminjaman</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="callout callout-success" style="display: none">
    <h4>Selamat!</h4>
    <p>Berhasil Memperbaharui Data.</p>
  </div>
  <div class="callout callout-danger" style="display: none">
    <h4>Peringatan!</h4>
    <p></p>
  </div>
  <a href="<?php echo base_url('peminjaman'); ?>" class="btn btn-primary"><i class="fa fa-backward"></i> Kembali ke List Peminjaman</a>
  <form id="formInput" method="POST">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Tambah Data Peminjam</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
        </div>
      </div>
      <div class="box-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Nama Anggota</label>
              <select name="kode_anggota" id="" class="form-control">
                <?php foreach($dataAnggota as $anggota){ ?>
                  <option value="<?php echo $anggota->kode_anggota; ?>" <?php echo $dataPeminjaman['kode_anggota'] == $anggota->kode_anggota? 'selected' : ''?>><?php echo $anggota->nama ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Nama Petugas</label>
              <select name="kode_petugas" id="" class="form-control">
                <?php foreach($dataPetugas as $petugas){ ?>
                  <option value="<?php echo $petugas->kode_petugas; ?>" <?php echo $dataPeminjaman['kode_petugas'] == $petugas->kode_petugas? 'selected' : ''?>><?php echo $petugas->nama ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="box-footer clearfix">
        <button type="submit" class="btn btn-success">Update Data Peminjaman</button>
      </div>
    </div>
  </form>
</section>
<!-- /.content -->
<script>
$(function(){
  $("#formInput").submit(function(e){
    dataForm = $(this).serializeArray();
    $.ajax({
      method : 'POST',
      url : '<?php echo base_url("peminjaman/".$dataPeminjaman['kode_pinjam']."/update");?>',
      data : dataForm,
      success : function(data){
        console.log(data);
        if(data){
          $('.callout-success').fadeIn();
          setTimeout(function(){ 
          $('.callout-success').fadeOut("slow");
          }, 3000);
        }else {
          $('.callout-danger').find('p').html("Gagal memperbaharui data");
          $('.callout-danger').fadeIn();
          setTimeout(function(){ 
          $('.callout-danger').fadeOut("slow");
          }, 3000); 
        }
      },
      error: function( json )
        {
          $('.callout-danger').find('p').html("Gagal memperbaharui data");
          $('.callout-danger').fadeIn();
          setTimeout(function(){ 
          $('.callout-danger').fadeOut("slow");
          }, 3000);          
        }
    })
    e.preventDefault();
  });
})
</script>