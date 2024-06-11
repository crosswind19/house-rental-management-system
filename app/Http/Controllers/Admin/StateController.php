<?php

namespace App\Http\Controllers\Admin;

use App\Models\State;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StateController extends Controller
{
    public function index()
    {
        $states = State::all();
        return view('admin.states.index', compact('states'));
    }

    public function create()
    {
        return view('admin.states.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        State::create($request->all());

        return redirect()->route('admin.states.index')->with('success', 'State created successfully.');
    }

    public function edit(State $state)
    {
        return view('admin.states.edit', compact('state'));
    }

    public function update(Request $request, State $state)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $state->update($request->all());

        return redirect()->route('admin.states.index')->with('success', 'State updated successfully.');
    }

    public function destroy(State $state)
    {
        $state->delete();

        return redirect()->route('admin.states.index')->with('success', 'State deleted successfully.');
    }
}
