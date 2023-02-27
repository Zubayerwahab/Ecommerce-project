<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use function Ramsey\Uuid\v1;

class CategoryController extends Controller
{
    public $categories, $category;
    public function addCategory()
    {
        return view('admin.category.add-category');
    }
    public function newCategory(Request $request)
    {
        Category::createCategory($request);
        return redirect()->back()->with('Success','Category Created Successfully.');
    }
    public function manageCategory(Request $request)
    {
        $this->categories = Category::orderBy('id','DESC')->get();
            return view('admin.category.manage-category',[
                'categories' =>$this->categories
            ]);
    }
    public function editCategory($id)
    {
        $this->category = Category::find($id);
        return view('admin.category.edit',[
            'category'=>$this->category
        ]);
    }
    public function updateCategory(Request $request,$id)
    {
        Category::updateCategory($request,$id);
        return redirect('/manage-category')->with('success','Category Created Successfully.');
    }
   public function deleteCategory($id)
   {
       $this->category =Category::find($id);
       $this->category->delete();
       return redirect()->back()->with('success','Category Deleted Successfully.');
   }
}
