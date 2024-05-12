<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('form_masters', function (Blueprint $table) {
            $table->id();
            $table->string("header")->unique();
            $table->string("table_name");
            $table->string("model");
            $table->string("role");
            $table->timestamps();
        });

        DB::table('form_masters')->insert(
            array(
            [
                'header' => 'Roles Name',
                'table_name' => 'form_role_names',
                'model' => 'App\Models\FormRoleName',
                'role' => 'ADM'
            ],
            [
                'header' => 'Roles',
                'table_name' => 'form_roles',
                'model' => 'App\Models\FormRole',
                'role' => 'ADM'
            ],
            [
                'header' => 'Form Master',
                'table_name' => 'form_masters',
                'model' => 'App\Models\FormMaster',
                'role' => 'ADM'                    
            ],
            [
                'header' => 'Input Type',
                'table_name' => 'input_types',
                'model' => 'App\Models\InputType',
                'role' => 'ADM'                    
            ],
            [
                'header' => 'Form Input Type',
                'table_name' => 'form_input_types',
                'model' => 'App\Models\FormInputType',
                'role' => 'ADM'                    
            ],
            [
                'header' => 'Column Exclusion',
                'table_name' => 'form_exclude_columns',
                'model' => 'App\Models\FormExcludeColumns',
                'role' => 'ADM'                    
            ],
            [
                'header' => 'Mapping',
                'table_name' => 'form_foreign_keys',
                'model' => 'App\Models\FormForeignKey',
                'role' => 'ADM'                    
            ],
            [
                'header' => 'Dependent Field',
                'table_name' => 'form_dependant_fields',
                'model' => 'App\Models\FormDependantField',
                'role' => 'ADM'                    
            ],
            [
                'header' => 'Form Validation',
                'table_name' => 'form_validations',
                'model' => 'App\Models\FormValidation',
                'role' => 'ADM'                    
            ]
            )
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_masters');
    }
};
