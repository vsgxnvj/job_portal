@extends('admin.layouts.master')

@section('contents')
    <section class="section">
        <div class="section-header">
            <h1> Organization Type</h1>
        </div>
    </section>

    <div class="card">
        <div class="card-header">
            <h4>Create Organization Type</h4>

        </div>
        <div class="card-body">
            <form action="{{ route('admin.organization-type.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Organization Name</label>
                    <input type="text" class="form-control {{ hasError($errors, 'name') }}" name="name"
                        value="{{ old('name') }}">
                    <!-- Display error message for 'name' -->
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

        </div>
    </div>
@endsection
