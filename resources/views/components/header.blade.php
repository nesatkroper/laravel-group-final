<nav class="app-header navbar navbar-expand bg-body">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a
                    class="nav-link"
                    data-lte-toggle="sidebar"
                    href="#"
                    role="button"
                >
                    <i class="bi bi-list"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a
                    class="nav-link"
                    data-widget="navbar-search"
                    href="#"
                    role="button"
                >
                    <i class="bi bi-search"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-lte-toggle="fullscreen">
                    <i
                        data-lte-icon="maximize"
                        class="bi bi-arrows-fullscreen"
                    ></i>
                    <i
                        data-lte-icon="minimize"
                        class="bi bi-fullscreen-exit"
                        style="display: none"
                    ></i>
                </a>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <button
                        class="btn"
                        type="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        <i class="bi bi-translate"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a
                                class="dropdown-item"
                                href="{{route('lang', ['locale'=>'kh'])}}"
                            >
                                <img
                                    src="{{ asset('images/kh.png') }}"
                                    alt="flag"
                                    style="height: 20px; margin-right: 10px"
                                />
                                Khmer</a
                            >
                        </li>
                        <li>
                            <a
                                class="dropdown-item"
                                href="{{route('lang', ['locale'=>'en'])}}"
                            >
                                <img
                                    src="{{ asset('images/en.png') }}"
                                    alt="flag"
                                    style="height: 20px; margin-right: 10px"
                                />English</a
                            >
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item dropdown user-menu rounded-4">
                <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-bs-toggle="dropdown"
                >
                    <img
                        src="{{ asset('images/profile.jpg') }}"
                        class="user-image rounded-circle shadow"
                        alt="User Image"
                    />
                    <span
                        class="d-none d-md-inline"
                        >{{Auth::user()->name}}</span
                    >
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <!--begin::User Image-->
                    <li class="user-header text-bg-primary">
                        <img
                            src="{{ asset('images/profile.jpg') }}"
                            class="rounded-circle shadow"
                            alt="User Image"
                        />
                        <p>
                            {{Auth::user()->name}} - Web Developer
                            <small>Member since Nov. 2024</small>
                        </p>
                    </li>
                    <li class="user-body">
                        <div class="row">
                            <div class="col-4 text-center">
                                <a href="#">Followers</a>
                            </div>
                            <div class="col-4 text-center">
                                <a href="#">Sales</a>
                            </div>
                            <div class="col-4 text-center">
                                <a href="#">Friends</a>
                            </div>
                        </div>
                    </li>
                    <li class="user-footer">
                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                        <a href="#" class="btn btn-default btn-flat float-end"
                            >Sign out</a
                        >
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
