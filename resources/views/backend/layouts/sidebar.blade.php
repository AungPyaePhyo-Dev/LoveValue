<div class="aside-menu flex-column-fluid px-4">
    <div class="hover-scroll-overlay-y my-5 pe-4 me-n4" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="{default: '#kt_aside_footer', lg: '#kt_header, #kt_aside_footer'}" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="{default: '5px', lg: '75px'}">
        <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6" id="#kt_aside_menu" data-kt-menu="true">
            <div class="menu-item @if(Request::segment(2) == 'dashboard') here @endif">
                <span class="menu-link">
                    <span class="menu-icon">
                        <i class="ki-duotone ki-element-11 fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>
                    </span>
                    <span >
                        <a class="" href="{{ route('admin.dashboard') }}">
                            <span class="menu-title">Home Configuration</span>
                        </a>
                    </span>
                </span>
            </div>

            <div class="menu-item @if(Request::segment(2) == 'service') here @endif" >
                <span class="menu-link">
                    <span class="menu-icon">
                        <i class="ki-duotone ki-element-11 fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>
                    </span>
                    <span >
                        <a class="" href="{{ route('admin.service.index') }}">
                            <span class="menu-title">Services</span>
                        </a>
                    </span>
                </span>
            </div>

            <div class="menu-item @if(Request::segment(2) == 'live-service') here @endif" >
                <span class="menu-link">
                    <span class="menu-icon">
                        <i class="ki-duotone ki-element-11 fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>
                    </span>
                    <span >
                        <a class="" href="{{ route('admin.live-service.index') }}">
                            <span class="menu-title">Live Service</span>
                        </a>
                    </span>
                </span>
            </div>

            <div class="menu-item @if(Request::segment(2) == 'video-service') here @endif">
                <span class="menu-link">
                    <span class="menu-icon">
                        <i class="ki-duotone ki-element-11 fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>
                    </span>
                    <span >
                        <a class="" href="{{ route('admin.video-service.index') }}">
                            <span class="menu-title">Video Service</span>
                        </a>
                    </span>
                </span>
            </div>

            <div class="menu-item @if(Request::segment(2) == 'photo-service') here @endif">
                <span class="menu-link">
                    <span class="menu-icon">
                        <i class="ki-duotone ki-element-11 fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>
                    </span>
                    <span >
                        <a class="" href="{{ route('admin.photo-service.index') }}">
                            <span class="menu-title">Photo Service</span>
                        </a>
                    </span>
                </span>
            </div>

            <div class="menu-item @if(Request::segment(2) == 'partner') here @endif">
                <span class="menu-link">
                    <span class="menu-icon">
                        <i class="ki-duotone ki-element-11 fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>
                    </span>
                    <span >
                        <a class="" href="{{ route('admin.partner.index') }}">
                            <span class="menu-title">Partners</span>
                        </a>
                    </span>
                </span>
            </div>

            <div class="menu-item @if(Request::segment(2) == 'link') here @endif">
                <span class="menu-link">
                    <span class="menu-icon">
                        <i class="ki-duotone ki-element-11 fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>
                    </span>
                    <span >
                        <a class="" href="{{ route('admin.link.index') }}">
                            <span class="menu-title">Social Links</span>
                        </a>
                    </span>
                </span>
            </div>

            <div class="menu-item @if(Request::segment(2) == 'contact') here @endif">
                <span class="menu-link">
                    <span class="menu-icon">
                        <i class="ki-duotone ki-element-11 fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                        </i>
                    </span>
                    <span >
                        <a class="" href="{{ route('admin.contact.index') }}">
                            <span class="menu-title">Contacts</span>
                        </a>
                    </span>
                </span>
            </div>

        </div>
    </div>
</div>
<div class="aside-footer flex-column-auto pt-5 pb-7 px-7" id="kt_aside_footer">
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit" class="btn btn-sm btn-color-gray-500 btn-active-color-gray-900 text-nowrap w-100" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click">
            <span class="btn-danger btn">Logout</span>
        </button>
    </form>
</div>