
@extends('pages.admin.dashboard')
@section('content')
@if($errors->any() )
<div class="alert alert-danger">
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
</div>
@endif()
@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif()
<div class="table-data">
<div class="table-responsive">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Manage <b>Products</b></h2>
                </div>
                <div class="col-sm-6">
                    <a href="{{route('list-product.create')}}" class="btn btn-success"><i
                            class="material-icons">&#xE147;</i> <span>Add New Product</span></a>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Category</th>
                <th>Description</th>
                <th>Category name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $key => $product)
                @foreach($categories as $key => $category)
                    @if($product->category_id==$category->id)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->product_name}}</td>
                            <td>{{$category->category_name}}</td>
                            <td>{{$product->product_desc}}</td>
                            <td>{{$product->product_price}}</td>
                            <td><img id="product_image_thumnail" alt="{{$product->product_image}}"
                                     src="{{ asset('storage/images/'. $product->product_image)}}"></td>
                            <td>
                                <a id="btnEdit{{$product->id}}"
                                   href="{{route('list-product.edit',['list_product'=>$product->id])}}"
                                   class="edit"

                                ><i
                                        class="material-icons"
                                        title="Edit">&#xE254;</i></a>
                                <a href="{{route('list-product.show',['list_product'=>$product->id])}}"
                                   class="delete"><i
                                        class="material-icons"
                                        data-toggle="tooltip"
                                        title="Delete">&#xE872;</i></a>
                            </td>
                        </tr>
                    @endif

                @endforeach
            @endforeach
            </tbody>
        </table>
        @include('modal.modal-add')
        @include('modal.modal-confirm')
        <div class="clearfix">
            <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
            <ul class="pagination">
                <li class="page-item disabled"><a href="#">Previous</a></li>
                <li class="page-item"><a href="#" class="page-link">1</a></li>
                <li class="page-item"><a href="#" class="page-link">2</a></li>
                <li class="page-item active"><a href="#" class="page-link">3</a></li>
                <li class="page-item"><a href="#" class="page-link">4</a></li>
                <li class="page-item"><a href="#" class="page-link">5</a></li>
                <li class="page-item"><a href="#" class="page-link">Next</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection