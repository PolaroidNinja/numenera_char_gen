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
			<?php foreach($descriptors as $key => $item):?>
				<option value="<?=$key; ?>"><?=$item->name; ?></option>
			<?php endforeach; ?>
		</select>
		<select name="type">
			<option>Glaive</option>
			<option>Nano</option>
			<option>Jack</option>
		</select>
		, who
		<select name="focus">
			<option>Bears a Halo of Fire</option>
			<option>Fuses Flesh and Steel</option>
			<option>Wears a Sheen of Ice</option>
		</select>
		<button>Continue > </button>
	</form>
</body>
</html>