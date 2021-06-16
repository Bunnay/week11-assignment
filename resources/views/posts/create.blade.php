@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Create Post</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('posts.store') }}" method="POST" class="user">
                @csrf
                <div class="form-group row">
                    <div class="col-sm-6">
                        <select required class="form-control form-control-user" name="category_id">
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <label>Title</label>
                        <input type="text" required class="form-control form-control-user" name="title" placeholder="Title">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <label>Content</label>
                        <textarea required row="3" class="form-control form-control-user" name="content"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
