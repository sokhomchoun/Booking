<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ '/dashboard' }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Hotel</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
              <a href="{{ '/addhotel' }}"><i class="bi bi-circle"></i><span>Added Hotel</span></a>
          </li>

        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#category" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Category</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="category" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
              <a href="{{ '/addcategory' }}"><i class="bi bi-circle"></i><span>Added Category</span></a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#cambodia" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Cambodia</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="cambodia" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
              <a href="{{ '/addcambodia' }}"><i class="bi bi-circle"></i><span>Added Cambodia</span></a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#province" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Province</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="province" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
              <a href="{{ '/addprovince' }}"><i class="bi bi-circle"></i><span>Added Province</span></a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#room" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Room</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="room" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
              <a href="{{ '/addroom' }}"><i class="bi bi-circle"></i><span>Added Room</span></a>
              <a href="{{ '/roomtype' }}"><i class="bi bi-circle"></i><span>Added RoomType</span></a>
          </li>
        </ul>
      </li>



    </ul>

  </aside>