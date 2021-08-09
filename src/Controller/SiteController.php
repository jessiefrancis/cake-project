<?php
namespace App\Controller;

use App\Controller\AppController;

class SiteController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
    }
    public function login()
    {
        $id = $this->request->getData('id');
        exit($id);
    }

   
}
