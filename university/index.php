<?php

class Course
{
    private $courseId;
    private $courseName;
    private $courseCredits;

    public function __construct($courseId, $courseCredits, $courseName)
    {
        $this->courseId = $courseId;
        $this->courseCredits = $courseCredits;
        $this->courseName = $courseName;
    }
    public function getCourseId()
    {
        return $this->courseId;
    }

    public function setCourseId($courseId)
    {
        $this->courseId = $courseId;
    }
    public function getCourseCredits()
    {
        return $this->courseCredits;
    }

    public function setCourseCredits($courseCredits)
    {
        $this->courseCredits = $courseCredits;
    }
    public function getCourseName()
    {
        return $this->courseName;
    }

    public function setCourseName($courseName)
    {
        $this->courseName = $courseName;
    }
}



class Student
{
    private $studentId;
    private $studentName;
    private $studentMajor;

    public function __construct($studentId, $studentMajor, $studentName)
    {
        $this->studentId = $studentId;
        $this->studentMajor = $studentMajor;
        $this->studentName = $studentName;
    }
    public function getstudentId()
    {
        return $this->studentId;
    }

    public function setstudentId($studentId)
    {
        $this->studentId = $studentId;
    }
    public function getstudentMajor()
    {
        return $this->studentMajor;
    }

    public function setstudentMajor($studentMajor)
    {
        $this->studentMajor = $studentMajor;
    }
    public function getstudentName()
    {
        return $this->studentName;
    }

    public function setstudentName($studentName)
    {
        $this->studentName = $studentName;
    }
}
class Enrollment
{
    private $enrollmentId;
    private $student;
    private $course;
    private $enrollmentDate;
    private $grades;

    public function __construct($enrollmentId, $student, $course, $enrollmentDate, $grades)
    {
        $this->enrollmentId = $enrollmentId;
        $this->student = $student;
        $this->course = $course;
        $this->enrollmentDate = $enrollmentDate;
        $this->grades = $grades;
    }


    public function getEnrollmentId()
    {
        return $this->enrollmentId;
    }

    public function setEnrollmentId($enrollmentId)
    {
        $this->enrollmentId = $enrollmentId;
    }

    public function getStudent()
    {
        return $this->student;
    }

    public function setStudent($student)
    {
        $this->student = $student;
    }

    public function getCourse()
    {
        return $this->course;
    }

    public function setCourse($course)
    {
        $this->course = $course;
    }

    public function getEnrollmentDate()
    {
        return $this->enrollmentDate;
    }

    public function setEnrollmentDate($enrollmentDate)
    {
        $this->enrollmentDate = $enrollmentDate;
    }
    public function setGrades($grades)
    {
        $this->grades = $grades;
    }

    public function calculateGPA($courseCredits)
    {
        $totalCredits = array_sum($courseCredits);
        $weightedSum = 0;

        for ($i = 0; $i < count($courseCredits); $i++) {
            $weightedSum += $courseCredits[$i] * $this->grades[$i];
        }

        $gpa = $weightedSum / $totalCredits;
        return $gpa;
    }
}
$course = new Course(1, 3, 'Mathematics');

$student = new Student(1, 'Computer Science', 'John Doe');

$enrollment = new Enrollment(1, $student, $course, '2023-05-10', [3.5, 4.0, 3.2]);

$courseCredits = [$course->getCourseCredits(), $course->getCourseCredits(), $course->getCourseCredits()];
$gpa = $enrollment->calculateGPA($courseCredits);

echo "Student: " . $student->getStudentName() . "<br>";
echo "Course: " . $course->getCourseName() . "<br>";
echo "GPA: " . $gpa;