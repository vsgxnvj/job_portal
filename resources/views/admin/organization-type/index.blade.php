@extends('admin.layouts.master')

@section('contents')
    <section class="section">
        <div class="section-header">
            <h1>Organization Type</h1>
        </div>
    </section>



    <div class="card">
        <div class="card-header">
            <h4>All Organization Types</h4>
            <div class="card-header-form">
                <form accept="{{ route('admin.organization-type.index') }}" method="GET">
                    {{-- @csrf --}}
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}">
                        <div class="input-group-btn">
                            <button type="submit" style="height: 40px" class="btn btn-primary"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <a href="{{ route('admin.organization-type.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i>
                Create New </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <tr>
                        <th>Industry Name</th>
                        <th>Slug</th>
                        <th style="width: 20%">Action</th>

                    </tr>
                    <tbody> 

                        @forelse ($organizationTypes as $type)
                            <tr>
                                <td>{{ $type->name }}</td>
                                <td>{{ $type->slug }}</td>
                                <td>
                                    <a name="" id="" class="btn btn-warning" href="{{ route('admin.organization-type.edit', $type->id) }}"
                                        role="button"><i class="far fa-edit"></i></a>
                                    <a name="" id="" class="btn btn-danger delete_industry_type" data-id="{{ $type->id }}" href="{{ route('admin.organization-type.destroy', $type->id) }}" role="button"><i
                                            class="fas fa-trash-alt"></i></a>

                                </td>
                            </tr>

                            @empty

                             <tr>
                                <td colspan="3" class="text-center">No result found!</td>
                            </tr>

                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>

        <div class="card-footer text-right">
            <nav class="d-inline-block">


                @if ($organizationTypes->hasPages())
                    {{ $organizationTypes->withQueryString()->links() }}
                @endif

            </nav>



        </div>
    </div>

@endsection
