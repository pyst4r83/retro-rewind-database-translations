<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\CountriesModel;
use App\Models\TranslationsModel;

class Countries_J extends Seeder
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
        ## J ##
        // je
        $data = ['tag' => 'je', 'status' => false, 'flag' => 'je.webp'];
        $country_id = $this->countriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'de', 'translation' => 'Jersey'];
        $translation_data_en = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'en', 'translation' => 'Jersey'];
        $translation_data_es = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'es', 'translation' => 'Jersey'];
        $translation_data_fr = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'fr', 'translation' => 'Jersey'];
        $translation_data_it = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'it', 'translation' => 'Jersey'];
        $translation_data_pt = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'pt', 'translation' => 'Jersey'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);

        // jm
        $data = ['tag' => 'jm', 'status' => false, 'flag' => 'jm.webp'];
        $country_id = $this->countriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'de', 'translation' => 'Jamaika'];
        $translation_data_en = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'en', 'translation' => 'Jamaica'];
        $translation_data_es = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'es', 'translation' => 'Jamaica'];
        $translation_data_fr = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'fr', 'translation' => 'Jamaïque'];
        $translation_data_it = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'it', 'translation' => 'Giamaica'];
        $translation_data_pt = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'pt', 'translation' => 'Jamaica'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);

        // jo
        $data = ['tag' => 'jo', 'status' => false, 'flag' => 'jo.webp'];
        $country_id = $this->countriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'de', 'translation' => 'Jordanien'];
        $translation_data_en = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'en', 'translation' => 'Jordan'];
        $translation_data_es = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'es', 'translation' => 'Jordania'];
        $translation_data_fr = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'fr', 'translation' => 'Jordanie'];
        $translation_data_it = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'it', 'translation' => 'Giordania'];
        $translation_data_pt = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'pt', 'translation' => 'Jordânia'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);

        // jp
        $data = ['tag' => 'jp', 'status' => false, 'flag' => 'jp.webp'];
        $country_id = $this->countriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'de', 'translation' => 'Japan'];
        $translation_data_en = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'en', 'translation' => 'Japan'];
        $translation_data_es = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'es', 'translation' => 'Japón'];
        $translation_data_fr = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'fr', 'translation' => 'Japon'];
        $translation_data_it = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'it', 'translation' => 'Giappone'];
        $translation_data_pt = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'pt', 'translation' => 'Japão'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);
    }
}
