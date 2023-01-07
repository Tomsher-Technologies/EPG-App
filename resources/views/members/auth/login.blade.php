@extends('layout.member.app')

@section('content')
    <div class="raffles-breadcrumb with-bg-img with-overlay" data-bg-image-src="images/bg3.jpg">
        <div class="container wide">
            <div class="">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <h2 class="raffles-page-title align-center">Login</h2>
                            <!-- - - - - - - - - - - - - - Login Form - - - - - - - - - - - - - - - - -->
                            <form class="raffles-form type-2 login item-col-1" action="{{ route('member.login') }}"
                                method="POST">
                                @csrf
                                <x-form.error name="nouser" />
                                <div class="raffles-col">
                                    <div class="content-element-4">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="input-box">
                                                    <label>Email <span>*</span></label>
                                                    <input type="email" name="email" id="email" required
                                                        placeholder="Email"  value="lycehejebu@mailinator.com"/>
                                                    <x-form.error name="email" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-box">
                                                    <label>Password <span>*</span></label>
                                                    <input type="password" name="password" required
                                                        placeholder="Password" value="password" />
                                                    <x-form.error name="password" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="raffles-flex-item justify-content-between align-items-center">
                                        <div class="btn-set align-items-center">
                                            <button type="submit" class="btn btn-big">Login</button>
                                            <div id="login-remeber" class="content-element-2">
                                                <div style="display: block" class="raffles-toggled-fields size-2">
                                                    <input type="checkbox" name="remember" id="checkbox-1" />
                                                    <label for="checkbox-1" class="raffles-label-checkbox">Remember
                                                        me</label>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <a href="#" class="raffles-link">Lost your password?</a> --}}
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
@endsection
