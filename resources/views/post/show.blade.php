<x-layout>
	<x-slot:title>
		{{ $title }} - site.com
		</x-slot>

		{{ $text }}

		<h3>1.</h3>
		<p>name: {{ $name }}</p>
		<p>surname: {{ $surname }}</p>
		<p>age: {{ $age }}</p>
		<p>salary: {{ $salary }}</p>

		<h3>2.</h3>
		<p class="{{ $class }}">класс</p>

		<h3>3.</h3>
		<p><input value="{{ $var1 }}"></p>
		<p><input value="{{ $var2 }}"></p>
		<p><input value="{{ $var3 }}"></p>

		<h3>4.</h3>
		<p style="{{ $style }}">красный текст ыыы</p>

		<h3>5.</h3>
		<a href="{{ $google_href }}">{{ $google_text }}</a>

		<h3>6.</h3>
		<p>{{ date('d.m.Y') }}</p>

		@foreach ($leha as $elem)
			<p>{{ $loop->count }}</p>
			<p>{{ $elem }}</p>
			{{ $arrcount++ }}
		@endforeach

		<h3>9.</h3>
		@forelse ($city as $elem)
			<p>{{ $elem }}</p>
		@empty
			<p>Москва</p>
		@endforelse

		<h3>10.</h3>
		@forelse ($location as $elem)
			<p>{{ $elem }}</p>
		@empty
			<p>Москва</p>
		@endforelse

		<h3>11.</h3>
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

		<h3>12.</h3>
		{!! $str !!}

		{{-- 13. комментарий --}}

		<h3>14-16.</h3>
		@if ($userAge > 18)
			<p>больше 18</p>
		@elseif ($userAge == 18)
			<p>ровно 18</p>
		@elseif ($userAge < 18)
			<p>меньше 18</p>
		@else
			<p>не знаю</p>
		@endif

		<h3>17.</h3>
		@unless ($userAge >= 18)
			<p>иууу</p>
		@endunless

		<h3>18.</h3>
		@foreach ($numbers as $elem)
			@if ($loop->count > 0)
				@php
					$sum += $elem
				@endphp
			@else
				<p>массив пустой</p>
			@endif
		@endforeach
		<p><b>Сумма элементов массива:</b> {{ $sum }}</p>

		<h3>19-21.</h3>
		<ul>
			@foreach ($numbers as $elem)
				<li><b>{{ $elem }}</b></li>
				<li>{{ $elem }} * {{ $elem }} = {{ $elem * $elem }}</li>
				<li>sqrt({{ $elem }}) = {{ sqrt($elem) }}</li>
			@endforeach
		</ul>

		<h3>24.</h3>
		<ul>
			@foreach ($numbers as $elem)
				@if ($elem % 2 == 0)
					<li>{{ $elem }}</li>
				@else
					<p>{{ $elem }}</p>
				@endif
			@endforeach
		</ul>

		<h3>25.</h3>
		@if (is_array($data))
			<ul>
				@foreach ($data as $elem)
					<li>{{ $elem }}</li>
				@endforeach
			</ul>
		@else
			<p>{{ $data }}</p>
		@endif

		<h3>26.</h3>
		<table border="1">
			@foreach ($dmassive as $row)
				<tr>
					@foreach ($row as $cell)
						<td>
							{{ $cell }}
						</td>
					@endforeach
				</tr>
			@endforeach
		</table>

		<h3>27.</h3>
		<ul>
			@foreach ($employees as $employee)
				<li>
					{{ $employee['name'] }} {{ $employee['surname'] }} {{ $employee['salary'] }}
				</li>
			@endforeach
		</ul>




		<h3>30.</h3>
		<ul>
			@foreach ($strings as $elem)
				{{ $i = 0 }}
				{{ $i++ }}
				<li>{{ $i }}. {{ $elem }}</li>
			@endforeach
		</ul>

		<h3>34.</h3>
		@foreach ($numbers as $elem)
			{{ $elem }}
			@if ($elem == 0)
				@break
			@endif
		@endforeach

		<h3>35.</h3>
		<ul>
			@foreach ($numbers as $elem)
				@if ($elem != 0)
					<li>{{ $elem }}</li>
				@endif
			@endforeach
		</ul>

		<h3>36.</h3>
		@for ($i = 1; $i < 11; $i++)
			<p>{{ $i }}</p>
		@endfor
</x-layout>