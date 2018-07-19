@extends('layouts.app')

@section('content')	
<div class="col-md-8 col-md-offset-2">
	<h3>Data Buku</h3>	
	<table class="table" id="books">
		<thead>
			<tr>
				<th>Nama</th>
				<th>Genre</th>
				<th>Harga</th>
			</tr>
		</thead>
	</table>
</div>
@endsection

@section('scripts')	
<script type="text/javascript">
	$(function(){
		$("#books").DataTable({
			processing: true,
	        serverSide: true,
	        ajax: '{!! route('book.data') !!}',
	        columns: [
	            { data: 'nama', name: 'nama' },
	            { data: 'genre', name: 'genre' },
	            { data: 'harga', name: 'harga' }
	        ]
		});
	});	
</script>
@endsection

