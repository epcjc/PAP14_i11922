<?php
/* conexão à base de dados Trabalhofinal*/
$mysql_id = mysql_connect('localhost', 'Carlos', '1234');
mysql_select_db('projeto',$mysql_id );
if(!$mysql_id){ die('erro ao ligar à base de dados'.mysql_error());
}
if($mysql_id){
print('A ligação à base de dados foi efectuada com sucesso');
}


?>


