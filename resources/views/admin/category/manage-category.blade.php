@extends('admin.master')
@section('title')
    Manage Category
@endsection
@section('body')
    <div class="row pt-5">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Manage Category</h3>
                </div>
                <div class="card-body">
                    <span class="text-success">{{ Session::get('success') ? Session::get('success'): '' }}</span>
                    <table class="table table-striped" id="basic-datatable" >
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Category Name</th>
                            <th>Category Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    <a href="{{ route('edit-category',['id'=> $category->id]) }}" class="btn btn-primary btn-sm">
                                        Edit
                                    </a>
                                    <a href="{{ route('delete-category',['id'=>$category->id]) }}" onclick="return confirm('Are You Sure to Delete this Category?')" class="btn btn-danger btn-sm">
                                        Delete
                                    </a>
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
