<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Administrado',
                'email' => 'administrador@riobranco.ac.gov.br',
                'password' => bcrypt('master2378'),
                'revisor' => 0,
                'master' => 1
            ],
            [
                'name' => 'Luiz',
                'email' => 'luiz.aguirre@riobranco.ac.gov.br',
                'password' => bcrypt('lwma12'),
                'revisor' => 0,
                'master' => 1
            ],

            [
                'name' => 'Estenio',
                'email' => 'estenio@riobranco.ac.gov.br',
                'password' => bcrypt('guerreiro'),
                'revisor' => 0,
                'master' => 1
            ],
            [
                'name' => 'Aldevania Almeida',
                'email' => 'aldevania.almeida@riobranco.ac.gov.br',
                'password' => bcrypt('156523'),
                'revisor' => 0,
                'master' => 1
            ],
            [
                'name' => 'Eliana Carvalho',
                'email' => 'eliana.carvalho@riobranco.ac.gov.br',
                'password' => bcrypt('18317421287'),
                'revisor' => 0,
                'master' => 1
            ],
            [
                'name' => 'Paula Nogueira',
                'email' => 'paula.nogueira@riobranco.ac.gov.br',
                'password' => bcrypt('18317421287'),
                'revisor' => 0,
                'master' => 0
            ],
            [
                'name' => 'Maria Batista',
                'email' => 'maria.batista@riobranco.ac.gov.br',
                'password' => bcrypt('35925221249'),
                'revisor' => 0,
                'master' => 0
            ],
            [
                'name' => 'Francisco Holanda',
                'email' => 'francisco.holanda@riobranco.ac.gov.br',
                'password' => bcrypt('32220669220'),
                'revisor' => 0,
                'master' => 0

            ],
            [
                'name' => 'Terezinha Sarquis',
                'email' => 'terezinha.jesus@riobranco.ac.gov.br',
                'password' => bcrypt('71017887268'),
                'revisor' => 0,
                'master' => 0
            ],
            [
                'name' => 'Meiry Bezerra ',
                'email' => 'meiry.bezerra@riobranco.ac.gov.br',
                'password' => bcrypt('77013042234'),
                'revisor' => 0,
                'master' => 0
            ],
            [
                'name' => 'Gleice  Barros ',
                'email' => 'gleice.barros@riobranco.ac.gov.br',
                'password' => bcrypt('64567460278'),
                'revisor' => 0,
                'master' => 0
            ],
            [
                'name' => 'Ronaldo Dalcolmo',
                'email' => 'ronaldo.dalcomo@riobranco.ac.gov.br',
                'password' => bcrypt('08599087711'),
                'revisor' => 0,
                'master' => 0
            ],
            [
                'name' => 'Monica Brasileiro',
                'email' => 'monica.rogerio@riobranco.ac.gov.br',
                'password' => bcrypt('43372910249'),
                'revisor' => 0,
                'master' => 0
            ],
            [
                'name' => 'Alise Oliveira',
                'email' => 'ailse.oliveira@riobranco.ac.gov.br',
                'password' => bcrypt('29133747865'),
                'revisor' => 0,
                'master' => 0
            ],
            ['name' => 'Andrea Gomes',
                'email' => 'andrea.gomes@riobranco.ac.gov.br',
                'password' => bcrypt('88909654287'),
                'revisor' => 0,
                'master' => 0
            ],
            ['name' => 'Edson Filho',
                'email' => 'edson.filho@riobranco.ac.gov.br',
                'password' => bcrypt('50928562204'),
                'revisor' => 0,
                'master' => 0
            ],
            ['name' => 'Gislaine Fonseca',
                'email' => 'gislaine.fonseca@riobranco.ac.gov.br',
                'password' => bcrypt('789456'),
                'revisor' => 0,
                'master' => 0
            ],
            ['name' => 'Iara Cordeiro',
                'email' => 'iara.cordeiro@riobranco.ac.gov.br',
                'password' => bcrypt('68682360268'),
                'revisor' => 0,
                'master' => 0
            ],
            ['name' => 'Marcelina Moraes',
                'email' => 'marcelina.moraes@riobranco.ac.gov.br',
                'password' => bcrypt('41239920210'),
                'revisor' => 0,
                'master' => 0
            ],
            ['name' => 'Maria Santos',
                'email' => 'maria.santos@riobranco.ac.gov.br',
                'password' => bcrypt('57558493234'),
                'revisor' => 0,
                'master' => 0
            ],
            ['name' => 'Sanny Lopes',
                'email' => 'sanny.lopes@riobranco.ac.gov.br',
                'password' => bcrypt('33937346287'),
                'revisor' => 0,
                'master' => 0
            ],
            ['name' => 'Luiz Felipe',
                'email' => 'luiz.felipe@riobranco.ac.gov.br',
                'password' => bcrypt('48450936268'),
                'revisor' => 0,
                'master' => 0
            ],
            ['name' => 'Eufrasia Cadorin',
                'email' => 'eufasia.cadorin@riobranco.ac.gov.br',
                'password' => bcrypt('35982969249'),
                'revisor' => 1,
                'master' => 0
            ],
            ['name' => 'Valgerlângela Silva',
                'email' => 'valgerlangela.silva@riobranco.ac.gov.br',
                'password' => bcrypt('43492932215'),
                'revisor' => 1,
                'master' => 0
            ],
            ['name' => 'Maylon Oliveira',
                'email' => 'maylon.oliveira@riobranco.ac.gov.br',
                'password' => bcrypt('93622821272'),
                'revisor' => 1,
                'master' => 0
            ],
            ['name' => 'Lenice Camargo',
                'email' => 'lenice.camargo@riobranco.ac.gov.br',
                'password' => bcrypt('51860651291'),
                'revisor' => 1,
                'master' => 0
            ],
            ['name' => 'Maria Souza',
                'email' => 'maria.souza@riobranco.ac.gov.br',
                'password' => bcrypt('64945472220'),
                'revisor' => 1,
                'master' => 0
            ],
            ['name' => 'Cleide Helena',
                'email' => 'cleide.helena@riobranco.ac.gov.br',
                'password' => bcrypt('48374270225'),
                'revisor' => 1,
                'master' => 0
            ],
            ['name' => 'Sulamita Guedes',
                'email' => 'sulamita.guedes@riobranco.ac.gov.br',
                'password' => bcrypt('67098126268'),
                'revisor' => 1,
                'master' => 0
            ],
            ['name' => 'Alexandra Assis',
                'email' => 'alexandra.assis@riobranco.ac.gov.br',
                'password' => bcrypt('62317210272'),
                'revisor' => 1,
                'master' => 0
            ],
            ['name' => 'Fernanda Chelotti',
                'email' => 'fernanda.chelotti@riobranco.ac.gov.br',
                'password' => bcrypt('00116748060'),
                'revisor' => 1,
                'master' => 0
            ],
            ['name' => ' Pablo Carvalho',
                'email' => 'pablo.carvalho@riobranco.ac.gov.br',
                'password' => bcrypt('51217287272'),
                'revisor' => 1,
                'master' => 0
            ],
            ['name' => 'Layla Marinho',
                'email' => 'layla.marinho@riobranco.ac.gov.br',
                'password' => bcrypt('87477351200'),
                'revisor' => 1,
                'master' => 0
            ],
            ['name' => 'Socorro Martins',
                'email' => 'socorro.martins@riobranco.ac.gov.br',
                'password' => bcrypt('33986789200'),
                'revisor' => 1,
                'master' => 0
            ],
            ['name' => 'Felix Silva',
                'email' => 'felix.silva@riobranco.ac.gov.br',
                'password' => bcrypt('51608901220'),
                'revisor' => 1,
                'master' => 0
            ],
            ['name' => ' Angela Oliveira',
                'email' => 'angela.oliveira@riobranco.ac.gov.br',
                'password' => bcrypt('15405915220'),
                'revisor' => 1,
                'master' => 0
            ],
            ['name' => 'Osvaldo Leal',
                'email' => 'olvaldo.leal@riobranco.ac.gov.br',
                'password' => bcrypt('96101040453'),
                'revisor' => 1,
                'master' => 0
            ]
        ]);
    }
}
