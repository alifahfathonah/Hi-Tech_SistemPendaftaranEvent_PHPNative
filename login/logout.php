<?php
session_start();
session_destroy();

?>

<script type="text/javascript">
	alert("Anda Berhasil Logout! ");
	document.location = '/hi-tech';
</script>
<?php
exit();
?>
