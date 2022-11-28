<?php
$numero1=2;
$numero2=4;
$operacion='/';
function operacion($numero1,$numero2,$operacion){
    
    switch ($operacion) {
        case '+':
            $resultado=$numero1 + $numero2;
            break;
        case '-':
            $resultado=$numero1-$numero2;
            break;
        case '*':
            $resultado=$numero1*$numero2;
            break;
        case '/':
            $resultado=$numero1/$numero2;
            break;
                                                
        default:
            break;
    }

    return $resultado;
}

echo operacion($numero1,$numero2,$operacion);

?>