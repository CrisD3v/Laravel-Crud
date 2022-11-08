@include('GlobalComponents.Header')

<div class="">
    <div class="row d-flex  text-center w-100 vh-100 justify-content-center align-items-center">
        <div class="">
            <div class="col-12">
                <h2>LOGUEATE</h2>
            </div>
            <div class="row d-flex justify-content-center">
                <form action="{{url('/login')}}" method="POST" class="w-25 text-start  col-12  " enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>

                    <div class="d-flex justify-content-center row">
                        <a href="{{url('user/create')}}" class="link-info text-center mb-3 mt-2">Registrate</a>
                        <button type="submit" class="btn btn-primary w-75">Logueate</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
