<?php

namespace App\Http\Controllers;
use App\Todo;

use Illuminate\Http\Request;
use Session;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = Todo::all();
        return view('index')->with('todos', $todos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // create new instance of todo
        $todo = new Todo;

        // assign new row to new request
        $todo->name = $request->name;
        $todo->save();

        Session::flash('success', 'Your todo was created successfully!');

        return redirect()->back();
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
    public function edit($id)
    {
        $todo = Todo::find($id);

        return view('edit')->with('todo', $todo);
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

        $todo = Todo::find($id);

        $todo->name = $request->name;

        $todo->save();

        Session::flash('success', 'Your todo was updated successfully!');

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo = Todo::find($id);
        $todo->delete();

        Session::flash('success', 'Your todo was deleted successfully!');

        return redirect()->back();
    }

    public function completed($id)
    {
        $todo = Todo::find($id);

        $todo->completed = !$todo->completed;

        $todo->save();

        Session::flash('success', 'Your todo was completed successfully!');

        return redirect()->back();
    }
}
