@extends('layout.member.dashboard', ['pagen' => 'My Profile'])

@section('content')
    <div id="account" class="raffles-breadcrumb">
        <div class="container">
            <div class="row hr-size-3 vr-size-3">
                <main id="main" class="col-xxl-12 col-lg-12">
                    <div class="content-element-main">
                        <div class="my-profile">
                            <h2>My Profile</h2>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wrapper">
                                        <div class="profile-card js-profile-card">
                                            <div class="profile-card__img">
                                                <img src="https://res.cloudinary.com/muhammederdem/image/upload/v1537638518/Ba%C5%9Fl%C4%B1ks%C4%B1z-1.jpg"
                                                    alt="profile card" />
                                            </div>

                                            <div class="profile-card__cnt js-profile-cnt">
                                                <div class="profile-card__name">
                                                    {{ auth()->user()->name }}
                                                </div>

                                                <div class="profile-card-loc mb-2">
                                                    <span class="profile-card-loc__icon">
                                                        <span class="material-icons-outlined">
                                                            email
                                                        </span>
                                                    </span>

                                                    <span class="profile-card-loc__txt">
                                                        {{ auth()->user()->email }}
                                                    </span>
                                                </div>
                                                <div class="profile-card-loc mb-2">
                                                    <span class="profile-card-loc__icon">
                                                        <span class="material-icons-outlined">
                                                            phone
                                                        </span>
                                                    </span>

                                                    <span class="profile-card-loc__txt">
                                                        {{ auth()->user()->member_details->phone }}
                                                    </span>
                                                </div>

                                                <div class="profile-card-loc mb-2">
                                                    <span class="profile-card-loc__icon">
                                                        <span class="material-icons-outlined">
                                                            location_on
                                                        </span>
                                                    </span>

                                                    <span class="profile-card-loc__txt">
                                                        {{ auth()->user()->member_details->nationality }}
                                                    </span>
                                                </div>

                                                <div class="profile-card-ctr">
                                                    <a href="{{ route('member.profile.edit') }}" class="btn">Edit</a>
                                                </div>
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
