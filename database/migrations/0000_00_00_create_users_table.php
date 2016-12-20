<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class UsersTable
 */
final class UsersTable extends Migration
{
    use MigrationTrait;

    /** @var string */
    protected $table = 'users';

    /**
     * Run the migrations.
     */
    public function up()
    {
        $this->schemaBuilder($this->getConnection())
            ->create($this->table, function (Blueprint $table) {
                $table->increments('user_id');
                $table->string('username')->unique();
                $table->string('provider_user_id');
                $table->string('provider');
                $table->string('access_token');
                $table->string('provider_token');
                $table->timestamps();
            });
    }
}
