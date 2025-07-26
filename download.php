<?php
$root = $_SERVER["DOCUMENT_ROOT"];
$dat = date("Y-m-d H:i:s");
?>
<html>
	<head>
  	<title>Python | OpenSCAD</title>
    <meta name="description" content="Work more quickly with OpenSCAD, using Python.">
    <script src="general.js" type="text/javascript"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&family=Source+Sans+3:wght@400;600&display=swap" rel="stylesheet">
    <style>
      body {
        margin: 0;
        padding: 0;
      }

      header {
        padding-top: 2cm;
        padding-bottom: 1cm;
        font-size: 3em;
        text-align: center;
        font-family: 'Play', sans-serif;
        font-weight: 400;
        background-color: rgb(43, 91, 132);
        color: white;
        border-bottom: 1px solid rgb(68, 68, 68);
      }

      main {
        font-family: 'Source Sans 3', sans-serif;
        font-weight: 400;
        font-size: 16px;
        margin: 1cm 1cm;
      }

      pre {
        overflow-x: scroll;
        overflow-y: hidden;
      }

      .code {
        font-size: 14px;
      }

      .equation {
        display: flex;
        gap: 0.5em;
        align-items: center;
        justify-content: center;
      }

      header p {
        font-size: 0.5em;
      }

      .block {
        border-top: 4px solid #75a8d3;
        padding-bottom: 1cm;
        width: calc(50% - 0.5cm);
      }

      @media(max-width: 720px) {
        .block {
          width: 100%;
        }
      }

      @media(min-width: 1280px) {
        .block {
          width: calc(50% - 0.5cm);
        }
      }

      .features {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
      }

      .features .micro-block {
        width: calc(100% - 0.5cm);
      }

      @media(max-width: 720px) {
        .features .micro-block {
          width: 100%;
        }
      }

      @media(min-width: 1280px) {
        .additional-features {
          width: 100%;
        }
        .features .micro-block {
          width: calc(50% - 0.5cm);
        }
      }

      .block > div:nth-of-type(1) {
        padding-top: 0.5em;
        font-size: 1.5em;
      }

      .micro-block {
        border-top: 2px solid #75a8d3;
        margin-top: 0.5em;
        padding-bottom: 0.5cm;
      }

      .micro-block > div:nth-of-type(1) {
        padding-top: 0.5em;
        font-size: 1.25em;
      }
    </style>
  </head>
	<body>
    <header>
      <div class="equation">
    		<img src="pictures/logo_python.png" height=120/>
    		<span>+</span>
    		<img src="pictures/logo_openscad.png" height=120/>
    		<span>=</span>
    		<img src="pictures/plogo.PNG" height=120/>
  		</div>
      <div>Python | OpenSCAD</div>
      <p style="margin: 1cm;">Leverage one of the world's most popular programming languages to express parametric 3D models.</p>
    </header>

    <main>
    <div style="display: flex; flex-wrap: wrap; justify-content: space-between;">
      <div class="block">
        <div>Python OpenSCAD Installers</div>
        <div>
<UL>
<?php
$files=array();
$dh=opendir("./downloads");
while(($file= readdir($dh)) !== false) {
	if(substr($file,0,1) != ".") {
		$files[-filemtime("./downloads/$file")] = $file; # latest files first
	}
}
closedir($dh);
ksort($files);

print("<TABLE BORDER=1>\n");
printf("<TR><TD> Installer </TD><TD> Description </TD> <TD>Size/MB</TD>\n");
for($j=0;$j<5;$j++) {
	if($j == 0) {
		$desc="Windows Installer";
	}
	if($j == 1) {
		$desc="Linux installation package";
	}
	if($j == 2) {
		$desc="MAC Disc Image";
	}
	if($j == 3) {
		$desc="Linux AppImage";
	}
	if($j == 4) {
		$desc="Fedora/CentOS RPM Package";
	}
	print("<TR><TD colspan=3><center>$desc</center></TD></TR>\n");
	foreach($files as $file) {
		$print=0;
		$desc="Created recent installer";
		$file_check = str_replace(".","-",$file);
		if(str_contains($file_check,"2023-10-08")) { $desc="Legacy old version"; }
		if(str_contains($file_check,"20241229")) { $desc="1st rpm installer"; }
		if(str_contains($file_check,"2024-12-29")) { $desc="Version with SDF features enabled"; }
		if(str_contains($file_check,"2025-02-16")) { $desc="1st success on Raspberry PI"; }
		if(str_contains($file_check,"2025-03-18")) { $desc="python import path corrected"; }
		if(str_contains($file_check,"2025-03-29")) { $desc="1st support for interactive dragging"; }
		if(str_contains($file_check,"2025-03-19")) { $desc="pythonscad accepts defines on Commandline "; }
#		if(str_contains($file_check,"2025-04-02")) { $desc="Resolved warning when exporting 3mf under windows"; }
		if(str_contains($file_check,"2025-04-13")) { $desc="nimport working again"; }
		if(str_contains($file_check,"2025-05-02")) { $desc="2D colored render, preliminary"; }
		if(str_contains($file_check,"2025-05-09")) { $desc="Fixed Bug & segfault with rotextrude"; }
		if(str_contains($file_check,"2025-05-15")) { $desc="Roof is activated again. Script will now implicitley union all show() contents"; }
		if(str_contains($file_check,"2025-05-20")) { $desc="nimport fixed, resolved random show() crashes"; }
		if(str_contains($file_check,"2025-06-04")) { $desc="osuse crash fixed"; }
		if(str_contains($file_check,"2025-06-05")) { $desc="Added dot(), cross() and norm() function"; }
		if(str_contains($file_check,"2025-06-17")) { $desc="No external python required, ToggleButtons for Handle and Measure"; }
		if(str_contains($file_check,"2025-06-26")) { $desc="Wrap function can warp arbritary shape"; }
		if(str_contains($file_check,"2025-07-04")) { $desc="Filleting greatly improved"; }
		if(str_contains($file_check,"2025-07-11")) { $desc="Wrap and handle bugfixes"; }
		if(str_contains($file_check,"2025-07-15")) { $desc="Bugixes, objects iteratable"; }
		if(str_contains($file_check,"2025-07-15")) { $desc="colorful polyhedron and surface function and textures"; }
		$size = round(filesize("downloads/$file")/(1024*1024));
		if(strpos($file,"tar.gz") !== false && $j == 1) { $print=1; } 
		if(strpos($file,".exe") !== false && $j == 0) { $print=1; }
		if(strpos($file,".dmg") !== false && $j == 2) { $print=1; }
		if(strpos($file,".AppImage") !== false && $j == 3) { $print=1; }
		if(strpos($file,".rpm") !== false && $j == 4) { $print=1; }
		if($print == 1) {
			printf("<TR>\n");
			printf("<TD> <a href=\"https://www.pythonscad.org/downloads/$file\" > $file </a> </TD>\n");
			printf("<TD> $desc </TD> \n");
			printf("<TD> <center> $size </center> </TD>  \n");
			printf("</TR>\n");
		}
	}
}
print("</TABLE\n");
?>
</UL>
        </div>
      </div>
      <div class="block">
	<div>Windows Installation Instructions</div>
The Windows installer is currently not signed . This is why you will see a Windows warning dialog about unknown origin. <br>
		To make OpenSCAD for python actually work you need to install Python 3.11. To Make it work follow these steps: <br> <p>
<li> Download and execute the OpenSCADInstaller to install OpenSCAD in your windows
<li> Optionally download and install <a href="https://www.python.org/ftp/python/3.12.9/python-3.12.9-amd64.exe"> Python 3.12 </a> this is useful if you plan to use PIP packages together with PythonSCAD


<li> create a test.py containing something simple like :
  <pre class="code">
from openscad import *
a=cube(1)
a.show()
  </pre>
<li> Open test.py and confirm security warning
<li> press F5/F6 to see the cube
<li> extend the code ...
<li> dont hesitate to ask on  <a href="http://web.libera.chat/?channel=#pyopenscad">IRC</a> Channel. or in <a href="http://reddit.com/r/openpythonscad"> Reddit </a> if its not working as expected.
      </div>
      <div class="block">
	<div>General Python Version information</div>
          PythonSCAD works very well on its own, unless you plan to use modules with come with a shared library(cpython) such as .dll, .dylib or .so <p>
	  If you use such a module, these module belong to a certain python version and they expect PythonSCAD to use the exact same version. If the first two numbers do not  match, these modules cannot be loaded <p>
         The PythonSCAD's binary Distributions come with these versions:
         <li> Linux AppImage: Python 3.12.0
 	 <li> Apple DMG: Python 3.13.1
         <li> Windows: Python 3.12.9
 
      </div>
      <div class="block">
	<div>MAC OsX Installation Instructions</div>
         If you downloaded the DMG File and fail to run Python Code, jonjelinek has
         written excelent instructions, how to link PythonSCAD with your Python on MAC.
         Dare to <a href="https://github.com/gsohler/openscad/issues/33#issuecomment-2469063560" > link </a> it from here. Thank you Jon!
      </div>

    </div>
   </div>
		
<?php
      $server=gethostbyaddr($_SERVER["REMOTE_ADDR"]);
      file_put_contents("$root/openscad.txt","$dat OpenSCAD DL $server\n",FILE_APPEND);
    ?>
  </main>
	</body>
</html>
