<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;
use App\User;

class TravelsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $travels = Travel::orderBy('created_at', 'desc')->paginate(10);
        return view('travels.index')->with('travels', $travels);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('travels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'origin' => 'required',
            'destination' => 'required',
            'depart_date' => 'required',
            'return_date' => 'required',
            'num_adults' => 'required',
            'body' => 'required',
        ]);

        // Create Travel Request
        $travel = new Travel;
        $travel->name = $request->input('name');
        $travel->email = $request->input('email');
        $travel->origin = $request->input('origin');
        $travel->destination = $request->input('destination');
        $travel->depart_date = $request->input('depart_date');
        $travel->return_date = $request->input('return_date');
        $travel->num_adults = $request->input('num_adults');
        $travel->num_children = $request->input('num_children');
        $travel->body = $request->input('body');
        $travel->user_id = auth()->user()->id;
        $travel->save();

        return redirect('/travels')->with('success', 'Request Submitted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $travel = Travel::find($id);
        return view('travels.show')->with('travel', $travel);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $travel = Travel::find($id);

        // Check for correct user
        if(auth()->user()->id !== $travel->user_id){
            return redirect('/travels')->with('error', 'Unauthorized Page');
        }
        return view('travels.edit')->with('travel', $travel);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'origin' => 'required',
            'destination' => 'required',
            'depart_date' => 'required',
            'return_date' => 'required',
            'num_adults' => 'required',
            'body' => 'required',
        ]);

        // Update Travel Request
        $travel = Travel::find($id);
        $travel->name = $request->input('name');
        $travel->email = $request->input('email');
        $travel->origin = $request->input('origin');
        $travel->destination = $request->input('destination');
        $travel->depart_date = $request->input('depart_date');
        $travel->return_date = $request->input('return_date');
        $travel->num_adults = $request->input('num_adults');
        $travel->num_children = $request->input('num_children');
        $travel->body = $request->input('body');
        $travel->save();

        return redirect('/travels')->with('success', 'Request Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $travel = Travel::find($id);

        // Check for correct user
        if(auth()->user()->id !== $travel->user_id){
            return redirect('/travels')->with('error', 'Unauthorized Page');
        }

        $travel->delete();

        return redirect('/travels')->with('success', 'Request Removed');
    }
}
