<?php MessageBox("This process is not fast. Click OK, and wait.", "Information!");
file_delete("level_data.txt");
$src = imagecreatefrompng("image.png");
$r=0;
$g=0;
$b=0;
$w_src = imagesx($src);
$h_src = imagesy($src);
file_put_contents("level_data.txt","<levelXML>\n<info v=\"1.87\" x=\"121.35\" y=\"67.7\" c=\"11\" f=\"t\" h=\"f\" bg=\"1\" bgc=\"16777215\" e=\"1\"/>\n<groups>\n<g x=\"150\" y=\"50\" r=\"0\" ox=\"-150\" oy=\"-50\" s=\"f\" f=\"t\" o=\"100\" im=\"f\" fr=\"f\">",FILE_APPEND);
for( $h = 1; $h <= $h_src; $h+=c("DGW")->text )
{
	for( $w = 1; $w <= $w_src; $w+=c("DGH")->text )
	{
		$rgb = imagecolorat( $src, $w, $h );
		$r = ($rgb >> 16) & 0xFF;
		$g = ($rgb >> 8) & 0xFF;
		$b = $rgb & 0xFF;
		$r=$r*65536;
		$g=$g*256;
		$color=$r+$g+$b;
		if($color == c("ChromaKey")->text){}
		else {
			file_put_contents("level_data.txt", "<sh t=\"0\" i=\"f\" p0=\"",FILE_APPEND);
			file_put_contents("level_data.txt", $w + 3,FILE_APPEND);
			file_put_contents("level_data.txt", "\" p1=\"",FILE_APPEND);
			file_put_contents("level_data.txt", $h +3,FILE_APPEND);
			file_put_contents("level_data.txt", "\" p2=\"",FILE_APPEND);
            file_put_contents("level_data.txt",c("sizex")->text,FILE_APPEND);
            file_put_contents("level_data.txt","\" p3=\"",FILE_APPEND);
            file_put_contents("level_data.txt",c("sizey")->text,FILE_APPEND);
            file_put_contents("level_data.txt","\" p4=\"0\" p5=\"t\" p6=\"f\" p7=\"1\" p8=\"" . $color . "\" p9=\"-1\" p10=\"100\" p11=\"1\"/>",FILE_APPEND);
		}
	}
}
file_put_contents("level_data.txt","\n</g>\n</groups>\n</levelXML>",FILE_APPEND);
MessageBox("Complete!", "Information!");
