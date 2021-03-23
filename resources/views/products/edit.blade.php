@extends('layouts.app')

@section('content')
<div class="container">
   <h1> Edit Product </h1>
    <hr>
    <form action="{{route('products.update', $products->id)}}" method="post">
        <div class="form-group">
            <input type="text" class="form-control" name="productname" value="{{$products->name_product}}">
        </div>
        <div class="form-group">
            <input type="number" class="form-control" name="price" value="{{$products->prices}}">

        </div>
        <div class="form-group">
            <textarea type="text" id="" cols="30" rows="10" class="form-control" name="description">{{$products->description}}</textarea>
        </div>
        <hr>
        <div class="float-right">
            <a href="{{route('products.index')}}" class="btn btn-primary">Back</a>
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit"  class="btn btn-success">Update</button>
        </div>
    </form>
</div>
@endsection
