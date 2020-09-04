<?php

namespace App\Http\Controllers\Manage;

use App\Models\Story;
use App\Models\Chapter;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ThemesController extends Controller
{
    public function trangchu(){
        $story1 = Story::where('name','CHỌC TỨC VỢ YÊU - MUA MỘT TẶNG MỘT')->first();
        $story2 = Story::where('name','GIÓ ẤM KHÔNG BẰNG ANH THÂM TÌNH')->first();
        $story3 = Story::where('name','NHẤT NIỆM VĨNH HẰNG')->first();
        $story4 = Story::where('name','VŨ ĐỘNG CÀN KHÔN')->first();
        $story5 = Story::where('name','BOSS HUNG DỮ - ÔNG XÃ KẾT HÔN ĐI')->first();
        $story6 = Story::where('name','CÔ VỢ NGỌT NGÀO CÓ CHÚT BẤT LƯƠNG (VỢ MỚI BẤT LƯƠNG CÓ CHÚT NGỌT)')->first();
        $story7 = Story::where('name','ĐẾ BÁ')->first();
        $story8 = Story::where('name','TỰ CẨM')->first();
        $story9 = Story::where('name','THẦN ĐẠO ĐAN TÔN')->first();
        $story10 = Story::where('name','LINH VŨ THIÊN HẠ')->first();
        $story11 = Story::where('name','ĐẤU PHÁ THƯƠNG KHUNG')->first();
        $story12 = Story::where('name','PHÀM NHÂN TU TIÊN')->first();
        $story13 = Story::where('name','VŨ LUYỆN ĐIÊN PHONG')->first();
        $chapter = Chapter::with('story')->get();
        // $category1 = Category::where('id','<=','13')->get();
        // $category2 = Category::where([
        //     ['id' , '>=' , '14'],
        //     ['id' , '<' , '27']
        // ])->get();
        // $category3 = Category::where([
        //     ['id' , '>=' , '26'],
        //     ['id', '<=' , '38']
        // ])->get();

        $category1 = Category::whereBetween('id',[1,13])->get();
        $category2 = Category::whereBetween('id',[14,26])->get();
        $category3 = Category::whereBetween('id',[27,37])->get();

        return view('themes.trangchu')->with([
            'story1' => $story1,
            'story2' => $story2,
            'story3' => $story3,
            'story4' => $story4,
            'story5' => $story5,
            'story6' => $story6,
            'story7' => $story7,
            'story8' => $story8,
            'story9' => $story9,
            'story10' => $story10,
            'story11' => $story11,
            'story12' => $story12,
            'story13' => $story13,
            'chapter' => $chapter,
            'category1' => $category1,
            'category2' => $category2,
            'category3' => $category3,
        ]);
    }

    public function notruyen(Story $story){
        $category1 = Category::whereBetween('id',[1,13])->get();
        $category2 = Category::whereBetween('id',[14,26])->get();
        $category3 = Category::whereBetween('id',[27,37])->get();
        $story = Story::with('author','category')->where('id',$story->id)->first();
        $chapter = Chapter::with('story')->where('story_id',$story->id)->get();
//dd($authors);
        return view('themes.no-story')->with([
            'category1' => $category1,
            'category2' => $category2,
            'category3' => $category3,
            'story' => $story,
            'chapter'=>$chapter,
        ]);
    }
    public function chuong(Story $story){
        $category1 = Category::whereBetween('id',[1,13])->get();
        $category2 = Category::whereBetween('id',[14,26])->get();
        $category3 = Category::whereBetween('id',[27,37])->get();
        $story = Story::with('author','category')->where('id',$story->id)->first();
        $chapter = Chapter::with('story')->where('story_id',$story->id)->get();
//dd($chapter);
        return view('themes.chuong')->with([
            'category1' => $category1,
            'category2' => $category2,
            'category3' => $category3,
            'story' => $story,
            'chapter'=>$chapter,
        ]);
    }
}
