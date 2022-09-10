<div class="mdk-drawer js-mdk-drawer layout-compact__drawer" id="default-drawer">
    <div class="mdk-drawer__content js-sidebar-mini" data-responsive-width="992px" data-layout="compact">
        <div class="sidebar sidebar-mini sidebar-dark-pickled-bluewood sidebar-left d-flex flex-column">
            <!-- Brand -->
            <a href="{{ route('dashboard') }}" class="sidebar-brand p-0 navbar-height d-flex justify-content-center">
                <span class="avatar avatar-sm">
                    <span class="avatar-title rounded bg-primary">
                        <img src="{{ getAdminAsset('images/logo/logo-1.png') }}" class="img-fluid"
                            alt="logo" /></span>
                </span>
            </a>

            <div class="flex d-flex flex-column justify-content-start" data-perfect-scrollbar>
                <ul class="nav flex-shrink-0 flex-nowrap flex-column sidebar-menu mb-0 sm-item-bordered js-sidebar-mini-tabs"
                    role="tablist">
                    <li class="sidebar-menu-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <a class="sidebar-menu-button" href="{{ route('dashboard') }}">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dashboard</i>
                            <span class="sidebar-menu-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-menu-item {{ request()->routeIs('members*') ? 'active' : '' }}"
                        data-title="Customers" data-placement="right" data-boundary="window">
                        <a class="sidebar-menu-button" href="#sm_customers" data-toggle="tab" role="tab"
                            aria-controls="sm_customers" aria-selected="true">
                            <i
                                class="sidebar-menu-icon sidebar-menu-icon--left material-icons">supervised_user_circle</i>
                            <span class="sidebar-menu-text">Members</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item" data-title="Rewards" data-placement="right" data-container="body"
                        data-boundary="window">
                        <a class="sidebar-menu-button" href="#sm_rewards-manage" data-toggle="tab" role="tab"
                            aria-controls="sm_rewards-manage" aria-selected="false">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">stars</i>
                            <span class="sidebar-menu-text">Rewards</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item" data-title="Packages" data-placement="right" data-container="body"
                        data-boundary="window">
                        <a class="sidebar-menu-button" href="#sm_packages" data-toggle="tab" role="tab"
                            aria-controls="sm_packages">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">style</i>
                            <span class="sidebar-menu-text">Memberships</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item {{ request()->routeIs('receptionist*') ? 'active' : '' }}" data-title="Receptionist" data-placement="right" data-container="body"
                        data-boundary="window">
                        <a class="sidebar-menu-button" href="#sm_receptionist" data-toggle="tab" role="tab"
                            aria-controls="sm_receptionist">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">person_pin_circle</i>
                            <span class="sidebar-menu-text">Receptionist</span>
                        </a>
                    </li>
                    <li class="sidebar-menu-item {{ request()->routeIs('location*') ? 'active' : '' }}" data-title="Locations" data-placement="right" data-container="body"
                        data-boundary="window">
                        <a class="sidebar-menu-button" href="#sm_location" data-toggle="tab" role="tab"
                            aria-controls="sm_location">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">person_pin_circle</i>
                            <span class="sidebar-menu-text">Locations</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="sidebar sidebar-light sidebar-left flex sidebar-secondary pt-16pt" data-perfect-scrollbar>
            <div class="tab-content">
                <div class="tab-pane" id="sm_receptionist_1">
                    <div class="sidebar-heading">Account</div>
                    <ul class="sidebar-menu">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="edit-account.html">
                                <span class="sidebar-menu-text">Edit Account</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="billing.html">Billing</a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="billing-history.html">Payments</a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="login.html">Logout</a>
                        </li>
                    </ul>
                </div>

                <div class="tab-pane" id="sm_packages">
                    <div class="sidebar-heading">
                        Membership Type
                    </div>
                    <ul class="sidebar-menu">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="all-packages.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">style</span>
                                <span class="sidebar-menu-text">All Membership Types</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="add-packages.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">add_box</span>
                                <span class="sidebar-menu-text">Add Membership Type</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="tab-pane" id="sm_customers">
                    <div class="sidebar-heading">Members</div>
                    <ul class="sidebar-menu">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{ route('members.index') }}">
                                <span
                                    class="material-icons sidebar-menu-icon sidebar-menu-icon--left">featured_play_list</span>
                                <span class="sidebar-menu-text">All Members</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{ route('members.create') }}">
                                <span
                                    class="material-icons sidebar-menu-icon sidebar-menu-icon--left">person_add</span>
                                <span class="sidebar-menu-text">Add Members</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="tab-pane" id="sm_rewards-manage">
                    <div class="sidebar-heading">Rewards</div>
                    <ul class="sidebar-menu">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="create-reward-locations.html">
                                <span
                                    class="material-icons sidebar-menu-icon sidebar-menu-icon--left">add_location</span>
                                <span class="sidebar-menu-text">Create reward locations</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="reward-location-details.html">
                                <span
                                    class="material-icons sidebar-menu-icon sidebar-menu-icon--left">assistant_photo</span>
                                <span class="sidebar-menu-text">Reward location details</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="reward-spent-report.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">poll</span>
                                <span class="sidebar-menu-text">Reward spent report</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane" id="sm_location">
                    <div class="sidebar-heading">Locations</div>
                    <ul class="sidebar-menu">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{ route('location.index') }}">
                                <span
                                    class="material-icons sidebar-menu-icon sidebar-menu-icon--left">pin_drop</span>
                                <span class="sidebar-menu-text">All Locations</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{ route('location.create') }}">
                                <span
                                    class="material-icons sidebar-menu-icon sidebar-menu-icon--left">add</span>
                                <span class="sidebar-menu-text">Add Locations</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane" id="sm_receptionist">
                    <div class="sidebar-heading">Receptionist</div>
                    <ul class="sidebar-menu">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{ route('receptionist.index') }}">
                                <span
                                    class="material-icons sidebar-menu-icon sidebar-menu-icon--left">supervisor_account</span>
                                <span class="sidebar-menu-text">All receptionist</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button" href="{{ route('receptionist.create') }}">
                                <span
                                    class="material-icons sidebar-menu-icon sidebar-menu-icon--left">person_add</span>
                                <span class="sidebar-menu-text">Add receptionist</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
