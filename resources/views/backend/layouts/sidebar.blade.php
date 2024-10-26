<div class="aside-menu flex-column-fluid px-4">
    <div class="hover-scroll-overlay-y my-5 pe-4 me-n4" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="{default: '#kt_aside_footer', lg: '#kt_header, #kt_aside_footer'}" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="{default: '5px', lg: '75px'}">
        <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6" id="#kt_aside_menu" data-kt-menu="true">
            <div class="menu-item here">
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
                        <a class="" href="{{ route('dashboard') }}">
                            <span class="menu-title">Home Configuration</span>
                        </a>
                    </span>
                </span>
            </div>
            <div class="menu-item here">
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
                        <a class="" href="{{ route('dashboard') }}">
                            <span class="menu-title">Services</span>
                        </a>
                    </span>
                </span>
            </div>
            <div class="menu-item here">
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
                        <a class="" href="{{ route('dashboard') }}">
                            <span class="menu-title">Partners</span>
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