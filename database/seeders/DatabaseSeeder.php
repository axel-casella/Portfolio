<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Skill;
use App\Models\Educacion;
use App\Models\Aboutme;
use App\Models\Workexperience;
use App\Models\Blog;
use App\Models\Contactme;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory(6)->create();
         Skill::factory(18)->create();
         Educacion::factory(15)->create();
         Aboutme::factory(15)->create();
         Workexperience::factory(15)->create();
         Blog::factory(15)->create();
         Contactme::factory(12)->create();   
    }
}
