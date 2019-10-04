@extends('layouts.app')

@section ('content')

<div class = "container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Berita</div>
					<div class="card-body">
						<form method="POST" action="{!! route('berita.store') !!}">
							@include('berita.form');
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('scripts')
<script src="https://cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>
<script >
	$(document).ready(function(){
		CKEDITOR.replace( 'isi' );
});

</script>
@endsection