<?php

use App\Models\State;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('abbreviation', 2);
            $table->timestamps();
        });

        State::insert([
            [
                'name' => 'Acre',
                'abbreviation' => 'AC',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Alagoas',
                'abbreviation' => 'AL',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Amapá',
                'abbreviation' => 'AP',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Amazonas',
                'abbreviation' => 'AM',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Bahia',
                'abbreviation' => 'BA',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Ceará',
                'abbreviation' => 'CE',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Distrito Federal',
                'abbreviation' => 'DF',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Espírito Santo',
                'abbreviation' => 'ES',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Goiás',
                'abbreviation' => 'GO',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Maranhão',
                'abbreviation' => 'MA',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Mato Grosso',
                'abbreviation' => 'MT',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Mato Grosso do Sul',
                'abbreviation' => 'MS',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Minas Gerais',
                'abbreviation' => 'MG',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Pará',
                'abbreviation' => 'PA',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Paraíba',
                'abbreviation' => 'PB',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Paraná',
                'abbreviation' => 'PR',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Pernambuco',
                'abbreviation' => 'PE',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Piauí',
                'abbreviation' => 'PI',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Rio de Janeiro',
                'abbreviation' => 'RJ',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Rio Grande do Norte',
                'abbreviation' => 'RN',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Rio Grande do Sul',
                'abbreviation' => 'RS',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Rondônia',
                'abbreviation' => 'RO',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Roraima',
                'abbreviation' => 'RR',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Santa Catarina',
                'abbreviation' => 'SC',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'São Paulo',
                'abbreviation' => 'SP',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Sergipe',
                'abbreviation' => 'SE',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Tocantins',
                'abbreviation' => 'TO',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('states');
    }
}
