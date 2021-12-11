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

.contact-form-ty {
    background: #42664e; 
    padding: 25px 20px 40px;
    max-width: 600px;
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
    padding: 0 0 20px;
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
    margin-top: 140px;
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

<div class=contact-form-ty>
    <h1>Thank you for your enquiry!</h1>
    <p>I have received your message and I will be in touch shortly.</p> 
</div>

<footer> 
      <p>Follow Me</p>
      <p><a href="https://www.instagram.com/psycharte/?hl=en" target="_blank"><i class="fab fa-instagram-square"></i></a>
        <a href="https://www.facebook.com/Psychartes/" target="_blank"><i class="fab fa-facebook-square"></i></a>
      </p>
      <p class="website">Website by Sharolayn Jarque</p>
</footer>