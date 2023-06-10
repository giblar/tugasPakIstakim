<?php
// interface adalah kerangka dasar
interface human1 {
    //dibawah ini adalah metod nya atau fungsi nya
    public function kebiasaan();
    public function hobi();
    public function makanan();

}
class giblar implements human1 {
    // jadi class yang bernama implementasinya adalah human1
    public function kebiasaan(){
    return "main hp sambil tiduran</br>";
}

public function hobi(){
    return "melamun </br>";
}
public function makanan(){
    return "makanan kesukaan nya adalah roti abon</br>";
}

}

class ucup implements human1 {
    public function kebiasaan(){
    return "makan beras mentah</br>";
}

public function hobi(){
    return "mancing </br>";
}
public function makanan(){
    return "makanan kesukaan nya salmon</br>";
}

}


class rusdi implements human1 {
    public function kebiasaan(){
    return "tersenyum sambil makan</br>";
}

public function hobi(){
    return "cukur rambut</br>";
}
public function makanan(){
    return "makanan kesukaan nya adalah kakap</br>";
}
}
$giblar = new giblar;
$ucup = new ucup;
$rusdi = new rusdi;

echo "perilaku giblar </br>";
echo $giblar->kebiasaan();
echo $giblar->hobi();
echo $giblar->makanan();

echo "</br>";
echo "perilaku ucup : </br>";
echo $ucup->kebiasaan();
echo $ucup->hobi();
echo $ucup->makanan();

echo "</br>";
echo "perilaku rusdi : </br>";
echo $rusdi->kebiasaan();
echo $rusdi->hobi();
echo $rusdi->makanan();
//===============================================================
                                                                //= 
                                                                 //= 
 // awalanya ditulis interface                                    //=
interface hewan{                                                   //= 
    public function kebiasaan();
    public function hobi();
    public function makanan();

}
//klas turunan interface menggunakan kata implements
class giblar implements hewan{
   
}
//kalo abstract menggunakan abstract class

abstract class hewan {

}
// dan kalo turunan abstract class ada seperti ini
class Dog extends Animal {
    public function makeSound() {
        echo "Dog is barking.";
    }
}
//yaitu menggunakan tulisan extends sesudah nama class

//jika abstrak bisa langsung mengisi function dengan langsung berbeda dengan interface 
/* interface dapat dimodifikasi 
di interface gabisa bikin kontraktor
interface ga puya data field
abstrask dapat memiliki data field
akseses bilitak memmber data
abstrack dapat memilliki semua jenis member
seperti public dan protecd
member dan public saja kalo interface*/




















