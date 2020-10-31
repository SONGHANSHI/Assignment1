<?php
namespace App\Models;

/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class Places {

    //mock data : an array of records
    protected $data = [
        '1' => [
            'id' => 1,
            'name' => 'Bruce Wayne',
            'sex' => 'male',
            'birthday' => '2.19',
            'height' => '188cm',
            'weight' => '95kg',
            'ability' => 'Proficient in 127 kinds of fighting skills, superior intelligence and detective ability',
            'description' => 'Bruce Wayne, commonly known as Batman, is an American superhero who appeared in DC Comics as Detective Comics No. 27 (May 1939)',
            'image' => 'bfx.jpg',
        ],
        '2' => [
            'id' => 2,
            'name' => 'Superman',
            'sex' => 'male',
            'birthday' => '2.29',
            'height' => '191cm',
            'weight' => '107kg',
            'ability' => 'He flew faster than a bullet and had more force than a locomotive',
            'description' => 'Superman is a superhero belonging to DC Comics in the United States, the first superhero in the history of American Comics',
            'image' => 'cr.jpg',
        ],
        '3' => [
             'id' => 3,
            'name' => 'Diana Prince',
            'sex' => 'female',
            'birthday' => '9.6',
            'height' => '185cm',
            'weight' => '80kg',
            'ability' => 'Far beyond human strength and physical ability, flight',
            'description' => 'After coming to the human society, Diana began to fight crimes under the pseudonym of Diana Prince and act as Wonder Woman',
            'image' => 'sqnx.jpg',
        ],
        '4' => [
            'id' => 4,
            'name' => 'The Flash',
            'sex' => 'male',
            'birthday' => '10.11',
            'height' => '190cm',
            'weight' => '100kg',
            'ability' => 'Each flash has a Force called the Speed Force. They are all called Speester',
            'description' => 'The Flash is an important character in The DC comics world and one of The worlds most famous superheroes',
            'image' => 'sdx.jpg',
        ],
        '5' => [
            'id' => 5,
            'name' => 'Green Lantern',
            'sex' => 'male',
            'birthday' => '7.18',
            'height' => '180cm',
            'weight' => '107kg',
            'ability' => 'Materialize what the ring holder imagines, etc',
            'description' => 'The original Green Lantern was Alan Scott, and the ring was powered by Star Heart. Since then',
            'image' => 'ldx.jpg',
        ],
         '6' => [
            'id' => 6,
            'name' => 'Aquaman',
            'sex' => 'male',
            'birthday' => '12.18',
            'height' => '210cm',
            'weight' => '157kg',
            'ability' => 'Part-human, part-Atlantean, he has exhibited far more human powers since he was a child',
            'description' => 'Aquaman, or Arthur Curry, is an American superhero character from DC Comics. He debuted in More Fun Comics No. 73 (November 1941)',
            'image' => 'hw.jpg',
        ],
    ];

    public function findAll() {
        return $this->data;
    }

    public function find($id = null) {
        if (!empty($id) && isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }

}
