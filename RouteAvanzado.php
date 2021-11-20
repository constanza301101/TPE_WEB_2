<?php
    require_once 'Controller/ProductsController.php';
    require_once 'Controller/MarksController.php';
    require_once 'Controller/LoginController.php';
    require_once 'Controller/UserController.php';
    require_once 'RouterClass.php';
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
    define("LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');

    $r = new Router();

    // rutas
    //HOME
    $r->addRoute("home", "GET", "ProductsController", "Home");
    $r->addRoute("mark", "GET", "MarksController", "HomeMarks");
    $r->addRoute("filterMark", "POST", "ProductsController", "FilterProductsByMark");
    $r->addRoute("itemDetail/:ID", "GET", "ProductsController", "ItemDetail");
    //LOGIN
    $r->addRoute("login", "GET", "LoginController", "Login");
    $r->addRoute("register", "GET", "LoginController", "Register");
    $r->addRoute("newUser", "POST", "LoginController", "NewUser");
    $r->addRoute("verify", "POST", "LoginController", "VerifyUser");
    $r->addRoute("admin", "GET", "LoginController", "ShowAdmin");
    $r->addRoute("logout", "GET", "LoginController", "Logout");
    //ADMIN USER
    $r->addRoute("adminUsers", "GET", "UserController", "SowUsers");
    $r->addRoute("editUser/:ID", "GET", "UserController", "EditUser");
    $r->addRoute("updateUser/:ID", "POST", "UserController", "UpdateUser");
    $r->addRoute("deleteUser/:ID", "GET", "UserController", "DeleteUser");
    //PRODUCTOS
    $r->addRoute("insert", "POST", "ProductsController", "InsertProduct");
    $r->addRoute("delete/:ID", "GET", "ProductsController", "DeleteProduct"); 
    $r->addRoute("edit/:ID", "GET", "ProductsController", "EditProduct");
    $r->addRoute("update/:ID", "POST", "ProductsController", "UpdateProduct");
    //MARCAS   
    $r->addRoute("insertMark", "POST", "MarksController", "InsertMark");
    $r->addRoute("deleteMark/:ID", "GET", "MarksController", "DeleteMark");
    $r->addRoute("editMark/:ID", "GET", "MarksController", "EditMark");
    $r->addRoute("updateMark/:ID", "POST", "MarksController", "UpdateMark");

    //Ruta por defecto.
    $r->setDefaultRoute("ProductsController", "Home");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>