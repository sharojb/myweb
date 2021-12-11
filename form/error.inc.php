<style type="text/css">

*{
    margin: 0;
    padding: 0;
    border: 0;
}

html,
body{
    background: #64002a;
}

nav ul{
    list-style-type: none;
}

nav ul li {
    display: inline;
    font-family: 'Over the Rainbow', cursive;
    font-size: 40px;
    margin: 0 20px;
}

a:link {
    text-decoration: none;
    z-index: 100;
    color: white;
    font-family: 'Over the Rainbow', cursive;
}

a:visited {
    color: white;
}

a:active {
    color:gray;
}

.sharolayn{
    padding: 5px 20px 15px 7px;
    font-size: 80px;
}

a:hover{
    animation: shake 0.82s cubic-bezier(.36,.07,.19,.97) both;
    transform: translate3d(0, 0, 0);
    backface-visibility: hidden;
    perspective: 1000px;
}

.body{
    position: relative;
    background-size: contain;
    background-attachment: fixed;
    z-index: 0;
}

.contact-form-er {
    background: #42664e; 
    padding: 10px 20px 10px;
    max-width: 500px;
    border-radius: 8px;
    color: white;
    font-family: sans-serif;
    margin: 50px auto;
    text-align: center;
}

h1{
    font-family: 'Over the Rainbow', cursive;
    font-size: 38px;
    color:black;
    padding: 0 0 10px;
}

ul.error{
    display: block;
    text-align:center;
    margin: 15px 0 15px;
    list-style-type: none;
    color: black;
}

.missing{
    margin: 0 0 10px;
}

a.em{
    font-size: 25px;
    color: white;
    text-decoration: underline;
}

footer{
    text-align: center;
    color: white;
    background: black;
    padding: 10px 0;
    font-family: sans-serif;
    font-size: 12px;
    height: 62px;
    padding-top: 20px;
}

footer a{
    color: white;
    font-size: 25px;
    margin: 0 5px;
    transition: .3s;
}

footer a:hover{
    color: gray;
    transition: .3s;
}
</style>

<head>
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/396d298c48.js" crossorigin="anonymous"></script>

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Over+the+Rainbow&display=swap" rel="stylesheet">
</head>

<header>
    <nav>
      <ul>
          <li class="sharolayn"><a href="index.html">Sharolayn</a></li>
      </ul>
    </nav>
</header>

<div class=contact-form-er>

	<h1>Missing Fields</h1>
	<p class="missing">Sorry, you have not completed all of the required fields.</p>
	<p class="missing">Please complete the following required fields:</p>

	<ul class="error">
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li><strong>" . $this->missing_required_fields[$i]['title'] . "</strong></li>\n";
		}
	?>
	</ul>

	<h2><a class="em" href="#" onClick="history.go(-1)">Complete Form</a></h2>
</div>

<footer> 
      <p>Follow Me</p>
      <p><a href="https://www.instagram.com/psycharte/?hl=en" target="_blank"><i class="fab fa-instagram-square"></i></a>
        <a href="https://www.facebook.com/Psychartes/" target="_blank"><i class="fab fa-facebook-square"></i></a>
      </p>
      <p class="website">Website by Sharolayn Jarque</p>
</footer>
