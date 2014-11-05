<html>
<head>
<title>Character</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/public/css/character_page_style.css">

</head>
<body>
	<div id= "pageContainer">
	<div id= "formContainer">
	<h1>New Character</h1>
<?php echo validation_errors(); ?>

<?php echo form_open('character'); ?>
		I am a 
		<select name="descriptor">
			<?php $this->load->view($optionsPartial, ["data" => $descriptors]);?>
		</select>
		<select name="type">
			<?php $this->load->view($optionsPartial, ["data" => $types]);?>
		</select>
		, who
		<select name="focus">
			<?php $this->load->view($optionsPartial, ["data" => $foci]);?>
		</select>
		<button><a href="#"></a></button>
	</form>
	</div>
	<img src="/public/media/Numenera_Logo.png" id= "logo" alt= "Numenera Logo" class= "img-responsive">
	</div>
</body>
</html>