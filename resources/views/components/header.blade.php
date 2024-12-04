<nav class="app-header navbar navbar-expand bg-body">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
          <i class="bi bi-list"></i>
        </a>
      </li>
    </ul>
    <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="bi bi-search"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-lte-toggle="fullscreen">
          <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
          <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none"></i>
        </a>
      </li>
      <li class="nav-item">
        <div class="dropdown">
          <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-translate"></i>
          </button>
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item" href="{{route('lang', ['locale'=>'kh'])}}">
                <img src="{{ asset('images/kh.png') }}" alt="flag" style="height: 20px; margin-right: 10px" />
                Khmer</a>
            </li>
            <li>
              <a class="dropdown-item" href="{{route('lang', ['locale'=>'en'])}}">
                <img src="{{ asset('images/en.png') }}" alt="flag"
                  style="height: 20px; margin-right: 10px" />English</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item dropdown user-menu rounded-4">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
          <img
            src="https://scontent.fpnh11-1.fna.fbcdn.net/v/t39.30808-6/459092623_977239814203498_1807362954359596105_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeHLjeKXIXHWQ5T6IPLLDqcZIvOyEUGnwwwi87IRQafDDEKQJ1hYzSpywbRfrj8v55cWDLoVw04FGRZJtLMt3pV_&_nc_ohc=Z81qxBjIdB8Q7kNvgFso4QO&_nc_zt=23&_nc_ht=scontent.fpnh11-1.fna&_nc_gid=AL1Ads5nZL8mdpoo3zlenWg&oh=00_AYCbzANfnZOns_LbQqIBsmkYByQrQwXE2CHKI_dCrS4epQ&oe=674C7D4B"
            class="user-image rounded-circle shadow" alt="User Image" />

          <span class="d-none d-md-inline">{{Auth::user()->name}}</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
          <!--begin::User Image-->
          <li class="user-header text-bg-primary">
            <img
              src="https://scontent.fpnh11-1.fna.fbcdn.net/v/t39.30808-6/459092623_977239814203498_1807362954359596105_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeHLjeKXIXHWQ5T6IPLLDqcZIvOyEUGnwwwi87IRQafDDEKQJ1hYzSpywbRfrj8v55cWDLoVw04FGRZJtLMt3pV_&_nc_ohc=Z81qxBjIdB8Q7kNvgFso4QO&_nc_zt=23&_nc_ht=scontent.fpnh11-1.fna&_nc_gid=AL1Ads5nZL8mdpoo3zlenWg&oh=00_AYCbzANfnZOns_LbQqIBsmkYByQrQwXE2CHKI_dCrS4epQ&oe=674C7D4B"
              class="rounded-circle shadow" alt="User Image" />
            <p>
              {{Auth::user()->name}} - Web Developer
              <small>Member since Nov. 2024</small>
            </p>
          </li>

          <li class="user-footer">
            <form action="{{ route('logout') }}" method="post">
              @csrf
              <button type="submit"
                class="btn btn-danger d-flex justify-content-center align-items-center gap-4 mb-2 w-100">
                <i class="nav-icon bi bi-box-arrow-left"></i>
                Logout
              </button>
            </form>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</nav>