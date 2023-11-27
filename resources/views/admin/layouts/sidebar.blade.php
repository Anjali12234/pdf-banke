<!-- START SIDEBAR-->
<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="sidebar-scroll">
            <ul class="side-menu metismenu mt-5">
                <li>
                    <a class="active" href="{{ route('admin.dashboard') }}"><i
                            class="sidebar-item-icon fa fa-th-large"></i>
                        <span class="nav-label">{{ __("Dashboard") }}</span>
                    </a>
                </li>
                <li class="{{ request()->is('admin/settings/*') ? 'active' : '' }}">
                    <a href="javascript:;" area-expanded={{ request()->is('admin/settings/*') ? 'true' : 'false' }}>
                        <i class="sidebar-item-icon fa-solid fa-house"></i>
                        <span class="nav-label">{{ __("Office Details") }}</span><i class="fa fa-angle-left arrow"></i>
                    </a>
                    <ul class="nav-2-level collapse {{ request()->is('admin/settings/*') ? 'in' : '' }}"
                        area-expanded={{ request()->is('admin/settings/*') ? 'true' : 'false' }}>
                        <li>
                            <a href="{{ route('admin.officesetting.index') }}"> {{ __("Office Settings") }}</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.officeDetail.index') }}">{{ __("Office Details") }}</a>
                        </li>
                    </ul>
                </li>

                <li class="{{ request()->is('admin/sliders/*') ? 'active' : '' }}">
                    <a href="{{ route('admin.slider.index') }}"><i class="sidebar-item-icon fa fa-map"></i>
                        <span class="nav-label">{{ __("Slider") }}</span>
                    </a>
                </li>

                <li class="{{ request()->is('admin/employees/*') ? 'active' : '' }}">
                    <a href="javascript:;"><i class=" sidebar-item-icon fa-solid fa-user"></i>
                        <span class="nav-label">{{ __("Employee Details") }}</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="{{ route('admin.department.index') }}">{{ __("Department") }}</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.designation.index') }}"> {{ __("Designation") }} </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.employee.index') }}"> {{ __("Employees") }} </a>
                        </li>
                    </ul>
                </li>
                <li class="{{ request()->is('admin/documents/*') ? 'active' : '' }}">
                    <a href="javascript:;"><i class="sidebar-item-icon fa fa-file-text"></i>
                        <span class="nav-label">{{ __("Legal Documents") }}</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="{{ route('admin.documentCategory.index') }}"> {{ __("Add Category") }}</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.documentList.index') }}"> {{ __("Legal Document List") }}</a>
                        </li>

                    </ul>
                </li>
                <li class="{{ request()->is('admin/news/*') ? 'active' : '' }}">
                    <a href="javascript:;"><i class="sidebar-item-icon fa fa-file-text"></i>
                        <span class="nav-label">{{ __("News/Notices") }}</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="{{ route('admin.newsCategory.index') }}"> {{ __("Add Category") }}</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.newsList.index') }}"> {{ __("News/Notice Lists") }}</a>
                        </li>

                    </ul>
                </li>
                <li class="{{ request()->is('admin/farmers/*') ? 'active' : '' }}">
                    <a href="javascript:;"><i class="sidebar-item-icon fa fa-file-text"></i>
                        <span class="nav-label">{{ __("Farmer Information Centre") }}</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="{{ route('admin.farmerCategory.index') }}"> {{ __("Add Category") }}</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.farmerList.index') }}"> {{ __("Farmer Information Centre Lists") }}</a>
                        </li>

                    </ul>
                </li>
                <li class="{{ request()->is('admin/downloads/*') ? 'active' : '' }}">
                    <a href="javascript:;"><i class="sidebar-item-icon fa fa-file-text"></i>
                        <span class="nav-label">{{ __("Downloads") }}</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="{{ route('admin.downloadCategory.index') }}"> {{ __("Add Category") }}</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.downloadList.index') }}"> {{ __("Download List") }}</a>
                        </li>

                    </ul>
                </li>

                <li class="{{ request()->is('admin/gallery/*') ? 'active' : '' }}">
                    <a href="javascript:;"><i class="sidebar-item-icon fa-solid fa-image"></i>
                        <span class="nav-label">{{ __("Gallery") }}</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="{{ route('admin.photo.index') }}">{{ __("Photo Gallery") }}</a>
                        </li>
                     
                    </ul>
                </li>

                <li class="{{ request()->is('admin/faq/*') ? 'active' : '' }}">
                    <a href="{{ route('admin.faq.index') }}"><i class="sidebar-item-icon fa-solid fa-list"></i>
                        <span class="nav-label">{{ __("Frequently Asked Questions") }}</span>
                    </a>
                </li>
                <li class="{{ request()->is('admin/link/*') ? 'active' : '' }}">

                    <a href="{{ route('admin.link.index') }}"><i class="sidebar-item-icon fa-solid fa-link"></i>
                        <span class="nav-label">{{ __("Links") }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.contactMessage.index') }}"><i
                            class="sidebar-item-icon fa-solid fa-message"></i>
                        <span class="nav-label">{{ __("Contact Messages") }}</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:;"><i class="sidebar-item-icon fa-solid fa-gear"></i>
                        <span class="nav-label">{{ __("Settings") }}</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="#"> {{ __("Menu") }}</a>
                        </li>
                        <li>
                            <a href="#"> {{ __("Color") }}</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
@push('script')
    <script>
        // JavaScript to handle the toggle button for the sidebar
        function toggleSidebar() {
            const sidebar = document.getElementById("sidebar");
            sidebar.classList.toggle("show");
        }
    </script>
@endpush
