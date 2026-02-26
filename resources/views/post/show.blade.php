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

		@if ($year > 0)
		<p>{{ $year }}</p>
		@else
		<p>{{ date('Y') }}</p>
		@endif
		
		@if ($month > 0)
		<p>{{ $month }}</p>
		@else
		<p>{{ date('m') }}</p>
		@endif
		
		@if ($day > 0)
		<p>{{ $day }}</p>
		@else
		<p>{{ date('d') }}</p>
		@endif
		
		{!! $str !!}
		
		{{-- комментарий --}}

		@if ($userAge > 18)
		<p>ыыы</p>
		@elseif ($userAge == 18)
		<p>ууу</p>
		@elseif ($userAge < 18)
		<p>эээ</p>
		@else
		<p>иии</p>
		@endif

		@unless ($userAge >= 18)
		<p>иууу</p>
		@endunless
</x-layout>