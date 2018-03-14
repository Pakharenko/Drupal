<?php
namespace Drupal\helloworld\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloWorldController extends ControllerBase {

    public function helloWorld()
    {
        $output = array();
        $output['#title'] = 'Hello Pakharenko';
        $output['#markup'] = 'Hello World!';
        return $output;
    }

}