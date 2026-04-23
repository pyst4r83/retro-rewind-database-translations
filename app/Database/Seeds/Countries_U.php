<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\CountriesModel;
use App\Models\TranslationsModel;

class Countries_U extends Seeder
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
        ## U ## 
        // ua
        $data = ['tag' => 'ua', 'status' => false, 'flag' => 'ua.webp'];
        $country_id = $this->countriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'de', 'translation' => 'Ukraine'];
        $translation_data_en = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'en', 'translation' => 'Ukraine'];
        $translation_data_es = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'es', 'translation' => 'Ucrania'];
        $translation_data_fr = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'fr', 'translation' => 'Ukraine'];
        $translation_data_it = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'it', 'translation' => 'Ucraina'];
        $translation_data_pt = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'pt', 'translation' => 'Ucrânia'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);

        // ug
        $data = ['tag' => 'ug', 'status' => false, 'flag' => 'ug.webp'];
        $country_id = $this->countriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'de', 'translation' => 'Uganda'];
        $translation_data_en = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'en', 'translation' => 'Uganda'];
        $translation_data_es = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'es', 'translation' => 'Uganda'];
        $translation_data_fr = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'fr', 'translation' => 'Ouganda'];
        $translation_data_it = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'it', 'translation' => 'Uganda'];
        $translation_data_pt = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'pt', 'translation' => 'Uganda'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);

        // uk
        $data = ['tag' => 'uk', 'status' => false, 'flag' => 'uk.webp'];
        $country_id = $this->countriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'de', 'translation' => 'Vereinigtes Königreich'];
        $translation_data_en = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'en', 'translation' => 'United Kingdom'];
        $translation_data_es = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'es', 'translation' => 'Reino Unido'];
        $translation_data_fr = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'fr', 'translation' => 'Royaume-Uni'];
        $translation_data_it = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'it', 'translation' => 'Regno Unito'];
        $translation_data_pt = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'pt', 'translation' => 'Reino Unido'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);

        // un
        $data = ['tag' => 'un', 'status' => false, 'flag' => 'un.webp'];
        $country_id = $this->countriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'de', 'translation' => 'Vereinte Nationen'];
        $translation_data_en = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'en', 'translation' => 'United Nations'];
        $translation_data_es = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'es', 'translation' => 'Naciones Unidas'];
        $translation_data_fr = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'fr', 'translation' => 'Nations Unies'];
        $translation_data_it = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'it', 'translation' => 'Nazioni Unite'];
        $translation_data_pt = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'pt', 'translation' => 'Nações Unidas'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);

        // us
        $data = ['tag' => 'us', 'status' => false, 'flag' => 'us.webp'];
        $country_id = $this->countriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'de', 'translation' => 'Vereinigte Staaten'];
        $translation_data_en = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'en', 'translation' => 'United States'];
        $translation_data_es = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'es', 'translation' => 'Estados Unidos'];
        $translation_data_fr = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'fr', 'translation' => 'États-Unis'];
        $translation_data_it = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'it', 'translation' => 'Stati Uniti'];
        $translation_data_pt = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'pt', 'translation' => 'Estados Unidos'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);

        // uy
        $data = ['tag' => 'uy', 'status' => false, 'flag' => 'uy.webp'];
        $country_id = $this->countriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'de', 'translation' => 'Uruguay'];
        $translation_data_en = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'en', 'translation' => 'Uruguay'];
        $translation_data_es = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'es', 'translation' => 'Uruguay'];
        $translation_data_fr = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'fr', 'translation' => 'Uruguay'];
        $translation_data_it = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'it', 'translation' => 'Uruguay'];
        $translation_data_pt = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'pt', 'translation' => 'Uruguai'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);

        // uz
        $data = ['tag' => 'uz', 'status' => false, 'flag' => 'uz.webp'];
        $country_id = $this->countriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'de', 'translation' => 'Usbekistan'];
        $translation_data_en = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'en', 'translation' => 'Uzbekistan'];
        $translation_data_es = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'es', 'translation' => 'Uzbekistán'];
        $translation_data_fr = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'fr', 'translation' => 'Ouzbékistan'];
        $translation_data_it = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'it', 'translation' => 'Uzbekistan'];
        $translation_data_pt = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'pt', 'translation' => 'Uzbequistão'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);
    }
}
