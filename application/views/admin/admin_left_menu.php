<aside class="side-nav" id="show-side-navigation1">
    <i class="fa fa-bars close-aside hidden-sm hidden-md hidden-lg" data-close="show-side-navigation1"></i>
    <div class="heading">
        <img src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148907008/medium/1501685726/enhance" alt="">
        <div class="info">
            <h3><a href="#">Mostafa Omar</a></h3>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
        </div>
    </div>
    <div class="search">
        <input type="text" placeholder="Type here"><i class="fa fa-search"></i>
    </div>
    <ul class="categories">

        <li><i class="fa fa-home fa-fw"></i><a href="<?php echo base_url('Admin/profile') ?>">All news</a></li>

        <li><i class="fa fa-support fa-fw"></i><a href="<?php echo base_url('Admin/addNews') ?>">Add News</a></li>
        <li><i class="fa fa-support fa-fw"></i><a href="<?php echo base_url('Admin/adminContact') ?>">Admin contact</a></li>

        <li><i class="fa fa-support fa-fw"></i><a href="#"> Subscribe us</a>
            <ul class="side-nav-dropdown">
                <li><a href="#">Lorem ipsum</a></li>
                <li><a href="#">ipsum dolor</a></li>
                <li><a href="#">dolor ipsum</a></li>
                <li><a href="#">amet consectetur</a></li>
                <li><a href="#">ipsum dolor sit</a></li>
            </ul>
        </li>



    </ul>
</aside>
<section id="contents">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <i class="fa fa-align-right"></i>
                </button>
                <a class="navbar-brand" href="#">my<span class="main-color">Dashboard</span></a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My profile <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="fa fa-user-o fw"></i> My account</a></li>
                            <li><a href="#"><i class="fa fa-envelope-o fw"></i> My inbox</a></li>
                            <li><a href="#"><i class="fa fa-question-circle-o fw"></i> Help</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="fa fa-sign-out"></i> Log out</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-comments"></i><span>23</span></a></li>
                    <li><a href="#"><i class="fa fa-bell-o"></i><span>98</span></a></li>
                    <li><a href="#"><i data-show="show-side-navigation1" class="fa fa-bars show-side-btn"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>



