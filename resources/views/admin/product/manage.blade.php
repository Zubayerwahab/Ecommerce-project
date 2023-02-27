@extends('admin.master')
@section('title')
    Manage Product
@endsection
@section('body')
    <div class="row pt-5">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Manage Product</h3>
                </div>
                <div class="card-body">
                    <span class="text-success">{{ Session::get('success') ? Session::get('success'): '' }}</span>
                    <table class="table table-striped" id="basic-datatable" >
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Category Name</th>
                            <th>Brand Name</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $product->category->name }}</td>
                                <td>{{ $product->brand->name }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->description }}</td>
                                <td>
                                    <img src="{{ asset($product->image) }}" alt="" style="height: 60px">
                                </td>
                                <td>{{ $product->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    <a href="{{ route('edit-product', ['id'=>$product->id]) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="{{ route('delete-product',['id'=>$product->id]) }}" onclick="return confirm('Are You Sure you want to delete this?')"  class="btn btn-danger btn-sm">Delete</a>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

