
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Balcan currency exchange</title>

  
    <style>
        html, body {
            background-color: lightblue;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
        table, th, td {
            width:70%; 
            margin-left:15%; 
             margin-right:15%;
            align-self: center;
            border: 1px;
            border-style: dotted;
        }
        #possition {
            width:70%; 
            margin-left:15%; 
            margin-right:15%;
            align-self: center;
            background-color: white;
            text-align: center;

        }

        #resoult{
            width:70%; 
            margin-left:15%; 
            margin-right:15%;
            align-self: center;
            font-size: 20px;
            color: green;
            background-color: white;
            text-align: center;

        }
    </style>
</head>
<body>
    <div id="possition">
<h1> Table of currencies - foreign currencies to zloty ( How many zloty do you need, to buy foreign currency)</h1>
<table>
<tr>
    <th><b>Name of currency</th>
    <th>Rate to PLN </b></th>
</tr>
<tr>
    <th>USD</th>
    <th>{{print_r($new_dolar_dolar) }} </th>
</tr>
<tr>
    <th>Albanian Lek</th>
    <th>{{print_r($new_lek_lek) }} </th>
</tr>
<tr>
    <th>Euro</th>
    <th>{{print_r($new_euro_euro) }}</th>
</tr>
<tr>
    <th>Croatian Kuna</th>
    <th>{{print_r($new_kun_kun) }}</th>
</tr>
<tr>
    <th>Bulgarian Lewa</th>
    <th>{{print_r($new_lewa_lewa) }}</th>
</tr>
</table>



    <h2>How much PLN do you want to exchange?</h2>
    <form  method="get">
<input type="number"  name="currency_quantity" min="1" value="1">

    
    <br>
    <h2>On what currency to you want to exchange</h2>
    <select name="exchange">
        <option value="dolar">Dolar</option>
        <option value="lek">Albanian LEK</option>
        <option value="eur" selected>Euro</option>
        <option value="kun">Croatian Kuna</option>
        <option value="lew">Bulgarnia Lewa</option>
      </select>
<br>
<br>

    <button type="submit" value="Submit">Convert</button></form>
    

<br>
<br>


</div>
<div id="resoult">
    <h2> After conversion you will receive: </h2>
<?php
if ($_GET) 
{
    
    switch($_GET['exchange'])
{
    

case('dolar'):
 
(int)$input =(int)($_GET['currency_quantity']);
echo round($input / $new_dolar_dolar,2);
echo ' USD';


break;
    
case('lek'):

(int)$input =(double)($_GET['currency_quantity']);

echo round($input / $new_lek_lek,2);
echo ' ALL';
$selected = 'selected';

break;
   

    case('eur'):
(int)$input =(double)($_GET['currency_quantity']);

echo round($input / $new_euro_euro,2);
echo ' EUR';
break;
   
    case('kun'):
 
(int)$input =(double)($_GET['currency_quantity']);

echo round($input / $new_kun_kun,2);
echo ' KUN';
break;
    
    case('lew'):
    
(int)$input =(int)($_GET['currency_quantity']);
echo round($input / $new_lewa_lewa,2);
echo ' LEW';
break;
    default:
   echo 'Chose your currency';
}  
}?>
<br>
<br>
</div>

</body>
</html>
