<div class="content-wrapper">  
	<section class="content-header">
    <h1>
      Data Penduduk 
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Data Penduduk</li>
    </ol>
  </section>

  <section class="content">
   <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Penduduk </button>
   <br>
   <br>
   <table class="table table-striped table-bordered table-hover" >
    <tr>
     <th>No</th>
     <th>Nama</th>
     <th>Jenis Kelamin</th>
     <th>NIK</th>
     <th>KK</th>
     <th>Alamat</th>
     <th>RT</th>
     <th>RW</th>
     <th colspan="2" style="text-align: center;">Action</th>
   </tr>

   <?php  
   $no = 1;
   foreach ($penduduk as $pnd) : 
    ?>

    <tr>
     <td><?php echo $no++ ?></td>
     <td><?php echo $pnd->nama ?></td>
     <td><?php echo $pnd->jenis_kelamin ?></td>
     <td><?php echo $pnd->nik ?></td>
     <td><?php echo $pnd->kk ?></td>
     <td><?php echo $pnd->alamat; ?></td>
     <td><?php echo $pnd->rt ?></td>
     <td><?php echo $pnd->rw ?></td>
     <td width="250"><center/>
          <a href="<?php echo site_url('coba/penduduk/edit/'.$pnd->id_penduduk) ?>" ><i class="fa fa-edit"></i> Edit</a>
          <a href="<?php echo site_url('coba/penduduk/delete/'.$pnd->id_penduduk) ?>" onclick="return confirm('Hapus data?')"
           class="btn btn-small text-danger"><i class="fa fa-trash"></i> Hapus</a>
         </td>
       </tr>

     <?php endforeach; ?>
   </table> 
 </section>



 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Form Input Data Penduduk</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form method="post" action="<?php echo site_url('coba/penduduk/add'); ?>">

         <div class="form-group">
          <label>Nama Penduduk</label>
          <input type="varchar" name="nama" class="form-control">
        </div>

        <div class="form-group">
          <label>Jenis Kelamin</label>
          <input type="varchar" name="jenis_kelamin" class="form-control">
        </div>

        <div class="form-group">
          <label>NIK</label>
          <input type="varchar" name="nik" class="form-control">
        </div>

        <div class="form-group">
          <label>KK</label>
          <input type="varchar" name="kk" class="form-control">
        </div>

        <div class="form-group">
          <label>Alamat</label>
          <input type="varchar" name="alamat" class="form-control">
        </div>

        <div class="form-group">
          <label>RT</label>
          <input type="int" name="rt" class="form-control">
        </div>

        <div class="form-group">
          <label>RW</label>
          <input type="int" name="rw" class="form-control">
        </div>

        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>

      </form>
    </div>
  </div>
</div>
</div>

<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Edit Data Penduduk</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php base_url('coba/penduduk/edit/') ?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?php echo $pnd->id?>" />
          <div class="form-group">
            <label>Nama Penduduk</label>
            <input type="varchar" name="nama" class="form-control" value="<?php echo $pnd->nama ?>">
          </div>

          <div class="form-group">
            <label>Jenis Kelamin</label>
            <input type="varchar" name="jenis_kelamin" class="form-control">
          </div>

          <div class="form-group">
            <label>Nomer Induk Kewarganegaraan</label>
            <input type="varchar" name="nik" class="form-control">
          </div>

          <div class="form-group">
            <label>Nomer Kartu Keluarga</label>
            <input type="varchar" name="kk" class="form-control">
          </div>

          <div class="form-group">
            <label>Alamat</label>
            <input type="varchar" name="alamat" class="form-control">
          </div>

          <div class="form-group">
            <label>RT</label>
            <input type="int" name="rt" class="form-control">
          </div>

          <div class="form-group">
            <label>RW</label>
            <input type="int" name="rw" class="form-control">
          </div>

          <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
          <button type="submit" class="btn btn-primary">Simpan</button>

        </form>
      </div>
    </div>
  </div>
  <section class="content">

  </section>
</div>