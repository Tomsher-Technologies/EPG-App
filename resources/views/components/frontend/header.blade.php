<header id="raffles-header"
    class="raffles-header header-2 raffles-header--transparent raffles-header--transparent-single">
    <div class="raffles-header-section--sticky-xl">
        <div class="container-fluid">
            <div class="raffles-header-items">
                <div class="raffles-header-item">
                    <!--================ Navigation ================-->
                    <nav class="raffles-navigation-container">
                        <button id="raffles-nav-btn" class="raffles-nav-btn">
                            <span class="line line-top"></span><span class="line line-center"></span><span
                                class="line line-bottom"></span>
                        </button>
                    </nav>
                    <!--================ End of Navigation ================-->
                </div>
                <div class="raffles-header-item">
                    <a href="{{ route('home') }}" class="raffles-logo">
                        <img src="{{ asset('images/logo4.png') }}" alt="" />
                    </a>
                </div>
                <div class="raffles-header-item">
                    <div class="raffles-actions">
                        <div class="raffles-col">
                            <div class="raffles-our-info">
                                <div class="raffles-info">
                                    <i class="material-icons-outlined">phone</i>
                                    <span>+971 4 248 8888</span>
                                </div>
                            </div>
                        </div>

                        <div class="raffles-col">
                            @if (auth()->user())
                                <a href="{{ route('member.dashboard') }}" class="btn">Dashboard</a>
                            @else
                                <a href="{{ route('member.login') }}" class="btn">Login</a>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
