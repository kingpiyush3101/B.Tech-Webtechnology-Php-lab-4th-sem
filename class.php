<!-- Write a PHP code that define class Student with attributes RollNo, Name, Branch, and Year. Create 3 instances of it, sets the values of each instance appropriately and print the values of all attributes. -->

<?php 
class Student {
public $RollNo;
public $Name; 
public $Branch; 
public $Year; 
function set($RollNo, $Name, $Branch, $Year) {
$this->RollNo=$RollNo;
$this->Name=$Name; 
$this->Branch=$Branch;  
$this->Year=$Year; } 
function getRollNo() { return $this->RollNo; }
function getname() { return $this->Name; }  
function getBranch() { return $this->Branch; } 
function getYear() { return $this->Year; } 
function __construct() {} 
function __destruct() {} 
} 
$obj[1] =  new Student(); 
$obj[2] =  new Student(); 
$obj[3] =  new Student(); 
$obj[1] -> set(6,"Anup","MLAI",2019); 
$obj[2] -> set(21,"Piyush","MLAI",2019); 
$obj[3] -> set(32,"Vishwadeep","MLAI",2019);
echo "<table border=1>";
echo "<tr><th>RollNo</th><th>Name</th><th>Branch</th><th>Year</th></tr>"; 
for($j=1;$j<4;$j++)
{ 
echo "<tr><td>".$obj[$j]->getRollNo()."</td>"; 
echo "<td>".$obj[$j]->getName()."</td>";  
echo "<td>".$obj[$j]->getBranch()."</td>"; 
echo "<td>".$obj[$j]->getYear()."</td></tr>"; 
}
?>