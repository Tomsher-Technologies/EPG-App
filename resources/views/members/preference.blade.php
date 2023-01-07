@extends('layout.member.dashboard', ['pagen' => 'My Preference'])

@section('content')
    <div id="account" class="raffles-breadcrumb">
        <div class="container">
            <div class="row hr-size-3 vr-size-3">
                <main id="main" class="col-xxl-12 col-lg-12">
                    <div class="content-element-main">
                        <div class="preference">
                            <div class="raffles-table-wrap shop-acc">
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <h2>My Preference</h2>
                                    </div>

                                    <div class="col-md-6">
                                        <a class="btn" style="float: right; margin-bottom: 20px"
                                            href="{{ route('member.preference.create') }}">
                                            Add new
                                        </a>
                                    </div>

                                    <div class="col-md-12">
                                        @if (session('status'))
                                            <div class="alert alert-success">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                                    </div>

                                    <div class="col-md-12">
                                        <table class="raffles-table--responsive-md">
                                            <thead>
                                                <tr>
                                                    <th class="order-number">Sl No.</th>
                                                    <th class="order-date">Used Location</th>
                                                    <th>Preference</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($preference as $pref)
                                                    <tr>
                                                        <td data-cell-title="Order #">
                                                            {{ $pref->id }}
                                                        </td>
                                                        <td data-cell-title="Status">
                                                            {{ $pref->location->name }}
                                                        </td>
                                                        <td data-cell-title="Date">
                                                            {{ $pref->preference }}
                                                        </td>

                                                        <td data-cell-title="Total">
                                                            <div class="mob-d-btn">
                                                                <a href="{{ route('member.preference.edit', $pref) }}"
                                                                    class="btn"><span
                                                                        class="material-icons-outlined">edit</span></a>
                                                                <form
                                                                    action="{{ route('member.preference.destroy', $pref) }}"
                                                                    style="display: inline-block" method="post">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button class="btn style-3">
                                                                        <span class="material-icons-outlined">delete</span>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>


    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <form method="POST" {{ route('member.preference.create') }} class="raffles-contact-form raffles-form type-2">
                <div class="">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 raffles-form-item">
                            <label>Location*</label>
                            <div class="raffles-custom-select">
                                <select required name="location" data-default-text="Please select">
                                    @foreach ($locations as $location)
                                        <option value="{{ $location->id }}">{{ $location->name }}</option>
                                    @endforeach
                                </select>
                                <x-form.error name="location" />
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 raffles-form-item">
                            <label>My Preference*</label>
                            <textarea type="textarea" id="cf_name" name="pref_text" required placeholder="My Preference"></textarea>
                            <x-form.error name="pref_text" />
                        </div>
                        <div class="col-md-12 raffles-form-item">
                            <button type="submit" class="btn" style="margin-top: 9px; width: 100%">Add</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        };

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        };

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        };
    </script>
@endsection

@push('header')
    @livewireStyles
@endpush
@push('footer')
    @livewireScripts
    <script src="{{ asset('vendors/raffles.customselect.js') }}"></script>
@endpush
