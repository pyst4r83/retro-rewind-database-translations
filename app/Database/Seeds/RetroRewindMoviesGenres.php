<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\RetroRewindMoviesGenresModel;
use App\Models\TranslationsModel;

class RetroRewindMoviesGenres extends Seeder
{
    private RetroRewindMoviesGenresModel $retroRewindMoviesGenresModel;
    private TranslationsModel $translationsModel;

    public function __construct()
    {
        $this->retroRewindMoviesGenresModel = model(RetroRewindMoviesGenresModel::class);
        $this->translationsModel = model(TranslationsModel::class);
    }

    public function run()
    {
        // Horror
        $data = ['slug' => url_title('Horror', '-', true), 'icon' => 'moon-stars', 'active' => true];
        $language_id = $this->retroRewindMoviesGenresModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'de', 'translation' => 'Horror'];
        $translation_data_en = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'en', 'translation' => 'Horror'];
        $translation_data_es = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'es', 'translation' => 'Terror'];
        $translation_data_fr = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'fr', 'translation' => 'Horreur'];
        $translation_data_it = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'it', 'translation' => 'Horror'];
        $translation_data_pt = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'pt', 'translation' => 'Terror'];
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_pt);

        // Drama
        $data = ['slug' => url_title('Drama', '-', true), 'icon' => 'camera-reels', 'active' => true];
        $language_id = $this->retroRewindMoviesGenresModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'de', 'translation' => 'Drama'];
        $translation_data_en = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'en', 'translation' => 'Drama'];
        $translation_data_es = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'es', 'translation' => 'Drama'];
        $translation_data_fr = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'fr', 'translation' => 'Drame'];
        $translation_data_it = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'it', 'translation' => 'Drammatico'];
        $translation_data_pt = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'pt', 'translation' => 'Drama'];
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_pt);

        // Science-Fiction
        $data = ['slug' => url_title('Science-Fiction', '-', true), 'icon' => 'rocket-takeoff', 'active' => true];
        $language_id = $this->retroRewindMoviesGenresModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'de', 'translation' => 'Science-Fiction'];
        $translation_data_en = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'en', 'translation' => 'Science-Fiction'];
        $translation_data_es = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'es', 'translation' => 'Ciencia Ficción'];
        $translation_data_fr = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'fr', 'translation' => 'Science-Fiction'];
        $translation_data_it = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'it', 'translation' => 'Fantascienza'];
        $translation_data_pt = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'pt', 'translation' => 'Ficção Científica'];
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_pt);

        // Action
        $data = ['slug' => url_title('Action', '-', true), 'icon' => 'lightning-fill', 'active' => true];
        $language_id = $this->retroRewindMoviesGenresModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'de', 'translation' => 'Action'];
        $translation_data_en = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'en', 'translation' => 'Action'];
        $translation_data_es = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'es', 'translation' => 'Acción'];
        $translation_data_fr = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'fr', 'translation' => 'Action'];
        $translation_data_it = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'it', 'translation' => 'Azione'];
        $translation_data_pt = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'pt', 'translation' => 'Ação'];
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_pt);

        // Romance
        $data = ['slug' => url_title('Romance', '-', true), 'icon' => 'heart', 'active' => true];
        $language_id = $this->retroRewindMoviesGenresModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'de', 'translation' => 'Romantik'];
        $translation_data_en = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'en', 'translation' => 'Romance'];
        $translation_data_es = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'es', 'translation' => 'Romance'];
        $translation_data_fr = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'fr', 'translation' => 'Romance'];
        $translation_data_it = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'it', 'translation' => 'Romantico'];
        $translation_data_pt = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'pt', 'translation' => 'Romance'];
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_pt);

        // Xmas
        $data = ['slug' => url_title('Xmas', '-', true), 'icon' => 'gift-fill', 'active' => true];
        $language_id = $this->retroRewindMoviesGenresModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'de', 'translation' => 'Weihnachten'];
        $translation_data_en = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'en', 'translation' => 'Xmas'];
        $translation_data_es = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'es', 'translation' => 'Navidad'];
        $translation_data_fr = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'fr', 'translation' => 'Noël'];
        $translation_data_it = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'it', 'translation' => 'Natale'];
        $translation_data_pt = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'pt', 'translation' => 'Natal'];
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_pt);

        // Fantasy
        $data = ['slug' => url_title('Fantasy', '-', true), 'icon' => 'stars', 'active' => true];
        $language_id = $this->retroRewindMoviesGenresModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'de', 'translation' => 'Fantasy'];
        $translation_data_en = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'en', 'translation' => 'Fantasy'];
        $translation_data_es = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'es', 'translation' => 'Fantasía'];
        $translation_data_fr = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'fr', 'translation' => 'Fantastique'];
        $translation_data_it = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'it', 'translation' => 'Fantasy'];
        $translation_data_pt = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'pt', 'translation' => 'Fantasia'];
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_pt);

        // Kid
        $data = ['slug' => url_title('Kid', '-', true), 'icon' => 'balloon', 'active' => true];
        $language_id = $this->retroRewindMoviesGenresModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'de', 'translation' => 'Kinder'];
        $translation_data_en = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'en', 'translation' => 'Kid'];
        $translation_data_es = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'es', 'translation' => 'Infantil'];
        $translation_data_fr = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'fr', 'translation' => 'Enfants'];
        $translation_data_it = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'it', 'translation' => 'Bambini'];
        $translation_data_pt = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'pt', 'translation' => 'Infantil'];
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_pt);

        // Comedy
        $data = ['slug' => url_title('Comedy', '-', true), 'icon' => 'emoji-laughing', 'active' => true];
        $language_id = $this->retroRewindMoviesGenresModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'de', 'translation' => 'Komödie'];
        $translation_data_en = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'en', 'translation' => 'Comedy'];
        $translation_data_es = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'es', 'translation' => 'Comedia'];
        $translation_data_fr = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'fr', 'translation' => 'Comédie'];
        $translation_data_it = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'it', 'translation' => 'Commedia'];
        $translation_data_pt = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'pt', 'translation' => 'Comédia'];
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_pt);

        // Police
        $data = ['slug' => url_title('Police', '-', true), 'icon' => 'shield-shaded', 'active' => true];
        $language_id = $this->retroRewindMoviesGenresModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'de', 'translation' => 'Polizei'];
        $translation_data_en = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'en', 'translation' => 'Police'];
        $translation_data_es = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'es', 'translation' => 'Policial'];
        $translation_data_fr = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'fr', 'translation' => 'Policier'];
        $translation_data_it = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'it', 'translation' => 'Poliziesco'];
        $translation_data_pt = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'pt', 'translation' => 'Policial'];
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_pt);

        // Western
        $data = ['slug' => url_title('Western', '-', true), 'icon' => 'brightness-alt-high-fill', 'active' => true];
        $language_id = $this->retroRewindMoviesGenresModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'de', 'translation' => 'Western'];
        $translation_data_en = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'en', 'translation' => 'Western'];
        $translation_data_es = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'es', 'translation' => 'Western'];
        $translation_data_fr = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'fr', 'translation' => 'Western'];
        $translation_data_it = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'it', 'translation' => 'Western'];
        $translation_data_pt = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'pt', 'translation' => 'Faroeste'];
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_pt);

        // Adult
        $data = ['slug' => url_title('Adult', '-', true), 'icon' => 'person-badge-fill', 'active' => true];
        $language_id = $this->retroRewindMoviesGenresModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'de', 'translation' => 'Erotik'];
        $translation_data_en = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'en', 'translation' => 'Adult'];
        $translation_data_es = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'es', 'translation' => 'Adultos'];
        $translation_data_fr = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'fr', 'translation' => 'Adultes'];
        $translation_data_it = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'it', 'translation' => 'Adulto'];
        $translation_data_pt = ['parent_id' => $language_id, 'table_name' => 'retro_rewind_movies_genres', 'type' => 'name', 'language' => 'pt', 'translation' => 'Adulto'];
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_pt);
    }
}
