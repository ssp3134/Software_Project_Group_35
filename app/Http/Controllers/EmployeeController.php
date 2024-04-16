<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function addEmployee(EmployeeRequest $employeeRequest){
        try {
            $employee = Employee::create($employeeRequest->validated());
            \Log::info('Employee added successfully.');
            return response()->json($employee, 201);
        } catch (\Exception $e) {
            \Log::error('Error adding Employee: ' . $e->getMessage());
            return response()->json(['error' => 'An error occurred while adding the Employee.'], 500);
        }
    }
    public function getAllEmployees()
    {
        try {
            $employees = Employee::all();
            return response()->json($employees, 200);
        } catch (\Exception $e) {
            \Log::error('Error fetching Employees: ' . $e->getMessage());
            return response()->json(['error' => 'An error occurred while fetching Employees.'], 500);
        }
    }
    public function getEmployeeById($id)
    {
        try {
            $employee = Employee::findOrFail($id);
            return response()->json($employee, 200);
        } catch (\Exception $e) {
            \Log::error('Error fetching Employee: ' . $e->getMessage());
            return response()->json(['error' => 'Employee not found.'], 404);
        }
    }
    public function deleteEmployee($id)
    {
        try {
            $employee = Employee::findOrFail($id);
            $employee->delete();
            return response()->json(['message' => 'Employee deleted successfully.'], 200);
        } catch (\Exception $e) {
            \Log::error('Error deleting Employee: ' . $e->getMessage());
            return response()->json(['error' => 'Employee not found.'], 404);
        }
    }
    public function updateEmployee(EmployeeRequest $employeeRequest, $id)
    {
        try {
            $employee = Employee::findOrFail($id);
            $employee->update($employeeRequest->all());
            return response()->json($employee, 200);
        } catch (\Exception $e) {
            \Log::error('Error updating Employee: ' . $e->getMessage());
            return response()->json(['error' => 'Employee not found.'], 404);
        }
    }
}
