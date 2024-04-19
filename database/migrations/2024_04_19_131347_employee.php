<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gender');
            $table->string('date_of_birth');
            $table->string('place_of_birth');
            $table->string('physically_challenged');
            $table->string('nationality');
            $table->string('identification_mark');
            $table->string('blood_group');
            $table->string('kashmiri_immigrant');
            $table->string('marital_status');
            $table->string('category');
            $table->string('religion');
            $table->string('aadhar_card_no');
            $table->string('father_name');
            $table->string('father_occupation');
            $table->string('father_gross_annual_income');
            $table->string('father_guardian_name');
            $table->string('father_phone_no');
            $table->string('mother_name');
            $table->string('mother_occupation');
            $table->string('mother_gross_annual_income');
            $table->string('guardian_relation');
            $table->string('parent_guardian_mobile_no');
            $table->string('parent_email');
            $table->string('present_address');
            $table->string('present_contact_number');
            $table->string('permanent_address');
            $table->string('permanent_contact_number');
            $table->string('class_10th_board_name');
            $table->string('class_10th_school_name');
            $table->string('class_10th_year');
            $table->string('class_10th_percentage');
            $table->string('class_12th_board_name');
            $table->string('class_12th_school_name');
            $table->string('class_12th_year');
            $table->string('class_12th_percentage');
            $table->string('migration_no');
            $table->string('date_of_admission');
            $table->string('general_rank');
            $table->string('gate_rank');
            $table->string('student_type');
            $table->string('department');
            $table->string('branch');
            $table->string('roll_no');
            $table->string('admission_based_on');
            $table->string('category_rank');
            $table->string('cat_rank');
            $table->string('present_semester');
            $table->string('course');
            $table->string('other');
            $table->string('bank_name');
            $table->string('account_no');
            $table->string('ifsc_code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee');
    }
};