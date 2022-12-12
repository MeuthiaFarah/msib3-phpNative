<?php
// membuat objek dari class Barang
$model = new Montir();
// memanggil fungsi untuk menampilkan data
$montir = $model->getMontir($_REQUEST['id']);
?>

<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Montir Detail</h2>
				<ol class="breadcrumb header-bradcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="index.php?hal=team" class="text-white">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Montir Detail</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<section class="about-shot-info section-sm">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 mt-20">
				<h2 class="mb-3"><?= $montir['nama_montir'] ?></h2>
				<p>Alamat : <?= $montir['alamat_montir'] ?></p>
				<p>No Telp : <?= $montir['no_tlp'] ?></p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, fugit itaque ratione incidunt voluptas.
					Quaerat quidem dolor, quisquam amet inventore quas adipisci ea sint qui placeat beatae molestias aut, aperiam!
				</p>
			</div>
			<div class="col-lg-6 mt-4 mt-lg-0">
				<img loading="lazy" class="img-fluid" src="images/company/company-image.jpg" alt="">
			</div>
		</div>
	</div>
</section>