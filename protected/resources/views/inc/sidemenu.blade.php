<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item has-treeview menu-open">
        <a href="#" class="nav-link active">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{url('/dashboard')}}" class="nav-link active">
              <i class="far fa-circle nav-icon"></i>
              <p>Dashboard v1</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/dashboard2')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Dashboard v2</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/dashboard3')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Dashboard v3</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="{{url('widgets')}}" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>
            Widgets
            <span class="right badge badge-danger">New</span>
          </p>
        </a>
      </li>
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-copy"></i>
          <p>
            Layout Options
            <i class="fas fa-angle-left right"></i>
            <span class="badge badge-info right">6</span>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{url('layout/top-nav')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Top Navigation</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('layout/boxed')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Boxed</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('layout/fixed-sidebar')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Fixed Sidebar</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('layout/fixed-topnav')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Fixed Navbar</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('layout/fixed-footer')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Fixed Footer</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('layout/collapsed-sidebar')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Collapsed Sidebar</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-chart-pie"></i>
          <p>
            Charts
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{url('charts/chartjs')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>ChartJS</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('charts/flot')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Flot</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('charts/inline')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Inline</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-tree"></i>
          <p>
            UI Elements
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{url('UI/general')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>General</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('UI/icons')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Icons</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('UI/buttons')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Buttons</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('UI/sliders')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Sliders</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('UI/modals')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Modals & Alerts</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('UI/navbar')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Navbar & Tabs</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('UI/timeline')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Timeline</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('UI/ribbons')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Ribbons</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-edit"></i>
          <p>
            Forms
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{url('forms/general')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>General Elements</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('forms/advanced')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Advanced Elements</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('forms/editors')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Editors</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-table"></i>
          <p>
            Tables
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{url('tables/simple')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Simple Tables</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('tables/data')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>DataTables</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('tables/jsgrid')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>jsGrid</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-header">EXAMPLES</li>
      <li class="nav-item">
        <a href="{{url('calendar')}}" class="nav-link">
          <i class="nav-icon far fa-calendar-alt"></i>
          <p>
            Calendar
            <span class="badge badge-info right">2</span>
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{url('/')}}/gallery" class="nav-link">
          <i class="nav-icon far fa-image"></i>
          <p>
            Gallery
          </p>
        </a>
      </li>
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon far fa-envelope"></i>
          <p>
            Mailbox
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{url('/')}}/mailbox/mailbox" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Inbox</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/')}}/mailbox/compose" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Compose</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/')}}/mailbox/read-mail" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Read</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-book"></i>
          <p>
            Pages
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{url('/')}}/examples/invoice" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Invoice</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/')}}/examples/profile" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Profile</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/')}}/examples/e_commerce" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>E-commerce</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/')}}/examples/projects" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Projects</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/')}}/examples/project_add" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Project Add</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/')}}/examples/project_edit" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Project Edit</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/')}}/examples/project_detail" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Project Detail</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/')}}/examples/contacts" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Contacts</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon far fa-plus-square"></i>
          <p>
            Extras
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{url('/')}}/examples/404" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Error 404</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/')}}/examples/500" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Error 500</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/')}}/examples/pace" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Pace</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/')}}/examples/blank" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Blank Page</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-header">MISCELLANEOUS</li>
      <li class="nav-item">
        <a href="https://adminlte.io/docs/3.0" class="nav-link">
          <i class="nav-icon fas fa-file"></i>
          <p>Documentation</p>
        </a>
      </li>
      <li class="nav-header">MULTI LEVEL EXAMPLE</li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="fas fa-circle nav-icon"></i>
          <p>Level 1</p>
        </a>
      </li>
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-circle"></i>
          <p>
            Level 1
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Level 2</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Level 2
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Level 3</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Level 3</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-dot-circle nav-icon"></i>
                  <p>Level 3</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Level 2</p>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="fas fa-circle nav-icon"></i>
          <p>Level 1</p>
        </a>
      </li>
      <li class="nav-header">LABELS</li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon far fa-circle text-danger"></i>
          <p class="text">Important</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon far fa-circle text-warning"></i>
          <p>Warning</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon far fa-circle text-info"></i>
          <p>Informational</p>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>