<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\LanguagesModel;
use App\Models\TranslationsModel;

class Languages extends Seeder
{
    private LanguagesModel $languagesModel;
    private TranslationsModel $translationsModel;

    public function __construct()
    {
        $this->languagesModel = model(LanguagesModel::class);
        $this->translationsModel = model(TranslationsModel::class);
    }

    public function run()
    {
        $data = ['abbreviation' => 'de', 'flag' => 'de', 'active' => true, 'default_language' => true];
        $language_id = $this->languagesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $language_id, 'table_name' => 'languages', 'type' => 'name', 'language' => 'de', 'translation' => 'Deutsch'];
        $translation_data_en = ['parent_id' => $language_id, 'table_name' => 'languages', 'type' => 'name', 'language' => 'en', 'translation' => 'German'];
        $translation_data_es = ['parent_id' => $language_id, 'table_name' => 'languages', 'type' => 'name', 'language' => 'es', 'translation' => 'Alemán'];
        $translation_data_fr = ['parent_id' => $language_id, 'table_name' => 'languages', 'type' => 'name', 'language' => 'fr', 'translation' => 'Allemand'];
        $translation_data_it = ['parent_id' => $language_id, 'table_name' => 'languages', 'type' => 'name', 'language' => 'it', 'translation' => 'Tedesco'];
        $translation_data_pt = ['parent_id' => $language_id, 'table_name' => 'languages', 'type' => 'name', 'language' => 'pt', 'translation' => 'Alemão'];
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_pt);

        $data = ['abbreviation' => 'en', 'flag' => 'uk', 'active' => true, 'default_language' => true];
        $language_id = $this->languagesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $language_id, 'table_name' => 'languages', 'type' => 'name', 'language' => 'de', 'translation' => 'Englisch'];
        $translation_data_en = ['parent_id' => $language_id, 'table_name' => 'languages', 'type' => 'name', 'language' => 'en', 'translation' => 'English'];
        $translation_data_es = ['parent_id' => $language_id, 'table_name' => 'languages', 'type' => 'name', 'language' => 'es', 'translation' => 'Inglés'];
        $translation_data_fr = ['parent_id' => $language_id, 'table_name' => 'languages', 'type' => 'name', 'language' => 'fr', 'translation' => 'Anglais'];
        $translation_data_it = ['parent_id' => $language_id, 'table_name' => 'languages', 'type' => 'name', 'language' => 'it', 'translation' => 'Inglese'];
        $translation_data_pt = ['parent_id' => $language_id, 'table_name' => 'languages', 'type' => 'name', 'language' => 'pt', 'translation' => 'Inglês'];
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_pt);

        $data = ['abbreviation' => 'es', 'flag' => 'es', 'active' => true, 'default_language' => false];
        $language_id = $this->languagesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $language_id, 'table_name' => 'languages', 'type' => 'name', 'language' => 'de', 'translation' => 'Spanisch'];
        $translation_data_en = ['parent_id' => $language_id, 'table_name' => 'languages', 'type' => 'name', 'language' => 'en', 'translation' => 'Spanish'];
        $translation_data_es = ['parent_id' => $language_id, 'table_name' => 'languages', 'type' => 'name', 'language' => 'es', 'translation' => 'Español'];
        $translation_data_fr = ['parent_id' => $language_id, 'table_name' => 'languages', 'type' => 'name', 'language' => 'fr', 'translation' => 'Espagnol'];
        $translation_data_it = ['parent_id' => $language_id, 'table_name' => 'languages', 'type' => 'name', 'language' => 'it', 'translation' => 'Spagnolo'];
        $translation_data_pt = ['parent_id' => $language_id, 'table_name' => 'languages', 'type' => 'name', 'language' => 'pt', 'translation' => 'Espanhol'];
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_pt);

        $data = ['abbreviation' => 'fr', 'flag' => 'fr', 'active' => true, 'default_language' => false];
        $language_id = $this->languagesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $language_id, 'table_name' => 'languages', 'type' => 'name', 'language' => 'de', 'translation' => 'Französisch'];
        $translation_data_en = ['parent_id' => $language_id, 'table_name' => 'languages', 'type' => 'name', 'language' => 'en', 'translation' => 'French'];
        $translation_data_es = ['parent_id' => $language_id, 'table_name' => 'languages', 'type' => 'name', 'language' => 'es', 'translation' => 'Francés'];
        $translation_data_fr = ['parent_id' => $language_id, 'table_name' => 'languages', 'type' => 'name', 'language' => 'fr', 'translation' => 'Français'];
        $translation_data_it = ['parent_id' => $language_id, 'table_name' => 'languages', 'type' => 'name', 'language' => 'it', 'translation' => 'Francese'];
        $translation_data_pt = ['parent_id' => $language_id, 'table_name' => 'languages', 'type' => 'name', 'language' => 'pt', 'translation' => 'Francês'];
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_pt);

        $data = ['abbreviation' => 'it', 'flag' => 'it', 'active' => true, 'default_language' => false];
        $language_id = $this->languagesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $language_id, 'table_name' => 'languages', 'type' => 'name', 'language' => 'de', 'translation' => 'Italienisch'];
        $translation_data_en = ['parent_id' => $language_id, 'table_name' => 'languages', 'type' => 'name', 'language' => 'en', 'translation' => 'Italian'];
        $translation_data_es = ['parent_id' => $language_id, 'table_name' => 'languages', 'type' => 'name', 'language' => 'es', 'translation' => 'Italiano'];
        $translation_data_fr = ['parent_id' => $language_id, 'table_name' => 'languages', 'type' => 'name', 'language' => 'fr', 'translation' => 'Italien'];
        $translation_data_it = ['parent_id' => $language_id, 'table_name' => 'languages', 'type' => 'name', 'language' => 'it', 'translation' => 'Italiano'];
        $translation_data_pt = ['parent_id' => $language_id, 'table_name' => 'languages', 'type' => 'name', 'language' => 'pt', 'translation' => 'Italiano'];
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_pt);

        $data = ['abbreviation' => 'pt', 'flag' => 'br', 'active' => true, 'default_language' => false];
        $language_id = $this->languagesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $language_id, 'table_name' => 'languages', 'type' => 'name', 'language' => 'de', 'translation' => 'Portugiesisch'];
        $translation_data_en = ['parent_id' => $language_id, 'table_name' => 'languages', 'type' => 'name', 'language' => 'en', 'translation' => 'Portuguese'];
        $translation_data_es = ['parent_id' => $language_id, 'table_name' => 'languages', 'type' => 'name', 'language' => 'es', 'translation' => 'Portugués'];
        $translation_data_fr = ['parent_id' => $language_id, 'table_name' => 'languages', 'type' => 'name', 'language' => 'fr', 'translation' => 'Portugais'];
        $translation_data_it = ['parent_id' => $language_id, 'table_name' => 'languages', 'type' => 'name', 'language' => 'it', 'translation' => 'Portoghese'];
        $translation_data_pt = ['parent_id' => $language_id, 'table_name' => 'languages', 'type' => 'name', 'language' => 'pt', 'translation' => 'Português'];
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_pt);
    }
}
