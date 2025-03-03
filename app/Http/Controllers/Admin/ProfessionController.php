<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profession;
use App\Services\Notify;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Traits\Searchable;
use Illuminate\Http\RedirectResponse;

class ProfessionController extends Controller
{
    use Searchable;
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $query = Profession::query();
        $this->search($query, ['name']);
        $professions = $query->paginate(20);

        return view('admin.profession.index', compact('professions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.profession.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'max:255', 'unique:professions,name'],
        ]);

        $type = new Profession();
        $type->name = $request->input('name');
        $type->save();

        Notify::createdNotification();
        return to_route('admin.professions.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $profession = Profession::findorfail($id);
        return view('admin.profession.edit', compact('profession'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'max:255', 'unique:professions,name,' . $id],
        ]);

        $type = Profession::findOrFail($id);
        $type->name = $request->input('name');
        $type->save();

        Notify::updatedNotification();
        return to_route('admin.professions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Profession::findOrFail($id)->delete();
        Notify::deletedNotification();
        return 1;
    }
}
