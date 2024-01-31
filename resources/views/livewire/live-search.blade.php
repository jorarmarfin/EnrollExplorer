<div>
    <!--begin::Search form-->
    <div class="card rounded-0 shadow-none border-0 bgi-no-repeat bgi-position-x-end bgi-size-cover" style="background-color: #663259;background-size: auto 100%; background-image: url(assets/media/misc/taieri.svg)">
        <!--begin::body-->
        <div class="card-body container-xxl pt-10 pb-8">
            <!--begin::Title-->
            <div class="d-flex align-items-center">
                <h1 class="fw-semibold me-3 text-white">Buscar</h1>
            </div>
            <!--end::Title-->
            <!--begin::Wrapper-->
            <div class="d-flex flex-column">
                <!--begin::Block-->
                <div class="d-lg-flex align-lg-items-center">
                    <!--begin::Simple form-->
                    <div class="rounded d-flex flex-column flex-lg-row align-items-lg-center bg-body p-5 w-xxl-1000px h-lg-60px me-lg-10 my-5">
                        <!--begin::Row-->
                        <div class="row flex-grow-1 mb-5 mb-lg-0">
                            <!--begin::Col-->
                            <div class="col-lg-8 d-flex align-items-center mb-3 mb-lg-0">
                                <i class="ki-outline ki-magnifier fs-1 text-gray-500 me-1"></i>
                                <!--begin::Input-->
                                <input wire:model.lazy="search" wire:keydown.enter="buscar" type="text" class="form-control form-control-flush flex-grow-1" name="search" value="" placeholder="Digitar" />
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Action-->
                        <div class="min-w-150px text-end">
                            <button wire:click="buscar" type="submit" class="btn btn-dark" id="kt_advanced_search_button_1">Buscar</button>
                        </div>
                        <!--end::Action-->
                    </div>
                    <!--end::Simple form-->
                </div>
                <!--end::Block-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::body-->
    </div>
    <!--end::Search form-->
</div>
