<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\ContactMe;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = ContactMe::all();

        return view('admin.pages.contact', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.contactCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {

        $contact = new ContactMe();

        $contact->location = $request->location;

        $contact->telephone = $request->telephone;

        $contact->email = $request->email;

        $contact->contact_text = $request->text;

        $contact->google_map = $request->map;

        $contact->save();

        return redirect('/contact');

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
    public function edit(ContactMe $contact)
    {

        $data = ContactMe::find($contact);

        return view ('admin.pages.contactEdit', compact('data','contact'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContactRequest $request, $contact)
    {

        $contact = ContactMe::find($contact);

        $contact->location = $request->location;

        $contact->telephone = $request->telephone;

        $contact->email = $request->email;

        $contact->contact_text = $request->text;

        $contact->google_map = $request->map;

        $contact->save();

        return redirect('/contact');

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
