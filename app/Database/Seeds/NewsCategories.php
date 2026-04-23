<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\NewsCategoriesModel;
use App\Models\TranslationsModel;

class NewsCategories extends Seeder
{
    private NewsCategoriesModel $newsCategoriesModel;
    private TranslationsModel $translationsModel;

    public function __construct()
    {
        $this->newsCategoriesModel = model(NewsCategoriesModel::class);
        $this->translationsModel = model(TranslationsModel::class);
    }

    public function run()
    {
        $data = ['slug' => 'steam-news'];
        $better_mart_articles_category_id = $this->newsCategoriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $better_mart_articles_category_id, 'table_name' => 'news_categories', 'type' => 'name', 'language' => 'de', 'translation' => 'Steam Neuigkeiten'];
        $translation_data_en = ['parent_id' => $better_mart_articles_category_id, 'table_name' => 'news_categories', 'type' => 'name', 'language' => 'en', 'translation' => 'Steam News'];
        $translation_data_es = ['parent_id' => $better_mart_articles_category_id, 'table_name' => 'news_categories', 'type' => 'name', 'language' => 'es', 'translation' => 'Noticias de Steam'];
        $translation_data_fr = ['parent_id' => $better_mart_articles_category_id, 'table_name' => 'news_categories', 'type' => 'name', 'language' => 'fr', 'translation' => 'Actualités Steam'];
        $translation_data_it = ['parent_id' => $better_mart_articles_category_id, 'table_name' => 'news_categories', 'type' => 'name', 'language' => 'it', 'translation' => 'Notizie su Steam'];
        $translation_data_pt = ['parent_id' => $better_mart_articles_category_id, 'table_name' => 'news_categories', 'type' => 'name', 'language' => 'pt', 'translation' => 'Notícias do Steam'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);

        $data = ['slug' => 'database-news'];
        $better_mart_articles_category_id = $this->newsCategoriesModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $better_mart_articles_category_id, 'table_name' => 'news_categories', 'type' => 'name', 'language' => 'de', 'translation' => 'Datenbank Neuigkeiten'];
        $translation_data_en = ['parent_id' => $better_mart_articles_category_id, 'table_name' => 'news_categories', 'type' => 'name', 'language' => 'en', 'translation' => 'Database News'];
        $translation_data_es = ['parent_id' => $better_mart_articles_category_id, 'table_name' => 'news_categories', 'type' => 'name', 'language' => 'es', 'translation' => 'Noticias sobre bases de datos'];
        $translation_data_fr = ['parent_id' => $better_mart_articles_category_id, 'table_name' => 'news_categories', 'type' => 'name', 'language' => 'fr', 'translation' => 'Actualités des bases de données'];
        $translation_data_it = ['parent_id' => $better_mart_articles_category_id, 'table_name' => 'news_categories', 'type' => 'name', 'language' => 'it', 'translation' => 'Notizie dal database'];
        $translation_data_pt = ['parent_id' => $better_mart_articles_category_id, 'table_name' => 'news_categories', 'type' => 'name', 'language' => 'pt', 'translation' => 'Notícias do banco de dados'];
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->insert($translation_data_pt);
    }
}
