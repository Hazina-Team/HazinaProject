<nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
            <li>
              <form class="form-inline mr-auto">
                <div class="search-element">
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                  <button class="btn" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </form>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
              class="nav-link nav-link-lg message-toggle"><i data-feather="mail"></i>
               </a>
            
          </li>
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
              class="nav-link notification-toggle nav-link-lg"><i data-feather="bell" class="bell"></i>
            </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
              <div class="dropdown-header">
                Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread"> <span
                    class="dropdown-item-icon bg-primary text-white"> <i class="fas
												fa-code"></i>
                  </span> <span class="dropdown-item-desc"> Template update is
                    available now! <span class="time">2 Min
                      Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white"> <i class="far
												fa-user"></i>
                  </span> <span class="dropdown-item-desc"> <b>You</b> and <b>Dedik
                      Sugiharto</b> are now friends <span class="time">10 Hours
                      Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-success text-white"> <i
                      class="fas
												fa-check"></i>
                  </span> <span class="dropdown-item-desc"> <b>Kusnaedi</b> has
                    moved task <b>Fix bug header</b> to <b>Done</b> <span class="time">12
                      Hours
                      Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-danger text-white"> <i
                      class="fas fa-exclamation-triangle"></i>
                  </span> <span class="dropdown-item-desc"> Low disk space. Let's
                    clean it! <span class="time">17 Hours Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white"> <i class="fas
												fa-bell"></i>
                  </span> <span class="dropdown-item-desc"> Welcome to Otika
                    template! <span class="time">Yesterday</span>
                  </span>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="{{ url('public/assets/img/hazinalogo.png')}}"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hello Sarah Smith</div>
              <a href="profile.html" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Profile
              </a> <a href="timeline.html" class="dropdown-item has-icon"> <i class="fas fa-bolt"></i>
                Activities
              </a> <a href="#" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="{{  url('logout')}}" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>

      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="{{ url('public/assets/img/hazinalogo.png')}}" class="header-logo" /> <span
                class="logo-name" style="font-size: 9px;">OFISI YA MSAJILI WA HAZINA</span>
            </a>
          </div>
          <ul class="sidebar-menu">
          @if(Auth::user()->user_type == 1)
            <li class="menu-header">Main</li>
            <li class="dropdown active">
              <a href="{{  url('admin/dashboard')}}" class="nav-link @if(Request::segment(2) == 'dashboard')  active @endif"><i data-feather="monitor"></i><span>Dashibodi</span></a>
            </li>
            

            <li class="menu-header">Pages</li>
            <li class="dropdown">
              <a href="{{  url('admin/dashboard')}}" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="user-check"></i><span>Watumiaji</span></a>
              <ul class="dropdown-menu">
                <li><a href="{{  url('admin/admin/list')}}" class="nav-link @if(Request::segment(2) == 'mashirika')  active @endif">Admin</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="{{  url('admin/sheria')}}" class="nav-link @if(Request::segment(2) == 'sheria')  active @endif"><i class="fas fa-gavel"></i><span>Sheria</span></a>
            </li>
            <li class="dropdown">
              <a href="{{  url('admin/sera')}}" class="nav-link @if(Request::segment(2) == 'sera')  active @endif"><i data-feather="shield"></i><span>Sera</span></a>
            </li>
            <li class="dropdown">
              <a href="{{  url('admin/kanuni')}}" class="nav-link @if(Request::segment(2) == 'kanuni')  active @endif"><i data-feather="file-text"></i><span>Kanuni</span></a>
            </li>
            <li class="dropdown">
              <a href="{{  url('admin/miongozo')}}" class="nav-link @if(Request::segment(2) == 'miongozo')  active @endif"><i data-feather="briefcase"></i><span>Miongozo</span></a>
            </li>
            <li class="dropdown">
              <a href="{{  url('admin/report')}}" class="nav-link @if(Request::segment(2) == 'report')  active @endif"><i data-feather="file-text"></i><span>Ripoti</span></a>
            </li>

            <li class="dropdown">
              <a href="{{  url('admin/mashirika')}}" class="nav-link @if(Request::segment(2) == 'mashirika')  active @endif"><i data-feather="shield"></i><span>Taasisi za Umma</span></a>
            </li>
           
            @endif
          </ul>
        </aside>
      </div>