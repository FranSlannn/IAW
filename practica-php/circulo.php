<?php
$color = "rgb(" . rand(0, 255) . ", " . rand(0, 255) . ", " . rand(0, 255) . ")";

print "  <p>Color: $color</p>\n";
print "\n";
print "  <p>";
print "    <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" \n";
print "      width=\"100\" height=\"100\">\n";
print "      <circle cx=\"50\" cy=\"50\" r=\"50\" fill=\"$color\" />\n";
print "    </svg>\n";
print "  </p>";
?>
