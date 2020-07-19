<div class="container-fluid">

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="<?php echo base_url('assets/img/1.jpg') ?>" class="d-block w-85" alt="...">
	    </div>
	    <div class="carousel-item">
	      <img src="<?php echo base_url('assets/img/2.jpg') ?>" class="d-block w-85" alt="...">
	    </div>
	  
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>

	<div claass="row text-center mt-5">

		<?php foreach ($arsitek as $ars) : ?>

     <div class="card ml-3" style="width: 65rem;">
     <img src="<?php echo base_url(). '/uploads/' . $ars->gambar ?>" class="card-img-top" alt="...">
     <div class="card-body">
     <h5 class="card-title"><?php echo $ars->nama_design?> </h5> 
     <small><?php echo $ars->keterangan ?></small> 
     <span class="badge badge-success"><?php echo $ars->biaya_konsultasi ?></span>      <br>
    <?php echo anchor('dashboard/konsultan/' .$ars->id_design,'<div class="btn btn-sm btn-primary"> Konsultasi Sekarang </div>')  ?>

    <?php echo anchor('dashboard/detail/' .$ars->id_design,'<div class="btn btn-sm btn-success"> Detail </div>')  ?>


   
    
  </div> </div>

  <?php endforeach; ?>
</div>
</div>