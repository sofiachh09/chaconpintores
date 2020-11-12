<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pruebascontroler extends Controller
{
    //
    public function secue1($lado){
        $volumen= ($lado/2);
        
        return view('secue1',['lado'=>$lado,
        'volumen'=>$volumen]);
        
    }

    public function secue2($alt){
        $base1=8; 
        $base2=11;
        $volumen=(($base1+$base2)*$alt/2);
        return view('secue2',['alt'=>$alt,
        'volumen'=>$volumen,
        'base1'=>$base1,
        'base2'=>$base2]);
        
    }
    public function secue3($altura){
        $radio=8;
        $volumen1= (3.1416*($radio*$radio)/3);
        
        return view('secue3',['altura'=>$altura,
        'radio'=>$radio,
        'volumen1'=>$volumen1]);
        
    }

    public function secue4($base){
        $altura=8;
        $area= (($base*$altura)/2);
        
        return view('secue4',['base'=>$base,
        'altura'=>$altura,
        'area'=>$area]);
        
    }
    
    public function secue5($radi){
       
        $circu= (2*3.1416*$radio);
        
        return view('secue5',['radi'=>$radi,
        'circu'=>$circu]);
        
    }

    //Desiciones
    public function desi1(){
       $edad=46;
        $voto;
        if($edad>=18)
        $voto='puede votar';
        else
        $voto = 'no puede votar';
        return view('desi1')
        ->with('edad',$edad)
        ->with('voto',$voto);
    }

    public function desi2(){
        $horast=812;
        $pagoH=500;
        $pagoF;
         if($horast>40)
         $pagoF=((40*$pagoH)+($horast-40)*2*$pagoH);
         else
         $pagoF = $horast*$pagoH;
         return view('desi2')
         ->with('horast',$horast)
         ->with('pagoH',$pagoH)
         ->with('pagoF',$pagoF);
     }

     public function desi3(){
        $dinero=150;
         $compra;
         if($dinero<=10)
            $compra='Lo que se puede comprar es una targeta';
         elseif($dinero<=100)
            $compra='Lo que se puede comprar son unos chocolates';
         elseif($dinero<=250)
            $compra='Lo que se puede comprar son unas flores';
         elseif($dinero<=251)
            $compra='Lo que se puede comprar son unas joyas';
         return view('desi3')
         ->with('dinero',$dinero)
         ->with('compra',$compra);
     }

     public function desi4(){
        $horas=150;
         $pagos;
         if($horas<=2)
            $pagos=$horas*5;
         elseif($horas<=5)
             $pagos=(($horas-5)*4)+10;
         elseif($horas<=10)
            $pagos=37+(($horas-10)*2);
         else
            $compra='Lo que se puede comprar son unas joyas';
         return view('desi4')
         ->with('horas',$horas)
         ->with('pagos',$pagos);
     }

     public function desi5(){
        $calif=7;
         $aprore;
         if($calif>=9.5)
            $aprore='su calificacion es: A';
         elseif($calif>=8.5)
             $aprore='su calificacion es: B';
        elseif($calif>=7.5)
             $aprore='su calificacion es: C';
        elseif($calif>=6.5)
             $aprore='su calificacion es: D';
        elseif($calif>=6)
             $aprore='su calificacion es: E';
        else
        $aprore='su calificacion es: F';
         return view('desi5')
         ->with('calif',$calif)
         ->with('aprore',$aprore);
     }
//ciclos
    public function ciclo1(){
        $años=6;
        $salario=1500;
        $IT=0;
        $Incremento=0;

        for($i=1; $i<=$años; $i++){
        $Incremento=($IT*0.10)+$salario;
        $IT=$IT+$Incremento;
        echo"En el años $i su salario sera de: $Incremento";
        }
        return view('ciclo1',['salario'=>$salario]);
    }

    public function ciclo2(){
        $array= array(-1,8,4,6,-7,9,-4);
        $menor=0;
        $mayor=0;
        $igual=0;

        for($array as $valor){
            if($valor==0){
                $igual++;}
            elseif($valor<0){
                $menor++;}
            else{
                $mayor++;
            }
        }
        return view('ciclo2',['mayor'=>$mayor
        'array'=$array,
        'igual'=$igual,
        'menor'=$menor]);
    }
    public function ciclo3(){
        $mone=0;
        $bille=0;
        $billete=['100'=>1, '200'=>7, '500'=>3, '50'=>9]
        $moneda=['1'=>10, '2'=>4, '5'=>100, '10'=>200]

        foreach($moneda as $mo=>$cm){
            $montom=$mo*$cm;
            $mone=$mone+$montom;    
        }
        foreach($billete as $bi=>$cb){
            $monb=$bi*$cb;
            $bille=$bille+$monb;    
        }
        $total=$mone+$bille;
        return view('ciclo3',[
        'moneda'=>$moneda,
        'mone'=$mone,
        'billete'=$billete,
        'total'=$total,
        'bille'=$bille]);
    }
    public function ciclo4(){
        $array= array(5,8,9,10,7,6,1);
        $apro=0;
        $repro=0;
        

        for($array as $valor){
            if($valor<=5){
                $repro++;}
            else{
                $apro++;
            }
        }
        return view('ciclo4',['array'=>$array
        'reprovados'=$repro,
        'aprobados'=$apro]);
    }

    public function ciclo5(){
        
        $multi=10;
        $i=0;
        
        while($i<=10){
            $res=$multi*$i;
            echo "multiplicacion +$i= $res"
        }
        return view('ciclo5',['multi'=>$multi]);
    }

 
}