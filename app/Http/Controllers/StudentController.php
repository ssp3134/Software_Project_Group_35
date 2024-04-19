<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Student;

class StudentController extends Controller
{
    public function addStudent(StudentRequest $studentRequest)
    {
        try {
            $student = Student::create($studentRequest->validated());
            \Log::info('Student added successfully.');
            return response()->json($student, 201);
        } catch (\Exception $e) {
            \Log::error('Error adding student: ' . $e->getMessage());
            return response()->json(['error' => 'An error occurred while adding the student.'], 500);
        }
    }
    public function getAllStudents()
    {
        try {
            $students = Student::all();
            return response()->json($students, 200);
        } catch (\Exception $e) {
            \Log::error('Error fetching students: ' . $e->getMessage());
            return response()->json(['error' => 'An error occurred while fetching students.'], 500);
        }
    }
    public function getStudentByAadharCardNo($aadhar_card_no)
    {
        try {
            $student = Student::where('aadhar_card_no', $aadhar_card_no)->firstOrFail();
            return response()->json($student, 200);
        } catch (\Exception $e) {
            \Log::error('Error fetching student: ' . $e->getMessage());
            return response()->json(['error' => 'Student not found.'], 404);
        }
    }

    public function deleteStudentByAadharCardNo($aadhar_card_no)
    {
        try {
            $student = Student::where('aadhar_card_no', $aadhar_card_no)->firstOrFail();
            $student->delete();
            return response()->json(['message' => 'Student deleted successfully.'], 200);
        } catch (\Exception $e) {
            \Log::error('Error deleting student: ' . $e->getMessage());
            return response()->json(['error' => 'Student not found.'], 404);
        }
    }

    public function updateStudentByAadharCardNo(StudentRequest $studentRequest, $aadhar_card_no)
    {
        try {
            $student = Student::where('aadhar_card_no', $aadhar_card_no)->firstOrFail();
            $student->update($studentRequest->all());
            return response()->json($student, 200);
        } catch (\Exception $e) {
            \Log::error('Error updating student: ' . $e->getMessage());
            return response()->json(['error' => 'Student not found.'], 404);
        }
    }

}
