<?php session_start(); 

?>
<!DOCTYPE>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Devleweb</title>
  <link rel="stylesheet" href="style.css">
  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
	$(document).ready(function() {
		$('.scrollTo').click( function() { 
			var page = $(this).attr('href'); 
			var speed = 800; 
			$('html, body').animate( { scrollTop: $(page).offset().top }, speed ); 
			return false;
		});
$('.scrollTo').click(function(){
         $('.scrollTo').removeClass('selected');
    $(this).addClass('selected');
    });

	});
    
</script>

</head>	
<body>
  
  <header>
  
  
<div id="titre-site">DevLeWeb</div>
  <nav>
		<ul>
			<li class="liMenu"><a class="scrollTo" href="#section1">Section 1</a></li>
			<li class="liMenu"><a class="scrollTo" href="#section2">Section 2</a></li>
			<li class="liMenu"><a class="scrollTo" href="#section3">Section 3</a></li>
			<li class="liMenu"><a class="scrollTo" href="#section4">Section 4</a></li>
		</ul>
  
  
  </nav>
  <div id="divConnexion"><?php 
						if (isset($_POST['login'])){
						
						$_SESSION['identifiant']=$_POST['login'];
						echo $_SESSION['identifiant'] .' est connecté au site</br>
						<a href="?deco"> Se deconnecter</a>';
						}
						
						
						else{
						echo'<form id ="formIdentification" method="post" action="">
                          
                          <label for="pseudo" id="textlogin">Login:</label>
                           <input type="text" name="login" id="ps" size="10" />
                          
                          <label for="motdepasse" id="textMdp">Mdp :</label>
                          <input type="password" name="password" id="mdp" size="10" />
                         
                          <input type="submit" id="butOkIden"  value="OK" />
                          
                         </form>'; } ?>
  
  </div>
  
  
  </header>
	
	<section class="section-page" id="section1"><div class="titreSection"></div>
	</section>
	
	<section class="section-page" id="section2"><div class="titreSection"></div>
	
	</section> 
	
	<section class="section-page" id="section3"><div class="titreSection"></div></section>
	<section class="section-page" id="section4"><div class="titreSection"></div></section>
 <footer>
 </footer>

</body>
</html>