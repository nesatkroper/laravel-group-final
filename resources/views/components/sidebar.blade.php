<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
  <div class="sidebar-brand">
    <a href="{{ route('home') }}" class="brand-link">
      <img src="{{ asset('images/flag.png') }}" alt="AdminLTE Logo" class="brand-image opacity-75 shadow" />
      <span class="brand-text fw-light">UNIVERSITY</span>
    </a>
  </div>
  <div class="sidebar-wrapper">
    <nav class="mt-2">

      <!-- role for addmin -->
      @if(Auth::user()->role == "admin")
      <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="{{ route('home') }}" class="nav-link">
            <i class="nav-icon bi bi-person"></i>
            <p>Home</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('staff.index') }}" class="nav-link">
            <i class="nav-icon bi bi-people"></i>
            <p>{{ __("global.Staffs") }}</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-people"></i>
            <p>
              {{ __("student.stu") }}
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('student.index') }}" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>{{__("global.student List")}}</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('info-payment')}}" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>{{__("global.payment")}}</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('info-score')}}" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>{{__("global.score")}}</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('info-attendace')}}" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>{{__("global.attendance")}}</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="{{ route('cate.index') }}" class="nav-link">
            <i class="nav-icon bi bi-people"></i>
            <p>{{ __("global.category") }}</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('acc.index') }}" class="nav-link">
            <i class="nav-icon bi bi-people"></i>
            <p>{{ __("Account") }}</p>
          </a>
        </li>

      </ul>

      <!-- role for nomal user like student -->
      @elseif(Auth::user()->role == "user")
      <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="{{ route('home') }}" class="nav-link">
            <i class="nav-icon bi bi-person"></i>
            <p>Home</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('cate.index') }}" class="nav-link">
            <i class="nav-icon bi bi-people"></i>
            <p>{{ __("Chat") }}</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('staff.index') }}" class="nav-link">
            <i class="nav-icon bi bi-people"></i>
            <p>{{ __("Group") }}</p>
          </a>
        </li>
        <li class="position-absolute bottom-0"></li>
      </ul>

      <!-- role for staff and lecture -->
      @else
      <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="{{ route('home') }}" class="nav-link">
            <i class="nav-icon bi bi-person"></i>
            <p>Home</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('staff.index') }}" class="nav-link">
            <i class="nav-icon bi bi-people"></i>
            <p>{{ __("global.Staffs") }}</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon bi bi-people"></i>
            <p>
              {{ __("student.stu") }}
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('student.index') }}" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>{{__("global.student List")}}</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('info-payment')}}" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>{{__("global.payment")}}</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('info-score')}}" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>{{__("global.score")}}</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('info-attendace')}}" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>{{__("global.attendance")}}</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="{{ route('cate.index') }}" class="nav-link">
            <i class="nav-icon bi bi-people"></i>
            <p>{{ __("global.category") }}</p>
          </a>
        </li>
      </ul>
      @endif
    </nav>
  </div>
</aside>