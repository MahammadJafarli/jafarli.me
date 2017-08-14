<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Service;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Service::all();

        return view('admin.pages.services',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.pages.serviceCreate');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceRequest $request)
    {

        $service = New Service;

        $service->serrvice_name = $request->name;

        $service->service_description = $request->description;

        $service->service_icon = $request->icon;

        $service->save();

        return redirect('/services');

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
    public function edit(Service $service)
    {

        $data = Service::find($service);

        return view('admin.pages.serviceEdit', compact('data','service'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceRequest $request, $service)
    {

        $service =  Service::find($service);

        $service->serrvice_name = $request->name;

        $service->service_description = $request->description;

        $service->service_icon = $request->icon;

        $service->save();

        return redirect('/services');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $service =  Service ::find($id);

        $service->delete();

        return redirect('/services');

    }
}
