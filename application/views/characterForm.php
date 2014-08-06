<html>
<head>
<title>Character</title>
</head>
<body>
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
		<button>Continue > </button>
	</form>
</body>
</html>