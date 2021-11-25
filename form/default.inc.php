<style type="text/css">

*{
    margin: 0;
    padding: 0;
    border: 0;
}

html,
body{
    background: #f5a4dc;
}

nav ul{
    list-style-type: none;
}

/* This adds margin on the left and right of each li tag. I also decreased the size of your links to give more weight to your name */
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

</style>


<header>
    <nav>
      <ul>
          <li class="sharolayn"><a href="index.html">Sharolayn</a></li>
      </ul>
    </nav>
</header>

<div class="container-form">
    <h1>Something went wrong with you submission.</h1>
    <p>Please try again.</p>
</div>

