# Python Specialities

## Special Variables

In Python the well known $fn, $fa  and $fs don't exist.
Generally there are no $ variables needed as python variables can be overwritten any time.
To access $fn, $fa, $fs, simply set global fn, fa, fs variable respectively.

## Import existing files

'import()' cannnot be reused in python-openscad as its a python keyword. use 'os\_import()' instead.

## Storing Data along Solids

Its possible to store arbritary data along with solids

=== "Python"

    ```py
    # Create the cube object, and store it in variable "c"
    c = cube([10,10,2])

    # give it a name
    c['name']="Fancy cube"

    # specify coordinates
    c['top_middle']=[5,5,2]

    # Display the cube
    output(c)

    # Retrieve  Data
    print("The Name of the Cube is "%(c['name']))
    ```


## Object oriented coding style

Most of the Object manipulation function are available in two different flavors: functions and methods.

=== "Python"

    ```py
    # Create a green cylinder with functions
    cy=cylinder(r=2,h=10)
    cy_green=color(cy,"green")
    # or more simple:
    # cy_green = color(cylinder(r=2,h=10),"green")

    # Now create a red sphere with methods
    sp=sphere(r=2)
    sp_red = sp.color("red")
    # or more simple:
    # sp_red = sphere(r=2).color("red")
    
    # method flavor deems to be more readble 

    # Now output everything

    # use solids in lists to implicitely union them
    output([sp_red, cy_green.translate([10,0,0]] )
    # here is yet another method ....
    ```




