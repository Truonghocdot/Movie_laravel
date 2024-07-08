<?php

use Illuminate\Database\Migrations\Migration;
use MongoDB\Laravel\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    protected $connection = 'mongodb';
    public function up(): void
    {
        Schema::create('movies', function (Blueprint $collection) {
            $collection->id();

            $collection->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
