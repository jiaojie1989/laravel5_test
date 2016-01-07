<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Illuminate\Database\Seeder;
use Faker\Factory;

/**
 * Description of TestPersonSeeder
 *
 * @author jiaojie
 */
class TestPersonSeeder extends Seeder {

    public function run() {
        $faker = Factory::create();
        $insert = function($arr) {
            DB::table('test_persons')->insert($arr);
        };
        $arr = function() use ($faker) {
            return [
                'name' => $faker->name,
                'birth' => $faker->date(),
                'addr' => $faker->address,
            ];
        };
        for($i = 0; $i < 100000; $i++) {
            $insert($arr());
        }
    }

}
