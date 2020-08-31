<html>
<head>
<title>Pixelsuft HW picture</title>
</head>
<body>
<?php
header("Counter-type: image/png");
$src = imagecreatefrompng("image.png");
$r=0;
$g=0;
$b=0;
$w_src = imagesx($src);
$h_src = imagesy($src);
echo "<levelXML>\n<info v=\"1.87\" x=\"121.35\" y=\"67.7\" c=\"11\" f=\"t\" h=\"f\" bg=\"1\" bgc=\"16777215\" e=\"1\"/>\n<groups>\n<g x=\"150\" y=\"50\" r=\"0\" ox=\"-150\" oy=\"-50\" s=\"f\" f=\"t\" o=\"100\" im=\"f\" fr=\"f\">";
for( $h = 1; $h <= $h_src; $h++ )
{ 
	for( $w = 1; $w <= $w_src; $w++ )
	{
		$rgb = imagecolorat( $src, $w, $h );	
		$r = ($rgb >> 16) & 0xFF;
		$g = ($rgb >> 8) & 0xFF;
		$b = $rgb & 0xFF;
		$r=$r*65536;
		$g=$g*256;
		$color=$r+$g+$b;
		if($color == 16777215){}
		else {
			echo "<sh t=\"0\" i=\"f\" p0=\"";
			echo $w + 3;
			echo "\" p1=\"";
			echo $h +3;
			echo "\" p2=\"9\" p3=\"7\" p4=\"0\" p5=\"t\" p6=\"f\" p7=\"1\" p8=\"" . $color . "\" p9=\"-1\" p10=\"100\" p11=\"1\"/>";
		}
		$w++; //downgrader (width /2)
	}
	$h++; //downgrader (height/2)
}
echo "\n</g>\n</groups>\n</levelXML>";
?>
</body>
</html>
