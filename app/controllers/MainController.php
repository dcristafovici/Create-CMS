<?php


namespace app\controllers;


class MainController extends AppController
{

  public function indexAction(){

    $this->setMeta('Главная страница','Мой суперский сайт', 'Изучение, php, laravel, dream, study');
    $name = 'Andrey';
    $age = 30;
    $this->set(compact('name','age'));

  }
}
