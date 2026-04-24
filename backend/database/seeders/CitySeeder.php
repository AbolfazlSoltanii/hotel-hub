<?php

namespace Database\Seeders;

use App\Models\City;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = $this->getData();

        City::query()->insert($data);
    }

    private function getData(): array
    {
        $now = Carbon::now();

        return [
            [
                'id' => 1,
                'province_id' => 1,
                'code' => 'azarshahr',
                'name' => 'آذرشهر',
                'latitude' => '37.75888900',
                'longitude' => '45.97833300',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 2,
                'province_id' => 1,
                'code' => 'osku',
                'name' => 'اسکو',
                'latitude' => '37.91583300',
                'longitude' => '46.12361100',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 3,
                'province_id' => 1,
                'code' => 'ahar',
                'name' => 'اهر',
                'latitude' => '38.48943050',
                'longitude' => '47.06835750',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 4,
                'province_id' => 1,
                'code' => 'bostanabad',
                'name' => 'بستان آباد',
                'latitude' => '37.85000000',
                'longitude' => '46.83333300',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 5,
                'province_id' => 1,
                'code' => 'bonab',
                'name' => 'بناب',
                'latitude' => '37.34027800',
                'longitude' => '46.05611100',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 6,
                'province_id' => 1,
                'code' => 'tabriz',
                'name' => 'تبریز',
                'latitude' => '38.06666700',
                'longitude' => '46.30000000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 7,
                'province_id' => 1,
                'code' => 'jolfa',
                'name' => 'جلفا',
                'latitude' => '38.94027800',
                'longitude' => '45.63083300',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 8,
                'province_id' => 1,
                'code' => 'charuymaq',
                'name' => 'چار اویماق',
                'latitude' => '37.12990520',
                'longitude' => '47.02456860',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 9,
                'province_id' => 1,
                'code' => 'sarab',
                'name' => 'سراب',
                'latitude' => '37.94083300',
                'longitude' => '47.53666700',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 10,
                'province_id' => 1,
                'code' => 'shabestar',
                'name' => 'شبستر',
                'latitude' => '38.18027800',
                'longitude' => '45.70277800',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 11,
                'province_id' => 1,
                'code' => 'ajab-shir',
                'name' => 'عجبشیر',
                'latitude' => '37.47750000',
                'longitude' => '45.89416700',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 12,
                'province_id' => 1,
                'code' => 'kaleybar',
                'name' => 'کلیبر',
                'latitude' => '38.86944400',
                'longitude' => '47.03555600',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 13,
                'province_id' => 1,
                'code' => 'maragheh',
                'name' => 'مراغه',
                'latitude' => '37.38916700',
                'longitude' => '46.23750000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 14,
                'province_id' => 1,
                'code' => 'marand',
                'name' => 'مرند',
                'latitude' => '38.42511700',
                'longitude' => '45.76963600',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 15,
                'province_id' => 1,
                'code' => 'malekan',
                'name' => 'ملکان',
                'latitude' => '37.14562500',
                'longitude' => '46.16852420',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 16,
                'province_id' => 1,
                'code' => 'mianeh',
                'name' => 'میانه',
                'latitude' => '37.42111100',
                'longitude' => '47.71500000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 17,
                'province_id' => 1,
                'code' => 'varzaqan',
                'name' => 'ورزقان',
                'latitude' => '38.50972200',
                'longitude' => '46.65444400',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 18,
                'province_id' => 1,
                'code' => 'heris',
                'name' => 'هریس',
                'latitude' => '29.77518250',
                'longitude' => '-95.31025050',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 19,
                'province_id' => 1,
                'code' => 'hashtrud',
                'name' => 'هشترود',
                'latitude' => '37.47777800',
                'longitude' => '47.05083300',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 20,
                'province_id' => 2,
                'code' => 'urmia',
                'name' => 'ارومیه',
                'latitude' => '37.55527800',
                'longitude' => '45.07250000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 21,
                'province_id' => 2,
                'code' => 'oshnavieh',
                'name' => 'اشنویه',
                'latitude' => '37.03972200',
                'longitude' => '45.09833300',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 22,
                'province_id' => 2,
                'code' => 'bukan',
                'name' => 'بوکان',
                'latitude' => '36.52111100',
                'longitude' => '46.20888900',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 23,
                'province_id' => 2,
                'code' => 'piranshahr',
                'name' => 'پیرانشهر',
                'latitude' => '36.69444400',
                'longitude' => '45.14166700',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 24,
                'province_id' => 2,
                'code' => 'takab',
                'name' => 'تکاب',
                'latitude' => '36.40083300',
                'longitude' => '47.11333300',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 25,
                'province_id' => 2,
                'code' => 'chaldoran',
                'name' => 'چالدران',
                'latitude' => '39.06498370',
                'longitude' => '44.38446790',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 26,
                'province_id' => 2,
                'code' => 'khoy',
                'name' => 'خوی',
                'latitude' => '38.55027800',
                'longitude' => '44.95222200',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 27,
                'province_id' => 2,
                'code' => 'sardasht',
                'name' => 'سردشت',
                'latitude' => '36.15527800',
                'longitude' => '45.47888900',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 28,
                'province_id' => 2,
                'code' => 'salmas',
                'name' => 'سلماس',
                'latitude' => '38.19722200',
                'longitude' => '44.76527800',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 29,
                'province_id' => 2,
                'code' => 'shahin-dezh',
                'name' => 'شاهین دژ',
                'latitude' => '36.67916700',
                'longitude' => '46.56694400',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 30,
                'province_id' => 2,
                'code' => 'maku',
                'name' => 'ماکو',
                'latitude' => '39.29527800',
                'longitude' => '44.51666700',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 31,
                'province_id' => 2,
                'code' => 'mahabad',
                'name' => 'مهاباد',
                'latitude' => '36.76305600',
                'longitude' => '45.72222200',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 32,
                'province_id' => 2,
                'code' => 'miandoab',
                'name' => 'میاندوآب',
                'latitude' => '36.96944400',
                'longitude' => '46.10277800',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 33,
                'province_id' => 2,
                'code' => 'naqadeh',
                'name' => 'نقده',
                'latitude' => '36.95527800',
                'longitude' => '45.38805600',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 34,
                'province_id' => 3,
                'code' => 'ardabil',
                'name' => 'اردبیل',
                'latitude' => '38.48532760',
                'longitude' => '47.89112090',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 35,
                'province_id' => 3,
                'code' => 'bileh-bileh-savar',
                'name' => 'بیله سوار',
                'latitude' => '39.35677750',
                'longitude' => '47.94907650',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 36,
                'province_id' => 3,
                'code' => 'parsabad',
                'name' => 'پارس آباد',
                'latitude' => '39.64833300',
                'longitude' => '47.91750000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 37,
                'province_id' => 3,
                'code' => 'khalkhal',
                'name' => 'خلخال',
                'latitude' => '37.61888900',
                'longitude' => '48.52583300',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 38,
                'province_id' => 3,
                'code' => 'kowsar',
                'name' => 'کوثر',
                'latitude' => '31.86768660',
                'longitude' => '54.33798020',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 39,
                'province_id' => 3,
                'code' => 'germi',
                'name' => 'گرمی',
                'latitude' => '39.03722670',
                'longitude' => '47.92770210',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 40,
                'province_id' => 3,
                'code' => 'meshginshahr',
                'name' => 'مشگین',
                'latitude' => '38.39888900',
                'longitude' => '47.68194400',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 41,
                'province_id' => 3,
                'code' => 'namin',
                'name' => 'نمین',
                'latitude' => '38.42694400',
                'longitude' => '48.48388900',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 42,
                'province_id' => 3,
                'code' => 'nir',
                'name' => 'نیر',
                'latitude' => '38.03472200',
                'longitude' => '47.99861100',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 43,
                'province_id' => 4,
                'code' => 'aran-va-bidgol',
                'name' => 'آران و بیدگل',
                'latitude' => '34.05777800',
                'longitude' => '51.48416700',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 44,
                'province_id' => 4,
                'code' => 'ardestan',
                'name' => 'اردستان',
                'latitude' => '33.37611100',
                'longitude' => '52.36944400',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 45,
                'province_id' => 4,
                'code' => 'isfahan',
                'name' => 'اصفهان',
                'latitude' => '32.65462750',
                'longitude' => '51.66798260',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 46,
                'province_id' => 4,
                'code' => 'borkhar-and-meymeh',
                'name' => 'برخوار و میمه',
                'latitude' => '32.83333300',
                'longitude' => '51.77500000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 47,
                'province_id' => 4,
                'code' => 'tiran-and-karvan',
                'name' => 'تیران و کرون',
                'latitude' => null,
                'longitude' => null,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 48,
                'province_id' => 4,
                'code' => 'chadegan',
                'name' => 'چادگان',
                'latitude' => '32.76833300',
                'longitude' => '50.62861100',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 49,
                'province_id' => 4,
                'code' => 'khomeyni-shahr',
                'name' => 'خمینی شهر',
                'latitude' => '32.70027800',
                'longitude' => '51.52111100',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 50,
                'province_id' => 4,
                'code' => 'khvansar',
                'name' => 'خوانسار',
                'latitude' => '33.22055600',
                'longitude' => '50.31500000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 51,
                'province_id' => 4,
                'code' => 'semirom',
                'name' => 'سمیرم',
                'latitude' => '31.39883460',
                'longitude' => '51.56759300',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 52,
                'province_id' => 4,
                'code' => 'shahin-shahr-and-meymeh',
                'name' => 'شاهین شهر و میمه',
                'latitude' => '33.12718520',
                'longitude' => '51.51500770',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 53,
                'province_id' => 4,
                'code' => 'shahreza',
                'name' => 'شهر رضا',
                'latitude' => '36.29244520',
                'longitude' => '59.56771490',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 54,
                'province_id' => 4,
                'code' => 'dehaqan',
                'name' => 'دهاقان',
                'latitude' => '31.94000000',
                'longitude' => '51.64777800',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 55,
                'province_id' => 4,
                'code' => 'faridan',
                'name' => 'فریدن',
                'latitude' => '33.02148290',
                'longitude' => '50.30690880',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 56,
                'province_id' => 4,
                'code' => 'fereydunshahr',
                'name' => 'فریدون شهر',
                'latitude' => '32.94111100',
                'longitude' => '50.12111100',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 57,
                'province_id' => 4,
                'code' => 'falavarjan',
                'name' => 'فلاورجان',
                'latitude' => '32.55527800',
                'longitude' => '51.50972200',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 58,
                'province_id' => 4,
                'code' => 'kashan',
                'name' => 'کاشان',
                'latitude' => '33.98503580',
                'longitude' => '51.40996250',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 59,
                'province_id' => 4,
                'code' => 'golpayegan',
                'name' => 'گلپایگان',
                'latitude' => '33.45361100',
                'longitude' => '50.28833300',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 60,
                'province_id' => 4,
                'code' => 'lenjan',
                'name' => 'لنجان',
                'latitude' => '32.47501680',
                'longitude' => '51.30508510',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 61,
                'province_id' => 4,
                'code' => 'mobarakeh',
                'name' => 'مبارکه',
                'latitude' => '32.34638900',
                'longitude' => '51.50444400',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 62,
                'province_id' => 4,
                'code' => 'nain',
                'name' => 'نائین',
                'latitude' => '32.85994450',
                'longitude' => '53.08783210',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 63,
                'province_id' => 4,
                'code' => 'najafabad',
                'name' => 'نجف آباد',
                'latitude' => '32.63242310',
                'longitude' => '51.36799140',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 64,
                'province_id' => 4,
                'code' => 'natanz',
                'name' => 'نطنز',
                'latitude' => '33.51333300',
                'longitude' => '51.91638900',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 65,
                'province_id' => 5,
                'code' => 'savojbolagh',
                'name' => 'ساوجبلاق',
                'latitude' => '38.37879410',
                'longitude' => '47.49743590',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 66,
                'province_id' => 5,
                'code' => 'karaj',
                'name' => 'کرج',
                'latitude' => '35.84001880',
                'longitude' => '50.93909060',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 67,
                'province_id' => 5,
                'code' => 'nazarabad',
                'name' => 'نظرآباد',
                'latitude' => '35.95222200',
                'longitude' => '50.60750000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 68,
                'province_id' => 5,
                'code' => 'taleqan',
                'name' => 'طالقان',
                'latitude' => '33.27291710',
                'longitude' => '52.19853140',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 69,
                'province_id' => 6,
                'code' => 'abdanan',
                'name' => 'آبدانان',
                'latitude' => '32.99250000',
                'longitude' => '47.41972200',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 70,
                'province_id' => 6,
                'code' => 'ilam',
                'name' => 'ایلام',
                'latitude' => '33.29576180',
                'longitude' => '46.67053400',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 71,
                'province_id' => 6,
                'code' => 'eyvan',
                'name' => 'ایوان',
                'latitude' => '33.82722200',
                'longitude' => '46.30972200',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 72,
                'province_id' => 6,
                'code' => 'darreh-shahr',
                'name' => 'دره شهر',
                'latitude' => '33.13972200',
                'longitude' => '47.37611100',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 73,
                'province_id' => 6,
                'code' => 'dehloran',
                'name' => 'دهلران',
                'latitude' => '32.69416700',
                'longitude' => '47.26777800',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 74,
                'province_id' => 6,
                'code' => 'chardavol',
                'name' => 'شیران و چرداول',
                'latitude' => '33.69383480',
                'longitude' => '46.74784930',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 75,
                'province_id' => 6,
                'code' => 'mehran',
                'name' => 'مهران',
                'latitude' => '33.12222200',
                'longitude' => '46.16472200',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 76,
                'province_id' => 7,
                'code' => 'bushehr',
                'name' => 'بوشهر',
                'latitude' => '28.92338370',
                'longitude' => '50.82031400',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 77,
                'province_id' => 7,
                'code' => 'tangestan',
                'name' => 'تنگستان',
                'latitude' => '28.98375470',
                'longitude' => '50.83307080',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 78,
                'province_id' => 7,
                'code' => 'jam',
                'name' => 'جم',
                'latitude' => '27.82777800',
                'longitude' => '52.32694400',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 79,
                'province_id' => 7,
                'code' => 'dashtestan',
                'name' => 'دشتستان',
                'latitude' => '29.26666700',
                'longitude' => '51.21666700',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 80,
                'province_id' => 7,
                'code' => 'dashti',
                'name' => 'دشتی',
                'latitude' => '35.78451450',
                'longitude' => '51.43479610',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 81,
                'province_id' => 7,
                'code' => 'deyr',
                'name' => 'دیر',
                'latitude' => '27.84000000',
                'longitude' => '51.93777800',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 82,
                'province_id' => 7,
                'code' => 'deylam',
                'name' => 'دیلم',
                'latitude' => '30.11826320',
                'longitude' => '50.22612270',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 83,
                'province_id' => 7,
                'code' => 'kangan',
                'name' => 'کنگان',
                'latitude' => '27.83704370',
                'longitude' => '52.06454730',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 84,
                'province_id' => 7,
                'code' => 'ganaveh',
                'name' => 'گناوه',
                'latitude' => '29.57916700',
                'longitude' => '50.51694400',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 85,
                'province_id' => 8,
                'code' => 'eslamshahr',
                'name' => 'اسلام شهر',
                'latitude' => '35.54458050',
                'longitude' => '51.23024570',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 86,
                'province_id' => 8,
                'code' => 'pakdasht',
                'name' => 'پاکدشت',
                'latitude' => '35.46689130',
                'longitude' => '51.68606250',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 87,
                'province_id' => 8,
                'code' => 'tehran',
                'name' => 'تهران',
                'latitude' => '35.69611100',
                'longitude' => '51.42305600',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 88,
                'province_id' => 8,
                'code' => 'damavand',
                'name' => 'دماوند',
                'latitude' => '35.94674940',
                'longitude' => '52.12754810',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 89,
                'province_id' => 8,
                'code' => 'robat-karim',
                'name' => 'رباط کریم',
                'latitude' => '35.48472200',
                'longitude' => '51.08277800',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 90,
                'province_id' => 8,
                'code' => 'rey',
                'name' => 'ری',
                'latitude' => '35.57733200',
                'longitude' => '51.46276200',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 91,
                'province_id' => 8,
                'code' => 'shemiranat',
                'name' => 'شمیرانات',
                'latitude' => '35.95480210',
                'longitude' => '51.59916430',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 92,
                'province_id' => 8,
                'code' => 'shahriar',
                'name' => 'شهریار',
                'latitude' => '35.65972200',
                'longitude' => '51.05916700',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 93,
                'province_id' => 8,
                'code' => 'firozkoh',
                'name' => 'فیروزکوه',
                'latitude' => '35.43867100',
                'longitude' => '60.80938700',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 94,
                'province_id' => 8,
                'code' => 'varamin',
                'name' => 'ورامین',
                'latitude' => '35.32524070',
                'longitude' => '51.64719870',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 95,
                'province_id' => 9,
                'code' => 'ardal',
                'name' => 'اردل',
                'latitude' => '31.99972200',
                'longitude' => '50.66166700',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 96,
                'province_id' => 9,
                'code' => 'borujen',
                'name' => 'بروجن',
                'latitude' => '31.96527800',
                'longitude' => '51.28722200',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 97,
                'province_id' => 9,
                'code' => 'shahrekord',
                'name' => 'شهرکرد',
                'latitude' => '32.32555600',
                'longitude' => '50.86444400',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 98,
                'province_id' => 9,
                'code' => 'farsan',
                'name' => 'فارسان',
                'latitude' => '32.25820660',
                'longitude' => '50.57050880',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 99,
                'province_id' => 9,
                'code' => 'koohrang',
                'name' => 'کوهرنگ',
                'latitude' => '32.55583640',
                'longitude' => '51.67872520',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 100,
                'province_id' => 9,
                'code' => 'lordegan',
                'name' => 'لردگان',
                'latitude' => '31.51027800',
                'longitude' => '50.82944400',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 101,
                'province_id' => 10,
                'code' => 'birjand',
                'name' => 'بیرجند',
                'latitude' => '32.86490390',
                'longitude' => '59.22624720',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 102,
                'province_id' => 10,
                'code' => 'darmiyan',
                'name' => 'درمیان',
                'latitude' => '33.03394050',
                'longitude' => '60.11847970',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 103,
                'province_id' => 10,
                'code' => 'saraian',
                'name' => 'سرایان',
                'latitude' => '33.86027800',
                'longitude' => '58.52166700',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 104,
                'province_id' => 10,
                'code' => 'sar-bisheh',
                'name' => 'سر بیشه',
                'latitude' => '32.57555600',
                'longitude' => '59.79833300',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 105,
                'province_id' => 10,
                'code' => 'ferdos',
                'name' => 'فردوس',
                'latitude' => '34.01861100',
                'longitude' => '58.17222200',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 106,
                'province_id' => 10,
                'code' => 'qaen',
                'name' => 'قائن',
                'latitude' => '33.72666700',
                'longitude' => '59.18444400',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 107,
                'province_id' => 10,
                'code' => 'nehbandan',
                'name' => 'نهبندان',
                'latitude' => '31.54194400',
                'longitude' => '60.03638900',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 108,
                'province_id' => 11,
                'code' => 'bard-sakran',
                'name' => 'برد سکن',
                'latitude' => '35.26083300',
                'longitude' => '57.96972200',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 109,
                'province_id' => 11,
                'code' => 'bojestan',
                'name' => 'بجستان',
                'latitude' => '34.51638900',
                'longitude' => '58.18444400',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 110,
                'province_id' => 11,
                'code' => 'taybad',
                'name' => 'تایباد',
                'latitude' => '34.74000000',
                'longitude' => '60.77555600',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 111,
                'province_id' => 11,
                'code' => 'tahate-jolgeh',
                'name' => 'تحت جلگه',
                'latitude' => null,
                'longitude' => null,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 112,
                'province_id' => 11,
                'code' => 'torbat-jam',
                'name' => 'تربت جام',
                'latitude' => '35.24388900',
                'longitude' => '60.62250000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 113,
                'province_id' => 11,
                'code' => 'torbat-heydariyeh',
                'name' => 'تربت حیدریه',
                'latitude' => '35.27388900',
                'longitude' => '59.21944400',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 114,
                'province_id' => 11,
                'code' => 'chenaran',
                'name' => 'چناران',
                'latitude' => '36.64555600',
                'longitude' => '59.12111100',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 115,
                'province_id' => 11,
                'code' => 'joghatai',
                'name' => 'جغتای',
                'latitude' => '36.57888530',
                'longitude' => '57.25121500',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 116,
                'province_id' => 11,
                'code' => 'jovein',
                'name' => 'جوین',
                'latitude' => '36.63622380',
                'longitude' => '57.50799120',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 117,
                'province_id' => 11,
                'code' => 'khalilabad',
                'name' => 'خلیل آباد',
                'latitude' => '35.25583300',
                'longitude' => '58.28638900',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 118,
                'province_id' => 11,
                'code' => 'khaf',
                'name' => 'خواف',
                'latitude' => '34.57638900',
                'longitude' => '60.14083300',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 119,
                'province_id' => 11,
                'code' => 'dargaz',
                'name' => 'درگز',
                'latitude' => '37.44444400',
                'longitude' => '59.10805600',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 120,
                'province_id' => 11,
                'code' => 'rashtkhar',
                'name' => 'رشتخوار',
                'latitude' => '34.97472200',
                'longitude' => '59.62361100',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 121,
                'province_id' => 11,
                'code' => 'zaveh',
                'name' => 'زاوه',
                'latitude' => '35.27473220',
                'longitude' => '59.46777270',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 122,
                'province_id' => 11,
                'code' => 'sabzevar',
                'name' => 'سبزوار',
                'latitude' => '36.21518230',
                'longitude' => '57.66782280',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 123,
                'province_id' => 11,
                'code' => 'sarakhs',
                'name' => 'سرخس',
                'latitude' => '36.54500000',
                'longitude' => '61.15777800',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 124,
                'province_id' => 11,
                'code' => 'fariman',
                'name' => 'فریمان',
                'latitude' => '35.70694400',
                'longitude' => '59.85000000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 125,
                'province_id' => 11,
                'code' => 'ghuchan',
                'name' => 'قوچان',
                'latitude' => '37.10611100',
                'longitude' => '58.50944400',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 126,
                'province_id' => 11,
                'code' => 'torghabeh-shandiz',
                'name' => 'طرقبه شاندیز',
                'latitude' => '36.35488410',
                'longitude' => '59.43839550',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 127,
                'province_id' => 11,
                'code' => 'kashmar',
                'name' => 'کاشمر',
                'latitude' => '35.23833300',
                'longitude' => '58.46555600',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 128,
                'province_id' => 11,
                'code' => 'kalat',
                'name' => 'کلات',
                'latitude' => '34.19833300',
                'longitude' => '58.54444400',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 129,
                'province_id' => 11,
                'code' => 'gonabad',
                'name' => 'گناباد',
                'latitude' => '34.35277800',
                'longitude' => '58.68361100',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 130,
                'province_id' => 11,
                'code' => 'mashhad',
                'name' => 'مشهد',
                'latitude' => '36.26046230',
                'longitude' => '59.61675490',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 131,
                'province_id' => 11,
                'code' => 'mahvelat',
                'name' => 'مه ولات',
                'latitude' => '35.02108290',
                'longitude' => '58.78181160',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 132,
                'province_id' => 11,
                'code' => 'neyshabur',
                'name' => 'نیشابور',
                'latitude' => '36.21408650',
                'longitude' => '58.79609150',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 133,
                'province_id' => 12,
                'code' => 'esfarayen',
                'name' => 'اسفراین',
                'latitude' => '37.07638900',
                'longitude' => '57.51000000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 134,
                'province_id' => 12,
                'code' => 'bojnord',
                'name' => 'بجنورد',
                'latitude' => '37.47500000',
                'longitude' => '57.33333300',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 135,
                'province_id' => 12,
                'code' => 'jajarm',
                'name' => 'جاجرم',
                'latitude' => '36.95000000',
                'longitude' => '56.38000000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 136,
                'province_id' => 12,
                'code' => 'shirvan',
                'name' => 'شیروان',
                'latitude' => '37.40923570',
                'longitude' => '57.92761840',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 137,
                'province_id' => 12,
                'code' => 'faroj',
                'name' => 'فاروج',
                'latitude' => '37.23111100',
                'longitude' => '58.21888900',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 138,
                'province_id' => 12,
                'code' => 'mane-samalghan',
                'name' => 'مانه و سملقان',
                'latitude' => '37.66206140',
                'longitude' => '56.74120700',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 139,
                'province_id' => 13,
                'code' => 'abadan',
                'name' => 'آبادان',
                'latitude' => '30.34729600',
                'longitude' => '48.29340040',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 140,
                'province_id' => 13,
                'code' => 'omidieh',
                'name' => 'امیدیه',
                'latitude' => '30.74583300',
                'longitude' => '49.70861100',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 141,
                'province_id' => 13,
                'code' => 'andimeshk',
                'name' => 'اندیمشک',
                'latitude' => '32.46000000',
                'longitude' => '48.35916700',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 142,
                'province_id' => 13,
                'code' => 'ahvaz',
                'name' => 'اهواز',
                'latitude' => '31.31832720',
                'longitude' => '48.67061870',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 143,
                'province_id' => 13,
                'code' => 'izeh',
                'name' => 'ایذه',
                'latitude' => '31.83416700',
                'longitude' => '49.86722200',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 144,
                'province_id' => 13,
                'code' => 'bagh-malek',
                'name' => 'باغ ملک',
                'latitude' => '32.39472060',
                'longitude' => '51.59653280',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 145,
                'province_id' => 13,
                'code' => 'bandar-mahshahr',
                'name' => 'بندرماهشهر',
                'latitude' => '30.55888900',
                'longitude' => '49.19805600',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 146,
                'province_id' => 13,
                'code' => 'behbahan',
                'name' => 'بهبهان',
                'latitude' => '30.59583300',
                'longitude' => '50.24166700',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 147,
                'province_id' => 13,
                'code' => 'khorramshahr',
                'name' => 'خرمشهر',
                'latitude' => '30.42562190',
                'longitude' => '48.18911850',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 148,
                'province_id' => 13,
                'code' => 'dezful',
                'name' => 'دزفول',
                'latitude' => '32.38307770',
                'longitude' => '48.42358410',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 149,
                'province_id' => 13,
                'code' => 'dasht-azadegan',
                'name' => 'دشت آزادگان',
                'latitude' => '31.55805600',
                'longitude' => '48.18083300',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 150,
                'province_id' => 13,
                'code' => 'ramshir',
                'name' => 'رامشیر',
                'latitude' => '30.89565210',
                'longitude' => '49.40947010',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 151,
                'province_id' => 13,
                'code' => 'ramhormoz',
                'name' => 'رامهرمز',
                'latitude' => '31.28000000',
                'longitude' => '49.60361100',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 152,
                'province_id' => 13,
                'code' => 'shadegan',
                'name' => 'شادگان',
                'latitude' => '30.64972200',
                'longitude' => '48.66472200',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 153,
                'province_id' => 13,
                'code' => 'shush',
                'name' => 'شوش',
                'latitude' => '32.19416700',
                'longitude' => '48.24361100',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 154,
                'province_id' => 13,
                'code' => 'shushtar',
                'name' => 'شوشتر',
                'latitude' => '32.04555600',
                'longitude' => '48.85666700',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 155,
                'province_id' => 13,
                'code' => 'gotvand',
                'name' => 'گتوند',
                'latitude' => '32.25138900',
                'longitude' => '48.81611100',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 156,
                'province_id' => 13,
                'code' => 'lali',
                'name' => 'لالی',
                'latitude' => '32.32888900',
                'longitude' => '49.09361100',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 157,
                'province_id' => 13,
                'code' => 'masjed-soleyman',
                'name' => 'مسجد سلیمان',
                'latitude' => '31.93638900',
                'longitude' => '49.30388900',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 158,
                'province_id' => 13,
                'code' => 'hindijan',
                'name' => 'هندیجان',
                'latitude' => '30.23638900',
                'longitude' => '49.71194400',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 159,
                'province_id' => 14,
                'code' => 'abhar',
                'name' => 'ابهر',
                'latitude' => '36.14666700',
                'longitude' => '49.21805600',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 160,
                'province_id' => 14,
                'code' => 'ijrud',
                'name' => 'ایجرود',
                'latitude' => '36.41609280',
                'longitude' => '48.24692490',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 161,
                'province_id' => 14,
                'code' => 'khodabandeh',
                'name' => 'خدابنده',
                'latitude' => '36.11472200',
                'longitude' => '48.59111100',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 162,
                'province_id' => 14,
                'code' => 'khorramdareh',
                'name' => 'خرمدره',
                'latitude' => '36.20305600',
                'longitude' => '49.18694400',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 163,
                'province_id' => 14,
                'code' => 'zanjan',
                'name' => 'زنجان',
                'latitude' => '36.50181850',
                'longitude' => '48.39881860',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 164,
                'province_id' => 14,
                'code' => 'taram',
                'name' => 'طارم',
                'latitude' => '28.18042870',
                'longitude' => '55.74533670',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 165,
                'province_id' => 14,
                'code' => 'mahneshan',
                'name' => 'ماه نشان',
                'latitude' => '36.74444400',
                'longitude' => '47.67250000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 166,
                'province_id' => 15,
                'code' => 'damghan',
                'name' => 'دامغان',
                'latitude' => '36.16833300',
                'longitude' => '54.34805600',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 167,
                'province_id' => 15,
                'code' => 'semnan',
                'name' => 'سمنان',
                'latitude' => '35.22555850',
                'longitude' => '54.43421380',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 168,
                'province_id' => 15,
                'code' => 'shahrud',
                'name' => 'شاهرود',
                'latitude' => '36.41805600',
                'longitude' => '54.97638900',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 169,
                'province_id' => 15,
                'code' => 'garmsar',
                'name' => 'گرمسار',
                'latitude' => '35.21833300',
                'longitude' => '52.34083300',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 170,
                'province_id' => 15,
                'code' => 'mahdi-shahr',
                'name' => 'مهدی شهر',
                'latitude' => '35.70000000',
                'longitude' => '53.35000000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 171,
                'province_id' => 16,
                'code' => 'iranshahr',
                'name' => 'ایرانشهر',
                'latitude' => '27.20250000',
                'longitude' => '60.68472200',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 172,
                'province_id' => 16,
                'code' => 'chabahar',
                'name' => 'چابهار',
                'latitude' => '25.29194400',
                'longitude' => '60.64305600',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 173,
                'province_id' => 16,
                'code' => 'khash',
                'name' => 'خاش',
                'latitude' => '28.21666700',
                'longitude' => '61.20000000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 174,
                'province_id' => 16,
                'code' => 'delgan',
                'name' => 'دلگان',
                'latitude' => '27.60773570',
                'longitude' => '59.47209040',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 175,
                'province_id' => 16,
                'code' => 'zabol',
                'name' => 'زابل',
                'latitude' => '31.02861100',
                'longitude' => '61.50111100',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 176,
                'province_id' => 16,
                'code' => 'zahedan',
                'name' => 'زاهدان',
                'latitude' => '29.49638900',
                'longitude' => '60.86277800',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 177,
                'province_id' => 16,
                'code' => 'zahak',
                'name' => 'زهک',
                'latitude' => '30.89388900',
                'longitude' => '61.68027800',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 178,
                'province_id' => 16,
                'code' => 'saravan',
                'name' => 'سراوان',
                'latitude' => '27.37083300',
                'longitude' => '62.33416700',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 179,
                'province_id' => 16,
                'code' => 'sarbaz',
                'name' => 'سرباز',
                'latitude' => '26.63083300',
                'longitude' => '61.25638900',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 180,
                'province_id' => 16,
                'code' => 'konarak',
                'name' => 'کنارک',
                'latitude' => '25.36027800',
                'longitude' => '60.39944400',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 181,
                'province_id' => 16,
                'code' => 'nikshahr',
                'name' => 'نیکشهر',
                'latitude' => '26.41847190',
                'longitude' => '60.21107520',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 182,
                'province_id' => 17,
                'code' => 'abadeh',
                'name' => 'آباده',
                'latitude' => '31.16083300',
                'longitude' => '52.65055600',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 183,
                'province_id' => 17,
                'code' => 'arsanjan',
                'name' => 'ارسنجان',
                'latitude' => '29.91250000',
                'longitude' => '53.30861100',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 184,
                'province_id' => 17,
                'code' => 'estahban',
                'name' => 'استهبان',
                'latitude' => '29.12666700',
                'longitude' => '54.04222200',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 185,
                'province_id' => 17,
                'code' => 'eqlid',
                'name' => 'اقلید',
                'latitude' => '30.89888900',
                'longitude' => '52.68666700',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 186,
                'province_id' => 17,
                'code' => 'bavanat',
                'name' => 'بوانات',
                'latitude' => '30.48559070',
                'longitude' => '53.59333040',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 187,
                'province_id' => 17,
                'code' => 'pasargad',
                'name' => 'پاسارگاد',
                'latitude' => '30.20330750',
                'longitude' => '53.17901000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 188,
                'province_id' => 17,
                'code' => 'jahrom',
                'name' => 'جهرم',
                'latitude' => '28.50000000',
                'longitude' => '53.56055600',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 189,
                'province_id' => 17,
                'code' => 'khorrambid',
                'name' => 'خرم بید',
                'latitude' => '32.67083450',
                'longitude' => '51.64702790',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 190,
                'province_id' => 17,
                'code' => 'khonj',
                'name' => 'خنج',
                'latitude' => '27.89138900',
                'longitude' => '53.43444400',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 191,
                'province_id' => 17,
                'code' => 'darab',
                'name' => 'داراب',
                'latitude' => '28.75194400',
                'longitude' => '54.54444400',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 192,
                'province_id' => 17,
                'code' => 'zarrin-dasht',
                'name' => 'زرین دشت',
                'latitude' => '28.35450470',
                'longitude' => '54.41780060',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 193,
                'province_id' => 17,
                'code' => 'sepidan',
                'name' => 'سپیدان',
                'latitude' => '30.24252820',
                'longitude' => '51.99241850',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 194,
                'province_id' => 17,
                'code' => 'shiraz',
                'name' => 'شیراز',
                'latitude' => '29.59176770',
                'longitude' => '52.58369820',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 195,
                'province_id' => 17,
                'code' => 'farashband',
                'name' => 'فراشبند',
                'latitude' => '28.87138900',
                'longitude' => '52.09166700',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 196,
                'province_id' => 17,
                'code' => 'fasa',
                'name' => 'فسا',
                'latitude' => '28.93833300',
                'longitude' => '53.64833300',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 197,
                'province_id' => 17,
                'code' => 'firoozabad',
                'name' => 'فیروزآباد',
                'latitude' => '28.84388900',
                'longitude' => '52.57083300',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 198,
                'province_id' => 17,
                'code' => 'qir-karzin',
                'name' => 'قیر و کارزین',
                'latitude' => '28.42998000',
                'longitude' => '53.09516000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 199,
                'province_id' => 17,
                'code' => 'kazeron',
                'name' => 'کازرون',
                'latitude' => '29.61944400',
                'longitude' => '51.65416700',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 200,
                'province_id' => 17,
                'code' => 'larestan',
                'name' => 'لارستان',
                'latitude' => '27.68111100',
                'longitude' => '54.34027800',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 201,
                'province_id' => 17,
                'code' => 'lamerd',
                'name' => 'لامرد',
                'latitude' => '27.34237710',
                'longitude' => '53.18035580',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 202,
                'province_id' => 17,
                'code' => 'marvdasht',
                'name' => 'مرودشت',
                'latitude' => '29.87416700',
                'longitude' => '52.80250000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 203,
                'province_id' => 17,
                'code' => 'mamasani',
                'name' => 'ممسنی',
                'latitude' => '31.96003450',
                'longitude' => '50.51226520',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 204,
                'province_id' => 17,
                'code' => 'mehregan',
                'name' => 'مهر',
                'latitude' => '27.55599310',
                'longitude' => '52.88472050',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 205,
                'province_id' => 17,
                'code' => 'neyriz',
                'name' => 'نی ریز',
                'latitude' => '29.19888900',
                'longitude' => '54.32777800',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 206,
                'province_id' => 18,
                'code' => 'abiyek',
                'name' => 'آبیک',
                'latitude' => '36.04000000',
                'longitude' => '50.53111100',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 207,
                'province_id' => 18,
                'code' => 'alborz',
                'name' => 'البرز',
                'latitude' => '35.99604670',
                'longitude' => '50.92892460',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 208,
                'province_id' => 18,
                'code' => 'buin-zahra',
                'name' => 'بوئین زهرا',
                'latitude' => '35.76694400',
                'longitude' => '50.05777800',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 209,
                'province_id' => 18,
                'code' => 'takestan',
                'name' => 'تاکستان',
                'latitude' => '36.06972200',
                'longitude' => '49.69583300',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 210,
                'province_id' => 18,
                'code' => 'qazvin',
                'name' => 'قزوین',
                'latitude' => '36.08813170',
                'longitude' => '49.85472660',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 211,
                'province_id' => 19,
                'code' => 'qom',
                'name' => 'قم',
                'latitude' => '34.63994430',
                'longitude' => '50.87594190',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 212,
                'province_id' => 20,
                'code' => 'baneh',
                'name' => 'بانه',
                'latitude' => '35.99859990',
                'longitude' => '45.88234280',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 213,
                'province_id' => 20,
                'code' => 'bijar',
                'name' => 'بیجار',
                'latitude' => '32.73527800',
                'longitude' => '59.46666700',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 214,
                'province_id' => 20,
                'code' => 'divandareh',
                'name' => 'دیواندره',
                'latitude' => '35.91388900',
                'longitude' => '47.02388900',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 215,
                'province_id' => 20,
                'code' => 'sarvabad',
                'name' => 'سروآباد',
                'latitude' => '35.31250000',
                'longitude' => '46.36694400',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 216,
                'province_id' => 20,
                'code' => 'saqqez',
                'name' => 'سقز',
                'latitude' => '36.24638900',
                'longitude' => '46.26638900',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 217,
                'province_id' => 20,
                'code' => 'sanandaj',
                'name' => 'سنندج',
                'latitude' => '35.32187480',
                'longitude' => '46.98616470',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 218,
                'province_id' => 20,
                'code' => 'qorveh',
                'name' => 'قروه',
                'latitude' => '35.16789340',
                'longitude' => '47.80382720',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 219,
                'province_id' => 20,
                'code' => 'kamyaran',
                'name' => 'کامیاران',
                'latitude' => '34.79555600',
                'longitude' => '46.93555600',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 220,
                'province_id' => 20,
                'code' => 'marivan',
                'name' => 'مریوان',
                'latitude' => '35.52694400',
                'longitude' => '46.17638900',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 221,
                'province_id' => 21,
                'code' => 'baft',
                'name' => 'بافت',
                'latitude' => '29.23305600',
                'longitude' => '56.60222200',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 222,
                'province_id' => 21,
                'code' => 'bardsir',
                'name' => 'بردسیر',
                'latitude' => '29.92750000',
                'longitude' => '56.57222200',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 223,
                'province_id' => 21,
                'code' => 'bam',
                'name' => 'بم',
                'latitude' => '29.10611100',
                'longitude' => '58.35694400',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 224,
                'province_id' => 21,
                'code' => 'jiroft',
                'name' => 'جیرفت',
                'latitude' => '28.67511240',
                'longitude' => '57.73715690',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 225,
                'province_id' => 21,
                'code' => 'ravar',
                'name' => 'راور',
                'latitude' => '31.26555600',
                'longitude' => '56.80555600',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 226,
                'province_id' => 21,
                'code' => 'rafsanjan',
                'name' => 'رفسنجان',
                'latitude' => '30.40666700',
                'longitude' => '55.99388900',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 227,
                'province_id' => 21,
                'code' => 'rudbar-jonub',
                'name' => 'رودبار جنوب',
                'latitude' => '36.82412890',
                'longitude' => '49.42372740',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 228,
                'province_id' => 21,
                'code' => 'zarand',
                'name' => 'زرند',
                'latitude' => '30.81277800',
                'longitude' => '56.56388900',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 229,
                'province_id' => 21,
                'code' => 'sirjan',
                'name' => 'سیرجان',
                'latitude' => '29.45866760',
                'longitude' => '55.67140510',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 230,
                'province_id' => 21,
                'code' => 'shahr-e-babak',
                'name' => 'شهر بابک',
                'latitude' => '30.11638900',
                'longitude' => '55.11861100',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 231,
                'province_id' => 21,
                'code' => 'anbarabad',
                'name' => 'عنبرآباد',
                'latitude' => '28.47833330',
                'longitude' => '57.84138890',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 232,
                'province_id' => 21,
                'code' => 'qaleh-ganj',
                'name' => 'قلعه گنج',
                'latitude' => '27.52361100',
                'longitude' => '57.88111100',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 233,
                'province_id' => 21,
                'code' => 'kerman',
                'name' => 'کرمان',
                'latitude' => '29.48500890',
                'longitude' => '57.64390480',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 234,
                'province_id' => 21,
                'code' => 'koohbanan',
                'name' => 'کوهبنان',
                'latitude' => '31.41027800',
                'longitude' => '56.28250000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 235,
                'province_id' => 21,
                'code' => 'kohnoj',
                'name' => 'کهنوج',
                'latitude' => '27.94676030',
                'longitude' => '57.70625720',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 236,
                'province_id' => 21,
                'code' => 'manojan',
                'name' => 'منوجان',
                'latitude' => '27.44756260',
                'longitude' => '57.50516160',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 237,
                'province_id' => 22,
                'code' => 'islamabad-gharb',
                'name' => 'اسلام آباد غرب',
                'latitude' => '33.72938820',
                'longitude' => '73.09314610',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 238,
                'province_id' => 22,
                'code' => 'paveh',
                'name' => 'پاوه',
                'latitude' => '35.04333300',
                'longitude' => '46.35638900',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 239,
                'province_id' => 22,
                'code' => 'taleghan',
                'name' => 'ثلاث باباجانی',
                'latitude' => '34.73583710',
                'longitude' => '46.14939690',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 240,
                'province_id' => 22,
                'code' => 'javanrud',
                'name' => 'جوانرود',
                'latitude' => '34.80666700',
                'longitude' => '46.48861100',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 241,
                'province_id' => 22,
                'code' => 'dalahoo',
                'name' => 'دالاهو',
                'latitude' => '34.28416700',
                'longitude' => '46.24222200',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 242,
                'province_id' => 22,
                'code' => 'ravansar',
                'name' => 'روانسر',
                'latitude' => '34.71208920',
                'longitude' => '46.65129980',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 243,
                'province_id' => 22,
                'code' => 'sarpol-zahab',
                'name' => 'سرپل ذهاب',
                'latitude' => '34.46111100',
                'longitude' => '45.86277800',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 244,
                'province_id' => 22,
                'code' => 'sonqor',
                'name' => 'سنقر',
                'latitude' => '34.78361100',
                'longitude' => '47.60027800',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 245,
                'province_id' => 22,
                'code' => 'sahneh',
                'name' => 'صحنه',
                'latitude' => '34.48138900',
                'longitude' => '47.69083300',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 246,
                'province_id' => 22,
                'code' => 'qasr-e-shirin',
                'name' => 'قصر شیرین',
                'latitude' => '34.51590310',
                'longitude' => '45.57768590',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 247,
                'province_id' => 22,
                'code' => 'kermanshah',
                'name' => 'کرمانشاه',
                'latitude' => '34.45762330',
                'longitude' => '46.67053400',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 248,
                'province_id' => 22,
                'code' => 'kangavar',
                'name' => 'کنگاور',
                'latitude' => '34.50416700',
                'longitude' => '47.96527800',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 249,
                'province_id' => 22,
                'code' => 'gilan-gharb',
                'name' => 'گیلان غرب',
                'latitude' => '34.14222200',
                'longitude' => '45.92027800',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 250,
                'province_id' => 22,
                'code' => 'harsin',
                'name' => 'هرسین',
                'latitude' => '34.27191490',
                'longitude' => '47.60461830',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 251,
                'province_id' => 23,
                'code' => 'boyer-ahmad',
                'name' => 'بویر احمد',
                'latitude' => '30.72458600',
                'longitude' => '50.84563230',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 252,
                'province_id' => 23,
                'code' => 'bahmai',
                'name' => 'بهمئی',
                'latitude' => null,
                'longitude' => null,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 253,
                'province_id' => 23,
                'code' => 'dena',
                'name' => 'دنا',
                'latitude' => '30.95166660',
                'longitude' => '51.43750000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 254,
                'province_id' => 23,
                'code' => 'kehgiloyeh',
                'name' => 'کهگیلویه',
                'latitude' => null,
                'longitude' => null,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 255,
                'province_id' => 23,
                'code' => 'gachsaran',
                'name' => 'گچساران',
                'latitude' => '30.35000000',
                'longitude' => '50.80000000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 256,
                'province_id' => 24,
                'code' => 'azadshahr',
                'name' => 'آزادشهر',
                'latitude' => '37.08694400',
                'longitude' => '55.17388900',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 257,
                'province_id' => 24,
                'code' => 'aq-qala',
                'name' => 'آق قلا',
                'latitude' => '37.01388900',
                'longitude' => '54.45500000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 258,
                'province_id' => 24,
                'code' => 'bandar-gaz',
                'name' => 'بندر گز',
                'latitude' => '36.77496500',
                'longitude' => '53.94617490',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 259,
                'province_id' => 24,
                'code' => 'bandar-torkaman',
                'name' => 'بندر ترکمن',
                'latitude' => '36.90166700',
                'longitude' => '54.07083300',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 260,
                'province_id' => 24,
                'code' => 'ramian',
                'name' => 'رامیان',
                'latitude' => '37.01611100',
                'longitude' => '55.14111100',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 261,
                'province_id' => 24,
                'code' => 'aliabad',
                'name' => 'علی آباد',
                'latitude' => '36.30822600',
                'longitude' => '74.61954740',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 262,
                'province_id' => 24,
                'code' => 'kordkuy',
                'name' => 'کرد کوی',
                'latitude' => '36.79414260',
                'longitude' => '54.11027400',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 263,
                'province_id' => 24,
                'code' => 'kala',
                'name' => 'کلاله',
                'latitude' => '37.38083300',
                'longitude' => '55.49166700',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 264,
                'province_id' => 24,
                'code' => 'gorgan',
                'name' => 'گرگان',
                'latitude' => '36.84564270',
                'longitude' => '54.43933630',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 265,
                'province_id' => 24,
                'code' => 'gonbad-kavous',
                'name' => 'گنبد کاووس',
                'latitude' => '37.25000000',
                'longitude' => '55.16722200',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 266,
                'province_id' => 24,
                'code' => 'mino-dasht',
                'name' => 'مینو دشت',
                'latitude' => '37.22888900',
                'longitude' => '55.37472200',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 267,
                'province_id' => 25,
                'code' => 'astara',
                'name' => 'آستارا',
                'latitude' => '38.42916700',
                'longitude' => '48.87194400',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 268,
                'province_id' => 25,
                'code' => 'astaneh-ashrafiyeh',
                'name' => 'آستانه اشرفیه',
                'latitude' => '37.25980220',
                'longitude' => '49.94366210',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 269,
                'province_id' => 25,
                'code' => 'amlash',
                'name' => 'املش',
                'latitude' => '37.09163340',
                'longitude' => '50.18693770',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 270,
                'province_id' => 25,
                'code' => 'bandar-anzali',
                'name' => 'بندر انزلی',
                'latitude' => '37.47244670',
                'longitude' => '49.45873120',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 271,
                'province_id' => 25,
                'code' => 'rasht',
                'name' => 'رشت',
                'latitude' => '37.28083300',
                'longitude' => '49.58305600',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 272,
                'province_id' => 25,
                'code' => 'rezvanshahr',
                'name' => 'رضوانشهر',
                'latitude' => '37.55067500',
                'longitude' => '49.14098010',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 273,
                'province_id' => 25,
                'code' => 'rudbar',
                'name' => 'رودبار',
                'latitude' => '36.82412890',
                'longitude' => '49.42372740',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 274,
                'province_id' => 25,
                'code' => 'rudsar',
                'name' => 'رودسر',
                'latitude' => '37.13784150',
                'longitude' => '50.28361990',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 275,
                'province_id' => 25,
                'code' => 'siahkal',
                'name' => 'سیاهکل',
                'latitude' => '37.15277800',
                'longitude' => '49.87083300',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 276,
                'province_id' => 25,
                'code' => 'shaft',
                'name' => 'شفت',
                'latitude' => '39.63063100',
                'longitude' => '-78.92954200',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 277,
                'province_id' => 25,
                'code' => 'soumesara',
                'name' => 'صومعه سرا',
                'latitude' => '37.31166700',
                'longitude' => '49.32194400',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 278,
                'province_id' => 25,
                'code' => 'talesh',
                'name' => 'طوالش',
                'latitude' => '37.00000000',
                'longitude' => '48.42222220',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 279,
                'province_id' => 25,
                'code' => 'fooman',
                'name' => 'فومن',
                'latitude' => '37.22388900',
                'longitude' => '49.31250000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 280,
                'province_id' => 25,
                'code' => 'lahijan',
                'name' => 'لاهیجان',
                'latitude' => '37.20722200',
                'longitude' => '50.00388900',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 281,
                'province_id' => 25,
                'code' => 'langrud',
                'name' => 'لنگرود',
                'latitude' => '37.19694400',
                'longitude' => '50.15361100',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 282,
                'province_id' => 25,
                'code' => 'masal',
                'name' => 'ماسال',
                'latitude' => '37.36211850',
                'longitude' => '49.13147690',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 283,
                'province_id' => 26,
                'code' => 'azna',
                'name' => 'ازنا',
                'latitude' => '33.45583300',
                'longitude' => '49.45555600',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 284,
                'province_id' => 26,
                'code' => 'aligudarz',
                'name' => 'الیگودرز',
                'latitude' => '33.40055600',
                'longitude' => '49.69500000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 285,
                'province_id' => 26,
                'code' => 'borujerd',
                'name' => 'بروجرد',
                'latitude' => '33.89419930',
                'longitude' => '48.76703300',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 286,
                'province_id' => 26,
                'code' => 'pol-e-dokhtar',
                'name' => 'پلدختر',
                'latitude' => '33.15361100',
                'longitude' => '47.71361100',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 287,
                'province_id' => 26,
                'code' => 'khorramabad',
                'name' => 'خرم آباد',
                'latitude' => '33.48777800',
                'longitude' => '48.35583300',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 288,
                'province_id' => 26,
                'code' => 'dorud',
                'name' => 'دورود',
                'latitude' => '33.49550280',
                'longitude' => '49.06317430',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 289,
                'province_id' => 26,
                'code' => 'delfan',
                'name' => 'دلفان',
                'latitude' => '33.50340140',
                'longitude' => '48.35758360',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 290,
                'province_id' => 26,
                'code' => 'selseleh',
                'name' => 'سلسله',
                'latitude' => '32.04577600',
                'longitude' => '34.75163900',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 291,
                'province_id' => 26,
                'code' => 'kohdasht',
                'name' => 'کوهدشت',
                'latitude' => '33.53500000',
                'longitude' => '47.60611100',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 292,
                'province_id' => 26,
                'code' => 'alshter',
                'name' => 'الشتر',
                'latitude' => '33.86398880',
                'longitude' => '48.26423870',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 293,
                'province_id' => 26,
                'code' => 'nurabad',
                'name' => 'نورآباد',
                'latitude' => '30.11416700',
                'longitude' => '51.52166700',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 294,
                'province_id' => 27,
                'code' => 'amol',
                'name' => 'آمل',
                'latitude' => '36.46972200',
                'longitude' => '52.35083300',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 295,
                'province_id' => 27,
                'code' => 'babol',
                'name' => 'بابل',
                'latitude' => '32.46819100',
                'longitude' => '44.55019350',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 296,
                'province_id' => 27,
                'code' => 'babolsar',
                'name' => 'بابلسر',
                'latitude' => '36.70250000',
                'longitude' => '52.65750000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 297,
                'province_id' => 27,
                'code' => 'behshahr',
                'name' => 'بهشهر',
                'latitude' => '36.69222200',
                'longitude' => '53.55250000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 298,
                'province_id' => 27,
                'code' => 'tonekabon',
                'name' => 'تنکابن',
                'latitude' => '36.81638900',
                'longitude' => '50.87388900',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 299,
                'province_id' => 27,
                'code' => 'juybar',
                'name' => 'جویبار',
                'latitude' => '36.64111100',
                'longitude' => '52.91250000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 300,
                'province_id' => 27,
                'code' => 'chalus',
                'name' => 'چالوس',
                'latitude' => '36.64591740',
                'longitude' => '51.40697900',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 301,
                'province_id' => 27,
                'code' => 'ramsar',
                'name' => 'رامسر',
                'latitude' => '36.90305600',
                'longitude' => '50.65833300',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 302,
                'province_id' => 27,
                'code' => 'sari',
                'name' => 'ساری',
                'latitude' => '36.56333300',
                'longitude' => '53.06000000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 303,
                'province_id' => 27,
                'code' => 'savadkuh',
                'name' => 'سوادکوه',
                'latitude' => '36.30402550',
                'longitude' => '52.88524030',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 304,
                'province_id' => 27,
                'code' => 'qaem-shahr',
                'name' => 'قائم شهر',
                'latitude' => '36.46305600',
                'longitude' => '52.86000000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 305,
                'province_id' => 27,
                'code' => 'galugah',
                'name' => 'گلوگاه',
                'latitude' => '36.72722200',
                'longitude' => '53.80888900',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 306,
                'province_id' => 27,
                'code' => 'mahmoudabad',
                'name' => 'محمود آباد',
                'latitude' => '36.63194400',
                'longitude' => '52.26277800',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 307,
                'province_id' => 27,
                'code' => 'neka',
                'name' => 'نکا',
                'latitude' => '36.65083300',
                'longitude' => '53.29916700',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 308,
                'province_id' => 27,
                'code' => 'nur',
                'name' => 'نور',
                'latitude' => '50.38512460',
                'longitude' => '3.26424360',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 309,
                'province_id' => 27,
                'code' => 'nowshahr',
                'name' => 'نوشهر',
                'latitude' => '36.64888900',
                'longitude' => '51.49611100',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 310,
                'province_id' => 27,
                'code' => 'ferdows-kenar',
                'name' => 'فریدونکنار',
                'latitude' => '36.68638900',
                'longitude' => '52.52250000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 311,
                'province_id' => 28,
                'code' => 'ashtian',
                'name' => 'آشتیان',
                'latitude' => '34.52194400',
                'longitude' => '50.00611100',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 312,
                'province_id' => 28,
                'code' => 'arak',
                'name' => 'اراک',
                'latitude' => '34.09166700',
                'longitude' => '49.68916700',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 313,
                'province_id' => 28,
                'code' => 'tafresh',
                'name' => 'تفرش',
                'latitude' => '34.69194400',
                'longitude' => '50.01305600',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 314,
                'province_id' => 28,
                'code' => 'khomein',
                'name' => 'خمین',
                'latitude' => '33.64061480',
                'longitude' => '50.07711250',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 315,
                'province_id' => 28,
                'code' => 'delijan',
                'name' => 'دلیجان',
                'latitude' => '33.99055600',
                'longitude' => '50.68388900',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 316,
                'province_id' => 28,
                'code' => 'zarandiyyeh',
                'name' => 'زرندیه',
                'latitude' => '35.30699620',
                'longitude' => '50.49117920',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 317,
                'province_id' => 28,
                'code' => 'saveh',
                'name' => 'ساوه',
                'latitude' => '35.02138900',
                'longitude' => '50.35666700',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 318,
                'province_id' => 28,
                'code' => 'shazand',
                'name' => 'شازند',
                'latitude' => '33.92750000',
                'longitude' => '49.41166700',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 319,
                'province_id' => 28,
                'code' => 'komijan',
                'name' => 'کمیجان',
                'latitude' => '34.71916700',
                'longitude' => '49.32666700',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 320,
                'province_id' => 28,
                'code' => 'mahallat',
                'name' => 'محلات',
                'latitude' => '33.90857480',
                'longitude' => '50.45526160',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 321,
                'province_id' => 29,
                'code' => 'bandar-abbas',
                'name' => 'بندرعباس',
                'latitude' => '27.18322160',
                'longitude' => '56.26664550',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 322,
                'province_id' => 29,
                'code' => 'minab',
                'name' => 'میناب',
                'latitude' => '27.14666700',
                'longitude' => '57.08000000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 323,
                'province_id' => 29,
                'code' => 'bandar-lengeh',
                'name' => 'بندر لنگه',
                'latitude' => '26.55805600',
                'longitude' => '54.88055600',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 324,
                'province_id' => 29,
                'code' => 'rudan',
                'name' => 'رودان-دهبارز',
                'latitude' => '27.44083300',
                'longitude' => '57.19250000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 325,
                'province_id' => 29,
                'code' => 'jask',
                'name' => 'جاسک',
                'latitude' => '25.64388900',
                'longitude' => '57.77444400',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 326,
                'province_id' => 29,
                'code' => 'qeshm',
                'name' => 'قشم',
                'latitude' => '26.81186730',
                'longitude' => '55.89132070',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 327,
                'province_id' => 29,
                'code' => 'hajiabad',
                'name' => 'حاجی آباد',
                'latitude' => '28.30916700',
                'longitude' => '55.90166700',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 328,
                'province_id' => 29,
                'code' => 'abu-musa',
                'name' => 'ابوموسی',
                'latitude' => '25.87971060',
                'longitude' => '55.03280170',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 329,
                'province_id' => 29,
                'code' => 'bastak',
                'name' => 'بستک',
                'latitude' => '27.19916700',
                'longitude' => '54.36666700',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 330,
                'province_id' => 29,
                'code' => 'gavbandi',
                'name' => 'گاوبندی',
                'latitude' => '27.20833300',
                'longitude' => '53.03611100',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 331,
                'province_id' => 29,
                'code' => 'khamir',
                'name' => 'خمیر',
                'latitude' => '26.95222200',
                'longitude' => '55.58500000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 332,
                'province_id' => 30,
                'code' => 'asadabad',
                'name' => 'اسدآباد',
                'latitude' => '34.78250000',
                'longitude' => '48.11861100',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 333,
                'province_id' => 30,
                'code' => 'bahar',
                'name' => 'بهار',
                'latitude' => '34.90832520',
                'longitude' => '48.43927290',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 334,
                'province_id' => 30,
                'code' => 'tuyserkan',
                'name' => 'تویسرکان',
                'latitude' => '34.54805600',
                'longitude' => '48.44694400',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 335,
                'province_id' => 30,
                'code' => 'razan',
                'name' => 'رزن',
                'latitude' => '35.38666700',
                'longitude' => '49.03388900',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 336,
                'province_id' => 30,
                'code' => 'kabudarahang',
                'name' => 'کبودر آهنگ',
                'latitude' => '35.20833300',
                'longitude' => '48.72388900',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 337,
                'province_id' => 30,
                'code' => 'malayer',
                'name' => 'ملایر',
                'latitude' => '34.29694400',
                'longitude' => '48.82361100',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 338,
                'province_id' => 30,
                'code' => 'nahavand',
                'name' => 'نهاوند',
                'latitude' => '34.18861100',
                'longitude' => '48.37694400',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 339,
                'province_id' => 30,
                'code' => 'hamedan',
                'name' => 'همدان',
                'latitude' => '34.76079990',
                'longitude' => '48.39881860',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 340,
                'province_id' => 31,
                'code' => 'abarkuh',
                'name' => 'ابرکوه',
                'latitude' => '31.13040360',
                'longitude' => '53.25037360',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 341,
                'province_id' => 31,
                'code' => 'ardakan',
                'name' => 'اردکان',
                'latitude' => '32.31000000',
                'longitude' => '54.01750000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 342,
                'province_id' => 31,
                'code' => 'bafq',
                'name' => 'بافق',
                'latitude' => '31.61277800',
                'longitude' => '55.41055600',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 343,
                'province_id' => 31,
                'code' => 'taft',
                'name' => 'تفت',
                'latitude' => '27.97890740',
                'longitude' => '-97.39860410',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 344,
                'province_id' => 31,
                'code' => 'khatam',
                'name' => 'خاتم',
                'latitude' => '37.27091520',
                'longitude' => '49.59691460',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 345,
                'province_id' => 31,
                'code' => 'sadugh',
                'name' => 'صدوق',
                'latitude' => '32.02421620',
                'longitude' => '53.47703590',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 346,
                'province_id' => 31,
                'code' => 'tabas',
                'name' => 'طبس',
                'latitude' => '33.59583300',
                'longitude' => '56.92444400',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 347,
                'province_id' => 31,
                'code' => 'mehriz',
                'name' => 'مهریز',
                'latitude' => '31.59166700',
                'longitude' => '54.43166700',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 348,
                'province_id' => 31,
                'code' => 'meybod',
                'name' => 'میبد',
                'latitude' => '32.24872260',
                'longitude' => '54.00793410',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 349,
                'province_id' => 31,
                'code' => 'yazd',
                'name' => 'یزد',
                'latitude' => '32.10063870',
                'longitude' => '54.43421380',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 350,
                'province_id' => 8,
                'code' => 'gharchak',
                'name' => 'قرچک',
                'latitude' => '35.44000000',
                'longitude' => '51.57000000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 351,
                'province_id' => 8,
                'code' => 'golestan',
                'name' => 'گلستان',
                'latitude' => '35.51000000',
                'longitude' => '51.16000000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 352,
                'province_id' => 8,
                'code' => 'ghods',
                'name' => 'قدس',
                'latitude' => '35.72000000',
                'longitude' => '51.11000000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 353,
                'province_id' => 8,
                'code' => 'malard',
                'name' => 'ملارد',
                'latitude' => '35.66560000',
                'longitude' => '50.97810000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 354,
                'province_id' => 8,
                'code' => 'nasim-shahr',
                'name' => 'نسیم‌شهر',
                'latitude' => '35.55000000',
                'longitude' => '51.16670000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 355,
                'province_id' => 8,
                'code' => 'andisheh',
                'name' => 'اندیشه',
                'latitude' => '35.68333000',
                'longitude' => '51.01666000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 356,
                'province_id' => 8,
                'code' => 'salehabad',
                'name' => 'صالح‌آباد',
                'latitude' => '35.51670000',
                'longitude' => '51.18330000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 357,
                'province_id' => 8,
                'code' => 'bagher-shahr',
                'name' => 'باقرشهر',
                'latitude' => '35.50920000',
                'longitude' => '51.40220000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 358,
                'province_id' => 8,
                'code' => 'baghestan',
                'name' => 'باغستان',
                'latitude' => '35.63830000',
                'longitude' => '51.11220000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 359,
                'province_id' => 8,
                'code' => 'boomehen',
                'name' => 'بومهن',
                'latitude' => '35.73190000',
                'longitude' => '51.86470000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 360,
                'province_id' => 8,
                'code' => 'chahardangeh',
                'name' => 'چهاردانگه',
                'latitude' => '35.83690000',
                'longitude' => '50.84670000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 361,
                'province_id' => 8,
                'code' => 'pishva',
                'name' => 'پیشوا',
                'latitude' => '35.60000000',
                'longitude' => '51.90000000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 362,
                'province_id' => 8,
                'code' => 'pardis',
                'name' => 'پردیس',
                'latitude' => '35.73190000',
                'longitude' => '51.86470000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 363,
                'province_id' => 8,
                'code' => 'vahidiyeh',
                'name' => 'وحیدیه',
                'latitude' => '35.59640000',
                'longitude' => '51.04140000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 364,
                'province_id' => 8,
                'code' => 'nasirabad',
                'name' => 'نصیرآباد',
                'latitude' => '35.49530000',
                'longitude' => '51.13690000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 365,
                'province_id' => 8,
                'code' => 'ferdowsieh',
                'name' => 'فردوسیه',
                'latitude' => '35.60000000',
                'longitude' => '51.06670000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 366,
                'province_id' => 8,
                'code' => 'hasanabad',
                'name' => 'حسن‌آباد',
                'latitude' => '35.36750000',
                'longitude' => '51.23694400',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 367,
                'province_id' => 8,
                'code' => 'rudhen',
                'name' => 'رودهن',
                'latitude' => '35.73890000',
                'longitude' => '51.91190000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 368,
                'province_id' => 8,
                'code' => 'shahed-shahr',
                'name' => 'شاهدشهر',
                'latitude' => '35.57140000',
                'longitude' => '51.08390000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 369,
                'province_id' => 8,
                'code' => 'saba-shahr',
                'name' => 'صباشهر',
                'latitude' => '35.58330000',
                'longitude' => '51.11670000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 370,
                'province_id' => 8,
                'code' => 'safadasht',
                'name' => 'صفادشت',
                'latitude' => '35.68448900',
                'longitude' => '50.82465800',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 371,
                'province_id' => 8,
                'code' => 'lavasan',
                'name' => 'لواسان',
                'latitude' => '35.82430000',
                'longitude' => '51.63360000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 372,
                'province_id' => 8,
                'code' => 'absard',
                'name' => 'آبسرد',
                'latitude' => '35.65066100',
                'longitude' => '52.01376100',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 373,
                'province_id' => 8,
                'code' => 'sharifabad',
                'name' => 'شریف‌آباد',
                'latitude' => '35.42750000',
                'longitude' => '51.78530000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 374,
                'province_id' => 8,
                'code' => 'kahrizak',
                'name' => 'کهریزک',
                'latitude' => '35.51597200',
                'longitude' => '51.36221100',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 375,
                'province_id' => 8,
                'code' => 'fasham',
                'name' => 'فشم',
                'latitude' => '35.93080000',
                'longitude' => '51.52610000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 376,
                'province_id' => 8,
                'code' => 'javadiabad',
                'name' => 'جوادآباد',
                'latitude' => null,
                'longitude' => null,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 377,
                'province_id' => 8,
                'code' => 'kilan',
                'name' => 'کیلان',
                'latitude' => '35.55360000',
                'longitude' => '52.16330000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 378,
                'province_id' => 8,
                'code' => 'abali',
                'name' => 'آبعلی',
                'latitude' => '35.76310000',
                'longitude' => '51.96560000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 379,
                'province_id' => 8,
                'code' => 'arjmand',
                'name' => 'ارجمند',
                'latitude' => '35.81580000',
                'longitude' => '52.51670000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 380,
                'province_id' => 29,
                'code' => 'kish',
                'name' => 'کیش',
                'latitude' => '26.00000000',
                'longitude' => '53.00000000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 381,
                'province_id' => 29,
                'code' => 'lavan',
                'name' => 'لاوان',
                'latitude' => '26.00000000',
                'longitude' => '53.00000000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 382,
                'province_id' => 29,
                'code' => 'parsian',
                'name' => 'پارسیان',
                'latitude' => '27.00000000',
                'longitude' => '54.00000000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 383,
                'province_id' => 29,
                'code' => 'sirik',
                'name' => 'سیریک',
                'latitude' => '27.00000000',
                'longitude' => '54.00000000',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'id' => 384,
                'province_id' => 29,
                'code' => 'bashagard',
                'name' => 'بشاگرد',
                'latitude' => '27.00000000',
                'longitude' => '54.00000000',
                'created_at' => $now,
                'updated_at' => $now
            ],
        ];
    }
}
