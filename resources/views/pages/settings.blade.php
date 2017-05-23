@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                   <h2>Hello !  {{ $myname }} </h2>
                   
                   <h3>{{ $married }}</h3>
                   <h3>{{ $test }}</h3>
                    <h3>{{ $age }}</h3>
                     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
