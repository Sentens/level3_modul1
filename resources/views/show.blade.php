@extends('layout')

@section('title')
Просмотр
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 d-flex justify-content-center">
			<img src="/{{$imagesInView[0]->image}}" alt="" class="img-thumbnail">
		</div>
	</div>
</div>
@endsection