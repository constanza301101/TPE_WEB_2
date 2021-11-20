<?php
require_once "./libs/smarty/Smarty.class.php";

class LoginView{
    private $title;
    private $smarty;

    function __construct(){
        $this->title = "Tabla de productos";
        $this->smarty = new Smarty();
    }
    //MUESTRA EL LOGIN
    function ShowLogin($message = NULL){
        $this->smarty->assign('message', $message);
        $this->smarty->display('templates/login.tpl');        
    }
    //MUESTRA EL FORMULARIO DE REGISTRO
    function ShowRegister($message = NULL){
        $this->smarty->assign('message', $message);
        $this->smarty->display('templates/register.tpl');            
    }
    //MUESTRA LA PAGINA PARA EL ADMIN
    function ShowVerify($products, $marks){
        $this->smarty->assign('titulo', $this->title);
        $this->smarty->assign('productos', $products);
        $this->smarty->assign('marks', $marks);
        // muestro el template 
        $this->smarty->display('templates/verify.tpl'); 
    }
}
?>