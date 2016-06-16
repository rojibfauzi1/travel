<?php 
require_once("conf/koneksi.php");
include 'asset/php/head.php'; ?>
	<body class="page1" id="top">
<!--==============================header=================================-->
<?php include 'asset/php/header.php'; ?>
		<div class="slider_wrapper">
			<div id="camera_wrap" class="">
				<?php
					$sql = $conn->query("SELECT * FROM paket_wisata  order by tanggal asc limit 0,3");
					
					while($data = $sql->fetch_assoc()){

					
				?>
				<div data-src="asset/images/slide.jpg">
					<div class="caption fadeIn">
						<h2><?php echo $data['nama'] ?></h2>
						<div class="price">
							FROM
							<span><?php echo $data['harga'] ?></span>
						</div>
						<a href="detail_paket.php?detail=<?php echo $data['id_paket'] ?>">LEARN MORE</a>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
<!--==============================Content=================================-->
		<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - February 10, 2014!</div>
			<div class="container_12">
				<div class="grid_3">
				<?php
					$sql = $conn->query("SELECT * FROM paket_wisata order by tanggal asc limit 1,1");
					
					while($data = $sql->fetch_assoc()){

					if($data['status'] == 'hot promo'){
				?>
					<div class="banner">
						<img src="asset/images/ban_img1.jpg" alt="">
						<div class="label">
							<div class="title"><?php echo strtoupper($data['nama'])  ?></div>
							<div class="price">FROM<span>Rp.<?php echo $data['harga'] ?></span></div>
							<a href="detail_paket2.php?detail=<?php echo $data['id_paket'] ?>">LEARN MORE</a>
						</div>
					</div>
					<H5 style="padding-top:0;margin-top:-25px" align="center"><a href="detail_paket2.php?detail=<?php echo $data['status'] ?>" >HOT PROMO</a></H5>
					<?php }}	  ?>
				</div>

				<div class="grid_3">
				<?php
					$sql = $conn->query("SELECT * FROM paket_wisata order by tanggal asc");
					
					$data = $sql->fetch_assoc();


				?>
					<div class="banner">
						<img src="asset/images/ban_img2.jpg" alt="">
						<div class="label">
							<div class="title"><?php echo $data['nama'] ?></div>
							<div class="price">FROM<span><?php echo $data['harga'] ?></span></div>
							<a href="detail_paket.php?detail=<?php echo $data['id_paket'] ?>">LEARN MORE</a>
						</div>
					</div>
					<H5 style="padding-top:0;margin-top:-25px" align="center"><a href="paket_wisata.php">PAKET TERBARU</a></H5>
				<?php  ?>
				</div>
				<div class="grid_3">
				<?php
					$sql = $conn->query("SELECT * FROM paket_wisata paket_wisata WHERE STATUS = 'paket terlaris' order by tanggal asc limit 1,1");
					
					while($data = $sql->fetch_assoc()){

					
				?>
					<div class="banner">
						<img src="asset/images/ban_img2.jpg" alt="">
						<div class="label">
							<div class="title"><?php echo $data['nama'] ?></div>
							<div class="price">FROM<span><?php echo $data['harga'] ?></span></div>
							<a href="detail_paket.php?detail=<?php echo $data['id_paket'] ?>">LEARN MORE</a>
						</div>
					</div>
					<H5 style="padding-top:0;margin-top:-25px" align="center"><a href="detail_paket2.php?detail=<?php echo $data['status'] ?>">PAKET TERLARIS</a></H5>
					<?php  }?>
				</div>
				<div class="grid_3">
				<?php
					$sql = $conn->query("SELECT * FROM paket_wisata WHERE STATUS = 'combo' order by tanggal asc limit 1,1");
					
					while($data = $sql->fetch_assoc()){

				?>
					<div class="banner">
						<img src="asset/images/ban_img3.jpg" alt="">
						<div class="label">
							<div class="title"><?php echo $data['nama'] ?></div>
							<div class="price">FROM<span><?php echo $data['harga'] ?></span></div>
							<a href="detail_paket.php?detail=<?php echo $data['id_paket'] ?>">LEARN MORE</a>
						</div>
					</div>
					<H5 style="padding-top:0;margin-top:-25px" align="center"><a href="detail_paket2.php?detail=<?php echo $data['status'] ?>">COMBO</a></H5>
					<?php } ?>
				</div>
				<div class="clear"></div>
				<div class="grid_6">
					<H4>Berita Terbaru</H4>
						<?php
				$sql = $conn->query("SELECT * FROM berita order by tanggal asc limit 0,6");
				while ($row=$sql->fetch_assoc()) {
					
				?>
				<div class="grid_4">
					<div class="block1">
						<time datetime="2014-01-01"><?php echo date('d',strtotime($row['tanggal'])) ?><span><?php echo date('M',strtotime($row['tanggal'])) ?></span></time>
						<div class="extra_wrapper">
							<div class="text1 col1"><a href="detail_berita.php?detail=<?php echo $row['id_berita'] ?>"><?php echo $row['judul']; ?></a></div>
							<?php echo substr($row['deskripsi'], 0,100) ?>
						</div>
					</div>
				</div>
				<br/><br/><br/><br/>
				<?php
				} ?>
					<!-- <div class="">
						<h5>HOT PROMO</h5>
						<img src="asset/images/page1_img2.jpg" alt="" class="img_inner noresize fleft"><br/>
						<h5>PAKET TERBARU</h5>
						<img src="asset/images/page1_img2.jpg" alt="" class="img_inner noresize fleft"><br/>
						<h5>PAKET TERLARIS</h5>
						<img src="asset/images/page1_img2.jpg" alt="" class="img_inner noresize fleft"><br/>
						<h5>COMBO</h5>
						<img src="asset/images/page1_img2.jpg" alt="" class="img_inner noresize fleft"><br/>
					</div> -->
					<!-- <h3>Booking Form</h3>
					<form id="bookingForm">
						<div class="fl1">
							<div class="tmInput">
								<input name="Name" placeHolder="Name:" type="text" data-constraints='@NotEmpty @Required @AlphaSpecial'>
							</div>
							<div class="tmInput">
								<input name="Country" placeHolder="Country:" type="text" data-constraints="@NotEmpty @Required">
							</div>
						</div>
						<div class="fl1">
							<div class="tmInput">
								<input name="Email" placeHolder="Email:" type="text" data-constraints="@NotEmpty @Required @Email">
							</div>
							<div class="tmInput mr0">
								<input name="Hotel" placeHolder="Hotel:" type="text" data-constraints="@NotEmpty @Required">
							</div>
						</div>
						<div class="clear"></div>
						<strong>Check-in</strong>
						<label class="tmDatepicker">
							<input type="text" name="Check-in" placeHolder='10/05/2014' data-constraints="@NotEmpty @Required @Date">
						</label>
						<div class="clear"></div>
						<strong>Check-out</strong>
						<label class="tmDatepicker">
							<input type="text" name="Check-out" placeHolder='20/05/2014' data-constraints="@NotEmpty @Required @Date">
						</label>
						<div class="clear"></div>
						<div class="tmRadio">
							<p>Comfort</p>
							<input name="Comfort" type="radio" id="tmRadio0" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' checked/>
							<span>Cheap</span>
							<input name="Comfort" type="radio" id="tmRadio1" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' />
							<span>Standart</span>
							<input name="Comfort" type="radio" id="tmRadio2" data-constraints='@RadioGroupChecked(name="Comfort", groups=[RadioGroup])' />
							<span>Lux</span>
						</div>
						<div class="clear"></div>
						<div class="fl1 fl2">
							<em>Adults</em>
							<select name="Adults" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
								<option>1</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
							</select>
							<div class="clear"></div>
							<em>Rooms</em>
							<select name="Rooms" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
								<option>1</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
							</select>
						</div>
						<div class="fl1 fl2">
							<em>Children</em>
							<select name="Children" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
								<option>0</option>
								<option>0</option>
								<option>1</option>
								<option>2</option>
							</select>
						</div>
						<div class="clear"></div>
						<div class="tmTextarea">
							<textarea name="Message" placeHolder="Message" data-constraints='@NotEmpty @Required @Length(min=20,max=999999)'></textarea>
						</div>
						<a href="#" class="btn" data-type="submit">Submit</a>
					</form> -->
				</div>
				<div class="grid_5 prefix_1">
					<h3>Welcome</h3>
				<?php
				  $sql = $conn->query("SELECT * FROM profil where nama='Sejarah' ");
				  while($row=$sql->fetch_assoc()){
				  ?>	
					<img src="asset/images/page1_img1.jpg" alt="" class="img_inner fleft">
					<div class="extra_wrapper">
						<p><?php echo substr($row['isi'], 0,100) ?></p>
						
					</div>
				<?php  } ?>
					<div class="clear cl1"></div>
					<p>Proin pharetra luctus diam, a scelerisque eros convallis </p>
				  <h4>Clients’ Quotes</h4>
				  <?php
				  $sql = $conn->query("SELECT * FROM kritiksaran order by tanggal desc limit 0,2");
				  while($row=$sql->fetch_assoc()){
				  ?>
					<blockquote class="bq1">

						<img src="asset/images/page1_img2.jpg" alt="" class="img_inner noresize fleft">
						<div class="extra_wrapper">
							<p><?php echo substr($row['kritik'], 0,100) ?></p>
							<div class="alright">
								<div class="col1"><?php echo $row['nama']; ?></div>
							<!-- 	<a href="#" class="btn">More</a> -->
							</div>
						</div>
					</blockquote>
					<?php } ?>
				</div>
				<div class="grid_12">
					<!-- <h3 class="head1">Latest News</h3> -->
				</div>
			
				
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
			$(function() {
				$('#bookingForm input, #bookingForm textarea').placeholder();
			});
		</script>
	</body>
</html>

