<?php

use App\Models\District;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('thanas', function (Blueprint $table) {
            $table->string('id');
            $table->string('district_id');
            $table->string('thana_name');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('thanas');
    }
};
