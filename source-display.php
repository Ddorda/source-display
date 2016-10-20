<?php
function highlight_num($file)
{
  for ($i = 1; $i <= count(file($file)); $i++) {
        $lines = $lines."<a name='$i'>$i</a><br />";
  }
  $content = highlight_file($file, true);


  echo ' 
    <style type="text/css"> 
        .num { 
        float: left; 
        color: gray; 
        font-size: 13px;    
        font-family: monospace; 
        text-align: right; 
        margin-right: 6pt; 
        padding-right: 6pt; 
        border-right: 1px solid gray;
        line-height: 15px;}

        body {margin: 0px; margin-left: 5px;} 
        td {vertical-align: top;} 
        code {white-space: nowrap;}
        span {line-height: 15px;}
    </style>';



    echo "<table><tr><td class=\"num\">$lines</td><td>$content</td></tr></table>";
}
?>
<html>
<body>
<?php
$path = $_SERVER['DOCUMENT_ROOT'].$_SERVER['SCRIPT_NAME'];
if (file_exists($path)) {
        highlight_num($path);
}
else {
        echo 'No input file specified.';
}
?>
</body>
</html>
