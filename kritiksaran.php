<?php 
require_once("conf/koneksi.php");
include 'asset/php/head.php';
include 'kirim_pesan.php';
 ?>

	<body>
<!--==============================header=================================-->
		<?php include 'asset/php/header.php'; ?>
<!--==============================Content=================================-->
		<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - February 10, 2014!</div>
			<div class="container_12">
				<div class="grid_5">
					<h3>CONTACT INFO</h3>
					<div class="map">
						<p><span class="blog">Maecenas vehicula egestas venenatis. Duis massa elit, auctor non pellentesque vel aliquet sit amet erat. Nullam eget dignissim nisi, aliquam feugiat nibh. </span></p>
						<div class="clear"></div>
						<figure class="">
							<iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
						</figure>
						<address>
							<dl>
								<dt>The Company Name Inc. <br>
									8901 Marmora Road,<br>
									Glasgow, D04 89GR.
								</dt>
								<dd><span>Freephone:</span>+1 800 559 6580</dd>
								<dd><span>Telephone:</span>+1 800 603 6035</dd>
								<dd><span>FAX:</span>+1 800 889 9898</dd>
								<dd>E-mail: <a href="#" class="col1">mail@demolink.org</a></dd>
							</dl>
						</address>
					</div>
				</div>
				<div class="grid_6 prefix_1">
					<h3>BERI KAMI SARAN</h3>
					<?php
$maxId = $conn->query("SELECT MAX(id_kritiksaran) AS max_id FROM kritiksaran");
        
        $id=$maxId->fetch_assoc();
        $id_max = $id['max_id'];
        
        $id_belakang = (int) substr($id_max, 1, 3);
        $id_belakang++;
        
        $id_awal = "K"; 
        $idBaru = $id_awal . sprintf("%03s", $id_belakang);
					?>
					<form method="post" action="">
						<table>
			<input type="hidden" value="<?php echo $idBaru ?>" name="id"  />
						<tr>	
						<td><label class="name">Nama</label></td>
							<td><input type="text" placeholder="Name:" name="nama"  /></td>
							
						</tr><br/>
						<tr>
						<td><label class="email">Email</label></td>
							<td><input type="email" placeholder="Email:" name="email"  /></td>
							
						</tr><br/>
						<tr>
						<td><label class="message">Pesan</label></td>
							<td><textarea rows="5" placeholder="Message:" name="pesan" ></textarea></td>
							
						</tr><br/>
						<tr><td><div>
							<div class="clear"></div>
							<div class="btns">
							<!-- 	<a href="#" data-type="reset" class="btn">Clear</a> -->
								<input type="submit"  class="btn" value="Submit" name="kirim">
							</div>
						</div></td></tr><br/>
						</table>
					</form>
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
		</script>
	</body>
</html>