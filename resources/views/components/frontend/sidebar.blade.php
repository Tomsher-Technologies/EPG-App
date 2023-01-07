<div id="raffles-nav-canvas" class="raffles-nav-canvas">
    <div class="raffles-nav-inner">
        <div class="raffles-col">
            <a href="{{ route('home') }}" class="raffles-logo"><img src="{{ asset('images/logo4.png') }}"
                    alt="" /></a>
        </div>
        <div class="raffles-col">
            <nav class="raffles-vr-nav">
                <ul>
                    <li class="menu-item current-menu-item">
                        <a href="{{ route('home') }}">Home</a>
                    </li>

                    @if (auth()->user())
                        <li class="menu-item current-menu-item">
                            <a href="{{ route('member.dashboard') }}">Dashboard</a>
                        </li>
                        <li class="menu-item current-menu-item">
                            <a href="{{ route('member.preference.index') }}">My preference</a>
                        </li>
                        <li class="menu-item current-menu-item">
                            <a href="{{ route('member.profile') }}">My Profile</a>
                        </li>
                    @endif

                    <li class="menu-item current-menu-item">
                        <a href="#">About Raffles</a>
                    </li>

                    <li class="menu-item current-menu-item">
                        <a href="#">Contact</a>
                    </li>

                    @if (auth()->user())
                        <li class="menu-item current-menu-item" style="margin-top: 30px">
                            <a href="https://wa.me/+97142488888" class="btn"
                                style="
                  background-color: #4fce5d;
                  background-color: #4fce5d;
                  padding: 10px;
                  margin: -20px !important;
                ">
                                <img width="20px" src="{{ asset('images/Whatsapp.png') }}" />
                                Request Concierge</a>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>
        <div class="raffles-col">
            <div class="raffles-social-icons">
                <ul>
                    <li>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                </ul>
            </div>
            <p class="text-white">
                Raffles The Palm, West Cresent, <br />
                Palm Jumeirah, Dubai <br />
            </p>
            <p class="text-white">+971 4 248 8888</p>
            <a href="pages_contact_v1.html" class="raffles-link">info.thepalm@raffles.com</a>
        </div>
    </div>
</div>
