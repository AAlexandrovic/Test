<?php
include "simple_html_dom.php";
//$url = "https://iss.moex.com/iss/engines/stock/markets/shares/boards/TQBR/securities/VTBR/candles.xml?interval=31&from=2021-01-01";
//$ch = curl_init();
//curl_setopt($ch, CURLOPT_URL, $url);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//$xmlresponse = curl_exec($ch);
//$xml=simplexml_load_string($xmlresponse);
//print_r($xml);


//$url = 'https://iss.moex.com/iss/engines/stock/markets/shares/boards/TQBR/securities/VTBR/candles.xml?interval=31&from=2021-01-01';
//$xml = file_get_contents($url);
//$xml_data = simplexml_load_string($xml);
//$json = json_encode($xml_data);
//$json_data = json_decode($json, true);
//foreach ($json_data as $value){
//   echo htmlspecialchars($value);
//}
//    $valueXML = [];
//foreach ($json_data as $value){
//    $valueXML[]=$value;
//}
//
//print_r($valueXML);
//$xml = simplexml_load_file('https://iss.moex.com/iss/engines/stock/markets/shares/boards/TQBR/securities/VTBR/candles.xml?interval=31&from=2021-01-01');
//$xml = file_get_contents('https://iss.moex.com/iss/engines/stock/markets/shares/boards/TQBR/securities/VTBR/candles.xml?interval=31&from=2021-01-01');
//echo "<pre>".htmlspecialchars($xml)."</pre>";
//$ch = curl_init('https://iss.moex.com/iss/engines/stock/markets/shares/boards/TQBR/securities/VTBR/candles.xml?interval=31&from=2021-01-01');
//curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
//$res=curl_exec($ch);
//$xml_data = simplexml_load_string($res);
//$json = json_encode($res);
//$json_data = json_decode($json, false);
//$massive = $xml_data;


//$feedObj = simplexml_load_file("https://iss.moex.com/iss/engines/stock/markets/shares/boards/TQBR/securities/VTBR/candles.xml?interval=31&from=2021-01-01");
//$feedUrl = 'https://iss.moex.com/iss/engines/stock/markets/shares/boards/TQBR/securities/VTBR/candles.xml?interval=31&from=2021-01-01';
//$rawFeed = file_get_contents($feedUrl);
//$xml = new SimpleXmlElement($rawFeed);
//$output = $xml->asXML();
//echo $output;

/////////////////////////////вывод черед print_r
//$feedObj = simplexml_load_file("https://iss.moex.com/iss/engines/stock/markets/shares/boards/TQBR/securities/VTBR/candles.xml?interval=31&from=2021-01-01");
////echo '<pre>';
////print_r ($feedObj);
////echo '</pre>';
//foreach ($feedObj->data->rows->row as $offer){
//    echo '<br>';
//    echo print_r($offer['open']);
//    echo '<br>';}
////////////////////////////////////////
////
//function getRates(){
//    $url = "http://www.nationalbank.kz/rss/rates_all.xml";
//    $dataObj = simplexml_load_file($url);
//    if ($dataObj){
//        foreach ($dataObj->channel->item as $item){
//            echo "title: ".$item->title."<br>";
//            echo "pubDate: ".$item->pubDate."<br>";
//            echo "description: ".$item->description."<br>";;
//            echo "quant: ".$item->quant."<br>";
//            echo "index: ".$item->index."<br>";
//            echo "change: ".$item->change."<br>";
//        }
//    }
//}
//echo getRates();
echo "<!DOCTYPE HTML>";
echo "<html><head>";

echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
echo "<style type='text/css'>
table{
 border: 2px solid black;
}
form label{
width: 300px;
}

form input{
width: 300px;

}
#end{
background: red;
}
#close{
background: chartreuse;
}
 form input{
    width: 200px;
    height: 120px;
    scroll-snap-align: start;
    margin: 10px;
    border: 2px solid black;
}
#name_id{
    display: flex;
    background: #f7fafc;
    overflow-x: auto;
    scroll-snap-type: x mandatory;
}

#value{
    background: #a0aec0;
    scroll-snap-align: start;
    display: flex;
    overflow-x: auto;

}
#value div{
    border: 4px double black;
    background: #718096;
    width: 33%;
    height: 30%;
    margin-left: 5px;
    scroll-snap-type: x mandatory;
    justify-content: center;
}
.open{
    background: chartreuse;
}
.close{
    background: red;
}
.time{
    background: aliceblue;
}
#price{
   background: #a0aec0;
    scroll-snap-align: start;
    display: flex;
    overflow-x: auto;
}
#price div{
 border: 4px double black;
    background: #718096;
    width: 33%;
    height: 30%;
    margin-left: 5px;
    scroll-snap-type: x mandatory;
    justify-content: center;
}
#dividends{
background: #a0aec0;
width: 30%;

}
#dividends div{
border: 2px double black;
background: #edf2f7;
}
</style>";
echo "<title>moex.ru</title>";
echo "</head>";
echo "<body>";
echo "<div id='result'></div>";
echo "<div id='name_id'>";
$nameURL = "https://iss.moex.com/iss/engines/stock/markets/shares/securities.xml";//список seid
$dataName = simplexml_load_file($nameURL);
if ($dataName){

    foreach ($dataName->data->rows->row as $name){
        //echo " "." " .$name['SECID']." " . " "." " .$name['SHORTNAME']." ";
        echo "<table>";
        $a = $name['SECID'];
        $b= $name['SHORTNAME'];
        echo "<form name='feedback' method='POST' action='moex.php'>";

        echo "<tr><label>$b<input type='hidden' name='id' value=$a ></label></tr>";

        echo "<tr><input type='submit'  value=$a></tr>";
        echo "</form>";
        echo "</table>";
    }

}
echo "</div>";
//echo "<form name='feedback' method='POST' action='moex.php'>";
//echo "<label>Введите id компании: <input type='text' name='id'></label>";
//echo "<input type='submit' name='send' value='Показать'>";
//echo "</form>";
if(isset($_POST["id"])) {
    $id = $_POST["id"];
}else{
    echo "Чтобы получить данные выберите компанию"."</br>";
}
//echo @"<h1>Цена за год:$id</h1>";
echo "ID выбранной компании:" . @$id;
echo "<div id='value'>";

@$url = "https://iss.moex.com/iss/engines/stock/markets/shares/boards/TQBR/securities/$id/candles.xml?interval=31&from=2019-01-01";

$dataObj = simplexml_load_file($url);
if ($dataObj){
    foreach ($dataObj->data->rows->row as $item){
        echo "<div class='w'>"."<p>Период:"."</br>"."<p class='time'>" .$item['begin']." </p>"."</p> " . "Цена открытия: "."<p class='open'>" .$item['open']."</p>" . " Цена закрытия: "."<p class='close'>" .$item['close']."</p>"."</div>" .  "<br>";
//            echo "pubDate: ".$item->pubDate."<br>";
//            echo "description: ".$item->description."<br>";;
//            echo "quant: ".$item->quant."<br>";
//            echo "index: ".$item->index."<br>";
//            echo "change: ".$item->change."<br>";
    }
}
echo "</div>";
echo "<h1>Почасовая цена акции</h1>";
date_default_timezone_set('UTC');
$today = date("Y-m-d");
@$urlT = "https://iss.moex.com/iss/engines/stock/markets/shares/boards/TQBR/securities/$id/candles.xml?interval=60&from=$today";
echo "<div id='price'>";

$data = simplexml_load_file($urlT);
if ($data){
    foreach ($data->data->rows->row as $item){
        echo "<div >";
        echo "Время:";
        echo "<p id='end'> "." " .$item['end']." " ."</p> " .  "<br>";
        echo "Цена:";
        echo "<p id='close'> "." " .$item['close']." " ."</p>" .  "<br>";
        echo "</div >";
//            echo "pubDate: ".$item->pubDate."<br>";
//            echo "description: ".$item->description."<br>";;
//            echo "quant: ".$item->quant."<br>";
//            echo "index: ".$item->index."<br>";
//            echo "change: ".$item->change."<br>";
    }
}


echo "</div>";
echo "Текущая цена акции<div id='result_price'>".  "<br>";
echo "</div>";
echo "<div id='math'>";
echo "Ожидаемые дивиденды<input id='div' type='text' class='form-control'>".  "<br>";
echo "Ожидаемая цена акции через год<input id='future' type='text' class='form-control'>".  "<br>";
echo "Желаемый процент прибыли в формате 1.(%)<input id='proc' type='text' class='form-control'>".  "<br>";
echo "<button id='btn' class='btn btn-sm btn-outline-primary'>Получить значение</button>".  "<br>";
echo "</div>";
echo "Рекомендуемая цена покупки<div id='Storage_price'>";
echo "</div>";
echo "<h1>Информация по дивидендам</h1>";
@$urDiv = "https://iss.moex.com/iss/securities/$id/dividends.xml";
echo "<div id='dividends'>";
echo "<p> По данной акции нет информации по дивидендам. </p>";
$div = simplexml_load_file($urDiv);

if ($div){
    foreach ($div->data->rows->row as $item){

            echo "<div id='true'>" . " Выплаченные дивиденды " . $item['value'] . $item['currencyid'] . " / Дата выплаты : " . $item['registryclosedate'] . " " . "</div>";

    }
}
echo "</div>";

echo "<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js'></script>";
echo "<script type='text/javascript'>
$(document).ready(function(){
//var a = $('#name_id input').each(function() {
// console.log( $(this).attr('value') );
//});

//var a = $('#name_id input').each(function() {
// var b = ($(this).attr('value'));
// var c = $.makeArray(b);
//     for (var i = 0; i < c.length; i++) {
//      console.log('Index ' + i + ':' + c[i]);
//    }
// //$('#result').append(c + '</br>'); добавить значение в div
//
//});
/////////////////////////////////////////////////////// добавление в тег данных;
//var a = $('#value .open').each(function() {
//
////   console.log($(this).text());
//    var b = $(this).text();
//    var sum2 = 0;
//    var c = $.makeArray(b);
//
//for (var i = 0; i < c.length; i++) {
//   //  var sum = parseInt(c[i]) + 1;
//     //var sum2 = parseInt(c[i]);
//     var zxc = parseFloat(c[i])*0.10;
//     var qwe = (zxc + (parseFloat(c[i]) + parseFloat(c[i])*0.15))/1.2;
//     var asd = (zxc + qwe)/1.2;
//     console.log(asd);
//    sum2 += parseFloat(c[i]) << 0;
//    //parseInt(c[i]);
//
//    }
//$('#result').append('<div>' + parseFloat(sum2) +'</div>' + '</br>');
// var b = ($(this).attr('value'));
// var c = $.makeArray(b);
//     for (var i = 0; i < c.length; i++) {
//      console.log('Index ' + i + ':' + c[i]);
//    }
//});
/////////////////// просуммировать массив jquery нужно забрать числа из body и собрать в новый массив вне цикла each

//var sum = 0;
//var z = $('#result div').each(function() {
//
////   console.log($(this).text());
//    var x = $(this).text();
//    var v = $.makeArray(x);
//
//    for (var i = 0; i < v.length; i++) {
//   //  var sum = parseInt(c[i]) + 1;
//     //var sum2 = parseInt(c[i]);
//    sum += parseFloat(v[i]);
//    //parseInt(c[i]);
//
//
//    }
//});
//console.log(parseFloat(sum));
/////////////////////второй вариант
var m = $('#price p:last').text();

var div = $('#btn').click(function(){
    var price = $('#price div:last').text();
	var divident = ($('#div').val());
	var futurePrice = ($('#future').val());
	var procent = ($('#proc').val());
    var math = (parseFloat(divident) + parseFloat(futurePrice))/parseFloat(procent);
    var resutMath = (parseFloat(divident) + parseFloat(math))/parseFloat(procent);
    console.log(resutMath);
    $('#Storage_price').text(parseFloat(resutMath));
    $('#math').each(function (){
        $('#div').val('');
        $('#future').val('');
        $('#proc').val('');
    });
});
var rt = parseFloat(m) + parseFloat(div);
console.log(rt);

$('#result_price').append('<div>' + parseFloat(m) +'</div>');


var dividends = $('#dividends #true');

$('#dividends p').replaceWith(dividends);
    //('#price div').each(function() {
//    console.log($(this).text());
//
//});

//$.each(c,function(){sum+=parseFloat(this) || 0;});

////////////////////////////
//$.each(arr, function( index, value ) {
//});
//var ar = Array.from($('#open'));

});

</script>";




echo "</body></html>";
