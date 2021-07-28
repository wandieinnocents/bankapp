<?php

namespace App\Http\Controllers;

use App\Models\Recipient;
use Illuminate\Http\Request;

class RecipientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipients = Recipient::all();
        return view('back_end.pages_backend.recipients_backend.index',compact('recipients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back_end.pages_backend.recipients_backend.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation
         
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|max:255',
            'phone_number' => 'required|max:255',
            'mobile_money_number' => 'required|max:255',
            'country' => 'required',
          ]);

       
        $recipient = new Recipient();
        $recipient->first_name             = $request->first_name;
        $recipient->last_name              = $request->last_name;
        $recipient->email                  = $request->email;
        $recipient->phone_number           = $request->phone_number;
        $recipient->mobile_money_number    = $request->mobile_money_number;
        $recipient->country                = $request->country;

        // save data to the database
        $recipient->save();

        // redirect
        return back()->with('success', 'Recipient Added successfully.');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recipient  $recipient
     * @return \Illuminate\Http\Response
     */
    public function show(Recipient $recipient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recipient  $recipient
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recipient = Recipient::findOrFail($id);
        return view('back_end.pages_backend.recipients_backend.edit',compact('recipient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recipient  $recipient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // update validation
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|max:255',
            'phone_number' => 'required|max:255',
            'mobile_money_number' => 'required|max:255',
            'country' => 'required',
          ]);


        $first_name          = $request->first_name;
        $last_name           = $request->last_name;
        $email               = $request->email;
        $phone_number        = $request->phone_number;
        $mobile_money_number = $request->mobile_money_number;
        $country             = $request->country;

        //pick id fields for updating
        $recipient = Recipient::find($id);

        // db fields
        $recipient->first_name            = $first_name;
        $recipient->last_name             = $last_name;
        $recipient->email                 = $email;
        $recipient->phone_number          = $phone_number;
        $recipient->mobile_money_number   = $mobile_money_number;
        $recipient->country               = $country;

        //update db 
        $recipient->save();

        // return redirect('/recipients');
        return back()->with('success', 'Recipient Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipient  $recipient
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recipient = Recipient::findOrFail($id);
        $recipient->delete();
        
        // redirect
        return redirect('/recipients');
    }
}
