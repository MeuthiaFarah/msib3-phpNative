<?php
// membuat objek dari class Barang
$model = new Barang();
// memanggil fungsi untuk menampilkan data
$data_barang = $model->dataBarang();
?>

<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Easy Pricing</h2>
				<ol class="breadcrumb header-bradcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="index.php?hal=home" class="text-white">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Easy Pricing</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<!-- Start Pricing section
		=========================================== -->
<section class="pricing-table" id="pricing">
	<div class="container">
		<div class="row justify-content-center">
			<!-- section title -->
			<div class="col-xl-6 col-lg-8">
				<div class="title title-white text-center">
					<h2>Our Greatest Plans</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium soluta deserunt eaque, est, quia hic odit sed incidunt officiis quidem.</p>
					<div class="border"></div>
				</div>
			</div>
			<!-- /section title -->
		</div>
		<div class="row">
			<!-- single pricing table -->
			<div class="col-lg-4 col-md-6">
				<div class="pricing-item">

					<!-- plan name & value -->
					<div class="price-title">
						<h3>Basic</h3>
						<strong class="value">$19</strong>
						<p>Perfect for single freelancers who work by themselves</p>
					</div>
					<!-- /plan name & value -->

					<!-- plan description -->
					<ul>
						<li><i class="tf-ion-ios-arrow-forward"></i> 1GB Disk Space</li>
						<li><i class="tf-ion-ios-arrow-forward"></i> 10 Email Account</li>
						<li><i class="tf-ion-ios-arrow-forward"></i> Script Installer</li>
						<li><i class="tf-ion-ios-arrow-forward"></i> 1 GB Storage</li>
						<li><i class="tf-ion-ios-arrow-forward"></i> 2 GB Bandwidth</li>
						<li><i class="tf-ion-ios-arrow-forward"></i> 24/7 Tech Support</li>
					</ul>
					<!-- /plan description -->

					<!-- signup button -->
					<a class="btn btn-main" href="index.php?hal=home">Signup</a>
					<!-- /signup button -->

				</div>
			</div>
			<!-- end single pricing table -->

			<!-- single pricing table -->
			<div class="col-lg-4 col-md-6  ">
				<div class="pricing-item">

					<!-- plan name & value -->
					<div class="price-title">
						<h3>Standard</h3>
						<strong class="value">$39</strong>
						<p>Suitable for small businesses with up to 5 employees</p>
					</div>
					<!-- /plan name & value -->

					<!-- plan description -->
					<ul>
						<li><i class="tf-ion-ios-arrow-forward"></i> 1GB Disk Space</li>
						<li><i class="tf-ion-ios-arrow-forward"></i> 50 Email Account</li>
						<li><i class="tf-ion-ios-arrow-forward"></i> Script Installer</li>
						<li><i class="tf-ion-ios-arrow-forward"></i> 1 GB Storage</li>
						<li><i class="tf-ion-ios-arrow-forward"></i> 10 GB Bandwidth</li>
						<li><i class="tf-ion-ios-arrow-forward"></i> 24/7 Tech Support</li>
					</ul>
					<!-- /plan description -->

					<!-- signup button -->
					<a class="btn btn-main" href="index.php?hal=home">Signup</a>
					<!-- /signup button -->

				</div>
			</div>
			<!-- end single pricing table -->

			<!-- single pricing table -->
			<div class="col-lg-4 col-md-6 ">
				<div class="pricing-item">

					<!-- plan name & value -->
					<div class="price-title">
						<h3>Enterprise</h3>
						<strong class="value">$59</strong>
						<p>Great for large businesses with more than 5 employees</p>
					</div>
					<!-- /plan name & value -->

					<!-- plan description -->
					<ul>
						<li><i class="tf-ion-ios-arrow-forward"></i> Unlimited Disk Space</li>
						<li><i class="tf-ion-ios-arrow-forward"></i> Unlimited Email Account</li>
						<li><i class="tf-ion-ios-arrow-forward"></i> Script Installer</li>
						<li><i class="tf-ion-ios-arrow-forward"></i> Unlimited Storage</li>
						<li><i class="tf-ion-ios-arrow-forward"></i> Unlimited Bandwidth</li>
						<li><i class="tf-ion-ios-arrow-forward"></i> 24/7 Tech Support</li>
					</ul>
					<!-- /plan description -->

					<!-- signup button -->
					<a class="btn btn-main" href="index.php?hal=home">Signup</a>
					<!-- /signup button -->

				</div>
			</div>
			<!-- end single pricing table -->


		</div> <!-- End row -->
	</div> <!-- End container -->
</section> <!-- End section -->

<section class="section schedule">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="title text-center">
					<h2>Aksesoris Motor</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<a class="btn btn-main" href="index.php?hal=barang_tambah" role="button"><i class="tf-ion-plus-round"></i> Tambah</a>
				<br/><br/>
        <table class="table table-striped">
          <thead class="table-dark">
            <tr >
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Harga</th>
              <th scope="col">Stok</th>
							<th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($data_barang as $row){
            ?>
            <tr>
              <th scope="row"><?= $no++ ?></th>
              <td><?= $row['nama'] ?></td>
              <td><?= $row['harga'] ?></td>
              <td><?= $row['stok'] ?></td>
							<td>
								<a href="#!">
									<i class="tf-ion-ios-cart"></i>
								</a>
							</td>
            </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
			</div>
		</div>
	</div>
</section>