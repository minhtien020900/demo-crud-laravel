@include('layout.navigation')
<style>
    /*.modal .modal-dialog {*/
    /*    max-width: 800px;*/
    /*}*/

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
</style>
<div id="addModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form
                action="{{$product_row?route('list-product.update',['list_product'=>$product_row->id]):route('list-product.store')}}"
                method="post" id="frmModal">
                @if($product_row)
                    @method('PUT')
                @endif
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Add product</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="product_name" id="product_name" required
                               value="{{$product_row?$product_row->product_name:''}}"
                        >
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <input type="email" class="form-control" name="category_name" required
                               value="{{$product_row?$product_row->category_name:''}}">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="product_desc" required
                                  value="{{$product_row?$product_row->product_desc:''}}"
                        ></textarea>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" name="product_price" required
                               value="{{$product_row?$product_row->product_price:''}}"
                        >
                    </div>
                    {{--                    <div >--}}
                    {{--                        <label>Image</label>--}}
                    {{--                        <input type="file" class="form-control" required>--}}
                    {{--                    </div>--}}
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-info" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>

