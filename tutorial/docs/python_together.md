# Python together with OpenSCAD

Very likely you don't want to give up the amazing libraries with exist in
OpenSCAD language only. Just use them. Its very simple to mix OpenSCAD and
python language.

For that just write 'use'  pythonfile.py in your OpenSCAD script.
Then you will be able to use your beloved libraries and at the same time 
make use of your Python scripts.

Check out this sample:

=== "OpenSCAD"

    ```c++
    // Traditionally use was used to source content from other files which are not on the very toplevel, like modules
    // use <file.scad> --- this will only load things defined in the file (OpenSCAD modules)
    // include <file.scad> --- this will also execute OpenSCAD code, which is sitting the the root of the sourced file

    // now with this fork you can simple type
    use <pythonlib.py>

    // and call functions like
    echo(python_add(1,2));

    // or call modules like this
    python_cube(3);

    // but you can also just call a python function with
    my_python_func("message")

    ```

=== "Python"

    ```py
    from openscad import *

    # this is file pythonlib.py and it defines the python functions referred above
    def python_add(a,b):
        return a+b

    def python_cube(size): # you could use any number of parameters
    # numbers, strings and even arrays are supported
        return cube([size,size,1]) # My special sizing requirement

    def my_python_func(text):
        fd=fopen("myfile","w")
        # you could write text to this file if you wanted
        # just dont return a solid here as you dont have one...

    ```

Of course you can also use SCAD from within python

    ```py
    from openscad import *

    obj = scad("""
       union()
       {
         cube([10,10,10]);
         cylinder(d=1,h=10);
       }
     """
     obj.output()

    ```

Apart from different syntax, pythonscad  also provides some additional functions compared to OpenSCAD [here](./python_new.md).

