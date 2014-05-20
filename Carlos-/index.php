<?php

//para testar
include_once 'valida.php';
include_once'template.php';
$tplC = file_get_contents("conteudo.tpl");
$conteudo= str_replace("_Title_", "Jogos.inc", $tplC);


if(isset($_POST['Nome'])){
   $dados = 'Nome:'.$_POST['Nome'].'<br>';
   $dados .= 'Morada:'.$_POST['Morada'].'<br>';
   $dados .= 'Sexo:'.((isset($_POST['Sexo']))?'Masculino':'Feminino').'<br>';
   $dados .= 'Idade'.$_POST['Idade'].'<br>';
   $dados = 'Empresa:'.$_POST['Empresa'].'<br>';
   $conteudo= str_replace("_Conteudo_", $dados, $conteudo);
}else{
   $conteudo= str_replace("_Conteudo_", file_get_contents('form.tpl'), $conteudo);
}

$tplM = str_replace("_Conteudo_", $conteudo, $tplM);


print $tplM;
?>