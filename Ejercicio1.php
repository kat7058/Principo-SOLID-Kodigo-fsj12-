
<?php
/**Principio que fue violado es el de SINGLE RESPONSABILITY el cual dice que "Una clase debe tener una y solo una razon para cambiar 
 lo que significa qu una clase debe tener solo un trabajo" 
 Solucion:
 Para este ejercicio que trata de guardar a un empleado en la base de datos se crearon dos clases una que solo se encarga de la conexion a la base y la clase 
 empleado donde consta de dos funciones con extencion a la clase conexion para asi poder hacer uso de las funciones que se encuentra en la clase conexionDB 
  */

class ConexionDB{
    public function connection(){
        return "The connection to the database was successful";
    }
}

class Employee extends ConexionDB{
    public $department;

    public function reportByDepartment($department){
        return $this->deparyment = $department;
    }

    public function saveEmployee(){
        $this->connection();
    }
}

?>