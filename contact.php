<?php
$mysqli_host="188.68.47.127";
$mysqli_user="k85151_General";
$mysqli_pass="Tabler0ne!";
$mysqli_database="k85151_general";

$cnn = mysqli_connect($mysqli_host, $mysqli_user,$mysqli_pass);
mysqli_select_db($cnn,$mysqli_database);
$dat = date("Y-m-d H:i:s");

$my_ip=gethostbyaddr($_SERVER["REMOTE_ADDR"]);

if(isset($_POST["author"]) && isset($_POST["design"]) && isset($_POST["code"])) {
	$filename=md5(date("Y-m-d H-i-s"));
	$author=$_POST["author"];
	$design=$_POST["design"];
	$code=$_POST["code"];
	printf("filename is %s\n",$filename);
	$fh=fopen($_SERVER['DOCUMENT_ROOT'].'/shared_designs/'.$filename,"w");
	fprintf($fh,$code);
	fclose($fh);

	print("Author is $author Design is $design Code is $code\n");
	$result=mysqli_query($cnn, "insert into  pythonscad_design (author,design,filename,ip_addr,authorized) values ('$author', '$design', '$filename','$my_ip','0' ) ");
	print(mysqli_error($cnn));

}
if(isset($_GET["delete"])) {
	$delete=$_GET["delete"];
	$query="delete from pythonscad_design WHERE filename = '$delete' and ip_addr = '$my_ip';  ";
	$result=mysqli_query($cnn, $query);
	print(mysqli_error($cnn));
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
        <div>Contacts</div>
        <div>
<UL>
		<li> Python-Openscad related discussion is on our <a href="http://web.libera.chat/?channel=#pyopencad">IRC</a> Channel.<br>
		<li> A Forum to raise questions is available at <a href="http://reddit.com/r/openpythonscad"> Reddit </a> <br>
		<li> If you have comments, criticism or even improvement suggestions, don't hesitate to write to me at guenther.sohler@gmail.com<pr>
		<li> Designs, which pythonscad community have shared are <a href="share_design.php"> here </a> .
		<li> In case you feel urgent need to drive the PythonSCAD development, <br> feel free to PayPal me @ my email-address.
</UL>
        </div>
      </div>
    </div>
   </div>
		
  </main>
	</body>
</html>


