<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class AdminController extends Controller
{
    public function view_category(){

        return view('admin.category');
    }
    public function add_category(Request $request){
        $category=new Category;
        $category->category_name=$request->category;
        $category->save();
        //toastr()->addSuccess("Categoru added successfully");
        return redirect()->back()->with('success', 'تم تسجيل الدخول بنجاح');

    }
}
