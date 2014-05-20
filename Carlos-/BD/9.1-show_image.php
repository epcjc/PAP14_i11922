<?php
$mysql_id = mysql_connect('localhost', "Carlos", "1234");
mysql_select_db('projeto',$mysql_id);
$result = mysql_query("SELECT Imagem FROM utilizadores WHERE ID_Utilizadores =$_GET[ID_Utilizadores]");
$row = mysql_fetch_object($result);
header('Content-type: BD/Koala.jpg');
echo $row->Imagem;
?>


