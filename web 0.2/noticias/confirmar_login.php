<?php
$login=$_POST["login"];
$senha=$_POST["senha"];
//include "conectar_mysql.inc";
$conexao=mysql_connect("localhost","root","");
mysql_select_db("noticias");
$sql="SELECT * FROM usuarios where login='$login' and senha='$senha' ";
$resultado=mysql_query($sql);
$row=mysql_num_rows($resultado);
if($row==0) {  ?>
<script language="JavaScript">
window.location.href="login.php";
</script>
<?php
} 
else {
$pegar=mysql_fetch_array($resultado);
$id=$pegar["id_usuarios"];
$nome=$pegar["nome"];
setcookie("id",$id);
setcookie("nome",$nome);
setcookie("login",$login);
setcookie("senha",$senha);

?>
<script language="JavaScript">
window.location.href="incluir_noticia.php";
</script>
<?php


}
 ?>

