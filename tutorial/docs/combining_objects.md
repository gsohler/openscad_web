# Combining objects

## Displaying multiple shapes (union)

If you tried calling output a second time, you will have noticed that is **overwrites** the previous call.
For example:
```py
# Create a cube and a cylinder
cu = cube([5,5,5])
cy = cylinder(5)

# We display the cube
output(cu)
# We display the cylinder, which overwrites the previous output call
# THE CUBE IS NO LONGER DISPLAYED
output(cy)
```

So how do we display multiple shapes?
Simple! You combine them with the `union()` method.
```py
# Create a cube and a cylinder
cu = cube([5,5,5])
cy = cylinder(5)

# Create a third object that is a fusion of the cube and the cylinder
fusion = cu.union(cy)
# alternatively you can also write:
# fusion = union([cu, cy, more_objects])

# Both objects are now displayed at once
output(fusion)
# or:
# output( [cu,cy] )
# or use python to incrementally create the array ...

```

One important thing to note is the fact the `union()` does **NOT** edit the objects in place. Rather, it creates a third brand new object.  
This means that:

- You **must** assign the union to a variable, just calling `cu.union(cy)` alone will have no effects on `cu` or `cy`.
- You keep access to the originals objects. For example, you could still display just the cube by using `output(cu)`

## Substracting shapes (difference)
You learned how to merge two objects into one, but what if you want to exclude an object from another?
For that, you can use the `difference()` method:

```py
# Create a cube and a cylinder that overlap
cu = cube([5,5,5], center = True)
cy = cylinder(15, center = True)

# Substract the cylinder from the cube
diff = cu.difference(cy)

# Display the result
output(diff)
```

As you can see, this creates a cylinder-shaped hole in the cube!

## Using operators
Using the `union` and `difference` method works great, but is a little heavy synthax-wise.  
You can instead simplify it by using **operators**!

Here is a table detailing which operator matches each method:

| Operator | Method       |
| -------- | ------------ |
| +        | union        |
| -        | difference   |
| *        | intersection |

So, reusing our earlier examples, you could write
```py
cu = cube([5,5,5])
cy = cylinder(5)

# Replaces cu.union(cy)
fusion = cu + cy

output(fusion)
```

Now that we know how to combine objects, lets see how we can [position them](./positioning_objects.md).
