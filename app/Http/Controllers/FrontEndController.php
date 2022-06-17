<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Event;
use App\Models\Article;
use App\Models\SocialMedia;
use App\Models\Career;
use App\Models\CareerCategory;
use App\Models\FAQ;
use App\Mail\OptimusEmail;

class FrontEndController extends Controller
{
    // Login landing page
    public function landingLogin() {
        return view('index');
    }

    // This is a controller for all of Optimus's client pages
    public function home(){
        $event = Event::orderByDesc('created_at')->take(4)->get();
        $social_media = SocialMedia::where('id', 1)->firstOrFail();

        return view('home', compact('event', 'social_media'));
    }

    public function aboutUs(){
        return view('about_us'); //, compact('data')
    }

    public function ourSolutions(){
        return view('our_solutions'); //, compact('data')
    }

    public function hrTechnology(){
        return redirect('/our-solutions#hr-technology');
    }

    public function onlineAssessment(){
        return redirect('/our-solutions#online-assessment');
    }

    public function recruitmentServices(){
        return redirect('/our-solutions#recruitment-services');
    }

    public function hrConsultancy(){
        return redirect('/our-solutions#hr-consultancy');
    }
    
    public function events(){
        $event = Event::orderByDesc('created_at')->get();

        return view('events', compact('event'));
    }

    public function lookEvent($id){
        $data = Event::where('id', $id)->firstOrFail();

        return view('look_single_event_client', compact('data'));
    }

    public function articles(){
        $article = Article::orderByDesc('created_at')->get();

        return view('articles', compact('article'));
    }

    public function lookArticle($id){
        $data = Article::where('id', $id)->firstOrFail();
        $other_data = Article::where('id', '!=', $id)->orWhereNull('id')->orderByDesc('created_at')->take(4)->get();

        return view('look_single_article_client', compact('data', 'other_data'));
    }

    public function careers(){
        $career = Career::orderByDesc('created_at')->get();
        $count_career = Career::all()->count();
        $category = CareerCategory::orderbyDesc('created_at')->get();

        return view('careers', compact('career', 'category', 'count_career'));
    }

    public function faq(){
        $faq = FAQ::all(); //orderByDesc('created_at')->get();

        return view('faq', compact('faq'));
    }

    public function contactUs(){
        return redirect('/#contact');
    }

    public function ourValues(){
        return redirect('/about-us#values');
    }

    public function meetTheTeam(){
        return redirect('/about-us#meet-the-team');
    }

    public function brewingSoon(){
        return view('brewingsoon'); //, compact('data')
    }

    public function sendMail(Request $request){
        $sender_name = $request->input('name');
        $sender_email = $request->input('emails');
        $sender_subject = $request->input('subject');
        $sender_body = $request->input('message');
        $receive_subject = "Ticket for [".$sender_email."]";

        // $to_name = 'Jojo';
        // $to_email = 'steveeejooo@gmail.com';
        // $to_email = Array("media@consultwithoptimus.id"=>"Optimus Media");
        
        // $to_email = "marketing@consultwithoptimus.id";
        // $data = array("sender_body" => $sender_body, "sender_email" => $sender_email, "sender_name" => $sender_name, "sender_subject" => $sender_subject);

        $details = [
            'sender_body' => $sender_body,
            'sender_email' => $sender_email,
            'sender_name' => $sender_name,
            'sender_subject' => $sender_subject
        ];

        \Mail::to('marketing@consultwithoptimus.id')->send(new \App\Mail\OptimusEmail($details));
        // dd("Email sudah terkirim.");

        /*
        Mail::send('emails', $data, function($message) use ($to_email, $sender_name, $sender_email, $sender_subject, $receive_subject) {
            $message->to($to_email)->subject($receive_subject);
            $message->from($sender_email, '[Web Email - Contact Us]');
        });
        */
        
        /*
        Mail::send('emails', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)->subject('Artisans Web Testing Mail');
            $message->from('FROM_EMAIL_ADDRESS','Artisans Web');
        });
        */

        /*
        MAIL_USERNAME=steve.jo.lb3@gmail.com
        MAIL_PASSWORD=zjnkgjmkuwvntbgg
        */

        return redirect('/home');
    }
}
