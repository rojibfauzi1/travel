		<header>
			<div class="container_12">
				<div class="grid_12">
					<div class="menu_block">
						<nav class="horizontal-nav full-width horizontalNav-notprocessed">
							<ul class="sf-menu">
								<li class="current"><a href="index.php">BERANDA</a></li>
								<li><a href="berita.php">BERITA</a></li>
								<li><a href="paket_wisata.php">PAKET WISATA</a></li>
								<li><a href="galeri.php">GALERI</a></li>
								<li><a href="#">Profil</a>
           <ul style="z-index:9999">
          <?php  
        $sql = "SELECT * FROM profil order by id_profil desc limit 0,10";
        $s = $conn->query($sql);
        while($row=$s->fetch_assoc()){
        ?>
            <li><a href="profil.php?id=<?php echo $row['id_profil'] ?>"><?php echo $row['nama'] ?></a></li>
        <?php } ?>
          </ul>
         </li>
								<li><a href="kritiksaran.php">KRITIK & SARAN</a></li>
							</ul>
						</nav>
						<div class="clear"></div>
					</div>
				</div>
				<div class="grid_12">
					<h1>
						<a href="index.html">
							<img src="asset/images/logo.png" alt="Your Happy Family">
						</a>
					</h1>
				</div>
			</div>
		</header>