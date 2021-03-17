<?php
function calGPA($score)
{
    $gpa = "";
    switch ($score) {
        case ($score >= 80):
            echo "Grade A";
            break;
        case ($score >= 75):
            echo "Grade B+";
            break;
        case ($score >= 70):
            echo "Grade B";
            break;
        case ($score >= 65):
            echo "Grade C+";
            break;
        case ($score >= 60):
            echo "Grade C";
            break;
        case ($score >= 55):
            echo "Grade D+";
            break;
        case ($score >= 50):
            echo "Grade D";
            break;
        default:
            echo "Grade F";
            break;
    }
    return $gpa;
}
echo calGPA(1);