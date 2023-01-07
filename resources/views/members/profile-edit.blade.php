@extends('layout.member.dashboard', ['pagen' => 'Edit My Profile'])

@section('content')
    <div id="account" class="raffles-breadcrumb">
        <div class="container">
            <div class="row hr-size-3 vr-size-3">
                <main id="main" class="col-xxl-12 col-lg-12">
                    <div class="content-element-main">
                        <div class="my-profile">
                            <h2>My Profile Edit</h2>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wrapper">
                                        <div class="row justify-content-center">

                                            <div class="col-md-12">
                                                @if (session('status'))
                                                    <div class="alert alert-success">
                                                        {{ session('status') }}
                                                    </div>
                                                @endif
                                            </div>

                                            <div class="col-lg-7">
                                                <!-- - - - - - - - - - - - - - Login Form - - - - - - - - - - - - - - - - -->
                                                <form method="POST" action="{{ route('member.profile.edit') }}"
                                                    class="raffles-form type-2 login item-col-1">
                                                    @csrf
                                                    <div class="raffles-col">
                                                        <div class="content-element-4">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="input-box">
                                                                        <label class="text-dark">Phone Number
                                                                            <span>*</span></label>
                                                                        <input type="text" name="phone" required=""
                                                                            value="{{ old('phone', $details->phone) }}"
                                                                            placeholder="Phone Number" />
                                                                        <x-form.error name="phone" />
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-12 mt-3">
                                                                    <label class="text-dark">Nationality *</label>
                                                                    <select required class="js-example-basic-single"
                                                                        name="nationality">
                                                                        @foreach ($countries as $country)
                                                                            <option
                                                                                {{ $country->name == $details->nationality ? 'selected' : '' }}
                                                                                value="{{ $country->name }}">
                                                                                {{ $country->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    <x-form.error name="nationality" />
                                                                </div>

                                                                <h2 class="mb-2 mt-2">Reset Password</h2>

                                                                <div class="col-sm-12">
                                                                    <div class="input-box">
                                                                        <label class="text-dark">Password</label>
                                                                        <input type="password" name="password"
                                                                            placeholder="Password" />

                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 mt-3">
                                                                    <div class="input-box">
                                                                        <label class="text-dark">Confirm Password</label>
                                                                        <input type="password" name="password_confirmation"
                                                                            placeholder="Password" />
                                                                        <x-form.error name="password" />
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div
                                                            class="raffles-flex-item justify-content-between align-items-center">
                                                            <div class="btn-set align-items-center">
                                                                <button class="btn btn-big" type="submit">Update
                                                                    Profile</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- - - - - - - - - - - - - - End of Login Form - - - - - - - - - - - - - - - - -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
@endsection

@push('header')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@push('footer')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".js-example-basic-single").select2();
        });
    </script>
@endpush
