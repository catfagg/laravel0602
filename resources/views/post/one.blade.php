<!DOCTYPE html>
<html>

<head>
	<title>posts</title>
</head>

<body>
	<table border=1>
		<tr>
			<td>{{ $post->id }}</td>
		</tr>
		<tr>
			<td>{{ $post->title }}</td>
		</tr>
		<tr>
			<td>{{ $post->description }}</td>
		</tr>
		<tr>
			<td>{{ $post->text }}</td>
		</tr>
		<tr>
			<td>{{ $post->date }}</td>
		</tr>
	</table>
	<p><a href="edit/{{ $post->id }}">Редактировать</a></p>

	<p><a href="del/{{ $post->id }}">Удалить</a></p>

	<p><a href="../post/all">Все статьи</a></p>
</body>

</html>