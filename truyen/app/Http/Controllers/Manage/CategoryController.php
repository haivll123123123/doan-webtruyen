<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $category = Category::all();
        return view('manage.category.index')->with('categories',$category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'name.required' => 'Tiêu đề bắt buộc nhập',
            'description.required' => 'Nội dung mô tả bắt buộc nhập',
            'keyword.required'=> 'Từ khóa bắt buộc phải nhập',
            'keyword.max' => 'Từ khóa không được vượt quá 255 ký tự',
            'name.max' => 'Từ khóa không được vượt quá 35 ký tự',
            'description.max' => 'Từ khóa không được vượt quá 255 ký tự',
        ];
        $validatedData =$request->validate([
            'name' => 'required|max:35|',
            'keyword' => 'required|max:255|',
            'description' => 'required|max:255|',
        ],$messages);
        if(Category::create($request->all())){
            $request->session()->flash('success' , 'Category has been created!!!');
        }else{
            $request->session()->flash('error' , 'Error!!!');
        }
        return redirect()->route('manage.category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('manage.category.edit')->with('categories',$category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $messages = [
            'name.required' => 'Tiêu đề bắt buộc nhập',
            'description.required' => 'Nội dung mô tả bắt buộc nhập',
            'keyword.required'=> 'Từ khóa bắt buộc phải nhập',
            'keyword.max' => 'Từ khóa không được vượt quá 255 ký tự',
            'name.max' => 'Từ khóa không được vượt quá 35 ký tự',
            'description.max' => 'Từ khóa không được vượt quá 255 ký tự',
        ];
        $validatedData =$request->validate([
            'name' => 'required|max:35|',
            'keyword' => 'required|max:255|',
            'description' => 'required|max:255|',
        ],$messages);
        
        $dataupdate = [
            'name' => $request->name,
            'keyword' => $request->keyword,
            'description' => $request->description
        ];

        if($category->update($dataupdate)){
            $request->session()->flash('success' , 'Category '. $category->name .' has been updated');
        }else{
            $request->session()->flash('error' , 'Error!!!');
        }

        return redirect()->route('manage.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Category $category)
    {
        if(Category::destroy($category->id)){
            $request->session()->flash('error' , $category->name . ' has been deleted!!');
        }else{
            $request->session()->flash('warning' , 'Error!!');
        }

        return redirect()->route('manage.category.index');
    }
}
