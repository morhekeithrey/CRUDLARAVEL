<form action="/NewData" method="POST" class="register-form" id="register-form">


    @csrf



    <div class="form-group">
      <label for="exampleInputEmail1">WebName</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="WebName" aria-describedby="emailHelp" placeholder="Enter WebName">
      {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
    </div>
    {{-- <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div> --}}
    {{-- <div class="form-group form-check"> --}}
      {{-- <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> --}}
    <button type="submit" class="btn btn-primary">Submit</button>
</form >