<?php
/* conexão à base de dados Trabalho final*/
$mysql_id = mysql_connect('localhost', 'Carlos', '1234');
mysql_select_db('projeto',$mysql_id);
if(!mysql_select_db('projeto',$mysql_id)){
die ('Erro'.mysql_error());
}
$query='update utilizadores set Username="CarlosM",Email="Carlos5@hotmail.com" where ID_Utilizadores=1';
$result=mysql_query($query);
if(!$result){
echo(mysql_error());
}
else{
echo("O Registo foi actualizado!");
}