<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\ActivitiesModel;
use App\Models\TranslationsModel;

class Activities extends Seeder
{
    private ActivitiesModel $activitiesModel;
    private TranslationsModel $translationsModel;

    public function __construct()
    {
        $this->activitiesModel = model(ActivitiesModel::class);
        $this->translationsModel = model(TranslationsModel::class);
    }

    public function run()
    {
        $activityId = $this->activitiesModel->protect(false)->skipValidation(true)->insert([
            'slug' => 'achievement-unlocked',
            'activity_type' => 'achievement_unlocked'
        ], true);
        $this->addTranslations($activityId, 'achievement_unlocked');
        $activityId = $this->activitiesModel->protect(false)->skipValidation(true)->insert([
            'slug' => 'billing-add',
            'activity_type' => 'billing_add'
        ], true);
        $this->addTranslations($activityId, 'billing_add');
        $activityId = $this->activitiesModel->protect(false)->skipValidation(true)->insert([
            'slug' => 'billing-delete',
            'activity_type' => 'billing_delete'
        ], true);
        $this->addTranslations($activityId, 'billing_delete');
        $activityId = $this->activitiesModel->protect(false)->skipValidation(true)->insert([
            'slug' => 'billing-edit',
            'activity_type' => 'billing_edit'
        ], true);
        $this->addTranslations($activityId, 'billing_edit');
        $activityId = $this->activitiesModel->protect(false)->skipValidation(true)->insert([
            'slug' => 'display-case-game-add',
            'activity_type' => 'display_case_game_add'
        ], true);
        $this->addTranslations($activityId, 'display_case_game_add');
        $activityId = $this->activitiesModel->protect(false)->skipValidation(true)->insert([
            'slug' => 'display-case-game-delete',
            'activity_type' => 'display_case_game_delete'
        ], true);
        $this->addTranslations($activityId, 'display_case_game_delete');
        $activityId = $this->activitiesModel->protect(false)->skipValidation(true)->insert([
            'slug' => 'display-case-movie-add',
            'activity_type' => 'display_case_movie_add'
        ], true);
        $this->addTranslations($activityId, 'display_case_movie_add');
        $activityId = $this->activitiesModel->protect(false)->skipValidation(true)->insert([
            'slug' => 'display-case-movie-delete',
            'activity_type' => 'display_case_movie_delete'
        ], true);
        $this->addTranslations($activityId, 'display_case_movie_delete');
        $activityId = $this->activitiesModel->protect(false)->skipValidation(true)->insert([
            'slug' => 'employee-add',
            'activity_type' => 'employee_add'
        ], true);
        $this->addTranslations($activityId, 'employee_add');
        $activityId = $this->activitiesModel->protect(false)->skipValidation(true)->insert([
            'slug' => 'employee-delete',
            'activity_type' => 'employee_delete'
        ], true);
        $this->addTranslations($activityId, 'employee_delete');
        $activityId = $this->activitiesModel->protect(false)->skipValidation(true)->insert([
            'slug' => 'employee-edit',
            'activity_type' => 'employee_edit'
        ], true);
        $this->addTranslations($activityId, 'employee_edit');
        $activityId = $this->activitiesModel->protect(false)->skipValidation(true)->insert([
            'slug' => 'favorite-game-add',
            'activity_type' => 'favorite_game_add'
        ], true);
        $this->addTranslations($activityId, 'favorite_game_add');
        $activityId = $this->activitiesModel->protect(false)->skipValidation(true)->insert([
            'slug' => 'favorite-game-delete',
            'activity_type' => 'favorite_game_delete'
        ], true);
        $this->addTranslations($activityId, 'favorite_game_delete');
        $activityId = $this->activitiesModel->protect(false)->skipValidation(true)->insert([
            'slug' => 'favorite-movie-add',
            'activity_type' => 'favorite_movie_add'
        ], true);
        $this->addTranslations($activityId, 'favorite_movie_add');
        $activityId = $this->activitiesModel->protect(false)->skipValidation(true)->insert([
            'slug' => 'favorite-movie-delete',
            'activity_type' => 'favorite_movie_delete'
        ], true);
        $this->addTranslations($activityId, 'favorite_movie_delete');
        $activityId = $this->activitiesModel->protect(false)->skipValidation(true)->insert([
            'slug' => 'inventory-game-add',
            'activity_type' => 'inventory_game_add'
        ], true);
        $this->addTranslations($activityId, 'inventory_game_add');
        $activityId = $this->activitiesModel->protect(false)->skipValidation(true)->insert([
            'slug' => 'inventory-game-delete',
            'activity_type' => 'inventory_game_delete'
        ], true);
        $this->addTranslations($activityId, 'inventory_game_delete');
        $activityId = $this->activitiesModel->protect(false)->skipValidation(true)->insert([
            'slug' => 'inventory-movie-add',
            'activity_type' => 'inventory_movie_add'
        ], true);
        $this->addTranslations($activityId, 'inventory_movie_add');
        $activityId = $this->activitiesModel->protect(false)->skipValidation(true)->insert([
            'slug' => 'inventory-movie-delete',
            'activity_type' => 'inventory_movie_delete'
        ], true);
        $this->addTranslations($activityId, 'inventory_movie_delete');
        $activityId = $this->activitiesModel->protect(false)->skipValidation(true)->insert([
            'slug' => 'login',
            'activity_type' => 'login'
        ], true);
        $this->addTranslations($activityId, 'login');
        $activityId = $this->activitiesModel->protect(false)->skipValidation(true)->insert([
            'slug' => 'logout',
            'activity_type' => 'logout'
        ], true);
        $this->addTranslations($activityId, 'logout');
        $activityId = $this->activitiesModel->protect(false)->skipValidation(true)->insert([
            'slug' => 'shop-image-delete',
            'activity_type' => 'shop_image_delete'
        ], true);
        $this->addTranslations($activityId, 'shop_image_delete');
        $activityId = $this->activitiesModel->protect(false)->skipValidation(true)->insert([
            'slug' => 'shop-image-edit',
            'activity_type' => 'shop_image_edit'
        ], true);
        $this->addTranslations($activityId, 'shop_image_edit');
        $activityId = $this->activitiesModel->protect(false)->skipValidation(true)->insert([
            'slug' => 'shop-profile-edit',
            'activity_type' => 'shop_profile_edit'
        ], true);
        $this->addTranslations($activityId, 'shop_profile_edit');
        $activityId = $this->activitiesModel->protect(false)->skipValidation(true)->insert([
            'slug' => 'vote-game',
            'activity_type' => 'vote_game'
        ], true);
        $this->addTranslations($activityId, 'vote_game');
        $activityId = $this->activitiesModel->protect(false)->skipValidation(true)->insert([
            'slug' => 'vote-movie',
            'activity_type' => 'vote_movie'
        ], true);
        $this->addTranslations($activityId, 'vote_movie');
    }

    private function addTranslations($activityId, $type)
    {
        $names = [
            'de' => $this->getGermanName($type),
            'en' => $this->getEnglishName($type),
            'es' => $this->getSpanishName($type),
            'fr' => $this->getFrenchName($type),
            'it' => $this->getItalianName($type),
            'pt' => $this->getPortugueseName($type)
        ];
        $descriptions = [
            'de' => $this->getGermanDescription($type),
            'en' => $this->getEnglishDescription($type),
            'es' => $this->getSpanishDescription($type),
            'fr' => $this->getFrenchDescription($type),
            'it' => $this->getItalianDescription($type),
            'pt' => $this->getPortugueseDescription($type)
        ];
        foreach ($names as $lang => $name) :
            $this->translationsModel->protect(false)->skipValidation(true)->save([
                'parent_id' => $activityId,
                'table_name' => 'activities',
                'type' => 'name',
                'language' => $lang,
                'translation' => $name
            ]);
            $this->translationsModel->protect(false)->skipValidation(true)->save([
                'parent_id' => $activityId,
                'table_name' => 'activities',
                'type' => 'description',
                'language' => $lang,
                'translation' => $descriptions[$lang]
            ]);
        endforeach;
    }

    private function getGermanName($type)
    {
        return match ($type) {
            'achievement_unlocked' => 'Erfolg freigeschaltet',
            'billing_add' => 'Abrechnung hinzugefügt',
            'billing_delete' => 'Abrechnung gelöscht',
            'billing_edit' => 'Abrechnung bearbeitet',
            'display_case_game_add' => 'Videospiel zum Schaufenster hinzugefügt',
            'display_case_game_delete' => 'Videospiel aus Schaufenster entfernt',
            'display_case_movie_add' => 'Film zum Schaufenster hinzugefügt',
            'display_case_movie_delete' => 'Film aus Schaufenster entfernt',
            'employee_add' => 'Mitarbeiter hinzugefügt',
            'employee_delete' => 'Mitarbeiter gelöscht',
            'employee_edit' => 'Mitarbeiter bearbeitet',
            'favorite_game_add' => 'Videospiel zu Favoriten hinzugefügt',
            'favorite_game_delete' => 'Videospiel aus Favoriten gelöscht',
            'favorite_movie_add' => 'Film zu Favoriten hinzugefügt',
            'favorite_movie_delete' => 'Film aus Favoriten gelöscht',
            'inventory_game_add' => 'Videospiel zu Inventar hinzugefügt',
            'inventory_game_delete' => 'Videospiel aus Inventar gelöscht',
            'inventory_movie_add' => 'Film zu Inventar hinzugefügt',
            'inventory_movie_delete' => 'Film aus Inventar gelöscht',
            'login' => 'Angemeldet',
            'logout' => 'Abgemeldet',
            'shop_image_delete' => 'Shop Hintergrundbild entfernt',
            'shop_image_edit' => 'Shop Hintergrundbild bearbeitet',
            'shop_profile_edit' => 'Shop Profil bearbeitet',
            'vote_game' => 'Für Videospiel abgestimmt',
            'vote_movie' => 'Für Film abgestimmt',
            default => 'Aktivität'
        };
    }

    private function getGermanDescription($type)
    {
        return match ($type) {
            'achievement_unlocked' => 'Hat den Erfolg %achievement% freigeschaltet',
            'billing_add' => 'Hat die Abrechnung für Tag %day% %month% %year% hinzugefügt',
            'billing_delete' => 'Hat die Abrechnung für Tag %day% %month% %year% gelöscht',
            'billing_edit' => 'Hat die Abrechnung für Tag %day% %month% %year% aktualisiert',
            'display_case_game_add' => 'Hat das Videospiel %game% zu seinem Schaufenster hinzugefügt',
            'display_case_game_delete' => 'Hat das Videospiel %game% aus seinem Schaufenster entfernt',
            'display_case_movie_add' => 'Hat den Film %movie% zu seinem Schaufenster hinzugefügt',
            'display_case_movie_delete' => 'Hat den Film %movie% aus seinem Schaufenster entfernt',
            'employee_add' => 'Hat den Mitarbeiter %employee% zu seinem Shop Staff hinzugefügt',
            'employee_delete' => 'Hat den Mitarbeiter %employee% aus seinem Shop Staff entfernt',
            'employee_edit' => 'Hat den Mitarbeiter %employee% in seinem Shop Staff aktualisiert',
            'favorite_game_add' => 'Hat das Videospiel %game% zu seinen Favoriten hinzugefügt',
            'favorite_game_delete' => 'Hat das Videospiel %game% aus seinen Favoriten entfernt',
            'favorite_movie_add' => 'Hat den Film %movie% zu seinen Favoriten hinzugefügt',
            'favorite_movie_delete' => 'Hat den Film %movie% aus seinen Favoriten entfernt',
            'inventory_game_add' => 'Hat das Videospiel %game% zu seinem Inventar hinzugefügt',
            'inventory_game_delete' => 'Hat das Videospiel %game% aus seinem Inventar entfernt',
            'inventory_movie_add' => 'Hat den Film %movie% zu seinem Inventar hinzugefügt',
            'inventory_movie_delete' => 'Hat den Film %movie% aus seinem Inventar entfernt',
            'login' => 'Hat sich in seinem Profil angemeldet',
            'logout' => 'Hat sich aus seinem Profil abgemeldet',
            'shop_image_delete' => 'Hat das Shop Hintergrundbild entfernt',
            'shop_image_edit' => 'Hat das Shop Hintergrundbild aktualisiert',
            'shop_profile_edit' => 'Hat das Shop Profil bearbeitet',
            'vote_game' => 'Hat für das Videospiel %game% abgestimmt',
            'vote_movie' => 'Hat für den Film %movie% abgestimmt',
            default => 'Aktivitätsbeschreibung'
        };
    }

    private function getEnglishName($type)
    {
        return match ($type) {
            'achievement_unlocked' => 'Achievement unlocked',
            'billing_add' => 'Billing added',
            'billing_delete' => 'Billing deleted',
            'billing_edit' => 'Billing edited',
            'display_case_game_add' => 'Video game added to display case',
            'display_case_game_delete' => 'Video game removed from display case',
            'display_case_movie_add' => 'Movie added to display case',
            'display_case_movie_delete' => 'Movie removed from display case',
            'employee_add' => 'Employee added',
            'employee_delete' => 'Employee deleted',
            'employee_edit' => 'Employee edited',
            'favorite_game_add' => 'Video game added to favorites',
            'favorite_game_delete' => 'Video game removed from favorites',
            'favorite_movie_add' => 'Movie added to favorites',
            'favorite_movie_delete' => 'Movie removed from favorites',
            'inventory_game_add' => 'Video game added to inventory',
            'inventory_game_delete' => 'Video game removed from inventory',
            'inventory_movie_add' => 'Movie added to inventory',
            'inventory_movie_delete' => 'Movie removed from inventory',
            'login' => 'Logged in',
            'logout' => 'Logged out',
            'shop_image_delete' => 'Shop background image deleted',
            'shop_image_edit' => 'Shop background image edited',
            'shop_profile_edit' => 'Shop profile edited',
            'vote_game' => 'Voted for video game',
            'vote_movie' => 'Voted for movie',
            default => 'Activity'
        };
    }

    private function getEnglishDescription($type)
    {
        return match ($type) {
            'achievement_unlocked' => 'Unlocked the achievement %achievement%',
            'billing_add' => 'Added the billing for day %day% %month% %year%',
            'billing_delete' => 'Deleted the billing for day %day% %month% %year%',
            'billing_edit' => 'Updated the billing for day %day% %month% %year%',
            'display_case_game_add' => 'Added the video game %game% to their display case',
            'display_case_game_delete' => 'Removed the video game %game% from their display case',
            'display_case_movie_add' => 'Added the movie %movie% to their display case',
            'display_case_movie_delete' => 'Removed the movie %movie% from their display case',
            'employee_add' => 'Added the employee %employee% to their shop staff',
            'employee_delete' => 'Removed the employee %employee% from their shop staff',
            'employee_edit' => 'Updated the employee %employee% in their shop staff',
            'favorite_game_add' => 'Added the video game %game% to their favorites',
            'favorite_game_delete' => 'Removed the video game %game% from their favorites',
            'favorite_movie_add' => 'Added the movie %movie% to their favorites',
            'favorite_movie_delete' => 'Removed the movie %movie% from their favorites',
            'inventory_game_add' => 'Added the video game %game% to their inventory',
            'inventory_game_delete' => 'Removed the video game %game% from their inventory',
            'inventory_movie_add' => 'Added the movie %movie% to their inventory',
            'inventory_movie_delete' => 'Removed the movie %movie% from their inventory',
            'login' => 'Logged into their profile',
            'logout' => 'Logged out of their profile',
            'shop_image_delete' => 'Deleted the shop background image',
            'shop_image_edit' => 'Updated the shop background image',
            'shop_profile_edit' => 'Edited the shop profile',
            'vote_game' => 'Voted for the video game %game%',
            'vote_movie' => 'Voted for the movie %movie%',
            default => 'Activity description'
        };
    }

    private function getSpanishName($type)
    {
        return match ($type) {
            'achievement_unlocked' => 'Logro desbloqueado',
            'billing_add' => 'Factura añadida',
            'billing_delete' => 'Factura eliminada',
            'billing_edit' => 'Factura editada',
            'display_case_game_add' => 'Videojuego añadido a la vitrina',
            'display_case_game_delete' => 'Videojuego eliminado de la vitrina',
            'display_case_movie_add' => 'Película añadida a la vitrina',
            'display_case_movie_delete' => 'Película eliminada de la vitrina',
            'employee_add' => 'Empleado añadido',
            'employee_delete' => 'Empleado eliminado',
            'employee_edit' => 'Empleado editado',
            'favorite_game_add' => 'Videojuego añadido a favoritos',
            'favorite_game_delete' => 'Videojuego eliminado de favoritos',
            'favorite_movie_add' => 'Película añadida a favoritos',
            'favorite_movie_delete' => 'Película eliminada de favoritos',
            'inventory_game_add' => 'Videojuego añadido al inventario',
            'inventory_game_delete' => 'Videojuego eliminado del inventario',
            'inventory_movie_add' => 'Película añadida al inventario',
            'inventory_movie_delete' => 'Película eliminada del inventario',
            'login' => 'Sesión iniciada',
            'logout' => 'Sesión cerrada',
            'shop_image_delete' => 'Imagen de fondo de la tienda eliminada',
            'shop_image_edit' => 'Imagen de fondo de la tienda editada',
            'shop_profile_edit' => 'Perfil de la tienda editado',
            'vote_game' => 'Votó por videojuego',
            'vote_movie' => 'Votó por película',
            default => 'Actividad'
        };
    }

    private function getSpanishDescription($type)
    {
        return match ($type) {
            'achievement_unlocked' => 'Ha desbloqueado el logro %achievement%',
            'billing_add' => 'Añadió la factura para el día %day% %month% %year%',
            'billing_delete' => 'Eliminó la factura para el día %day% %month% %year%',
            'billing_edit' => 'Actualizó la factura para el día %day% %month% %year%',
            'display_case_game_add' => 'Añadió el videojuego %game% a su vitrina',
            'display_case_game_delete' => 'Eliminó el videojuego %game% de su vitrina',
            'display_case_movie_add' => 'Añadió la película %movie% a su vitrina',
            'display_case_movie_delete' => 'Eliminó la película %movie% de su vitrina',
            'employee_add' => 'Añadió el empleado %employee% a su personal de la tienda',
            'employee_delete' => 'Eliminó el empleado %employee% de su personal de la tienda',
            'employee_edit' => 'Actualizó el empleado %employee% en su personal de la tienda',
            'favorite_game_add' => 'Añadió el videojuego %game% a sus favoritos',
            'favorite_game_delete' => 'Eliminó el videojuego %game% de sus favoritos',
            'favorite_movie_add' => 'Añadió la película %movie% a sus favoritos',
            'favorite_movie_delete' => 'Eliminó la película %movie% de sus favoritos',
            'inventory_game_add' => 'Añadió el videojuego %game% a su inventario',
            'inventory_game_delete' => 'Eliminó el videojuego %game% de su inventario',
            'inventory_movie_add' => 'Añadió la película %movie% a su inventario',
            'inventory_movie_delete' => 'Eliminó la película %movie% de su inventario',
            'login' => 'Inició sesión en su perfil',
            'logout' => 'Cerró sesión en su perfil',
            'shop_image_delete' => 'Eliminó la imagen de fondo de la tienda',
            'shop_image_edit' => 'Actualizó la imagen de fondo de la tienda',
            'shop_profile_edit' => 'Editó el perfil de la tienda',
            'vote_game' => 'Votó por el videojuego %game%',
            'vote_movie' => 'Votó por la película %movie%',
            default => 'Descripción de la actividad'
        };
    }

    private function getFrenchName($type)
    {
        return match ($type) {
            'achievement_unlocked' => 'Succès débloqué',
            'billing_add' => 'Facture ajoutée',
            'billing_delete' => 'Facture supprimée',
            'billing_edit' => 'Facture modifiée',
            'display_case_game_add' => 'Jeu vidéo ajouté à la vitrine',
            'display_case_game_delete' => 'Jeu vidéo retiré de la vitrine',
            'display_case_movie_add' => 'Film ajouté à la vitrine',
            'display_case_movie_delete' => 'Film retiré de la vitrine',
            'employee_add' => 'Employé ajouté',
            'employee_delete' => 'Employé supprimé',
            'employee_edit' => 'Employé modifié',
            'favorite_game_add' => 'Jeu vidéo ajouté aux favoris',
            'favorite_game_delete' => 'Jeu vidéo retiré des favoris',
            'favorite_movie_add' => 'Film ajouté aux favoris',
            'favorite_movie_delete' => 'Film retiré des favoris',
            'inventory_game_add' => 'Jeu vidéo ajouté à l\'inventaire',
            'inventory_game_delete' => 'Jeu vidéo retiré de l\'inventaire',
            'inventory_movie_add' => 'Film ajouté à l\'inventaire',
            'inventory_movie_delete' => 'Film retiré de l\'inventaire',
            'login' => 'Connecté',
            'logout' => 'Déconnecté',
            'shop_image_delete' => 'Image de fond de la boutique supprimée',
            'shop_image_edit' => 'Image de fond de la boutique modifiée',
            'shop_profile_edit' => 'Profil de la boutique modifié',
            'vote_game' => 'A voté pour un jeu vidéo',
            'vote_movie' => 'A voté pour un film',
            default => 'Activité'
        };
    }

    private function getFrenchDescription($type)
    {
        return match ($type) {
            'achievement_unlocked' => 'A débloqué le succès %achievement%',
            'billing_add' => 'A ajouté la facture pour le jour %day% %month% %year%',
            'billing_delete' => 'A supprimé la facture pour le jour %day% %month% %year%',
            'billing_edit' => 'A mis à jour la facture pour le jour %day% %month% %year%',
            'display_case_game_add' => 'A ajouté le jeu vidéo %game% à sa vitrine',
            'display_case_game_delete' => 'A retiré le jeu vidéo %game% de sa vitrine',
            'display_case_movie_add' => 'A ajouté le film %movie% à sa vitrine',
            'display_case_movie_delete' => 'A retiré le film %movie% de sa vitrine',
            'employee_add' => 'A ajouté l\'employé %employee% à son personnel de boutique',
            'employee_delete' => 'A retiré l\'employé %employee% de son personnel de boutique',
            'employee_edit' => 'A mis à jour l\'employé %employee% dans son personnel de boutique',
            'favorite_game_add' => 'A ajouté le jeu vidéo %game% à ses favoris',
            'favorite_game_delete' => 'A retiré le jeu vidéo %game% de ses favoris',
            'favorite_movie_add' => 'A ajouté le film %movie% à ses favoris',
            'favorite_movie_delete' => 'A retiré le film %movie% de ses favoris',
            'inventory_game_add' => 'A ajouté le jeu vidéo %game% à son inventaire',
            'inventory_game_delete' => 'A retiré le jeu vidéo %game% de son inventaire',
            'inventory_movie_add' => 'A ajouté le film %movie% à son inventaire',
            'inventory_movie_delete' => 'A retiré le film %movie% de son inventaire',
            'login' => 'S\'est connecté à son profil',
            'logout' => 'S\'est déconnecté de son profil',
            'shop_image_delete' => 'A supprimé l\'image de fond de la boutique',
            'shop_image_edit' => 'A mis à jour l\'image de fond de la boutique',
            'shop_profile_edit' => 'A modifié le profil de la boutique',
            'vote_game' => 'A voté pour le jeu vidéo %game%',
            'vote_movie' => 'A voté pour le film %movie%',
            default => 'Description de l\'activité'
        };
    }

    private function getItalianName($type)
    {
        return match ($type) {
            'achievement_unlocked' => 'Obiettivo sbloccato',
            'billing_add' => 'Fattura aggiunta',
            'billing_delete' => 'Fattura eliminata',
            'billing_edit' => 'Fattura modificata',
            'display_case_game_add' => 'Videogioco aggiunto alla vetrina',
            'display_case_game_delete' => 'Videogioco rimosso dalla vetrina',
            'display_case_movie_add' => 'Film aggiunto alla vetrina',
            'display_case_movie_delete' => 'Film rimosso dalla vetrina',
            'employee_add' => 'Dipendente aggiunto',
            'employee_delete' => 'Dipendente eliminato',
            'employee_edit' => 'Dipendente modificato',
            'favorite_game_add' => 'Videogioco aggiunto ai preferiti',
            'favorite_game_delete' => 'Videogioco rimosso dai preferiti',
            'favorite_movie_add' => 'Film aggiunto ai preferiti',
            'favorite_movie_delete' => 'Film rimosso dai preferiti',
            'inventory_game_add' => 'Videogioco aggiunto all\'inventario',
            'inventory_game_delete' => 'Videogioco rimosso dall\'inventario',
            'inventory_movie_add' => 'Film aggiunto all\'inventario',
            'inventory_movie_delete' => 'Film rimosso dall\'inventario',
            'login' => 'Accesso effettuato',
            'logout' => 'Disconnesso',
            'shop_image_delete' => 'Immagine di sfondo del negozio eliminata',
            'shop_image_edit' => 'Immagine di sfondo del negozio modificata',
            'shop_profile_edit' => 'Profilo del negozio modificato',
            'vote_game' => 'Ha votato per videogioco',
            'vote_movie' => 'Ha votato per film',
            default => 'Attività'
        };
    }

    private function getItalianDescription($type)
    {
        return match ($type) {
            'achievement_unlocked' => 'Ha sbloccato l\'obiettivo %achievement%',
            'billing_add' => 'Ha aggiunto la fattura per il giorno %day% %month% %year%',
            'billing_delete' => 'Ha eliminato la fattura per il giorno %day% %month% %year%',
            'billing_edit' => 'Ha aggiornato la fattura per il giorno %day% %month% %year%',
            'display_case_game_add' => 'Ha aggiunto il videogioco %game% alla sua vetrina',
            'display_case_game_delete' => 'Ha rimosso il videogioco %game% dalla sua vetrina',
            'display_case_movie_add' => 'Ha aggiunto il film %movie% alla sua vetrina',
            'display_case_movie_delete' => 'Ha rimosso il film %movie% dalla sua vetrina',
            'employee_add' => 'Ha aggiunto il dipendente %employee% al suo staff del negozio',
            'employee_delete' => 'Ha rimosso il dipendente %employee% dal suo staff del negozio',
            'employee_edit' => 'Ha aggiornato il dipendente %employee% nel suo staff del negozio',
            'favorite_game_add' => 'Ha aggiunto il videogioco %game% ai suoi preferiti',
            'favorite_game_delete' => 'Ha rimosso il videogioco %game% dai suoi preferiti',
            'favorite_movie_add' => 'Ha aggiunto il film %movie% ai suoi preferiti',
            'favorite_movie_delete' => 'Ha rimosso il film %movie% dai suoi preferiti',
            'inventory_game_add' => 'Ha aggiunto il videogioco %game% al suo inventario',
            'inventory_game_delete' => 'Ha rimosso il videogioco %game% dal suo inventario',
            'inventory_movie_add' => 'Ha aggiunto il film %movie% al suo inventario',
            'inventory_movie_delete' => 'Ha rimosso il film %movie% dal suo inventario',
            'login' => 'Ha effettuato l\'accesso al suo profilo',
            'logout' => 'Si è disconnesso dal suo profilo',
            'shop_image_delete' => 'Ha eliminato l\'immagine di sfondo del negozio',
            'shop_image_edit' => 'Ha aggiornato l\'immagine di sfondo del negozio',
            'shop_profile_edit' => 'Ha modificato il profilo del negozio',
            'vote_game' => 'Ha votato per il videogioco %game%',
            'vote_movie' => 'Ha votato per il film %movie%',
            default => 'Descrizione dell\'attività'
        };
    }

    private function getPortugueseName($type)
    {
        return match ($type) {
            'achievement_unlocked' => 'Conquista desbloqueada',
            'billing_add' => 'Fatura adicionada',
            'billing_delete' => 'Fatura excluída',
            'billing_edit' => 'Fatura editada',
            'display_case_game_add' => 'Videogame adicionado à vitrine',
            'display_case_game_delete' => 'Videogame removido da vitrine',
            'display_case_movie_add' => 'Filme adicionado à vitrine',
            'display_case_movie_delete' => 'Filme removido da vitrine',
            'employee_add' => 'Funcionário adicionado',
            'employee_delete' => 'Funcionário excluído',
            'employee_edit' => 'Funcionário editado',
            'favorite_game_add' => 'Videogame adicionado aos favoritos',
            'favorite_game_delete' => 'Videogame removido dos favoritos',
            'favorite_movie_add' => 'Filme adicionado aos favoritos',
            'favorite_movie_delete' => 'Filme removido dos favoritos',
            'inventory_game_add' => 'Videogame adicionado ao inventário',
            'inventory_game_delete' => 'Videogame removido do inventário',
            'inventory_movie_add' => 'Filme adicionado ao inventário',
            'inventory_movie_delete' => 'Filme removido do inventário',
            'login' => 'Conectado',
            'logout' => 'Desconectado',
            'shop_image_delete' => 'Imagem de fundo da loja excluída',
            'shop_image_edit' => 'Imagem de fundo da loja editada',
            'shop_profile_edit' => 'Perfil da loja editado',
            'vote_game' => 'Votou em videogame',
            'vote_movie' => 'Votou em filme',
            default => 'Atividade'
        };
    }

    private function getPortugueseDescription($type)
    {
        return match ($type) {
            'achievement_unlocked' => 'Desbloqueou a conquista %achievement%',
            'billing_add' => 'Adicionou a fatura para o dia %day% %month% %year%',
            'billing_delete' => 'Excluiu a fatura para o dia %day% %month% %year%',
            'billing_edit' => 'Atualizou a fatura para o dia %day% %month% %year%',
            'display_case_game_add' => 'Adicionou o videogame %game% à sua vitrine',
            'display_case_game_delete' => 'Removeu o videogame %game% da sua vitrine',
            'display_case_movie_add' => 'Adicionou o filme %movie% à sua vitrine',
            'display_case_movie_delete' => 'Removeu o filme %movie% da sua vitrine',
            'employee_add' => 'Adicionou o funcionário %employee% à sua equipe da loja',
            'employee_delete' => 'Removeu o funcionário %employee% da sua equipe da loja',
            'employee_edit' => 'Atualizou o funcionário %employee% na sua equipe da loja',
            'favorite_game_add' => 'Adicionou o videogame %game% aos seus favoritos',
            'favorite_game_delete' => 'Removeu o videogame %game% dos seus favoritos',
            'favorite_movie_add' => 'Adicionou o filme %movie% aos seus favoritos',
            'favorite_movie_delete' => 'Removeu o filme %movie% dos seus favoritos',
            'inventory_game_add' => 'Adicionou o videogame %game% ao seu inventário',
            'inventory_game_delete' => 'Removeu o videogame %game% do seu inventário',
            'inventory_movie_add' => 'Adicionou o filme %movie% ao seu inventário',
            'inventory_movie_delete' => 'Removeu o filme %movie% do seu inventário',
            'login' => 'Conectou-se ao seu perfil',
            'logout' => 'Desconectou-se do seu perfil',
            'shop_image_delete' => 'Excluiu a imagem de fundo da loja',
            'shop_image_edit' => 'Atualizou a imagem de fundo da loja',
            'shop_profile_edit' => 'Editou o perfil da loja',
            'vote_game' => 'Votou no videogame %game%',
            'vote_movie' => 'Votou no filme %movie%',
            default => 'Descrição da atividade'
        };
    }
}
