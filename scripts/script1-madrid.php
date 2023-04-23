<?php
 /**
 * Función que devuelve el cuadrado de un número introducido como parámetro
 * @param int $num número introducido
 * @return double cuadrado del número
 * @access public
 * @link https://www.educalim.com/biblioteca/mate/mate.html
 * @author Marina Madrid García
 * @version 23abril2023
 */
 function cuadrado($num) {
 return $num * $num; //devolver el resultado
 }
 /**
* Función que realiza suma, resta o multiplica, según indiquemos por parámetro, 
dos números introducidos por paramétro y devuelve su resultado
 * @param double $n1 primer número
 * @param double $n2 segundo número
 * @param string $operacion operación a realizar
 * @return double $resultado devuelve el resultado de las operaciones
 * @access public
 * @link https://www.educalim.com/biblioteca/mate/mate.html
 * @author Marina Madrid García
 * @version 23abril2023
 */
 function operaciones($n1, $n2, $operacion) {
 $resultado = 0;
 if ($operacion == "Sumar") {
 $resultado = $n1 + $n2;
 } else if ($operacion == "Restar") {
 $resultado = $n1 - $n2;
 } else if ($operacion == "Multiplicar") {
 $resultado = $n1 * $n2;
 }
 return $resultado; // Devolver el resultado
 }
?>
