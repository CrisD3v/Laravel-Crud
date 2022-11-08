@include('GlobalComponents.Header')

<?php
    $route = Route::currentRouteName();
?>

<div class="w-100 user-select-none ">
    <div class="w-100 d-flex justify-content-center mt-5">
        @if($route === 'user.edit')
        <h2>EDITAR USUARIO</h2>
        @else
        <h2>LISTA DE USUARIOS</h2>
        @endif
    </div>
    <div class="w-100 d-flex flex-wrap mt-5 justify-content-center">
        @if($route !== 'user.edit')
        @foreach ( $users as $user )
        <div class="card" style="width: 18rem;">
            <img src="{{url(asset('storage').'/'.$user->image)}}" class="w-100 h-100" alt="...">
            <div class="w-100 position-absolute top-0 start-50  translate-middle">
                <span class="badge bg-success">{{$user->id}}</span>
            </div>
            <div class="card-body">
              <h5 class="card-title">{{$user->name}} {{$user->lastName}}</h5>
              <p class="card-text">{{$user->email}}</p>
              <div class="d-flex flex-col gap-2">
              <a href="{{url('/user/'.$user->id.'/edit')}}" class="btn btn-primary">Editar</a>
              <form action="{{url('/user/'.$user->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Quieres borrar este usuario?')" class="btn btn-danger">ELiminar</button>
              </form>
              </div>
            </div>
        </div>
        @endforeach
        @else
        <div class="card">
            <img src="{{url(asset('storage').'/'.$user->image)}}" class="w-100 h-100" alt="...">
            <div class="w-100 position-absolute top-0 start-50  translate-middle">
                <span class="badge bg-success fs-2">{{$user->id}}</span>
            </div>
            <div class="card-body">
                <form action="{{url('/user/'.$user->id)}}" method="POST">
                    <div class="mb-3">
                        <input type="text" class="form-control w-75" name="name" value="{{$user->name}}"id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control w-75" name="lastName" value="{{$user->lastName}}"id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control w-100" name="email" value="{{$user->email}}"id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="d-flex flex-col gap-2">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-primary">Editar</button>
                    </div>
                </form>
            </div>
        </div>
        @endif
    </div>
</div>
