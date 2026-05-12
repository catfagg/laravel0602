<!DOCTYPE html>
<html>

<head>
	<title>posts</title>
</head>

<body>
	<table border=1>
		@foreach ($posts as $post)
			<tr>
				<td><a href="{{ $post->id }}">{{ $post->id }}</a></td>
				<td>{{ $post->title }}</td>
			</tr>
		@endforeach
	</table>
	<p><a href="deleted">Корзина</a></p>
</body>

</html>