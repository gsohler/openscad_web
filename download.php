<?php
$root = $_SERVER["DOCUMENT_ROOT"];
$dat = date("Y-m-d H:i:s");
if(isset($_GET["download"])) {
	$download=$_GET["download"];
        $server=gethostbyaddr($_SERVER["REMOTE_ADDR"]);
	file_put_contents("$root/openscad.txt","$dat OpenSCAD AC $server $download\n",FILE_APPEND);
	printf("Feedback welcome");
	exit(1);
}
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
		array_push($files,$file);
	}
}
closedir($dh);


for($j=0;$j<5;$j++) {
	for($i=0;$i<sizeof($files);$i++) {
		$file=$files[$i];
		$desc="";
		$size = round(filesize("downloads/$file")/(1024*1024));
		if(strpos($file,"tar.gz") !== false && $j == 1)
		{
			$desc="Linux installation package";
       		} 
		if(strpos($file,".exe") !== false && $j == 0)
		{
			$desc="Windows Installer";
       		}
		if(strpos($file,".dmg") !== false && $j == 2)
		{
			$desc="MAC Disc Image";
		}
		if(strpos($file,".AppImage") !== false && $j == 3)
		{
			$desc="Linux AppImage";
		}
		if(strpos($file,".rpm") !== false && $j == 4)
		{
			$desc="Fedora/CentOS RPM Package";
		}
		if($desc != "") {
			print("<form id=myform action=\"https://www.pythonscad.org/downloads/$file\" method=get> <button class=\"btn\" type=\"submit\" onClick=\"javascript:ajaxLoad('download.php?download=$file','myform', null); \"> $file </button> $desc ($size MB)  </form> \n");
		}
	}
	print("<hr>\n");
}
?>
</UL>
        </div>
      </div>
      <div class="block">
	<div>Windows Installation Instructions</div>
The Windows installer is currently not signed . This is why you will see a Windows warning dialog about unknown origin. <br>
		To make OpenSCAD for python actually work you need to install Python 3.11. To Make it work follow these steps: <br>
<li> Download and execute the OpenSCADInstaller to install OpenSCAD in your windows
<li> Download and install <a href="https://www.python.org/ftp/python/3.11.5/python-3.11.5-amd64.exe"> Python 3.11 </a>
<li> In case the installer fails to create a proper desktop symbol, please grab the openscad.exe inside the 'bin' directory and link it to the desktop/taskbar
<li> create a test.py containing something simple like : from openscad import * | cube().output()
<li> Lauch OpenSCAD and enable <font color=red > Feature "Python Engine" </font>
<li> Open test.py and confirm security warning
<li> press F5/F6 to see the cube
<li> extend the code ...
<li> dont hesitate to ask on  <a href="http://web.libera.chat/?channel=#pyopencad">IRC</a> Channel. or in <a href="http://reddit.com/r/openpythonscad"> Reddit </a> if its not working as expected.


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
