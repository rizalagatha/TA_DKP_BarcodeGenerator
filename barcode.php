<html>
<head>
<style>
p.inline {display: inline-block;}
span { font-size: 13px;}
</style>
<style type="text/css" media="print">
    @page 
    {
        size: auto;   
        margin: 0mm;  

    }
</style>
</head>
<body onload="window.print();">
	<div style="margin-left: 5%">
		<?php
		include 'barcode128.php';
		$product = $_POST['product'];
		$product_id = $_POST['product_id'];
		$rate = $_POST['rate'];

		class Barcode {
			private $tipe;
			private $fungsi;
			private $hasil;

			public function __construct($tipe, $fungsi, $hasil){
				$this->tipe = $tipe;
				$this->fungsi = $fungsi;
				$this->hasil = $hasil;
			}
			public function setTipe($tipeBaru){
				$this->tipe = $tipeBaru;
				}
				public function setFungsi($fungsiBaru){
				$this->posisi = $fungsiBaru;
				}
				public function getTipe(){
				return $this->tipe;
				}

				public function getFungsi(){
					return $this->fungsi;
					}
				public function getHasil(){
				return $this->hasil;
				}
				}
				$barcode = new Barcode(" Barcode Tipe Code 128", "Digunakan di bidang logistik dan industri transportasi", "Barcode yang dihasilkan :");

				echo $barcode->getTipe() . "<br>";
				echo $barcode->getFungsi() . "<br>";
				echo $barcode->getHasil() . "<br>";
			
		for($i=1;$i<=$_POST['print_qty'];$i++){
			echo "<p class='inline'><span ><b>Item: $product</b></span>".bar128(stripcslashes($_POST['product_id']))."<span ><b>Price: ".$rate." </b><span></p>&nbsp&nbsp&nbsp&nbsp";
		}

		?>
	</div>
</body>
</html>