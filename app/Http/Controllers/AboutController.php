<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutRequest;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = About::all();

        return view('admin.pages.about',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.aboutCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AboutRequest $request)
    {
        $about = new About;

        $about->about_title = $request->title;

        $about->about_name = $request->name;

        $about->about_position = $request->position;

        $about->about_text = $request->text;

        if ($request->hasFile('img')){

            $name = time().".".$request->file("img")->extension();

            $about->about_image = $name;

            $request->file("img")->move(public_path().'/images',$name);

        }

        $about->save();

        return redirect('about');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {

        $data = About::findOrFail($about);

        return view("admin.pages.aboutEdit", compact('about','data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AboutRequest $request, $about)
    {

        $about = About::findOrFail($about);

        $about->about_title = $request->title;

        $about->about_name = $request->name;

        $about->about_position = $request->position;

        $about->about_text = $request->text;

        if ($request->hasFile('img')){

            $name = time().".".$request->file("img")->extension();

            $about->about_image = $name;

            $request->file("img")->move(public_path().'/images',$name);

        }

        $about->save();

        return redirect('/about');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
