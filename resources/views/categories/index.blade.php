@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Category</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            @can('store-categories')
                                <th class="btn btn-default"><a href="{{route('categories.create')}}"> +(New)</a></th>
                            @endcan
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <th>{{$loop -> index+1}}</th>
                            <th>{{$category -> name}}</th>
                            <td>
                                <div class="row">

                                    <div class="col-lg-1 col-sm-2">
                                        @can('update-categories')
                                            <a class="btn btn-outline-primary btn-sm" href="{{ route('categories.edit', $category->id) }}">Edit</a>
                                        @endcan
                                    </div>
                                    <div class="col-lg-1 col-sm-2">
                                        @can('destroy-categories')
                                            <form action="{{ route('categories.destroy', $category->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                                            </form>
                                        @endcan
                                    </div>
                                </div>
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
