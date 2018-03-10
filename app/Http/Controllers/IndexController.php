<?php

namespace App\Http\Controllers;

use App\Http\Requests\IndexRequest;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\About;

use App\Skill;

use App\Post;

use App\Service;

use App\ContactMe;

use App\Social;

use App\Portfolio;

use App\Category;

use Response;

class IndexController extends Controller
{
    public function index(){

        $about = About::all();

        $skill = Skill::all();

        $service = Service::all();

        $post = Post::orderBy('id','DESC')->take(3)->get();

        $contact = ContactMe::all();

        $social = Social::all();

        $socials = Social::all();

        $category = Category::all();

        $portfolio = Portfolio::orderBy('id','DESC')->get();



        return view('index2', compact('about','skill','service','post','contact','social','category','portfolio', 'socials'));

    }

    public function show($id){

        $post = Post::findOrFail($id);

        $posts = Post::all();

        $social = Social::all();

        return view("/single", compact('post','posts','social'));

    }

    public function getDownload(){

        $file = public_path() . '/cv.pdf';

        $headers = array(
            'Content-Type : application/pdf',
        );

        return Response::download($file,'Mahammad_JafarliCV.pdf',$headers);

    }
}
