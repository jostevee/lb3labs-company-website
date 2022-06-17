<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\CareerCategory;
use App\Models\Writer;
use App\Models\Event;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\SocialMedia;
use App\Models\Career;
use App\Models\FAQ;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Response;

class WriterController extends Controller
{
    public function index(){
        $data = Writer::where('id', Auth::guard('web')->user()->id)->firstOrFail();

        return view('dashboard', compact('data'));
    }

    // EVENTS
    public function lookEvent($id){
        $data = Event::where('id', $id)->firstOrFail();

        return view('writer/look_single_event', compact('data'));
    }

    public function addEvent(){
        $category = Category::all();

        return view('writer/add_event', compact('category'));
    }

    public function saveEvent(Request $request){
        $event = new Event();
        $event->title = $request->input('title');
        $event->content = $request->input('content');
        $event->link = $request->input('link');
        $event->id_category = $request->input('category');
        $event->id_writer = Auth::guard('web')->user()->id;

        if ($request->hasFile('img_link')) {
            $gambar = $request->file('img_link');
            $fileName = time().$gambar->getClientOriginalName();

            // Create 'img/event_list' directory if it isn't available yet
            if(!is_dir('assets/img/event_list')) {
                mkdir('assets/img/event_list', 0777, true);
            }

            // Move the file to the selected directory
            $request->file('img_link')->move('assets/img/event_list', $fileName);

            $event->img_link = $fileName;
        } else {
            $event->img_link = '';
        }

        $event->save();

        return redirect('/writer/event/'.$event->id);
    }

    public function editEvent($id){
        $data = Event::where('id', $id)->firstOrFail();

        if ($data->id_writer == Auth::guard('web')->user()->id) {
            return view('writer/edit_single_event', compact('data'));
        }
        return redirect('/writer/event/list');

    }

    public function updateEvent(Request $request, $id){
        $event =  Event::where('id', $id)->firstOrFail();
        if ($event->id_writer == Auth::guard('web')->user()->id) {
            $event->title = $request->input('title');
            $event->content = $request->input('content');
            $event->link = $request->input('link');

            /*
            if ($request->input('img_link_update') != null) {
                if ($request->hasFile('img_link_update')) {
                    $event->img_link = '';
                    $gambar = $request->file('img_link_update');
                    $fileName = time().$gambar->getClientOriginalName();

                    if(!is_dir('img')) {
                        mkdir('img', 0777, true);
                    }
                    $request->file('img_link_update')->move('img/', $fileName);

                    $event->img_link = $fileName;
                } else {
                    $event->img_link = '';
                }
            }
            */

            $event->save();
        }

        return redirect('/writer/event/'.$event->id);
    }

    public function deleteEvent(Request $request, $id){
        $event =  Event::where('id', $id)->firstOrFail();
        if($event->id_writer == Auth::guard('web')->user()->id) {
            $event->delete();

            return redirect('/writer/event/list')->with('success', 'Selected event succesfully deleted');
        }

    }

    public function myEvent(){
        $event = Event::where('id_writer', Auth::guard('web')->user()->id)->orderByDesc('created_at')->get();

        return view('writer/my_event', compact('event'));
    }


    // CAREER
    public function lookCareer($id){
        $data = Career::where('id', $id)->firstOrFail();

        return view('writer/look_single_career', compact('data'));
    }

    public function addCareer(){
        $category = CareerCategory::all();

        return view('writer/add_career', compact('category'));
    }

    public function saveCareer(Request $request){
        $career = new Career();
        $career->title = $request->input('title');
        $career->content = $request->input('content');
        $career->id_category = $request->input('category');
        $career->id_writer = Auth::guard('web')->user()->id;
        $career->link = $request->input('link');
        $career->publish_date = '28-05-2021';

        if ($request->input('due_date') == null) {
            $career->due_date = '2000-02-20';
        } else {
            $career->due_date = $request->input('due_date');
        }

        $career->save();

        return redirect('/writer/job/'.$career->id);
    }

    public function editCareer($id){
        $data = Career::where('id', $id)->firstOrFail();
        $category = CareerCategory::all();

        if ($data->id_writer == Auth::guard('web')->user()->id) {
            return view('writer/edit_single_career', compact('data', 'category'));
        }
        return redirect('/writer/job/list');

    }

    public function updateCareer(Request $request, $id){
        $career =  Career::where('id', $id)->firstOrFail();
        if($career->id_writer == Auth::guard('web')->user()->id) {
            $career->title = $request->input('title');
            $career->content = $request->input('content');
            $career->id_category = $request->input('category');
            $career->link = $request->input('link');

            if ($request->input('due_date') != null) {
                $career->due_date = $request->input('due_date');
            }

            $career->save();
        }

        return redirect('/writer/job/'.$career->id);
    }

    public function deleteCareer(Request $request, $id){
        $career =  Career::where('id', $id)->firstOrFail();
        if($career->id_writer == Auth::guard('web')->user()->id) {
            $career->delete();

            return redirect('/writer/job/list')->with('success', 'Selected career succesfully deleted');
        }
    }

    public function myCareer(){
        $career = Career::where('id_writer', Auth::guard('web')->user()->id)->orderByDesc('created_at')->get();
        /* $data = Writer::where('id', Auth::guard('web')->user()->id)->firstOrFail(); */

        return view('writer/my_career', compact('career'));
    }


    // FAQ
    public function lookFAQ($id){
        $data = FAQ::where('id', $id)->firstOrFail();

        return view('writer/look_single_faq', compact('data'));
    }

    public function addFAQ(){
        return view('writer/add_faq'); //, compact('category'));
    }

    public function saveFAQ(Request $request){
        $faq = new FAQ();
        $faq->question = $request->input('question');
        $faq->answer = $request->input('answer');
        $faq->id_writer = Auth::guard('web')->user()->id;

        $faq->save();

        return redirect('/writer/faq/'.$faq->id);
    }

    public function editFAQ($id){
        $data = FAQ::where('id', $id)->firstOrFail();

        if ($data->id_writer == Auth::guard('web')->user()->id) {
            return view('writer/edit_single_faq', compact('data'));
        }
        return redirect('/writer/faq/'.$id);

    }

    public function updateFAQ(Request $request, $id){
        $faq =  FAQ::where('id', $id)->firstOrFail();
        if($faq->id_writer == Auth::guard('web')->user()->id) {
            $faq->question = $request->input('question');
            $faq->answer = $request->input('answer');

            $faq->save();
        }

        return redirect('/writer/faq/'.$faq->id);
    }

    public function deleteFAQ(Request $request, $id){
        $faq =  FAQ::where('id', $id)->firstOrFail();
        if($faq->id_writer == Auth::guard('web')->user()->id) {
            $faq->delete();
        }

        return redirect('/writer/faq/list')->with('success', 'Selected FAQ succesfully deleted');
    }

    public function myFAQ(){
        $faq = FAQ::where('id_writer', Auth::guard('web')->user()->id)->orderByDesc('created_at')->get();
        /* $data = Writer::where('id', Auth::guard('web')->user()->id)->firstOrFail(); */

        return view('writer/my_faq', compact('faq'));
    }


    // Social Media Links
    public function editSocialMedia(){
        $data = SocialMedia::all();

        if (Auth::guard('web')->user()->id) {
            return view('writer/edit_social_media', compact('data'));
        }
        // return redirect('/writer/social-media/');

    }

    public function updateSocialMedia(Request $request){
        $social_media = SocialMedia::where('id', 1)->firstOrFail();

        if(Auth::guard('web')->user()->id) {
            $social_media->instagram_url = $request->input('instagram_url');
            $social_media->linkedin_url = $request->input('linkedin_url');

            $social_media->save();
        }

        return redirect('/writer/social-media/');
    }


    // Account
    public function editAccount($id){
        $data = Writer::where('id', $id)->firstOrFail();

        if ($data->id == Auth::guard('web')->user()->id_writer) {
            return view('writer/edit_account', compact('data'));
        }
        return redirect('/writer/editAccount/'.Auth::guard('web')->user()->id_writer);

    }
    
    public function updateAccount(Request $request, $id){
        $data = Writer::where('id', $id)->firstOrFail();
        if($data->id == Auth::guard('web')->user()->id_writer) {
            $data->name = $request->input('nama');

            if($request->input('oldpassword') !== null || $request->input('password')!== null || $request->input('passwordconfirm') !== null) {
                if (Hash::check($request->input('oldpassword'), $data->password) && ($request->input('password') == $request->input('passwordconfirm'))){
                    $data->password = Hash::make($request->input('password'));
                } else {
                    return redirect()->back()->with('error', 'Password Lama, Password Baru, atau konfirmasi password tidak tepat.');
                }
            }

            $data->save();

        }

        return redirect('/writer/editAccount/'.$data->id_writer)->with('success', 'Profile berhasil diupdate');
    }

    
    // EVENTS
    public function lookArticle($id){
        $data = Article::where('id', $id)->firstOrFail();

        return view('writer/look_single_article', compact('data'));
    }

    public function addArticle(){
        $category = Category::all();

        return view('writer/add_article', compact('category'));
    }

    public function saveArticle(Request $request){
        $article = new Article();
        $article->title = $request->input('title');
        $article->content = $request->input('content');
        // $article->link = $request->input('link');
        // $article->id_category = $request->input('category');
        $article->id_writer = Auth::guard('web')->user()->id;

        if ($request->hasFile('img_link')) {
            $gambar = $request->file('img_link');
            $fileName = time().$gambar->getClientOriginalName();

            // Create 'img/event_list' directory if it isn't available yet
            if(!is_dir('assets/img/article_list')) {
                mkdir('assets/img/article_list', 0777, true);
            }

            // Move the file to the selected directory
            $request->file('img_link')->move('assets/img/article_list', $fileName);

            $article->img_link = $fileName;
        } else {
            $article->img_link = '';
        }

        $article->save();

        return redirect('/writer/article/'.$article->id);
    }

    public function editArticle($id){
        $data = Article::where('id', $id)->firstOrFail();

        if ($data->id_writer == Auth::guard('web')->user()->id) {
            return view('writer/edit_single_article', compact('data'));
        }
        return redirect('/writer/article/list');

    }

    public function updateArticle(Request $request, $id){
        $article =  Article::where('id', $id)->firstOrFail();
        if ($article->id_writer == Auth::guard('web')->user()->id) {
            $article->title = $request->input('title');
            $article->content = $request->input('content');
            // $article->link = $request->input('link');

            /*
            if ($request->input('img_link_update') != null) {
                if ($request->hasFile('img_link_update')) {
                    $event->img_link = '';
                    $gambar = $request->file('img_link_update');
                    $fileName = time().$gambar->getClientOriginalName();

                    if(!is_dir('img')) {
                        mkdir('img', 0777, true);
                    }
                    $request->file('img_link_update')->move('img/', $fileName);

                    $event->img_link = $fileName;
                } else {
                    $event->img_link = '';
                }
            }
            */

            $article->save();
        }

        return redirect('/writer/article/'.$article->id);
    }

    public function deleteArticle(Request $request, $id){
        $article =  Article::where('id', $id)->firstOrFail();
        if($article->id_writer == Auth::guard('web')->user()->id) {
            $article->delete();

            return redirect('/writer/article/list')->with('success', 'Selected article succesfully deleted');
        }

    }

    public function myArticle(){
        $article = Article::where('id_writer', Auth::guard('web')->user()->id)->orderByDesc('created_at')->get();

        return view('writer/my_article', compact('article'));
    }

    public function uploadImageCKEditor(Request $request){
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
        
            $request->file('upload')->move(public_path('assets/img/event_text_list'), $fileName);
   
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('assets/img/event_text_list/'.$fileName); 
            $msg = 'Image uploaded successfully'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
               
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;
        }
    }
}
