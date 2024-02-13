<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $category = category::orderBy('category_id','desc')->Paginate(5);
        return view('backend.category.index',compact('category'));
    }
    public function create(){
        return view('backend.category.create');
    }
    public function insert(request $request){

        //ทำการป้องกันการกรอกข้อมูลผ่านฟอร์ม
        $validated = $request->validate([
            'name' => 'required|unique:categories|max:255',
        ],
        [
            'name.required' => 'กรุณากรอกชื่อประเภทสินค้า',
            'name.unique' => 'ชื่อนี้มีอยู่ในฐานข้อมูลแล้ว',
            'name.max' => 'กรอกข้อมูลไม่เกิน 255 ตัวอักษร',
        ]);

        // dd(request->name);

        //การบันทึกข้อมูลลงในฐานข็อมูล
        $cat = new Category();
        $cat->name = $request->name;
        $cat->save();
        toast('บันทึกข้อมูลสำเร็จ','success');
        return redirect()->route('c.index');
    }

    public function edit($category_id){
        $cat = Category::find($category_id);
        return view('backend.category.edit',compact('cat'));
    }

    public function update(Request $request,$category_id){
        $category = Category::find($category_id);
        $category->name = $request->name;
        $category->update();
        toast('อัพเดทช้อมูลสำเสร็จ','success');
        return redirect()->route('c.index');
}

    public function delete($category_id){
        $category = Category::find($category_id);
        $category->delete();
        toast('ข้อมูลถูกลบแล้ว','success');
        return redirect()->route('c.index');
    }
}
