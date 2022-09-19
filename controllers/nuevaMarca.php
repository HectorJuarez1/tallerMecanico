<?php
class nuevaMarca extends Controller
{

   function __construct()
   {
      parent::__construct();
   }
   function render()
   {
      $this->view->render('nuevaMarca/index');
   }
   function registrarMarca()
   {
      $Marca = strtoupper(trim($_POST['NomMarca']));
      if ($this->model->insert(['NomMarca' => $Marca])) {
         $this->redirect('nuevaMarca', ['success' => SuccessMessages::SUCCESS_CONFIRMATION]);
      } else {
         $this->redirect('nuevaMarca', ['error' => ErrorMessages::ERROR_NOREGISTRADO]);
      }
   }
}
