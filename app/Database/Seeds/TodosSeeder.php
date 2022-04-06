<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TodosSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'title' => 'Adidas Yeezy',
            'description'    => 'sneakers',
            'finished_at'    => "2022-04-04-03:00",
        ];

        // Simple Queries
        $this->db->table('todos')->insert($data);
        
        $data = [
            'title' => 'Nike Air Jordan 1',
            'description'    => 'sneakers',
            'finished_at'    => "2022-04-04-03:00",
        ];
        // Using Query Builder
        $this->db->table('todos')->insert($data);

        $data = [
            'title' => 'Adidas x Wotherspoon',
            'description'    => 'sneakers',
            'finished_at'    => "2022-04-04-03:00",
        ];
        // Using Query Builder
        $this->db->table('todos')->insert($data);
    }
}
