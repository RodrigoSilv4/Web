<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php 
include "verifica.php";
//$data=date("d/m/Y");
$titulo=$_POST["titulo"]; //echo "$titulo";
$mensagem=$_POST["mensagem"];//echo "$mensagem";
$id_usuario=$_COOKIE["id"]; //echo "$id_usuario";
$conexao=mysql_connect("localhost","root","");
mysql_select_db("noticias");
$sql="INSERT INTO noticias values";
$sql.="('null','$titulo','$mensagem',$id_usuario)";
$resultado=mysql_query($sql);
echo "Notícia Incluida com Sucesso!";


?>
</body>
</html>
