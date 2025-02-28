<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrganizationType;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Services\Notify;
use App\Traits\Searchable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class OrganizationTypeController extends Controller
{
    use Searchable;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $query = OrganizationType::query();
        $this->search($query, ['name']);
        $organizationTypes = $query->paginate(20);

        return view(
            'admin.organization-type.index',
            compact('organizationTypes')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.organization-type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'max:255', 'unique:organization_types,name'],
        ]);

        $type = new OrganizationType();
        $type->name = $request->input('name');
        $type->save();

        Notify::createdNotification();

        return to_route('admin.organization-type.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $organizationTypes = OrganizationType::findorfail($id);

        return view(
            'admin.organization-type.edit',
            compact('organizationTypes')
        );
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
                'unique:organization_types,name,' . $id,
            ],
        ]);

        $type = OrganizationType::findOrFail($id);
        $type->name = $request->input('name');
        $type->save();

        Notify::updatedNotification();

        return to_route('admin.organization-type.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        OrganizationType::findOrFail($id)->delete();

        // Notify::deletedNotification();

        return 1;
    }
}
