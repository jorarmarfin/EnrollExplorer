<!--begin:Menu item-->
<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item py-2">
    <!--begin:Menu link-->
    <span class="menu-link menu-center">
        <span class="menu-icon me-0">
            @isset($icon)
                {{$icon}}
            @else
                <i class="fonticon-house fs-1"></i>
            @endisset
        </span>
    </span>
    <!--end:Menu link-->
    <!--begin:Menu sub-->
    <div class="menu-sub menu-sub-dropdown px-2 py-4 w-250px mh-75 overflow-auto">
        <!--begin:Menu item-->
        <div class="menu-item">
            <!--begin:Menu content-->
            <div class="menu-content">
                <span class="menu-section fs-5 fw-bolder ps-1 py-1">{{$title}}</span>
            </div>
            <!--end:Menu content-->
        </div>
        <!--end:Menu item-->
        {{$slot}}
    </div>
    <!--end:Menu sub-->
</div>
<!--end:Menu item-->
