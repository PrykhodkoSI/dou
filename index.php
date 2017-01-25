<?php //https://dou.ua/lenta/news/ ?>


<?php
$content = file_get_contents("https://dou.ua/lenta/");
$regularexp = '/<article[\s\S]*?<h2[\s\S]*?>[\s\S]*?href="(.*)">\s+(.*)\s+<[\s\S]*?<\/h2>[\s\S]*?<p[\s\S]*?>\s+([\s\S]*?)</';
preg_match_all($regularexp, $content, $match);

//print_r($match);
$count = count($match[1]);
for($i=0; $i<$count; $i++ )
{
    echo "<a href='{$match[1][$i]}'><h1>{$match[2][$i]}</h1></a>";

    echo "<p>{$match[3][$i]}</p>";
}

//print "<pre>";
//print_r($match);
//print "</pre>";
//echo "<p>$match[1]</p>";
?>