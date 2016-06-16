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
            $jumlah_record = $conn->query("SELECT * from galeri");
            $jml = $jumlah_record->num_rows;
            $halaman = ceil($jml / $limit);
            $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;

            $start = ($page - 1) * $limit;

			$sql = $conn->query("SELECT * FROM galeri order by id_galeri desc limit $start,$limit");
			while($data = $sql->fetch_assoc()){
			
			?>
					<div class="grid_4">
						<div class="banner">
							<!-- <img src="upload/gallery/<?php echo $data['gambar'] ?>" width="300" height="363.99" alt=""> -->
							<!-- Trigger the Modal -->
<img id="myImg" src="upload/gallery/<?php echo $data['gambar'] ?>" alt="<?php echo $data['ket_lokasi'] ?>" width="300" height="363.99">

<!-- The Modal -->
<div id="myModal" class="modal modal-sm">
<!-- <div class="modal-dialog modal-sm"> -->

  <!-- The Close Button -->
  <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01">

  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
</div>
							<div class="label">
								
								<div class="price"><span><?php echo $data['ket_lokasi'] ?></span></div>
								<!-- <a href="#">LEARN MORE</a> -->
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
		});
				/*MODAL IMAGE*/
		// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    modalImg.alt = this.alt;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}	
		</script>
	</body>
</html>