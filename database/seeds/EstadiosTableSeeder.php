<?php

use Illuminate\Database\Seeder;
use App\Estadio;

class EstadiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estadio::insert([
            'nome'      => 'Allianz Parque',
            'foto_estadio'     => '<iframe src="https://www.google.com/maps/embed?pb=!4v1572049129769!6m8!1m7!1sCAoSLEFGMVFpcFBoZTNCdEhXZ0JFQlJzUjBHeEJVcFVrd3pPZ2t1ZEhrT3JSZjMy!2m2!1d-23.5274154!2d-46.6785428!3f70.43307051194651!4f-9.844697532424703!5f0.7820865974627469" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
            'capacidade' => '55000',
            'endereco' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.1411599803937!2d-46.6783406!3d-23.5274248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce57fd1d715d45%3A0x864e5421d6195cb1!2sAllianz%20Parque!5e0!3m2!1spt-BR!2sbr!4v1572049032086!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
        ]);

        Estadio::insert([
            'nome'      => 'Arena Condá',
            'foto_estadio'     => ' <iframe src="https://www.google.com/maps/embed?pb=!4v1572049250287!6m8!1m7!1sCAoSLEFGMVFpcE5KU2JVSEVrSjVQTTB0d0ZGV2xrWDRIenU3YTg5NU5PbExUMkkt!2m2!1d-27.10388988524034!2d-52.60761145316263!3f32.18802923463085!4f-17.012871523606066!5f0.7820865974627469" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
            'capacidade' => '20000',
            'endereco' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3551.6639533975135!2d-52.60761145316263!3d-27.10388988524034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e4b6a335959fa1%3A0x83b3225143622e02!2sArena%20Cond%C3%A1!5e0!3m2!1spt-BR!2sbr!4v1572049355850!5m2!1spt-BR!2sbr" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
        ]);

        Estadio::insert([
            'nome'      => 'Arena do Grêmio',
            'foto_estadio'     => '<iframe src="https://www.google.com/maps/embed?pb=!4v1572049505632!6m8!1m7!1sqV2JKhnrIkaaLTq4_yMdyQ!2m2!1d-29.97476080325107!2d-51.19480525464269!3f355.5745581689197!4f-15.367727704163755!5f0.7820865974627469" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe> ',
            'capacidade' => '60540',
            'endereco' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3456.1628048140506!2d-51.19484441061732!3d-29.97475084189972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951979aba127bd4d%3A0x2473ee5ef3a6d23!2sArena%20do%20Gr%C3%AAmio!5e0!3m2!1spt-BR!2sbr!4v1572049550922!5m2!1spt-BR!2sbr" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
        ]);

        Estadio::insert([
            'nome'      => 'Arena da baixada',
            'foto_estadio'     => '<iframe src="https://www.google.com/maps/embed?pb=!4v1572049711733!6m8!1m7!1sfEXulIME8UPvgBaMjoFViw!2m2!1d-25.44843620815761!2d-49.27682007769316!3f357.6156766981779!4f0.8797750617252404!5f0.7820865974627469" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
            'capacidade' => '42372',
            'endereco' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3602.6956673471122!2d-49.27682007769316!3d-25.44843620815761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce476c516477b%3A0x4d03657ac0bc148c!2sEst%C3%A1dio%20Joaquim%20Am%C3%A9rico%20Guimar%C3%A3es!5e0!3m2!1spt-BR!2sbr!4v1572049741256!5m2!1spt-BR!2sbr" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
        ]);

        Estadio::insert([
            'nome'      => 'Beira-Rio',
            'foto_estadio'     => '<iframe src="https://www.google.com/maps/embed?pb=!4v1572049880142!6m8!1m7!1su_IGd5wgXeMwyUuxqkF1IQ!2m2!1d-30.06626043844407!2d-51.23632451528918!3f133.15279!4f24.848600000000005!5f0.7820865974627469" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
            'capacidade' => '50128',
            'endereco' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3452.9746735946455!2d-51.23632451528918!3d-30.06626043844407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9519789308dc5dbb%3A0x4140aceb991dc95!2sEst%C3%A1dio%20Beira-Rio!5e0!3m2!1spt-BR!2sbr!4v1572049902471!5m2!1spt-BR!2sbr" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
        ]);

        Estadio::insert([
            'nome'      => 'Castelão',
            'foto_estadio'     => '<iframe src="https://www.google.com/maps/embed?pb=!4v1572049972014!6m8!1m7!1sctemkvCilvzNPA6ByZM83w!2m2!1d-3.807258259535622!2d-38.52242243747133!3f275.36356604398395!4f1.9769954014157634!5f0.7820865974627469" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
            'capacidade' => '63903',
            'endereco' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.0130493441334!2d-38.52242243747133!3d-3.807258259535622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c74e540b3d8f57%3A0xb7514ac6ecd252e3!2sArena%20Castel%C3%A3o!5e0!3m2!1spt-BR!2sbr!4v1572050011202!5m2!1spt-BR!2sbr" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
        ]);

        Estadio::insert([
            'nome'      => 'Engenhão',
            'foto_estadio'     => '<iframe src="https://www.google.com/maps/embed?pb=!4v1572050056013!6m8!1m7!1sCAoSLEFGMVFpcFBVY0F6LWdUeFVOV0lJMXdFa0lOMkpCUWNMd0ZNUzE4N1pPNGs3!2m2!1d-22.8932749!2d-43.2923128!3f64.90288253928117!4f12.834108288071448!5f0.7820865974627469" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
            'capacidade' => '46831',
            'endereco' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.5446111167735!2d-43.2923128!3d-22.8932749!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997d070e398159%3A0x9e05df3c77e2e376!2sEst%C3%A1dio%20Nilton%20Santos!5e0!3m2!1spt-BR!2sbr!4v1572050087133!5m2!1spt-BR!2sbr" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
        ]);

        Estadio::insert([
            'nome'      => 'Fonte Nova',
            'foto_estadio'     => '<iframe src="https://www.google.com/maps/embed?pb=!4v1572050198804!6m8!1m7!1sM-kdtFd5xoaIDlBMSRXbsg!2m2!1d-12.9789483335726!2d-38.5045993942073!3f286.37634210124423!4f21.341752116544455!5f0.7820865974627469" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe> ',
            'capacidade' => '50000',
            'endereco' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.8890381950946!2d-38.5045993942073!3d-12.9789483335726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x71604c223833643%3A0x5645ea05a1ee2af5!2sItaipava%20Arena%20Fonte%20Nova!5e0!3m2!1spt-BR!2sbr!4v1572050230444!5m2!1spt-BR!2sbr" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
        ]);

        Estadio::insert([
            'nome'      => 'Independência',
            'foto_estadio'     => ' <iframe src="https://www.google.com/maps/embed?pb=!4v1572050311388!6m8!1m7!1sCAoSLEFGMVFpcE8xQ01BZjl5OE1NM2dKb2VGeHc5VThjdjBsSmFQdHM5UzdtdDdO!2m2!1d-19.9078543!2d-43.917954!3f334.90932163782304!4f-3.418222210193221!5f0.7820865974627469" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
            'capacidade' => '23000',
            'endereco' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3751.3925938414936!2d-43.917954!3d-19.9078543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa6972c5fd676db%3A0xe435b73e2545fdc7!2sArena%20Independ%C3%AAncia!5e0!3m2!1spt-BR!2sbr!4v1572050340779!5m2!1spt-BR!2sbr" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
        ]);
        
        Estadio::insert([
            'nome'      => 'Itaquerão',
            'foto_estadio'     => '<iframe src="https://www.google.com/maps/embed?pb=!4v1572050419436!6m8!1m7!1sCAoSLEFGMVFpcE5OZ1ppNW5jVDNUUGd4X3FKaDhqS3BCSWxCSFdOVGtnNFdjUzAx!2m2!1d-23.5452955!2d-46.47430809999999!3f184.6632376968563!4f-5.510885597016625!5f1.5390973410240028" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
            'capacidade' => '49205',
            'endereco' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.6442187496036!2d-46.47430809999999!3d-23.5452955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce66dec98fb855%3A0xf2b061ffbcd2ecf8!2sArena%20Corinthians!5e0!3m2!1spt-BR!2sbr!4v1572050493652!5m2!1spt-BR!2sbr" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
        ]);

        Estadio::insert([
            'nome'      => 'Maracanã',
            'foto_estadio'     => '<iframe src="https://www.google.com/maps/embed?pb=!4v1572050525819!6m8!1m7!1sILb_jAdfAElIce7KkKaHig!2m2!1d-22.91209683482732!2d-43.23008933101437!3f333.770480747243!4f19.516748056025023!5f0.7820865974627469" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
            'capacidade' => '78838',
            'endereco' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.034539796367!2d-43.23008933101437!3d-22.91209683482732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997e5dba888b0d%3A0xf5f33188ee6274e5!2zTWFyYWNhbsOj!5e0!3m2!1spt-BR!2sbr!4v1572050570372!5m2!1spt-BR!2sbr" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
        ]);

        Estadio::insert([
            'nome'      => 'Mineirão',
            'foto_estadio'     => '<iframe src="https://www.google.com/maps/embed?pb=!4v1572050642707!6m8!1m7!1sSdEk1Wkd2m9ppMfC1L_CzQ!2m2!1d-19.86591897487615!2d-43.97106932657044!3f177.9594!4f0!5f0.7820865974627469" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
            'capacidade' => '62000',
            'endereco' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3752.3859369236707!2d-43.97106932657044!3d-19.86591897487615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa690f71348ff6d%3A0x35b9453242d27588!2zTWluZWlyw6Nv!5e0!3m2!1spt-BR!2sbr!4v1572050665996!5m2!1spt-BR!2sbr" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
        ]);

        Estadio::insert([
            'nome'      => 'Morumbi ',
            'foto_estadio'     => '<iframe src="https://www.google.com/maps/embed?pb=!4v1572050708466!6m8!1m7!1s2mkzDpj8N7Qj1fmbQ24Wrw!2m2!1d-23.60051864933717!2d-46.71977820315385!3f140!4f0!5f0.7820865974627469" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
            'capacidade' => '66795',
            'endereco' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29248.850777408996!2d-46.71977820315385!3d-23.60051864933717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce56c31b1fe649%3A0x7d134f4dfc6618c2!2sEst%C3%A1dio%20C%C3%ADcero%20Pompeu%20de%20Toledo!5e0!3m2!1spt-BR!2sbr!4v1572050740134!5m2!1spt-BR!2sbr" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
        ]);

        Estadio::insert([
            'nome'      => 'Rei Pelé',
            'foto_estadio'     => '<iframe src="https://www.google.com/maps/embed?pb=!4v1572050797235!6m8!1m7!1sCAoSLEFGMVFpcE5XVjJuYmFUaGVzVmtiRVBUaThHTm00WWlfVE5SbGlOLW9KQkVs!2m2!1d-9.6468683!2d-35.7203109!3f3.242803625644278!4f1.9519357854496349!5f0.7820865974627469" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
            'capacidade' => '19105',
            'endereco' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3933.3994539034147!2d-35.7203109!3d-9.6468683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7014595bf95baf9%3A0x8210541cd176fb5e!2zRXN0w6FkaW8gUmVpIFBlbMOp!5e0!3m2!1spt-BR!2sbr!4v1572050817803!5m2!1spt-BR!2sbr" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
        ]);

        Estadio::insert([
            'nome'      => 'Ressacada',
            'foto_estadio'     => '<iframe src="https://www.google.com/maps/embed?pb=!4v1572050881346!6m8!1m7!1sCAoSLEFGMVFpcFBJTkNmWndyY0c3QXhyT0JWdTc3c2RkZXc3dk9UNS1SWUdmbzZs!2m2!1d-27.666525!2d-48.5321417!3f197.89101504684953!4f-0.18929774267768096!5f0.7820865974627469" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
            'capacidade' => '17800',
            'endereco' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.642674538593!2d-48.5321417!3d-27.666525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95273a36b911037b%3A0xd8f63412301e33bd!2sEst%C3%A1dio%20Doutor%20Aderbal%20Ramos%20da%20Silva!5e0!3m2!1spt-BR!2sbr!4v1572050900908!5m2!1spt-BR!2sbr" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
        ]);

        Estadio::insert([
            'nome'      => 'São Januário',
            'foto_estadio'     => '<iframe src="https://www.google.com/maps/embed?pb=!4v1572050944520!6m8!1m7!1sUPd8Xq1KaNBjfLo99Vs3gQ!2m2!1d-22.89140368516055!2d-43.22862947045945!3f20!4f20!5f0.7820865974627469" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
            'capacidade' => '21880',
            'endereco' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3!2d-43.22862947045945!3d-22.89140368516055!2m3!1f20!2f110!3f0!3m2!1i1024!2i768!4f75!3m3!1m2!1s0x997eea386659df%3A0x915e7bfd2cc5d456!2zRXN0w6FkaW8gU8OjbyBKYW51w6FyaW8!5e0!3m2!1spt-BR!2sbr!4v1572050965706!5m2!1spt-BR!2sbr" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
        ]);

        Estadio::insert([
            'nome'      => 'Vila Belmiro',
            'foto_estadio'     => '<iframe src="https://www.google.com/maps/embed?pb=!4v1572051043056!6m8!1m7!1sGUn8wZxyXij78qleaqJW7Q!2m2!1d-23.95074641385292!2d-46.33843550010963!3f178.70605!4f16.188469999999995!5f0.7820865974627469" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
            'capacidade' => '16068',
            'endereco' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3646.2740803457286!2d-46.33843550010963!3d-23.95074641385292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce0368d089229b%3A0xae243f28a776ae4d!2sEst%C3%A1dio%20Urbano%20Caldeira!5e0!3m2!1spt-BR!2sbr!4v1572051081185!5m2!1spt-BR!2sbr" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>',
        ]);
    }
}
