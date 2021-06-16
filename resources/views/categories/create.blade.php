@extends('layouts.app')
@section('content')

<div class="container">
    <div class="card">
        <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Create Category</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="{{route('categories.store')}}" method="post" class="user">
                    @csrf
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="text" class="form-control form-control-user" name="name" placeholder="write..." required>
                            <button type="submit" class="btn btn-primary btn-user btn-block">Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
