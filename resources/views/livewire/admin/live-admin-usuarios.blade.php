<div>
    <x-metronic.card>
        <x-slot:titulo>
            <h1 class="card-title">Gestión de fichas cantidad: {{$cantidad}}</h1>
        </x-slot:titulo>
        <form wire:submit="save">
            <div class="row">
                <div class="col-md-2">
                    <input type="text" wire:model="form.name" class="form-control" placeholder="Nombre">
                    @error('form.name') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="col-md-2">
                    <input type="text" wire:model="form.username" class="form-control" placeholder="UserName">
                    @error('form.username') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="col-md-2">
                    <input type="email" wire:model="form.email" class="form-control" placeholder="Email">
                    @error('form.email') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="col-md-2">
                    <input type="password" wire:model="form.password" class="form-control" placeholder="Password">
                    @error('form.password') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="col-md-2">
                    {!! Form::select('role', ['systems' => 'Sistemas', 'editor' => 'Editor', 'viewer' => 'Lectura'], null,
                        ['placeholder' => 'Seleccionar Rol','wire:model'=>'form.role','class'=>'form-select']) !!}
                    @error('form.role') <span class="error">{{ $message }}</span> @enderror
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
                    <th class="min-w-250px">Nombre</th>
                    <th class="min-w-150px">Username</th>
                    <th class="min-w-90px">Email</th>
                    <th class="min-w-50px text-end">Details</th>
                </tr>
                </thead>
                <tbody >
                @foreach($lista as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->username}}</td>
                        <td>{{$item->email}}</td>
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
