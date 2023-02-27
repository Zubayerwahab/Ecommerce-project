@extends('admin.master')
@section('title')
    Add Category
@endsection
@section('body')
    <div class="row mt-5">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="mx-auto">Add Category</h3>
                </div>
                <div class="card-body">
                    <span class="text-success">{{ Session::get('success') ? Session::get('success'): '' }}</span>
                    <form action="{{ route('new-category') }}" method="post">
                        @csrf
                        <div class="row mt-2">
                            <label for="" class="col-md-4">Category Name</label>
                            <div class="col-md-8">
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="" class="col-md-4">Status</label>
                            <div class="col-md-8">
                                <label><input type="radio" name="status"  value="1" checked>published</label>
                                <label><input type="radio" name="status"  value="0">Unpublished</label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit" class="btn btn-dark" value="Add Category">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
