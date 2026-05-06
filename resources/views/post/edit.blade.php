<form action="" method="POST">
	@csrf
	<table>
		<tr>
			<td><input name="title" value="{{ $post->title }}"></td>
		</tr>
		<tr>
			<td><input name="description" value="{{ $post->description }}"></td>
		</tr>
		<tr>
			<td><input name="date" value="{{ $post->date }}"></td>
		</tr>
		<tr>
			<td><textarea name="text">{{ $post->text }}</textarea></td>
		</tr>
		<tr>
			<td><input name="submit" type="submit"></td>
		</tr>
		<tr>
			<td><a href="../{{ $post->id }}">Назад</a></td>
		</tr>
	</table>
</form>