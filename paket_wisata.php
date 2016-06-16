<?php 
require_once("conf/koneksi.php");
include 'asset/php/head.php'; ?>
	<body>
<!--==============================header=================================-->
		<?php include 'asset/php/header.php'; ?>
<!--==============================Content=================================-->
		<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - February 10, 2014!</div>
			<div class="container_12">
				<div class="banners">
				<?php
			 $limit = 20;
            $jumlah_record = $conn->query("SELECT * from paket_wisata");
            $jml = $jumlah_record->num_rows;
            $halaman = ceil($jml / $limit);
            $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;

            $start = ($page - 1) * $limit;

			$sql = $conn->query("SELECT * FROM paket_wisata 
				join kategori on paket_wisata.id_kategori=kategori.id_kategori order by tanggal desc");
			while($data = $sql->fetch_assoc()){
			
			?>
					<div class="grid_4">
						<div class="banner">
							<img src="upload/paket/<?php echo $data['gambar'] ?>" width="300" height="363.99" alt="">
							<div class="label">
								<div class="title"><?php echo $data['nama'] ?></div>
								<div class="price"><?php echo $data['status'] ?></div>
								<div class="price"><?php echo $data['lama'] ?><span><?php echo $data['harga'] ?></span></div>
								<a href="detail_paket.php?detail=<?php echo $data['id_paket'] ?>">LEARN MORE</a>
							</div>
						</div>
					</div>
			<?php  } ?>
					
				</div>
			</div>
			<div class="paging" style="margin-top:50px">
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