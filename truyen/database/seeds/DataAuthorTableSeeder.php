<?php

use App\Models\Author;
use Illuminate\Database\Seeder;

class DataAuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1 ; $i < 10; $i++){
            // $array[] = $i;
            $authorData[] = [
                'name' => 'Tác Giả ' . $i,
                'keyword' => 'Từ Khóa ' . $i,
                'description' => 'Mô Tả' . $i
            ];
        }

        foreach($authorData as $author){
            Author::create($author);
        }
    }
}
