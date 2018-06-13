<?php

namespace App\Http\Controllers;

use Symfony\Component\Yaml\Yaml;

class HomeController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

//        $array = array(
//            'foo' => 'bar',
//            'bar' => array('foo' => 'bar', 'bar' => 'baz'),
//        );
//
//        $yaml = Yaml::dump($array);
//
//        file_put_contents('file.yaml', $yaml);
        
        $value = Yaml::parseFile('file.yaml');
        echo Yaml::dump($value, 1);
    }

}
