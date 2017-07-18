<?php
$arr=array(

		[	"id" => 1,"name" => "Arun","phone" => 9847123456,"email"=>"arun@gmail.com"],
		[	"id" => 2,"name" => "Ajay","phone" => 9744789456,"email"=>"ajay@ymail.com"],
		[	"id" => 3,"name" => "Arjun","phone" => 9846456987,"email"=>"arjun@gmail.com"],
		[	"id" => 4,"name" => "Amritha","phone" => 9447321456,"email"=>"amritha@outlook.com"],
		[	"id" => 5,"name" => "Akhila","phone" => 8191951235,"email"=>"akhila@yahoo.com"],
		[	"id" => 6,"name" => "Amal","phone" => 9847123456,"email"=>"amal22@gmail.com"],
		[	"id" => 7,"name" => "Adithya","phone" => 9744789456,"email"=>"adithya57@ymail.com"],
		[	"id" => 8,"name" => "Munsheer","phone" => 9846456987,"email"=>"munsheerek@gmail.com"],
		[	"id" => 9,"name" => "Ammu","phone" => 9447321456,"email"=>"ammu999@outlook.com"],
		[	"id" => 10,"name" => "Akhil","phone" => 8191951235,"email"=>"akhil@yahoo.com"],

	);
$a=2;
foreach ($arr as $key => $value) {
		if($value["id"]==$a)
		{
			var_dump($value);
			break;
		}
}



?>