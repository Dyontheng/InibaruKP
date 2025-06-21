<header class="main-nav">
    <div class="sidebar-user text-center">
        <a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img
            class="img-90 rounded-circle" src="{{ asset('assets/images/dashboard/1.png') }}" alt="" />
        <a href="user-profile">
            <h6 class="mt-3 f-14 f-w-600">{{ Auth::user()->name }}</h6>
        </a>
        <p class="mb-0 font-roboto">
            @if ($user->role === 'admin')
            Admin
            @endif
        
            @if ($user->role === 'DirekturITdept')
            Direktur IT Dept
            @endif

            @if ($user->role === 'ManagerITdept')
            Manager IT Dept
            @endif

            @if ($user->role === 'StaffITdept')
            Staff IT Dept
            @endif

            @if ($user->role === 'Direkturlegaldept')
            Direktur Legal Dept
            @endif

            @if ($user->role === 'Managerlegaldept')
            Manager Legal Dept
            @endif

            @if ($user->role === 'Stafflegaldept')
            Staff Legal Dept
            @endif

            @if ($user->role === 'Direkturhrdept')
            Direktur HRdept
            @endif

            @if ($user->role === 'Managerhrdept')
            Manager HRdept
            @endif

            @if ($user->role === 'Staffhrdept')
            Staff HRdept
            @endif

            @if ($user->role === 'Direkturexportdept')
            Direktur Export dept
            @endif

            @if ($user->role === 'Managerexportdept')
            Manager Export dept
            @endif

            @if ($user->role === 'Staffexportdept')
            Staff Export dept
            @endif

            @if ($user->role === 'Direkturpurchdept')
            Direktur Purch dept
            @endif

            @if ($user->role === 'Managerpurchdept')
            Manager Purch dept
            @endif

            @if ($user->role === 'Staffpurchdept')
            Staff Purch dept
            @endif

            @if ($user->role === 'Direkturfinancedept')
            Direktur Finance dept
            @endif

            @if ($user->role === 'Managerfinancedept')
            Manager Finance dept
            @endif

            @if ($user->role === 'Stafffinancedept')
            Staff Finance dept
            @endif

            @if ($user->role === 'operator')
            Operator
            @endif
        </p>
    </div>
    <nav>
        @if ($user->role === 'admin')
            <div class="main-navbar">
                <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                <div id="mainnav">
                    <ul class="nav-menu custom-scrollbar">
                        <li class="back-btn">
                            <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                    aria-hidden="true"></i></div>
                        </li>
                        <li class="sidebar-main-title">
                            <div>
                                <h6>General</h6>
                            </div>
                        </li>
                        <li class="nav-item active mb-2">
                            <a class="nav-link" href="/dashboard">Dashboard Legal</a>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title"><span>Legal Reporting</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/dokumenExpiredAdmin">Document Expired</a></li>
                            </ul>
                        <li class="dropdown">
                            <a class="nav-link menu-title"><span>Case Transaction</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/casesAdmin">Cases</a></li>
                                <li><a href="/casesTypeAdmin">Cases Type</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title"></i><span>Document Master</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/dokumenAdmin">Document</a></li>
                                <li><a href="/dokumenTypeAdmin">Dokumen Type</a></li>
                                {{-- <li><a href="/siteLocationAdmin">Site Location</a></li> --}}
                            </ul>

                        </li>
                        <li class="nav-item active mb-2">
                            <a class="nav-link" href="/loginHistory">Login History</a>
                        </li>
                    </ul>
                </div>
                <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
        @endif

        @if ($user->role === 'DirekturITdept')
            <div class="main-navbar">
                <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                <div id="mainnav">
                    <ul class="nav-menu custom-scrollbar">
                        <li class="back-btn">
                            <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                    aria-hidden="true"></i></div>
                        </li>
                        <li class="sidebar-main-title">
                            <div>
                                <h6>General</h6>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title"><span>Legal Reporting</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/dokumenExpiredDirekturIT" class="fas fa-archive">Document Expired</a></li>
                            </ul>
                        <li class="dropdown">
                            <a class="nav-link menu-title"><span>Case Transaction</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/casesDirekturITDept" class="fas fa-archive">Cases</a></li>
                                <li><a href="/casesTypeDirekturIT" class="fas fa-archive">Cases Type</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title"></i><span>Document Master</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/dokumenDirekturIT" class="fas fa-archive">Document</a></li>
                                <li><a href="/TypedirekturIT" class="fas fa-archive">Dokumen Type</a></li>
                                {{-- <li><a href="/siteLocationDirekturIT" class="fas fa-archive">Site Location</a></li> --}}
                            </ul>

                        </li>
                    </ul>
                </div>
                <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
        @endif


        @if ($user->role === 'ManagerITdept')
            <div class="main-navbar">
                <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                <div id="mainnav">
                    <ul class="nav-menu custom-scrollbar">
                        <li class="back-btn">
                            <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                    aria-hidden="true"></i></div>
                        </li>
                        <li class="sidebar-main-title">
                            <div>
                                <h6>General</h6>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title"><span>Legal Reporting</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/dokumenExpiredManagerIT" class="fas fa-archive">Document Expired</a></li>
                            </ul>
                        <li class="dropdown">
                            <a class="nav-link menu-title"><span>Case Transaction</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/casesManagerITDept" class="fas fa-archive">Cases</a></li>
                                <li><a href="/casesTypeManagerIT" class="fas fa-archive">Cases Type</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title"></i><span>Document Master</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/dokumenManagerIT" class="fas fa-archive">Document</a></li>
                                <li><a href="/dokumenTypeManagerIT" class="fas fa-archive">Dokumen Type</a></li>
                                {{-- <li><a href="/siteLocationManagerIT" class="fas fa-archive">Site Location</a></li> --}}
                            </ul>

                        </li>
                    </ul>
                </div>
                <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
        @endif


        @if ($user->role === 'StaffITdept')
            <div class="main-navbar">
                <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                <div id="mainnav">
                    <ul class="nav-menu custom-scrollbar">
                        <li class="back-btn">
                            <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                    aria-hidden="true"></i></div>
                        </li>
                        <li class="sidebar-main-title">
                            <div>
                                <h6>General</h6>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title"><span>Legal Reporting</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/dokumenExpiredStaffIT" class="fas fa-archive">Document Expired</a></li>
                            </ul>
                        <li class="dropdown">
                            <a class="nav-link menu-title"><span>Case Transaction</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/casesStaffITDept" class="fas fa-archive">Cases</a></li>
                                <li><a href="/casesTypeStaffIT" class="fas fa-archive">Cases Type</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title"></i><span>Document Master</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/dokumenStaffIT" class="fas fa-archive">Document</a></li>
                                <li><a href="/dokumenTypeStaffIT" class="fas fa-archive">Dokumen Type</a></li>
                                {{-- <li><a href="/siteLocationStaffIT" class="fas fa-archive">Site Location</a></li> --}}
                            </ul>

                        </li>
                    </ul>
                </div>
                <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
        @endif

        @if ($user->role === 'Direkturlegaldept')
            <div class="main-navbar">
                <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                <div id="mainnav">
                    <ul class="nav-menu custom-scrollbar">
                        <li class="back-btn">
                            <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                    aria-hidden="true"></i></div>
                        </li>
                        <li class="sidebar-main-title">
                            <div>
                                <h6>General</h6>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title"><span>Legal Reporting</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/dokumenExpiredDirekturLegal" class="fas fa-archive">Document Expired</a></li>
                            </ul>
                        <li class="dropdown">
                            <a class="nav-link menu-title"><span>Case Transaction</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/casesDirekturLegalDept" class="fas fa-archive">Cases</a></li>
                                <li><a href="/casesTypeDirekturLegal" class="fas fa-archive">Cases Type</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title"></i><span>Document Master</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/dokumenDirekturlegalDept" class="fas fa-archive">Document</a></li>
                                <li><a href="/dokumenTypeDirekturLegalDept" class="fas fa-archive">Dokumen Type</a></li>
                                {{-- <li><a href="/siteLocationDirekturLegalDept" class="fas fa-archive">Site Location</a></li> --}}
                            </ul>

                        </li>
                    </ul>
                </div>
                <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
        @endif


        @if ($user->role === 'Managerlegaldept')
            <div class="main-navbar">
                <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                <div id="mainnav">
                    <ul class="nav-menu custom-scrollbar">
                        <li class="back-btn">
                            <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                    aria-hidden="true"></i></div>
                        </li>
                        <li class="sidebar-main-title">
                            <div>
                                <h6>General</h6>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title"><span>Legal Reporting</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/dokumenExpiredManagerLegal" class="fas fa-archive">Document Expired</a></li>
                            </ul>
                        <li class="dropdown">
                            <a class="nav-link menu-title"><span>Case Transaction</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/casesManagerLegalDept" class="fas fa-archive">Cases</a></li>
                                <li><a href="/casesTypeManagerLegal" class="fas fa-archive">Cases Type</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title"></i><span>Document Master</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/dokumenManagerlegalDept" class="fas fa-archive">Document</a></li>
                                <li><a href="/dokumenTypeManagerLegalDept" class="fas fa-archive">Dokumen Type</a></li>
                                {{-- <li><a href="/siteLocationManagerLegalDept" class="fas fa-archive">Site Location</a></li> --}}
                            </ul>

                        </li>
                    </ul>
                </div>
                <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
        @endif

        @if ($user->role === 'Stafflegaldept')
            <div class="main-navbar">
                <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                <div id="mainnav">
                    <ul class="nav-menu custom-scrollbar">
                        <li class="back-btn">
                            <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                    aria-hidden="true"></i></div>
                        </li>
                        <li class="sidebar-main-title">
                            <div>
                                <h6>General</h6>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title"><span>Legal Reporting</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/dokumenExpiredStaffLegal" class="fas fa-archive">Document Expired</a></li>
                             
                            </ul>
                        <li class="dropdown">
                            <a class="nav-link menu-title"><span>Case Transaction</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/casesStaffLegalDept" class="fas fa-archive">Cases</a></li>
                                <li><a href="/casesTypeStaffLegal" class="fas fa-archive">Cases Type</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title"></i><span>Document Master</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/StafflegalDept" class="fas fa-archive">Document</a></li>
                                <li><a href="/dokumenTypeStaffLegalDept" class="fas fa-archive">Dokumen Type</a></li>
                                {{-- <li><a href="/siteLocationStaffLegalDept" class="fas fa-archive">Site Location</a></li> --}}
                            </ul>

                        </li>
                    </ul>
                </div>
                <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
        @endif


        @if ($user->role === 'Direkturhrdept')
            <div class="main-navbar">
                <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                <div id="mainnav">
                    <ul class="nav-menu custom-scrollbar">
                        <li class="back-btn">
                            <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                    aria-hidden="true"></i></div>
                        </li>
                        <li class="sidebar-main-title">
                            <div>
                                <h6>General</h6>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title"><span>Legal Reporting</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/dokumenExpiredDirekturHr" class="fas fa-archive">Document Expired</a></li>
                            </ul>
                        <li class="dropdown">
                            <a class="nav-link menu-title"><span>Case Transaction</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/casesDirekturHrDept" class="fas fa-archive">Cases</a></li>
                                <li><a href="/casesTypeDirekturHr" class="fas fa-archive">Cases Type</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title"></i><span>Document Master</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/dokumenDirekturHrDept" class="fas fa-archive">Document</a></li>
                                <li><a href="/dokumenTypeDirekturHrDept" class="fas fa-archive">Dokumen Type</a></li>
                                {{-- <li><a href="/siteLocationDirekturHrDept" class="fas fa-archive">Site Location</a></li> --}}
                            </ul>

                        </li>
                    </ul>
                </div>
                <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
        @endif

        @if ($user->role === 'Managerhrdept')
            <div class="main-navbar">
                <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                <div id="mainnav">
                    <ul class="nav-menu custom-scrollbar">
                        <li class="back-btn">
                            <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                    aria-hidden="true"></i></div>
                        </li>
                        <li class="sidebar-main-title">
                            <div>
                                <h6>General</h6>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title"><span>Legal Reporting</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/dokumenExpiredDirekturHr" class="fas fa-archive">Document Expired</a></li>
                            </ul>
                        <li class="dropdown">
                            <a class="nav-link menu-title"><span>Case Transaction</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/casesManagerHrDept" class="fas fa-archive">Cases</a></li>
                                <li><a href="/casesTypeManagerHr" class="fas fa-archive">Cases Type</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title"></i><span>Document Master</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/dokumenManagerHrDept" class="fas fa-archive">Document</a></li>
                                <li><a href="/dokumenTypeManagerHrDept" class="fas fa-archive">Dokumen Type</a></li>
                                {{-- <li><a href="/siteLocationManagerHrDept" class="fas fa-archive">Site Location</a></li> --}}
                            </ul>

                        </li>
                    </ul>
                </div>
                <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
        @endif

        @if ($user->role === 'Staffhrdept')
            <div class="main-navbar">
                <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                <div id="mainnav">
                    <ul class="nav-menu custom-scrollbar">
                        <li class="back-btn">
                            <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                    aria-hidden="true"></i></div>
                        </li>
                        <li class="sidebar-main-title">
                            <div>
                                <h6>General</h6>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title"><span>Legal Reporting</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/dokumenExpiredDirekturHr" class="fas fa-archive">Document Expired</a></li>
                            </ul>
                        <li class="dropdown">
                            <a class="nav-link menu-title"><span>Case Transaction</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/casesStaffHrDept" class="fas fa-archive">Cases</a></li>
                                <li><a href="/casesTypeStaffHr" class="fas fa-archive">Cases Type</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title"></i><span>Document Master</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/dokumenStaffHrDept" class="fas fa-archive">Document</a></li>
                                <li><a href="/dokumenTypeStaffHrDept" class="fas fa-archive">Dokumen Type</a></li>
                                {{-- <li><a href="/siteLocationStaffHrDept" class="fas fa-archive">Site Location</a></li> --}}
                            </ul>

                        </li>
                    </ul>
                </div>
                <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
        @endif

        @if ($user->role === 'Direkturexportdept')
            <div class="main-navbar">
                <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                <div id="mainnav">
                    <ul class="nav-menu custom-scrollbar">
                        <li class="back-btn">
                            <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                    aria-hidden="true"></i></div>
                        </li>
                        <li class="sidebar-main-title">
                            <div>
                                <h6>General</h6>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title"><span>Legal Reporting</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/dokumenExpiredDirekturexport" class="fas fa-archive">Document Expired</a></li>
                            </ul>
                        <li class="dropdown">
                            <a class="nav-link menu-title"><span>Case Transaction</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/casesDirekturExportDept" class="fas fa-archive">Cases</a></li>
                                <li><a href="/casesTypeDirekturExport" class="fas fa-archive">Cases Type</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title"></i><span>Document Master</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/dokumenDirekturExportDept" class="fas fa-archive">Document</a></li>
                                <li><a href="/dokumenTypeDirekturExportDept" class="fas fa-archive">Dokumen Type</a></li>
                                {{-- <li><a href="/siteLocationDirekturExportDept" class="fas fa-archive">Site Location</a></li> --}}
                            </ul>

                        </li>
                    </ul>
                </div>
                <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
        @endif

        @if ($user->role === 'Managerexportdept')
            <div class="main-navbar">
                <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                <div id="mainnav">
                    <ul class="nav-menu custom-scrollbar">
                        <li class="back-btn">
                            <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                    aria-hidden="true"></i></div>
                        </li>
                        <li class="sidebar-main-title">
                            <div>
                                <h6>General</h6>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title"><span>Legal Reporting</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/dokumenExpiredManagerexport" class="fas fa-archive">Document Expired</a></li>
                            </ul>
                        <li class="dropdown">
                            <a class="nav-link menu-title"><span>Case Transaction</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/casesManagerExportDept" class="fas fa-archive">Cases</a></li>
                                <li><a href="/casesTypeManagerExport" class="fas fa-archive">Cases Type</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title"></i><span>Document Master</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/dokumenManagerExportDept" class="fas fa-archive">Document</a></li>
                                <li><a href="/TypeManagerExportDept" class="fas fa-archive">Dokumen Type</a></li>
                                {{-- <li><a href="/siteLocationManagerExportDept" class="fas fa-archive">Site Location</a></li> --}}
                            </ul>

                        </li>
                    </ul>
                </div>
                <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
        @endif

        @if ($user->role === 'Staffexportdept')
            <div class="main-navbar">
                <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                <div id="mainnav">
                    <ul class="nav-menu custom-scrollbar">
                        <li class="back-btn">
                            <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                    aria-hidden="true"></i></div>
                        </li>
                        <li class="sidebar-main-title">
                            <div>
                                <h6>General</h6>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title"><span>Legal Reporting</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/dokumenExpiredStaffexport" class="fas fa-archive">Document Expired</a></li>
                            
                            </ul>
                        <li class="dropdown">
                            <a class="nav-link menu-title"><span>Case Transaction</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/casesStaffExportDept" class="fas fa-archive">Cases</a></li>
                                <li><a href="/casesTypeStaffExport" class="fas fa-archive">Cases Type</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title"></i><span>Document Master</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/dokumenStaffExportDept" class="fas fa-archive">Document</a></li>
                                <li><a href="/TypeStaffExportDept" class="fas fa-archive">Dokumen Type</a></li>
                                {{-- <li><a href="/siteLocationStaffExportDept" class="fas fa-archive">Site Location</a></li> --}}
                            </ul>

                        </li>
                    </ul>
                </div>
                <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
        @endif

        @if ($user->role === 'Direkturpurchdept')
            <div class="main-navbar">
                <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                <div id="mainnav">
                    <ul class="nav-menu custom-scrollbar">
                        <li class="back-btn">
                            <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                    aria-hidden="true"></i></div>
                        </li>
                        <li class="sidebar-main-title">
                            <div>
                                <h6>General</h6>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title"><span>Legal Reporting</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/dokumenExpiredDirekturPurch" class="fas fa-archive">Document Expired</a></li>
                            </ul>
                        <li class="dropdown">
                            <a class="nav-link menu-title"><span>Case Transaction</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/casesDirekturPurchDept" class="fas fa-archive">Cases</a></li>
                                <li><a href="/casesTypeDirekturPurch" class="fas fa-archive">Cases Type</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title"></i><span>Document Master</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/dokumenDirekturPurchDept" class="fas fa-archive">Document</a></li>
                                <li><a href="/dokumenTypeDirekturPurchDept" class="fas fa-archive">Dokumen Type</a></li>
                                {{-- <li><a href="/siteLocationDirekturPurchDept" class="fas fa-archive">Site Location</a></li> --}}
                            </ul>

                        </li>
                    </ul>
                </div>
                <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
        @endif

        @if ($user->role === 'Managerpurchdept')
            <div class="main-navbar">
                <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                <div id="mainnav">
                    <ul class="nav-menu custom-scrollbar">
                        <li class="back-btn">
                            <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                    aria-hidden="true"></i></div>
                        </li>
                        <li class="sidebar-main-title">
                            <div>
                                <h6>General</h6>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title"><span>Legal Reporting</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/dokumenExpiredManagerPurch" class="fas fa-archive">Document Expired</a></li>
                            </ul>
                        <li class="dropdown">
                            <a class="nav-link menu-title"><span>Case Transaction</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/casesManagerPurchDept" class="fas fa-archive">Cases</a></li>
                                <li><a href="/casesTypeManagerPurch" class="fas fa-archive">Cases Type</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title"></i><span>Document Master</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/dokumenManagerPurchDept" class="fas fa-archive">Document</a></li>
                                <li><a href="/dokumenTypeManagerPurchDept" class="fas fa-archive">Dokumen Type</a></li>
                                {{-- <li><a href="/siteLocationManagerPurchDept" class="fas fa-archive">Site Location</a></li> --}}
                            </ul>

                        </li>
                    </ul>
                </div>
                <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
        @endif

        @if ($user->role === 'Staffpurchdept')
            <div class="main-navbar">
                <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                <div id="mainnav">
                    <ul class="nav-menu custom-scrollbar">
                        <li class="back-btn">
                            <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                    aria-hidden="true"></i></div>
                        </li>
                        <li class="sidebar-main-title">
                            <div>
                                <h6>General</h6>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title"><span>Legal Reporting</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/dokumenExpiredStaffPurch" class="fas fa-archive">Document Expired</a></li>
                              
                            </ul>
                        <li class="dropdown">
                            <a class="nav-link menu-title"><span>Case Transaction</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/casesStaffPurchDept" class="fas fa-archive">Cases</a></li>
                                <li><a href="/casesTypeStaffPurch" class="fas fa-archive">Cases Type</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title"></i><span>Document Master</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/dokumenStaffPurchDept" class="fas fa-archive">Document</a></li>
                                <li><a href="/dokumenTypeStaffPurchDept" class="fas fa-archive">Dokumen Type</a></li>
                                {{-- <li><a href="/siteLocationStaffPurchDept" class="fas fa-archive">Site Location</a></li> --}}
                            </ul>

                        </li>
                    </ul>
                </div>
                <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
        @endif


        @if ($user->role === 'Direkturfinancedept')
            <div class="main-navbar">
                <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                <div id="mainnav">
                    <ul class="nav-menu custom-scrollbar">
                        <li class="back-btn">
                            <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                    aria-hidden="true"></i></div>
                        </li>
                        <li class="sidebar-main-title">
                            <div>
                                <h6>General</h6>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title"><span>Legal Reporting</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/dokumenExpiredDirekturFinance" class="fas fa-archive">Document Expired</a></li>
                            </ul>
                        <li class="dropdown">
                            <a class="nav-link menu-title"><span>Case Transaction</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/casesDirekturFinanceDept" class="fas fa-archive">Cases</a></li>
                                <li><a href="/casesTypeDirekturFinance" class="fas fa-archive">Cases Type</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title"></i><span>Document Master</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/dokumenDirekturFinanceDept" class="fas fa-archive">Document</a></li>
                                <li><a href="/dokumenTypeDirekturFinanceDept" class="fas fa-archive">Dokumen Type</a></li>
                                {{-- <li><a href="/siteLocationDirekturFinanceDept" class="fas fa-archive">Site Location</a></li> --}}
                            </ul>

                        </li>
                    </ul>
                </div>
                <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
        @endif

        @if ($user->role === 'Managerfinancedept')
            <div class="main-navbar">
                <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                <div id="mainnav">
                    <ul class="nav-menu custom-scrollbar">
                        <li class="back-btn">
                            <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                    aria-hidden="true"></i></div>
                        </li>
                        <li class="sidebar-main-title">
                            <div>
                                <h6>General</h6>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title"><span>Legal Reporting</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/dokumenExpiredManagerFinance" class="fas fa-archive">Document Expired</a></li>
                
                            </ul>
                        <li class="dropdown">
                            <a class="nav-link menu-title"><span>Case Transaction</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/casesManagerFinanceDept" class="fas fa-archive">Cases</a></li>
                                <li><a href="/casesTypeManagerFinance" class="fas fa-archive">Cases Type</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title"></i><span>Document Master</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/dokumenManagerFinanceDept" class="fas fa-archive">Document</a></li>
                                <li><a href="/TypeManagerFinanceDept" class="fas fa-archive">Dokumen Type</a></li>
                                {{-- <li><a href="/siteLocationManagerFinanceDept" class="fas fa-archive">Site Location</a></li> --}}
                            </ul>

                        </li>
                    </ul>
                </div>
                <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
        @endif

        @if ($user->role === 'Stafffinancedept')
            <div class="main-navbar">
                <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                <div id="mainnav">
                    <ul class="nav-menu custom-scrollbar">
                        <li class="back-btn">
                            <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                    aria-hidden="true"></i></div>
                        </li>
                        <li class="sidebar-main-title">
                            <div>
                                <h6>General</h6>
                            </div>
                        </li>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title"><span>Legal Reporting</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/dokumenExpiredStaffFinance" class="fas fa-archive">Document Expired</a></li>
                                
                            </ul>
                        <li class="dropdown">
                            <a class="nav-link menu-title"><span>Case Transaction</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/casesStaffFinanceDept" class="fas fa-archive">Cases</a></li>
                                <li><a href="/casesTypeStaffFinance" class="fas fa-archive">Cases Type</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title"></i><span>Document Master</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/dokumenStaffFinanceDept" class="fas fa-archive">Document</a></li>
                                <li><a href="/TypeStaffFinanceDept" class="fas fa-archive">Dokumen Type</a></li>
                                {{-- <li><a href="/siteLocationStaffFinanceDept" class="fas fa-archive">Site Location</a></li> --}}
                            </ul>

                        </li>
                    </ul>
                </div>
                <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
        @endif

        @if ($user->role === 'operator')
            <div class="main-navbar">
                <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                <div id="mainnav">
                    <ul class="nav-menu custom-scrollbar">
                        <li class="back-btn">
                            <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                    aria-hidden="true"></i></div>
                        </li>
                        <li class="sidebar-main-title">
                            <div>
                                <h6>General</h6>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title"><span>Legal Reporting</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/dokumenExpiredOperator" class="fas fa-archive">Document Expired</a></li>
                            </ul>
                        <li class="dropdown">
                            <a class="nav-link menu-title"><span>Case Transaction</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/casesOperator" class="fas fa-archive">Cases</a></li>
                                <li><a href="/casesTypeOperator" class="fas fa-archive">Cases Type</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link menu-title"></i><span>Document Master</span></a>
                            <ul class="nav-submenu menu-content" style="">
                                <li><a href="/dokumenOperator" class="fas fa-archive">Document</a></li>
                                <li><a href="/dokumenTypeOperator" class="fas fa-archive">Dokumen Type</a></li>
                                {{-- <li><a href="/siteLocationOperator" class="fas fa-archive">Site Location</a></li> --}}
                            </ul>

                        </li>
                    </ul>
                </div>
                <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>
        @endif


    </nav>
</header>
