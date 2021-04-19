@extends('index')
@section('style-modal')
    .table-data {
    color: #566787;
    background: #f5f5f5;

    font-size: 13px;
    }

    .table-responsive {
    margin: 30px 0;
    }

    .table-wrapper {
    background: #fff;
    padding: 20px 25px;
    border-radius: 3px;
    min-width: 1000px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    }

    .table-title {
    padding-bottom: 15px;
    background: #435d7d;
    color: #fff;
    padding: 16px 30px;
    min-width: 100%;
    margin: -20px -25px 10px;
    border-radius: 3px 3px 0 0;
    }

    .table-title h2 {
    margin: 5px 0 0;
    font-size: 24px;
    }

    .table-title .btn-group {
    float: right;
    }

    .table-title .btn {
    color: #fff;
    float: right;
    font-size: 13px;
    border: none;
    min-width: 50px;
    border-radius: 2px;
    border: none;
    outline: none !important;
    margin-left: 10px;
    }

    .table-title .btn i {
    float: left;
    font-size: 21px;
    margin-right: 5px;
    }

    .table-title .btn span {
    float: left;
    margin-top: 2px;
    }

    table.table tr th, table.table tr td {
    border-color: #e9e9e9;
    padding: 18px 15px;
    vertical-align: middle;
    }

    table.table tr th:first-child {
    width: 60px;
    }

    table.table tr th:last-child {
    width: 100px;
    }

    table.table-striped tbody tr:nth-of-type(odd) {
    background-color: #fcfcfc;
    }

    table.table-striped.table-hover tbody tr:hover {
    background: #f5f5f5;
    }

    table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
    }

    table.table td:last-child i {
    opacity: 0.9;
    font-size: 22px;
    margin: 0 5px;
    }

    table.table td a {
    font-weight: bold;
    color: #566787;
    display: inline-block;
    text-decoration: none;
    outline: none !important;
    }

    table.table td a:hover {
    color: #2196F3;
    }

    table.table td a.edit {
    color: #FFC107;
    }

    table.table td a.delete {
    color: #F44336;
    }

    table.table td i {
    font-size: 19px;
    }

    table.table .avatar {
    border-radius: 50%;
    vertical-align: middle;
    margin-right: 10px;
    }

    .pagination {
    float: right;
    margin: 0 0 5px;
    }

    .pagination li a {
    border: none;
    font-size: 13px;
    min-width: 30px;
    min-height: 30px;
    color: #999;
    margin: 0 2px;
    line-height: 30px;
    border-radius: 2px !important;
    text-align: center;
    padding: 0 6px;
    }

    .pagination li a:hover {
    color: #666;
    }

    .pagination li.active a, .pagination li.active a.page-link {
    background: #03A9F4;
    }

    .pagination li.active a:hover {
    background: #0397d6;
    }

    .pagination li.disabled i {
    color: #ccc;
    }

    .pagination li i {
    font-size: 16px;
    padding-top: 6px
    }

    .hint-text {
    float: left;
    margin-top: 10px;
    font-size: 13px;
    }
    .modal .modal-header, .modal .modal-body, .modal .modal-footer {
    padding: 20px 30px;
    }

    .modal .modal-content {
    border-radius: 3px;
    font-size: 14px;
    }

    .modal .modal-footer {
    background: #ecf0f1;
    border-radius: 0 0 3px 3px;
    }

    .modal .modal-title {
    display: inline-block;
    }

    .modal .form-control {
    border-radius: 2px;
    box-shadow: none;
    border-color: #dddddd;
    }

    .modal textarea.form-control {
    resize: vertical;
    }

    .modal .btn {
    border-radius: 2px;
    min-width: 100px;
    }

    .modal form label {
    font-weight: normal;
    }
    #product_image_thumnail{

    height:70px;
    }
@endsection
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
                        <th>Price</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $key => $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->product_name}}</td>
                            <td>{{$product->category_name}}</td>
                            <td>{{$product->product_desc}}</td>
                            <td>{{$product->product_price}}</td>
                            <td><img id="product_image_thumnail" alt="{{$product->product_image}}"
                                     src="{{asset('storage/images/'. $product->product_image)}}"></td>
                            <td>
                                <a id="btnEdit{{$product->id}}"
                                   href="{{route('list-product.edit',['list_product'=>$product->id])}}"
                                   class="edit"

                                ><i
                                        class="material-icons"
                                        title="Edit">&#xE254;</i></a>
                                <a href="#modalConfirm" class="delete" data-toggle="modal"><i
                                        class="material-icons"
                                        data-toggle="tooltip"
                                        title="Delete">&#xE872;</i></a>
                            </td>
                        </tr>
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

        @isset($nameModal)
            @if(!count($errors)>0)
                <script>
                    console.log('{{$nameModal}}');
                    $('#{{$nameModal}}').modal('show');
                </script>
    @endif()

    @endisset()


@endsection

