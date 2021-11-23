<?php
require_once "./View/LoginView.php";
require_once "./View/ProductsView.php";
require_once "./Model/LoginModel.php";
require_once "./Model/MarksModel.php";
require_once "./Model/ProductsModel.php";

class LoginController{

    private $view;
    private $productView;
    private $model;
    private $modelProducts;
    private $marksModel;

    function __construct(){
        $this->view= new LoginView();
        $this->productView = new ProductsView();
        $this->model= new LoginModel();
        $this->modelProducts = new ProductsModel();
        $this->marksModel = new MarksModel();;
    }
    //LLAMA AL LOGIN
    function Login(){
        $logeado = $this->checkLoggedIn();
        if($logeado){
            $this->productView->ShowLocation('admin');
        } else {
            $this->view->ShowLogin();
        }
    }
      //LLAMA A LA VISTA DEL REGISTRO DE UN NUEVO USUARIO
    function Register(){
        $logeado = $this->checkLoggedIn();
        if($logeado){
            $this->productView->ShowLocation('admin');
        } else {
            $this->view->ShowRegister();
        }
    }
    //GENERA UN NUEVO USUARIO
    function NewUser(){
        if(!empty($_POST['input_username']) && !empty($_POST['input_password']) && !empty($_POST['repeat_password'])){
            $user = $_POST['input_username'];
            $password = $_POST['input_password'];
            $admin = 0;
            if($password == $_POST['repeat_password']){
                $password_hash = password_hash($password, PASSWORD_DEFAULT);
                $this->model->CreateUser($user, $password_hash, $admin);
                $this->productView->ShowLocation('home');
            }else{
                $user = $_POST['input_username'];
                $this->view->ShowRegister('Las contraseñas no coinciden', $user);
            }
        }else{
            $this->view->ShowRegister('Complete todos los campos');
        }
    }
    //LLAMO AL LOGOUT
    function Logout(){
        session_start();
        session_destroy();
        header("Location: ".LOGIN);

    }
    //VEO SI ESTA LOGGEADO
    function checkLoggedIn(){
        session_start();
        if(isset($_SESSION['EMAIL']) && $_SESSION['ADMIN'] == 1){
            return true;
        }else{
            return false;
        }
        }
     
    //VERIFICO MI USUARIO
    function VerifyUser(){
        $user = $_POST["input_username"];
        $pass = $_POST["input_password"];

        if(isset($user)){
            $userFromDB = $this->model->GetUser($user);
            if(isset($userFromDB) && $userFromDB){
                // Existe el usuario
                if (password_verify($pass, $userFromDB->password)){
                    session_start();
                    if(isset($_SESSION['LAST_ACTIVITY']) && (time()-$_SESSION['LAST_ACTIVITY']>1000)){
                        header("Location: ".LOGOUT);
                    }
                    $_SESSION["EMAIL"] = $userFromDB->email;
                    $_SESSION["ADMIN"] = $userFromDB->admin;
                    $_SESSION['LAST_ACTIVITY'] = time();
                    if($userFromDB->admin == 1){
                        $this->productView->ShowLocation('admin');
                    }else{
                        $this->productView->ShowLocation('home');
                    }                }else{
                    $this->view->ShowLogin("Contraseña incorrecta");
                }

            }else{
                // No existe el user en la DB
                $this->view->ShowLogin("El usuario no existe");
            }
        }
    }
    //MUESTRA LA PAGUINA DONDE SE PUEDE MODIFICAR LOS PRODUCTOS Y MARCAS(esta función es llamada action 'admin';)
    function ShowAdmin(){
        $logeado = $this->checkLoggedIn();
        if($logeado){
            $marks = $this->marksModel->GetMarks();
            $products = $this->modelProducts->GetProducts();
            $this->view->ShowVerify($products, $marks);
        }else{
            $this->view->ShowLogin();
        }
    }
}
?>