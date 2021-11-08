@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Menu</div>

                <div class="card-body">
                    <ul class="list-group">
                        <a href="" class="list-group-item list-group-item-action">View</a>
                        <a href="" class="list-group-item list-group-item-action">Create</a>
                        
                        </ul>

                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pizza</div>
                @if (count($errors) > 0)
                <div class="card mt-5">
                    <div class="card-body">
                        
                        @if (count($errors) > 0)
                        <div class="card mt-5">
                            <div class="card-body">
                                <div class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                       <p> {{ $error }}<p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @endif
                        
                    </div>
                </div>
                @endif
                <form action="{{ route('pizza.store') }}" method="post" enctype="multipart/form-data">@csrf
                <div class="card-body">
                    <div class="form-group">
                   <label for="name">name of pizza</label>
                   <input type="text" class="form-control" name="name" placeholder="name of pizza" >
                </div> 
                <div class="form-group">
                    <label for="description">Description of pizza</label>
                    <textarea type="text" class="form-control" name="description"></textarea>
                </div> 
                    <div class="form-inline">
                        
                        <label>pizza price($)</label>
                        <input type="number"  name="small pizza price" class="form-control" placeholder="small pizza price">
                        <input type="number"  name="medium  pizza price"class="form-control" placeholder="medium pizza price">
                        <input type="number"  name="large pizza price"class="form-control" placeholder="large pizza price">
                     </div> 
                     <div class="form-group">
                        <label for="description">Category</label>
                        <select class="form-control" name="Category">
                            <option value=""></option>
                            <option value="vegetarian">vegetarian pizza</option>
                            <option value="nonvegetarian">Non vegetarian pizza</option>
                            <option value="traditional">Traditional pizza</option>
                         </select>
                         <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control" name="image">
                        </div>
                        <div class="form-group text-center" >
                            <button class="btn btn-primary" type="submit">Save</label>
                            
                        </div>  
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection