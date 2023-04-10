<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    function categories(){
        $cats=Category::OrderBy('category_name','asc')->simplepaginate(10);
        return view('backend.category.category_view',compact('cats'));
    }
    function addcategory(){
        return view('backend.category.category_form');
    } 
    function postcategory(Request $request){
        // return 'OK';
        $cat=new Category;
        $cat->category_name =$request->category_name;
        $cat->slug =Str::slug($request->category_name);
        $cat->save();

        return redirect('/categories');
    }

}
