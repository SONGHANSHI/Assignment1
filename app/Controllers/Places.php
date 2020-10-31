<?php

namespace App\Controllers;

class Places extends \CodeIgniter\Controller {

    public function index() {
        $places = new \App\Models\Places();
        $records = $places->findAll();
        return json_encode($records);
    }

}
