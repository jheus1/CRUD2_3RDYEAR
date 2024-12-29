<link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<?php 
   //PDO DB
   include_once "pdo.php";
   
   class employee{
       public string $firstname;
       public string $lastname;
       public string $middlename;
       public string $email;
       public string $gender;
       public string $civil;
       public string $bday;
       public string $age;
       public string $pob;
       public string $religion;
       public string $nationality;
       public string $blood;
       public string $weight;
       public string $height;
       public string $lot;
       public string $house;
       public string $street;
       public string $district;
       public string $brngy;
       public string $city;
       public string $province;
       public string $country;
       public string $zip;
       public string $tin;
       public string $gsis;
       public string $pagibig;
       public string $philhealth;
       public string $voters;
       public string $precint;
       public string $sss;
   
       public $con;
       public string $response;
   
       public function __construct($db){
           $this->con = $db;
       }
   
       public function getPost(){
           if(!empty($_POST)){
               $this->firstname = $_POST['firstname'];
               $this->lastname = $_POST['lastname'];
               $this->middlename = $_POST['middlename'];
               $this->email = $_POST['email'];
               $this->gender = $_POST['gender'];
               $this->civil = $_POST['civil'];
               $this->bday = $_POST['bday'];
               $this->age = $_POST['age'];
               $this->pob = $_POST['pob'];
               $this->religion = $_POST['religion'];
               $this->nationality = $_POST['nationality'];
               $this->blood = $_POST['blood'];
               $this->weight = $_POST['weight'];
               $this->height = $_POST['height'];
               $this->lot = $_POST['lot'];
               $this->house = $_POST['house'];
               $this->street = $_POST['street'];
               $this->district = $_POST['district'];
               $this->brngy = $_POST['brngy'];
               $this->city = $_POST['city'];
               $this->province = $_POST['province'];
               $this->country = $_POST['country'];
               $this->zip = $_POST['zip'];
               $this->tin = $_POST['tin'];
               $this->gsis = $_POST['gsis'];
               $this->pagibig = $_POST['pagibig'];
               $this->philhealth = $_POST['philhealth'];
               $this->voters = $_POST['voters'];
               $this->precint = $_POST['precint'];
               $this->sss = $_POST['sss'];
   
           }
       }
       
       public function add(){
           if(isset($_POST['add'])){
               $this->getPost();
               $stmt = $this->con->prepare("INSERT INTO employees (firstname, lastname, middlename, email, gender, civil, bday, age, pob, religion, nationality, blood, weight, height, lot, house, street, district, brngy, city, province, country, zip, tin, gsis, pagibig, philhealth, voters, precint, sss) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
               $stmt->execute([
                   $this->firstname,
                   $this->lastname,
                   $this->middlename,
                   $this->email,
                   $this->gender,
                   $this->civil,
                   $this->bday,
                   $this->age,
                   $this->pob,
                   $this->religion,
                   $this->nationality,
                   $this->blood,
                   $this->weight,
                   $this->height,
                   $this->lot,
                   $this->house,
                   $this->street,
                   $this->district,
                   $this->brngy,
                   $this->city,
                   $this->province,
                   $this->country,
                   $this->zip,
                   $this->tin,
                   $this->gsis,
                   $this->pagibig,
                   $this->philhealth,
                   $this->voters,
                   $this->precint,
                   $this->sss
               ]);
               $this->responseSQL($stmt);
               header("Location: ../index.php");
           }
       }
       
       public function getUser($id){
           $stmt = $this->con->prepare('SELECT * FROM employees WHERE id = ?');
           $stmt->execute([$id]);
           // Check if there is at least one row returned
           return $stmt->rowCount() ? $stmt->fetch() : null;
           
       }
   
       public function update($id){
           $this->getPost();
           if(!empty($_POST)){
               $stmt=$this->con->prepare("UPDATE employees SET firstname=?,
               lastname=?, 
               middlename=?, 
               email=?,    
               gender=?,   
               civil=?,    
               bday=?, 
               age=?,  
               pob=?,  
               religion=?, 
               nationality=?,  
               blood=?,    
               weight=?,   
               height=?,
               lot=?,  
               house=?,    
               street=?,
               district=?, 
               brngy=?,
               city=?, 
               province=?, 
               country=?,  
               zip=?,      
               tin=?,
               gsis=?, 
               pagibig=?,
               philhealth=?,   
               voters=?,
               precint=?,
               sss=? WHERE id=?");
               $stmt->execute([
                   $this->firstname,
                   $this->lastname,
                   $this->middlename,
                   $this->email,   
                   $this->gender,  
                   $this-> civil,  
                   $this->bday,    
                   $this->age, 
                   $this->pob, 
                   $this->religion,    
                   $this->nationality, 
                   $this->blood,   
                   $this->weight,  
                   $this->height,
                   $this->lot, 
                   $this->house,   
                   $this->street,
                   $this->district,    
                   $this->brngy,
                   $this-> city,   
                   $this-> province,   
                   $this-> country,    
                   $this->zip,     
                   $this->tin,
                   $this-> gsis,   
                   $this-> pagibig,
                   $this-> philhealth, 
                   $this->voters,
                   $this-> precint,
                   $this->sss,
                   $id
   
   
   
               ]);
               $this->responseSQL($stmt);
               header('Location: ../view_record.php');
           }
       }
   
       public function delete($id){
           $stmt = $this->con->prepare("DELETE FROM employees WHERE id = ?");
           $stmt->execute([$id]);
           $this->responseSQL($stmt);
           header('Location: ../index.php');
       }
   
       public function getAll(){
   
           $stmt=$this->con->prepare('SELECT * FROM employees');
           $stmt->execute();
           if(!$stmt->rowCount()){
               return[];
           }
           return $stmt->fetchAll();
   
       }
       public function responseSQL($stmt){
           if($stmt->rowCount()){
               $this->response='success';
           }else{
           $this->response='failed';
           }
       }
       public function getResponse(){
           return $this->response;
       }
   
   
   
   
   
   }
   $employee=new employee($db);
   ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>