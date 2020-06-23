@extends('layouts.app');

@section('content');
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
            
                <div class="list-group">
                    <a href="/management/category" class="list-group-item list-group-item-action"><i class="fas fa-align-left"></i>   Category</a>
                    <a class="list-group-item list-group-item-action"><i class="fas fa-hamburger"></i>   Menu</a>
                    <a class="list-group-item list-group-item-action"><i class="fas fa-chair"></i>   Table</a>
                    <a class="list-group-item list-group-item-action"><i class="fas fa-users-cog"></i>  User</a>
                </div>
            
            </div>
            <div class="col-md-8">
                <i class="fas fa-hamburger"></i>
            Create a Menu
            <hr>
            @if($errors-> any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li> {{ $error }} </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/management/menu" method="POST">
                @csrf   
                <div class="form-group">
            <label for="menuName">Menu Name</label>
            <input type="text" name="name" class="form-control" placeholder="Menu...">
          </div>
          <label for="menuPrice">Price</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">$</span>
            </div>
            <input type="text" name="price" class="form-control" aria-label="Amount (to the nearest dollor)">
            <div class="input-group-append">
            <span class="input-group-text">.00</span>
            </div>
          </div>
          <label for="MenuImage">Image</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Upload</span>
            </div>
            <div class="custom-file">
              <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
              <label class="custom-file-label" for="inputGroupFile01">Choose File</label>            
            </div>
          </div>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
            <hr>
            </div>
        </div>
    </div>
@endsection