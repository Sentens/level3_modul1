@extends('layout')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-5">
			<h3>Редактировать изображение</h3>
			<div class=""></div>
			<img src="/{{$imagesInView[0]->image}}" alt="" class="img-thumbnail">
			<form action="/update/{{$imagesInView[0]->id}}" method="POST" enctype="multipart/form-data">
				<div class="form-control">
					{{csrf_field()}}
					<input type="file" name="image">
				</div>
				<button type="submit" class="btn btn-success">Редактировать</button>
			</form>
		</div>
	</div>
</div>
@endsection