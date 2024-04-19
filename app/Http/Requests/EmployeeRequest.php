<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        try {
            return [

                'name' => 'string',
                'gender' => 'string',
                'date_of_birth' => 'string',
                'place_of_birth' => 'string',
                'physically_challenged' => 'string',
                'nationality' => 'string',
                'identification_mark' => 'string',
                'blood_group' => 'string',
                'kashmiri_immigrant' => 'string',
                'marital_status' => 'string',
                'category' => 'string',
                'religion' => 'string',
                'aadhar_card_no' => 'required|string',
                'father_name' => 'string',
                'father_occupation' => 'string',
                'father_gross_annual_income' => 'string',
                'father_guardian_name' => 'string',
                'father_phone_no' => 'string',
                'mother_name' => 'string',
                'mother_occupation' => 'string',
                'mother_gross_annual_income' => 'string',
                'guardian_relation' => 'string',
                'parent_guardian_mobile_no' => 'string',
                'parent_email' => 'string',
                'present_address' => 'string',
                'present_contact_number' => 'string',
                'permanent_address' => 'string',
                'permanent_contact_number' => 'string',
                'class_10th_board_name' => 'string',
                'class_10th_school_name' => 'string',
                'class_10th_year' => 'string',
                'class_10th_percentage' => 'string',
                'class_12th_board_name' => 'string',
                'class_12th_school_name' => 'string',
                'class_12th_year' => 'string',
                'class_12th_percentage' => 'string',
                'migration_no' => 'string',
                'date_of_admission' => 'date',
                'general_rank' => 'string',
                'gate_rank' => 'string',
                'student_type' => 'string',
                'department' => 'string',
                'branch' => 'string',
                'roll_no' => 'string',
                'admission_based_on' => 'string',
                'category_rank' => 'string',
                'cat_rank' => 'string',
                'present_semester' => 'string',
                'course' => 'string',
                'other' => 'string',
                'bank_name' => 'string',
                'account_no' => 'string',
                'ifsc_code' => 'string',

            ];
        } catch (\Illuminate\Validation\ValidationException $e) {
            logger()->error('Validation errors', $e->errors());
            return response()->json(['errors' => $e->errors()], 422);
        }
    }
}
