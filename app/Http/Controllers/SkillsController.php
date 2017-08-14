<?php

namespace App\Http\Controllers;

use App\Http\Requests\SkillRequest;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Skill;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Skill::all();

        return view('admin.pages.skills', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.pages.skillCreate');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SkillRequest $request)
    {

        $skill  = new Skill;

        $skill->skill_name = $request->name;

        $skill->skill_desc = $request->description;

        $skill->skill_percent = $request->percent;

        $skill->class = $request->class;

        $skill->save();

        return redirect('/skills');


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
    public function edit(Skill $skill)
    {

        $data = Skill::find($skill);

        return view('admin.pages.skillEdit',compact('data','skill'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SkillRequest $request, $skill)
    {

        $skill = Skill::find($skill);

        $skill->skill_name = $request->name;

        $skill->skill_desc = $request->description;

        $skill->skill_percent = $request->percent;

        $skill->class = $request->class;

        $skill->save();

        return redirect('/skills');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $skill = Skill ::find($id);

        $skill->delete();

        return redirect('/skills');

    }
}
