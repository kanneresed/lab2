<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<script>
    function popup()
    {
        alert("Vous utilisez Internet Explorer");
    }
</script>
<body><?php
/**
 * Created by JetBrains PhpStorm.
 * User: administrateur
 * Date: 13-09-03
 * Time: 09:00
 * To change this template use File | Settings | File Templates.
 */
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
</body>