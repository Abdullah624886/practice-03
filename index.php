<html>
    <head>
        <title>Medigene IT</title>
            <style>
                .phpcoding{width:800px; margin:0 auto; background:#ddd; padding:20px; min-height:460px;}
                .headphp, .footphp{background:#444; color:#fff; text-align:center;}
                .maincontent{min-height:450px}
                .date{text-align:center}
            </style>
    </head>
    <body>
        <div class="phpcoding">
            <section class="headphp">
                <h1>Medigene IT<h1>
            </section>

<section class="maincontent">
    <h2>ABC<h2>
<?php
    $myfile = fopen('New.txt', 'r') or die('not pen your file');
    // echo fread($myfile, filesize('New.txt'));
    // fclose($myfile);
    while(!feof($myfile)){
        echo fgets($myfile) . "<br>";
    }
?>

<?php
    function exclaim($str) {
        return $str . "! ";
      }
      function ask($str) {
        return $str . "? ";
      }
      function printFormatted($str, $format) {
        echo $format($str);
      }
      
      printFormatted("Hello world", "exclaim");
      printFormatted("Hello world", "ask");

?>
<p class="date">OOP</p>
<?php
class Fruit{
    // Properties
    public $name;
    public $color;
    
    // methods
    function set_name($name){
        $this->name=$name;
    }
    function get_name(){
        return $this->name;
    }
    function set_color($color){
        $this->color=$color;
    }
    function get_color(){
        return $this->color;
    }
}
$apple = new Fruit();
$color = new Fruit();
$apple->set_name('Apple');
$color->set_color('Banana');

echo "name: " . $apple->get_name();
echo "<br>";
echo $color->get_color();


?>


</section>

<section class="footphp">
<h1>sarker<h2>
</section>
</div>

</body>
</html>
