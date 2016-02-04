<?php

class SubscribeController extends ControllerBase
{

    public function indexAction()
    {

    }

    public function createAction(){
      if ($this->request->isPost()) {

          $user = new \Diary\Frontend\Models\FormUsers();
          $data = $this->request->getPost();

          $dateCrea = date('Y-m-d H:i:s');
          $user->date_crea = $dateCrea;
          $user->name = $data['name'];
          $user->family_name = $data['familyName'];
          $user->email = $data['email'];
          $user->password = $data['password'];
          $success = $page->save();

          foreach ($page->getMessages() as $message) {
              echo $message->getMessage() . "<br/>";
          };

          //	die();
          if ($success) {
              return $this->response->json(['status' => 'success', 'message' => 'enregistrement avec succes', 'redirect' => '/' . $this->url->getAdminPfx() . '/subscribe/mailActivation'], 200);
          } else {
              $errors = array();
              foreach ($page->getMessages() as $message) {
                  $errors[] = $message->getMessage();
              }
              // $errors = json_encode($errors);\
              return $this->response->json(['status' => 'error', 'message' => 'Echec enregistrement', 'errors' => $errors], 500);
          }
          return $this->response->json(['status' => 'error', 'message' => 'Echec enregistrement'], 500);
      } else {
          $this->forward('errors/show404');
      }
  }

  public function ActivationAction(){

  }
}
