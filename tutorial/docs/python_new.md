# New Functions in PythonSCAD

OpenSCAD already got a rich set of functions, however, there
could be some more ...

## divmatrix
Sometimes its helpful to use multmatrix with the inverse of a matrix. Why don't use divmatrix right from the beginning ?

```py
from openscad import *
mat=[[1,0,0,10],[0,1,0,0],[0,0,1,0],[0,0,0,1]] # Move to the right by 10

a=cube([1,1,1])
b=a.multmatrix(mat) # move to right
c=b.divmatrix(mat) # move back left
c.show()
```

## mesh

With mesh function you can convert solid to a set of vertices and triangles like so:

```py
from openscad import *

u=cube([1,1,1]) | cylinder(d=1,h=10)

pts, tris = u.mesh()
# Now you could use the pts for further processing or even manipulate them and do this ...

v = polyhedron(pts, tris)
v.show()
```

## path\_extrude

OpenSCAD has linear\_extrude to move along a straight line and rotate\_extrude to extrude along an arc. But there is nothing which can extrude along an arbritary line.
This is reason to create path\_extrude. With path\_extrude you can extrude any shape along a path given by points. A 4th parameter in a vertex means the radius in this 
corner

```py
from openscad import *
p=path\_extrude(square(1),[[0,0,0],[0,0,10,3], [10,0,10,3],[10,10,10]]);
show(p);
```


## quick transformations
    Sometime translate or rotate is quite a burden to write when you just want to change one coordinate and still have to specify 3 values in the transformation

```py
from openscad import *
# these are easier to write instead specifying full translate or rotate
obj=cube(2)
part1 = obj.right(2.5)
part2 = obj.left(2.5)
part3 = obj.up(2.5)
part4 = obj.down(2.5)
part5 = obj.front(2.5)
part6 = obj.back(2.5)
part7 = obj.rotx(90)
part8 = obj.roty(135)
part9 = obj.rotz(-45)
part5.show()
```

## pulling objects apart
Sometimes its helpful to alter an existings STL and just adjust dimensions, whowever scale is not the right approach because you 
only want the new dimension just on one place, not all over the object. This is where pull can be helpful
pull defines one point one direction where it inserts  "void"  right into the spanned area. Best use this to work on STL's

```py
from openscad import *
# One Cube
c=cube([2,2,5])

# this pulls from inside the cube 5 into z direction. New height of the cube is 10.
d=pull(c,[1,1,1],[0,0,5])
d.show()
```


## Signed distance Functions within OpenSCAD

No need to create SDF objects in other tools and import into OpenSCAD after.
Thanks to embedded libfive this can be done online. Watch this small sample to get an idea, how easy it is:

```py
from openscad import *
from pylibfive import *

# Just assemble you libfive object first
c=lv_coord()
s1=lv_sphere(lv_trans(c,[2,2,2]),2)
b1=lv_box(c,[2,2,2])
sdf=lv_union_smooth(s1,b1,0.6)
  
# And mesh it finally to get something, that openSCAD can display
fobj=frep(sdf,[-4,-4,-4],[4,4,4],20)
show(fobj)
```

On a lower level, SDF used a formula and creates surfaces in the area, where this function hits zero.
All functions, which are provided by libfive are also available in openSCAD. These are

```py
import libfivew as lv
lv.x() # returns x coodinate
lv.y() # returns y coodinate
lv.z() # returns z coodinate
lv.sqrt(x)
lv.square(x)
lv.abs(x)
lv.max(x,y)
lv.min(x,y)
lv.sin(x)
lv.cos(x)
lv.tan(x)
lv.asin(x)
lv.acos(x)
lv.atan(x)
lv.exp(x)
lv.log(x)
lv.pow(x)
lv.comp(a,b)
lv.atan2(x,y)
lv.print(formula) # print tree of formula
```



## align

Align can be used to combine combjects together without difficult  transformations

```py
from openscad import *
c = cube()
c1 = c
# scale with -1 will also invert the directions of all handles, so the objects will be abutting instead of coincident
c2 = c.align(scale(c1.origin,-1), c.origin)

show(c1 | c2)
```

## edge

Python has a new primitive called "edge" which just has a length

```py
from openscad import *
e = edge(size=10, center=True)

# and of course you can extrude it
square = linear_extrude(height=10)

# or get back the edges in a python list
all_e = square.edges()

```

## faces

You can retrieve a list of faces for any solid in a python list

```py
from openscad import *
c = cube(10)

# returns a list of 6 faces
faces = c.faces()


```
note that objects returned by faces (and edges) have a property called 'matrix'  which is a 4x4 eigen matrix which shows their orientation in space.  it can be used to filter them

## export

You can use this to export your data to disk programmatically like so:

```py
from openscad import *
c = cube(10)
cyl = cylinder(r=4,h=4)

c.export("mycube.stl")

# with 3mf format you can even store many objects at once

export( {
    "cube" : c,
    "cylinder" : cyl
},"myfile.3mf")

```

## spline

Spline is like 'polygon'  just with the difference, that the resulting object is very round and will meet the given points

```py
from openscad import *
s = spline([[0,0],[10,0],[10,10],[0,10])

s.show() # very near to circle

```

## skin

Thanks to scrameta, pythonscad got wonderful skin.
skin is like you put arbritary 2d objects in space and skin will cover all of them tightly

u
This is basically morphing a square into a circle

## add\_parameter

This is how pythonscad can interact with the customizer


```py
from openscad import *

# This will add an entry for myvar in customnizer with default value of 5
add_parameter("myvar",5)

```

## concat

Concat concatenates the triangles and vertices of serveral objects without actually
createing an Union operation on them. This is useful when the sub-parts are not yet water-tight and CSG would fail on them.

```py
from openscad import *

alltogether = concat(part1, part2, part3)

```


