<?php
$dom = simplexml_load_file("student.xml");

foreach($dom->student as $h)
{
	echo "<h3>$h->name </h3>"."<br>";
	echo "<h3> $h->id	</h3>"."<br>";
	echo "<h3>$h->cgpa	</h3>"."<br>";
	echo "<h3>Courses:	</h3>"."<br>";
	
	foreach($h->courses->course as $f)
	{
		echo "<print>Course name: ".$f->cname."</print>";
		echo "<print>|".$f->csection."</print>";
		echo "<print>|".$f->cgrade."</print>.<br>";
		
	}
	
	
	
	}

?>