<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="upload2.css">
	<title>Document</title>
</head>
<body>
	
	<div class="ontainer">
		<input type="file" id="file" accept="image/*" hidden>
		<div class="img-area" data-img="">
			<i class='bx bxs-cloud-upload icon'></i>
			<h3>Upload Image</h3>
			<p>Image size must be less than <span>2MB</span></p>
		</div>
		<button class="select-image">Select Image</button>
		<div><button class="ipload-image">Upload image</button>
	</div>


	
	<script src="upload.js"></script>
</body>
</html>