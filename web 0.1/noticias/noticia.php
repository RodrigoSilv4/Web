<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
$conexao=mysql_connect("localhost","root","");
mysql_select_db("noticias");
$sql="SELECT * FROM noticias order by id_noticias desc limit 5";
$resultado=mysql_query($sql); ?>
<table width="415" height="66" border="1">
  <tr> 
    <td width="227" align="center"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">&Ugrave;ltimas 
      Not&iacute;cias</font></strong></td>
    <td width="87" align="center"><a href="incluir_noticia.php">Postar Noticia</a></td>
  </tr>
  <?php

while($pegar=mysql_fetch_array($resultado)) { ?>
  <tr> 
    <td colspan="2" align="left"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
      <a href="noticia_detalhada.php?id_noticias=<?php echo "$pegar[id_noticias]"; ?>">
      <?php  echo "$pegar[titulo]"; ?>
      </a></font></strong></td>
  </tr>
  <?php }
?>
</table>
</body>
</html>
