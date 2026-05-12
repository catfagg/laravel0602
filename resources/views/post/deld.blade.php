<!DOCTYPE html>
<html>

<head>
	<title>posts</title>
</head>

<body>
	<table border=1>
		@foreach ($posts as $post)
			<tr>
				<td>{{ $post->id }}</td>
				<td>{{ $post->title }}</td>
				<td>{{ $post->description }}</td>
				<td>{{ $post->date }}</td>
				<td>{{ $post->deleted_at }}</td>
				<td><a href="rest/{{ $post->id }}">Восстановить</a></td>
			</tr>
		@endforeach
	</table>

	<p><a href="all">Все посты</a></p>
</body>

</html>