<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function manage_sub_category(){
        $subcategory=SubCategory::with('category')->get();
        return view('backend.subcategory.subcategory',compact('subcategory'));
    }
    public function add_sub_category(){
        $cat=Category::where('status',1)->orderBy('categoryname','DESC')->get();
        return view('backend.subcategory.add_sub_category',compact('cat'));
    }
    public function create_sub_category(Request $request){
        $request->validate([
            'subcat'=>'required|unique:sub_categories,subcat|max:20|different:categories,categoryname'
        ]);

        $subcat=new SubCategory();
        $subcat->cat_id=$request->cat;
        $subcat->subcat=$request->subcat;
        $subcat->save();
        $request->Session()->flash('message','Sub Category Created Successfully');
        return back();

    }
    public function subCategoryStatus($id,$s){
        $subcat = SubCategory::find($id);
        $subcat->status=$s;
        $subcat->save();
        return response()->json(['message'=>'Successful']);
    }
    public function editSubCategory($id){
        $row=SubCategory::find($id);
        return view('backend.subcategory.editSubCategory',compact('row'));
    }
    public function updateSubCategory(Request $request){
        $subcat=SubCategory::find($request->id);
        $subcat->subcat=$request->subcat;
        $subcat->save();
        $request->Session()->flash('message','Sub Category Updated Successfully');
        return back();
    }
    public function deleteSubCategory($id){
        $category=SubCategory::find($id);
        $category->delete();
        Session()->flash('message','Sub Category Deleted Successfully');
        return back();
    }
}
