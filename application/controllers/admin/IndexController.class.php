<?php

// application/controllers/admin/IndexController.class.php


class IndexController extends Controller{

    public function __construct(){
        $this->userModel = new UserModel();
        $this->roleModel=new RoleModel();
    }

    public function mainAction(){

        include CURR_VIEW_PATH . "main.html";

        // Load Captcha class

        $this->loader->library("Captcha");

        $captcha = new Captcha;

        $captcha->hello();

        $userModel = new UserModel("user");

        $users = $userModel->getUsers();
        

    }

    public function indexAction(){

        
        $users = $this->userModel->getUsers();
        $roles=$this->roleModel->getRoles();
        //var_dump(($roles));
        // Load View template
        View(CURR_VIEW_PATH . "index.html",push($users,$roles));
       // include  CURR_VIEW_PATH . "index.html";

    }

    public function menuAction(){
         $users = $this->userModel->getUsers();
        $roles=$this->roleModel->getRoles();
       // push($roles,$users);
      // return View(CURR_VIEW_PATH . "menu.view.php");
        include CURR_VIEW_PATH . "menu.view.php";

    }

    public function dragAction(){

        include CURR_VIEW_PATH . "drag.html";

    }

    public function topAction(){

        include CURR_VIEW_PATH . "top.html";

    }

}
?>