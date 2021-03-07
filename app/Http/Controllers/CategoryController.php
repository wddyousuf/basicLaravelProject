<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function manage_category(){
        $category=Category::all();
        return view('backend.category.category',compact('category'));
    }
    public function add_category(){
        return view('backend.category.add_category');
    }
    public function create_category(Request $request){
        $request->validate([
            'categoryname'=>'required|unique:categories,categoryname|max:20'
        ]);

        $category=new Category();
        $category->categoryname=$request->categoryname;
        $category->category_slug=$this->slug_generator($request->categoryname);
        $category->save();
        $request->Session()->flash('message','Category Created Successfully');
        return back();
    }
    public function slug_generator($string){
        $string=str_replace(' ','-',$string);
        $string=preg_replace('/[^A-Za-z0-9\-]/','',$string);
        return strtolower(preg_replace('/-+/','-',$string));
    }
    public function categoryStatus($id,$s){
        $category = Category::find($id);
        $category->status=$s;
        $category->save();
        return response()->json(['message'=>'Successful']);
    }
    public function editCategory($id){
        $row=Category::find($id);
        return view('backend.category.editCategory',compact('row'));
    }
    public function updateCategory(Request $request){
        $category=Category::find($request->id);
        $category->categoryname=$request->categoryname;
        $category->category_slug=$this->slug_generator($request->categoryname);
        $category->save();
        $request->Session()->flash('message','Category Updated Successfully');
        return back();
    }
    public function deleteCategory($id){
        $category=Category::find($id);
        $category->delete();
        Session()->flash('message','Category Deleted Successfully');
        return back();
    }
}
