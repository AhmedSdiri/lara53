@foreach($users as $user)

<li>{!! $user['fn']!!} {!! $user['ln'] !!}</li>

@endforeach