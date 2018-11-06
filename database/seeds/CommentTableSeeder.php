<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            ['id' => 1, 'id_product' => 1, 'id_customer' => 1, 'id_employee' => 2, 'id_parent' => '1', 'content' => 'Hàng đẹp, chất lượng ok'],
            ['id' => 2, 'id_product' => 3, 'id_customer' => 2, 'id_employee' => 1, 'id_parent' => '2', 'content' => 'Giày y hình. Rất thích'],

        ]);
    }
}