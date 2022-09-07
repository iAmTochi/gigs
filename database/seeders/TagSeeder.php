<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [

            'Remote',
            'Full time',
            'Hybrid',
            'Contract',
            'Freelance',

        ];

        foreach ($tags as $tag){
            Tag::create([
                'name' => $tag,

            ]);

        }
    }
}
