 <div class="content-wrapper">   
	<section class="content-header">
    <h1>
      Data Penduduk 
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Data Penduduk & Kriteria</li>
    </ol> 
  </section>

  <section class="content">
  	<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah</button>
  	<table class="table table-striped table-bordered table-hover">
  		<tr>
  			<th>No</th>
  			<th>Nama Penduduk</th>
  			<th>C1</th>
  			<th>C2</th>
  			<th>C3</th>
  			<th>C4</th>
  			<th>C5</th>
  			<th>C6</th>
  			<th>C7</th>
  			<th>C8</th>
  			<th>C9</th>
  			<th>C10</th>
  			<th>C11</th>
  			<th>C12</th>
  			<th cosplan="2" style="text-align: center;">Action</th>
  		</tr>
<?php  
$no = 1;
foreach ($penilai as $pni) :
 ?>
 
 <tr>
 	<td><?php echo $no++ ?></td>
 	<td><?php echo $pni->nama ?></td>
 	<td><?php echo $pni->c1 ?></td>
 	<td><?php echo $pni->c2 ?></td>
 	<td><?php echo $pni->c3 ?></td>
 	<td><?php echo $pni->c4 ?></td>
 	<td><?php echo $pni->c5 ?></td>
 	<td><?php echo $pni->c6 ?></td>
 	<td><?php echo $pni->c7 ?></td>
 	<td><?php echo $pni->c8 ?></td>
 	<td><?php echo $pni->c9 ?></td>
 	<td><?php echo $pni->c10 ?></td>
 	<td><?php echo $pni->c11 ?></td>
 	<td><?php echo $pni->c12 ?></td>
 	<td width="250"><center/>
 		<a href="<?php echo site_url(''.$pnd->id_penduduk) ?>"><i class="fa fa-edit"></i>Edit</a>
 		<a href="<?php echo site_url(''.$pnd->id_penduduk) ?>" onclick="return confirm('Hapus data?')"
 			class="btn btn-small text-danger"><i class="fa fa-trash"></i>Hapus</a>
 	</td>
 </tr>

<?php endforeach; ?>
  	</table>
  	
  </section>