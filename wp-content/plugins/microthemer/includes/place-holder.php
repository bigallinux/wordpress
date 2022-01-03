<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">

	<title>Microthemer - site loading</title>

    <?php
    $isDark = isset($_GET['mt_dark_mode']);
    $bgColor = $isDark ? '#383838' : '#ffffff';
    $logo = $isDark ? 'MT-logo-dark' : 'MT-logo';
    ?>

	<style>
		body {
			background-color: <?php echo $bgColor; ?>;
			height: 100vh;
			margin: 0;
			display: grid;
			place-items: center;
		}
		.branding {
			max-height: 100%;
			padding:60px;
			width:80px;
			background:url(../images/tail-spin.svg) no-repeat center center / contain;
		}
	</style>

</head>
<body>

<div class="branding">
	<img src="../images/<?php echo $logo; ?>.svg" alt="Microthemer loading" />
</div>

</body>
</html>