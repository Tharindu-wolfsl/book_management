@extends('master')
@section('content')
{{-- @if ($errors->any())
<div class="alert alert-danger">
    <ul class="list-unstyled">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif --}}
<div class="container login-card">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4"><div class="card" style="width: 18rem;">
            <div class="card-body">
                <form action="addbooks" method="POST" >
                    @csrf
                    <div class="mb-3">
                        <label for="username"  class="form-label">Name</label>
                        <input type="text" name="username" class="form-control" id="username">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1"  class="form-label">Category</label>
                        <input type="text" name="category" class="form-control">
                      </div>
                      <div class="mb-3">
                        <label for="image"  class="form-label">image</label>
                        <input type="file" name="image" class="form-control" id="image">
                      </div>
                      <div class="mb-3">
                        <label for="author"  class="form-label">Author</label>
                        <input type="text" name="author" class="form-control" id ="author">
                      </div>
                      <div class="mb-3">
                        <label for="pb_date"  class="form-label">Publish Date</label>
                        <input type="date" name="pb_date" class="form-control" id="pb_date">
                      </div>
                    
                    <button type="submit" class="btn btn-primary">Add Book</button>
                  </form>
            </div>
          </div></div>
    </div>
</div>
@endsection