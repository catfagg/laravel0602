<x-layout>
	<x-slot:title>
		{{ $title }} - site.com
		</x-slot>

		{{ $text }}
		<p>name: {{ $name }}</p>
		<p>surname: {{ $surname }}</p>
		<p class=" {{ $class }} ">age: {{ $age }}</p>
		<p style=" {{ $style }} ">salary: {{ $salary }}</p>
		<p>timestamp: {{ date('d.m.Y') }}</p>

		<input value="{{ $var1 }}">
		<input value="{{ $var2 }}">
		<input value="{{ $var3 }}">
		<a href="{{ $gogl }}">ссылдка</a>
		@foreach ($leha as $elem)
		<p>{{ $loop->count }}</p>
		<p>{{ $elem }}</p>
		{{ $arrcount++ }}
		@endforeach

		@forelse ($city as $elem)
		<p>{{ $elem }}</p>
		@empty
		<p>Москва</p>
		@endforelse
</x-layout>