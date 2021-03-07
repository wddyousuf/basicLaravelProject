<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
//use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\DB;
// use DB;
use Session;

class BrandController extends Controller
{
    public function add_brand(){
        return view('backend.add_brand');
    }
    public function manage_brand(){
        $db_data=Brand::orderBy('brandname','ASC')->get();
        return view('backend.manage_brand',compact('db_data'));
    }
    public function create_brand(Request $request){

        // $this->validate($request,[
        //     'brandname'=>'required|unique:brands'
        // ]);

         $request->validate([
            'brandname'=>'required|unique:brands,brandname|max:20'
        ]);

        $brand=new Brand();
        $brand->brandname=$request->brandname;
        // $brand->brand_slug=str_replace(' ','-',$request->brandname);
        $brand->brand_slug=$this->slug_generator($request->brandname);
        $brand->save();
        $request->Session()->flash('message','Brand Created Successfully');
        return back();


        // Brand::create($request->all());

        // DB::table('brands')->insert([
        //     'brandname'=>$request->brandname
        // ]);
        // return back()->with('message','Brand Created Successfully');
        // return redirect('brand/add_brand');
        //return redirect()->back();
    }
    public function slug_generator($string){
        $string=str_replace(' ','-',$string);
        $string=preg_replace('/[^A-Za-z0-9\-]/','',$string);
        return strtolower(preg_replace('/-+/','-',$string));
    }
    // public function changeStatus($id){
    //     $brand = Brand::find($id);
    //     if ($brand->status==0) {
    //         $brand->status=1;
    //         $brand->save();
    //         Session()->flash('message','Brand Status Changed Successfully');
    //         return back();
    //     }else{
    //         $brand->status=0;
    //         $brand->save();
    //         Session()->flash('message','Brand Status Changed Successfully');
    //         return back();
    //     }
    // }
    public function editBrand($id){
        $row=Brand::find($id);
        return view('backend.editBrand',compact('row'));
    }
    public function updateBrand(Request $request){
        // $request->validate([
        //     'brandname'=>'required|unique:brands,brandname|max:20'
        // ]);
        $brand=Brand::find($request->id);
        $brand->brandname=$request->brandname;
        $brand->brand_slug=$this->slug_generator($request->brandname);
        $brand->save();
        $request->Session()->flash('message','Brand Updated Successfully');
        return back();
    }
    public function deleteBrand($id){
        $brand=Brand::find($id);
        $brand->delete();
        Session()->flash('message','Brand Deleted Successfully');
        return back();
    }
    public function brandStatus($id,$s){
        $brand = Brand::find($id);
        $brand->status=$s;
        $brand->save();
        return response()->json(['message'=>'Successful']);
    }
}
