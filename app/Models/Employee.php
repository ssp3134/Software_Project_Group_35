<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'gender',
        'date_of_birth',
        'place_of_birth',
        'physically_challenged',
        'nationality',
        'identification_mark',
        'blood_group',
        'kashmiri_immigrant',
        'marital_status',
        'category',
        'religion',
        'aadhar_card_no',
        'father_name',
        'father_occupation',
        'father_gross_annual_income',
        'father_guardian_name',
        'father_phone_no',
        'mother_name',
        'mother_occupation',
        'mother_gross_annual_income',
        'guardian_relation',
        'parent_guardian_mobile_no',
        'parent_email',
        'present_address',
        'present_contact_number',
        'permanent_address',
        'permanent_contact_number',
        'class_10th_board_name',
        'class_10th_school_name',
        'class_10th_year',
        'class_10th_percentage',
        'class_12th_board_name',
        'class_12th_school_name',
        'class_12th_year',
        'class_12th_percentage',
        'migration_no',
        'date_of_admission',
        'general_rank',
        'gate_rank',
        'student_type',
        'department',
        'branch',
        'roll_no',
        'admission_based_on',
        'category_rank',
        'cat_rank',
        'present_semester',
        'course',
        'other',
        'bank_name',
        'account_no',
        'ifsc_code'
    ];
    protected $table = 'employee';
    public $timestamps = false;
}
