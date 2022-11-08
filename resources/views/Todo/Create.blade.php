@include('GlobalComponents.Navbar')
<?php
    $route = Route::currentRouteName();
?>
<div class="row w-100 d-flex justify-content-center user-select-none">
    <div class="">
        <div class="text-center">
            <h2>TODO CREATE</h2>
        </div>
        <div class="col-12 w-100 d-flex justify-content-center mb-5">
            @if($route === 'todo.edit')
            <form action="{{url('/todo/'.$todo->id)}}" method="POST" class="w-25 text-start  col-12  " enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" value="{{$todo->title}}" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                      <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                      <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{$todo->description}}</textarea>
                  </div>
                  <div class="d-flex justify-content-center row">
                    <button type="submit" class="btn btn-primary w-75">
                        Editar
                    </button>
                </div>
            </form>
                @else
            <form action="{{url('/todo/')}}" method="POST" class="w-25 text-start  col-12  " enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                      <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                      <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                <div class="d-flex justify-content-center row">
                    <button type="submit" class="btn btn-primary w-75">
                        ADD
                    </button>
                </div>
            </form>
            @endif
        </div>
    </div>
    @if ($route === 'todo.create')
    @foreach ($todos as $todo )
        <div class="col-12 w-100 d-flex justify-content-center">
            <div class="card text-bg-primary mb-3 style="max-width: 18rem;">
                <div class="card-header">{{$todo->title}}</div>
                <div class="card-body">
                <p class="card-text">{{$todo->description}}</p>
                <div class="w-100">
                    <a href="{{url('/todo/'.$todo->id.'/edit')}}" class="btn btn-primary">Editar</a>
                    <form action="{{url('/todo/'.$todo->id)}}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Eliminar" onclick="return confirm('Quieres borrar esta tarea?')" class="btn btn-danger">
                    </form>
                </div>
                </div>
            </div>
        </div>
    @endforeach
    @endif


</div>
