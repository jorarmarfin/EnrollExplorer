<!--begin::Nav-->
<div class="aside-nav d-flex flex-column align-lg-center flex-column-fluid w-100 pt-5 pt-lg-0" id="kt_aside_nav">
    <!--begin::Primary menu-->
    <div class="hover-scroll-overlay-y my-2 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="5px">
        <!--begin::Menu-->
        <div id="kt_aside_menu" class="menu menu-column menu-title-gray-600 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-semibold fs-6" data-kt-menu="true">
            <!--begin:Menu item-->
            <a href="{{route('home')}}" data-kt-menu-placement="right-start" class="menu-item py-2">
                <!--begin:Menu link-->
                <span class="menu-link menu-center">
                    <span class="menu-icon me-0">
                        <i class="fonticon-house fs-1"></i>
                    </span>
                </span>
                <!--end:Menu link-->
            </a>
            <!--end:Menu item-->
            <!--begin:Menu item-->
            <x-menu-item>
                <x-slot:title>Acciones</x-slot:title>
                <x-slot:icon><i class="bi bi-list-check fs-2x"></i></x-slot:icon>


                <x-menu-sub-item nombre="Asignar actividad" url="{{route('home')}}"/>



            </x-menu-item>
            <!--end:Menu link-->

        </div>
        <!--end::Menu-->
    </div>
    <!--end::Primary menu-->
</div>
<!--end::Nav-->
