<?php

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DataCategoryTableSeeder extends Seeder
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
            $categoryData[] = [
                // 'name' => 'Thể Loại ' . $category_name[] = array_rand($array),
                // 'keyword' => 'Từ  Khóa ' . $category_name[] = array_rand($array),
                // 'description' =>'Mô Tả ' . $category_name[] = array_rand($array)

                'name' => 'Thể Loại ' . $i,
                'keyword' => 'Từ Khóa ' . $i,
                'description' => 'Mô Tả' . $i
            ];
        }

        foreach($categoryData as $category){
            Category::create($category);
        }
    }
}
