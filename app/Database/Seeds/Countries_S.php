<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\CountriesModel;
use App\Models\TranslationsModel;

class Countries_S extends Seeder
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
        ## S ##
        // sa
        $data = ['tag' => 'sa', 'status' => false, 'flag' => 'sa.webp'];
        $country_id = $this->countriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'de', 'translation' => 'Saudi-Arabien'];
        $translation_data_en = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'en', 'translation' => 'Saudi Arabia'];
        $translation_data_es = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'es', 'translation' => 'Arabia Saudita'];
        $translation_data_fr = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'fr', 'translation' => 'Arabie saoudite'];
        $translation_data_it = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'it', 'translation' => 'Arabia Saudita'];
        $translation_data_pt = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'pt', 'translation' => 'Arábia Saudita'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);

        // sb
        $data = ['tag' => 'sb', 'status' => false, 'flag' => 'sb.webp'];
        $country_id = $this->countriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'de', 'translation' => 'Salomonen'];
        $translation_data_en = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'en', 'translation' => 'Solomon Islands'];
        $translation_data_es = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'es', 'translation' => 'Islas Salomón'];
        $translation_data_fr = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'fr', 'translation' => 'Îles Salomon'];
        $translation_data_it = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'it', 'translation' => 'Isole Salomone'];
        $translation_data_pt = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'pt', 'translation' => 'Ilhas Salomão'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);

        // sc
        $data = ['tag' => 'sc', 'status' => false, 'flag' => 'sc.webp'];
        $country_id = $this->countriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'de', 'translation' => 'Schottland'];
        $translation_data_en = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'en', 'translation' => 'Scotland'];
        $translation_data_es = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'es', 'translation' => 'Escocia'];
        $translation_data_fr = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'fr', 'translation' => 'Écosse'];
        $translation_data_it = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'it', 'translation' => 'Scozia'];
        $translation_data_pt = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'pt', 'translation' => 'Escócia'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);

        // sd
        $data = ['tag' => 'sd', 'status' => false, 'flag' => 'sd.webp'];
        $country_id = $this->countriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'de', 'translation' => 'Sudan'];
        $translation_data_en = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'en', 'translation' => 'Sudan'];
        $translation_data_es = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'es', 'translation' => 'Sudán'];
        $translation_data_fr = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'fr', 'translation' => 'Soudan'];
        $translation_data_it = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'it', 'translation' => 'Sudan'];
        $translation_data_pt = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'pt', 'translation' => 'Sudão'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);

        // se
        $data = ['tag' => 'se', 'status' => false, 'flag' => 'se.webp'];
        $country_id = $this->countriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'de', 'translation' => 'Seychellen'];
        $translation_data_en = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'en', 'translation' => 'Seychelles'];
        $translation_data_es = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'es', 'translation' => 'Seychelles'];
        $translation_data_fr = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'fr', 'translation' => 'Seychelles'];
        $translation_data_it = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'it', 'translation' => 'Seychelles'];
        $translation_data_pt = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'pt', 'translation' => 'Seicheles'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);

        // sg
        $data = ['tag' => 'sg', 'status' => false, 'flag' => 'sg.webp'];
        $country_id = $this->countriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'de', 'translation' => 'Singapur'];
        $translation_data_en = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'en', 'translation' => 'Singapore'];
        $translation_data_es = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'es', 'translation' => 'Singapur'];
        $translation_data_fr = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'fr', 'translation' => 'Singapour'];
        $translation_data_it = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'it', 'translation' => 'Singapore'];
        $translation_data_pt = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'pt', 'translation' => 'Singapura'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);

        // si
        $data = ['tag' => 'si', 'status' => false, 'flag' => 'si.webp'];
        $country_id = $this->countriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'de', 'translation' => 'Slowenien'];
        $translation_data_en = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'en', 'translation' => 'Slovenia'];
        $translation_data_es = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'es', 'translation' => 'Eslovenia'];
        $translation_data_fr = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'fr', 'translation' => 'Slovénie'];
        $translation_data_it = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'it', 'translation' => 'Slovenia'];
        $translation_data_pt = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'pt', 'translation' => 'Eslovênia'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);

        // sk
        $data = ['tag' => 'sk', 'status' => false, 'flag' => 'sk.webp'];
        $country_id = $this->countriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'de', 'translation' => 'Slowakei'];
        $translation_data_en = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'en', 'translation' => 'Slovakia'];
        $translation_data_es = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'es', 'translation' => 'Eslovaquia'];
        $translation_data_fr = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'fr', 'translation' => 'Slovaquie'];
        $translation_data_it = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'it', 'translation' => 'Slovacchia'];
        $translation_data_pt = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'pt', 'translation' => 'Eslováquia'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);

        // sl
        $data = ['tag' => 'sl', 'status' => false, 'flag' => 'sl.webp'];
        $country_id = $this->countriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'de', 'translation' => 'Sierra Leone'];
        $translation_data_en = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'en', 'translation' => 'Sierra Leone'];
        $translation_data_es = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'es', 'translation' => 'Sierra Leona'];
        $translation_data_fr = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'fr', 'translation' => 'Sierra Leone'];
        $translation_data_it = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'it', 'translation' => 'Sierra Leone'];
        $translation_data_pt = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'pt', 'translation' => 'Serra Leoa'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);

        // sm
        $data = ['tag' => 'sm', 'status' => false, 'flag' => 'sm.webp'];
        $country_id = $this->countriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'de', 'translation' => 'San Marino'];
        $translation_data_en = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'en', 'translation' => 'San Marino'];
        $translation_data_es = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'es', 'translation' => 'San Marino'];
        $translation_data_fr = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'fr', 'translation' => 'Saint-Marin'];
        $translation_data_it = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'it', 'translation' => 'San Marino'];
        $translation_data_pt = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'pt', 'translation' => 'São Marinho'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);

        // sn
        $data = ['tag' => 'sn', 'status' => false, 'flag' => 'sn.webp'];
        $country_id = $this->countriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'de', 'translation' => 'Senegal'];
        $translation_data_en = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'en', 'translation' => 'Senegal'];
        $translation_data_es = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'es', 'translation' => 'Senegal'];
        $translation_data_fr = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'fr', 'translation' => 'Sénégal'];
        $translation_data_it = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'it', 'translation' => 'Senegal'];
        $translation_data_pt = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'pt', 'translation' => 'Senegal'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);

        // so
        $data = ['tag' => 'so', 'status' => false, 'flag' => 'so.webp'];
        $country_id = $this->countriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'de', 'translation' => 'Somalia'];
        $translation_data_en = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'en', 'translation' => 'Somalia'];
        $translation_data_es = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'es', 'translation' => 'Somalia'];
        $translation_data_fr = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'fr', 'translation' => 'Somalie'];
        $translation_data_it = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'it', 'translation' => 'Somalia'];
        $translation_data_pt = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'pt', 'translation' => 'Somália'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);

        // sr
        $data = ['tag' => 'sr', 'status' => false, 'flag' => 'sr.webp'];
        $country_id = $this->countriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'de', 'translation' => 'Suriname'];
        $translation_data_en = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'en', 'translation' => 'Suriname'];
        $translation_data_es = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'es', 'translation' => 'Surinam'];
        $translation_data_fr = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'fr', 'translation' => 'Suriname'];
        $translation_data_it = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'it', 'translation' => 'Suriname'];
        $translation_data_pt = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'pt', 'translation' => 'Suriname'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);

        // ss
        $data = ['tag' => 'ss', 'status' => false, 'flag' => 'ss.webp'];
        $country_id = $this->countriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'de', 'translation' => 'Südsudan'];
        $translation_data_en = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'en', 'translation' => 'South Sudan'];
        $translation_data_es = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'es', 'translation' => 'Sudán del Sur'];
        $translation_data_fr = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'fr', 'translation' => 'Soudan du Sud'];
        $translation_data_it = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'it', 'translation' => 'Sudan del Sud'];
        $translation_data_pt = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'pt', 'translation' => 'Sudão do Sul'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);

        // st
        $data = ['tag' => 'st', 'status' => false, 'flag' => 'st.webp'];
        $country_id = $this->countriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'de', 'translation' => 'São Tomé und Príncipe'];
        $translation_data_en = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'en', 'translation' => 'São Tomé and Príncipe'];
        $translation_data_es = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'es', 'translation' => 'Santo Tomé y Príncipe'];
        $translation_data_fr = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'fr', 'translation' => 'Sao Tomé-et-Principe'];
        $translation_data_it = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'it', 'translation' => 'São Tomé e Príncipe'];
        $translation_data_pt = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'pt', 'translation' => 'São Tomé e Príncipe'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);

        // sv
        $data = ['tag' => 'sv', 'status' => false, 'flag' => 'sv.webp'];
        $country_id = $this->countriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'de', 'translation' => 'El Salvador'];
        $translation_data_en = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'en', 'translation' => 'El Salvador'];
        $translation_data_es = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'es', 'translation' => 'El Salvador'];
        $translation_data_fr = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'fr', 'translation' => 'Salvador'];
        $translation_data_it = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'it', 'translation' => 'El Salvador'];
        $translation_data_pt = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'pt', 'translation' => 'El Salvador'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);

        // sw
        $data = ['tag' => 'sw', 'status' => false, 'flag' => 'sw.webp'];
        $country_id = $this->countriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'de', 'translation' => 'Schweden'];
        $translation_data_en = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'en', 'translation' => 'Sweden'];
        $translation_data_es = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'es', 'translation' => 'Suecia'];
        $translation_data_fr = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'fr', 'translation' => 'Suède'];
        $translation_data_it = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'it', 'translation' => 'Svezia'];
        $translation_data_pt = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'pt', 'translation' => 'Suécia'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);

        // sx
        $data = ['tag' => 'sx', 'status' => false, 'flag' => 'sx.webp'];
        $country_id = $this->countriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'de', 'translation' => 'Sint Maarten'];
        $translation_data_en = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'en', 'translation' => 'Sint Maarten'];
        $translation_data_es = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'es', 'translation' => 'Sint Maarten'];
        $translation_data_fr = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'fr', 'translation' => 'Saint-Martin'];
        $translation_data_it = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'it', 'translation' => 'Sint Maarten'];
        $translation_data_pt = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'pt', 'translation' => 'São Martinho'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);

        // sy
        $data = ['tag' => 'sy', 'status' => false, 'flag' => 'sy.webp'];
        $country_id = $this->countriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'de', 'translation' => 'Syrien'];
        $translation_data_en = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'en', 'translation' => 'Syria'];
        $translation_data_es = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'es', 'translation' => 'Siria'];
        $translation_data_fr = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'fr', 'translation' => 'Syrie'];
        $translation_data_it = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'it', 'translation' => 'Siria'];
        $translation_data_pt = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'pt', 'translation' => 'Síria'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);

        // sz
        $data = ['tag' => 'sz', 'status' => false, 'flag' => 'sz.webp'];
        $country_id = $this->countriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'de', 'translation' => 'Eswatini'];
        $translation_data_en = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'en', 'translation' => 'Eswatini'];
        $translation_data_es = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'es', 'translation' => 'Esuatini'];
        $translation_data_fr = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'fr', 'translation' => 'Eswatini'];
        $translation_data_it = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'it', 'translation' => 'Eswatini'];
        $translation_data_pt = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'pt', 'translation' => 'Essuatíni'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);
    }
}
