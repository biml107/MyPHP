<?php

class Student
{
     public $Roll,$Sname,$PhysicsMarks,$ChemistryMarks,$MathMarks,
     $TotalMarks,$queryResult;
      public $Conn;

    function __construct()
     {

        $this->Conn=mysqli_connect("localhost","root","","test");
        if(!$this->Conn)
        {
            echo "Connection ERROR";
            exit();
            
        }

        

     }

     public function Create()
     {
        
      
      $sql = "CREATE TABLE if not exists Students(
        roll INT NOT NULL PRIMARY KEY ,
        sname VARCHAR(30) NOT NULL UNIQUE,
        physics int  NOT NULL,
        chemistry int NOT NULL,
        math  int NOT NULL,
        total int NOT NULL
         
           )";
       
       
       $result=mysqli_query($this->Conn,$sql);
       
        if($result)
        {
          echo "Table created successfully";
        }
        else{
          echo "error in table creation";
        }
       

        echo "<br>";
        $this->Roll=(int)$_POST['txtroll'];
        $this->Sname=$_POST['txtsname'];
        $this->PhysicsMarks=(int)$_POST['txtphysicsmarks'];
        $this->ChemistryMarks=(int)$_POST['txtchemistrymarks'];
        $this->MathMarks=(int)$_POST['txtmathmarks'];
        $this->TotalMarks=  $this->PhysicsMarks+$this->ChemistryMarks+$this->MathMarks;
        
        $query= "INSERT INTO Students values('$this->Roll','$this->Sname','$this->PhysicsMarks',' $this->ChemistryMarks',
        '$this->MathMarks','$this->TotalMarks')";
        $queryResult=mysqli_query($this->Conn, $query);
        if($queryResult)
        {
           echo "Records inserted successfully.";
        }
         else
        {
           echo "ERROR: Could not able to execute query " . mysqli_error($this->Conn);
        }
        echo "<br>";
        echo "<h2>Inserted data<h2>";  echo "<br>";
         
      
   }



//Read function 


   function read()
   {

    $query= "select *from Students order by roll";

    $result=mysqli_query($this->Conn,$query);
    if(mysqli_num_rows($result) > 0)
  {
      echo "<table border=1 width=100%>";
         echo "<tr><th>Roll</th><th>Student Name</th><th>Physics</th><th>Chemistry</th><th>Math</th><th>total</th></tr>";
         foreach($result as $r)
         {
            echo "<tr><td>".$r['roll']."</td><td>".$r['sname']."</td><td>".$r['physics']."</td><td>".$r['chemistry']."

            </td><td>".$r['math']."</td><td>".$r['total']."</td></tr>";
         }
        echo "</table>";
    }//closing if block
    else 
    {
      echo "No Records Found";
    }
   }//closing function read

  function delete()
  {
    
            $this->Roll=$_POST['deleteroll'];
            $query="delete from Students where roll=".$this->Roll;
            $result=mysqli_query($this->Conn,$query);

             if($result)
             {echo "<br>";
                echo "data Successfully deleted for Roll = ".$this->Roll;
                echo "<br>";
             }
             else 
             {
                echo "ERROR while deletion ";
             }
            $this->read();
  }

function update()
{


        $this->Roll=(int)$_POST['txtroll'];
        $this->Sname=$_POST['txtsname'];
        $this->PhysicsMarks=(int)$_POST['txtphysicsmarks'];
        $this->ChemistryMarks=(int)$_POST['txtchemistrymarks'];
        $this->MathMarks=(int)$_POST['txtmathmarks'];
        $this->TotalMarks=  $this->PhysicsMarks+$this->ChemistryMarks+$this->MathMarks;


       $query="update Students SET sname='$this->Sname' ,
       physics='$this->PhysicsMarks' ,
       chemistry='$this->ChemistryMarks' ,
        math='$this->MathMarks',
        total='$this->TotalMarks'
        where roll='$this->Roll'";
      //$query="update students set sname='kisssshor' where roll=1";
        $result=mysqli_query($this->Conn,$query);
        if($result)
        {
          echo "Record Updated successfully for Roll =".$this->Roll;
        }
        else
        {
            echo "Error while updating";
        }
         echo "<br>";
      

}









}//ending class bracket


?>