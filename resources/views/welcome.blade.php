@extends('layout')

@section('title')
Главная
@endsection

@section('content')
<div class="container">
	<div class="row">
		@foreach($imagesInView as $image)
		<div class="col-md-3">
			<img src="/{{$image->image}}" alt="" class="img-thumbnail">
			<a href="/show/{{$image->id}}" class="btn btn-info my-btn">Просмотреть</a>
			<a href="/edit/{{$image->id}}" class="btn btn-warning my-btn">Изменить</a>
			<a href="/delete/{{$image->id}}" class="btn btn-danger my-btn">Удалить</a>
		</div>
		@endforeach
	</div>
</div>
@endsection