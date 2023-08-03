<!-- START SIDEBAR-->
<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="sidebar-scroll">
            <ul class="side-menu metismenu mt-5">
                <li>
                    <a class="active" href="{{ route('admin.dashboard') }}"><i
                            class="sidebar-item-icon fa fa-th-large"></i>
                        <span class="nav-label">Dashboard</span>
                    </a>
                </li>
                <li class="{{ request()->is('admin/settings/*') ? 'active' : '' }}">
                    <a href="javascript:;" area-expanded={{ request()->is('admin/settings/*') ? 'true' : 'false' }}>
                        <i class="sidebar-item-icon fa-solid fa-house"></i>
                        <span class="nav-label">कार्यालय विवरण</span><i class="fa fa-angle-left arrow"></i>
                    </a>
                    <ul class="nav-2-level collapse {{ request()->is('admin/settings/*') ? 'in' : '' }}"
                        area-expanded={{ request()->is('admin/settings/*') ? 'true' : 'false' }}>
                        <li>
                            <a href="{{ route('admin.officesetting.index') }}"> कार्यालय सेटिंग</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.officeDetail.index') }}">कार्यालय विवरण</a>
                        </li>

                    </ul>
                </li>

                <li class="{{ request()->is('admin/sliders/*') ? 'active' : '' }}">
                    <a href="{{ route('admin.slider.index') }}"><i class="sidebar-item-icon fa fa-map"></i>
                        <span class="nav-label">स्लाइडर</span>
                    </a>
                </li>

                <li class="{{ request()->is('admin/employees/*') ? 'active' : '' }}">
                    <a href="javascript:;"><i class=" sidebar-item-icon fa-solid fa-user"></i>
                        <span class="nav-label">कर्मचारी विवरण</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="{{ route('admin.department.index') }}">समुह</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.designation.index') }}"> पद </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.employee.index') }}"> कर्मचारीहरु </a>
                        </li>
                    </ul>
                </li>
                <li class="{{ request()->is('admin/documents/*') ? 'active' : '' }}">
                    <a href="javascript:;"><i class="sidebar-item-icon fa fa-file-text"></i>
                        <span class="nav-label">कानूनी दस्तावेज</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="{{ route('admin.documentCategory.index') }}"> वर्ग थप्नुहोस</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.documentList.index') }}"> कानूनी दस्तावेज लिस्ट</a>
                        </li>

                    </ul>
                </li>
                <li class="{{ request()->is('admin/news/*') ? 'active' : '' }}">
                    <a href="javascript:;"><i class="sidebar-item-icon fa fa-file-text"></i>
                        <span class="nav-label">सुचना/ समाचार</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="{{ route('admin.newsCategory.index') }}"> वर्ग थप्नुहोस</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.newsList.index') }}"> सुचना/ समाचार लिस्ट</a>
                        </li>

                    </ul>
                </li>
                <li class="{{ request()->is('admin/farmers/*') ? 'active' : '' }}">
                    <a href="javascript:;"><i class="sidebar-item-icon fa fa-file-text"></i>
                        <span class="nav-label">किसान सूचना केन्द्र</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="{{ route('admin.farmerCategory.index') }}"> वर्ग थप्नुहोस</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.farmerList.index') }}"> किसान सूचना केन्द्र लिस्ट</a>
                        </li>

                    </ul>
                </li>
                <li class="{{ request()->is('admin/downloads/*') ? 'active' : '' }}">
                    <a href="javascript:;"><i class="sidebar-item-icon fa fa-file-text"></i>
                        <span class="nav-label">डाउनलोड</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="{{ route('admin.downloadCategory.index') }}"> वर्ग थप्नुहोस</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.downloadList.index') }}"> डाउनलोड लिस्ट</a>
                        </li>

                    </ul>
                </li>

                <li class="{{ request()->is('admin/gallery/*') ? 'active' : '' }}">
                    <a href="javascript:;"><i class="sidebar-item-icon fa-solid fa-image"></i>
                        <span class="nav-label">ग्यालरी</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="{{ route('admin.photo.index') }}">फोटो ग्यालरी</a>
                        </li>
                     
                    </ul>
                </li>

                <li class="{{ request()->is('admin/faq/*') ? 'active' : '' }}">
                    <a href="{{ route('admin.faq.index') }}"><i class="sidebar-item-icon fa-solid fa-list"></i>
                        <span class="nav-label">धेरै सोधिएको प्रस्नहरु</span>
                    </a>
                </li>
                <li class="{{ request()->is('admin/link/*') ? 'active' : '' }}">

                    <a href="{{ route('admin.link.index') }}"><i class="sidebar-item-icon fa-solid fa-link"></i>
                        <span class="nav-label">लिङ्कहरू</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.contactMessage.index') }}"><i
                            class="sidebar-item-icon fa-solid fa-message"></i>
                        <span class="nav-label">सम्पर्क सन्देशहरू</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:;"><i class="sidebar-item-icon fa-solid fa-gear"></i>
                        <span class="nav-label">सेटअप</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="#"> मेनु</a>
                        </li>
                        <li>
                            <a href="#"> रंग</a>
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
