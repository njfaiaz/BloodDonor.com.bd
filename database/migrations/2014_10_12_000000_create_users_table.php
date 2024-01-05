<?php

use App\Constants\Role;
use App\Constants\Status;
use App\Models\District;
use App\Models\Thana;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('email')->unique();
            $table->string('blood_group');
            $table->string('gender');
            $table->foreignIdFor(District::class);
            $table->foreignIdFor(Thana::class);
            $table->string('blood_give');
            $table->string('plat_give');
            $table->string('phone')->unique();
            $table->string('last_time');
            $table->string('profile')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role')->default(Role::USER);
            $table->string('status')->default(Status::ACTIVE);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
