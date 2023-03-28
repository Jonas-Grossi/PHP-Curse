<?php
//function NomeDaFunction($arg1,$arg2,$arg3,...,$argn)
//{
  //  codigo a ser executado;
//}

function show(){
    echo"Olá\n";
    echo "world!";
}

function show2($nome){
    echo"Olá\n";
    echo "$nome !" ;
}
show();
show2("jose ");


function soma($numA,$numB){
return $numA + $numB;
}
soma(5,6);
?>
