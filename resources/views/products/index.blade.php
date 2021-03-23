@extends('layouts.app')

@section('content')
<div class="container">
    <form class="card-body" action="{{route('search')}}" method="GET" role="search">
        <input type="text" class="form-control" placeholder="Search Product, Price, Description" name="query" value="@isset($search) {{$search}} @endisset">
    </form>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Product</th>
            <th scope="col">Prices</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$product->name_product}}</td>
                <td>{{$product->prices}}</td>
                <td>{{$product->description}}</td>
                <td class="text-nowrap">
                <form action="{{route('products.destroy', $product->id)}}" method="post">
                    <a href="{{route('products.edit', $product->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></a>
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="float-right">
        {{$products->links()}}
    </div>
</div>
@endsection
