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
                                <input wire:model="search" type="text" class="form-control form-control-flush flex-grow-1" name="search" value="" placeholder="Digitar" />
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-lg-4 d-flex align-items-center mb-5 mb-lg-0">
                                <!--begin::Desktop separartor-->
                                <div class="bullet bg-secondary d-none d-lg-block h-30px w-2px me-5"></div>
                                <!--end::Desktop separartor-->
                                <i class="ki-outline ki-element-11 fs-1 text-gray-500 me-1"></i>
                                <!--begin::Select-->
                                <select class="form-select border-0 flex-grow-1" data-control="select2" data-placeholder="Category" data-hide-search="true">
                                    <option value=""></option>
                                    <option value="1" selected="selected">Category</option>
                                    <option value="2">In Progress</option>
                                    <option value="3">Done</option>
                                </select>
                                <!--end::Select-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Action-->
                        <div class="min-w-150px text-end">
                            <button wire:click="buscar" type="submit" class="btn btn-dark" id="kt_advanced_search_button_1">Search</button>
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
