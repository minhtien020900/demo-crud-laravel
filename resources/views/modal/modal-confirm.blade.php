@section('modal')

@endsection()
<div id="modalConfirm" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            @isset($id)
            <form action="{{route('list-product.destroy',['list_product' =>$id])}}" method="POST">
                @method('DELETE')
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Delete Product</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete these Records?</p>
                    <p class="text-warning"><small>This action cannot be undone.</small></p>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-danger" value="Delete">
                </div>
            </form>
            @endisset()
        </div>
    </div>
</div>
