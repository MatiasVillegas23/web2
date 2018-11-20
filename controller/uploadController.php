<?php

class uploadController
          {

             public function __construct(){

            parent::__construct();

            if(XSession::get(APP_NAME.'/loggedIn')){

                $this->view->pageTitle = "Insert Tyres";
                $this->loadModel("insert_model");

            }
            else{
                header('location: '.DOC_ROOT.DS.'login');
            }



        }
         //THIS FUNCTION IS CALLED AFTER THE CONSTRUCTOR

        public function index(){

            //CALLING THE FUNCTION TO PROCESS FORM

            $this->model->run();

            //GETTING MODEL VARS
            $this->view->pars = $this->model->getPars();
            //LOADING MODULES
            $this->loadModule("mod_top_nav");
            $this->runModules();
            //RENDER VIEW
            $this->view->render("insert");
        }
...
}

?>
