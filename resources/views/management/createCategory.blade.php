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
                <i class="fas fa-align-left"></i>
            Create a Category
            <hr>
            <form action="/management/category" method="POST">
                @csrf   
                <div class="form-group">
                    <label for="categoryName">Category Name </label>
                    <br>
                    <input type="text" name="name" class="form-control" placeholder="Category...">
                <div>
                <br>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
            </div>
        </div>
    </div>
@endsection


