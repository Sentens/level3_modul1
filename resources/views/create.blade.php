@extends('layout')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-5">
			<h3>Добавить изображение</h3>
			<form action="/store" method="POST" enctype="multipart/form-data">
				{{csrf_field()}}
				<div class="form-control">
					<input type="file" name="image">
				</div>
				<button type="submit" class="btn btn-success">Добавить</button>
			</form>
		</div>
	</div>
</div>
@endsection