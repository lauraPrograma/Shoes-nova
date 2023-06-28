<?php

namespace Source\App;
use League\Plates\Engine;
use Source\Models\Faq;

class Web
{
    private $view;
    public function __construct(){
        $this -> view=new Engine(__DIR__ . "/../../themes/web" , "php"); 
    } 



    public function home()
    {
        //echo "Olá, Mundo! Home";
        // $view = new Engine(__DIR__ . "/../../themes/web" , "php");
        echo $this ->view -> render ("home");

    }
    public function about(){
        echo $this->view->render("about");
    }
    public function product(){
        echo $this->view->render("product");
    }
    public function shopping(){
        echo $this->view->render("shopping");
    }
    public function register(){
        echo $this->view->render("register");
    }
    public function login(){
        echo $this->view->render("login");
    }
    public function faq ()
    {
        $faqs = new Faq();
        //var_dump($faqs->selectAll());

        echo $this->view->render("faq",[
            "faqs" => $faqs->selectAll(),
            "name" => "Fábio"
        ]);
    }
   public function store() {
    echo $this->view->render("store",[]);


   }

    
    
    
    
   
    



}