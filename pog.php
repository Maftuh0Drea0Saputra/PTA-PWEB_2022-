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
        <center><h2>:---- FillExE ----:</h2></center>
		<center><h4>(RIWAYAT TRANSAKSI)</h4></center>
    <div class="box" >
<?php   
echo "<head> <title> WIDE </title> </head>";
	$fp = fopen("Fillexe.txt", "r");
	echo "<table border=0>";

	while ($isi = fgets($fp, 80)) {
		$pisah = explode("|", $isi);
		echo "<tr> <td> Nama Barang </td><td>:	$pisah[0]</td></tr>";
		echo "<tr> <td> Warna Barang</td><td>:	$pisah[1]</td></tr>";
		echo "<tr> <td> Jumlah		</td><td>:	$pisah[2]</td></tr>";
        echo "<tr> <td> Biaya       </td><td>:	$pisah[3]</td></tr>";
		echo "<tr> <td> Tanggal 	</td><td>:	$pisah[4]</td></tr> 
		<tr> 
			<td>&nbsp</td>
			<td>&nbsp</td>
		</tr>";
	}

	echo "</table>";
?>
    </div>
</div>
