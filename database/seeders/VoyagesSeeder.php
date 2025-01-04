<?php

namespace Database\Seeders;

use App\Models\Voyage;
use Illuminate\Database\Seeder;

class VoyagesSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {


        Voyage::create([
            'titre' => "Les grandes villes du nord de l'Europe",
            'description' => "Quelques-unes des plus grandes villes du nord de l'Europe.
            J'adore voyager, mais j'ai un petit souci, je décris beaucoup trop les villes que je visite.
            Mais que vous, je ne peux m'en empêcher.
            Et quand j'essaie de faire court, il y a toujours quelqu'un pour rajouter des détails.... ",
            'resume' => "Quelques-unes des plus grandes villes du nord de l'Europe.
            J'adore voyager, mais j'ai un petit souci, je décris beaucoup trop les villes que je visite.
            Mais que vous, je ne peux m'en empêcher.
            Et quand j'essaie de faire court, il y a toujours quelqu'un pour rajouter des détails....",
            'continent' => "Europe",
            'en_ligne' => true,
            'visuel' => env('APP_URL')."/storage/user1/europe-nord.png",
            'user_id' => 1,
        ]);
        Voyage::create([
            'titre' => "Aventure en Asie du Sud-Est",
            'description' => "Explorez les paysages magnifiques et les cultures fascinantes de l'Asie du Sud-Est.
            Des plages de sable blanc aux jungles luxuriantes, chaque endroit a une histoire unique à raconter.
            Je suis toujours émerveillé par la diversité des traditions et des saveurs locales.",
            'resume' => "Un voyage captivant à travers les merveilles naturelles et culturelles de l'Asie du Sud-Est.",
            'continent' => "Asie",
            'en_ligne' => true,
            'visuel' => env('APP_URL')."/storage/user1/asie-du-sud-est.png",
            'user_id' => 2,
        ]);

        Voyage::create([
            'titre' => "Découverte de l'Amérique du Sud",
            'description' => "Partez à l'aventure à travers les paysages époustouflants et les cultures vibrantes de l'Amérique du Sud.
    Des montagnes majestueuses aux forêts tropicales, chaque destination offre une expérience unique.",
            'resume' => "Un voyage inoubliable à travers les trésors naturels et culturels de l'Amérique du Sud.",
            'continent' => "Amérique",
            'en_ligne' => true,
            'visuel' => env('APP_URL')."/storage/user1/amerique.jpg",
            'user_id' => 3,
        ]);




    }
}
