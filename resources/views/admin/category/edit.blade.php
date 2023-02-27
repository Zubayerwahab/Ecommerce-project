@extends('admin.master')
@section('title')
    Edit Category
@endsection
@section('body')
    <div class="row mt-5">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="mx-auto">Edit Category</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('update-category',['id'=>$category->id])}}" method="post">
                        @csrf
                        <div class="row mt-2">
                            <label for="" class="col-md-4">Category Name</label>
                            <div class="col-md-8">
                                <input type="text" name="name" class="form-control" value="{{ $category->name }}">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="" class="col-md-4">Status</label>
                            <div class="col-md-8">
                                <label><input type="radio" name="status"  value="1" {{ $category->status == 1 ? 'checked' : '' }}>published</label>
                                <label><input type="radio" name="status"  value="0" {{ $category->status == 0 ? 'checked' : '' }}>Unpublished</label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit" class="btn btn-dark" value="Update Category">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

