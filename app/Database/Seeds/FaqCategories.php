<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\FaqCategoriesModel;
use App\Models\TranslationsModel;

class FaqCategories extends Seeder
{
    private FaqCategoriesModel $faqCategoriesModel;
    private TranslationsModel $translationsModel;

    public function __construct()
    {
        $this->faqCategoriesModel = model(FaqCategoriesModel::class);
        $this->translationsModel = model(TranslationsModel::class);
    }

    public function run()
    {
        $data = ['slug' => 'general', 'sort' => 1];
        $language_id = $this->faqCategoriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $language_id, 'table_name' => 'faq_categories', 'type' => 'name', 'language' => 'de', 'translation' => 'Allgemein'];
        $translation_data_en = ['parent_id' => $language_id, 'table_name' => 'faq_categories', 'type' => 'name', 'language' => 'en', 'translation' => 'General'];
        $translation_data_es = ['parent_id' => $language_id, 'table_name' => 'faq_categories', 'type' => 'name', 'language' => 'es', 'translation' => 'General'];
        $translation_data_fr = ['parent_id' => $language_id, 'table_name' => 'faq_categories', 'type' => 'name', 'language' => 'fr', 'translation' => 'Général'];
        $translation_data_it = ['parent_id' => $language_id, 'table_name' => 'faq_categories', 'type' => 'name', 'language' => 'it', 'translation' => 'Generale'];
        $translation_data_pt = ['parent_id' => $language_id, 'table_name' => 'faq_categories', 'type' => 'name', 'language' => 'pt', 'translation' => 'Geral'];
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_pt);

        $data = ['slug' => 'account-profile', 'sort' => 2];
        $language_id = $this->faqCategoriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $language_id, 'table_name' => 'faq_categories', 'type' => 'name', 'language' => 'de', 'translation' => 'Konto & Profil'];
        $translation_data_en = ['parent_id' => $language_id, 'table_name' => 'faq_categories', 'type' => 'name', 'language' => 'en', 'translation' => 'Account & Profile'];
        $translation_data_es = ['parent_id' => $language_id, 'table_name' => 'faq_categories', 'type' => 'name', 'language' => 'es', 'translation' => 'Cuenta y Perfil'];
        $translation_data_fr = ['parent_id' => $language_id, 'table_name' => 'faq_categories', 'type' => 'name', 'language' => 'fr', 'translation' => 'Compte et Profil'];
        $translation_data_it = ['parent_id' => $language_id, 'table_name' => 'faq_categories', 'type' => 'name', 'language' => 'it', 'translation' => 'Account e Profilo'];
        $translation_data_pt = ['parent_id' => $language_id, 'table_name' => 'faq_categories', 'type' => 'name', 'language' => 'pt', 'translation' => 'Conta e Perfil'];
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_pt);

        $data = ['slug' => 'membership-subscription', 'sort' => 3];
        $language_id = $this->faqCategoriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $language_id, 'table_name' => 'faq_categories', 'type' => 'name', 'language' => 'de', 'translation' => 'Mitgliedschaft & Abonnement'];
        $translation_data_en = ['parent_id' => $language_id, 'table_name' => 'faq_categories', 'type' => 'name', 'language' => 'en', 'translation' => 'Membership & Subscription'];
        $translation_data_es = ['parent_id' => $language_id, 'table_name' => 'faq_categories', 'type' => 'name', 'language' => 'es', 'translation' => 'Membresía y Suscripción'];
        $translation_data_fr = ['parent_id' => $language_id, 'table_name' => 'faq_categories', 'type' => 'name', 'language' => 'fr', 'translation' => 'Adhésion et Abonnement'];
        $translation_data_it = ['parent_id' => $language_id, 'table_name' => 'faq_categories', 'type' => 'name', 'language' => 'it', 'translation' => 'Membership e Abbonamento'];
        $translation_data_pt = ['parent_id' => $language_id, 'table_name' => 'faq_categories', 'type' => 'name', 'language' => 'pt', 'translation' => 'Associação e Assinatura'];
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_pt);

        $data = ['slug' => 'store-inventory', 'sort' => 4];
        $language_id = $this->faqCategoriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $language_id, 'table_name' => 'faq_categories', 'type' => 'name', 'language' => 'de', 'translation' => 'Shop & Inventar'];
        $translation_data_en = ['parent_id' => $language_id, 'table_name' => 'faq_categories', 'type' => 'name', 'language' => 'en', 'translation' => 'Store & Inventory'];
        $translation_data_es = ['parent_id' => $language_id, 'table_name' => 'faq_categories', 'type' => 'name', 'language' => 'es', 'translation' => 'Tienda e Inventario'];
        $translation_data_fr = ['parent_id' => $language_id, 'table_name' => 'faq_categories', 'type' => 'name', 'language' => 'fr', 'translation' => 'Boutique et Inventaire'];
        $translation_data_it = ['parent_id' => $language_id, 'table_name' => 'faq_categories', 'type' => 'name', 'language' => 'it', 'translation' => 'Negozio e Inventario'];
        $translation_data_pt = ['parent_id' => $language_id, 'table_name' => 'faq_categories', 'type' => 'name', 'language' => 'pt', 'translation' => 'Loja e Inventário'];
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_pt);

        $data = ['slug' => 'movies-database', 'sort' => 5];
        $language_id = $this->faqCategoriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $language_id, 'table_name' => 'faq_categories', 'type' => 'name', 'language' => 'de', 'translation' => 'Filme & Datenbank'];
        $translation_data_en = ['parent_id' => $language_id, 'table_name' => 'faq_categories', 'type' => 'name', 'language' => 'en', 'translation' => 'Movies & Database'];
        $translation_data_es = ['parent_id' => $language_id, 'table_name' => 'faq_categories', 'type' => 'name', 'language' => 'es', 'translation' => 'Películas y Base de Datos'];
        $translation_data_fr = ['parent_id' => $language_id, 'table_name' => 'faq_categories', 'type' => 'name', 'language' => 'fr', 'translation' => 'Films et Base de Données'];
        $translation_data_it = ['parent_id' => $language_id, 'table_name' => 'faq_categories', 'type' => 'name', 'language' => 'it', 'translation' => 'Film e Database'];
        $translation_data_pt = ['parent_id' => $language_id, 'table_name' => 'faq_categories', 'type' => 'name', 'language' => 'pt', 'translation' => 'Filmes e Banco de Dados'];
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_pt);
    }
}
