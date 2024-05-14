<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todo = Todo::where('user_id', Auth()->user()->id)->get();
        return view('pages.index', compact('todo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        Todo::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'deadline' => $request->deadline
        ]);

        return redirect()->back()->with('success', 'list success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {  
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //get data by id
        $todo = Todo::find($id);

        //delete data by id
        $todo->delete();

        return redirect()->route('todos.index')->with('success', 'Category Deleted Successfully');
    }
}
