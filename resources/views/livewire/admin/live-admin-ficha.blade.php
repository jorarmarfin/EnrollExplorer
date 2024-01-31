<div>
    <x-metronic.card>
        <x-slot:titulo>
            <h1 class="card-title">Gestión de fichas cantidad: {{$cantidad}}</h1>
        </x-slot:titulo>
        <form wire:submit="save">
        <div class="row">
            <div class="col-md-2">
                <input type="text" wire:model="form.codigo" class="form-control" placeholder="Codigo">
                @error('form.codigo') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-2">
                <input type="text" wire:model="form.dni" class="form-control" placeholder="DNI">
                @error('form.dni') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-2">
                <input type="text" wire:model="form.paterno" class="form-control" placeholder="Paterno">
                @error('form.paterno') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-2">
                <input type="text" wire:model="form.materno" class="form-control" placeholder="Materno">
                @error('form.materno') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-2">
                <input type="text" wire:model="form.nombres" class="form-control" placeholder="Nombres">
                @error('form.nombres') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-2"> <button type="submit" class="btn btn-primary">Guardar</button></div>
        </div>
        </form>
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table id="kt_project_users_table" class="table table-row-bordered table-row-dashed gy-4 align-middle">
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
                            <button wire:click="edit({{$item->id}})" class="btn btn-primary btn-sm"> <i class="bi bi-pen-fill" ></i>  Edit</button>
                            <button wire:click="delete({{$item->id}})" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill" ></i>Delete</button>
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
