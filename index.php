<html>
	<head>
	<title> OpenSCAD - advanced scripting with python </title>
        <META name="description" content="Alternative approach to use python with openscad, due to nature of python its much more flexible">
        </head>
	<body>
    <h1><center>  OpenSCAD - Python Edition </center> </h1>
		<img src="pictures/plogo.PNG" height=120 >

		Original website of OpenSCAD is <a href="http://www.openscad.org"> Here </a> and !!!ALL!!! my work is based on it and I fully respect all the effort, the Open Source community has contributed to it. <p>
		OpenSCAD is very powerful, but its also very limited in several ways because variables can only be assigned once ie.g. and tricky workarounds are
		required  to overcome this shortness. Also, for original Openscad security is absolutely important, whereas with this version and
		python included , it bases absolutely on trusting to the files and to the people. Vision of original OpenSCAD is  to evaluate each chane very careful, so it takes  very long for any change to become public, whereas this version of openscad is much more progressive.
		<p>Python has all the options you like and you can do clever
		things before rendering your 3D shapes, but it also imposes the risks which come with the power of python.
		A Python OpenSCAD program can  e.g. calculate the bits  of an QR code on the fly. Additionally with python you can store results or intermediate results in
		variables and you can decide whether to use them (or not) and you can use them as arguments to functions.
		So  no need to use the openscad children feature anymore, you simple pass a result to a function for futher 
		processing it.  How cool is that ? 

		<p>This Variant is still under heavy development, Almost all functions of openscad are available. There are equal  in name 
		and equal in function parameters. Beyond mathematical functions and language constructs here is an explicit list of functions, which are *NOT* available yet

		<ul>
			<li> dxf_dim
			<li> dxf_cross
			<li> intersection_for
			<li> dxf_linear_extrude
			<li> dxf_rotation_extrude
			<li> fontmetrics
		</ul>

		and these are the additional functions, which are available:
		<ul>
			<li> output: accepts one variable.  Please run output at the end of your program to specify, which variable shall be displayed
			<li> path_extrude (see chapter below)
			<li> offset (for 3D objects see chapter below)
		</ul>
		OpenSCAD import is called "osimport" due to a naming conflict with the famous python command. All the transfomation functions of openscad are also available as object oriented methods. this allows for more compact and  intuitive coding. Arguments to union, difference, and intersection are python lists to allow for  variable number of arguments. Wherever you specify an object an function, you can
alternatively also specify [object1, object2, .. objectn] instead and openscad will happily insert an union of them to combine them for you.

		<h2> Programming Example </h2>
		A possible working program  like

		<pre>

def foot(x,y):
	c=cube([1,1,10])
	return translate(c,[x,y,0])

def plate():
	return cube([11,11,1])

parts=[]
parts.append(translate(plate(),[0,0,10]))

for y in [0,10]:
	for x in [0,10]:
		parts.append(foot(x,y]))

output([union(parts), cylinder(r=1,h=10).translate([20,10,0])])
		</pre>
		and the output is here: <br>
		<img src="pictures/openscad.png" width=480 > <br>

	A Nice example of using openscad together with Qrcodes is here at <a href="examples/qrcode.txt">qrcode.py </a> <br>
	Other example is this one using  <a href="examples/figlet.txt">figelt.py </a> <br>

	<h2> Additional functions </h2>

	As my new functions did not yet it to the mainstream and/or they have an incredible timeline, they are already available from here.
	<h3> built in dictionary </h3>
	  Each of the generated objects has got a built in dictionary, which can be used to store additional information along the object. e.g to store coordinate information about special locations of the object. e.g 
	<pre>
	myobject["top"] = [10,10,90]
        </pre>
	<h3> textures </h3>
	Dont stay with the ordinary faces. use textures to make your objects more impressive.<p>
	<img src="pictures/island.png" width=480> <br>
	Sample code with textures is:
        <pre>
	texture("texture1.jpg"); // each texture statement loads an image, and yields an texture index starting with 1
	color(texture=1) // color  got an additional paramter texture which is 0 by default. use color in addition to dye the picture
	cube(10); 	// the textured object
	</pre>
	<h3> path_extrude </h3>

	path_extrude has works very similar to linear_extrude or rotate_extrude. IMHO it can actually act as a superset of both of them.
	the syntax is
	<pre>
	path_extrude([[0,0,0],[0,0,10]) square(); // most simple form

	square().path_extrude([[0,0,0],[0,0,10]]) // python syntax
	</pre>
	Possible parameters are
	<ul>
	<li> path	list of points in 3d space where to feed the path. Points can optionally specified as a 4-value-vector where the 4th value acts as a radius parameter for round corners
	<li> twist	amount of degrees to twist the profile along the path
	<li> origin	determines 2D center point of the twist  rotation within the profile
	<li> scale	factor to scale the profile along the path, can also be 2d vector
	<li> closed	whether to close the path to form a ring . true/false
	<li> allow_intersect By default path_extrude will yield an empty result on self-intersection. use this on override
	<li> xdir	Direction of the x vector of the profile for the very first path segment.
	</ul>
	See example at <a href="examples/path_extrude_example.txt">path_extrude_example.py </a>

	<h3> offset for 3D </h3>

	In this version offset also operates on 3D objects in addition. right now it only works correctly with F6. 
        you can use this feature to e.g. to downsize connection parts from stl  files  from the internet if they are too tight to assemble	

	<h3> frep </h3>
	OpenSCAD also intrgrates with the Signed Distance format. You can describe an object by providing a function, which will calculate the altitude above its surface.
	This is based on libfive available on github. Only available in python mode though. Possible SDF commands are
	<ul>
		<li> X()
		<li> Y()
		<li> Z()
		<li> operators + = * / %
		<li> sqrt()
		<li> abs()
		<li> max()
		<li> min()
		<li> sin()
		<li> cos()
		<li> tan()
		<li> asin()
		<li> acos()
		<li> atan()
		<li> exp()
		<li> log()
	</ul>
	SDF comes  with a  library  which contains some primitives and some blendings. The picure shows a stair blending between a sphere and a cube. <br>
	<img src="pictures/sdf.png" width=400> <br>
	See example at <a href="examples/libfive_example.txt">libfive_example.py </a>

	<h3> ifrep </h3>
	There is first support for ifrep. ifrep takes an OpenSCAD solid as input and returns a variable which
        you can use along with your other SDF equations. You can use it for offsetting exising objects

	<h2> Get it </h2>
		<p>Test Versions are available <a href="download.php"> here </a>.  This is developped <a href="https://github.com/gsohler/openscad"> here </a>  in branch "python"

		<p>Have fun and let me know. If you have comments, criticism or even improvement suggestions, dont hesitate to write me a short message at guenther.sohler@gmail.com
	
		
    <?php	
    mail("guenther.sohler@gmail.com","Openscad Index",gethostbyaddr($_SERVER["REMOTE_ADDR"])."|||".implode(" ",$_SERVER));
    ?>
	</body>
</html>
