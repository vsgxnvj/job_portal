<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Services\Notify;
use App\Traits\Searchable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Redirect;

class CountryController extends Controller
{
    use Searchable;
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $query = Country::query();
        $this->search($query, ['name']);
        $countries = $query->orderBy('id', 'desc')->paginate(10);

        return view('admin.location.country.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.location.country.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'max:255', 'unique:countries,name'],
        ]);

        $type = new Country();
        $type->name = $request->input('name');
        $type->save();

        Notify::createdNotification();

        return to_route('admin.countries.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $countries = Country::findorfail($id);

        return view('admin.location.country.edit', compact('countries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'max:255', 'unique:countries,name,' . $id],
        ]);

        $type = Country::findOrFail($id);
        $type->name = $request->input('name');
        $type->save();

        Notify::updatedNotification();

        return to_route('admin.countries.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Country::findOrFail($id)->delete();
        // Notify::deletedNotification();
        return 1;
    }
}