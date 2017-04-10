<?php

use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('curso')->insert([
            'nombre' => 'Machine Learning',
            'descripcion' => 'Welcome to Machine Learning! I\'m excited to have 
                                you in the class and look forward to helping you become 
                                an expert in machine learning.
                                After you finish watching the Week 1 lectures, 
                                there\'s also a set of Review Questions to help you 
                                check your understanding. You should be able to 
                                complete the review questions in a few minutes. 
                                You can attempt the review questions as many times as 
                                you like, and we will only use your highest score. ',
            'duracion' => 3,
            'fecha_inicio' => date('Y-m-d', mktime(0, 0, 0, 5, 31, 2017)),
            'fecha_final' => date('Y-m-d', mktime(0, 0, 0, 8, 30, 2017)),
            'estado' => true
        ]);

        DB::table('curso')->insert([
            'nombre' => 'The Professional Guitar Masterclass',
            'descripcion' => 'Want the very best guitar lessons on the web?  With pro instructor feedback??

                              I am an award-winning GIT grad, a 15+ year professional guitarist with 70k+ students, and the founder of Guitargate - sponsored by Paul Reed Smith Guitars. 
                
                              "This course will teach you how to master your fretboard, understand music theory, and most importantly, how to use these tools to craft your own unique sound."',
            'duracion' => 3,
            'fecha_inicio' => date('Y-m-d', mktime(0, 0, 0, 5, 31, 2017)),
            'fecha_final' => date('Y-m-d', mktime(0, 0, 0, 8, 30, 2017)),
            'estado' => true
        ]);
    }
}
