@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Data Table Demo</div>
                    <div class="panel-body">
                        <form method="GET" action="{{ route('user-lists') }}">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="search" class="form-control" placeholder="Enter User Name or Email For Search" value="{{ old('search') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <button class="btn btn-success">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <table class="table table-hover table-bordered table-striped datatable" style="width:100%">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($users->count())
                                @foreach($users as $key => $item)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="4">There are no data.</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection