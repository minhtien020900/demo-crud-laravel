<div id="addModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">

            <form
                enctype="multipart/form-data"
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
                        <input type="text" class="form-control" name="product_name" id="product_name"
                               value="{{$product_row?$product_row->product_name:''}}"
                        >
                    </div>
                    <div class="form-group">
                        <label>Category Name</label>
                        <select name="category_id">
                            @foreach($categories as $key => $cate)
                                <option value="{{$cate->id}}">{{ $cate->category_name }}</option>
                            @endforeach
                        </select>
{{--                        <input type="text" class="form-control" name="category_name"--}}
{{--                               value="{{$product_row?$product_row->category_name:''}}">--}}
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea type="text" class="form-control" name="product_desc"

                        >{{$product_row?$product_row->product_desc:''}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" name="product_price"
                               value="{{$product_row?$product_row->product_price:''}}"
                        >
                    </div>
                    <div>
                        <label>Image</label>
                        <input type="hidden" value="{{$product_row?$product_row->product_image:''}}">
                        <input type="file" name="product_image" class="form-control"
                        >
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-info" value="Save">
                </div>
            </form>


        </div>
    </div>
</div>

