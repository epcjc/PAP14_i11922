<?php
//acesso à base de dados
$mysql_id = mysql_connect('localhost', "Carlos", "1234");
mysql_select_db('trabalhosi',$mysql_id);
//select
$query="select * from utilizadores order by ID_Utilizadores DESC";
$result=mysql_query($query);
//cria cabeçalho da tabela html
echo"<table border='2'>";
echo"<tr>";
echo"<td>";echo"ID_Utilizadores";echo"</td>";
echo"<td>";echo("Username");echo"</td>";
echo"<td>";echo"Pass";echo"</td>";
echo"<td>";echo"Email";echo"</td>";
echo"<td>";echo"Nome";echo"</td>";
echo"<td>";echo"Admin";echo"</td>";
echo"</tr>";
//apanha todos os resultados da query 
while($row=mysql_fetch_array($result)){
//--cria a tabela HTML para mostrar todos os dados
echo "<tr>";
echo "<td>";echo $row['ID_Utilizadores'];echo"</td>";
echo "<td>";echo $row['Username'];echo"</td>";
echo "<td>";echo $row['Pass'];echo"</td>";
echo "<td>";echo $row['Email'];echo"</td>";
echo "<td>";echo $row['Nome'];echo"</td>";
echo "<td>";echo $row['Admin'];echo"</td>";
echo"</tr>";
}
echo"</table>";
?>

