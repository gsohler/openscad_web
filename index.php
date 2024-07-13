<?php
 if(isset($_POST["description"])) {
 	$description=$_POST["description"];
 	$contact=$_POST["contact"];
 	$email=$_POST["email"];
 	mail("guenther.sohler@gmail.com","Openscad Feature Request","Description:$description contact:$contact email:$email");
 	print("Request sent");
}
?>
<html>
	<head>
  	<title>Python | OpenSCAD</title>
    <meta name="description" content="Work more quickly with OpenSCAD, using Python.">
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
          width: calc(33% - 0.5cm);
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
    <div style="text-align:right"> <a href="https://pythonscad.org/download.php">Download</a> </div>
    <div style="display: flex; flex-wrap: wrap; justify-content: space-between;">
      <div class="block">
        <div>Motivation</div>
        <div>
            <p>
          		<a href="http://www.openscad.org">OpenSCAD</a> is a very cool tool that lets you express 3D models using its own language.
          		Unfortunately the language itself comes with a lot of intentional limitations.
        		</p>

        		<ul>
        		  <li>No mutation of variables (immutability, "single assignment of any variable")</li>
        		  <li>Limited number of iterations</li>
        		  <li>No file I/O</li>
        		</ul>

        		<p>These exist for the reason that they don't want the language
        		to be able to do bad things to people's computers, which allows the "script sharing culture" to
        		be safe.</p>

            <p>
        		Additionally the choice to use their own language brings with it a whole new mental model
        		that must be learned and mastered. This is a problem for wide adoption.
            </p>

            <p><strong>This fork lets you use Python inside of OpenSCAD as its native language </strong> </p> No extra external script to create OpenSCAD code. And as its based on openscad we aim to keep all the features which already exist in openscad. Only added features, no skipped ones ...

            <p>
              Before I continue I'd like to say I fully appreciate all the efforts the team and the Open Source community has contributed towards it over the years.
              The project is truly a work of love and has brought for many the joy of programming back into their lives.
              I believe the choice to have a safe script language is a good one.
            </p>

            <p>These limitations cause OpenSCAD programs to be written in the most convoluted ways,
            making them difficult to understand. While my goal to be able to use Python with OpenSCAD is
            actually completed, the problem that remains is getting it merged into mainline OpenSCAD.
            </p>

            <p>The argument is Python will introduce a massive security hole into the sharing culture.
	    So the proposed solution is to put the Python capability behind an option, which I have done.
	    Additionally OpenSCAD asks you, if you trust to a new Python Script and it will saves this decsion for you
	    in an SHA256 hash.
            Now I hope it's just a matter of time until things are merged.</p>

	    <p>This is where you come in. Use this fork, <a href="https://github.com/openscad/openscad/pull/4841">have your say</a>, and let's get it in!</p>
	    <p> A nice tutorial walking you through some exercises can be found <a href="tutorial/site/index.html">here </a>

        </div>
      </div>
      <div class="block">
        <div>Get started</div>
        <div>
          <p>
            If you're new to "code CAD", please first <a href="https://learn.cadhub.xyz/blog/curated-code-cad/">read this short introduction</a> and
            browse the plethora of already existing solutions to this problem space.
          </p>
          <p>
            Before downloading it, please understand that "Python | OpenSCAD" is a fork currently maintained by myself, gsohler.
            I heavily wish for this fork/branch to be merged into mainline OpenSCAD and have been working towards
            making it happen. <a href="https://github.com/openscad/openscad/pull/4702">You can follow the progress here</a>.
          </p>

          <p>
            There are several benefits to using Python over OpenSCAD's DSL (domain specific language):
          </p>
          <ol>
            <li>Faster general computation due to faster interpreter</li>
            <li>Utilize any pip packages</li>
            <li>More familiar syntax</li>
            <li>More familiar computation model</li>
          </ol>
          <p>
            Hopefully these benefits will help draw more people to the wonderful world of code CAD!
          </p>
          <p>
	    Ok, now it's probably a good idea to <a href="https://pythonscad.org/download.php">download</a> it.

Dont forget to enable python experimental feature in the preference. You might also want start openscad with '--trust-python' to disable annoying warnings as python is considered unsafe by the openscad developers. In case you like my work  i would love to see my branch forked
	    <p> If you rather want to compile it yourself, these are the steps to get it done.
<pre>
git clone https://github.com/gsohler/openscad.git
cd openscad
git checkout python
git submodule update --init --recursive
sudo ./scripts/uni-get-dependencies.sh
# make sure to get cryptopp and python dev packages installed, additionally
mkdir build
cd build
cmake -DEXPERIMENTAL=1 -DENABLE_PYTHON=1 -DENABLE_LIBFIVE=1 ..
make
sudo make install
</pre>
            </p>

          <div class="micro-block">
	    <div> Vote for even more Features ?</div>
            Do you feel, that OpenSCAD is missing an important feature ?
	    Vote here , what you want to see next
	    <form action=index.php method=post>
	    <textarea name=description cols=50 rows=6>
            </textarea> <br>
	    Your Name <input name=contact> <br>
	    Email (optional) <input name=email>
            <input type=submit value="Vote">
	    </form>
          </div>

          </p>
          <div class="micro-block">
            <div>Contact</div>
            <div>
	      <p>
                Python-Openscad related discussion is on our <a href="http://web.libera.chat/?channel=#pyopencad">IRC</a> Channel.<br>
                If you have comments, criticism or even improvement suggestions, don't hesitate to write to me at guenther.sohler@gmail.com
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="block">
        <div>Usage samples</div>
        <div>
          <p>
            Not quite like "Hello world!" but hey, we need to start somewhere. Here's an example
            of a table:
          </p>
      		<img src="pictures/table.png" width="100%" >
      		<pre class="code">
def foot(x,y):
	c=cube([1,1,10])
	return translate(c,[x,y,0])

def plate():
	return cube([11,11,1])

parts=[]
parts.append(translate(plate(),[0,0,10]))

for y in [0,10]:
	for x in [0,10]:
		parts.append(foot(x,y))

output(parts)
      		</pre>

          <p>
	    There is also a <a href="examples/qrcode.txt">QR code generator</a>  <p>
            <a href="pictures/qrcode.png"> <img src="pictures/qrcode.png" width=300 ></a> <p>
		and <a href="examples/figlet.txt">Figlet</a> <p>
            <a href="pictures/figlet.png"> <img src="pictures/figlet.png" width=300></a> <p> example you can see.
          </p>
        </div>
      </div>
      <div class="block additional-features">
        <div>Additional features</div>
        <p>On top of Python support, this fork also has the following extra capabilities.</p>
        <div class="features">
        <div class="micro-block">
          <div>Texture your models</div>
          <div>
          <p>
            Use textures to make your objects more impressive!
          </p>
            <img src="pictures/island.png" width="100%">
            <pre class="code">
texture("texture1.jpg"); // get a texture index
color(texture=1) // specify the index to use
  cube(10); // on the object
            </pre>
            <img src="pictures/texture_cube.png" width="50%">
          </div>
        </div>
        <div class="micro-block">
          <div>F-REP/SDF engine (libfive)</div>
          <div>
          <p>
            Use SDFs to create organic meshes!
        	</p>
        	<img src="pictures/sdf.png" width="50%">
	    <pre class="code">
from pylibfive import *
c=lv_coord()
s1=lv_sphere(lv_trans(c,[2,2,2]),2)
b1=lv_box(c,[2,2,2])
sdf=lv_union_smooth(s1,b1,0.6)
fobj=frep(sdf,[-4,-4,-4],[4,4,4],20)
output(fobj)

            </pre>
          <p>
            If you're unfamiliar please look up "Inigo Quilez", the god-father of SDFs.
          </p>

         <p>
            The available operators are:
        	</p>
          	
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
          		<li> atan2()
          		<li> exp()
          		<li> log()
          	</ul>

          	<p>
            	I've integrated libfive into OpenSCAD, but only through the Python bindings.
          	</p>

		See example at <a href="examples/libfive_example.txt">libfive_example.py </a>
		or  <a href="examples/collosseum.txt">collosseum.py </a>
		<p>

		<img src="pictures/collosseum.png" width="50%">

          	<h3>ifrep</h3>
          	<p>
          	There is first support for ifrep. ifrep takes an OpenSCAD solid as input and returns a variable which
                  you can use along with your other SDF equations. You can use it for offsetting exising objects.
            </p>

          </div>
        </div>
        <div class="micro-block">
          <div>Objects double as dictionaries</div>
          <div>
          <p>
        	  Each of the generated objects has a built-in dictionary, which can be used to store additional
        	  information along with the object. e.g to store coordinate information about special locations
        	  of the object.
      	  </p>
        	<pre class="code">
  myobject["top"] = [10,10,90]
          </pre>
          </div>
        </div>
        <div class="micro-block">
          <div>Path extrude</div>
          <div>
          <p>
          	path_extrude works very similar to linear_extrude or rotate_extrude. IMHO it can actually act as a superset of both of them.
          	The syntax is:
        	</p>
          	<pre class="code">
square().path_extrude([[0,0,0],[0,0,10]])
          	</pre>
          	<p>Possible parameters are:</p>
          	<ul>
            	<li>path - list of points in 3d space where to feed the path. Points can optionally specified as a 4-value-vector where the 4th value acts as a radius parameter for round corners</li>
            	<li>twist - amount of degrees to twist the profile along the path</li>
            	<li>origin - determines 2D center point of the twist  rotation within the profile</li>
            	<li>scale - factor to scale the profile along the path, can also be 2d vector</li>
            	<li>closed - whether to close the path to form a ring . true/false</li>
            	<li>xdir - Direction of the x vector of the profile for the very first path segment.</li>
          	</ul>

          	<p>
		<img src="pictures/path_extrude.png" width="50%">
		<p>
          	See example at <a href="examples/path_extrude_example.txt">path_extrude_example.py </a>
          	</p>
          </div>
        </div>
        <div class="micro-block">
          <div>3D offset</div>
          <div>
          <p>
          	In this version offset also operates on 3D objects in addition. 
            For example, you can use this feature to downsize connection parts from stl files from the internet if they are too tight to assemble.
	  </p>
	   <pre>
<img src="pictures/offset.png"> <p>
outer=sphere(10)
inner=offset(outer,-1)
shell=outer-iner
output(shell-cube(15))
           </pre>
          </div>
        </div>
      </div>
    </div>
   </div>


		
    <?php
      $server=gethostbyaddr($_SERVER["REMOTE_ADDR"]);
#      mail("guenther.sohler@gmail.com","Openscad IN $server",gethostbyaddr($_SERVER["REMOTE_ADDR"])."|||".implode(" ",$_SERVER));
    ?>
  </main>
	</body>
</html>
