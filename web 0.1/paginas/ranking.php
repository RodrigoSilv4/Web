<?php
ob_start();

$conn = mysql_connect("127.0.0.1", "root", ""); // ""  = SENHA DO MYSQL
if(!$conn)
	die("Nao foi possivel conectar ao banco de dados, tente novamente mais tarde!");

$db = mysql_select_db("pbdb");  //NOME DO BANCO DE DADOS (DB)
if(!$db)
	die("Houve um problema ao selecionar o banco de dados, tente novamente mais tarde!");

$loginserverinfo = "2"; // 1= ONLINE , 2= OFFLINE

?>


<?php

$query = mysql_query("SELECT * FROM accounts ORDER BY exp DESC LIMIT 0, 20") or die(mysql_error());

$rank = 1;
echo "<p>RANKING TOP 20</p>";
echo "<table width=\"591\" border=\"0\">";
echo "<tr>";
echo "<td width=\"50\">posição</td>";
echo "<td width=\"100\">Nome</td>";
echo "<td width=\"50\">Experiência</td>";
echo "<td width=\"50\">Kills</td>";
echo "<td width=\"50\">deaths</td>";
echo "<td width=\"50\">Patente</td>";
echo "</tr>";
while($array = mysql_fetch_object($query)) {
echo "<tr>";
echo sprintf("<td>%d</td>", $rank++);
echo sprintf("<td>%s</td>", $array->player_name);
echo sprintf("<td>%d</td>", $array->exp);
echo sprintf("<td>%d</td>", $array->kills_count_s);
echo sprintf("<td>%d</td>", $array->deaths_count_s);
echo sprintf("<td><img src=\"../Pats/%s.gif\"/></td>", $array->rank);
echo "</tr>";
} 
echo "</table>";

//credito tDarkFall
?>