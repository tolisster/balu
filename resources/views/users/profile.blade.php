@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<p>Hello! My name is {{ $user->first_name }}</p>
	</div>
</div>
@endsection
