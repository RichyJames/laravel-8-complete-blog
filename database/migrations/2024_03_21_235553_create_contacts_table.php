<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   
        public function up()
        {
            Schema::table('contacts', function (Blueprint $table) {
                $table->string('name');
                $table->string('email');
                $table->text('message');
            });
        }
    
        public function down()
        {
            Schema::table('contacts', function (Blueprint $table) {
                $table->dropColumn(['name', 'email', 'message']);
            });
        }
    }