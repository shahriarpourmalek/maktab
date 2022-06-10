<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>

        /*.container{*/
        /*    margin:  0 auto;*/
        /*    width: 45%;*/
        /*}*/
        /*.matn{*/
        /*    position: relative;*/
        /*    margin: 100px 0 0 0;*/
        /*    width: 100%;*/

        /*}*/
        /*.forms{*/
        /*    position: relative;*/
        /*}*/
        /*.first_line{*/
        /*    position: absolute;*/
        /*  margin: 10px 0 0 0;*/
        /*}*/
        /*input[type="text"]{*/
        /*    border-style: none;*/
        /*    border-bottom:1px solid  #4a4a4a ;*/
        /*    margin: 0 20px 20px 0;*/
        /*}*/
        /*.massage{*/
        /*    color: #4a4a4a;*/
        /*    margin:20px 0 0 0;*/
        /*}*/
        /*input[type="submit"]{*/
        /*    margin: 50px 90px ;*/
        /*    width: 200px;*/
        /*    height: 40px;*/
        /*    border: 0 none ;*/
        /*    background: linear-gradient(to right,dodgerblue,purple);*/
        /*    color: white;*/

        /*}*/
        .container {
            margin: 20px auto;
            width: 80%;
        }

        .box {
            width: 500px;
            height: 400px;
            box-shadow: 1px 1px 10px 1px #525252;
            position: relative;
            margin: 30px auto 0 auto;
        }

        .matn {
            width: 40%;
            /*position: absolute;*/
            margin: 10px 10px 0 0;
            float: right;
        }

        .shadowarea {
            box-shadow: 0 1px 1px 1px #525252;
            width: 40%;
            margin: 21px 0 0 0;
        }

        .picture {
            position: absolute;
            top: 35%;
            right: 50%;
        }

        .learn-more {
            padding: 5px;
            border: solid 1px #525252;
            margin: 40px 0 0 0;
            text-align: center;
            display: inline-block;
            border-radius: 30px;
        }

        .learn-more a {
            text-decoration: none;
            color: #525252;
        }

    </style>
</head>
<body>
<!--<div class="container">-->
<!--   <div class="matn">-->
<!--       <h1>Contact Us</h1>-->
<!--       <p>-->
<!--           wgegr we gw grw weeg ;kwkwfw;lfw r;gkwrgk;wrgk ;rgk-->
<!--           weg;wkgw;ksdkv;sk'ds;'dsf'ls'sf'sl'sf's'fls'lfs'flwmn regw'-->
<!--       </p>-->

<!--   </div>-->
<!--    <div class="forms">-->
<!--        <form action="" >-->
<!--            <div class="first_line">-->
<!--                <input type="text" placeholder="First Name*">-->
<!--                <input type="text" placeholder="First Name*">-->
<!--                <br>-->
<!--                <input type="text" placeholder="First Name*">-->
<!--                <input type="text" placeholder="First Name*">-->
<!--                <br>-->
<!--                <label class="massage">massage*</label>-->
<!--                <br>-->
<!--                <textarea name="" id="" cols="50" rows="10">-->

<!--                </textarea>-->
<!--                <br>-->

<!--                <label class="massage">* sdvsdvvqe okewvweov oevwmov vemowvwom</label>-->
<!--                <br>-->
<!--                <input class="submitbutton" type="submit" value="SUBMIT MASSAGE">-->

<!--            </div>-->


<!--        </form>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="container">-->
<!--<div class="box">-->
<!--<div class="matn">-->
<!--    <div class="shadowarea"></div>-->
<!--    <h1>Nature</h1>-->
<!--    <p> efoefoe  eof eo eo eo fnom fmegbmnlm oe noe no geomgjegoe e onefnoefone eofmnenfoefon efn oeonenfoenoe e nofonnofee</p>-->
<!--<div class="learn-more">-->
<!--    <a href="#">Learn More</a>-->
<!--</div>-->
<!--</div>-->
<!--    <div class="picture">-->
<!--        <img src="C:\Users\shahriar_po\Downloads\collage.jpg" width="400px" height="300px">-->
<!--    </div>-->
<!--</div>-->
<!---->
<!--</div>-->
<?php
//function maqsom($a, $b)
//{
//
//    for($i = 1 ; $i <$a;$i++){
//        if($a%$i ==0){
//            $maqsomElayA[] =$i;
//        }
//
//    }
//    for($j = 1 ; $j<$b ;$j++){
//        if($b%$j == 0){
//            $maqsomElayB[] =$j;
//        }
//    }
//   echo print_r($maqsomElayA)."<br>";
//    echo print_r($maqsomElayB)."<br>";
// echo  print_r( array_intersect($maqsomElayA,$maqsomElayB));
//
//}
//maqsom(6,12);
//    function adad($b)
//    {
//        $maqsomElayB =array();
//        $adadKamel = 0;
//        for ($j = 1; $j < $b; $j++) {
//            if ($b % $j == 0) {
//                $maqsomElayB[] = $j;
//            }
//
//        }
//
//        foreach ($maqsomElayB as $value) {
//            $adadKamel += $value;
//        }
//        if ($adadKamel == $b) {
//            echo "$b yek adad kamel ast<br>";
//        }
////        else
////            echo "$b kamel nist<br>";
//
//    }
//
//
//
//for($i=1 ;$i<10000;$i++){
//    adad($i);
//}
function amaliat($adad1,$adad2,$amaliat){
    if ($amaliat==="+"){
        return $adad1+$adad2;
    }
    elseif ($amaliat==="-"){
        return $adad1-$adad2;
    }
    elseif ($amaliat==="*"){
        return $adad1*$adad2;
    }
    elseif ($amaliat==="/"){
        return $adad1/$adad2;
    }
    else
        return "WTF";

}
$amal = amaliat(5,6,"+");
echo $amal;
?>


</body>
</html>