<?php
require '../Config/Conexion.php';

class Usuario{
    protected $id_usuario;
    protected $email;
    protected $password;
    protected $id_tipo_usuario;

    private $db;
    private $usuarios;
 


    public function __construct(){
       /* $this->db=Conectar::conexion();
        $this->usuarios=array();*/
    }

    public function get_usuarios(){
        $consulta=$this->db->query("select * from usuario;");
        while($filas=$consulta->fetch_assoc()){
            $this->usuarios[]=$filas;
        }
        return $this->usuarios;
    }


    protected function InsertarUsuario(){
      //  $ic = new Conexion();
        // FOTO 1
    }

    protected function SearchByUser(){
     //   $ic = new Conexion();
        $sql = "SELECT * FROM usuario WHERE email = '$this->email'";
      //  $consulta = $ic->db->prepare($sql);
     //   $consulta->execute();
       // $objetoConsulta = $consulta->fetchAll(PDO::FETCH_OBJ);
        //return $objetoConsulta;
    }

}

?>
