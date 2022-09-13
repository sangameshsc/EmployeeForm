<?php
class Employe extends Database
{
    public function insert($postData,$target_file)
    {
       
        $fname=$postData['firstname'];
        $lname=$postData['lastname'];
        $email=$postData['email'];
        $phoneno=$postData['phoneno'];
        $street=$postData['street'];
        $city=$postData['city'];
        $state=$postData['state'];
        $country=$postData['country'];
        $pincode=$postData['pincode'];
        $photo=$target_file;
        $id=$postData['id'];

        $this->query("insert into employee(firstname,lastname,email,phoneno,street,city,state,country,pincode,photo,id)values('$fname','$lname','$email','$phoneno','$street','$city','$state','$country','$pincode','$photo','$id')");
        $this->execute();
        // echo "insert successfully";
        
 
    }
   
    public function display1()
 
    {
        $this-> query("select * from employee");
        return $this->resultSet();
    }

    public function del()
    {
        $fname=$_POST['dels'];
        $this->query("DELETE FROM employee where firstname='$fname'");
        $this->execute();
        // echo "delete row succesfully";
     }

    public function disp()
    {
      $fname=$_POST['searc1'];
      $this->query("SELECT * FROM employee where firstname='$fname'");
      return $this->resultSet();
    }
   
    public function empp($id)
    {
           $this->query("SELECT * FROM employee where id=$id");
           return $this->single();
    }

    
    public function modeleditsave($data,$target_file)
        {
         
            
            $firstname=($data[0]);
            $lastname=($data[1]);
            $email=($data[2]);
            $Phoneno=($data[3]);
            $street=($data[4]);
            $city=($data[5]);
            $state=($data[6]);
            $country=($data[7]);
            $pincode=($data[8]);
            $file=$target_file;
            $id=($data[10]);
            $this->query("UPDATE employee SET firstname ='$firstname',lastname ='$lastname',email ='$email',phoneno ='$Phoneno',street='$street',city ='$city',state ='$state',country ='$country',pincode ='$pincode',photo='$file',id=$id WHERE id = '$id'");
            $this->execute();
                    
            // echo "Data Updated";
          }
}

    
