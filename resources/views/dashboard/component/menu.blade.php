<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      {{-- <li class="nav-item">
        <a class="nav-link " href="{{ '/dashboard' }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li> --}}

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Properties</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
              <a href="{{ '/addhotel' }}"><i class="bi bi-circle"></i><span>Add Property</span></a>
          </li>

        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#category" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Categories</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="category" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
              <a href="{{ '/addcategory' }}"><i class="bi bi-circle"></i><span>Add Category</span></a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#cambodia" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Provinces</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="cambodia" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
              <a href="{{ '/addcambodia' }}"><i class="bi bi-circle"></i><span>Add Province</span></a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#province" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Locations</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="province" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
              <a href="{{ '/addprovince' }}"><i class="bi bi-circle"></i><span>Add Location</span></a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#room" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Rooms</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="room" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
              <a href="{{ '/addroom' }}"><i class="bi bi-circle"></i><span>Add Room</span></a>
              <a href="{{ '/roomtype' }}"><i class="bi bi-circle"></i><span>Add RoomType</span></a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#booing" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Bookings</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="booing" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
              <a href="{{ '/booking' }}"><i class="bi bi-circle"></i><span>View Booking</span></a>
          </li>
        </ul>
      </li>



    </ul>

  </aside>