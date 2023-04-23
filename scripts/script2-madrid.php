<?php
/**
* Clase llamada Perro con dos propiedades (nombre y raza) y 
* con dos métodos llamados mostrarNombre() y mostrarRaza().
* @access public
* @link https://www.youtube.com/watch?v=VAH-ixdFWFs&ab_channel=ThePetCollective
* @author Marina Madrid García
* @verion abril2023
*/
class Perro {
 //Declaración de propiedades
 public $nombre = 'Joey';    //Nombre del perro
 public $raza = 'mestizo';   //Raza del perro
 
 //Declaración de métodos
 /**
 *Función que muestra el nombre del perro
 * @access public
 * @param String $nombre nombre del perro
 * @link https://www.cutiedogs.com
 * @author Marina Madrid García
 * @version abril2023
 */
 public function mostrarNombre($nombre){
  echo $this->nombre = $nombre;
 }

 /**
 *Función que muestra la raza del perro
 * @access public
 * @param String $raza raza del perro
 * @link https://www.razasdeperro.com
 * @author Marina Madrid García
 * @version abril2023
 */
 public function mostrarRaza($raza){
  echo $this->raza = $raza;
 }
}
?>
