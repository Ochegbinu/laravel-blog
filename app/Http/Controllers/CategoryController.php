<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;




class CategoryController extends Controller
{
    public function create()
    {
        return view('admin.create_category');
    }

    public function showCat()
    { 
        $cats = Category::all();
        return view('admin.all_categories', compact('cats'));
    }

    public function newCat(Request $request)
    {
        $cats = Category::create([
            'category' => $request->category,
        ]);
        return redirect()->back()->with('message', 'Category Created successfully');
    }

    public function destroy($id)
    {
        $cats = Category::findOrFail($id);

        $cats->delete();
        return redirect()->back();
    }

    public function update(Request $request, $id){

        $cats = Category::find($id);

         return view('admin.update_category')->with('cats', $cats);
    }

    public function edit(Request $request, $id)
    {
         $cats = Category::find($id);
         $cats->category = $request->category;
         $cats->save();
         
         return redirect()->route('allCat');

    }

   
   
}
