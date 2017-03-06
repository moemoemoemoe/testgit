@extends('layouts.app')
@section('content')

<div id="container">
	<div  class="row">
		<form method="POST" action="{{ action('BookController@store') }}">
			{{ csrf_field() }}
			<div class="col-md-4">
					<input name="title" type="text" class="form-control"  placeholder="Book Title">
				</div>
				<div class="col-md-4">
					<textarea name="content" class="form-control" placeholder="Book Description"></textarea>
				</div>
				<div class="col-md-4">
					<input type="submit" class="btn" value="Save">
				</div>
		</form>
	</div>
</div>

@endsection

