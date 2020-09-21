

<?
session_start();
 echo $_SESSION['helyes'];
if($_SESSION['helyes'] != $_POST['osszeg'])
{
	die(" <script>alert('számolj jobban!')</script>");
}
if(trim($_POST['felado']) == NULL)
{
	die(" <script>alert('adj meg emailt')</script>");
}

if(trim($_POST['targy']) == NULL)
{
	die(" <script>alert('adj meg tárgyat!')</script>");
}





mail( "enmagam@server.com", $_POST['targy'] , $_POST['emailtargy'] , "From:" . $_POST['felado']);
	echo"<script>alert('Gratulálunk sikeresen elkültél egy levelet!')
	parent.location.href = 'http://localhost/szabo_daniel/menu/?p='</script>";
	
 



?>

