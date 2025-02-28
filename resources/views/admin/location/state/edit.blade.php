@extends('admin.layouts.master')

@section('contents')
    <section class="section">
        <div class="section-header">
            <h1>States</h1>
        </div>
    </section>

    <div class="card">
        <div class="card-header">
            <h4>Edit State</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.states.update', $state->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Country</label>

                                <select name="country" class="form-control select2 {{ hasError($errors, 'country') }}">
                                    @foreach ( $countries as $country )
                                        <option @selected($state->country_id === $country->id) value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                            <!-- Display error message for 'name' -->
                            @error('country')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">State Name</label>
                            <input type="text" class="form-control {{ hasError($errors, 'state') }}" name="state"
                                value="{{ old('state' , $state->name) }}">
                            <!-- Display error message for 'name' -->
                            @error('state')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>

        </div>
    </div>
@endsection
