<?php

use Illuminate\Database\Seeder;
use App\Time;

class TimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Time::insert([
            'nome'      => 'AVA',
            'foto'     => '../img/fototime/AVA.png',
        ]);

        Time::insert([
            'nome'      => 'BA',
            'foto'     => '../img/fototime/BA.png',
        ]);

        Time::insert([
            'nome'      => 'BOT',
            'foto'     => '../img/fototime/BOT.png',
        ]);

        Time::insert([
            'nome'      => 'CAM',
            'foto'     => '../img/fototime/CAM.png',
        ]);

        Time::insert([
            'nome'      => 'CAP',
            'foto'     => '../img/fototime/CAP.png',
        ]);

        Time::insert([
            'nome'      => 'CEA',
            'foto'     => '../img/fototime/CEA.png',
        ]);

        Time::insert([
            'nome'      => 'CHA',
            'foto'     => '../img/fototime/CHA.png',
        ]);

        Time::insert([
            'nome'      => 'COR',
            'foto'     => '../img/fototime/COR.png',
        ]);

        Time::insert([
            'nome'      => 'CRU',
            'foto'     => '../img/fototime/CRU.png',
        ]);

        Time::insert([
            'nome'      => 'CSA',
            'foto'     => '../img/fototime/CSA.png',
        ]);

        Time::insert([
            'nome'      => 'FLA',
            'foto'     => '../img/fototime/FLA.png',
        ]);

        Time::insert([
            'nome'      => 'FLU',
            'foto'     => '../img/fototime/FLU.png',
        ]);

        Time::insert([
            'nome'      => 'FOR',
            'foto'     => '../img/fototime/FOR.png',
        ]);

        Time::insert([
            'nome'      => 'GOI',
            'foto'     => '../img/fototime/GOI.png',
        ]);

        Time::insert([
            'nome'      => 'GRE',
            'foto'     => '../img/fototime/GRE.png',
        ]);

        Time::insert([
            'nome'      => 'INT',
            'foto'     => '../img/fototime/INT.png',
        ]);

        Time::insert([
            'nome'      => 'PAL',
            'foto'     => '../img/fototime/PAL.png',
        ]);

        Time::insert([
            'nome'      => 'SAN',
            'foto'     => '../img/fototime/SAN.png',
        ]);

        Time::insert([
            'nome'      => 'SAO',
            'foto'     => '../img/fototime/SAO.png',
        ]);

        Time::insert([
            'nome'      => 'VAS',
            'foto'     => '../img/fototime/VAS.png',
        ]);
    }


}
