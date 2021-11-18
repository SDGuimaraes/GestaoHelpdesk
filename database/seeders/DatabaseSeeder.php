<?php

namespace Database\Seeders;

use App\Models\chamados_categorias;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        foreach(config('seed_data.chamados_categorias') as $value){
            DB::table('chamados_categorias')->insert([
                'categoria' => $value
            ]);
        }

        foreach(config('seed_data.chamados_status') as $value){
            DB::table('chamados_status')->insert([
                'status' => $value
            ]);
        }

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin')
        ]);
    }
}
