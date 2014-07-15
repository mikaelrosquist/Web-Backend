<?php 
header("Content-type: multipart/x-mixed-replace; boundary=III");
echo "\n--III\n";

$cd = 9;

while ($cd > 0) {
    displayTime($cd);
    $cd--;
    sleep(1);

    displayImage();
    $cd--;
    sleep(1);

    displayHtml($cd);
    $cd--;
    sleep(1);
} 
echo "--III--\n";

function displayTime($cd) {
    echo "Content-type: text/plain\n\n";
    echo "Time: " . date("D d M Y H:i:s") . "\n";
    echo "Countdown: $cd";
    
    echo "--III\n";
    ob_flush();
    flush();
}

function displayImage() 
{ 
    $imagepath = "earth.png";
    $image = imagecreatefrompng($imagepath);
    echo "Content-type: image/png\n\n";
    imagepng($image);
   
    echo "--III\n";
    ob_flush();
    flush();
} 

function displayHtml($cd)
{
    echo "Content-type: text/html\n\n";
    echo "<b>Time: " . date("D d M Y H:i:s") . "</b><br>";
    echo "<b>Countdown: " . $cd . "</b>"; 
    
    echo "--III\n";
    ob_flush();
    flush();
}
?>