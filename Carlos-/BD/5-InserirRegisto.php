<?php
/* conexão à base de dados TrabalhoFinal*/
$mysql_id = mysql_connect('localhost', 'Carlos', '1234');
mysql_select_db('projeto',$mysql_id);
if(!mysql_select_db('projeto',$mysql_id)){
die ('Erro'.mysql_error());
}
$query='insert into utilizadores set Username="i11981",Pass="1234", Email="i11922@epcjc.net", Nome="Carlos", Admin= 0';
$query='insert into utilizadores set Username="Daniel",Pass="1234", Email="carlos.net", Nome="Daniel", Admin= 0';
$result=mysql_query($query);
if(!$result){
echo(mysql_error());
}
else{
echo("Adicionado o Registo");
}
