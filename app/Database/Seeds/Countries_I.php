<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\CountriesModel;
use App\Models\TranslationsModel;

class Countries_I extends Seeder
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
        ## I ##
        // ic
        $data = ['tag' => 'ic', 'status' => false, 'flag' => 'ic.webp'];
        $country_id = $this->countriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'de', 'translation' => 'Kanarische Inseln'];
        $translation_data_en = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'en', 'translation' => 'Canary Islands'];
        $translation_data_es = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'es', 'translation' => 'Islas Canarias'];
        $translation_data_fr = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'fr', 'translation' => 'Îles Canaries'];
        $translation_data_it = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'it', 'translation' => 'Isole Canarie'];
        $translation_data_pt = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'pt', 'translation' => 'Ilhas Canárias'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);

        // id
        $data = ['tag' => 'id', 'status' => false, 'flag' => 'id.webp'];
        $country_id = $this->countriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'de', 'translation' => 'Indonesien'];
        $translation_data_en = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'en', 'translation' => 'Indonesia'];
        $translation_data_es = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'es', 'translation' => 'Indonesia'];
        $translation_data_fr = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'fr', 'translation' => 'Indonésie'];
        $translation_data_it = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'it', 'translation' => 'Indonesia'];
        $translation_data_pt = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'pt', 'translation' => 'Indonésia'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);

        // ie
        $data = ['tag' => 'ie', 'status' => false, 'flag' => 'ie.webp'];
        $country_id = $this->countriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'de', 'translation' => 'Irland'];
        $translation_data_en = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'en', 'translation' => 'Ireland'];
        $translation_data_es = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'es', 'translation' => 'Irlanda'];
        $translation_data_fr = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'fr', 'translation' => 'Irlande'];
        $translation_data_it = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'it', 'translation' => 'Irlanda'];
        $translation_data_pt = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'pt', 'translation' => 'Irlanda'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);

        // il
        $data = ['tag' => 'il', 'status' => false, 'flag' => 'il.webp'];
        $country_id = $this->countriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'de', 'translation' => 'Israel'];
        $translation_data_en = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'en', 'translation' => 'Israel'];
        $translation_data_es = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'es', 'translation' => 'Israel'];
        $translation_data_fr = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'fr', 'translation' => 'Israël'];
        $translation_data_it = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'it', 'translation' => 'Israele'];
        $translation_data_pt = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'pt', 'translation' => 'Israel'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);

        // im
        $data = ['tag' => 'im', 'status' => false, 'flag' => 'im.webp'];
        $country_id = $this->countriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'de', 'translation' => 'Isle of Man'];
        $translation_data_en = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'en', 'translation' => 'Isle of Man'];
        $translation_data_es = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'es', 'translation' => 'Isla de Man'];
        $translation_data_fr = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'fr', 'translation' => 'Île de Man'];
        $translation_data_it = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'it', 'translation' => 'Isola di Man'];
        $translation_data_pt = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'pt', 'translation' => 'Ilha de Man'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);

        // in
        $data = ['tag' => 'in', 'status' => false, 'flag' => 'in.webp'];
        $country_id = $this->countriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'de', 'translation' => 'Indien'];
        $translation_data_en = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'en', 'translation' => 'India'];
        $translation_data_es = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'es', 'translation' => 'India'];
        $translation_data_fr = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'fr', 'translation' => 'Inde'];
        $translation_data_it = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'it', 'translation' => 'India'];
        $translation_data_pt = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'pt', 'translation' => 'Índia'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);

        // io
        $data = ['tag' => 'io', 'status' => false, 'flag' => 'io.webp'];
        $country_id = $this->countriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'de', 'translation' => 'Britisches Territorium im Indischen Ozean'];
        $translation_data_en = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'en', 'translation' => 'British Indian Ocean Territory'];
        $translation_data_es = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'es', 'translation' => 'Territorio Británico del Océano Índico'];
        $translation_data_fr = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'fr', 'translation' => 'Territoire britannique de l\'océan Indien'];
        $translation_data_it = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'it', 'translation' => 'Territorio britannico dell\'Oceano Indiano'];
        $translation_data_pt = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'pt', 'translation' => 'Território Britânico do Oceano Índico'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);

        // iq
        $data = ['tag' => 'iq', 'status' => false, 'flag' => 'iq.webp'];
        $country_id = $this->countriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'de', 'translation' => 'Irak'];
        $translation_data_en = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'en', 'translation' => 'Iraq'];
        $translation_data_es = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'es', 'translation' => 'Irak'];
        $translation_data_fr = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'fr', 'translation' => 'Irak'];
        $translation_data_it = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'it', 'translation' => 'Iraq'];
        $translation_data_pt = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'pt', 'translation' => 'Iraque'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);

        // ir
        $data = ['tag' => 'ir', 'status' => false, 'flag' => 'ir.webp'];
        $country_id = $this->countriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'de', 'translation' => 'Iran'];
        $translation_data_en = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'en', 'translation' => 'Iran'];
        $translation_data_es = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'es', 'translation' => 'Irán'];
        $translation_data_fr = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'fr', 'translation' => 'Iran'];
        $translation_data_it = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'it', 'translation' => 'Iran'];
        $translation_data_pt = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'pt', 'translation' => 'Irã'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);

        // is
        $data = ['tag' => 'is', 'status' => false, 'flag' => 'is.webp'];
        $country_id = $this->countriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'de', 'translation' => 'Island'];
        $translation_data_en = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'en', 'translation' => 'Iceland'];
        $translation_data_es = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'es', 'translation' => 'Islandia'];
        $translation_data_fr = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'fr', 'translation' => 'Islande'];
        $translation_data_it = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'it', 'translation' => 'Islanda'];
        $translation_data_pt = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'pt', 'translation' => 'Islândia'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);

        // it
        $data = ['tag' => 'it', 'status' => false, 'flag' => 'it.webp'];
        $country_id = $this->countriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'de', 'translation' => 'Italien'];
        $translation_data_en = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'en', 'translation' => 'Italy'];
        $translation_data_es = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'es', 'translation' => 'Italia'];
        $translation_data_fr = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'fr', 'translation' => 'Italie'];
        $translation_data_it = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'it', 'translation' => 'Italia'];
        $translation_data_pt = ['parent_id' => $country_id, 'table_name' => 'countries', 'type' => 'name', 'language' => 'pt', 'translation' => 'Itália'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);
    }
}
