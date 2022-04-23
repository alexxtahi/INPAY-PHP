<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            `code_prod`=> Str::random(12),
            `designation`=> Str::random(12),
            `description`=> Str::random(12),
            `qte_prod`=> Str::random(12),
            `img_prod`=> Str::random(12),
            `prix_prod`=> Str::random(12),
            `ancien_prix`=> Str::random(12),
            `en_promo`=> Str::random(12),
            `id_cat`=> Str::random(12),
            `id_sous_cat`=> Str::random(12),
            `deleted_at`=> Str::random(12),
            `updated_by`=> Str::random(12),
            `deleted_by`=> Str::random(12),
            `created_by`=> Str::random(12),
            `created_at`=> Str::random(12),
            `updated_at`=> Str::random(12),
            
        ]);
    }
}
