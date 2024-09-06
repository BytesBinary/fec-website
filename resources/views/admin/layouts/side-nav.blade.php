<div class="admin-side-nav">
    <div class="offcanvas offcanvas-start sidebar-nav bg-dark" tabindex="-1" id="sidebar">
        <div class="offcanvas-body p-0">
            <nav class="navbar-dark">
                <ul class="navbar-nav">
                    <li>
                        <div class="small fw-bold text-white text-uppercase px-3">
                            Panel
                        </div>
                    </li>
                    <li>
                        <a href="{{route('admin.dashboard')}}" class="nav-link px-3 active">
                            <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="my-4">
                        <hr class="dropdown-divider bg-light" />
                    </li>
                    <li>
                        <div class="small fw-bold text-white text-uppercase px-3 mb-3">
                            Interface
                        </div>
                    </li>

                    <!--- Notice goes here -->

                    <li>
                        <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#notice">
                            <span class="me-2"><i class="bi bi-file-earmark-fill"></i></span>
                            <span>Pages</span>
                            <span class="ms-auto">
                                <span class="right-icon">
                                    <i class="bi bi-chevron-down"></i>
                                </span>
                            </span>
                        </a>
                        <div class="collapse" id="notice">
                            <ul class="navbar-nav ps-3">
                                <li>
                                    <a href="{{route('admin.pages')}}" class="nav-link px-3">
                                        <span class="me-2"><i class="bi bi-cloud-arrow-up-fill"></i></span>
                                        <span>All Pages</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="collapse" id="notice">
                            <ul class="navbar-nav ps-3">
                                <li>
                                    <a href="" class="nav-link px-3">
                                        <span class="me-2"><i class="bi bi-pencil-square"></i></span>
                                        <span>Add New Page</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="my-4">
                        <hr class="dropdown-divider bg-light" />
                    </li>
                    <li>
                        <div class="small text-white fw-bold text-uppercase px-3 mb-3">
                            Others
                        </div>
                    </li>
                    <li>
                        <a href="{{url('/admin/editpassword')}}" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-pen-fill"></i></span>
                            <span>Edit Password</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}" class="nav-link px-3">
                            <span class="me-2"><i class="bi bi-box-arrow-left"></i></span>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
