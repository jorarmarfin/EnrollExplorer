<div>
    <x-metronic.card>
        @if($msj!='')
            <div class="alert alert-primary" role="alert">
                <div class="alert-text">{{$msj}}</div>
            </div>
        @endif
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table id="kt_project_users_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold">
                <thead class="fs-7 text-gray-500 text-uppercase">
                <tr>
                    <th class="min-w-250px">CAL</th>
                    <th class="min-w-150px">DNI</th>
                    <th class="min-w-90px">Nombres</th>
                    <th class="min-w-50px text-end">Fichas</th>
                </tr>
                </thead>
                <tbody >
                @foreach($lista as $item)
                <tr>
                    <td>{{$item->codigo}}</td>
                    <td>{{$item->dni}}</td>
                    <td>{{$item->full_name}}</td>
                    <td class="text-end">
                        <button wire:click="download('{{$item->codigo}}')" class="btn btn-primary btn-sm"><i class="bi bi-download"></i>Descargar</button>
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
