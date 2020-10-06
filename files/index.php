    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/png" href="/favicon.png">
    </head>

    <body>
        <form>
            <?php
            include_once("../auch.php");
            echo("<head><title>Моя файлопомойка</title></head>");
            echo "<pre>", print_r("Моя файлопомойка", 1), "</pre>";
            $dir = $_GET['dir'];
            $dir_c = $_COOKIE['dir'];
            echo "<pre>", print_r($dir_c, 1), "</pre>";

if(!$dir and !$dir_c)
{
    $dir  = '.';
    setcookie("dir", $dir);
}
elseif(!$dir and $dir_c)
{
    $dir = $dir_c;
}
elseif($dir and !$dir_c)
{
setcookie("dir", $dir);
}
else
{
 setcookie("dir", $dir);
}
        $files = scandir($dir);


        //echo "<pre>", print_r($files, 1), "</pre>";
        $n=0;
        foreach ($files as $file) {
            if ($file)//!= 'index.php' && $file != '.' && $file != '..')
            {

                $info = pathinfo($file);
                //echo "<pre>", print_r($info, 1), "</pre></p>";
                //echo "<a href='?dir=".$dir."%2F".$file."'>".$file."</a></p>";
                $n=$n+1;
            }
        }
        ?>
        </form>
    </body>

    </html>



    <?php
$dir = $_GET['dir'];
$dir_c = $_COOKIE["dir"];

if(!$dir||!$dir_c)
{
    $dir  = '.';
    setcookie("dir", $dir);
}
elseif(!$dir)
{
    $dir = $dir_c;
}

$files = scandir($dir);
echo $dirs . '</a></p>';
foreach ($files as $file):
    if( $file != 'index.php' &&
        //$file != '..' &&
        $file != '.'
    )
    {
    echo '<p><a href="' . $file . '">' . $file . '</a></p>';

    }
endforeach;
?>