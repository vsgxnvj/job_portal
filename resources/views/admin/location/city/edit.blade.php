@extends('admin.layouts.master')

@section('contents')
    <section class="section">
        <div class="section-header">
            <h1>Cities</h1>
        </div>
    </section>

    <div class="card">
        <div class="card-header">
            <h4>Edit City</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.cities.update', $city->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name">Country</label>\
                            <select name="country" class="form-control select2 country {{ hasError($errors, 'country') }}">
                                <option value="">SELECT COUNTRY</option>
                                @foreach ($countries as $country)
                                    <option @selected($country->id === $city->country_id) value="{{ $country->id }}">{{ $country->name }}
                                    </option>
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

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name">States</label>
                            <select name="state" class="form-control select2 state {{ hasError($errors, 'state') }}">
                                <option value="">SELECT STATES</option>
                                @foreach ($states as $state)
                                    <option @selected($state->id === $city->state_id) value="{{ $state->id }}">{{ $state->name }}
                                    </option>
                                @endforeach

                            </select>
                            <!-- Display error message for 'name' -->
                            @error('state')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="city">City Name</label>
                            <input type="text" class="form-control {{ hasError($errors, 'city') }}" name="city"
                                value="{{ old('city', $city->name) }}">
                            <!-- Display error message for 'name' -->
                            @error('city')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>

        </div>
    </div>
@endsection


@push('scripts')
    <script>
        $(document).ready(function() {
            $('.country').on('change', function() {
                let country_id = $(this).val(); // Get selected country ID

                $.ajax({
                    method: 'GET',
                    url: '{{ route('admin.get-states', ':id') }}'.replace(":id", country_id),
                    success: function(response) {
                        let stateSelect = $('.state'); // Target the state select box
                        stateSelect.empty(); // Clear previous options

                        let totalStates = response.length; // Get the count of states
                        stateSelect.append(
                            `<option value="">SELECT STATES (${totalStates})</option>`
                            ); // Default option with count

                        // Loop through response and append states
                        $.each(response, function(index, state) {
                            stateSelect.append(
                                `<option value="${state.id}">${state.name}</option>`
                                );
                        });

                        stateSelect.trigger('change'); // Refresh Select2 if used
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                });
            });


        });
    </script>
@endpush
