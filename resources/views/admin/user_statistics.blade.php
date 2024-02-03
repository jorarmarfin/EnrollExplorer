@extends('layouts.base')

@section('content')
    <x-metronic.card>
        <x-slot:titulo>
            <h1 class="card-title">Estadísticas de usuarios</h1>
        </x-slot:titulo>
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table id="kt_project_users_table" class="table table-row-bordered table-row-dashed gy-4 align-middle">
                <thead class="fs-7 text-gray-500 text-uppercase">
                <tr>
                    <th class="min-w-50px">Usuario</th>
                    <th class="min-w-50px">Fecha</th>
                    <th class="min-w-50px">Cantidad</th>
                </tr>
                </thead>
                <tbody >
                @foreach($lista as $item)
                    <tr>
                        <td>{{$item->user->name}}</td>
                        <td>{{$item->fecha}}</td>
                        <td>{{$item->cantidad}}</td>
                    </tr>

                @endforeach
                </tbody>
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table container-->
    </x-metronic.card>
@endsection


