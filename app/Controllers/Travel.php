<?php

namespace App\Controllers;

class Travel extends BaseController {

    public function index() {
        $places = new \App\Models\Places();
        $records = $places->findAll();
         $table = new \CodeIgniter\View\Table();
          $headings = $places->fields;
        $displayHeadings = array_slice($headings, 1, 2);
        $table->setHeading(array_map('ucfirst', $displayHeadings));
        foreach ($records as $record) {
            $nameLink = anchor("travel/showme/$record->id"  );
            $table->addRow($record->name,$record->image,$nameLink);
        }
         $template = [
            'table_open' => '<table cellpadding="10px">',
            'cell_start' => '<td style="border: 2px solid black;">',
            'row_alt_start' => '<tr style="background-color:white">'
        ];
        $table->setTemplate($template);

        $fields = [
            'title' => 'DC heros',
            'heading' => 'DC heros',
            'footer' => 'Copyright SonHan Shi'
        ];
         $table->setTemplate($template);
     $parser = \Config\Services::parser();
        return $parser->setData($fields)
                ->render('templates\top') .
                $table->generate() .
                $parser->setData($fields)
                ->render('templates\bottom');
 

       
       
    }

 public function showme($id) {
        // connect to the model
        $places = new \App\Models\Places();
        // retrieve all the records
        $record = $places->find($id);

        $table = new \CodeIgniter\View\Table();
        $headings = $places->fields;
        $table->addRow($headings[0], $record['id'])
                ->addRow($headings[1], $record['name'])
                ->addRow($headings[2], $record['sex'])
                ->addRow($headings[3], $record['birthday'])
                ->addRow($headings[4], $record['height'])
                ->addRow($headings[5], $record['weight'])
                ->addRow($headings[6], $record['ability'])
                ->addRow($headings[7], $record['description'])
                ->addRow($headings[8], "<img src=\"/image/".$record['image']."\"/>");
     
        $template = [
            'table_open' => '<table cellpadding="10px">',
            'cell_start' => '<td style="border: 2px solid black;">',
            'row_alt_start' => '<tr style="background-color:white">'
        ];
        $table->setTemplate($template);

        $fields = [
            'title' => 'DC heros',
            'heading' => 'DC heros',
            'footer' => 'Copyright SonHan Shi'
        ];

        // get a template parser
        $parser = \Config\Services::parser();
        return $parser->setData($fields)
                ->render('templates\top') .
                $table->generate() .
                $parser->setData($fields)
                ->render('templates\bottom');
    }
} 

