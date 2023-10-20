<header class="main-header">
    <a href="#" class="logo">
        <span class="logo-mini">T<b>M</b></span>
        <span class="logo-lg"><b>Pranala</b></span>
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="assets/dist/img/avatar.png" class="user-image" alt="User Image">
                        <span class="hidden-xs">Pranala</span>
                    </a>
                    <!-- <ul class="dropdown-menu">
                        <li class="user-header">
                            <img src="assets/dist/img/avatar.png" class="img-circle" alt="User Image">
                            <p>Pranala</p>
                        </li>
                        <li class="user-footer">
                            <div class="pull-right">
                            <a href="proses/login.php?logout" class="btn btn-default btn-flat">Logout</a>
                            </div>
                        </li>
                    </ul> -->
                </li>
            </ul>
        </div>
    </nav>
</header>
<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="assets/dist/img/avatar.png" class="img-circle" alt="User Image">
            </div>
            <div class="Pranala-left info">
                <p>Pranala</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MENU</li>
            <li <?php echo menu_active('index') ?>><a href="index.php"><i class="fa fa-dashboard"></i> <span>Soal 1</span></a></li>
            <!-- <li <?php echo menu_active('soal2') ?>><a href="soal2.php"><i class="fa fa-dashboard"></i> <span>Soal 2</span></a></li>
            <li <?php echo menu_active('soal3') ?>><a href="soal3.php"><i class="fa fa-dashboard"></i> <span>Soal 3</span></a></li> -->
        </ul>
    </section>
</aside>