@extends('layout.member.dashboard', ['pagen' => 'Add New  Preference'])

@section('content')
    <div id="account" class="raffles-breadcrumb">
        <div class="container">
            <div class="row hr-size-3 vr-size-3">
                <main id="main" class="col-xxl-12 col-lg-12">
                    <div class="content-element-main">
                        <div class="my-profile">
                            <h2>Add New preference</h2>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wrapper">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-7">
                                                <!-- - - - - - - - - - - - - - Login Form - - - - - - - - - - - - - - - - -->
                                                <form method="POST"
                                                    action="{{ route('member.preference.store') }}"
                                                    class="raffles-form type-2 item-col-1">
                                                    @csrf
                                                    <div class="raffles-col">
                                                        <div class="content-element-4">
                                                            <div class="row">
                                                                <div class="col-sm-12 mb-4">
                                                                    <label>Location*</label>
                                                                    <div class="raffles-custom-select">
                                                                        <select required name="location"
                                                                            data-default-text="Please select"
                                                                            style="display: none">
                                                                            @foreach ($locations as $location)
                                                                                <option
                                                                                    {{ $location->id == old('location') ? 'selected' : '' }}
                                                                                    value="{{ $location->id }}">
                                                                                    {{ $location->name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                        <x-form.error name="location" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 col-md-12">
                                                                    <label>My Preference*</label>
                                                                    <textarea type="textarea" id="cf_name" name="preference" required placeholder="My Preference">{{ old('preference') }}</textarea>
                                                                    <x-form.error name="preference" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="raffles-flex-item justify-content-between align-items-center">
                                                            <div class="btn-set align-items-center">
                                                                <button class="btn btn-big" type="submit">Save</button>
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

@push('footer')
    <script src="{{ asset('vendors/raffles.customselect.js') }}"></script>
    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $(".js-example-basic-single").select2();
        });
    </script>
@endpush
