# Getting started with Python-powered OpenSCAD

## Enabling Python support
For Python support to be enabled, 2 conditions must be met:

1. The `python-engine` feature must be enabled
![Enabling the python engine](./img/enable_python_feature.png)
2. The extension of the file you're editing **MUST** be `.py`.

If both those condition are met, then the file will be interpreted as a Python file.

## Differences with regular OpenSCAD
If you're familiar with regular OpenSCAD, then the synthax will be fairly obvious, as the names of functions and classes are the same.

The major difference is that you need to use the `output()` function for a shape to be displayed, as opposed to it being displayed automatically in regular OpenSCAD.

## Creating a basic shape
Lets create a 5x5x5 cube.
```py
# Create the cube object, and store it in variable "c"
c = cube(5)
# Or, more explicitely
# c = cube([5,5,5])

# Display the cube
output(c)
```

That was pretty easy!
Next, let's see how to [combine multiple shapes](./combining_objects.md).