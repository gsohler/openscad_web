
<html>

<iframe id="headerFrame" src="header.php" width="100%" frameborder="0" scrolling="no"></iframe>

<script>
  function resizeIframe() {
    const iframe = document.getElementById('headerFrame');
    iframe.style.height = iframe.contentWindow.document.body.scrollHeight + 'px';
  }

  document.getElementById('headerFrame').onload = resizeIframe;
</script>

<div style="text-align:right"> 

  <a href="index.php">Introduction </a> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
  <a href="overview.php">Overview </a> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
  <a href="downloads.php">Downloads </a> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
<a href="tutorial.php">Tutorial </a> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
<a href="examples.php">Examples </a> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
<a href="references.php">References</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<a href="future.php">Future </a> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
<a href="contacts.php">Contacts </a> &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
</div>

    
      <div class="block">
        <div><h3>Usage samples</h3></div>
        <div>
          <p>
            Lets create a housing for the new camera.
          </p>
      		<img src="pictures/box_anim.gif" width=500 >
		<pre class="code">
from openscad import *
fn=20

box = cube([40,40,40])
box -= cube([36,36,40]) + [2,2,2]
box -= cylinder(d=20,h=5) + [20,20,-1]
box -= cylinder(d=3,h=10) ^ [[5,35],[5,35], -1]
box.show()

      		</pre>

	  <p>
	    The examples below depend on external Python Libraries, which you can install with pip.</P><br>
       In case PythonSCAD cannot find it, please tell it the path like <pre>
import sys
sys.path.append("\\path\\to\\python\\site-packages-dir")
</pre>
	  <P></P>  Many applications are possible like   <p><br>
	      a <a href="examples/qrcode.txt">QR code generator</a>  <p>
             	<a href="pictures/qrcode.png"> <img src="pictures/qrcode.png" width=500 ></a></p> <br>

      	     or <a href="examples/figlet.txt">Using Figlet 3D Ascii art</a> <p>
	        <a href="pictures/figlet.png"> <img src="pictures/figlet.png" width=500></a></p> <br>>

	     or <a href="examples/gyroid.txt">A Gyroid</a> <p>
	        <a href="pictures/gyroid.webp"> <img src="pictures/gyroid.webp" width=500></a></p> <br> 

	or even <a href="examples/read_gds.txt">GDS File Parser</a> used for creating Microchips<p>
		<a href="pictures/read_gds.png"> <img src="pictures/read_gds.png" width=500></a> </p> <br><br>
              PythonSCAD is present on Thingiverse
                 <li> <a href="https://thingiverse.com/thing:6939488">Zelda's Spirit Flute</a> by L.D.
                 <li> <a href="https://thingiverse.com/thing:6766806">Dremel Impeller Blower</a> by jhnphn
          </p>
        </div>
      </div>
      <div class="block additional-features">
        <div><h3>Additional features</h3></div>
        <p>On top of Python support, this fork also has the following extra capabilities.</p>
        <div class="features">
        <div class="micro-block">
          <div><h3>Texture your models</h3></div>
          <div>
          <p>
            Use textures to make your objects more impressive!
          </p>
            <img src="pictures/island.png" width=500><br>
            <pre class="code">


texture("texture1.jpg"); // get a texture index
color(texture=1) // specify the index to use
  cube(10); // on the object
            </pre>
            <img src="pictures/texture_cube.png" width=500>
          </div>
        </div>

        <div class="micro-block">
           <pre class="code">

          
                      </pre>

          <div><h3>F-REP/SDF engine (libfive)</h3></div>
          <div>
          <p>
            Use SDFs to create organic meshes!
        	</p>
        	<img src="pictures/sdf.png" width=500>
	    <pre class="code">

from openscad import *
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

		<img src="pictures/collosseum.png" width=500>

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
          <div><h3>Path extrude</h3></div></div>
          <div>
          <p>
          	path_extrude works very similar to linear_extrude or rotate_extrude. IMHO it can actually act as a superset of both of them. Like in linear_extrude and rotate_extrude, the extruded  2D shape is always perpendicular to the extrusion.
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
		<img src="pictures/path_extrude.png" width=500>
		<p>
          	See example at <a href="examples/path_extrude_example.txt">path_extrude_example.py </a>
          	</p>
          </div>
        </div>
        <div class="micro-block">
          <div><h3>3D offset</h3></div>
          <div>
          <p>
          	In this version offset also operates on 3D objects in addition. 
                Fillets can easily be created by downsizing concave edges
	  </p>
	   <pre>
<img src="pictures/offset.png" width="500"> <p>
from openscad import *
c = cube(10) + [[0,0,0], [5,5,5]]
c = c.offset(-2,fa=5)
c.show()
           </pre>
          </div>
        </div>
      </div>
    </div>
   </div>


		
    <?php
      $server=gethostbyaddr($_SERVER["REMOTE_ADDR"]);
    ?>
  </main>
	</body>
</html>
