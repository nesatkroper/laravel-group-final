<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
  <div class="sidebar-brand">
    <a href="{{ route('home') }}" class="brand-link">
      <img
        src="{{ asset('images/flag.png') }}"
        alt="AdminLTE Logo"
        class="brand-image opacity-75 shadow"
      />
      <span class="brand-text fw-light">UNIVERSITY</span>
    </a>
  </div>
  <div class="sidebar-wrapper">
    <nav class="mt-2">
      <ul
        class="nav sidebar-menu flex-column"
        data-lte-toggle="treeview"
        role="menu"
        data-accordion="false"
      >
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-ui-checks-grid"></i>
            <p>
              Components
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>Main Header</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>Main Sidebar</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-person"></i>
            <p>Staff</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('student.index') }}" class="nav-link">
            <i class="nav-icon bi bi-people"></i>
            <p>{{ __("student.stu") }}</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('staff.create') }}" class="nav-link">
            <i class="nav-icon bi bi-people"></i>
            <p>{{ __("student.stu") }}</p>
          </a>
        </li>
        <li class="position-absolute bottom-0">
          <form action="{{ route('logout') }}" method="post">
            @csrf
            <button
              type="submit"
              class="btn btn-danger d-flex justify-content-center align-items-center gap-4 mb-2"
              style="width: 230px"
            >
              <i class="nav-icon bi bi-box-arrow-left"></i>
              Logout
            </button>
          </form>
        </li>
      </ul>
    </nav>
  </div>
</aside>
