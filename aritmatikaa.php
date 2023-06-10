
<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator maseeehhh</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@300&family=Roboto:ital,wght@0,400;1,300&family=Varela+Round&display=swap');
* {
    font-family: 'Roboto Mono', monospace; 

 }
body{
    background-color: #101820;
    color: #cf6bdd;
    font-family: 'Roboto Mono', monospace;
    font-weight: bold;
    
}
.card{
    
    background-color: #292136;
}
.card {
    color: #cf6bdd;
}

input{
    background-color: #cf6bdd;
    outline: none;
    border: none;
    width:40px;
    height: 30px;
    border-radius: 6px;
    font-size: 16px;
    padding-left: 4px;
    color: #eab4f1;
}

select{
    width: 60px;
    height: 50px;
    font-size: 40px;
}

.card1{
   
    left: 1000px;
    top: 200px;
    box-shadow: 35px 31px 16px -5px rgba(0,0,0,0.13);
-webkit-box-shadow: 35px 31px 16px -5px rgba(0,0,0,0.13);
-moz-box-shadow: 35px 31px 16px -5px rgba(0,0,0,0.13);
}

.a{
   
   left: 400px;
    top: -280px;
    box-shadow: 35px 31px 16px -5px rgba(0,0,0,0.13);
-webkit-box-shadow: 35px 31px 16px -5px rgba(0,0,0,0.13);
-moz-box-shadow: 35px 31px 16px -5px rgba(0,0,0,0.13);
}

</style>
<body>
   
   <center> <h1>GIBLAR APA ADANYA</h1></center>
<div class="card1 card dropdown "style="width: 18rem; padding:40px;">
    <center><h2>kalkulator biasa aja</h2>
    <br><br>
    
    <form action="" method="POST" class="mb-3" style=".bg-primary">
   <input type="number" name="nomor2"  >
        <select name="operator" class="btn btn-secondary dropdown-toggle" >
            <option value="+" class="dropdown-item" >+</option>
            <option value="-" class="dropdown-item" >-</option>
            <option value="*" class="dropdown-item" >x</option>
            <option value="/" class="dropdown-item" >/</option>
        </select> 
     <input type="number" name="nomor1" >      
        <br><br>
         <button type="submit" name="kirim" value="Hitung" class="btn btn-secondary">tentukan</button>
        </center>
<?php class aritmatika {
    private $nomor2, $nomor1;
    protected $hasil;

    public function __construct($nomor2, $nomor1) {
        $this->nomor2 = $nomor2;
        $this->nomor1 = $nomor1;
        $this->hasil = null;
    }

    private function kalkul($operator) {
    switch ($operator) {
     case '+':
    $this->hasil = $this->nomor2 + $this->nomor1;
                break;
         case '-':
            $this->hasil = $this->nomor2 - $this->nomor1;
                break;       
            case '*':
             $this->hasil = $this->nomor2 * $this->nomor1;
                break;   
     case '/':
         $this->hasil = $this->nomor2 / $this->nomor1;
                break;

                     
                default:
                echo "gabisa";
                
        }
    }

    public function setNomor($nomor2, $nomor1) {
        $this->nomor2 = $nomor2;
        $this->nomor1 = $nomor1;
    }
    public function gethasil() {
        return $this->hasil;
    }
    public function tambah() {
        $this->kalkul('+');
    }
    public function pengurangan() {
        $this->kalkul('-');
    }
    public function kali() {
        $this->kalkul('*');
    }
    public function bagi() {
        $this->kalkul('/');
    }
     
}
if (isset($_POST['kirim']) ) {
    
    $nomor2 = $_POST['nomor2'];
    $nomor1 = $_POST['nomor1'];
    $operator = $_POST['operator'];


    $kalku = new aritmatika($nomor2, $nomor1);
    switch ($operator) {
        case '+':
    $kalku->tambah();
            break;
        case '-':
    $kalku->pengurangan();
            break;
        case '*':
     $kalku->kali();
            break;
        case '/':
    $kalku->bagi();
            break;
            case '%':
     $kalku->modulus();
                    break;
    }
    $hasil = $kalku->gethasil();
    echo " <h1><center> $hasil</center></h1>";


    
} ?>
</div>

 <div class="w3-container">
   
    
 </div>
</form>
<br><br>
<br><br>
<br><br>
<div class="a card input-group mb-3" style="width: 20rem;  padding:40px;">
<center>
<h2>inih untuk nilai</h2>
  <form method="post" action="" class="mb-3">
    <label for="nilai">Masukkan Nilai:</label><br>
    <div class="input">
        <input type="number" name="nilai1" id="nilai1" required  ><br><br>
        <input type="number" name="nilai2" id="nilai2" required  ><br><br>
        <input type="number" name="nilai3" id="nilai3" required  ><br><br>
    </div>
    
<button type="submit" value="Tentukan" name="Tentukan" class="btn btn-secondary">tentukan</button>
</center>
    <?php

if(isset($_POST['Tentukan']) ) {
    $nilai1 = $_POST["nilai1"];
    $nilai2 = $_POST["nilai2"];
    $nilai3 = $_POST["nilai3"];

    $jumlah_nilai = $nilai1 + $nilai2 + $nilai3;
    $rata_rata = $jumlah_nilai / 3;

    $grade = '';

    if ($rata_rata >= 80) {
      $grade = 'A';
    } elseif ($rata_rata >= 70) {
      $grade = 'B';
    } elseif ($rata_rata >= 60) {
      $grade = 'C';
    } elseif ($rata_rata >= 50) {
      $grade = 'D';
    } else {
      $grade = 'E';
    }
// giblar zahran maula ganteng eh giblar mantap
    echo "<br>Nilai 1: $nilai1";
    echo "<br>Nilai 2: $nilai2";
    echo "<br>Nilai 3: $nilai3";
    echo "<br>Jumlah Nilai: $jumlah_nilai";
    echo "<br>Rata-rata Nilai: ". number_format($rata_rata, );
    echo "<br>Grade: $grade";
  }
  


//sdass

?>
  </form>
 </div>
    
</body>
    
</html>



