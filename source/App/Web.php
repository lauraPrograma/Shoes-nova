<?php

namespace Source\App;
use League\Plates\Engine;
use Source\Models\Store;
use Source\Models\Faq;
use Source\Models\Category;

class Web
{
    private $view;
    private $categories;
    public function __construct(){
        $this -> view=new Engine(__DIR__ . "/../../themes/web" , "php"); 
        $category = new Category();
        $this-> categories = $category ->selectAll();
    } 



    public function home()
    {
        //echo "Olá, Mundo! Home";
           echo $this->view->render("home",[
            "name" => "Fábio",
            "age" => 47,
            "categories" => $this->categories
        ]);


    }
    public function about(){
        echo $this->view->render("about");
    }
    public function product(){
        echo $this->view->render("product",[
            "categories" => $this->categories
        ]);
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
   public function store(array $data) {
   

     $store = new Store();
     if (! empty($data['categoryName'])) {
        
    echo $this->view->render("store",[
        "stores"=> $store->selectByCategory($data['categoryName']),
        "categories" => $this->categories
    ]);
    return;
        
     }


    echo $this->view->render("store",[
        "stores" => $store->selectAll(),
        "categories"=> $this->categories
    ]);

     }
}

    
    
    
    
   
    



