<?php 
require_once('conf/koneksi.php');
include 'asset/php/head.php'; ?>
	<body>
<!--==============================header=================================-->
		<?php include 'asset/php/header.php'; ?>
<!--==============================Content=================================-->
		<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - February 10, 2014!</div>
			<div class="container_12">
			
				<div class="grid_8">
					<h3>Berita</h3>
					<?php
			

			$sql = $conn->query("SELECT * FROM berita where id_berita='$_GET[detail]'");
			while($data = $sql->fetch_assoc()){
			
			?>
					<div class="block2">
						<img width="100px" height="100px" src="upload/berita/<?php echo $data['gambar'] ?>"  alt="" class="img_inner fleft">
						<div class="extra_wrapper">
							<div class="text1 col1"><a href="#"><?php echo $data['judul'] ?></a></div>
							<p><?php echo $data['tempat_wisata'] ?></p>
							<p><?php echo $data['deskripsi'] ?></p>
							<p><strong>Tips Wisata</strong></p>
							<p><?php echo $data['tips_wisata'] ?></p>
							<p>Pengirim : <?php echo $data['pengirim'] ?></p>
							<br>
							
						</div>
					</div>
			<?php } ?>

				</div>

				<div class="grid_3 prefix_1">
					<h5>Kategori Paket</h5>
			<?php
					$sql = $conn->query("SELECT * FROM kategori order by id_kategori asc limit 0,12");
					
					while($data = $sql->fetch_assoc()){

				?>
					<ul class="list">
						<li><a href="#"><?php echo $data['nama_kategori'] ?></a></li>
				
					</ul>
					<?php  } ?>
					<a href="#" class="link1">VIEW A<span class="low">ll</span></a>
				</div>
		 
			</div>

        <br class="clear" />
      </div>
		</div>
<!--==============================footer=================================-->
		<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="socials">
						<a href="#" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-google-plus"></a>
					</div>
					<div class="copy">
						Your Trip (c) 2014 | <a href="#">Privacy Policy</a> | Website Template Designed by TemplateMonster.com
					</div>
				</div>
			</div>
		</footer>
		<script>
		$(function (){
			$('#bookingForm').bookingForm({
				ownerEmail: '#'
			});
		})
		</script>
	</body>
</html>