<nav class="sidebar">
    <div class="sidebar-header">
      <a href="#" class="sidebar-brand">
       Huzey<span>UI</span>
      </a>
      <div class="sidebar-toggler not-active">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="sidebar-body">
      <ul class="nav">
        <li class="nav-item nav-category">Main</li>
        <li class="nav-item">
          <a href="{{ route("admin.dashboard")  }}" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item nav-category">RealEstate</li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
            <i class="link-icon" data-feather="mail"></i>
            <span class="link-title">Property Type</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="emails">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{ route("all.type") }}" class="nav-link">All Type</a>
              </li>
              <li class="nav-item">
                <a href="pages/email/read.html" class="nav-link">Add Type</a>
              </li>
             
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#amenitie" role="button" aria-expanded="false" aria-controls="emails">
            <i class="link-icon" data-feather="mail"></i>
            <span class="link-title">Amenitie Type</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="amenitie">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{ route("all.amenetie") }}" class="nav-link">All Amenitie</a>
              </li>
              <li class="nav-item">
                <a href="pages/email/read.html" class="nav-link">Add Amenitie</a>
              </li>
             
            </ul>
          </div>
        </li>
       
        <li class="nav-item">
          <p class="nav-link">
            <i class="link-icon" data-feather="calendar"></i>
            <span class="link-title">Calendar</span>
          </p>
        </li>
        <li class="nav-item nav-category">Components</li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
            <i class="link-icon" data-feather="feather"></i>
            <span class="link-title">UI Kit</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="uiComponents">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <p class="nav-link">Accordion</p>
              </li>
              <li class="nav-item">
                <p href="" class="nav-link">Alerts</p>
              </li>
             
            </ul>
          </div>
        </li>
        <li class="nav-item nav-category">Role and Permission</li>

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#advancedUI" role="button" aria-expanded="false" aria-controls="advancedUI">
            <i class="link-icon" data-feather="anchor"></i>
            <span class="link-title">Role and Permission</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="advancedUI">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{ route('all.permission') }}" class="nav-link">All permission</a>
              </li>
              <li class="nav-item">
                <p  class="nav-link">Owl carousel</p>
              </li>
             
            </ul>
          </div>
        </li>
       
        </li>
     
       
       
       
      </ul>
    </div>
  </nav>
