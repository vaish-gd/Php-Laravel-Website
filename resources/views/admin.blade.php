<!DOCTYPE html>
<html>
<head>
	<script src="{{url('admin.js')}}">

	</script>
	<title>
		</title>
		<link rel="stylesheet" type="text/css" href="{{url('mijares.css')}}">
</head>
<body>
	<h1>  Welcome to admin Console </h1>


	<p>Videos<p>
		Video to be removed
		<input type="number" id="vol" name="vol" min="0" max="4" maxlength="4" size="4">
		<br />
		<br />
		<br />
	<button onclick="removeFromVideosPage()"> Remove 1 video from Videos page</button>



	<button onclick="addFromVideosPage()"> Add 1 video from Videos page</button>

	 <form method="post" enctype="multipart/form-data">
                     <input type="file" name="image" id="image" />
                     <br />
                     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />
                </form>



</body>
</html>
