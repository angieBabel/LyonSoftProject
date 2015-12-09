<?php include_once("sections/header.php") ?>

  <body class="borde">

  <div class="wrapper">
	<div class="container">
		<h1>Welcome</h1>
<!-- action="index.php/uploader/sesion" method="POST" -->
		<form  action="index.php/welcome/panelPrincipal" method="POST">
			<input type="text" placeholder="Username" id="login">
			<input type="password" placeholder="Password" id="login">
			<button type="submit" id="login-button" >Login</button>
		</form>
	</div>

<!-- 	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul> -->
</div>


  </body>
</html>
<!-- Si se cargan los efectos de JS no hace la acción, quizá sería cambiar la acción en la funcion JS
<?php  //include_once ("/sections/footer.php") ?>
 -->
