@extends('admin.layouts.master')

@section('contents')
    <section class="section">
        <div class="section-header">
            <h1>Skills</h1>
        </div>
    </section>

    <div class="card">
        <div class="card-header">
            <h4>Update Skills</h4>

        </div>
        <div class="card-body">
            <form action="{{ route('admin.skills.update', $skill->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control {{ hasError($errors, 'name') }}" name="name"
                        value="{{ old('name', $skill->name) }}">
                    <!-- Display error message for 'name' -->
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-warning">Update</button>
                </div>
            </form>

        </div>
    </div>
@endsection
