<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\IndustryType;
use App\Services\Notify;
use App\Traits\Searchable;
use Illuminate\Http\RedirectResponse;

class IndustryTypeController extends Controller
{
    use Searchable;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $query = IndustryType::query();
        $this->search($query, ['name']);
        $industryTypes = $query->paginate(20);

        return view('admin.industry-type.index', compact('industryTypes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.industry-type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'max:255', 'unique:industry_types,name'],
        ]);

        $type = new IndustryType();
        $type->name = $request->input('name');
        $type->save();

        Notify::createdNotification();

        return to_route('admin.industry-type.index');
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
    public function edit(string $id): View
    {
        $industryTypes = IndustryType::findorfail($id);

        return view('admin.industry-type.edit', compact('industryTypes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => [
                'required',
                'max:255',
                'unique:industry_types,name,' . $id,
            ],
        ]);

        $type = IndustryType::findOrFail($id);
        $type->name = $request->input('name');
        $type->save();

        Notify::updatedNotification();

        return to_route('admin.industry-type.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        IndustryType::findOrFail($id)->delete();

        // Notify::deletedNotification();

        return 1;
    }
}
