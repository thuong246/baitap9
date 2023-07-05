<!-- <?php
// Bài tập Tạo lớp Điểm 2D:
// Tạo một lớp Diem2D với các thuộc tính x và y.
// Tạo phương thức để tính khoảng cách từ điểm hiện tại tới một điểm khác.
echo "Câu 2: ";
class Point2D {
    public $x;
    public $y;

     public function __construct($x, $y) {
         $this->x = $x;
        $this->y = $y;
    }

    public function calDistance($otherPoint) {
         $distanceX = $this->x - $otherPoint->x;
         $distanceY = $this->y - $otherPoint->y;
         $distance = sqrt(pow($distanceX, 2) + pow($distanceY, 2));
         return $distance;
     }
 }

$point1 = new point2D(2, 4);
$point2 = new point2D(0, 1);
 $distance = $point1->calDistance($point2);
 echo "Khoảng cách là: " . $distance;
//Bai3: Tạo lớp Mảng
class IntegerArray {
    private $array;
  
    public function __construct($array) {
      $this->array = $array;
    }
  
    public function calSum() {
      return array_sum($this->array);
    }
  
    public function calAvg() {
      $sum = $this->calSum();
      $element = count($this->array);
      return $sum / $element;
    }
  
    public function findIntegerArray() {
      return max($this->array);
    }
  }
  $IntegerArray = new IntegerArray([1, 2, 3, 4, 5]);
  echo "Tổng: " . $IntegerArray->calSum() . "<br>";
  echo "Trung bình: " . $IntegerArray->calSum() . "<br>";
  echo "Phần tử lớn nhất: " . $IntegerArray->findIntegerArray() . "<br>";
//Bai4: Tao lớp Đồng hồ
class Clock {
    private $hour;
    private $minute;
    private $second;


    public function __construct($hour,$minute,$second) {
        $this->hour = $hour;
        $this->minute = $minute;
        $this->second = $second;
    }
    public function displayTime() {
        $formattedTime = sprintf("%02d:%02d:%02d", $this->hour, $this->minute, $this->second);
        return $formattedTime;
    }

    public function increaseSecond() {
        $this->second++;
        if ($this->second >= 60) {
            $this->second = 0;
            $this->minute++;
            if ($this->minute >= 60) {
                $this->minute = 0;
                $this->hour++;
                if ($this->hour >= 24) {
                    $this->hour = 0;
                }
            }
        }
    }
}
// Sử dụng lớp Clock
$clock = new Clock(12, 30, 45);

$time = $clock->displayTime();
echo "Current time: " . $time . "<br>";

$clock->increaseSecond();
$newTime = $clock->displayTime();
echo "Time after increasing second: " . $newTime . "<br>";
//Bai5: Tạo lớp danh sách sinh viên
<?php
echo "Câu 5: ";
class Student{
    protected $code, $fullName, $list;
    public function __construct(){
        $this->list = [];
    }
    public function add($code, $fullName){
        $this->list[$code] = $fullName; 
    }
    public function showList(){
        return $this->list;
    }
}
$student = new Student();
$student->add("SV001", "Nguyen van A");
$student->add("SV002", "Nguyen van B");
foreach($student->showList() as $key=>$value)
 echo "Code: " . $key . " <br>" . "Full Name: " . $value . "</br>";
// Tạo một lớp XeHoi với các thuộc tính là hãng xe, màu sắc và năm sản xuất.
// Tạo phương thức để hiển thị thông tin đầy đủ của xe.
 echo "Câu 6: ";
 class Car {
      protected  $companyCar;
      protected  $color;
      protected  $manufacture;

     public function __construct($companyCar, $color, $manufacture) 
     {
         $this->companyCar = $companyCar;
         $this->color = $color;
         $this->manufacture = $manufacture;
     }

     public function show() {
         echo "Hãng xe: " . $this->companyCar . "<br>";
         echo "Màu sắc: " . $this->color . "<br>";
         echo "Năm sản xuất: " . $this->manufacture . "<br>";
     }
 }
 $car = new car('Toyota', 'Đen', 2020);
 $car->show();
// Tạo một lớp PhanSo với các thuộc tính tử số và mẫu số.
// Tạo các phương thức để thực hiện các phép toán cộng, trừ, nhân và chia giữa các phân số.
echo "Câu 7: ";

class Fraction{
         public $numerator;
         public $denominator;
    
         public function __construct( $numerator, $denominator){
            $this -> numerator = $numerator;
            $this -> denominator = $denominator;
        }
        public function sum($fraction){
            $sumNumerator = $this -> numerator *  $fraction -> denominator + $fraction -> numerator * $fraction -> denominator;
            $sumDenominator = $this -> denominator * $fraction -> denominator;
            return new Fraction($sumNumerator, $sumDenominator);
        }

           public function subtraction($fraction){
            $apartNumerator = $this -> numerator *  $fraction -> denominator - $fraction -> numerator * $fraction -> denominator;
            $apertDenominator = $this -> denominator * $fraction -> denominator;
            return new Fraction($apartNumerator, $apertDenominator);
        }

           public function multiplication($fraction){
            $multiplyNumerator = $this -> numerator * $fraction -> numerator;
            $multiplyDenominator = $this -> denominator * $fraction -> denominator;
            return new Fraction($multiplyNumerator, $multiplyDenominator);
        }
      public function division($fraction){
            $divisionNumerator = $this -> numerator * $fraction -> denominator;
            $divisionDenominator = $this -> denominator * $fraction -> numerator;
            return new Fraction($divisionNumerator, $divisionDenominator);
        }
        public function display(){
            echo $this->numerator . "/" . $this->denominator;
        }
    }

    $Fraction1 = new Fraction(2,2);
    $Fraction2 = new Fraction(3,2);
    $sum = $Fraction1 -> sum($Fraction2);
    echo "Tổng: ";
    $sum -> display();
    echo '<br>';
    $subtraction = $Fraction1 -> subtraction($Fraction2);
    echo "Hiệu: ";
    $subtraction -> display();
    echo '<br>';
    $multiplication = $Fraction1 -> multiplication($Fraction2);
    echo "Tích: ";
    $multiplication -> display();
    echo '<br>';
    $division = $Fraction1 -> division($Fraction2);
    echo "Thương: ";
    $division -> display();

//Bài tập Tạo lớp Người:
// Tạo một lớp Nguoi với các thuộc tính tên, tuổi và địa chỉ.
// Tạo phương thức để hiển thị thông tin người.
 echo "Câu 8: <br> ";
     class Person {
             protected $name;
             protected  $age;
             protected  $address;
        
              public function __construct($name, $age, $address) 
              {
                  $this->name = $name;
                  $this->age = $age;
                  $this->address = $address;
              }
        
             public function show() {
                 echo "Tên: " . $this->name . "<br>";
                  echo "Tuổi: " . $this->age . "<br>";
                  echo "Địa chỉ: " . $this->address . "<br>";
              }
         }
          $person = new Person('Nguyen Van A', '22', 'An Mỹ');
          $person->show();
// Bài tập Tạo lớp Sản phẩm:
// Tạo một lớp SanPham với các thuộc tính tên, giá và mô tả.
// Tạo phương thức để hiển thị thông tin chi tiết của sản phẩm.
 echo "Câu 9: <br>";
 class Product {
     public $name;
     public $price;
     public $description;
     public function __construct($name, $price, $description) {
    
                     $this->name = $name;
                      $this->price = $price;
                      $this->description = $description;
                   }

     public function show() 
            {
         echo "Tên sản phẩm: " . $this->name . "<br>";
         echo "Giá: " . $this->price . "<br>";
         echo "Mô tả: " . $this->description. "<br>";
     }
 }

// // Tạo một đối tượng sản phẩm
 $product = new Product('Samsung', '1400000', 'Đen');
// // Hiển thị thông tin chi tiết của sản phẩm
 $product->show();

// Bài tập Tạo lớp Đặt phòng khách sạn:
// Tạo một lớp DatPhong voi các thuộc tính tên, ngày đến và số đêm ở lại.
// Tạo phương thức để tính tổng số tiền cần thanh toán dựa trên giá phòng. -->
 echo "Câu 10: ";
 class BookingRoom {
   protected $name;
     protected $dateArrival;
     protected $numberNight;
     public function __construct($name, $dateArrival, $numberNight)
      {
         $this->name = $name;
         $this->dateArrival=$dateArrival;
         $this->numberNight=$numberNight;
             }
     public function calSum($roomRates)
     {
         return $roomRates * $this->numberNight;
     }
 }
 $bookingroom = new BookingRoom('Nguyen Van A', '2022-02-03', 3);
 $sum=$bookingroom->calSum(100);
 echo "Tổng số tiền cần thanh toán là: " . $sum;