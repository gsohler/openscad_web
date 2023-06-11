a=6;
$fn=80;

module sub1()
{
    hull()
    for(z=[-a,a])
        for(y=[-a,a])
            for(x=[-a,a])
                translate([x,y,z])
                    sphere(r=4);
}

module sub2()
{
    translate([0,0,10.5])
    difference(){
        sub1();
        translate([-10,-10,-3]) cube([10,20,2]);
        translate([-4,10,5])
        rotate([90,0,0])
        cylinder(r=2,h=20);
    }
    translate([-10,0,-2.5])
    difference()
    {
        sub1();
        translate([2.5,10,0])
        rotate([90,0,0])
        cylinder(r=3,h=40);
        translate([-0.5,-10,-10]) cube([12,20,11]);
        translate([1.5,-10,-10]) cube([12,20,13]);
        
    }
}    


module compile()
{
    color("#4040f0") sub2();
    color("yellow") 
    translate([0,0,0]) 
    mirror([1,0,0]) rotate([180,0,0]) sub2();
}

compile();

