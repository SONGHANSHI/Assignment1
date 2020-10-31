<?php

namespace App\Controllers;

class Travel extends BaseController {

public function index() {
$places = new \App\Models\Places();
$records = $places->findAll();
$parser = \Config\Services::parser();
return $parser->setData(['records' => $records])->render('placeslist');
}
public function showme($id) { 
$places = new \App\Models\Places();
$record = $places->find($id);
$parser = \Config\Services::parser(); 
return $parser->setData($record)->render('oneplace'); 
}
}
