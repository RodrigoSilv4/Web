<?php
// ************************************************************** //
// *                                                            * //
// * Web 0.1 Master                                             * //
// * Version: 0.0.2 Beta Edition                                * //
// * Release Date: 07/10/2016                                   * //
// * Build: 0.0.2                                               * //
// *                                                            * //
// ************************************************************** //
// *                                                            * //
// * Powered by RodrigoSilva                                    * //
// * E-Mail: rodrigosilvads@gmail.com                           * //
// * Skype: destroyerr.pkd                                      * //
// * Phone: (22) 981571943                                      * //
// *                                                            * //
// ************************************************************** //

//Config Download
$link1 = "LINK DE DOWNLOAD"; //Link Cliente Completo

$link2 = "LINK DE DOWNLOAD"; //Link Patch
//Config Team
$name1 = "NOME DO USUARIO"; //  Nome Do Usuario

$name2 = "NOME DO USUARIO"; //  Nome Do Usuario

$name3 = "NOME DO USUARIO"; //  Nome Do Usuario

$name4 = "NOME DO USUARIO"; //  Nome Do Usuario

$name5 = "NOME DO USUARIO"; //  Nome Do Usuario

$cargo1 = "NOME DO CARGO"; //  Nome Do Cargo

$cargo2 = "NOME DO CARGO"; //  Nome Do Cargo

$cargo3 = "NOME DO CARGO"; //  Nome Do Cargo

$cargo4 = "NOME DO CARGO"; //  Nome Do Cargo

$cargo5 = "NOME DO CARGO"; //  Nome Do Cargo
$img1 = "Nome Da Foto"; //  coloque o nome que esta foto Ex: rodrigo.png  lembrando que tera que colocar a foto na pasta img

$img2 = "Nome Da Foto"; //  coloque o nome que esta foto Ex: rodrigo.png  lembrando que tera que colocar a foto na pasta img

$img3 = "Nome Da Foto"; //  coloque o nome que esta foto Ex: rodrigo.png  lembrando que tera que colocar a foto na pasta img

$img4 = "Nome Da Foto"; //  coloque o nome que esta foto Ex: rodrigo.png  lembrando que tera que colocar a foto na pasta img

$img5 = "Nome Da Foto"; //  coloque o nome que esta foto Ex: rodrigo.png  lembrando que tera que colocar a foto na pasta img

//Config Topo
$title = "Rodrigo"; //  Nome Do Seu Game
$rc = "Numero Do Seu RC"; //  Numero Do Seu RC

//CONFIG RANK
ob_start();

$conn = mysql_connect("127.0.0.1", "root", ""); // ""  = SENHA DO MYSQL
if(!$conn)
	die("Nao foi possivel conectar ao banco de dados, tente novamente mais tarde!");

$db = mysql_select_db("pbdb");  //NOME DO BANCO DE DADOS (DB)
if(!$db)
	die("Houve um problema ao selecionar o banco de dados, tente novamente mais tarde!");
	?>