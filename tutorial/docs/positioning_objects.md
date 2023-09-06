# Positioning objects

To move an object, you can simply use the `translate()` method:
```py
# Create two cubes
c1 = cube([5,5,5])
c2 = cube([3,3,10])

# Translate the cube by 7 units up
c2 = c2.translate([0,0,7])

# Display the result
result = c1 + c2
output(result)
```

Notice how we assign the result of the `translate()` method back into c2.  
This is because just like the `union()` and `difference()` methods we saw earlier, this method return a brand new object.
