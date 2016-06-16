<?php 
require_once('conf/koneksi.php');
include 'asset/php/head.php'; ?>
	<body>
<!--==============================header=================================-->
		<?php include 'asset/php/header.php'; ?>
<!--==============================Content=================================-->
		<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - February 10, 2014!</div>
			<div class="container_12">
				<h3>Paket Wisata</h3>
				<div class="grid_8">
					<?php
			 $limit = 4;
            $jumlah_record = $conn->query("SELECT * FROM paket_wisata where status = '$_GET[detail]' order by tanggal desc");
            $jml = $jumlah_record->num_rows;
            $halaman = ceil($jml / $limit);
            $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;

            $start = ($page - 1) * $limit;

			$sql = $conn->query("SELECT * FROM paket_wisata where status = '$_GET[detail]'order by tanggal desc limit $start,$limit");
			/*print_r($sql);
			die();*/

			while($data = $sql->fetch_assoc()){
				
			if($data['status'] = 'hot promo'){
			?>

					<div class="block2">
						<img width="100px" height="100px" src="upload/paket/<?php echo $data['gambar'] ?>"  alt="" class="img_inner fleft">
						<div class="extra_wrapper">
							<div class="text1 col1"><a href="#"><?php echo $data['nama'] ?></a></div>
							<p><?php echo substr($data['deskripsi'], 0,300) ?></p>
							
							<p>Harga : <?php echo $data['harga'] ?></p>
														<br>
							<a href="detail_paket.php?detail=<?php echo $data['id_paket'] ?>" class="link1">LEARN MORE</a>
						</div>
					</div>
			<?php }elseif ($data['status'] = 'paket terlaris') {
			?>
					<div class="block2">
						<img width="100px" height="100px" src="upload/paket/<?php echo $data['gambar'] ?>"  alt="" class="img_inner fleft">
						<div class="extra_wrapper">
							<div class="text1 col1"><a href="#"><?php echo $data['nama'] ?></a></div>
							<p><?php echo substr($data['deskripsi'], 0,300) ?></p>
							<p>Paket : Paket Terlaris</p>
							<p>Harga : <?php echo $data['harga'] ?></p>
														<br>
							<a href="detail_paket.php?detail=<?php echo $data['id_paket'] ?>" class="link1">LEARN MORE</a>
						</div>
					</div>
			<?php }elseif ($data['status'] = 'combo') {
			?>
					<div class="block2">
						<img width="100px" height="100px" src="upload/paket/<?php echo $data['gambar'] ?>"  alt="" class="img_inner fleft">
						<div class="extra_wrapper">
							<div class="text1 col1"><a href="#"><?php echo $data['nama'] ?></a></div>
							<p><?php echo substr($data['deskripsi'], 0,300) ?></p>
							<p>Paket : Combo</p>
							<p>Harga : <?php echo $data['harga'] ?></p>
														<br>
							<a href="detail_paket.php?detail=<?php echo $data['id_paket'] ?>" class="link1">LEARN MORE</a>
						</div>
					</div>
			<?php }else {
			?>
					<div class="block2">
						<img width="100px" height="100px" src="upload/paket/<?php echo $data['gambar'] ?>"  alt="" class="img_inner fleft">
						<div class="extra_wrapper">
							<div class="text1 col1"><a href="#"><?php echo $data['nama'] ?></a></div>
							<p><?php echo substr($data['deskripsi'], 0,300) ?></p>
							<p>Paket : Terbaru</p>
							<p>Harga : <?php echo $data['harga'] ?></p>
														<br>
							<a href="detail_paket.php?detail=<?php echo $data['id_paket'] ?>" class="link1">LEARN MORE</a>
						</div>
					</div>
			<?php }} ?>

				</div>

				<div class="grid_3 prefix_1">
					<h5 style="padding-top:0;">Kategori Paket</h5>
			<?php
					$sql = $conn->query("SELECT * FROM kategori order by id_kategori asc limit 0,12");
					
					while($data = $sql->fetch_assoc()){

				?>
					<ul class="list">
						<li><a href="detail_paket2.php?detail=<?php echo $data['id_kategori'] ?>"><?php echo $data['nama_kategori'] ?></a></li>
				
					</ul>
					<?php  } ?>
					<a href="#" class="link1">VIEW A<span class="low">ll</span></a>
				</div>
		 
			</div>
<div class="paging">
            <?php
            if($page > 1){

            ?>
            <a href="?page=<?php echo $page - 1 ?>"><</a>
            <?php
            for($x=1;$x<=$halaman;$x++){
            ?>
              <a href="?page=<?php echo $x ?>"><?php echo $x ?></a>
            <?php
              }
            }elseif($page==1){
              for($x=1;$x<=$halaman;$x++){
              ?>
              <a href="?page=<?php echo $x ?>"><?php echo $x ?></a>
            <?php
            }
            ?>
            <a href="?page=<?php echo $page +1 ?>">></a>
           <?php } ?> 
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