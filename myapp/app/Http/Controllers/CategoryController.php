<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  
public function index()
    {
        return view('admin.category');
    }

 public function create(Category $category)
    {
       return view('admin.category_add');
    }
    
 public function insert_category(Request $request)
    {
       
    }
   
    public function store(Request $request)
    {
        //
    }

    


   
    public function edit(Category $category)
    {
        //
    }

  
    public function update(Request $request, Category $category)
    {
        //
    }


    public function destroy(Category $category)
    {
        //
    }
}
