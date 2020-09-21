<?php
session_start(); // egy munka menet kezdete ( így nézi meg hogy ugyan az a felhasználó vagy e ) böngésző bezárásáig megtartja
?>

<!DOCTYPE html>
<html>
<head>
	<title>menu</title>
</head>
<style>
	div#menu a 
	{
		display: block;
		
	}
</style>
<body>
	<h1>Oldal címe, fejléce, logója</h1>
	<div id='menu'>
	
		<a href='./'>Főoldal</a>  <!-- ez a főoldal szóval az első lap		-->
		<a href='index.php?p=2'>Termékek</a><!-- ezt akár úgy is lehet hogy href='./?p=1' mert a index.php AZ ALAP -->
		<a href='index.php?p=3'>Elérhetőség</a>
		<a href='index.php?p=4'>Referenciák</a>
		<a href='index.php?p=5'>email</a>
	</div>
	
	<div id='tartalom'>
		<?php
		if(isset( $_GET['p']) )
			$p =  $_GET['p'];
		else
			$p = "";
		
		if($p == "")
			include("akcio.php") ; else
		if($p == 2)
			echo"Termékek" ;else
		if($p == 3)
			echo " hello"; else
		if($p == 4)
			echo"Referenciák" ;
		if($p == 5)
		{
			include("email.php");
		}
		else 
			include("rossz.php");
		
		
		
		
		
		
		
		?>
	</div>
	
	<div id='lablec'>
	<?php
		$fp = Fopen("szamlalo.txt", "r");
		$n = Fread($fp, filesize("szamlalo.txt"));
		Fclose($fp);
		if($_SESSION['pillanat'] != "telefon")
		{	
			$_SESSION['pillanat'] = "telefon";
			$n = $n +1;
			$fp = Fopen("szamlalo.txt", "w");
			Fwrite($fp, $n);
			Fclose($fp);
		}
		
		
		//echo session_id(); // egy munkamenet folyamata
	?>
		Te vagy a <?php echo  $n ;?>. látogató
	</div>
	
	<iframe name='kisablak'></iframe>
</body>



<?php





?> 

</html>