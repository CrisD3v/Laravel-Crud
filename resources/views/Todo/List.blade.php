@include('GlobalComponents.Navbar')

<div class="row w-100 d-flex justify-content-center user-select-none">
    <div class="">
        <div class="text-center">
            <h2>TODO LIST</h2>
        </div>
    <div class="d-flex">
        @foreach ($todos as $todo )
            <div class="card border-primary mb-3 m-4" style="max-width: 18rem;">
                <div class="card-header">{{$todo->title}}</div>
                <div class="card-body text-primary">
                  <p class="card-text">{{$todo->description}}</p>
                  <a href="{{url('/todo/'.$todo->id.'/edit')}}" class="link">Editar</a>
                </div>
            </div>
    @endforeach
    </div>
</div>
