<?php
class LoginModel{
    private $db;
    //CREO LA CONEXIÓN CON LA BASE DE DATOS
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=carrito_de_compras;charset=utf8', 'root', '');
    }
    //TRAIGO EL USUARIO
    function GetUser($user){
        $sentencia = $this->db->prepare("SELECT * FROM usuario WHERE email=?");
        $sentencia->execute(array($user));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }
    function CreateUser($user, $password_hash, $admin){
        $sentencia = $this->db->prepare("INSERT INTO usuario (email, password, admin) VALUES(?,?,?)");
        $sentencia->execute(array($user,$password_hash,$admin));
    }
}
?>