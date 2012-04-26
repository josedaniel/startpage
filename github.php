<?php $output = shell_exec('git pull'); ?>
<style>
	body{
		background-color: #1A1A1A;
  		color:#fff;
	}

	pre{
		padding:20px;
	}
</style>
<body>
	<pre><?= $output ?></pre>
</body>