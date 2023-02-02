

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lorum</title>
    <link rel="stylesheet" type="" href="css/style.css">
</head>
<body>
    <nav class="navbar">
        <div class="navbarContainer container">
            <input type="checkbox" name="" id="">
            <div class="hamburgerLines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <ul class="menuItems">
                <li><a href="/">Home</a></li>
                <li><a href="/fotos.php">Foto's</a></li>
                <li><a href="/blog.php">Blog</a></li>
                <li><a href="/over">Over</a></li>
            </ul>
            <h1 class="navbarText">Lorum</h1>
        </div>
    </nav>
    <br><br><br><br><br><br><br><br>

    <div class="container">
      <h2>Blog</h2>
<?php

$dir = 'blog/';
$files = scandir($dir);
rsort($files);

foreach($files as $file) {
    if(strpos($file, '.txt') !== false) {
      $contents = file_get_contents($dir.$file);
      echo "<div class='blogPost'>";
        echo "<i>Blog ",substr($file, 0, -4), "</i>";
        echo "<br>";
        echo "<br>";
        echo $contents;
        echo "</div>";
        echo "<br>";
    }
}

?>
		    </div>
	    </div>
	</div>
</body>
</html>
