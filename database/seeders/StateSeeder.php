<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("
        INSERT INTO states (id, state_name) VALUES
            (1, 'ABIA'),
            (2, 'ADAMAWA'),
            (3, 'AKWA IBOM'),
            (4, 'ANAMBRA'),
            (5, 'BAUCHI'),
            (6, 'BAYELSA'),
            (7, 'BENUE '),
            (8, 'BORNO'),
            (9, 'CROSS RIVER'),
            (10, 'DELTA'),
            (11, 'EBONYI'),
            (12, 'EDO'),
            (13, 'EKITI'),
            (14, 'ENUGU'),
            (15, 'FCT'),
            (16, 'GOMBE '),
            (17, 'IMO'),
            (18, 'JIGAWA'),
            (19, 'KADUNA'),
            (20, 'KANO'),
            (21, 'KATSINA'),
            (22, 'KEBBI '),
            (23, 'KOGI'),
            (24, 'KWARA'),
            (25, 'LAGOS'),
            (26, 'NASSARAWA'),
            (27, 'NIGER'),
            (28, 'OGUN'),
            (29, 'ONDO'),
            (30, 'OSUN'),
            (31, 'OYO'),
            (32, 'PLATEAU'),
            (33, 'RIVERS'),
            (34, 'SOKOTO'),
            (35, 'TARABA'),
            (36, 'YOBE'),
            (37, 'ZAMFARA')"
        );
    }
}
