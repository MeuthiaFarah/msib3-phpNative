<?php
// membuat objek dari class Barang
$model = new Admin();
$model2 = new Montir();
// memanggil fungsi untuk menampilkan data
$data_admin = $model->dataAdmin();
$data_montir = $model2->dataMontir();
?>
<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Our Team</h2>
				<ol class="breadcrumb header-bradcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="index.php?hal=home" class="text-white">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Our Team</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<!-- Start Our Team
		=========================================== -->
<section class="team" id="team">
	<div class="container">
		<div class="row justify-content-center">
			<!-- section title -->
			<div class="col-xl-6 col-lg-8">
				<div class="title text-center ">
					<h2>Our Team</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quasi tempora obcaecati, quis
						similique quos.</p>
					<div class="border"></div>
				</div>
			</div>
			<!-- /section title -->
		</div>
		<div class="row justify-content-md-center">
			<?php
			$no = 1;
			foreach ($data_admin as $row){
			?>
			<!-- team member -->
			<div class="col col-lg-4">
				<div class="team-member text-center">
					<div class="member-photo">
						<!-- member photo -->
						<img loading="lazy" class="img-fluid" src="images/team/<?= $row['foto'] ?>" alt="Meghna">
						<!-- /member photo -->

						<!-- member social profile -->
						<div class="mask">
							<ul class="clearfix">
								<li><a href="https://themefisher.com/"><i class="tf-ion-social-facebook"></i></a></li>
								<li><a href="https://themefisher.com/"><i class="tf-ion-social-twitter"></i></a></li>
								<li><a href="https://themefisher.com/"><i class="tf-ion-social-google-outline"></i></a></li>
								<li><a href="https://themefisher.com/"><i class="tf-ion-social-dribbble"></i></a></li>
							</ul>
						</div>
						<!-- /member social profile -->
					</div>

					<!-- member name & designation -->
					<div class="member-content">
						<h3><?= $row['nama'] ?></h3>
						<span>Admin</span>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
					</div>
					<!-- /member name & designation -->

				</div>
			</div>
			<!-- end team member -->
			<?php
      }
      ?>
		</div> <!-- End row -->
	</div> <!-- End container -->
</section> <!-- End section -->

<section class="section schedule">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="title text-center">
					<h2>Montir Kami</h2>
				</div>
			</div>
		</div>
		<div class="row justify-content-md-center">
			<div class="col-8">
        <table class="table table-striped">
          <thead class="table-dark">
            <tr >
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Detail</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($data_montir as $row2){
            ?>
						<tr>
              <th scope="row"><?= $no++ ?></th>
              <td><?= $row2['nama_montir'] ?></td>
              <td>
								<a href="index.php?hal=montir_detail&id=<?= $row2['id']?>">
									<i class="tf-ion-eye"></i>
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