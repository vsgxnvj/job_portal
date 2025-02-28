@extends('frontend.layouts.master')


@section('contents')
    <section class="section-box mt-75">
        <div class="breacrumb-cover">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h2 class="mb-20">Blog</h2>
                        <ul class="breadcrumbs">
                            <li><a class="home-icon" href="index.html">Home</a></li>
                            <li>Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-box mt-120">
        <div class="container">
            <div class="row">
                @include('frontend.company-dashboard.sidebar')
                <div class="col-lg-9 col-md-8 col-sm-12 col-12 mb-50">
                    {{-- <div class="content-single">
                                    <h3 class="mt-0 mb-15 color-brand-1">My Account</h3><a
                                        class="font-md color-text-paragraph-2" href="#">Update your profile</a>
                                    <div class="mt-35 mb-40 box-info-profie">
                                        <div class="image-profile"><img
                                                src="{{ asset('frontend/assets/imgs/page/candidates/candidate-profile.png') }}" alt="joblist">
                                        </div><a class="btn btn-apply">Upload Avatar</a><a class="btn btn-link">Delete</a>
                                    </div>
                                    <div class="row form-contact">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="font-sm color-text-mutted mb-10">Full Name *</label>
                                                <input class="form-control" type="text" value="Steven Job">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="font-sm color-text-mutted mb-10">Email *</label>
                                                <input class="form-control" type="text" value="stevenjob@gmail.com">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="font-sm color-text-mutted mb-10">Contact number</label>
                                                <input class="form-control" type="text" value="01 - 234 567 89">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="font-sm color-text-mutted mb-10">Personal website</label>
                                                <input class="form-control" type="url" value="https://alithemes.com">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="font-sm color-text-mutted mb-10">Bio</label>
                                                <textarea class="form-control" rows="4">We are AliThemes , a creative and dedicated group of individuals who love web development almost as much as we love our customers. We are passionate team with the mission for achieving the perfection in web design.</textarea>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="font-sm color-text-mutted mb-10">Country</label>
                                                    <input class="form-control" type="text" value="United States">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="font-sm color-text-mutted mb-10">State</label>
                                                    <input class="form-control" type="text" value="New York">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="font-sm color-text-mutted mb-10">City</label>
                                                    <input class="form-control" type="text" value="Mcallen">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="font-sm color-text-mutted mb-10">Zip code</label>
                                                    <input class="form-control" type="text" value="82356">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-bottom pt-10 pb-10 mb-30"></div>
                                        <h6 class="color-orange mb-20">Change your password</h6>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="font-sm color-text-mutted mb-10">Password</label>
                                                    <input class="form-control" type="password" value="123456789">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="font-sm color-text-mutted mb-10">Re-Password *</label>
                                                    <input class="form-control" type="password" value="123456789">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-bottom pt-10 pb-10"></div>
                                        <div class="box-agree mt-30">
                                            <label class="lbl-agree font-xs color-text-paragraph-2">
                                                <input class="lbl-checkbox" type="checkbox" value="1">Available for
                                                freelancers
                                            </label>
                                        </div>
                                        <div class="box-button mt-15">
                                            <button class="btn btn-apply-big font-md font-bold">Save All Changes</button>
                                        </div>
                                    </div>
                                </div> --}}

                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Company Info</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">Founding Info</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">Account Setting</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">


                            {{-- <form action="{{ route('company.profile-company-info') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">

                                    <div class="col-md-6">
                                        <x-image-preview : height="200" :width="200" :source="$companyInfo?->logo" />
                                        <div class="form-group">
                                            <label class="font-sm color-text-mutted mb-10">Logo *</label>
                                            <input class="form-control {{ $errors->has('logo') ? 'is-invalid' : '' }}"
                                                type="file" name="logo">
                                            <x-input-error :messages="$errors->get('logo')" class="mt-2" />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <x-image-preview : height="200" :width="200" :source="$companyInfo?->banner" />
                                        <div class="form-group">
                                            <label class="font-sm color-text-mutted mb-10">Banner *</label>
                                            <input class="form-control {{ $errors->has('banner') ? 'is-invalid' : '' }}"
                                                type="file" name="banner">
                                            <x-input-error :messages="$errors->get('banner')" class="mt-2" />
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="font-sm color-text-mutted mb-10">Company Name *</label>
                                            <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                                type="text" name="name" value="{{ $companyInfo?->name }}">
                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="font-sm color-text-mutted mb-10">Company Bio *</label>
                                            <textarea name="bio" class="summernote1 {{ $errors->has('bio') ? 'is-invalid' : '' }}">{{ $companyInfo?->bio }}</textarea>
                                            <x-input-error :messages="$errors->get('bio')" class="mt-2" />
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="font-sm color-text-mutted mb-10">Company Vision *</label>
                                            <textarea name="vision" class="summernote1 {{ $errors->has('vision') ? 'is-invalid' : '' }}">{{ $companyInfo?->vision }}</textarea>
                                            <x-input-error :messages="$errors->get('vision')" class="mt-2" />
                                        </div>
                                    </div>
                                </div>

                                <div class="box-button mt-15">
                                    <button class="btn btn-apply-big font-md font-bold">Save All Changes</button>
                                </div>



                            </form> --}}


                            <form action="{{ route('company.profile-company-info') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">

                                    <div class="col-md-6">
                                        <x-image-preview :height="200" :width="200" :source="$companyInfo?->logo" />
                                        <div class="form-group">
                                            <label class="font-sm color-text-mutted mb-10">Logo *</label>
                                            <input class="form-control @error('logo') is-invalid @enderror" type="file"
                                                name="logo">
                                            @error('logo')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <x-image-preview :height="200" :width="200" :source="$companyInfo?->banner" />
                                        <div class="form-group">
                                            <label class="font-sm color-text-mutted mb-10">Banner *</label>
                                            <input class="form-control @error('banner') is-invalid @enderror" type="file"
                                                name="banner">
                                            @error('banner')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="font-sm color-text-mutted mb-10">Company Name *</label>
                                            <input class="form-control @error('name') is-invalid @enderror" type="text"
                                                name="name" value="{{ old('name', $companyInfo?->name) }}">
                                            @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="font-sm color-text-mutted mb-10">Company Bio *</label>
                                            <textarea name="bio" class="summernote1 form-control @error('bio') is-invalid @enderror">{{ old('bio', $companyInfo?->bio) }}</textarea>
                                            @error('bio')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="font-sm color-text-mutted mb-10">Company Vision *</label>
                                            <textarea name="vision" class="summernote1 form-control @error('vision') is-invalid @enderror">{{ old('vision', $companyInfo?->vision) }}</textarea>
                                            @error('vision')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="box-button mt-15">
                                    <button class="btn btn-apply-big font-md font-bold">Save All Changes</button>
                                </div>

                            </form>


                        </div>

                        {{-- FOUNDING INFO --}}
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <form action="{{ route('company.profile-founding-info') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group select-style">
                                            <label class="font-sm color-text-mutted mb-10">Industry Type *</label>
                                            <select name="industry_type" id="industry_type"
                                                class="form-control form-icons select-active @error('industry_type') is-invalid @enderror">
                                                <option value="">Select</option>
                                                @foreach ($industryTypes as $industryType)
                                                    <option @selected($industryType->id === $companyInfo?->industry_type_id ) value="{{ $industryType->id }}">{{ $industryType->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('industry_type')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group select-style">
                                            <label class="font-sm color-text-mutted mb-10">Organization Type *</label>
                                            <select name="organization_type" id="organization_type"
                                                class="form-control form-icons select-active @error('organization_type') is-invalid @enderror">
                                                <option value="">Select</option>
                                                @foreach ($organizationTypes as $organizationType)
                                                    <option @selected($organizationType->id === $companyInfo?->organization_type_id ) value="{{ $organizationType->id }}">
                                                        {{ $organizationType->name }}
                                                    </option>
                                                @endforeach

                                            </select>
                                            @error('organization_type')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group select-style">
                                            <label class="font-sm color-text-mutted mb-10">Team Size *</label>
                                            <select name="team_size" id="team_size"
                                                class="form-control form-icons select-active @error('team_size') is-invalid @enderror">
                                                <option value="">Select</option>
                                                @foreach ($teamSizes as $teamSize)
                                                    <option @selected($teamSize->id === $companyInfo?->team_size_id ) value="{{ $teamSize->id }}">
                                                        {{ $teamSize->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('team_size')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="font-sm color-text-mutted mb-10">Establishment Date</label>
                                            <input type="text" name="establishment_date"
                                                value="{{ $companyInfo?->establishment_date }}"
                                                class="form-control datepicker @error('establishment_date') is-invalid @enderror">
                                            @error('establishment_date')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="font-sm color-text-mutted mb-10">Website</label>
                                            <input type="text" name="website" value="{{ $companyInfo?->website }}"
                                                class="form-control @error('website') is-invalid @enderror">
                                            @error('website')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="font-sm color-text-mutted mb-10">Email *</label>
                                            <input type="email" name="email" value="{{ $companyInfo?->email }}"
                                                class="form-control @error('email') is-invalid @enderror">
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="font-sm color-text-mutted mb-10">Phone *</label>
                                            <input type="text" name="phone" value="{{ $companyInfo?->phone }}"
                                                class="form-control @error('phone') is-invalid @enderror">
                                            @error('phone')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group select-style">
                                            <label class="font-sm color-text-mutted mb-10 ">Country *</label>
                                            <select name="country" id="country"
                                                class="form-control form-icons country select-active @error('country') is-invalid @enderror">
                                                <option value="">Select</option>
                                                @foreach ($countries as $country)
                                                    <option @selected($country->id === $companyInfo?->country) value="{{ $country->id }}">
                                                        {{ $country->name }}
                                                    </option>
                                                @endforeach

                                            </select>
                                            @error('country')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group select-style">
                                            <label class="font-sm color-text-mutted mb-10">State</label>
                                            <select name="state" id="state"
                                                class="form-control form-icons state select-active @error('state') is-invalid @enderror">
                                                <option value="">Select</option>
                                                  @foreach ($states as $state)
                                                    <option @selected($state->id === $companyInfo?->state) value="{{ $state->id }}">
                                                        {{ $state->name }}
                                                    </option>
                                                @endforeach

                                            </select>
                                            @error('state')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group select-style">
                                            <label class="font-sm color-text-mutted mb-10">City</label>
                                            <select name="city" id="city"
                                                class="form-control form-icons city select-active @error('city') is-invalid @enderror">
                                                <option value="">Select</option>
                                                 @foreach ($cities as $city)
                                                    <option @selected($city->id === $companyInfo?->city) value="{{ $city->id }}">
                                                        {{ $city->name }}
                                                    </option>
                                                @endforeach

                                            </select>
                                            @error('city')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="font-sm color-text-mutted mb-10">Address</label>
                                            <input type="text" name="address" value="{{ $companyInfo?->address }}"
                                                class="form-control @error('address') is-invalid @enderror">
                                            @error('address')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="font-sm color-text-mutted mb-10">Map Link</label>
                                            <input type="text" name="map_link" value="{{ $companyInfo?->map_link }}"
                                                class="form-control @error('map_link') is-invalid @enderror">
                                            @error('map_link')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="box-button mt-15">
                                    <button class="btn btn-apply-big font-md font-bold">Save All Changes</button>
                                </div>
                            </form>


                        </div>

                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">


                            <form action="{{ route('company.profile-account-info') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="font-sm color-text-mutted mb-10">Name *</label>
                                            <input type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                value="{{ auth()->user()->name }}">
                                            @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="font-sm color-text-mutted mb-10">Email *</label>
                                            <input type="text"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ auth()->user()->email }}">
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-default btn-shadow">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>



                            <form action="{{ route('company.profile.password-update') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="font-sm color-text-mutted mb-10">Password *</label>
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password">
                                            @error('password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="font-sm color-text-mutted mb-10">Confirm Password *</label>
                                            <input type="password"
                                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                                name="password_confirmation">
                                            @error('password_confirmation')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-default btn-shadow">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>



                </div>
            </div>
        </div>
    </section>




    <div class="mt-120"></div>
@endsection




@push('scripts')
   <script>
    $(document).ready(function() {
        $('.country').on('change', function() {
            let country_id = $(this).val(); // Get selected country ID

            $('.city').html("");

            $.ajax({
                method: 'GET',
                url: '{{ route("get-states", ":id") }}'.replace(":id", country_id), // Fixed syntax
                success: function(response) {
                    let stateSelect = $('.state'); // Target the state select box
                    stateSelect.empty(); // Clear previous options

                    let totalStates = response.length; // Get the count of states
                    stateSelect.append(
                        `<option value="">SELECT STATE (${totalStates})</option>`
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

        $('.state').on('change', function() {
            let stateId = $(this).val(); // Get selected state ID

            $.ajax({
                method: 'GET',
                url: '{{ route("get-cities", ":id") }}'.replace(":id", stateId), // Fixed syntax
                success: function(response) {
                    let citySelect = $('.city'); // Target the city select box
                    citySelect.empty(); // Clear previous options

                    let totalCities = response.length; // Get the count of cities
                    citySelect.append(
                        `<option value="">SELECT CITY (${totalCities})</option>`
                    ); // Default option with count

                    // Loop through response and append cities
                    $.each(response, function(index, city) {
                        citySelect.append(
                            `<option value="${city.id}">${city.name}</option>`
                        );
                    });

                    citySelect.trigger('change'); // Refresh Select2 if used
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
        });
    });
</script>

@endpush
