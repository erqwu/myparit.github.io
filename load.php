
<!DOCTYPE html>
<html>
<body>
	<textarea id="t">
		<?php
			$mf=fopen("move.txt","r");
			echo fread($mf,filesize("move.txt"));
		?>
	</textarea>
	<button onclick="copy()">copy</button>
	<div id="s"></div>
	<a href="index.html">返回</a>
	<script>
		function copy(){
			var s= document.getElementById('s');
			s.innerHTML="copying";
			var textarea = document.getElementById('t');
			textarea.select();
			document.execCommand('copy');
			s.innerHTML="copy成功";
		}
	</script>
</body>
</html>