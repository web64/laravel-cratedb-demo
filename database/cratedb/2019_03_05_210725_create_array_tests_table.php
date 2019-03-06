<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArrayTestsTable extends Migration
{
    public function up()
    {
        DB::connection('crate')->unprepared("
            CREATE TABLE IF NOT EXISTS laracrate.array_tests (
                id INTEGER NOT NULL,
                string_array ARRAY(STRING),
                integer_array ARRAY(INTEGER),

                PRIMARY KEY (id)
            );
        ");
    }

    public function down()
    {
        DB::connection('crate')->unprepared("DROP TABLE IF EXISTS laracrate.array_tests");
    }
}
