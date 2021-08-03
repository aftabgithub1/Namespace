<?php
namespace classes;

class Date{
  public function __construct() {
    Main::print();
    echo "I am from Aftab class <br>";
    date_default_timezone_set('Asia/Dhaka');
    echo "<strong>Today : </strong>".date('d-M-Y h:i:s A')."<br>";
    echo "<strong>Day Name : </strong>".date_format(date_create('1/12/1980 04:30 PM'), 'l')."<br>";
    echo "<strong>Grneral : </strong>".date_format(date_create('1/12/1980 04:30 PM'), 'd-M-Y')."<br>";
    echo "<strong>12 hour : </strong>".date_format(date_create('1/12/1980 04:30 PM'), 'h:i:s A')."<br>";
    echo "<strong>24 hour : </strong>".date_format(date_create('1/12/1980 04:30 PM'), 'H:i:s')."<br>";
    echo "<strong>MySql DB format : </strong>".date_format(date_create('1980-12-01 04:30 PM'), 'Y-m-d H:i:s')."<br>"; // MySQL db
  }

  public function parseDate($string, $format) {
    date_default_timezone_set('Asia/Dhaka');
    return date_format(date_create($string), $format);
  }
}
?>