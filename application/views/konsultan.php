<div class="container-fluid">
	<h4> Konsultan Arsitek </h4>
	<p> *Hanya bisa 1 konsultasi untuk setiap transaksi</p>

	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th>No</th>
			<th>ID Design</th>
			<th>Nama Desain</th>
			<th>Biaya Konsultasi</th>
			<th>Total Design</th>
		</tr>
		<?php 
		$no=1;
		foreach ($this->cart->contents() as $items) : ?>

			<tr>
				<td> <?php  echo $no++  ?></td>
			
				<td><?php echo $items['id'] ?></td>
				<td><?php echo $items['name'] ?></td>
				<td><?php echo $items['price'] ?></td>
				<td><?php echo $items['qty'] ?></td>


			<?php endforeach;  ?>
		
	</table>

	<div align="right">
		<a href="<?php echo base_url('Dashboard/Hapus_Konsultasi') ?>"><div class="btn btn-sm btn-danger">Hapus Konsultasi</div></a>

		<a href="<?php echo base_url('dashboard/index') ?>"><div class="btn btn-sm btn-primary">Design Lain</div></a>

		<a href="<?php echo base_url('dashboard/hubungi_arsitek') ?>"><div class="btn btn-sm btn-success">Hubungi Arsitek</div></a>
	</div>

</div>