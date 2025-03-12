<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::unprepared("alter table attribute_values enable row level security");
        DB::unprepared("alter table attributes enable row level security");
        DB::unprepared("alter table cache enable row level security");
        DB::unprepared("alter table cache_locks enable row level security");
        DB::unprepared("alter table failed_jobs enable row level security");
        DB::unprepared("alter table job_batches enable row level security");
        DB::unprepared("alter table jobs enable row level security");
        DB::unprepared("alter table migrations enable row level security");
        DB::unprepared("alter table password_reset_tokens enable row level security");
        DB::unprepared("alter table personal_access_tokens enable row level security");
        DB::unprepared("alter table product_attributes enable row level security");
        DB::unprepared("alter table product_prices enable row level security");
        DB::unprepared("alter table products enable row level security");
        DB::unprepared("alter table regions enable row level security");
        DB::unprepared("alter table rental_periods enable row level security");
        DB::unprepared("alter table sessions enable row level security");
        DB::unprepared("alter table users enable row level security");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
