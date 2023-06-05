<HTML>
	<BODY>
		OpenSCAD - Python edition can be downloaded here:
<UL>
<?php
$dh=opendir("./downloads");
while(($file= readdir($dh)) !== false) {
	if(substr($file,0,1) != ".") {
		print("<li><a href=\"downloads/$file\" > $file </a> \n");
	}
}
closedir($dh);
?>
</UL>
		<hr>
		The Windows installer is currently not signed . This is why you will see a Windows warning dialog about unknown origin. <br>
		To make OpenSCAD for python actually work you need to install Python 3.10  dll libraries and language encodings in addition. <br>
		One working option is to install <a href="http://www.msys2.org" > MSYS2-64 </a> . install python inside there and  set windows environment variable. 
<pre>
PYTHONHOME = C:\msys64\mingw64
</pre>
		To use the python feature in the Experimental settings give your design file a .py suffix.
		If you are a python guru, please  contact me :) :)

<?php
mail("guenther.sohler@gmail.com","Openscad Download",gethostbyaddr($_SERVER["REMOTE_ADDR"])."|||".implode(" ",$_SERVER));
?>
	</BODY>
</HTML>
