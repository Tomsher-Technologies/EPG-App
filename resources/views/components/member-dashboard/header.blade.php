<header id="raffles-header" class="raffles-header header-2">
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
                    <div class="raffles-actions">
                        <div class="raffles-col">
                            <h5 class="page-header">{{ $pagename }}</h5>
                        </div>
                    </div>
                </div>
                <div class="raffles-header-item">
                    <a href="{{ route('member.dashboard') }}" class="raffles-logo">
                        <img src="{{ asset('images/logo4.png') }}" alt="" />
                    </a>
                </div>
                <div class="raffles-header-item">
                    <div class="raffles-actions">
                        <div class="raffles-col">
                            <div class="raffles-our-info">
                                <div class="raffles-info">
                                    <i class="material-icons-outlined">person</i>
                                    <span>{{ auth()->user()->name }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="raffles-col">
                            <a href="#" onclick="document.getElementById('logoutForm').submit();"
                                class="btn">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
