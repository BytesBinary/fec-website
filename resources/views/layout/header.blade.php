<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="#" class="logo d-flex align-items-center me-auto">
            <img src="{{asset('assets/img/logo.png')}}" alt="">
            <h1 class="sitename">FEC</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{route('home')}}" class="{{ is_active_route('home') }}">Home</a></li>
                <li><a href="">Notices</a></li>
                <li class="dropdown"><a href="#"><span>About College</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                            <li><a href="#">At a glance</a></li>
                            <li><a href="#">Vision & Mission </a></li>
                            <li><a href="#">Infrastructure</a></li>
                            <li><a href="#">Message From Principal</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Academic</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Syllabus</a></li>
                        <li><a href="#">Semester Plan</a></li>
                        <li><a href="#">Login</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Departments</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Computer Science & Engineering</a></li>
                        <li><a href="#">Electrical & Electronic Engineering</a></li>
                        <li><a href="#">Civil Engineering</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Clubs</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">RIC-Research & Innovation Center</a></li>
                        <li><a href="#">FECCDC-Cyber Defense Club</a></li>
                        <li><a href="#">FECDC-Debating Club</a></li>
                        <li><a href="#">FECSA-Sports Association</a></li>
                        <li><a href="#">FECPC-Photographic Club</a></li>
                        <li><a href="#">FECCP-Club of Profession</a></li>
                        <li><a href="#">FECPC-Programming Club</a></li>
                        <li><a href="#">FECIRDC-Islamic Research & Dawah Center</a></li>
                        <li><a href="#">FECRSG-Rover Scout Group</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Admission</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Admission Information</a></li>
                        <li><a href="#">Admission Test Result</a></li>
                        <li><a href="https://collegeadmission.eis.du.ac.bd/bn/b45de047fde9788cadae3cfe8e88dcc2" target="_blank">Apply Online</a></li>
                    </ul>
                </li>
                <li class=" ">
                    <a class="nav-link disabled" aria-disabled="true" style="color: rgba(93, 90, 90, 0.729)">Research</a>
                  </li>
                  <li><a href="" class=" ">Notices</a></li>
                  <li><a href="" class=" ">Contact Us</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>



    </div>
</header>
