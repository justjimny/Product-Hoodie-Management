@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Product List</h3>
                    <div class="card-tools">
                        <a href="{{ route('products.create') }}" class="btn btn-primary">Add New Product</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="products-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
$(function() {
    $('#products-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('products.index') !!}',
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
            { data: 'name', name: 'name' },
            { data: 'price', name: 'price' },
            { data: 'stock', name: 'stock' },
            { data: 'action', name: 'action', orderable: false, searchable: false }
        ]
    });
});
</script>
@endpush
