<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Category;
use App\Models\CareerCategory;
use App\Models\Writer;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function index() {
        $event = Category::orderByDesc('created_at')->get();
        $data = Admin::where('id', Auth::guard('admin')->user()->id)->firstOrFail();

        return view('dashboard', compact('event', 'data'));
    }

    public function listWriter(){
        $writer = Writer::all();
        return view('admin/list_writer', compact('writer'));
    }

    public function addCategory(){

        return view('admin/add_category');
    }

    public function listCategory(){
        $category = Category::all();
        return view('admin/list_category', compact('category'));
    }

    public function saveCategory(Request $request){
        $category = new Category();
        $category->category = $request->input('name');

        $category->save();

        return redirect('/admin/category/list/');
    }

    public function deleteCategory($id){
        $category = Category::where('id', $id)->firstOrFail();

        $category->delete();

        return redirect()->back()->with('success', 'Selected category successfully deleted');

    }

    public function editCategory($id){
        $data = Category::where('id', $id)->firstOrFail();

        return view('admin/edit_category', compact('data'));

    }

    public function updateCategory(Request $request, $id){
        $category =  Category::where('id', $id)->firstOrFail();
        $category->name = $request->input('name');

        $category->save();

        return redirect('/admin/category/list');
    }

    public function addCareerCategory(){

        return view('admin/add_career_category');
    }

    public function listCareerCategory(){
        $category = CareerCategory::all();
        return view('admin/list_career_category', compact('category'));
    }

    public function saveCareerCategory(Request $request){
        $category = new CareerCategory();
        $category->category = $request->input('name');

        $category->save();

        return redirect('/admin/job/category/list/');
    }

    public function deleteCareerCategory($id){
        $category = CareerCategory::where('id', $id)->firstOrFail();

        $category->delete();

        return redirect()->back()->with('success', 'Selected category successfully deleted');

    }

    public function editCareerCategory($id){
        $data = CareerCategory::where('id', $id)->firstOrFail();

        return view('admin/edit_career_category', compact('data'));

    }

    public function updateCareerCategory(Request $request, $id){
        $category =  CareerCategory::where('id', $id)->firstOrFail();
        $category->category = $request->input('name');

        $category->save();

        return redirect('/admin/job/category/list');
    }

    public function resetPassword($id) {
        $data = Writer::where('id', $id)->firstOrFail();

        return view('admin/reset_pass', compact('data'));
    }

    public function storeresetPassword(Request $request, $id){
        $data = Writer::where('id', $id)->firstOrFail();

        if($request->input('password')!== null || $request->input('passwordconfirm') !== null) {
            if (($request->input('password') == $request->input('passwordconfirm'))){
                $data->password = Hash::make($request->input('password'));
            } else {
                return redirect()->back()->with('error', 'Please check your Confirmation Password!');
            }
        }

        $data->save();

        return redirect('/admin/writer/list/')->with('success', 'Your Password has been successully reset');
    }
}
