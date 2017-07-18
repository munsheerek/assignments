<?php
$arr=array(

		[	"id" => 1,
			"name" => "Arun",
			"mark" => 98
			],

		[	"id" => 2,
			"name" => "Ajay",
			"mark" => 89
			],

		[	"id" => 3,
			"name" => "Arjun",
			"mark" => 78
			],


		[	"id" => 4,
			"name" => "Amritha",
			"mark" => 92
			],

		[	"id" => 5,
			"name" => "Akhila",
			"mark" => 100
			]

	);
echo "<table border=1px>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Marks</th>";
echo "</tr>";
foreach ($arr as $key => $value) {
	echo "<tr>";
	echo "<td>";
	echo $value["id"];
	echo "</td>";
	echo "<td>";
	echo $value["name"];
	echo "</td>";
	echo "<td>";
	echo $value["mark"];
	echo "</td>";
	echo "</tr>";
}
?>