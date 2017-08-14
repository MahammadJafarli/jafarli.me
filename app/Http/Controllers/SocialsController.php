<?php

namespace App\Http\Controllers;

use App\Http\Requests\SocialRequest;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Social;

class SocialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Social::all();

        return view('admin.pages.socials', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.socialCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SocialRequest $request)
    {

        $social = new Social();

        $social->icon = $request->icon;

        $social->href = $request->link;

        $social->save();

        return redirect('/socials');

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
    public function edit(Social $social)
    {

        $data = Social::find($social);

        return view('admin.pages.socialEdit', compact('data','social'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SocialRequest $request, $social)
    {

        $social = Social::find($social);

        $social->icon = $request->icon;

        $social->href = $request->link;

        $social->save();

        return redirect('/socials');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $social = Social::find($id);

        $social->delete();

        return redirect('/socials');

    }
}
