<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\CountriesModel;
use App\Models\TranslationsModel;

class Countries_W extends Seeder
{
    private CountriesModel $countriesModel;
    private TranslationsModel $translationsModel;

    public function __construct()
    {
        $this->countriesModel = model(CountriesModel::class);
        $this->translationsModel = model(TranslationsModel::class);
    }

    public function run()
    {
        ## W ##
        // wa
        $data = ['tag' => 'wa', 'status' => false, 'flag' => 'wa.webp'];
        $country_id = $this->countriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'de', 'translation' => 'Wales'];
        $translation_data_en = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'en', 'translation' => 'Wales'];
        $translation_data_es = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'es', 'translation' => 'Gales'];
        $translation_data_fr = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'fr', 'translation' => 'Pays de Galles'];
        $translation_data_it = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'it', 'translation' => 'Galles'];
        $translation_data_pt = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'pt', 'translation' => 'País de Gales'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);

        // ws
        $data = ['tag' => 'ws', 'status' => false, 'flag' => 'ws.webp'];
        $country_id = $this->countriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'de', 'translation' => 'Samoa'];
        $translation_data_en = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'en', 'translation' => 'Samoa'];
        $translation_data_es = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'es', 'translation' => 'Samoa'];
        $translation_data_fr = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'fr', 'translation' => 'Samoa'];
        $translation_data_it = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'it', 'translation' => 'Samoa'];
        $translation_data_pt = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'pt', 'translation' => 'Samoa'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);
    }
}
