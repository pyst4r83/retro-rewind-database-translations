<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\AchievementsModel;
use App\Models\TranslationsModel;

class Achievements extends Seeder
{
    private AchievementsModel $achievementsModel;
    private TranslationsModel $translationsModel;

    public function __construct()
    {
        $this->achievementsModel = model(AchievementsModel::class);
        $this->translationsModel = model(TranslationsModel::class);
    }

    public function run()
    {
        $movieInventoryThresholds = [1, 5, 10, 50, 100, 250, 500, 1000, 2500, 5000];
        foreach ($movieInventoryThresholds as $threshold) :
            $slug = 'movie-inventory-' . $threshold;
            $rarity = $this->getRarity($threshold, 'movie');
            $achievementId = $this->achievementsModel->protect(false)->skipValidation(true)->insert([
                'slug' => $slug,
                'badge_icon' => 'movie-inventory.webp',
                'points' => $this->calculatePoints($threshold),
                'type' => 'movie',
                'event_type' => 'movie_inventory_add',
                'threshold' => $threshold,
                'operator' => '>=',
                'time_window' => 'total',
                'extra_data' => null,
                'rarity' => $rarity,
                'is_active' => true,
                'accent_rgb' => '0, 240, 255',
                'accent2_rgb' => '176, 38, 255',
                'glow_rgb' => '0, 240, 255',
                'sort_order' => 0
            ], true);
            $this->addTranslations($achievementId, $slug);
        endforeach;
        $movieFavoriteThresholds = [1, 5, 10, 50, 100, 250, 500, 1000, 2500, 5000];
        foreach ($movieFavoriteThresholds as $threshold) :
            $slug = 'movie-favorite-' . $threshold;
            $rarity = $this->getRarity($threshold, 'movie');
            $achievementId = $this->achievementsModel->protect(false)->skipValidation(true)->insert([
                'slug' => $slug,
                'badge_icon' => 'movie-favorite.webp',
                'points' => $this->calculatePoints($threshold),
                'type' => 'movie',
                'event_type' => 'movie_favorite_add',
                'threshold' => $threshold,
                'operator' => '>=',
                'time_window' => 'total',
                'extra_data' => null,
                'rarity' => $rarity,
                'is_active' => true,
                'accent_rgb' => '255, 64, 160',
                'accent2_rgb' => '255, 128, 192',
                'glow_rgb' => '255, 64, 160',
                'sort_order' => 0
            ], true);
            $this->addTranslations($achievementId, $slug);
        endforeach;
        $movieVotedThresholds = [1, 5, 10, 50, 100, 250, 500, 1000, 2500, 5000];
        foreach ($movieVotedThresholds as $threshold) :
            $slug = 'movie-voted-' . $threshold;
            $rarity = $this->getRarity($threshold, 'movie');
            $achievementId = $this->achievementsModel->protect(false)->skipValidation(true)->insert([
                'slug' => $slug,
                'badge_icon' => 'movie-voted.webp',
                'points' => $this->calculatePoints($threshold),
                'type' => 'movie',
                'event_type' => 'movie_voted',
                'threshold' => $threshold,
                'operator' => '>=',
                'time_window' => 'total',
                'extra_data' => null,
                'rarity' => $rarity,
                'is_active' => true,
                'accent_rgb' => '255, 230, 60',
                'accent2_rgb' => '255, 64, 160',
                'glow_rgb' => '255, 230, 60',
                'sort_order' => 0
            ], true);
            $this->addTranslations($achievementId, $slug);
        endforeach;
        $gameInventoryThresholds = [1, 5, 10, 50, 100, 250, 500, 1000, 2500, 5000];
        foreach ($gameInventoryThresholds as $threshold) :
            $slug = 'game-inventory-' . $threshold;
            $rarity = $this->getRarity($threshold, 'game');
            $achievementId = $this->achievementsModel->protect(false)->skipValidation(true)->insert([
                'slug' => $slug,
                'badge_icon' => 'game-inventory.webp',
                'points' => $this->calculatePoints($threshold),
                'type' => 'game',
                'event_type' => 'game_inventory_add',
                'threshold' => $threshold,
                'operator' => '>=',
                'time_window' => 'total',
                'extra_data' => null,
                'rarity' => $rarity,
                'is_active' => false,
                'accent_rgb' => '0, 240, 255',
                'accent2_rgb' => '176, 38, 255',
                'glow_rgb' => '0, 240, 255',
                'sort_order' => 0
            ], true);
            $this->addTranslations($achievementId, $slug);
        endforeach;
        $gameFavoriteThresholds = [1, 5, 10, 50, 100, 250, 500, 1000, 2500, 5000];
        foreach ($gameFavoriteThresholds as $threshold) :
            $slug = 'game-favorite-' . $threshold;
            $rarity = $this->getRarity($threshold, 'game');
            $achievementId = $this->achievementsModel->protect(false)->skipValidation(true)->insert([
                'slug' => $slug,
                'badge_icon' => 'game-favorite.webp',
                'points' => $this->calculatePoints($threshold),
                'type' => 'game',
                'event_type' => 'game_favorite_add',
                'threshold' => $threshold,
                'operator' => '>=',
                'time_window' => 'total',
                'extra_data' => null,
                'rarity' => $rarity,
                'is_active' => false,
                'accent_rgb' => '255, 64, 160',
                'accent2_rgb' => '255, 128, 192',
                'glow_rgb' => '255, 64, 160',
                'sort_order' => 0
            ], true);
            $this->addTranslations($achievementId, $slug);
        endforeach;
        $gameVotedThresholds = [1, 5, 10, 50, 100, 250, 500, 1000, 2500, 5000];
        foreach ($gameVotedThresholds as $threshold) :
            $slug = 'game-voted-' . $threshold;
            $rarity = $this->getRarity($threshold, 'game');
            $achievementId = $this->achievementsModel->protect(false)->skipValidation(true)->insert([
                'slug' => $slug,
                'badge_icon' => 'game-voted.webp',
                'points' => $this->calculatePoints($threshold),
                'type' => 'game',
                'event_type' => 'game_voted',
                'threshold' => $threshold,
                'operator' => '>=',
                'time_window' => 'total',
                'extra_data' => null,
                'rarity' => $rarity,
                'is_active' => false,
                'accent_rgb' => '255, 230, 60',
                'accent2_rgb' => '255, 64, 160',
                'glow_rgb' => '255, 230, 60',
                'sort_order' => 0
            ], true);
            $this->addTranslations($achievementId, $slug);
        endforeach;
        $employeeHiredThresholds = [1, 2];
        foreach ($employeeHiredThresholds as $threshold) :
            $slug = 'employee-hired-' . $threshold;
            $rarity = $threshold == 1 ? 'common' : 'uncommon';
            $achievementId = $this->achievementsModel->protect(false)->skipValidation(true)->insert([
                'slug' => $slug,
                'badge_icon' => 'employee-hired.webp',
                'points' => $this->calculatePoints($threshold, 'employee'),
                'type' => 'employee',
                'event_type' => 'employee_hired',
                'threshold' => $threshold,
                'operator' => '>=',
                'time_window' => 'total',
                'extra_data' => null,
                'rarity' => $rarity,
                'is_active' => true,
                'accent_rgb' => '60, 255, 130',
                'accent2_rgb' => '0, 240, 255',
                'glow_rgb' => '60, 255, 130',
                'sort_order' => 0
            ], true);
            $this->addTranslations($achievementId, $slug);
        endforeach;
        $slug = 'employee-fired-1';
        $achievementId = $this->achievementsModel->protect(false)->skipValidation(true)->insert([
            'slug' => $slug,
            'badge_icon' => 'employee-fired.webp',
            'points' => 5,
            'type' => 'employee',
            'event_type' => 'employee_fired',
            'threshold' => 1,
            'operator' => '>=',
            'time_window' => 'total',
            'extra_data' => null,
            'rarity' => 'rare',
            'is_active' => true,
            'accent_rgb' => '255, 64, 96',
            'accent2_rgb' => '255, 128, 160',
            'glow_rgb' => '255, 64, 96',
            'sort_order' => 0
        ], true);
        $this->addTranslations($achievementId, $slug);
        $slug = 'membership-silver';
        $achievementId = $this->achievementsModel->protect(false)->skipValidation(true)->insert([
            'slug' => $slug,
            'badge_icon' => 'membership-silver.webp',
            'points' => 50,
            'type' => 'membership',
            'event_type' => 'membership_upgrade',
            'threshold' => 1,
            'operator' => '==',
            'time_window' => 'total',
            'extra_data' => json_encode(['membership_type' => 'silver']),
            'rarity' => 'rare',
            'is_active' => true,
            'accent_rgb' => '92, 200, 212',
            'accent2_rgb' => '255, 255, 255',
            'glow_rgb' => '220, 228, 240',
            'sort_order' => 0
        ], true);
        $this->addMembershipTranslations($achievementId, 'silver', $slug);
        $slug = 'membership-gold';
        $achievementId = $this->achievementsModel->protect(false)->skipValidation(true)->insert([
            'slug' => $slug,
            'badge_icon' => 'membership-gold.webp',
            'points' => 100,
            'type' => 'membership',
            'event_type' => 'membership_upgrade',
            'threshold' => 1,
            'operator' => '==',
            'time_window' => 'total',
            'extra_data' => json_encode(['membership_type' => 'gold']),
            'rarity' => 'legendary',
            'is_active' => true,
            'accent_rgb' => '255, 230, 60',
            'accent2_rgb' => '255, 170, 0',
            'glow_rgb' => '255, 230, 60',
            'sort_order' => 0
        ], true);
        $this->addMembershipTranslations($achievementId, 'gold', $slug);
        $billingThresholds = [1, 5, 10, 50, 100, 250];
        foreach ($billingThresholds as $threshold) :
            $slug = 'billing-uploaded-' . $threshold;
            $rarity = $this->getRarity($threshold, 'billing');
            $achievementId = $this->achievementsModel->protect(false)->skipValidation(true)->insert([
                'slug' => $slug,
                'badge_icon' => 'billing-uploaded.webp',
                'points' => $this->calculatePoints($threshold, 'billing'),
                'type' => 'billing',
                'event_type' => 'billing_uploaded',
                'threshold' => $threshold,
                'operator' => '>=',
                'time_window' => 'total',
                'extra_data' => null,
                'rarity' => $rarity,
                'is_active' => true,
                'accent_rgb' => '60, 255, 130',
                'accent2_rgb' => '0, 240, 255',
                'glow_rgb' => '60, 255, 130',
                'sort_order' => 0
            ], true);
            $this->addTranslations($achievementId, $slug);
        endforeach;
        $slug = 'login-first';
        $achievementId = $this->achievementsModel->protect(false)->skipValidation(true)->insert([
            'slug' => $slug,
            'badge_icon' => 'login-first.webp',
            'points' => 10,
            'type' => 'login',
            'event_type' => 'login_first',
            'threshold' => 1,
            'operator' => '>=',
            'time_window' => 'total',
            'extra_data' => null,
            'rarity' => 'common',
            'is_active' => true,
            'accent_rgb' => '180, 90, 255',
            'accent2_rgb' => '214, 138, 255',
            'glow_rgb' => '180, 90, 255',
            'sort_order' => 0
        ], true);
        $this->addTranslations($achievementId, $slug);
        $streakThresholds = [7, 30, 100, 365];
        foreach ($streakThresholds as $threshold) :
            $slug = 'login-streak-' . $threshold;
            $rarity = $threshold <= 7 ? 'common' : ($threshold <= 30 ? 'uncommon' : ($threshold <= 100 ? 'rare' : 'epic'));
            $achievementId = $this->achievementsModel->protect(false)->skipValidation(true)->insert([
                'slug' => $slug,
                'badge_icon' => 'login-streak.webp',
                'points' => $threshold * 2,
                'type' => 'login',
                'event_type' => 'login_daily',
                'threshold' => $threshold,
                'operator' => '>=',
                'time_window' => 'total',
                'extra_data' => json_encode(['mode' => 'consecutive']),
                'rarity' => $rarity,
                'is_active' => true,
                'accent_rgb' => '255, 140, 30',
                'accent2_rgb' => '255, 176, 96',
                'glow_rgb' => '255, 140, 30',
                'sort_order' => 0
            ], true);
            $this->addTranslations($achievementId, $slug);
        endforeach;
        $slug = 'login-early-bird';
        $achievementId = $this->achievementsModel->protect(false)->skipValidation(true)->insert([
            'slug' => $slug,
            'badge_icon' => 'login-early-bird.webp',
            'points' => 15,
            'type' => 'login',
            'event_type' => 'login_early',
            'threshold' => 1,
            'operator' => '>=',
            'time_window' => 'total',
            'extra_data' => json_encode(['hour_before' => 8]),
            'rarity' => 'uncommon',
            'is_active' => true,
            'accent_rgb' => '180, 90, 255',
            'accent2_rgb' => '214, 138, 255',
            'glow_rgb' => '180, 90, 255',
            'sort_order' => 0
        ], true);
        $this->addTranslations($achievementId, $slug);
        $slug = 'login-night-owl';
        $achievementId = $this->achievementsModel->protect(false)->skipValidation(true)->insert([
            'slug' => $slug,
            'badge_icon' => 'login-night-owl.webp',
            'points' => 15,
            'type' => 'login',
            'event_type' => 'login_night',
            'threshold' => 1,
            'operator' => '>=',
            'time_window' => 'total',
            'extra_data' => json_encode(['hour_after' => 0]),
            'rarity' => 'uncommon',
            'is_active' => true,
            'accent_rgb' => '180, 90, 255',
            'accent2_rgb' => '214, 138, 255',
            'glow_rgb' => '180, 90, 255',
            'sort_order' => 0
        ], true);
        $this->addTranslations($achievementId, $slug);
        $slug = 'movie-genre-completionist-inventory';
        $achievementId = $this->achievementsModel->protect(false)->skipValidation(true)->insert([
            'slug' => $slug,
            'badge_icon' => 'movie-genre-completionist-inventory.webp',
            'points' => 100,
            'type' => 'movie',
            'event_type' => 'movie_genre_completionist_inventory',
            'threshold' => 12,
            'operator' => '>=',
            'time_window' => 'total',
            'extra_data' => null,
            'rarity' => 'epic',
            'is_active' => true,
            'accent_rgb' => '0, 240, 255',
            'accent2_rgb' => '176, 38, 255',
            'glow_rgb' => '0, 240, 255',
            'sort_order' => 0
        ], true);
        $this->addTranslations($achievementId, $slug);
        $slug = 'movie-genre-completionist-favorite';
        $achievementId = $this->achievementsModel->protect(false)->skipValidation(true)->insert([
            'slug' => $slug,
            'badge_icon' => 'movie-genre-completionist-favorite.webp',
            'points' => 100,
            'type' => 'movie',
            'event_type' => 'movie_genre_completionist_favorite',
            'threshold' => 12,
            'operator' => '>=',
            'time_window' => 'total',
            'extra_data' => null,
            'rarity' => 'epic',
            'is_active' => true,
            'accent_rgb' => '255, 64, 160',
            'accent2_rgb' => '255, 128, 192',
            'glow_rgb' => '255, 64, 160',
            'sort_order' => 0
        ], true);
        $this->addTranslations($achievementId, $slug);
    }

    private function getRarity($threshold, $type = 'movie')
    {
        if ($type === 'billing') :
            if ($threshold <= 10) return 'common';
            if ($threshold <= 100) return 'uncommon';
            return 'rare';
        endif;
        if ($threshold <= 10) return 'common';
        if ($threshold <= 100) return 'uncommon';
        if ($threshold <= 500) return 'rare';
        if ($threshold <= 2500) return 'epic';
        return 'legendary';
    }

    private function calculatePoints($threshold, $type = 'default')
    {
        if ($type === 'employee') :
            return $threshold * 10;
        endif;
        if ($type === 'billing') :
            if ($threshold <= 10) return $threshold * 2;
            if ($threshold <= 100) return $threshold;
            return $threshold / 2;
        endif;
        if ($threshold <= 10) return $threshold * 5;
        if ($threshold <= 100) return $threshold * 2;
        if ($threshold <= 1000) return $threshold;
        return $threshold / 2;
    }

    private function addTranslations($achievementId, $slug, $customName = null)
    {
        $names = [
            'de' => $customName ?? $this->getGermanName($slug),
            'en' => $customName ?? $this->getEnglishName($slug),
            'es' => $customName ?? $this->getSpanishName($slug),
            'fr' => $customName ?? $this->getFrenchName($slug),
            'it' => $customName ?? $this->getItalianName($slug),
            'pt' => $customName ?? $this->getPortugueseName($slug)
        ];
        $descriptions = [
            'de' => $this->getGermanDescription($slug),
            'en' => $this->getEnglishDescription($slug),
            'es' => $this->getSpanishDescription($slug),
            'fr' => $this->getFrenchDescription($slug),
            'it' => $this->getItalianDescription($slug),
            'pt' => $this->getPortugueseDescription($slug)
        ];
        foreach ($names as $lang => $name) :
            $this->translationsModel->protect(false)->skipValidation(true)->save([
                'parent_id' => $achievementId,
                'table_name' => 'achievements',
                'type' => 'name',
                'language' => $lang,
                'translation' => $name
            ]);
            $this->translationsModel->protect(false)->skipValidation(true)->save([
                'parent_id' => $achievementId,
                'table_name' => 'achievements',
                'type' => 'description',
                'language' => $lang,
                'translation' => $descriptions[$lang]
            ]);
        endforeach;
    }

    private function addMembershipTranslations($achievementId, $type, $slug)
    {
        $names = [
            'de' => $type === 'silver' ? 'Silber Mitgliedschaft' : 'Gold Mitgliedschaft',
            'en' => $type === 'silver' ? 'Silver Membership' : 'Gold Membership',
            'es' => $type === 'silver' ? 'Membresía de Plata' : 'Membresía de Oro',
            'fr' => $type === 'silver' ? 'Adhésion Argent' : 'Adhésion Or',
            'it' => $type === 'silver' ? 'Abbonamento Argento' : 'Abbonamento Oro',
            'pt' => $type === 'silver' ? 'Assinatura Prata' : 'Assinatura Ouro'
        ];
        $descriptions = [
            'de' => $type === 'silver' ? 'Hat eine Silber Mitgliedschaft abgeschlossen' : 'Hat eine Gold Mitgliedschaft abgeschlossen',
            'en' => $type === 'silver' ? 'Has completed a Silver Membership' : 'Has completed a Gold Membership',
            'es' => $type === 'silver' ? 'Ha completado una Membresía de Plata' : 'Ha completado una Membresía de Oro',
            'fr' => $type === 'silver' ? 'A complété un abonnement Argent' : 'A complété un abonnement Or',
            'it' => $type === 'silver' ? 'Ha completato un abbonamento Argento' : 'Ha completato un abbonamento Oro',
            'pt' => $type === 'silver' ? 'Completou uma Assinatura Prata' : 'Completou uma Assinatura Ouro'
        ];
        foreach ($names as $lang => $name) :
            $this->translationsModel->protect(false)->skipValidation(true)->save([
                'parent_id' => $achievementId,
                'table_name' => 'achievements',
                'type' => 'name',
                'language' => $lang,
                'translation' => $name
            ]);
            $this->translationsModel->protect(false)->skipValidation(true)->save([
                'parent_id' => $achievementId,
                'table_name' => 'achievements',
                'type' => 'description',
                'language' => $lang,
                'translation' => $descriptions[$lang]
            ]);
        endforeach;
    }

    private function getGermanName($slug)
    {
        $names = [
            'movie-inventory-1' => 'VHS Novize',
            'movie-inventory-5' => 'Kassetten Sammler',
            'movie-inventory-10' => 'Videothek Stammgast',
            'movie-inventory-50' => 'Regal Füller',
            'movie-inventory-100' => 'Wühltisch Profi',
            'movie-inventory-250' => 'Samstagnacht Legende',
            'movie-inventory-500' => 'Jumbo VHS Jäger',
            'movie-inventory-1000' => 'Archivar der verschlungenen Pfade',
            'movie-inventory-2500' => 'Film Imperator',
            'movie-inventory-5000' => 'Zelluloid Unsterblicher',
            'movie-favorite-1' => 'Erster Favorit',
            'movie-favorite-5' => 'Top 5 Fan',
            'movie-favorite-10' => 'Lieblingsfilm Jäger',
            'movie-favorite-50' => 'Herzblatt Sammler',
            'movie-favorite-100' => 'Kult Connection',
            'movie-favorite-250' => 'Kinomeister',
            'movie-favorite-500' => 'Favoriten Fürst',
            'movie-favorite-1000' => 'Film Fanatiker',
            'movie-favorite-2500' => 'Leinwand Legende',
            'movie-favorite-5000' => 'Ewige Liste Ikone',
            'movie-voted-1' => 'Erstes Urteil',
            'movie-voted-5' => 'Kritiker Lehrling',
            'movie-voted-10' => 'Bewertungs Bär',
            'movie-voted-50' => 'Szenen Kenner',
            'movie-voted-100' => 'Popcorn Richter',
            'movie-voted-250' => 'Filmkritik Experte',
            'movie-voted-500' => 'Daumen hoch Diktator',
            'movie-voted-1000' => 'Spielfilm Sheriff',
            'movie-voted-2500' => 'Meinungs Mogul',
            'movie-voted-5000' => 'Oscar der Stimmen',
            'game-inventory-1' => 'Cartridge Novize',
            'game-inventory-5' => 'Modul Sammler',
            'game-inventory-10' => 'Controller Cowboy',
            'game-inventory-50' => 'Pixel Packer',
            'game-inventory-100' => 'Retro Ritter',
            'game-inventory-250' => 'Highscore Jäger',
            'game-inventory-500' => 'Konsolen-König',
            'game-inventory-1000' => '16-Bit Baron',
            'game-inventory-2500' => 'Cartridge Crusher',
            'game-inventory-5000' => 'Unendlich-Continue-Legende',
            'game-favorite-1' => 'Erste Wahl',
            'game-favorite-5' => 'Top-Tier Zocker',
            'game-favorite-10' => 'Lieblings-Level Lord',
            'game-favorite-50' => 'Boss Favorit',
            'game-favorite-100' => 'Power-Up Prinz',
            'game-favorite-250' => 'Cheat-Code Champion',
            'game-favorite-500' => 'Speedrun Saint',
            'game-favorite-1000' => 'Game Genie',
            'game-favorite-2500' => 'Finalboss Favorit',
            'game-favorite-5000' => 'Hall-of-Fame Held',
            'game-voted-1' => 'Erste Wertung',
            'game-voted-5' => 'Pixel Richter',
            'game-voted-10' => 'Joystick Juror',
            'game-voted-50' => 'Controller Kritiker',
            'game-voted-100' => 'Frame-Rate Fuchs',
            'game-voted-250' => 'Bit Bewerter',
            'game-voted-500' => 'Score Sheriff',
            'game-voted-1000' => 'Meinungs Master',
            'game-voted-2500' => 'Review Riese',
            'game-voted-5000' => 'Legendärer Langzeit Tester',
            'billing-uploaded-1' => 'Erste Abrechnung',
            'billing-uploaded-5' => 'Buchhaltungs Lehrling',
            'billing-uploaded-10' => 'Zahlen-Dschungel Meister',
            'billing-uploaded-50' => 'Kassenwart',
            'billing-uploaded-100' => 'Finanz Guru',
            'billing-uploaded-250' => 'Legende der Wall Street',
            'employee-fired-1' => 'Feueralarm',
            'employee-hired-1' => 'Erste Einstellung',
            'employee-hired-2' => 'Team-Leiter',
            'login-first' => 'Willkommen im Club',
            'login-streak-7' => 'Eine Woche süchtig',
            'login-streak-30' => 'Monats Member',
            'login-streak-100' => 'Hundertwasser',
            'login-streak-365' => 'Jahres Junkie',
            'login-early-bird' => 'Frühaufsteher',
            'login-night-owl' => 'Nachtaktiv',
            'movie-genre-completionist-inventory' => 'Regal Ordnung',
            'movie-genre-completionist-favorite' => 'Genre Junkie'
        ];
        return $names[$slug] ?? $slug;
    }

    private function getEnglishName($slug)
    {
        $names = [
            'movie-inventory-1' => 'VHS Novice',
            'movie-inventory-5' => 'Cassette Collector',
            'movie-inventory-10' => 'Video Store Regular',
            'movie-inventory-50' => 'Shelf Filler',
            'movie-inventory-100' => 'Bargain Bin Pro',
            'movie-inventory-250' => 'Saturday Night Legend',
            'movie-inventory-500' => 'Jumbo VHS Hunter',
            'movie-inventory-1000' => 'Archivist of Hidden Paths',
            'movie-inventory-2500' => 'Film Emperor',
            'movie-inventory-5000' => 'Celluloid Immortal',
            'movie-favorite-1' => 'First Favorite',
            'movie-favorite-5' => 'Top 5 Fan',
            'movie-favorite-10' => 'Favorite Film Hunter',
            'movie-favorite-50' => 'Heartthrob Collector',
            'movie-favorite-100' => 'Cult Connection',
            'movie-favorite-250' => 'Cinema Master',
            'movie-favorite-500' => 'Favorites Prince',
            'movie-favorite-1000' => 'Film Fanatic',
            'movie-favorite-2500' => 'Screen Legend',
            'movie-favorite-5000' => 'Eternal List Icon',
            'movie-voted-1' => 'First Verdict',
            'movie-voted-5' => 'Critic Apprentice',
            'movie-voted-10' => 'Rating Bear',
            'movie-voted-50' => 'Scene Connoisseur',
            'movie-voted-100' => 'Popcorn Judge',
            'movie-voted-250' => 'Film Critique Expert',
            'movie-voted-500' => 'Thumbs Up Dictator',
            'movie-voted-1000' => 'Feature Film Sheriff',
            'movie-voted-2500' => 'Opinion Mogul',
            'movie-voted-5000' => 'Oscar of Voices',
            'game-inventory-1' => 'Cartridge Novice',
            'game-inventory-5' => 'Module Collector',
            'game-inventory-10' => 'Controller Cowboy',
            'game-inventory-50' => 'Pixel Packer',
            'game-inventory-100' => 'Retro Knight',
            'game-inventory-250' => 'Highscore Hunter',
            'game-inventory-500' => 'Console King',
            'game-inventory-1000' => '16-Bit Baron',
            'game-inventory-2500' => 'Cartridge Crusher',
            'game-inventory-5000' => 'Infinite Continue Legend',
            'game-favorite-1' => 'First Choice',
            'game-favorite-5' => 'Top Tier Gamer',
            'game-favorite-10' => 'Favorite Level Lord',
            'game-favorite-50' => 'Boss Favorite',
            'game-favorite-100' => 'Power-Up Prince',
            'game-favorite-250' => 'Cheat Code Champion',
            'game-favorite-500' => 'Speedrun Saint',
            'game-favorite-1000' => 'Game Genius',
            'game-favorite-2500' => 'Favorite Final Boss',
            'game-favorite-5000' => 'Hall of Fame Hero',
            'game-voted-1' => 'First Rating',
            'game-voted-5' => 'Pixel Judge',
            'game-voted-10' => 'Joystick Juror',
            'game-voted-50' => 'Controller Critic',
            'game-voted-100' => 'Frame Rate Fox',
            'game-voted-250' => 'Bit Assessor',
            'game-voted-500' => 'Score Sheriff',
            'game-voted-1000' => 'Opinion Master',
            'game-voted-2500' => 'Review Giant',
            'game-voted-5000' => 'Legendary Long-Term Tester',
            'billing-uploaded-1' => 'First Bill',
            'billing-uploaded-5' => 'Bookkeeping Apprentice',
            'billing-uploaded-10' => 'Number Jungle Master',
            'billing-uploaded-50' => 'Treasurer',
            'billing-uploaded-100' => 'Finance Guru',
            'billing-uploaded-250' => 'Wall Street Legend',
            'employee-fired-1' => 'Fire Alarm',
            'employee-hired-1' => 'First Hire',
            'employee-hired-2' => 'Team Leader',
            'login-first' => 'Welcome to the Club',
            'login-streak-7' => 'One Week Addict',
            'login-streak-30' => 'Month Member',
            'login-streak-100' => 'Hundredwasser',
            'login-streak-365' => 'Year Junkie',
            'login-early-bird' => 'Early Bird',
            'login-night-owl' => 'Night Owl',
            'movie-genre-completionist-inventory' => 'Shelf Order',
            'movie-genre-completionist-favorite' => 'Genre Junkie'
        ];
        return $names[$slug] ?? $slug;
    }

    private function getSpanishName($slug)
    {
        $names = [
            'movie-inventory-1' => 'Novato VHS',
            'movie-inventory-5' => 'Coleccionista de Cassettes',
            'movie-inventory-10' => 'Asiduo del Videoclub',
            'movie-inventory-50' => 'Llena Estantes',
            'movie-inventory-100' => 'Profesional del Barril',
            'movie-inventory-250' => 'Leyenda del Sábado Noche',
            'movie-inventory-500' => 'Cazador de Jumbo VHS',
            'movie-inventory-1000' => 'Archivador de Caminos Ocultos',
            'movie-inventory-2500' => 'Emperador del Cine',
            'movie-inventory-5000' => 'Inmortal del Celuloide',
            'movie-favorite-1' => 'Primer Favorito',
            'movie-favorite-5' => 'Fan del Top 5',
            'movie-favorite-10' => 'Cazador de Películas Favoritas',
            'movie-favorite-50' => 'Coleccionista de Favoritas',
            'movie-favorite-100' => 'Conexión de Culto',
            'movie-favorite-250' => 'Maestro del Cine',
            'movie-favorite-500' => 'Príncipe de Favoritos',
            'movie-favorite-1000' => 'Fanático del Cine',
            'movie-favorite-2500' => 'Leyenda de la Pantalla',
            'movie-favorite-5000' => 'Icono de Lista Eterna',
            'movie-voted-1' => 'Primer Veredicto',
            'movie-voted-5' => 'Aprendiz de Crítico',
            'movie-voted-10' => 'Oso Calificador',
            'movie-voted-50' => 'Conocedor de Escenas',
            'movie-voted-100' => 'Juez de Palomitas',
            'movie-voted-250' => 'Experto en Crítica Cinematográfica',
            'movie-voted-500' => 'Dictador del Pulgar Arriba',
            'movie-voted-1000' => 'Sheriff del Largometraje',
            'movie-voted-2500' => 'Magnate de Opiniones',
            'movie-voted-5000' => 'Oscar de las Voces',
            'game-inventory-1' => 'Novato en Cartuchos',
            'game-inventory-5' => 'Coleccionista de Módulos',
            'game-inventory-10' => 'Cowboy del Controlador',
            'game-inventory-50' => 'Empaquetador de Píxeles',
            'game-inventory-100' => 'Caballero Retro',
            'game-inventory-250' => 'Cazador de Highscores',
            'game-inventory-500' => 'Rey de la Consola',
            'game-inventory-1000' => 'Barón de 16 Bits',
            'game-inventory-2500' => 'Machaca Cartuchos',
            'game-inventory-5000' => 'Leyenda del Continue Infinito',
            'game-favorite-1' => 'Primera Elección',
            'game-favorite-5' => 'Jugador de Primer Nivel',
            'game-favorite-10' => 'Señor del Nivel Favorito',
            'game-favorite-50' => 'Favorito del Jefe',
            'game-favorite-100' => 'Príncipe del Power-Up',
            'game-favorite-250' => 'Campeón de Trucos',
            'game-favorite-500' => 'Santo del Speedrun',
            'game-favorite-1000' => 'Genio del Juego',
            'game-favorite-2500' => 'Jefe Final de Favoritos',
            'game-favorite-5000' => 'Héroe del Salón de la Fama',
            'game-voted-1' => 'Primera Valoración',
            'game-voted-5' => 'Juez de Píxeles',
            'game-voted-10' => 'Jurado del Joystick',
            'game-voted-50' => 'Crítico del Controlador',
            'game-voted-100' => 'Zorro de la Tasa de Fotogramas',
            'game-voted-250' => 'Evaluador de Bits',
            'game-voted-500' => 'Sheriff de Puntuaciones',
            'game-voted-1000' => 'Maestro de Opiniones',
            'game-voted-2500' => 'Gigante de Reseñas',
            'game-voted-5000' => 'Probador Legendario de Largo Plazo',
            'billing-uploaded-1' => 'Primera Factura',
            'billing-uploaded-5' => 'Aprendiz de Contabilidad',
            'billing-uploaded-10' => 'Maestro de la Jungla de Números',
            'billing-uploaded-50' => 'Tesorero',
            'billing-uploaded-100' => 'Gurú Financiero',
            'billing-uploaded-250' => 'Leyenda de Wall Street',
            'employee-fired-1' => 'Alarma de Incendios',
            'employee-hired-1' => 'Primera Contratación',
            'employee-hired-2' => 'Líder de Equipo',
            'login-first' => 'Bienvenido al Club',
            'login-streak-7' => 'Una Semana Adicto',
            'login-streak-30' => 'Miembro del Mes',
            'login-streak-100' => 'Cien Aguas',
            'login-streak-365' => 'Adicto Anual',
            'login-early-bird' => 'Madrugador',
            'login-night-owl' => 'Búho Nocturno',
            'movie-genre-completionist-inventory' => 'Orden en el Estante',
            'movie-genre-completionist-favorite' => 'Adicto al Género'
        ];
        return $names[$slug] ?? $slug;
    }

    private function getFrenchName($slug)
    {
        $names = [
            'movie-inventory-1' => 'Novice VHS',
            'movie-inventory-5' => 'Collectionneur de Cassettes',
            'movie-inventory-10' => 'Habitué du Vidéo-Club',
            'movie-inventory-50' => 'Remplisseur d\'Étagères',
            'movie-inventory-100' => 'Pro du Bac à Fouilles',
            'movie-inventory-250' => 'Légende du Samedi Soir',
            'movie-inventory-500' => 'Chasseur de Jumbo VHS',
            'movie-inventory-1000' => 'Archiviste des Chemins Cachés',
            'movie-inventory-2500' => 'Empereur du Film',
            'movie-inventory-5000' => 'Immortel du Celluloïd',
            'movie-favorite-1' => 'Premier Favori',
            'movie-favorite-5' => 'Fan du Top 5',
            'movie-favorite-10' => 'Chasseur de Films Préférés',
            'movie-favorite-50' => 'Collectionneur de Coups de Cœur',
            'movie-favorite-100' => 'Connexion Culte',
            'movie-favorite-250' => 'Maître du Cinéma',
            'movie-favorite-500' => 'Prince des Favoris',
            'movie-favorite-1000' => 'Fanatique du Film',
            'movie-favorite-2500' => 'Légende de l\'Écran',
            'movie-favorite-5000' => 'Icône de la Liste Éternelle',
            'movie-voted-1' => 'Premier Verdict',
            'movie-voted-5' => 'Apprenti Critique',
            'movie-voted-10' => 'Ours des Évaluations',
            'movie-voted-50' => 'Connaisseur de Scènes',
            'movie-voted-100' => 'Juge du Popcorn',
            'movie-voted-250' => 'Expert en Critique de Films',
            'movie-voted-500' => 'Dictateur du Pouce Levé',
            'movie-voted-1000' => 'Shérif du Long Métrage',
            'movie-voted-2500' => 'Magnat des Opinions',
            'movie-voted-5000' => 'Oscar des Voix',
            'game-inventory-1' => 'Novice en Cartouche',
            'game-inventory-5' => 'Collectionneur de Modules',
            'game-inventory-10' => 'Cowboy du Contrôleur',
            'game-inventory-50' => 'Empaqueteur de Pixels',
            'game-inventory-100' => 'Chevalier Rétro',
            'game-inventory-250' => 'Chasseur de Highscores',
            'game-inventory-500' => 'Roi de la Console',
            'game-inventory-1000' => 'Baron 16-Bit',
            'game-inventory-2500' => 'Broyeur de Cartouches',
            'game-inventory-5000' => 'Légende du Continue Infini',
            'game-favorite-1' => 'Premier Choix',
            'game-favorite-5' => 'Joueur de Premier Plan',
            'game-favorite-10' => 'Seigneur du Niveau Préféré',
            'game-favorite-50' => 'Favori du Boss',
            'game-favorite-100' => 'Prince du Power-Up',
            'game-favorite-250' => 'Champion des Codes de Triche',
            'game-favorite-500' => 'Saint du Speedrun',
            'game-favorite-1000' => 'Génie du Jeu',
            'game-favorite-2500' => 'Boss Final des Favoris',
            'game-favorite-5000' => 'Héros du Temple de la Renommée',
            'game-voted-1' => 'Première Note',
            'game-voted-5' => 'Juge des Pixels',
            'game-voted-10' => 'Juré du Joystick',
            'game-voted-50' => 'Critique du Contrôleur',
            'game-voted-100' => 'Renard du Taux de Rafraîchissement',
            'game-voted-250' => 'Évaluateur de Bits',
            'game-voted-500' => 'Shérif des Scores',
            'game-voted-1000' => 'Maître des Opinions',
            'game-voted-2500' => 'Géant des Critiques',
            'game-voted-5000' => 'Testeur Légendaire de Longue Durée',
            'billing-uploaded-1' => 'Première Facture',
            'billing-uploaded-5' => 'Apprenti Comptable',
            'billing-uploaded-10' => 'Maître de la Jungle des Nombres',
            'billing-uploaded-50' => 'Trésorier',
            'billing-uploaded-100' => 'Gourou Financier',
            'billing-uploaded-250' => 'Légende de Wall Street',
            'employee-fired-1' => 'Alarme Incendie',
            'employee-hired-1' => 'Première Embauche',
            'employee-hired-2' => 'Chef d\'Équipe',
            'login-first' => 'Bienvenue au Club',
            'login-streak-7' => 'Une Semaine Accro',
            'login-streak-30' => 'Membre du Mois',
            'login-streak-100' => 'Cent Eaux',
            'login-streak-365' => 'Accro Annuel',
            'login-early-bird' => 'Lève-Tôt',
            'login-night-owl' => 'Oiseau de Nuit',
            'movie-genre-completionist-inventory' => 'Ordre sur l\'Étagère',
            'movie-genre-completionist-favorite' => 'Accro au Genre'
        ];
        return $names[$slug] ?? $slug;
    }

    private function getItalianName($slug)
    {
        $names = [
            'movie-inventory-1' => 'Novizio VHS',
            'movie-inventory-5' => 'Collezionista di Cassette',
            'movie-inventory-10' => 'Assiduo del Videoclub',
            'movie-inventory-50' => 'Riempiscaffali',
            'movie-inventory-100' => 'Professionista del Cestone',
            'movie-inventory-250' => 'Leggenda del Sabato Sera',
            'movie-inventory-500' => 'Cacciatore di Jumbo VHS',
            'movie-inventory-1000' => 'Archivista dei Sentieri Nascosti',
            'movie-inventory-2500' => 'Imperatore del Cinema',
            'movie-inventory-5000' => 'Immortale della Celluloide',
            'movie-favorite-1' => 'Primo Preferito',
            'movie-favorite-5' => 'Fan dei Top 5',
            'movie-favorite-10' => 'Cacciatore di Film Preferiti',
            'movie-favorite-50' => 'Collezionista di Cuori',
            'movie-favorite-100' => 'Connessione Cult',
            'movie-favorite-250' => 'Maestro del Cinema',
            'movie-favorite-500' => 'Principe dei Preferiti',
            'movie-favorite-1000' => 'Fanatico del Cinema',
            'movie-favorite-2500' => 'Leggenda dello Schermo',
            'movie-favorite-5000' => 'Icona della Lista Eterna',
            'movie-voted-1' => 'Primo Verdetto',
            'movie-voted-5' => 'Apprendista Critico',
            'movie-voted-10' => 'Orso delle Valutazioni',
            'movie-voted-50' => 'Conoscitore di Scene',
            'movie-voted-100' => 'Giudice dei Popcorn',
            'movie-voted-250' => 'Esperto di Critica Cinematografica',
            'movie-voted-500' => 'Dittatore del Pollice Su',
            'movie-voted-1000' => 'Sceriffo del Lungometraggio',
            'movie-voted-2500' => 'Magnate delle Opinioni',
            'movie-voted-5000' => 'Oscar delle Voci',
            'game-inventory-1' => 'Novizio della Cartuccia',
            'game-inventory-5' => 'Collezionista di Moduli',
            'game-inventory-10' => 'Cowboy del Controller',
            'game-inventory-50' => 'Imballatore di Pixel',
            'game-inventory-100' => 'Cavaliere Retro',
            'game-inventory-250' => 'Cacciatore di Highscore',
            'game-inventory-500' => 'Re della Console',
            'game-inventory-1000' => 'Barone 16-Bit',
            'game-inventory-2500' => 'Schiacciacartucce',
            'game-inventory-5000' => 'Leggenda del Continue Infinito',
            'game-favorite-1' => 'Prima Scelta',
            'game-favorite-5' => 'Giocatore di Alto Livello',
            'game-favorite-10' => 'Signore del Livello Preferito',
            'game-favorite-50' => 'Preferito del Boss',
            'game-favorite-100' => 'Principe del Power-Up',
            'game-favorite-250' => 'Campione dei Codici Cheat',
            'game-favorite-500' => 'Santo della Speedrun',
            'game-favorite-1000' => 'Genio del Gioco',
            'game-favorite-2500' => 'Boss Finale dei Preferiti',
            'game-favorite-5000' => 'Eroe della Hall of Fame',
            'game-voted-1' => 'Prima Valutazione',
            'game-voted-5' => 'Giudice dei Pixel',
            'game-voted-10' => 'Giurato del Joystick',
            'game-voted-50' => 'Critico del Controller',
            'game-voted-100' => 'Volpe del Frame Rate',
            'game-voted-250' => 'Valutatore di Bit',
            'game-voted-500' => 'Sceriffo dei Punteggi',
            'game-voted-1000' => 'Maestro delle Opinioni',
            'game-voted-2500' => 'Gigante delle Recensioni',
            'game-voted-5000' => 'Tester Leggendario di Lunga Durata',
            'billing-uploaded-1' => 'Prima Fattura',
            'billing-uploaded-5' => 'Apprendista Contabile',
            'billing-uploaded-10' => 'Maestro della Giungla dei Numeri',
            'billing-uploaded-50' => 'Tesoriere',
            'billing-uploaded-100' => 'Guru Finanziario',
            'billing-uploaded-250' => 'Leggenda di Wall Street',
            'employee-fired-1' => 'Allarme Antincendio',
            'employee-hired-1' => 'Prima Assunzione',
            'employee-hired-2' => 'Caposquadra',
            'login-first' => 'Benvenuto nel Club',
            'login-streak-7' => 'Una Settimana Dipendente',
            'login-streak-30' => 'Membro del Mese',
            'login-streak-100' => 'Cento Acque',
            'login-streak-365' => 'Dipendente Annuale',
            'login-early-bird' => 'Mattiniero',
            'login-night-owl' => 'Gufo Notturno',
            'movie-genre-completionist-inventory' => 'Ordine sullo Scaffale',
            'movie-genre-completionist-favorite' => 'Dipendente del Genere'
        ];
        return $names[$slug] ?? $slug;
    }

    private function getPortugueseName($slug)
    {
        $names = [
            'movie-inventory-1' => 'Novato VHS',
            'movie-inventory-5' => 'Colecionador de Cassetes',
            'movie-inventory-10' => 'Frequentador da Locadora',
            'movie-inventory-50' => 'Enchedor de Prateleiras',
            'movie-inventory-100' => 'Profissional do Barril',
            'movie-inventory-250' => 'Lenda do Sábado à Noite',
            'movie-inventory-500' => 'Caçador de Jumbo VHS',
            'movie-inventory-1000' => 'Arquivista dos Caminhos Ocultos',
            'movie-inventory-2500' => 'Imperador do Cinema',
            'movie-inventory-5000' => 'Imortal do Celuloide',
            'movie-favorite-1' => 'Primeiro Favorito',
            'movie-favorite-5' => 'Fã do Top 5',
            'movie-favorite-10' => 'Caçador de Filmes Favoritos',
            'movie-favorite-50' => 'Colecionador de Favoritos',
            'movie-favorite-100' => 'Conexão Cult',
            'movie-favorite-250' => 'Mestre do Cinema',
            'movie-favorite-500' => 'Príncipe dos Favoritos',
            'movie-favorite-1000' => 'Fanático por Cinema',
            'movie-favorite-2500' => 'Lenda da Tela',
            'movie-favorite-5000' => 'Ícone da Lista Eterna',
            'movie-voted-1' => 'Primeiro Veredito',
            'movie-voted-5' => 'Aprendiz de Crítico',
            'movie-voted-10' => 'Urso das Avaliações',
            'movie-voted-50' => 'Conhecedor de Cenas',
            'movie-voted-100' => 'Juiz da Pipoca',
            'movie-voted-250' => 'Especialista em Crítica de Filmes',
            'movie-voted-500' => 'Ditador do Joinha',
            'movie-voted-1000' => 'Xerife do Longa-metragem',
            'movie-voted-2500' => 'Magnata das Opiniões',
            'movie-voted-5000' => 'Oscar das Vozes',
            'game-inventory-1' => 'Novato em Cartucho',
            'game-inventory-5' => 'Colecionador de Módulos',
            'game-inventory-10' => 'Cowboy do Controle',
            'game-inventory-50' => 'Empacotador de Pixels',
            'game-inventory-100' => 'Cavaleiro Retro',
            'game-inventory-250' => 'Caçador de Highscores',
            'game-inventory-500' => 'Rei do Console',
            'game-inventory-1000' => 'Barão de 16 Bits',
            'game-inventory-2500' => 'Esmagador de Cartuchos',
            'game-inventory-5000' => 'Lenda do Continue Infinito',
            'game-favorite-1' => 'Primeira Escolha',
            'game-favorite-5' => 'Jogador de Primeira Linha',
            'game-favorite-10' => 'Senhor do Nível Favorito',
            'game-favorite-50' => 'Favorito do Chefão',
            'game-favorite-100' => 'Príncipe do Power-Up',
            'game-favorite-250' => 'Campeão dos Códigos',
            'game-favorite-500' => 'Santo do Speedrun',
            'game-favorite-1000' => 'Gênio do Jogo',
            'game-favorite-2500' => 'Chefão Final dos Favoritos',
            'game-favorite-5000' => 'Herói do Hall da Fama',
            'game-voted-1' => 'Primeira Avaliação',
            'game-voted-5' => 'Juiz de Pixels',
            'game-voted-10' => 'Jurado do Joystick',
            'game-voted-50' => 'Crítico do Controle',
            'game-voted-100' => 'Raposa da Taxa de Quadros',
            'game-voted-250' => 'Avaliador de Bits',
            'game-voted-500' => 'Xerife das Pontuações',
            'game-voted-1000' => 'Mestre das Opiniões',
            'game-voted-2500' => 'Gigante das Resenhas',
            'game-voted-5000' => 'Testador Lendário de Longo Prazo',
            'billing-uploaded-1' => 'Primeira Fatura',
            'billing-uploaded-5' => 'Aprendiz de Contabilidade',
            'billing-uploaded-10' => 'Mestre da Selva dos Números',
            'billing-uploaded-50' => 'Tesoureiro',
            'billing-uploaded-100' => 'Guru Financeiro',
            'billing-uploaded-250' => 'Lenda de Wall Street',
            'employee-fired-1' => 'Alarme de Incêndio',
            'employee-hired-1' => 'Primeira Contratação',
            'employee-hired-2' => 'Líder de Equipe',
            'login-first' => 'Bem-vindo ao Clube',
            'login-streak-7' => 'Uma Semana Viciado',
            'login-streak-30' => 'Membro do Mês',
            'login-streak-100' => 'Cem Águas',
            'login-streak-365' => 'Viciado Anual',
            'login-early-bird' => 'Madrugador',
            'login-night-owl' => 'Coruja Noturna',
            'movie-genre-completionist-inventory' => 'Ordem na Prateleira',
            'movie-genre-completionist-favorite' => 'Viciado em Gênero'
        ];
        return $names[$slug] ?? $slug;
    }

    private function getGermanDescription($slug)
    {
        $parts = explode('-', $slug);
        $threshold = (int)end($parts);
        if (strpos($slug, 'movie-inventory') === 0) :
            return 'Hat ' . $threshold . ' Film' . ($threshold > 1 ? 'e' : '') . ' in sein Inventar hinzugefügt';
        endif;
        if (strpos($slug, 'movie-favorite') === 0) :
            return 'Hat ' . $threshold . ' Film' . ($threshold > 1 ? 'e' : '') . ' zu seinen Favoriten hinzugefügt';
        endif;
        if (strpos($slug, 'movie-voted') === 0) :
            return 'Hat für ' . $threshold . ' Film' . ($threshold > 1 ? 'e' : '') . ' in der Datenbank abgestimmt';
        endif;
        if (strpos($slug, 'game-inventory') === 0) :
            return 'Hat ' . $threshold . ' Videospiel' . ($threshold > 1 ? 'e' : '') . ' zu seinem Inventar hinzugefügt';
        endif;
        if (strpos($slug, 'game-favorite') === 0) :
            return 'Hat ' . $threshold . ' Videospiel' . ($threshold > 1 ? 'e' : '') . ' zu seinen Favoriten hinzugefügt';
        endif;
        if (strpos($slug, 'game-voted') === 0) :
            return 'Hat für ' . $threshold . ' Videospiel' . ($threshold > 1 ? 'e' : '') . ' in der Datenbank abgestimmt';
        endif;
        if ($slug === 'employee-hired-1') return 'Hat 1 Mitarbeiter in seinem Shop Profil eingestellt';
        if ($slug === 'employee-hired-2') return 'Hat 2 Mitarbeiter in seinem Shop Profil eingestellt';
        if ($slug === 'employee-fired-1') return 'Hat 1 Mitarbeiter in seinem Shop Profil gefeuert';
        if ($slug === 'silver-membership') return 'Hat eine Silber Mitgliedschaft abgeschlossen';
        if ($slug === 'gold-membership') return 'Hat eine Gold Mitgliedschaft abgeschlossen';
        if (strpos($slug, 'billing-uploaded') === 0) :
            return 'Hat ' . $threshold . ' Abrechnung' . ($threshold > 1 ? 'en' : '') . ' in sein Shop Profil hochgeladen';
        endif;
        if (strpos($slug, 'login') === 0) :
            if ($slug === 'login-first') return 'Hat sich zum ersten Mal eingeloggt';
            if ($slug === 'login-early-bird') return 'Hat sich vor 8 Uhr eingeloggt';
            if ($slug === 'login-night-owl') return 'Hat sich nach Mitternacht eingeloggt';
            if (strpos($slug, 'login-streak') === 0) return 'Hat ' . $threshold . ' Tage am Stück eingeloggt';
        endif;
        if ($slug === 'movie-genre-completionist-inventory') :
            return 'Hat mindestens einen Film aus jedem Genre im Inventar';
        endif;
        if ($slug === 'movie-genre-completionist-favorite') :
            return 'Hat mindestens einen Film aus jedem Genre in den Favoriten';
        endif;
        return 'Achievement Description';
    }

    private function getEnglishDescription($slug)
    {
        $parts = explode('-', $slug);
        $threshold = (int)end($parts);
        if (strpos($slug, 'movie-inventory') === 0) :
            return 'Has added ' . $threshold . ' movie' . ($threshold > 1 ? 's' : '') . ' to their inventory';
        endif;
        if (strpos($slug, 'movie-favorite') === 0) :
            return 'Has added ' . $threshold . ' movie' . ($threshold > 1 ? 's' : '') . ' to their favorites';
        endif;
        if (strpos($slug, 'movie-voted') === 0) :
            return 'Has voted for ' . $threshold . ' movie' . ($threshold > 1 ? 's' : '') . ' in the database';
        endif;
        if (strpos($slug, 'game-inventory') === 0) :
            return 'Has added ' . $threshold . ' video game' . ($threshold > 1 ? 's' : '') . ' to their inventory';
        endif;
        if (strpos($slug, 'game-favorite') === 0) :
            return 'Has added ' . $threshold . ' video game' . ($threshold > 1 ? 's' : '') . ' to their favorites';
        endif;
        if (strpos($slug, 'game-voted') === 0) :
            return 'Has voted for ' . $threshold . ' video game' . ($threshold > 1 ? 's' : '') . ' in the database';
        endif;
        if ($slug === 'employee-hired-1') return 'Has hired 1 employee in their shop profile';
        if ($slug === 'employee-hired-2') return 'Has hired 2 employees in their shop profile';
        if ($slug === 'employee-fired-1') return 'Has fired 1 employee in their shop profile';
        if ($slug === 'silver-membership') return 'Has completed a Silver Membership';
        if ($slug === 'gold-membership') return 'Has completed a Gold Membership';
        if (strpos($slug, 'billing-uploaded') === 0) :
            return 'Has uploaded ' . $threshold . ' bill' . ($threshold > 1 ? 's' : '') . ' to their shop profile';
        endif;
        if (strpos($slug, 'login') === 0) :
            if ($slug === 'login-first') return 'Logged in for the first time';
            if ($slug === 'login-early-bird') return 'Logged in before 8 AM';
            if ($slug === 'login-night-owl') return 'Logged in after midnight';
            if (strpos($slug, 'login-streak') === 0) return 'Logged in for ' . $threshold . ' days in a row';
        endif;
        if ($slug === 'movie-genre-completionist-inventory') :
            return 'Has at least one movie from every genre in their inventory';
        endif;
        if ($slug === 'movie-genre-completionist-favorite') :
            return 'Has at least one movie from every genre in their favorites';
        endif;
        return 'Achievement Description';
    }

    private function getSpanishDescription($slug)
    {
        $parts = explode('-', $slug);
        $threshold = (int)end($parts);
        if (strpos($slug, 'movie-inventory') === 0) :
            return 'Ha añadido ' . $threshold . ' película' . ($threshold > 1 ? 's' : '') . ' a su inventario';
        endif;
        if (strpos($slug, 'movie-favorite') === 0) :
            return 'Ha añadido ' . $threshold . ' película' . ($threshold > 1 ? 's' : '') . ' a sus favoritos';
        endif;
        if (strpos($slug, 'movie-voted') === 0) :
            return 'Ha votado por ' . $threshold . ' película' . ($threshold > 1 ? 's' : '') . ' en la base de datos';
        endif;
        if (strpos($slug, 'game-inventory') === 0) :
            return 'Ha añadido ' . $threshold . ' videojuego' . ($threshold > 1 ? 's' : '') . ' a su inventario';
        endif;
        if (strpos($slug, 'game-favorite') === 0) :
            return 'Ha añadido ' . $threshold . ' videojuego' . ($threshold > 1 ? 's' : '') . ' a sus favoritos';
        endif;
        if (strpos($slug, 'game-voted') === 0) :
            return 'Ha votado por ' . $threshold . ' videojuego' . ($threshold > 1 ? 's' : '') . ' en la base de datos';
        endif;
        if ($slug === 'employee-hired-1') return 'Ha contratado 1 empleado en su perfil de tienda';
        if ($slug === 'employee-hired-2') return 'Ha contratado 2 empleados en su perfil de tienda';
        if ($slug === 'employee-fired-1') return 'Ha despedido 1 empleado en su perfil de tienda';
        if ($slug === 'silver-membership') return 'Ha completado una Membresía de Plata';
        if ($slug === 'gold-membership') return 'Ha completado una Membresía de Oro';
        if (strpos($slug, 'billing-uploaded') === 0) :
            return 'Ha subido ' . $threshold . ' factura' . ($threshold > 1 ? 's' : '') . ' a su perfil de tienda';
        endif;
        if (strpos($slug, 'login') === 0) :
            if ($slug === 'login-first') return 'Inició sesión por primera vez';
            if ($slug === 'login-early-bird') return 'Inició sesión antes de las 8 AM';
            if ($slug === 'login-night-owl') return 'Inició sesión después de medianoche';
            if (strpos($slug, 'login-streak') === 0) return 'Inició sesión durante ' . $threshold . ' días seguidos';
        endif;
        if ($slug === 'movie-genre-completionist-inventory') :
            return 'Tiene al menos una película de cada género en su inventario';
        endif;
        if ($slug === 'movie-genre-completionist-favorite') :
            return 'Tiene al menos una película de cada género en sus favoritos';
        endif;
        return 'Descripción del Logro';
    }

    private function getFrenchDescription($slug)
    {
        $parts = explode('-', $slug);
        $threshold = (int)end($parts);
        if (strpos($slug, 'movie-inventory') === 0) :
            return 'A ajouté ' . $threshold . ' film' . ($threshold > 1 ? 's' : '') . ' à son inventaire';
        endif;
        if (strpos($slug, 'movie-favorite') === 0) :
            return 'A ajouté ' . $threshold . ' film' . ($threshold > 1 ? 's' : '') . ' à ses favoris';
        endif;
        if (strpos($slug, 'movie-voted') === 0) :
            return 'A voté pour ' . $threshold . ' film' . ($threshold > 1 ? 's' : '') . ' dans la base de données';
        endif;
        if (strpos($slug, 'game-inventory') === 0) :
            return 'A ajouté ' . $threshold . ' jeu vidéo' . ($threshold > 1 ? 'x' : '') . ' à son inventaire';
        endif;
        if (strpos($slug, 'game-favorite') === 0) :
            return 'A ajouté ' . $threshold . ' jeu vidéo' . ($threshold > 1 ? 'x' : '') . ' à ses favoris';
        endif;
        if (strpos($slug, 'game-voted') === 0) :
            return 'A voté pour ' . $threshold . ' jeu vidéo' . ($threshold > 1 ? 'x' : '') . ' dans la base de données';
        endif;
        if ($slug === 'employee-hired-1') return 'A embauché 1 employé dans son profil de boutique';
        if ($slug === 'employee-hired-2') return 'A embauché 2 employés dans son profil de boutique';
        if ($slug === 'employee-fired-1') return 'A licencié 1 employé dans son profil de boutique';
        if ($slug === 'silver-membership') return 'A complété un abonnement Argent';
        if ($slug === 'gold-membership') return 'A complété un abonnement Or';
        if (strpos($slug, 'billing-uploaded') === 0) :
            return 'A téléchargé ' . $threshold . ' facture' . ($threshold > 1 ? 's' : '') . ' vers son profil de boutique';
        endif;
        if (strpos($slug, 'login') === 0) :
            if ($slug === 'login-first') return 'S\'est connecté pour la première fois';
            if ($slug === 'login-early-bird') return 'S\'est connecté avant 8h';
            if ($slug === 'login-night-owl') return 'S\'est connecté après minuit';
            if (strpos($slug, 'login-streak') === 0) return 'S\'est connecté ' . $threshold . ' jours d\'affilée';
        endif;
        if ($slug === 'movie-genre-completionist-inventory') :
            return 'A au moins un film de chaque genre dans son inventaire';
        endif;
        if ($slug === 'movie-genre-completionist-favorite') :
            return 'A au moins un film de chaque genre dans ses favoris';
        endif;
        return 'Description du Succès';
    }

    private function getItalianDescription($slug)
    {
        $parts = explode('-', $slug);
        $threshold = (int)end($parts);
        if (strpos($slug, 'movie-inventory') === 0) :
            return 'Ha aggiunto ' . $threshold . ' film' . ($threshold > 1 ? 's' : '') . ' al suo inventario';
        endif;
        if (strpos($slug, 'movie-favorite') === 0) :
            return 'Ha aggiunto ' . $threshold . ' film' . ($threshold > 1 ? 's' : '') . ' ai suoi preferiti';
        endif;
        if (strpos($slug, 'movie-voted') === 0) :
            return 'Ha votato per ' . $threshold . ' film' . ($threshold > 1 ? 's' : '') . ' nel database';
        endif;
        if (strpos($slug, 'game-inventory') === 0) :
            return 'Ha aggiunto ' . $threshold . ' videogioco' . ($threshold > 1 ? 's' : '') . ' al suo inventario';
        endif;
        if (strpos($slug, 'game-favorite') === 0) :
            return 'Ha aggiunto ' . $threshold . ' videogioco' . ($threshold > 1 ? 's' : '') . ' ai suoi preferiti';
        endif;
        if (strpos($slug, 'game-voted') === 0) :
            return 'Ha votato per ' . $threshold . ' videogioco' . ($threshold > 1 ? 's' : '') . ' nel database';
        endif;
        if ($slug === 'employee-hired-1') return 'Ha assunto 1 dipendente nel suo profilo del negozio';
        if ($slug === 'employee-hired-2') return 'Ha assunto 2 dipendenti nel suo profilo del negozio';
        if ($slug === 'employee-fired-1') return 'Ha licenziato 1 dipendente nel suo profilo del negozio';
        if ($slug === 'silver-membership') return 'Ha completato un abbonamento Argento';
        if ($slug === 'gold-membership') return 'Ha completato un abbonamento Oro';
        if (strpos($slug, 'billing-uploaded') === 0) :
            return 'Ha caricato ' . $threshold . ' fattura' . ($threshold > 1 ? 'e' : '') . ' nel suo profilo del negozio';
        endif;
        if (strpos($slug, 'login') === 0) :
            if ($slug === 'login-first') return 'Ha effettuato il primo accesso';
            if ($slug === 'login-early-bird') return 'Ha effettuato l\'accesso prima delle 8';
            if ($slug === 'login-night-owl') return 'Ha effettuato l\'accesso dopo mezzanotte';
            if (strpos($slug, 'login-streak') === 0) return 'Ha effettuato l\'accesso per ' . $threshold . ' giorni consecutivi';
        endif;
        if ($slug === 'movie-genre-completionist-inventory') :
            return 'Ha almeno un film di ogni genere nel suo inventario';
        endif;
        if ($slug === 'movie-genre-completionist-favorite') :
            return 'Ha almeno un film di ogni genere nei suoi preferiti';
        endif;
        return 'Descrizione Obiettivo';
    }

    private function getPortugueseDescription($slug)
    {
        $parts = explode('-', $slug);
        $threshold = (int)end($parts);
        if (strpos($slug, 'movie-inventory') === 0) :
            return 'Adicionou ' . $threshold . ' filme' . ($threshold > 1 ? 's' : '') . ' ao seu inventário';
        endif;
        if (strpos($slug, 'movie-favorite') === 0) :
            return 'Adicionou ' . $threshold . ' filme' . ($threshold > 1 ? 's' : '') . ' aos seus favoritos';
        endif;
        if (strpos($slug, 'movie-voted') === 0) :
            return 'Votou em ' . $threshold . ' filme' . ($threshold > 1 ? 's' : '') . ' no banco de dados';
        endif;
        if (strpos($slug, 'game-inventory') === 0) :
            return 'Adicionou ' . $threshold . ' videogame' . ($threshold > 1 ? 's' : '') . ' ao seu inventário';
        endif;
        if (strpos($slug, 'game-favorite') === 0) :
            return 'Adicionou ' . $threshold . ' videogame' . ($threshold > 1 ? 's' : '') . ' aos seus favoritos';
        endif;
        if (strpos($slug, 'game-voted') === 0) :
            return 'Votou em ' . $threshold . ' videogame' . ($threshold > 1 ? 's' : '') . ' no banco de dados';
        endif;
        if ($slug === 'employee-hired-1') return 'Contratou 1 funcionário no seu perfil da loja';
        if ($slug === 'employee-hired-2') return 'Contratou 2 funcionários no seu perfil da loja';
        if ($slug === 'employee-fired-1') return 'Demitiu 1 funcionário no seu perfil da loja';
        if ($slug === 'silver-membership') return 'Completou uma Assinatura Prata';
        if ($slug === 'gold-membership') return 'Completou uma Assinatura Ouro';
        if (strpos($slug, 'billing-uploaded') === 0) :
            return 'Carregou ' . $threshold . ' fatura' . ($threshold > 1 ? 's' : '') . ' no seu perfil da loja';
        endif;
        if (strpos($slug, 'login') === 0) :
            if ($slug === 'login-first') return 'Fez login pela primeira vez';
            if ($slug === 'login-early-bird') return 'Fez login antes das 8h';
            if ($slug === 'login-night-owl') return 'Fez login depois da meia-noite';
            if (strpos($slug, 'login-streak') === 0) return 'Fez login por ' . $threshold . ' dias consecutivos';
        endif;
        if ($slug === 'movie-genre-completionist-inventory') :
            return 'Tem pelo menos um filme de cada gênero no seu inventário';
        endif;
        if ($slug === 'movie-genre-completionist-favorite') :
            return 'Tem pelo menos um filme de cada gênero nos seus favoritos';
        endif;
        return 'Descrição da Conquista';
    }
}
