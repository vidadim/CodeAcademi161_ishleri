<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="{{ URL::to('imageSave') }}" method="post" enctype="multipart/form-data">
	<input type="file" name="file">
	<input type="submit">
	<input type="hidden" name="_token" value="{!! csrf_token() !!}">
</form>

</body>
</html>