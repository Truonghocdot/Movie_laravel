<?php

use Illuminate\Database\Migrations\Migration;
use MongoDB\Laravel\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    protected $connection = 'mongodb' ;

    public function up(): void
    {
        Schema::create('visits', function (Blueprint $collection) {
            $collection->id();

            $collection->string('ip_address');
            $collection->string('url');
            $collection->string('user_agent');
            $collection->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('visits');
    }
};
