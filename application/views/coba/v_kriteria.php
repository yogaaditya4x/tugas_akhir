<div class="content-wrapper">   
  <section class="content-header">
    <h1>
      Data Kriteria
      <small>Control panel</small>
    </h1> 
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Data Kriteria</li>
    </ol>
  </section>

  <section class="content">
    <h3>Kriteria Dinding Rumah (C1)</h3>
   <br>
   <br>
   <table class="table table-striped table-bordered table-hover" >
    <tr>
     <th>No</th>
     <th>Pilihan</th>
     <th>Bobot</th>
     <th colspan="2" style="text-align: center;">Action</th>
   </tr>

   <?php  
   $no = 1;
   foreach ($kriteria as $kri) : 
    ?>

    <tr>
     <td><?php echo $no++ ?></td>
     <td><?php echo $kri->kriteria ?></td>
     <td><?php echo $kri->bobot ?></td>
     <td width="250"> <center/> <a data-toggle="modal" href="#exampleModal<?php echo $kri->id_c1 ?>" > <i class="fa fa-edit"></i> Edit </a> </td>
       </tr>
     </section>


 <!-- Modal -->
 <div class="modal fade" id="exampleModal<?php echo $kri->id_c1 ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Edit Kriteria</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('coba/kriteria/update_tb1'); ?>">

          
          <input type="hidden" name="id_c1" id="inputId_c1" class="form-control" value="<?php echo $kri->id_c1 ?>">
          

         <div class="form-group">
          <label>Kriteria</label>
          <input type="varchar" name="kriteria" value="<?php echo $kri->kriteria ?>" class="form-control">
        </div>

        <div class="form-group">
          <label>Bobot</label>
          <input type="varchar" name="bobot" value="<?php echo $kri->bobot ?>" class="form-control">
        </div>

        <button type="reset" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>

      </form>
    </div>
  </div>
</div>
</div>


     <?php endforeach; ?>
   </table> 
 </section>

 <section class="content">
    <h3>Kriteria Jenis Lantai (C2)</h3>
   <br>
   <br>
   <table class="table table-striped table-bordered table-hover" >
    <tr>
     <th>No</th>
     <th>Pilihan</th>
     <th>Bobot</th>
     <th colspan="2" style="text-align: center;">Action</th>
   </tr>

   <?php  
   $no = 1;
   foreach ($tb_c2_jenis_lantai as $kri) : 
    ?>

    <tr>
     <td><?php echo $no++ ?></td>
     <td><?php echo $kri->kriteria ?></td>
     <td><?php echo $kri->bobot ?></td>
     <td width="250"> <center/> <a data-toggle="modal" href="#exampleModal2<?php echo $kri->id_c2 ?>" > <i class="fa fa-edit"></i> Edit </a> </td>
       </tr>
     </section>


 <!-- Modal -->
 <div class="modal fade" id="exampleModal2<?php echo $kri->id_c2 ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Edit Kriteria</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('coba/kriteria/update_tb2'); ?>">

          
          <input type="hidden" name="id_c2" id="inputId_c2" class="form-control" value="<?php echo $kri->id_c2 ?>">
          

         <div class="form-group">
          <label>Kriteria</label>
          <input type="varchar" name="kriteria" value="<?php echo $kri->kriteria ?>" class="form-control">
        </div>

        <div class="form-group">
          <label>Bobot</label>
          <input type="varchar" name="bobot" value="<?php echo $kri->bobot ?>" class="form-control">
        </div>

        <button type="reset" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>

      </form>
    </div>
  </div>
</div>
</div>





     <?php endforeach; ?>
   </table> 
 </section>

<section class="content">
    <h3>Kriteria Luas Lantai (C3)</h3>
   <br>
   <br>
   <table class="table table-striped table-bordered table-hover" >
    <tr>
     <th>No</th>
     <th>Pilihan</th>
     <th>Bobot</th>
     <th colspan="2" style="text-align: center;">Action</th>
   </tr>

   <?php  
   $no = 1;
   foreach ($tb_c3_luas_lantai as $kri) : 
    ?>

    <tr>
     <td><?php echo $no++ ?></td>
     <td><?php echo $kri->kriteria ?></td>
     <td><?php echo $kri->bobot ?></td>
     <td width="250"> <center/> <a data-toggle="modal" href="#exampleModal3<?php echo $kri->id_c3 ?>" > <i class="fa fa-edit"></i> Edit </a> </td>
       </tr>
     </section>


 <!-- Modal -->
 <div class="modal fade" id="exampleModal3<?php echo $kri->id_c3 ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Edit Kriteria</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('coba/kriteria/update_tb3'); ?>">

          
          <input type="hidden" name="id_c3" id="inputId_c3" class="form-control" value="<?php echo $kri->id_c3 ?>">
          

         <div class="form-group">
          <label>Kriteria</label>
          <input type="varchar" name="kriteria" value="<?php echo $kri->kriteria ?>" class="form-control">
        </div>

        <div class="form-group">
          <label>Bobot</label>
          <input type="varchar" name="bobot" value="<?php echo $kri->bobot ?>" class="form-control">
        </div>

        <button type="reset" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>

      </form>
    </div>
  </div>
</div>
</div>





     <?php endforeach; ?>
   </table> 
 </section>


 <section class="content">
    <h3>Kriteria Fasilitas MCK (C4)</h3>
   <br>
   <br>
   <table class="table table-striped table-bordered table-hover" >
    <tr>
     <th>No</th>
     <th>Pilihan</th>
     <th>Bobot</th>
     <th colspan="2" style="text-align: center;">Action</th>
   </tr>

   <?php  
   $no = 1;
   foreach ($tb_c4_fasilitas_mck as $kri) : 
    ?>

    <tr>
     <td><?php echo $no++ ?></td>
     <td><?php echo $kri->kriteria ?></td>
     <td><?php echo $kri->bobot ?></td>
     <td width="250"> <center/> <a data-toggle="modal" href="#exampleModal4<?php echo $kri->id_c4 ?>" > <i class="fa fa-edit"></i> Edit </a> </td>
       </tr>
     </section>


 <!-- Modal -->
 <div class="modal fade" id="exampleModal4<?php echo $kri->id_c4 ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Edit Kriteria</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('coba/kriteria/update_tb4'); ?>">

          
          <input type="hidden" name="id_c4" id="inputId_c4" class="form-control" value="<?php echo $kri->id_c4 ?>">
          

         <div class="form-group">
          <label>Kriteria</label>
          <input type="varchar" name="kriteria" value="<?php echo $kri->kriteria ?>" class="form-control">
        </div>

        <div class="form-group">
          <label>Bobot</label>
          <input type="varchar" name="bobot" value="<?php echo $kri->bobot ?>" class="form-control">
        </div>

        <button type="reset" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>

      </form>
    </div>
  </div>
</div>
</div>





     <?php endforeach; ?>
   </table> 
 </section>


 <section class="content">
    <h3>Sumber Penerangan Rumah (C5)</h3>
   <br>
   <br>
   <table class="table table-striped table-bordered table-hover" >
    <tr>
     <th>No</th>
     <th>Pilihan</th>
     <th>Bobot</th>
     <th colspan="2" style="text-align: center;">Action</th>
   </tr>

   <?php  
   $no = 1;
   foreach ($tb_c5_sumber_penerangan_rumah as $kri) : 
    ?>

    <tr>
     <td><?php echo $no++ ?></td>
     <td><?php echo $kri->kriteria ?></td>
     <td><?php echo $kri->bobot ?></td>
     <td width="250"> <center/> <a data-toggle="modal" href="#exampleModal5<?php echo $kri->id_c5 ?>" > <i class="fa fa-edit"></i> Edit </a> </td>
       </tr>
     </section>


 <!-- Modal -->
 <div class="modal fade" id="exampleModal5<?php echo $kri->id_c5 ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Edit Kriteria</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('coba/kriteria/update_tb5'); ?>">

          
          <input type="hidden" name="id_c5" id="inputId_c5" class="form-control" value="<?php echo $kri->id_c5 ?>">
          

         <div class="form-group">
          <label>Kriteria</label>
          <input type="varchar" name="kriteria" value="<?php echo $kri->kriteria ?>" class="form-control">
        </div>

        <div class="form-group">
          <label>Bobot</label>
          <input type="varchar" name="bobot" value="<?php echo $kri->bobot ?>" class="form-control">
        </div>

        <button type="reset" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>

      </form>
    </div>
  </div>
</div>
</div>





     <?php endforeach; ?>
   </table> 
 </section>


 <section class="content">
    <h3>Kriteria Sumber Air Minum (C6)</h3>
   <br>
   <br>
   <table class="table table-striped table-bordered table-hover" >
    <tr>
     <th>No</th>
     <th>Pilihan</th>
     <th>Bobot</th>
     <th colspan="2" style="text-align: center;">Action</th>
   </tr>

   <?php  
   $no = 1;
   foreach ($tb_c6_sumber_air_minum as $kri) : 
    ?>

    <tr>
     <td><?php echo $no++ ?></td>
     <td><?php echo $kri->kriteria ?></td>
     <td><?php echo $kri->bobot ?></td>
     <td width="250"> <center/> <a data-toggle="modal" href="#exampleModal6<?php echo $kri->id_c6 ?>" > <i class="fa fa-edit"></i> Edit </a> </td>
       </tr>
     </section>


 <!-- Modal -->
 <div class="modal fade" id="exampleModal6<?php echo $kri->id_c6 ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Edit Kriteria</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('coba/kriteria/update_tb6'); ?>">

          
          <input type="hidden" name="id_c6" id="inputId_c6" class="form-control" value="<?php echo $kri->id_c6 ?>">
          

         <div class="form-group">
          <label>Kriteria</label>
          <input type="varchar" name="kriteria" value="<?php echo $kri->kriteria ?>" class="form-control">
        </div>

        <div class="form-group">
          <label>Bobot</label>
          <input type="varchar" name="bobot" value="<?php echo $kri->bobot ?>" class="form-control">
        </div>

        <button type="reset" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>

      </form>
    </div>
  </div>
</div>
</div>





     <?php endforeach; ?>
   </table> 
 </section>


 <section class="content">
    <h3>Kriteria Bahan Bakar Memasak (C7)</h3>
   <br>
   <br>
   <table class="table table-striped table-bordered table-hover" >
    <tr>
     <th>No</th>
     <th>Pilihan</th>
     <th>Bobot</th>
     <th colspan="2" style="text-align: center;">Action</th>
   </tr>

   <?php  
   $no = 1;
   foreach ($tb_c7_bbm as $kri) : 
    ?>

    <tr>
     <td><?php echo $no++ ?></td>
     <td><?php echo $kri->kriteria ?></td>
     <td><?php echo $kri->bobot ?></td>
     <td width="250"> <center/> <a data-toggle="modal" href="#exampleModal7<?php echo $kri->id_c7 ?>" > <i class="fa fa-edit"></i> Edit </a> </td>
       </tr>
     </section>


 <!-- Modal -->
 <div class="modal fade" id="exampleModal7<?php echo $kri->id_c7 ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Edit Kriteria</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('coba/kriteria/update_tb7'); ?>">

          
          <input type="hidden" name="id_c7" id="inputId_c7" class="form-control" value="<?php echo $kri->id_c7 ?>">
          

         <div class="form-group">
          <label>Kriteria</label>
          <input type="varchar" name="kriteria" value="<?php echo $kri->kriteria ?>" class="form-control">
        </div>

        <div class="form-group">
          <label>Bobot</label>
          <input type="varchar" name="bobot" value="<?php echo $kri->bobot ?>" class="form-control">
        </div>

        <button type="reset" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>

      </form>
    </div>
  </div>
</div>
</div>





     <?php endforeach; ?>
   </table> 
 </section>


 <section class="content">
    <h3>Kriteria Pekerjaan (C8)</h3>
   <br>
   <br>
   <table class="table table-striped table-bordered table-hover" >
    <tr>
     <th>No</th>
     <th>Pilihan</th>
     <th>Bobot</th>
     <th colspan="2" style="text-align: center;">Action</th>
   </tr>

   <?php  
   $no = 1;
   foreach ($tb_c8_pekerjaan as $kri) : 
    ?>

    <tr>
     <td><?php echo $no++ ?></td>
     <td><?php echo $kri->kriteria ?></td>
     <td><?php echo $kri->bobot ?></td>
     <td width="250"> <center/> <a data-toggle="modal" href="#exampleModal8<?php echo $kri->id_c8 ?>" > <i class="fa fa-edit"></i> Edit </a> </td>
       </tr>
     </section>


 <!-- Modal -->
 <div class="modal fade" id="exampleModal8<?php echo $kri->id_c8 ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Edit Kriteria</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('coba/kriteria/update_tb8'); ?>">

          
          <input type="hidden" name="id_c8" id="inputId_c8" class="form-control" value="<?php echo $kri->id_c8 ?>">
          

         <div class="form-group">
          <label>Kriteria</label>
          <input type="varchar" name="kriteria" value="<?php echo $kri->kriteria ?>" class="form-control">
        </div>

        <div class="form-group">
          <label>Bobot</label>
          <input type="varchar" name="bobot" value="<?php echo $kri->bobot ?>" class="form-control">
        </div>

        <button type="reset" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>

      </form>
    </div>
  </div>
</div>
</div>





     <?php endforeach; ?>
   </table> 
 </section>


 <section class="content">
    <h3>Kriteria Penghasilan (C9)</h3>
   <br>
   <br>
   <table class="table table-striped table-bordered table-hover" >
    <tr>
     <th>No</th>
     <th>Pilihan</th>
     <th>Bobot</th>
     <th colspan="2" style="text-align: center;">Action</th>
   </tr>

   <?php  
   $no = 1;
   foreach ($tb_c9_penghasilan as $kri) : 
    ?>

    <tr>
     <td><?php echo $no++ ?></td>
     <td><?php echo $kri->kriteria ?></td>
     <td><?php echo $kri->bobot ?></td>
     <td width="250"> <center/> <a data-toggle="modal" href="#exampleModal9<?php echo $kri->id_c9 ?>" > <i class="fa fa-edit"></i> Edit </a> </td>
       </tr>
     </section>


 <!-- Modal -->
 <div class="modal fade" id="exampleModal9<?php echo $kri->id_c9 ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Edit Kriteria</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('coba/kriteria/update_tb9'); ?>">

          
          <input type="hidden" name="id_c9" id="inputId_c9" class="form-control" value="<?php echo $kri->id_c9 ?>">
          

         <div class="form-group">
          <label>Kriteria</label>
          <input type="varchar" name="kriteria" value="<?php echo $kri->kriteria ?>" class="form-control">
        </div>

        <div class="form-group">
          <label>Bobot</label>
          <input type="varchar" name="bobot" value="<?php echo $kri->bobot ?>" class="form-control">
        </div>

        <button type="reset" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>

      </form>
    </div>
  </div>
</div>
</div>





     <?php endforeach; ?>
   </table> 
 </section>


  <section class="content">
    <h3>Kriteria Pendidikan (C10)</h3>
   <br>
   <br>
   <table class="table table-striped table-bordered table-hover" >
    <tr>
     <th>No</th>
     <th>Pilihan</th>
     <th>Bobot</th>
     <th colspan="2" style="text-align: center;">Action</th>
   </tr>

   <?php  
   $no = 1;
   foreach ($tb_c10_pendidikan as $kri) : 
    ?>

    <tr>
     <td><?php echo $no++ ?></td>
     <td><?php echo $kri->kriteria ?></td>
     <td><?php echo $kri->bobot ?></td>
     <td width="250"> <center/> <a data-toggle="modal" href="#exampleModal10<?php echo $kri->id_c10 ?>" > <i class="fa fa-edit"></i> Edit </a> </td>
       </tr>
     </section>


 <!-- Modal -->
 <div class="modal fade" id="exampleModal10<?php echo $kri->id_c10 ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Edit Kriteria</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('coba/kriteria/update_tb10'); ?>">

          
          <input type="hidden" name="id_c10" id="inputId_c10" class="form-control" value="<?php echo $kri->id_c10 ?>">
          

         <div class="form-group">
          <label>Kriteria</label>
          <input type="varchar" name="kriteria" value="<?php echo $kri->kriteria ?>" class="form-control">
        </div>

        <div class="form-group">
          <label>Bobot</label>
          <input type="varchar" name="bobot" value="<?php echo $kri->bobot ?>" class="form-control">
        </div>

        <button type="reset" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>

      </form>
    </div>
  </div>
</div>
</div>





     <?php endforeach; ?>
   </table> 
 </section>


  <section class="content">
    <h3>Kriteria Aset Berharga (C11)</h3>
   <br>
   <br>
   <table class="table table-striped table-bordered table-hover" >
    <tr>
     <th>No</th>
     <th>Pilihan</th>
     <th>Bobot</th>
     <th colspan="2" style="text-align: center;">Action</th>
   </tr>

   <?php  
   $no = 1;
   foreach ($tb_c11_aset_berharga as $kri) : 
    ?>

    <tr>
     <td><?php echo $no++ ?></td>
     <td><?php echo $kri->kriteria ?></td>
     <td><?php echo $kri->bobot ?></td>
     <td width="250"> <center/> <a data-toggle="modal" href="#exampleModal11<?php echo $kri->id_c11 ?>" > <i class="fa fa-edit"></i> Edit </a> </td>
       </tr>
     </section>


 <!-- Modal -->
 <div class="modal fade" id="exampleModal11<?php echo $kri->id_c11 ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Edit Kriteria</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('coba/kriteria/update_tb11'); ?>">

          
          <input type="hidden" name="id_c11" id="inputId_c11" class="form-control" value="<?php echo $kri->id_c11 ?>">
          

         <div class="form-group">
          <label>Kriteria</label>
          <input type="varchar" name="kriteria" value="<?php echo $kri->kriteria ?>" class="form-control">
        </div>

        <div class="form-group">
          <label>Bobot</label>
          <input type="varchar" name="bobot" value="<?php echo $kri->bobot ?>" class="form-control">
        </div>

        <button type="reset" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>

      </form>
    </div>
  </div>
</div>
</div>





     <?php endforeach; ?>
   </table> 
 </section>


  <section class="content">
    <h3>Kriteria Tanggungan Keluarga (C12)</h3>
   <br>
   <br>
   <table class="table table-striped table-bordered table-hover" >
    <tr>
     <th>No</th>
     <th>Pilihan</th>
     <th>Bobot</th>
     <th colspan="2" style="text-align: center;">Action</th>
   </tr>

   <?php  
   $no = 1;
   foreach ($tb_c12_tanggungan_keluarga as $kri) : 
    ?>

    <tr>
     <td><?php echo $no++ ?></td>
     <td><?php echo $kri->kriteria ?></td>
     <td><?php echo $kri->bobot ?></td>
     <td width="250"> <center/> <a data-toggle="modal" href="#exampleModal12<?php echo $kri->id_c12 ?>" > <i class="fa fa-edit"></i> Edit </a> </td>
       </tr>
     </section>


 <!-- Modal -->
 <div class="modal fade" id="exampleModal12<?php echo $kri->id_c12 ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Edit Kriteria</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo site_url('coba/kriteria/update_tb12'); ?>">

          
          <input type="hidden" name="id_c12" id="inputId_c12" class="form-control" value="<?php echo $kri->id_c12 ?>">
          

         <div class="form-group">
          <label>Kriteria</label>
          <input type="varchar" name="kriteria" value="<?php echo $kri->kriteria ?>" class="form-control">
        </div>

        <div class="form-group">
          <label>Bobot</label>
          <input type="varchar" name="bobot" value="<?php echo $kri->bobot ?>" class="form-control">
        </div>

        <button type="reset" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>

      </form>
    </div>
  </div>
</div>
</div>





     <?php endforeach; ?>
   </table> 
 </section>

 </div>






 



