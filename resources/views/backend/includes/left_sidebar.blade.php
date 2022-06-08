
    <div class="br-logo"><a href="{{ url('admin/dashboard') }}">
      <img src="{{ asset('/frontend/') }}/assets/img/logo.png" alt="img" style="height: 55px;">
      {{-- <span>[</span><i>DivineLook</i><span>]</span>BD</a> --}}
    </div>
    <div class="br-sideleft sideleft-scrollbar">
      <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Navigation</label>
      <ul class="br-sideleft-menu">
        <li class="br-menu-item">
          <a href="{{ url('admin/dashboard') }}" class="br-menu-link {{ Request::is('admin/dashboard') ? 'active' : ''}}">
            <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
            <span class="menu-item-label">Dashboard</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->

        <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Manage Users</label>

        {{-- user --}}
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub {{ Request::is('admin/user*') ? 'show-sub' : ''}}">
            <i class="menu-item-icon icon ion-person-stalker tx-24"></i>
            {{-- <i class="menu-item-icon fa fa-star tx-16"></i> --}}
            <span class="menu-item-label">Users</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub" style="{{ Request::is('admin/user*') ? 'display: block;' : 'display: none;'}}">

            <li class="sub-item">
              <a href="{{ url('admin/user/index') }}" class="sub-link {{ Request::is('admin/user/index') ? 'active' : ''}}">Manage</a>
            </li>
          </ul>
        </li>


        <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Manage Lessons</label>

          {{-- lesson --}}
          <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub {{ Request::is('admin/lesson*') ? 'show-sub' : ''}}">
              <i class="menu-item-icon icon ion-play tx-24"></i>
              {{-- <i class="menu-item-icon fa fa-star tx-16"></i> --}}
              <span class="menu-item-label">Lessons</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub" style="{{ Request::is('admin/lesson*') ? 'display: block;' : 'display: none;'}}">
              <li class="sub-item">
                <a href="{{ url('admin/lesson/index') }}" class="sub-link {{ Request::is('admin/lesson/index') ? 'active' : ''}}">Manage</a>
              </li>
              <li class="sub-item">
                <a href="{{ url('admin/lesson/create') }}" class="sub-link {{ Request::is('admin/lesson/create') ? 'active' : ''}}">Add</a>
              </li>
            </ul>
          </li>


        <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Manage Quizes</label>

          {{-- topic --}}
          <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub {{ Request::is('admin/topic*') ? 'show-sub' : ''}}">
              <i class="menu-item-icon icon ion-pound tx-24"></i>
              {{-- <i class="menu-item-icon fa fa-star tx-16"></i> --}}
              <span class="menu-item-label">Topic</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub" style="{{ Request::is('admin/topic*') ? 'display: block;' : 'display: none;'}}">
              <li class="sub-item">
                <a href="{{ url('admin/topic/index') }}" class="sub-link {{ Request::is('admin/topic/index') ? 'active' : ''}}">Manage</a>
              </li>
              <li class="sub-item">
                <a href="{{ url('admin/topic/create') }}" class="sub-link {{ Request::is('admin/topic/create') ? 'active' : ''}}">Add</a>
              </li>
            </ul>
          </li>

          {{-- brand --}}
          <li class="br-menu-item">
            <a href="#" class="br-menu-link with-sub {{ Request::is('admin/brand*') ? 'show-sub' : ''}}">
              <i class="menu-item-icon icon ion-help tx-24"></i>
              {{-- <i class="menu-item-icon fa fa-star tx-16"></i> --}}
              <span class="menu-item-label">Faq</span>
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub" style="{{ Request::is('admin/brand*') ? 'display: block;' : 'display: none;'}}">

              <li class="sub-item">
                <a href="{{ url('admin/brand/index') }}" class="sub-link {{ Request::is('admin/brand/index') ? 'active' : ''}}">Manage</a>
              </li>
              <li class="sub-item">
                <a href="{{ url('admin/brand/create') }}" class="sub-link {{ Request::is('admin/brand/create') ? 'active' : ''}}">Add</a>
              </li>
            </ul>
          </li>
          <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Manage Subscriptions</label>
          <li class="br-menu-item">
              <a href="#" class="br-menu-link with-sub {{ Request::is('admin/subscription*') ? 'show-sub' : ''}}">
                  <i class="menu-item-icon icon ion-ios-cart-outline tx-24"></i>
                  {{-- <i class="menu-item-icon fa fa-star tx-16"></i> --}}
                  <span class="menu-item-label">Subscriptions</span>
              </a><!-- br-menu-link -->
              <ul class="br-menu-sub" style="{{ Request::is('admin/order*') ? 'display: block;' : 'display: none;'}}">
                  <li class="sub-item">
                      <a href="{{ url('admin/subscription/index') }}" class="sub-link {{ Request::is('admin/subscription/index') ? 'active' : ''}}">Manage</a>
                  </li>
                  <li class="sub-item">
                      <a href="{{ url('admin/subscription/create') }}" class="sub-link {{ Request::is('admin/subscription/add') ? 'active' : ''}}">Add</a>
                  </li>
              </ul>
          </li>

          <li class="br-menu-item">
              <a href="#" class="br-menu-link with-sub {{ Request::is('admin/subscription*') ? 'show-sub' : ''}}">
                  <i class="menu-item-icon icon ion-person-stalker tx-24"></i>
                  {{-- <i class="menu-item-icon fa fa-star tx-16"></i> --}}
                  <span class="menu-item-label">Subscription Users</span>
              </a><!-- br-menu-link -->
              <ul class="br-menu-sub" style="{{ Request::is('admin/order*') ? 'display: block;' : 'display: none;'}}">
                  <li class="sub-item">
                      <a href="{{ url('admin/subscription/user') }}" class="sub-link {{ Request::is('admin/subscription/user') ? 'active' : ''}}">Subscription Users</a>
                  </li>
              </ul>
          </li>

          <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Settings</label>
          <li class="br-menu-item">
              <a href="#" class="br-menu-link with-sub {{ Request::is('admin/settings*') ? 'show-sub' : ''}}">
                  <i class="menu-item-icon icon ion-ios-cart-outline tx-24"></i>
                  {{-- <i class="menu-item-icon fa fa-star tx-16"></i> --}}
                  <span class="menu-item-label">Settings</span>
              </a><!-- br-menu-link -->
              <ul class="br-menu-sub" style="{{ Request::is('admin/order*') ? 'display: block;' : 'display: none;'}}">
                  <li class="sub-item">
                      <a href="{{ url('admin/settings/index') }}" class="sub-link {{ Request::is('admin/settings/index') ? 'active' : ''}}">Manage</a>
                  </li>
              </ul>
          </li>

      </ul><!-- br-sideleft-menu -->
      <br>
    </div><!-- br-sideleft -->
