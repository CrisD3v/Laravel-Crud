@include('GlobalComponents.Header')

<div class="">
    <div class="row d-flex  text-center w-100 vh-100 justify-content-center align-items-center">
        <div class="">
            <div class="col-12">
                <h2>REGISTRATE</h2>
            </div>
            <div class="row d-flex justify-content-center">
                <form action="{{url('/user')}}" method="POST" class="w-25 text-start  col-12  " enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Name</label>
                      <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Last name</label>
                        <input type="text" class="form-control" name="lastName" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Image</label>
                        <input type="file" name="image"  class="form-control" id="exampleInputPassword1">
                      </div>

                    <div class="d-flex justify-content-center row">
                        <a href="{{url('login')}}" class="link-info text-center mb-3 mt-2">Logueate</a>
                        <button type="submit" class="btn btn-primary w-75">Registrate</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
