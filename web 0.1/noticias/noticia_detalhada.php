<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php 
$id_noticias=$_GET["id_noticias"];// echo "$id_noticias";

$conexao=mysql_connect("localhost","root","");
mysql_select_db("noticias");
$sql="SELECT * FROM noticias where id_noticias='$id_noticias'";
$resultado=mysql_query($sql); 
$pegar=mysql_fetch_array($resultado);

echo "$pegar[mensagem]";
?>


</body>
</html>
