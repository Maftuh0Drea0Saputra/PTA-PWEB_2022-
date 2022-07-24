
<link rel="stylesheet" href="style.css">
<nav>
		<input type="checkbox" id="check">
		<label for="check">
			<i id="btn"><ion-icon name="barcode-outline"></ion-icon></i>
			<i id="cancel"><ion-icon name="close-circle-outline"></ion-icon></ion-icon></i>
		</label>

		<img src="wide.png">
		<ul>
			<li ><a href="home.html">Home</a></li>
			<li ><a href="index.html">Lakukan Transaksi</a></li>
			<li ><a href="pog.php">Riwayat Transaksi</a></li>
		</ul>
	</nav>
<div class="background">
    <div class="box">
        <label>TRANSAKSI BERHASIL</label>
    <?php
        if(isset($_POST['submit'])){
            $bahan   = $_POST['nama'];  
            $warna   = $_POST['warna'];
            $jumlah  = $_POST['jb'];
            $biaya   = $_POST['biaya'];
            $tanggal = date('d-m-Y');
            $fp      = fopen("Fillexe.txt", "a");
        }

        $fp= fopen("Fillexe.txt", "a+");
        fputs($fp, "$bahan|$warna|$jumlah|$biaya|$tanggal\n");
        fclose($fp);
    ?>
    </div>

    <div class="box">
        <label class="tombol"><ion-icon name="trending-up-outline"></ion-icon><a href="pog.php"> Log Transaksi</a></label>
        <label class="tombol"><ion-icon name="home-outline"></ion-icon><a href="home.html"> Home </a></label>
    </div>
</div>