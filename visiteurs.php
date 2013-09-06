<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<script>
    function popup()
    {
        alert("Vous utilisez Internet Explorer");
    }
</script>
<body>
<?php

if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
    echo '<script>popup()</script>';
}
$fp = fopen("pays.txt","r");
while(!feof($fp)) {
    $page = fgets($fp, 4096);
    $affiche .= $page;
    $affiche .= '</br>';
}
echo 'Voici les Pays: </br>' .$affiche;
fclose($fp);
?>
<img src="http://fc06.deviantart.net/fs70/f/2010/363/c/c/starcraft_ii_battlecruiser_by_xcreepingdeathx-d35xnar.jpg" width="854" height="480" >
</body>