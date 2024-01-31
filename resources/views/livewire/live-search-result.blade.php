<div>
    <x-metronic.card>
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table id="kt_project_users_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold">
                <thead class="fs-7 text-gray-500 text-uppercase">
                <tr>
                    <th class="min-w-250px">CAL</th>
                    <th class="min-w-150px">DNI</th>
                    <th class="min-w-90px">Nombres</th>
                    <th class="min-w-50px text-end">Details</th>
                </tr>
                </thead>
                <tbody >
                @foreach($lista as $item)
                <tr>
                    <td>{{$item->codigo}}</td>
                    <td>{{$item->dni}}</td>
                    <td>{{$item->full_name}}</td>
                    <td class="text-end">
                        <a href="#" class="btn btn-light btn-sm">View</a>
                    </td>
                </tr>

                @endforeach
                </tbody>
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table container-->

    </x-metronic.card>

</div>
