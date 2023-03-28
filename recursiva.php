<?php
function calcularFatorial($numFatorial){
if($numFatorial <=1){
    $numFatorial = $numFatorial;

}else{
    $numFatorial *= calcularFatorial($numFatorial - 1);
}
return $numFatorial;
}

$num = 4;
echo calcularFatorial($num);

?>