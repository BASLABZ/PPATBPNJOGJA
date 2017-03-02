  <header class="main-header">
    <a href="index2.html" class="logo">
      <span class="logo-mini"><b>PP</b>AT</span>
      <span class="logo-lg"><b>PP</b>AT</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../logobpn.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['namalengkap']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="../logobpn.png" class="img-circle" alt="User Image">
                <p><?php echo $_SESSION['namalengkap']; ?> - <?php echo $_SESSION['level']; ?></p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="index.php?hal=setting" class="btn btn-primary ">User Profil</a>
                </div>
                <div class="pull-right">
                  <a href="index.php?logout=1" class="btn btn-danger ">Keluar</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>