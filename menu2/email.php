<style>
	form{
		line-height: 36px;
	}
	span.cimke{
		display:inline: block;
		width:100px;
	}
</style>
<H1> kapcsolat</h1>

küldj nekünk egy e-mailt:
<form action='email_ir.php' method='POST' target='kisablak'>
	<span class=cimke > Feladó:</span>
	<input name='felado' type='email' placeholder ="example@example.com"><br>
	<span class=cimke > Tárgy:</span>
	<input name='targy' placeholder ="tárgy"><br>
	<textarea name='emailtargy' placeholder ="kérem az üzenetet"></textarea><br>
	
	<span class=cimke>
	<?php
		$a = rand(5,15);
		$b = rand(5,15);
		echo "$a + $b = ";
		$_SESSION['helyes'] = $a + $b;
	?>
	</span>
	<input type='number' name='osszeg'>
	<input type='submit' value='feladás'>
	<hr>
</form>