<form action="/UpdateData/{{$Data['id']}}"  method="POST" class="register-form" id="register-form">
@method('PUT')
    @csrf

    <div class="form-group">
      <label for="exampleInputEmail1">WebName</label>
      <input value="{{$Data['WebName']}}" type="text" class="form-control" id="exampleInputEmail1" name="WebName" aria-describedby="emailHelp" placeholder="Enter WebName">
      
    </div>
   
    <button type="submit" class="btn btn-primary">Update</button>
</form >