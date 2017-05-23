@extends('layouts.app')

@section('content')

<div class="col-md-6 col-md-offset-3">
<ul class="list-group">
  @foreach($users as $user)
 <li class="list-group-item" style="margin-top:20px">
 <span>
 {{ $user->name }}
 </span>
 <span class="pull-right clearfix">
   Joined {{ $user->created_at->diffForHumans()}}
   <button class="btn btn-xs btn-primary">Follow</button>
 </span>
 </li>
 </ul>
@endforeach

 @endsection
