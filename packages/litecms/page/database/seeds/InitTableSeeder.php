<?php

namespace Litecms;

use DB;
use Illuminate\Database\Seeder;

class InitTableSeeder extends Seeder
{
    public function run()
    {
        DB::table(config('litecms.page.page.table'))->insert([

            [
                'name'             => '123',
                'slug'             => '123',
                'heading'          => '',
                'title'            => '123',
                'content'          => '123 Page',
                'meta_title'       => '123',
                'meta_keyword'     => '123',
                'meta_description' => '123',
                'images'           => null,
                'abstract'         => null,
                'order'            => 50,
                'category'         => 'default',
                'banner'           => null,
                'view'             => 'default',
                'compile'          => null,
                'status'           => 'Show',
            ],

        ]);
    }
}
