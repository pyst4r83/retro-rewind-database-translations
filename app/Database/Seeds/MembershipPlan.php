<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\MembershipPlanModel;
use App\Models\TranslationsModel;

class MembershipPlan extends Seeder
{
    private MembershipPlanModel $membershipPlanModel;
    private TranslationsModel $translationsModel;

    public function __construct()
    {
        $this->membershipPlanModel = model(MembershipPlanModel::class);
        $this->translationsModel = model(TranslationsModel::class);
    }

    public function run()
    {
        $data = ['type' => 'bronze', 'icon' => 'award', 'price_month' => '', 'price_month_total' => 'free', 'price_month_vat' => '', 'price_year' => '', 'price_year_total' => 'free', 'price_year_vat' => '', 'feature_browse_movies' => true, 'feature_unlimited_ratings' => true, 'feature_community_access' => true, 'feature_own_shop' => true, 'feature_max_movies_showcase' => 12, 'feature_exclusive_badges' => false, 'feature_exclusive_neon_sign' => false];
        $membership_plan_id = $this->membershipPlanModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $membership_plan_id, 'table_name' => 'membership_plan', 'type' => 'name', 'language' => 'de', 'translation' => 'Bronze Mitgliedschaft'];
        $translation_data_en = ['parent_id' => $membership_plan_id, 'table_name' => 'membership_plan', 'type' => 'name', 'language' => 'en', 'translation' => 'Bronze Membership'];
        $translation_data_es = ['parent_id' => $membership_plan_id, 'table_name' => 'membership_plan', 'type' => 'name', 'language' => 'es', 'translation' => 'Membresía Bronce'];
        $translation_data_fr = ['parent_id' => $membership_plan_id, 'table_name' => 'membership_plan', 'type' => 'name', 'language' => 'fr', 'translation' => 'Adhésion Bronze'];
        $translation_data_it = ['parent_id' => $membership_plan_id, 'table_name' => 'membership_plan', 'type' => 'name', 'language' => 'it', 'translation' => 'Abbonamento Bronzo'];
        $translation_data_pt = ['parent_id' => $membership_plan_id, 'table_name' => 'membership_plan', 'type' => 'name', 'language' => 'pt', 'translation' => 'Assinatura Bronze'];
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_pt);

        $data = ['type' => 'silver', 'icon' => 'gem', 'price_month' => '242', 'price_month_total' => '299', 'price_month_vat' => '57', 'price_year' => '2429', 'price_year_total' => '2999', 'price_year_vat' => '570', 'feature_browse_movies' => true, 'feature_unlimited_ratings' => true, 'feature_community_access' => true, 'feature_own_shop' => true, 'feature_max_movies_showcase' => 48, 'feature_exclusive_badges' => true, 'feature_exclusive_neon_sign' => false];
        $membership_plan_id = $this->membershipPlanModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $membership_plan_id, 'table_name' => 'membership_plan', 'type' => 'name', 'language' => 'de', 'translation' => 'Silber Mitgliedschaft'];
        $translation_data_en = ['parent_id' => $membership_plan_id, 'table_name' => 'membership_plan', 'type' => 'name', 'language' => 'en', 'translation' => 'Silver Membership'];
        $translation_data_es = ['parent_id' => $membership_plan_id, 'table_name' => 'membership_plan', 'type' => 'name', 'language' => 'es', 'translation' => 'Membresía Plata'];
        $translation_data_fr = ['parent_id' => $membership_plan_id, 'table_name' => 'membership_plan', 'type' => 'name', 'language' => 'fr', 'translation' => 'Adhésion Argent'];
        $translation_data_it = ['parent_id' => $membership_plan_id, 'table_name' => 'membership_plan', 'type' => 'name', 'language' => 'it', 'translation' => 'Abbonamento Argento'];
        $translation_data_pt = ['parent_id' => $membership_plan_id, 'table_name' => 'membership_plan', 'type' => 'name', 'language' => 'pt', 'translation' => 'Assinatura Prata'];
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_pt);

        $data = ['type' => 'gold', 'icon' => 'trophy-fill', 'price_month' => '404', 'price_month_total' => '499', 'price_month_vat' => '95', 'price_year' => '4049', 'price_year_total' => '4999', 'price_year_vat' => '950', 'feature_browse_movies' => true, 'feature_unlimited_ratings' => true, 'feature_community_access' => true, 'feature_own_shop' => true, 'feature_max_movies_showcase' => 96, 'feature_exclusive_badges' => true, 'feature_exclusive_neon_sign' => true];
        $membership_plan_id = $this->membershipPlanModel->protect(false)->skipValidation(true)->insert($data, true);
        $translation_data_de = ['parent_id' => $membership_plan_id, 'table_name' => 'membership_plan', 'type' => 'name', 'language' => 'de', 'translation' => 'Gold Mitgliedschaft'];
        $translation_data_en = ['parent_id' => $membership_plan_id, 'table_name' => 'membership_plan', 'type' => 'name', 'language' => 'en', 'translation' => 'Gold Membership'];
        $translation_data_es = ['parent_id' => $membership_plan_id, 'table_name' => 'membership_plan', 'type' => 'name', 'language' => 'es', 'translation' => 'Membresía Oro'];
        $translation_data_fr = ['parent_id' => $membership_plan_id, 'table_name' => 'membership_plan', 'type' => 'name', 'language' => 'fr', 'translation' => 'Adhésion Or'];
        $translation_data_it = ['parent_id' => $membership_plan_id, 'table_name' => 'membership_plan', 'type' => 'name', 'language' => 'it', 'translation' => 'Abbonamento Oro'];
        $translation_data_pt = ['parent_id' => $membership_plan_id, 'table_name' => 'membership_plan', 'type' => 'name', 'language' => 'pt', 'translation' => 'Assinatura Ouro'];
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_de);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_en);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_es);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_fr);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_it);
        $this->translationsModel->protect(false)->skipValidation(true)->save($translation_data_pt);
    }
}
