<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\State;
use App\Traits\Searchable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Services\Notify;

class StateController extends Controller
{
    use Searchable;
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $query = State::query();
        $query->with('country');
        $this->search($query, ['name']);
        $states = $query->orderBy('id', 'desc')->paginate(10);

        return view('admin.location.state.index', compact('states'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = Country::all();

        return view('admin.location.state.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'state' => ['required', 'max:255'],
            'country' => ['required', 'integer'],
        ]);

        $state = new State();
        $state->country_id = $request->input('country');
        $state->name = $request->input('state');
        $state->save();

        Notify::createdNotification();
        return to_route('admin.states.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $state = State::findOrFail($id);
        $countries = Country::all();

        return view('admin.location.state.edit', compact('state', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            'state' => ['required', 'max:255'],
            'country' => ['required', 'integer'],
        ]);

        $state = State::findOrFail($id);

        $state->country_id = $request->input('country');
        $state->name = $request->input('state');
        $state->save();

        Notify::updatedNotification();
        return to_route('admin.states.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        State::findOrFail($id)->delete();
        // Notify::deletedNotification();
        return 1;
    }
}
