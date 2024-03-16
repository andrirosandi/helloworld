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
        // user - usergroup
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('usergroup_id')->references('id')->on('usergroups');
        });
        // 
        Schema::table('useractivities', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
        // 
        Schema::table('menus', function (Blueprint $table) {
            $table->foreign('environment_id')->references('id')->on('environments');
        });
        // 
        Schema::table('menupermissions', function (Blueprint $table) {
            $table->foreign('menu_id')->references('id')->on('menus');
        });
        // 
        Schema::table('menupermissions', function (Blueprint $table) {
            $table->foreign('usergroup_id')->references('id')->on('usergroups');
        });
        // 
        Schema::table('actionpermissions', function (Blueprint $table) {
            $table->foreign('action_id')->references('id')->on('actions');
        });
        // 
        Schema::table('actionpermissions', function (Blueprint $table) {
            $table->foreign('usergroup_id')->references('id')->on('usergroups');
        });
        // 
        Schema::table('media', function (Blueprint $table) {
            $table->foreign('uploader')->references('id')->on('users');
        });
        // 
        Schema::table('posts', function (Blueprint $table) {
            $table->foreign('author')->references('id')->on('users');
        });
        // 
        Schema::table('postparts', function (Blueprint $table) {
            $table->foreign('post_id')->references('id')->on('posts');
        });
        // 
        Schema::table('pages', function (Blueprint $table) {
            $table->foreign('author')->references('id')->on('users');
        });
        // 
        Schema::table('forms', function (Blueprint $table) {
            $table->foreign('author')->references('id')->on('users');
        });
        // 
        Schema::table('formfields', function (Blueprint $table) {
            $table->foreign('form_id')->references('id')->on('forms');
        });
        // 
        Schema::table('filledforms', function (Blueprint $table) {
            $table->foreign('form_id')->references('id')->on('forms');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['usergroup_id']);
        });
        //
        Schema::table('useractivities', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });
        //
        Schema::table('menus', function (Blueprint $table) {
            $table->dropForeign(['environment_id']);
        });
        //
        Schema::table('menupermissions', function (Blueprint $table) {
            $table->dropForeign(['menu_id']);
        });
        //
        Schema::table('menupermissions', function (Blueprint $table) {
            $table->dropForeign(['usergroup_id']);
        });
        //
        Schema::table('actionpermissions', function (Blueprint $table) {
            $table->dropForeign(['action_id']);
        });
        //
        Schema::table('actionpermissions', function (Blueprint $table) {
            $table->dropForeign(['usergroup_id']);
        });
        //
        Schema::table('media', function (Blueprint $table) {
            $table->dropForeign(['uploader']);
        });
        //
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign(['author']);
        });
        //
        Schema::table('postparts', function (Blueprint $table) {
            $table->dropForeign(['post_id']);
        });
        //
        Schema::table('pages', function (Blueprint $table) {
            $table->dropForeign(['author']);
        });
        //
        Schema::table('forms', function (Blueprint $table) {
            $table->dropForeign(['author']);
        });
        //
        Schema::table('formfields', function (Blueprint $table) {
            $table->dropForeign(['form_id']);
        });
        //
        Schema::table('filledforms', function (Blueprint $table) {
            $table->dropForeign(['form_id']);
        });
    }
};
