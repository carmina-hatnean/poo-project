<?php
class Person
{
    public $name;
    protected $age;
    private $phone;

    public function __construct($name,$age,$phone)
    {
        $this->name=$name;
        $this->age=$age;
        $this->phone=$phone;
    }

    public function hello()
    {
        return "Hello from person";
    }

    /**
     * @return mixed
     */
    final public function getAge()
    {
        return $this->age;
    }

}

class Emoployee extends Person
{
    private $salary;
    public function __construct($name,$age,$phone,$salary)
    {
        parent::__construct($name,$age,$phone);
        $this->salary=$salary;
    }
    public function hello()
    {
        return "I am an employee: $this->name";
    }
}

class Student extends Person
{
    public $studentNo;

    public function __construct($name,$age,$phone,$studentNo)
    {
        parent::__construct($name, $age,$phone);
        $this->studentNo = $studentNo;
    }

    public function hello()
    {
        return "Hello, I am student: $this->name. with NO: $this->studentNo";
    }


}
$employee = new Emoployee("John", 27, '123456',2000);
$student = new Student("John", 27, '123456','145352');
echo $employee->hello() .PHP_EOL;
echo $student->hello();