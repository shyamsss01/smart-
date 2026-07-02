<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link collapsed" href="<?php echo base_url() ?>doctor/today_appointment">
        <i class="bi bi-grid"></i>
        <span>Today's Appointments</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="<?php echo base_url() ?>doctor/mr_list">
        <i class="bi bi-grid"></i>
        <span>MR List</span>
      </a>
    </li>

    <?php if ($this->session->userdata('username') == 'pvn2266@gmail.com'): ?>
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url() ?>Admin/mr_list">
          <i class="bi bi-grid"></i>
          <span>All MR Profile</span>
        </a>
      </li>
        <?php endif; ?>

    <li class="nav-item">
      <a class="nav-link collapsed" href="<?php echo base_url() ?>doctor/admin_setting">
        <i class="bi bi-grid"></i>
        <span>Settings</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="<?php echo base_url() ?>doctor/my_profile">
        <i class="bi bi-grid"></i>
        <span>My Profile</span>
      </a>
    </li>




    <li class="nav-item">
      <a class="nav-link collapsed" href="<?php echo base_url() ?>doctor/logout">
        <i class="bi bi-grid"></i>
        <span>Logout</span>
      </a>
    </li>


  </ul>

</aside>