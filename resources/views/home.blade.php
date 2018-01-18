@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                    <a href="">Company<a/>
                    <a href="">Models</a>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                  hi modified something by kaalidoss
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
