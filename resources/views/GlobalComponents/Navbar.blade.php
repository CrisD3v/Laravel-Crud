@include('GlobalComponents.Header')

<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
          @guest
            <a class="nav-link" href="{{url('login')}}">Login</a>
          @else
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Todo
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{url('todo/create')}}">Create</a></li>
              <li><a class="dropdown-item" href="{{url('todo')}}">List</a></li>
            </ul>
          </li>
          <a class="nav-link" href="{{url('/user')}}">Dashboard</a>
          <form action="{{url('/logout')}}" method="POST">
            @csrf
            <a class="nav-link" href="#" onclick="this.closest('form').submit()">Logout</a>
          </form>
          @endguest
        </div>
      </div>
    </div>
</nav>
