<?php

namespace App\Http\Controllers;

use App\Http\Requests\PortfolioRequest;

use App\Portfolio;

use App\Work;

use Illuminate\Http\Request;

use App\Http\Requests;


class PortfoliosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Portfolio::all();

        return view('admin.pages.portfolios', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data = Work::all();

        return view('admin.pages.portfolioCreate', compact('data'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PortfolioRequest $request)
    {

        $portfolio = new Portfolio;

        $portfolio->portfolio_name = $request->name;

        $portfolio->link = $request->link;

        $portfolio->description = $request->description;

        if ($request->hasFile('img')){

            $name = time().".".$request->file("img")->extension();

            $portfolio->posrtfolio_image = $name;

            $request->file("img")->move(public_path().'/images',$name);

        }

        $portfolio->work_id = $request->work;

        $portfolio->save();

        return redirect('/portfolios');

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
    public function edit(Portfolio $portfolio)
    {

        $data = Portfolio::find($portfolio);

        $workData = Work::all();

        return view('admin.pages.portfolioEdit', compact('data','workData','portfolio'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PortfolioRequest $request, $portfolio)
    {

        $portfolio = Portfolio::find($portfolio);

        $portfolio->portfolio_name = $request->name;

        $portfolio->link = $request->link;

        $portfolio->description = $request->description;

        if ($request->hasFile('img')){

            $name = time().".".$request->file("img")->extension();

            $portfolio->posrtfolio_image = $name;

            $request->file("img")->move(public_path().'/images',$name);

        }

        $portfolio->work_id = $request->work;

        $portfolio->save();

        return redirect('/portfolios');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $portfolio = Portfolio::find($id);

        $portfolio->delete();

        return redirect('/portfolios');

    }
}
