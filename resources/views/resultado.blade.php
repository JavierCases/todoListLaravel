<div>
	<h1>El nombre ingresado es:</h1>
	<ul>	
		@foreach($nombres as $nombre)
			<li>{{ $nombre->title }} , {{ $nombre->description }}, {{ $nombre->date }}, {{ $nombre->isComplete }}, {{ $nombre->id }}, {{ $nombre->user_id }}</li>
		@endforeach
	</ul>
</div>