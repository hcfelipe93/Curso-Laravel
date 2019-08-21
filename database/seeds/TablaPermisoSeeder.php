<?php

use Illuminate\Database\Seeder;
use App\Models\Permiso;

class TablaPermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(permiso::class, 50)->create();
    }
}
