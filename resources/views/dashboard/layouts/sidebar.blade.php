<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
  <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2 text-dark {{ request()->is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <svg class="bi">
              <use xlink:href="#house-fill" />
            </svg>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2 text-dark {{ Request::is('dashboard/posts*') ? 'active' :  ''}}" href="/dashboard/posts">
            <svg class="bi">
              <use xlink:href="#graph-up" />
            </svg>
            My Posts
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex align-items-center gap-2 text-dark {{ Request::is('dashboard/posts*') ? 'active' :  ''}}" href="/">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left">
              <line x1="19" y1="12" x2="5" y2="12"></line>
              <polyline points="12 19 5 12 12 5"></polyline>
            </svg>
            Kembali ke home
          </a>
        </li>
      </ul>
      <hr class="my-3">
      <ul class="nav flex-column mb-auto">
        <li class="nav-item">
          <form action="/logout" method="POST" class="nav-link d-flex align-items-center gap-2">
            @csrf
            <button type="submit" class="dropdown-item mr-1">
              <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                <polyline points="16 17 21 12 16 7"></polyline>
                <line x1="21" y1="12" x2="9" y2="12"></line>
              </svg>
              Logout
            </button>
          </form>
        </li>
      </ul>
      @can('admin')   
        <hr class="my-3">
        <h6 class="sidebar-header d-flex justify-content-between align-items-center px-3 mb-3 text-muted">
          <span>Administrator</span>
        </h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 text-dark {{ Request::is('dashboard/categories') ? 'active' :  ''}}" href="/dashboard/categories">
              <svg id="category-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width: 16px; height: 16px;">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
              </svg>
              Posts Category
            </a>
          </li>
        </ul>
      @endcan
    </div>
  </div>
</div>
