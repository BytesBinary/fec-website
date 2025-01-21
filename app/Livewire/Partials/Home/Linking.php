<?php

namespace App\Livewire\Partials\Home;

use Livewire\Component;

class Linking extends Component
{
    public $govtCards = [];

    public function render()
    {
        $this->govtCards = [
            [
                'title' => 'প্রশাসন/কলেজ সম্পর্কিত',
                'src' => 'https://fec.ac.bd/sites/default/files/files/fec.portal.gov.bd/front_service_box/a628dde3_77c8_4fce_bb60_426b0e02ae41/2022-11-06-06-22-b5b94b90a8ec2da29d4dc4381d8a7d27.png',
                'sub_links' => [
                    ['title' => 'অধ্যক্ষ', 'url' => 'https://fec.ac.bd/site/page/ab84623f-fdc9-4465-a915-270e5673633d/%E0%A6%85%E0%A6%A7%E0%A7%8D%E0%A6%AF%E0%A6%95%E0%A7%8D%E0%A6%B7'],
                    ['title' => 'শিক্ষক-কর্মকর্তাবৃন্দ সকল', 'url' => 'https://fec.ac.bd/site/view/officer_list_category/%E0%A6%AA%E0%A7%8D%E0%A6%B0%E0%A6%B6%E0%A6%BE%E0%A6%B8%E0%A6%A8/%E0%A6%B6%E0%A6%BF%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A6%95-%E0%A6%95%E0%A6%B0%E0%A7%8D%E0%A6%AE%E0%A6%95%E0%A6%B0%E0%A7%8D%E0%A6%A4%E0%A6%BE%E0%A6%AC%E0%A7%83%E0%A6%A8%E0%A7%8D%E0%A6%A6-%E0%A6%B8%E0%A6%95%E0%A6%B2-'],
                    ['title' => 'কর্মচারীবৃন্দ সকল', 'url' => 'https://fec.ac.bd/site/view/staff_list/%E0%A6%95%E0%A6%B0%E0%A7%8D%E0%A6%AE%E0%A6%9A%E0%A6%BE%E0%A6%B0%E0%A7%80%E0%A6%AC%E0%A7%83%E0%A6%A8%E0%A7%8D%E0%A6%A6-%E0%A6%B8%E0%A6%95%E0%A6%B2-'],
                    ['title' => 'সংক্ষিপ্ত পরিচিতি', 'url' => 'https://fec.ac.bd/site/page/ebd9afbb-6f83-4254-a5e0-5ce4a395b837/%E0%A6%B8%E0%A6%82%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A6%BF%E0%A6%AA%E0%A7%8D%E0%A6%A4-%E0%A6%AA%E0%A6%B0%E0%A6%BF%E0%A6%9A%E0%A6%BF%E0%A6%A4%E0%A6%BF'],
                ],
            ],
            [
                'title' => 'সেবা প্রদান প্রতিশ্রুতি (সিটিজেন চার্টার)',
                'src' => 'https://fec.ac.bd/sites/default/files/files/fec.portal.gov.bd/front_service_box/1a2dcdcd_a3fa_4bbf_8ef7_ef2913090081/2024-01-02-16-27-422b9a6dbe1e1b352d85150cfc1a5b20.png',
                'sub_links' => [
                    ['title' => 'সিটিজেন চার্টার', 'url' => 'https://fec.ac.bd/site/office_citizen_charter/50f567f5-b91c-4267-aee0-c488799b7431/%E0%A6%B8%E0%A6%BF%E0%A6%9F%E0%A6%BF%E0%A6%9C%E0%A7%87%E0%A6%A8-%E0%A6%9A%E0%A6%BE%E0%A6%B0%E0%A7%8D%E0%A6%9F%E0%A6%BE%E0%A6%B0'],
                    ['title' => 'ফোকাল পয়েন্ট কর্মকর্তা', 'url' => 'https://fec.ac.bd/site/page/3ed546c1-aad2-470e-a48e-663f8099de3a/%E0%A6%AB%E0%A7%8B%E0%A6%95%E0%A6%BE%E0%A6%B2-%E0%A6%AA%E0%A7%9F%E0%A7%87%E0%A6%A8%E0%A7%8D%E0%A6%9F-%E0%A6%95%E0%A6%B0%E0%A7%8D%E0%A6%AE%E0%A6%95%E0%A6%B0%E0%A7%8D%E0%A6%A4%E0%A6%BE'],
                    ['title' => 'কর্ম-পরিকল্পনা ও মূল্যায়ন প্রতিবেদনসমূহ', 'url' => 'https://fec.ac.bd/site/page/5add84b5-b55b-424c-9bd7-148c3c3b5e6b/%E0%A6%95%E0%A6%B0%E0%A7%8D%E0%A6%AE-%E0%A6%AA%E0%A6%B0%E0%A6%BF%E0%A6%95%E0%A6%B2%E0%A7%8D%E0%A6%AA%E0%A6%A8%E0%A6%BE-%E0%A6%93-%E0%A6%AE%E0%A7%82%E0%A6%B2%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A7%9F%E0%A6%A8-%E0%A6%AA%E0%A7%8D%E0%A6%B0%E0%A6%A4%E0%A6%BF%E0%A6%AC%E0%A7%87%E0%A6%A6%E0%A6%A8%E0%A6%B8%E0%A6%AE%E0%A7%82%E0%A6%B9'],
                    ['title' => 'আইন/বিধি/নীতিমালা/পরিপত্র', 'url' => 'https://cabinet.gov.bd/site/page/10117079-8a4a-4743-99b6-1dd9c1230a07/%E0%A6%86%E0%A6%87%E0%A6%A8-%E0%A6%AC%E0%A6%BF%E0%A6%A7%E0%A6%BF-%E0%A6%A8%E0%A7%80%E0%A6%A4%E0%A6%BF%E0%A6%AE%E0%A6%BE%E0%A6%B2%E0%A6%BE-%E0%A6%AA%E0%A6%B0%E0%A6%BF%E0%A6%AA%E0%A6%A4%E0%A7%8D%E0%A6%B0-%E0%A6%A8%E0%A6%BF%E0%A6%B0%E0%A7%8D%E0%A6%A6%E0%A7%87%E0%A6%B6%E0%A6%BF%E0%A6%95%E0%A6%BE---%E0%A6%AA%E0%A7%8D%E0%A6%B0%E0%A6%9C%E0%A7%8D%E0%A6%9E%E0%A6%BE%E0%A6%AA%E0%A6%A8'],
                ],
            ],
            [
                'title' => 'সিভিল ইঞ্জিনিয়ারিং',
                'src' => 'https://fec.ac.bd/sites/default/files/files/fec.portal.gov.bd/front_service_box/76b6a175_eca7_49ee_b75e_524ccc568dba/2020-12-29-21-25-a81df4517661cb6156c16a5529a00add.jpg',
                'sub_links' => [
                    ['title' => 'শিক্ষক/কর্মকর্তাবৃন্দ', 'url' => 'https://fec.ac.bd/site/page/a33a65f5-ef7d-4656-8499-3de40f767df6/%E0%A6%B6%E0%A6%BF%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A6%95-%E0%A6%95%E0%A6%B0%E0%A7%8D%E0%A6%AE%E0%A6%95%E0%A6%B0%E0%A7%8D%E0%A6%A4%E0%A6%BE%E0%A6%AC%E0%A7%83%E0%A6%A8%E0%A7%8D%E0%A6%A6'],
                    ['title' => 'ছাত্র/ছাত্রীদের তথ্য', 'url' => 'https://fec.ac.bd/site/page/80335bcd-73d3-4ad3-ae5b-38d7a6205156/%E0%A6%9B%E0%A6%BE%E0%A6%A4%E0%A7%8D%E0%A6%B0-%E0%A6%9B%E0%A6%BE%E0%A6%A4%E0%A7%8D%E0%A6%B0%E0%A7%80%E0%A6%A6%E0%A7%87%E0%A6%B0-%E0%A6%A4%E0%A6%A5%E0%A7%8D%E0%A6%AF'],
                    ['title' => 'অনলাইন ক্লাশরুটিন/ক্লাশরুটিন', 'url' => 'https://fec.ac.bd/site/page/0a727444-baa1-40f2-a146-d3e4d5873b5f/%E0%A6%85%E0%A6%A8%E0%A6%B2%E0%A6%BE%E0%A6%87%E0%A6%A8-%E0%A6%95%E0%A7%8D%E0%A6%B2%E0%A6%BE%E0%A6%B6%E0%A6%B0%E0%A7%81%E0%A6%9F%E0%A6%BF%E0%A6%A8-%E0%A6%95%E0%A7%8D%E0%A6%B2%E0%A6%BE%E0%A6%B6%E0%A6%B0%E0%A7%81%E0%A6%9F%E0%A6%BF%E0%A6%A8'],
                    ['title' => 'পরীক্ষার সময়সূচি', 'url' => 'https://fec.ac.bd/site/page/1ad03fc9-bacb-44f7-ae89-9ff3faedefc7/%E0%A6%AA%E0%A6%B0%E0%A7%80%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A6%BE%E0%A6%B0-%E0%A6%B8%E0%A6%AE%E0%A7%9F%E0%A6%B8%E0%A7%82%E0%A6%9A%E0%A6%BF'],
                ],
            ],
            [
                'title' => 'ইলেকট্রিক্যাল এন্ড ইলেকট্রনিক ইঞ্জিনিয়ারিং',
                'src' => 'https://fec.ac.bd/sites/default/files/files/fec.portal.gov.bd/front_service_box/e2f2ace8_dc90_4aae_ad1d_2ae781e7dc86/2020-12-29-21-28-6dd3d21d9252fed9b8a807035d288183.jpg',
                'sub_links' => [
                    ['title' => 'শিক্ষক/কর্মকর্তাবৃন্দ', 'url' => 'https://fec.ac.bd/site/page/c82ac2c2-92ec-4cd1-b0ed-44a8851583f0/%E0%A6%B6%E0%A6%BF%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A6%95-%E0%A6%95%E0%A6%B0%E0%A7%8D%E0%A6%AE%E0%A6%95%E0%A6%B0%E0%A7%8D%E0%A6%A4%E0%A6%BE%E0%A6%AC%E0%A7%83%E0%A6%A8%E0%A7%8D%E0%A6%A6'],
                    ['title' => 'ছাত্র/ছাত্রীদের তথ্য', 'url' => 'https://fec.ac.bd/site/page/0f177a3a-f551-4ffb-b277-d5a9e9f0886b/%E0%A6%9B%E0%A6%BE%E0%A6%A4%E0%A7%8D%E0%A6%B0-%E0%A6%9B%E0%A6%BE%E0%A6%A4%E0%A7%8D%E0%A6%B0%E0%A7%80%E0%A6%A6%E0%A7%87%E0%A6%B0-%E0%A6%A4%E0%A6%A5%E0%A7%8D%E0%A6%AF'],
                    ['title' => 'অনলাইন ক্লাশরুটিন/ক্লাশরুটিন', 'url' => 'https://fec.ac.bd/site/page/86f4232e-96f7-40fb-b8bb-1ce404ecdc77/%E0%A6%85%E0%A6%A8%E0%A6%B2%E0%A6%BE%E0%A6%87%E0%A6%A8-%E0%A6%95%E0%A7%8D%E0%A6%B2%E0%A6%BE%E0%A6%B6%E0%A6%B0%E0%A7%81%E0%A6%9F%E0%A6%BF%E0%A6%A8-%E0%A6%95%E0%A7%8D%E0%A6%B2%E0%A6%BE%E0%A6%B6%E0%A6%B0%E0%A7%81%E0%A6%9F%E0%A6%BF%E0%A6%A8'],
                    ['title' => 'পরীক্ষার সময়সূচি', 'url' => 'https://fec.ac.bd/site/page/cac98d7e-61c0-46a0-93e3-a3446415a4d7/%E0%A6%AA%E0%A6%B0%E0%A7%80%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A6%BE%E0%A6%B0-%E0%A6%B8%E0%A6%AE%E0%A7%9F%E0%A6%B8%E0%A7%82%E0%A6%9A%E0%A6%BF'],
                ],
            ],
            [
                'title' => 'কম্পিউটার সায়েন্স এন্ড ইঞ্জিনিয়ারিং',
                'src' => 'https://fec.ac.bd/sites/default/files/files/fec.portal.gov.bd/front_service_box/4bf917f6_108c_4230_b651_372e76e2af31/2020-12-29-21-36-23f2bdaa7abc7b808da2c9627b1b12e8.jpg',
                'sub_links' => [
                    ['title' => 'শিক্ষক/কর্মকর্তাবৃন্দ', 'url' => 'https://fec.ac.bd/site/page/ac27f910-1d88-4009-afab-a45a05f71924/%E0%A6%B6%E0%A6%BF%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A6%95-%E0%A6%95%E0%A6%B0%E0%A7%8D%E0%A6%AE%E0%A6%95%E0%A6%B0%E0%A7%8D%E0%A6%A4%E0%A6%BE%E0%A6%AC%E0%A7%83%E0%A6%A8%E0%A7%8D%E0%A6%A6'],
                    ['title' => 'ছাত্র/ছাত্রীদের তথ্য', 'url' => 'https://fec.ac.bd/site/page/cfc741d6-267a-42ee-96fe-802466e2cfe1/%E0%A6%9B%E0%A6%BE%E0%A6%A4%E0%A7%8D%E0%A6%B0-%E0%A6%9B%E0%A6%BE%E0%A6%A4%E0%A7%8D%E0%A6%B0%E0%A7%80%E0%A6%A6%E0%A7%87%E0%A6%B0-%E0%A6%A4%E0%A6%A5%E0%A7%8D%E0%A6%AF'],
                    ['title' => 'অনলাইন ক্লাশরুটিন/ক্লাশরুটিন', 'url' => 'https://fec.ac.bd/site/page/88606c0e-395f-486d-a933-c01da405e70d/%E0%A6%85%E0%A6%A8%E0%A6%B2%E0%A6%BE%E0%A6%87%E0%A6%A8-%E0%A6%95%E0%A7%8D%E0%A6%B2%E0%A6%BE%E0%A6%B6%E0%A6%B0%E0%A7%81%E0%A6%9F%E0%A6%BF%E0%A6%A8-%E0%A6%95%E0%A7%8D%E0%A6%B2%E0%A6%BE%E0%A6%B6%E0%A6%B0%E0%A7%81%E0%A6%9F%E0%A6%BF%E0%A6%A8'],
                    ['title' => 'পরীক্ষার সময়সূচি', 'url' => 'https://fec.ac.bd/site/page/26f02a34-3f51-4a99-9c53-8b88c3a4795c/%E0%A6%AA%E0%A6%B0%E0%A7%80%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A6%BE%E0%A6%B0-%E0%A6%B8%E0%A6%AE%E0%A7%9F%E0%A6%B8%E0%A7%82%E0%A6%9A%E0%A6%BF'],
                ],
            ],
            [
                'title' => 'ভর্তি সংক্রান্ত- ১ম বর্ষ, প্রযুক্তি ইউনিট- ঢা.বি',
                'src' => 'https://fec.ac.bd/sites/default/files/files/fec.portal.gov.bd/front_service_box/42e8bcda_027b_4726_99b6_0645c8105d4d/2020-12-29-22-39-dc2303cbd0a3d4dc41a33c1c4211753f.jpg',
                'sub_links' => [
                    ['title' => 'ভর্তির বিজ্ঞপ্তি- ১ম বর্ষ', 'url' => 'https://fec.ac.bd/site/page/791a57d4-5be7-4755-b52a-a32eed57c03f/%E0%A6%AD%E0%A6%B0%E0%A7%8D%E0%A6%A4%E0%A6%BF%E0%A6%B0-%E0%A6%AC%E0%A6%BF%E0%A6%9C%E0%A7%8D%E0%A6%9E%E0%A6%AA%E0%A7%8D%E0%A6%A4%E0%A6%BF--%E0%A7%A7%E0%A6%AE-%E0%A6%AC%E0%A6%B0%E0%A7%8D%E0%A6%B7-'],
                    ['title' => 'অনলাইনে আবেদন ও বিস্তারিত- ১ম বর্ষ', 'url' => 'https://collegeadmission.eis.du.ac.bd/'],
                    ['title' => 'ভর্তি সংক্রান্ত তথ্যাদি/ফলাফল', 'url' => 'https://fec.ac.bd/site/page/fca23a7d-d71f-4f5d-ae75-c8ce28bf87b5/%E0%A6%AD%E0%A6%B0%E0%A7%8D%E0%A6%A4%E0%A6%BF-%E0%A6%B8%E0%A6%82%E0%A6%95%E0%A7%8D%E0%A6%B0%E0%A6%BE%E0%A6%A8%E0%A7%8D%E0%A6%A4-%E0%A6%A4%E0%A6%A5%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%A6%E0%A6%BF-%E0%A6%AB%E0%A6%B2%E0%A6%BE%E0%A6%AB%E0%A6%B2-'],
                    ['title' => 'ফোকাল পয়েন্ট- ভর্তি সংক্রান্ত', 'url' => 'https://fec.ac.bd/site/page/3d8c1c92-8124-45bf-8ebf-ce7691c954ed/%E0%A6%AB%E0%A7%8B%E0%A6%95%E0%A6%BE%E0%A6%B2-%E0%A6%AA%E0%A7%9F%E0%A7%87%E0%A6%A8%E0%A7%8D%E0%A6%9F--%E0%A6%AD%E0%A6%B0%E0%A7%8D%E0%A6%A4%E0%A6%BF-%E0%A6%B8%E0%A6%82%E0%A6%95%E0%A7%8D%E0%A6%B0%E0%A6%BE%E0%A6%A8%E0%A7%8D%E0%A6%A4'],
                ],
            ],
            [
                'title' => 'বার্ষিক কর্মসম্পাদন ব্যবস্থাপনা',
                'src' => 'https://fec.ac.bd/sites/default/files/files/fec.portal.gov.bd/front_service_box/e23e2f4b_f966_4b52_afb0_c74735970411/2020-12-29-22-24-1e5fa633f11fa884220e48d2df3e429b.jpg',
                'sub_links' => [
                    ['title' => 'এপিএ নির্দেশিকা/নীতিমালা', 'url' => 'https://fec.ac.bd/site/page/ce329b2f-b5e5-4d85-a452-741b1423d15d/%E0%A6%8F%E0%A6%AA%E0%A6%BF%E0%A6%8F-%E0%A6%A8%E0%A6%BF%E0%A6%B0%E0%A7%8D%E0%A6%A6%E0%A7%87%E0%A6%B6%E0%A6%BF%E0%A6%95%E0%A6%BE-%E0%A6%A8%E0%A7%80%E0%A6%A4%E0%A6%BF%E0%A6%AE%E0%A6%BE%E0%A6%B2%E0%A6%BE'],
                    ['title' => 'এপিএ কর্ম-পরিকল্পনা','url' => 'https://fec.ac.bd/site/page/caae10c2-7ce0-4ab7-812f-b556808fc85a/%E0%A6%8F%E0%A6%AA%E0%A6%BF%E0%A6%8F-%E0%A6%95%E0%A6%B0%E0%A7%8D%E0%A6%AE-%E0%A6%AA%E0%A6%B0%E0%A6%BF%E0%A6%95%E0%A6%B2%E0%A7%8D%E0%A6%AA%E0%A6%A8%E0%A6%BE'],
                    ['title' => 'ত্রৈমাসিক অর্জন প্রতিবেদনসমূহ','url' => 'https://fec.ac.bd/site/page/d2708999-a408-41a8-b407-19ea1d410c1d/%E0%A6%A4%E0%A7%8D%E0%A6%B0%E0%A7%88%E0%A6%AE%E0%A6%BE%E0%A6%B8%E0%A6%BF%E0%A6%95-%E0%A6%85%E0%A6%B0%E0%A7%8D%E0%A6%9C%E0%A6%A8-%E0%A6%AA%E0%A7%8D%E0%A6%B0%E0%A6%A4%E0%A6%BF%E0%A6%AC%E0%A7%87%E0%A6%A6%E0%A6%A8%E0%A6%B8%E0%A6%AE%E0%A7%82%E0%A6%B9'],
                    ['title' => 'এপিএ ফোকাল পয়েন্ট কর্মকর্তা','url' => 'https://fec.ac.bd/site/page/5f589316-0269-437b-b49e-71089555ffa2/%E0%A6%8F%E0%A6%AA%E0%A6%BF%E0%A6%8F-%E0%A6%AB%E0%A7%8B%E0%A6%95%E0%A6%BE%E0%A6%B2-%E0%A6%AA%E0%A7%9F%E0%A7%87%E0%A6%A8%E0%A7%8D%E0%A6%9F-%E0%A6%95%E0%A6%B0%E0%A7%8D%E0%A6%AE%E0%A6%95%E0%A6%B0%E0%A7%8D%E0%A6%A4%E0%A6%BE'],
                ],
            ],
            [
                'title' => 'শুদ্ধাচার',
                'src' => 'https://fec.ac.bd/sites/default/files/files/fec.portal.gov.bd/front_service_box/dbc88eee_af29_42a1_8c8f_e27c9de22dff/2020-12-29-22-28-da592ff51c1de24d7a69914bff84fbb3.png',
                'sub_links' => [
                    ['title' => 'জাতীয় শুদ্ধাচার কৌশল','url' => 'https://fec.ac.bd/site/page/b65487d0-d023-4f35-a4a8-c44cbfa87164/%E0%A6%9C%E0%A6%BE%E0%A6%A4%E0%A7%80%E0%A7%9F-%E0%A6%B6%E0%A7%81%E0%A6%A6%E0%A7%8D%E0%A6%A7%E0%A6%BE%E0%A6%9A%E0%A6%BE%E0%A6%B0-%E0%A6%95%E0%A7%8C%E0%A6%B6%E0%A6%B2'],
                    ['title' => 'কর্ম-পরিকল্পনাসমূহ','url' => 'https://fec.ac.bd/site/page/4625c053-db24-448c-b4e2-373f122ddf65/%E0%A6%95%E0%A6%B0%E0%A7%8D%E0%A6%AE-%E0%A6%AA%E0%A6%B0%E0%A6%BF%E0%A6%95%E0%A6%B2%E0%A7%8D%E0%A6%AA%E0%A6%A8%E0%A6%BE%E0%A6%B8%E0%A6%AE%E0%A7%82%E0%A6%B9',],
                    ['title' => 'শুদ্ধাচার কৌশল কমিটিসমূহ','url' => 'https://fec.ac.bd/site/page/8ec2efa2-de0a-491d-aa77-b65001fbb724/%E0%A6%B6%E0%A7%81%E0%A6%A6%E0%A7%8D%E0%A6%A7%E0%A6%BE%E0%A6%9A%E0%A6%BE%E0%A6%B0-%E0%A6%95%E0%A7%8C%E0%A6%B6%E0%A6%B2-%E0%A6%95%E0%A6%AE%E0%A6%BF%E0%A6%9F%E0%A6%BF%E0%A6%B8%E0%A6%AE%E0%A7%82%E0%A6%B9',],
                    ['title' => 'ত্রৈমাসিক প্রতিবেদনসমূহ','url' => 'https://fec.ac.bd/site/page/b42030c9-a1d9-43cb-9d62-cdcfae125492/%E0%A6%A4%E0%A7%8D%E0%A6%B0%E0%A7%88%E0%A6%AE%E0%A6%BE%E0%A6%B8%E0%A6%BF%E0%A6%95-%E0%A6%AA%E0%A7%8D%E0%A6%B0%E0%A6%A4%E0%A6%BF%E0%A6%AC%E0%A7%87%E0%A6%A6%E0%A6%A8%E0%A6%B8%E0%A6%AE%E0%A7%82%E0%A6%B9']
                ],
            ],
            [
                'title' => 'ডিজিটাইজেশন ও উদ্ভাবন কার্যক্রম',
                'src' => 'https://fec.ac.bd/sites/default/files/files/fec.portal.gov.bd/front_service_box/8177b486_64e8_4744_ab5a_4e65ebb80288/2021-05-31-16-19-9c630141b7c402d8f8b42060360265d6.png',
                'sub_links' => [
                    ['title' => 'বার্ষিক উদ্ভাবন কর্মপরিকল্পনা','url' => 'https://fec.ac.bd/site/page/373171f0-f409-42a3-907c-2d80e65908fd/%E0%A6%AC%E0%A6%BE%E0%A6%B0%E0%A7%8D%E0%A6%B7%E0%A6%BF%E0%A6%95-%E0%A6%89%E0%A6%A6%E0%A7%8D%E0%A6%AD%E0%A6%BE%E0%A6%AC%E0%A6%A8-%E0%A6%95%E0%A6%B0%E0%A7%8D%E0%A6%AE%E0%A6%AA%E0%A6%B0%E0%A6%BF%E0%A6%95%E0%A6%B2%E0%A7%8D%E0%A6%AA%E0%A6%A8%E0%A6%BE'],
                    ['title' => 'উদ্ভাবনী কার্যক্রমের অগ্রগতি প্রতিবেদনসমূহ', 'url' => 'https://fec.ac.bd/site/page/43a19e85-148c-43b3-b7f4-a8108f77cfa1/%E0%A6%89%E0%A6%A6%E0%A7%8D%E0%A6%AD%E0%A6%BE%E0%A6%AC%E0%A6%A8%E0%A7%80-%E0%A6%95%E0%A6%BE%E0%A6%B0%E0%A7%8D%E0%A6%AF%E0%A6%95%E0%A7%8D%E0%A6%B0%E0%A6%AE%E0%A7%87%E0%A6%B0-%E0%A6%85%E0%A6%97%E0%A7%8D%E0%A6%B0%E0%A6%97%E0%A6%A4%E0%A6%BF-%E0%A6%AA%E0%A7%8D%E0%A6%B0%E0%A6%A4%E0%A6%BF%E0%A6%AC%E0%A7%87%E0%A6%A6%E0%A6%A8%E0%A6%B8%E0%A6%AE%E0%A7%82%E0%A6%B9'],
                    ['title' => 'ছাত্র-ছাত্রীদের উদ্ভাবনী প্রজেক্টসমূহ', 'url' => 'https://www.youtube.com/channel/UCAcokm1IWMtk09AoiWMI8dw'],
                    ['title' => 'ইনোভেশন টিম' , 'url' => 'https://fec.ac.bd/site/page/f9565d78-0961-4821-84e4-b5be328c1318/%E0%A6%87%E0%A6%A8%E0%A7%8B%E0%A6%AD%E0%A7%87%E0%A6%B6%E0%A6%A8-%E0%A6%9F%E0%A6%BF%E0%A6%AE']

                ],
            ],
            [
                'title' => 'তথ্য অধিকার',
                'src' => 'https://fec.ac.bd/sites/default/files/files/fec.portal.gov.bd/front_service_box/50055c36_06d6_4992_a960_a73e0f1bdbca/2021-06-25-16-49-ac95f9ed03293a8ed97850117e5dfea1.png',
                'sub_links' => [
                    ['title' => 'তথ্য প্রদানকারী কর্মকর্তা','url' => 'https://fec.ac.bd/site/page/017c96b9-e5d5-4eeb-a0ae-23f9bae6da4a/%E0%A6%A4%E0%A6%A5%E0%A7%8D%E0%A6%AF-%E0%A6%AA%E0%A7%8D%E0%A6%B0%E0%A6%A6%E0%A6%BE%E0%A6%A8%E0%A6%95%E0%A6%BE%E0%A6%B0%E0%A7%80-%E0%A6%95%E0%A6%B0%E0%A7%8D%E0%A6%AE%E0%A6%95%E0%A6%B0%E0%A7%8D%E0%A6%A4%E0%A6%BE'],
                    ['title'=>'তথ্য প্রাপ্তির ফরম ও আইন','url'=> 'https://fec.ac.bd/site/page/e6dd8eea-9b17-4fa4-b62c-e3301f0cca2f/%E0%A6%A4%E0%A6%A5%E0%A7%8D%E0%A6%AF-%E0%A6%AA%E0%A7%8D%E0%A6%B0%E0%A6%BE%E0%A6%AA%E0%A7%8D%E0%A6%A4%E0%A6%BF%E0%A6%B0-%E0%A6%AB%E0%A6%B0%E0%A6%AE-%E0%A6%93-%E0%A6%86%E0%A6%87%E0%A6%A8'],
                    ['title'=> 'তথ্য অধিকার বিষয়ে কর্মপরিকল্পনা', 'url' => 'https://fec.ac.bd/site/page/c4854763-c0f1-4a12-99b1-07cd3246671b/%E0%A6%A4%E0%A6%A5%E0%A7%8D%E0%A6%AF-%E0%A6%85%E0%A6%A7%E0%A6%BF%E0%A6%95%E0%A6%BE%E0%A6%B0-%E0%A6%AC%E0%A6%BF%E0%A6%B7%E0%A7%9F%E0%A7%87-%E0%A6%95%E0%A6%B0%E0%A7%8D%E0%A6%AE%E0%A6%AA%E0%A6%B0%E0%A6%BF%E0%A6%95%E0%A6%B2%E0%A7%8D%E0%A6%AA%E0%A6%A8%E0%A6%BE'],
                    ['title'=>'তথ্য অধিকার কর্মপরিকল্পনার অগ্রগতি প্রতিবেদনসমূহ','url'=>'https://fec.ac.bd/site/page/8a56c761-37a8-4dd2-8ab4-1665e6f3a6e4/%E0%A6%A4%E0%A6%A5%E0%A7%8D%E0%A6%AF-%E0%A6%85%E0%A6%A7%E0%A6%BF%E0%A6%95%E0%A6%BE%E0%A6%B0-%E0%A6%95%E0%A6%B0%E0%A7%8D%E0%A6%AE%E0%A6%AA%E0%A6%B0%E0%A6%BF%E0%A6%95%E0%A6%B2%E0%A7%8D%E0%A6%AA%E0%A6%A8%E0%A6%BE%E0%A6%B0-%E0%A6%85%E0%A6%97%E0%A7%8D%E0%A6%B0%E0%A6%97%E0%A6%A4%E0%A6%BF--%E0%A6%AA%E0%A7%8D%E0%A6%B0%E0%A6%A4%E0%A6%BF%E0%A6%AC%E0%A7%87%E0%A6%A6%E0%A6%A8%E0%A6%B8%E0%A6%AE%E0%A7%82%E0%A6%B9']

                ],
            ],
            [
                'title' => 'অভিযোগ প্রতিকার ব্যবস্থাপনা',
                'src' => 'https://fec.ac.bd/sites/default/files/files/fec.portal.gov.bd/front_service_box/cb35d41d_734b_41b7_a06b_477eb95a645e/2021-06-27-18-25-fa73b404a8af9865a51d274608bd158e.jpg',
                'sub_links' => [
                    ['title' => 'ফোকাল পয়েন্ট কর্মকর্তা- জিআরএস','url' => 'https://fec.ac.bd/site/page/acdae225-1f94-4489-98fc-d9f7c945d72a/%E0%A6%AB%E0%A7%8B%E0%A6%95%E0%A6%BE%E0%A6%B2-%E0%A6%AA%E0%A7%9F%E0%A7%87%E0%A6%A8%E0%A7%8D%E0%A6%9F-%E0%A6%95%E0%A6%B0%E0%A7%8D%E0%A6%AE%E0%A6%95%E0%A6%B0%E0%A7%8D%E0%A6%A4%E0%A6%BE--%E0%A6%9C%E0%A6%BF%E0%A6%86%E0%A6%B0%E0%A6%8F%E0%A6%B8'],
                    ['title' => 'তথ্য প্রাপ্তির ফরম ও আইন','url'=>'https://fec.portal.gov.bd/site/page/d8bf403f-33a5-4427-9940-a88f9bfd5cb9'],
                    ['title' => 'তথ্য অধিকার বিষয়ে কর্মপরিকল্পনা', 'url' => 'https://fec.ac.bd/site/page/84ea5f89-0e91-4faf-bef3-c4a057e85cb5/%E0%A6%B8%E0%A6%B0%E0%A6%BE%E0%A6%B8%E0%A6%B0%E0%A6%BF-%E0%A6%85%E0%A6%AD%E0%A6%BF%E0%A6%AF%E0%A7%8B%E0%A6%97-%E0%A6%A6%E0%A6%BE%E0%A6%96%E0%A6%BF%E0%A6%B2'],
                    ['title' => 'তথ্য অধিকার কর্মপরিকল্পনার অগ্রগতি প্রতিবেদনসমূহ', 'url' => 'https://fec.ac.bd/site/page/5124482a-81d6-486a-8f11-fa1d1eb347d3/%E0%A6%85%E0%A6%AD%E0%A6%BF%E0%A6%AF%E0%A7%8B%E0%A6%97-%E0%A6%AC%E0%A6%95%E0%A7%8D%E0%A6%B8-']

                ],
            ],
            [
                'title' => 'জবপ্লেসমেন্ট সেল',
                'src' => 'https://fec.ac.bd/sites/default/files/files/fec.portal.gov.bd/front_service_box/7a31036b_abf6_4617_84a6_1d4bb7475c6c/2021-06-07-15-50-7634ae0d9274eec639e6b336edb4ead3.png',
                'sub_links' => [
                    ['title' => 'জবপ্লেসমেন্ট সেল সম্পর্কিত','url' => 'https://fec.ac.bd/site/page/8c0c1cd0-8627-43a0-838d-823a3d940039/%E0%A6%9C%E0%A6%AC%E0%A6%AA%E0%A7%8D%E0%A6%B2%E0%A7%87%E0%A6%B8%E0%A6%AE%E0%A7%87%E0%A6%A8%E0%A7%8D%E0%A6%9F-%E0%A6%B8%E0%A7%87%E0%A6%B2-%E0%A6%B8%E0%A6%AE%E0%A7%8D%E0%A6%AA%E0%A6%B0%E0%A7%8D%E0%A6%95%E0%A6%BF%E0%A6%A4'],

                    ['title' => 'চাকুরীরত শিক্ষার্থীদের তালিকা', 'url' => 'https://fec.ac.bd/site/page/e95cf92f-b6ec-4476-8bb1-842f860ef6c8/%E0%A6%9A%E0%A6%BE%E0%A6%95%E0%A7%81%E0%A6%B0%E0%A7%80%E0%A6%B0%E0%A6%A4-%E0%A6%B6%E0%A6%BF%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A6%BE%E0%A6%B0%E0%A7%8D%E0%A6%A5%E0%A7%80%E0%A6%A6%E0%A7%87%E0%A6%B0-%E0%A6%A4%E0%A6%BE%E0%A6%B2%E0%A6%BF%E0%A6%95%E0%A6%BE'],
                    ['title' => 'ফোকাল পয়েন্ট কর্মকর্তা','url'=> 'https://fec.ac.bd/site/page/88414983-c43e-447f-86be-c68d95fabe28/%E0%A6%AB%E0%A7%8B%E0%A6%95%E0%A6%BE%E0%A6%B2-%E0%A6%AA%E0%A7%9F%E0%A7%87%E0%A6%A8%E0%A7%8D%E0%A6%9F-%E0%A6%95%E0%A6%B0%E0%A7%8D%E0%A6%AE%E0%A6%95%E0%A6%B0%E0%A7%8D%E0%A6%A4%E0%A6%BE'],
                    ['title' => 'চাকুরীরত শিক্ষার্থীদের তথ্য সংগ্রহ/নিবন্ধন', 'url' => 'https://fec.ac.bd/']

                ],
            ],
            [
                'title' => 'NOC/অফিস আদেশ/ফর্মসমূহ',
                'src' => 'https://fec.ac.bd/sites/default/files/files/fec.portal.gov.bd/front_service_box/a3c22609_711c_4687_965f_f5eb53378725/2020-12-29-22-49-2da0c7c672d424c5aed6a26d06180152.jpg',
                'sub_links' => [
                    ['title' => 'অনাপত্তি সনদ(NOC)','url' => 'https://fec.ac.bd/site/page/6fd89ca8-2658-4c28-aa34-aba6c9dca37a/%E0%A6%85%E0%A6%A8%E0%A6%BE%E0%A6%AA%E0%A6%A4%E0%A7%8D%E0%A6%A4%E0%A6%BF-%E0%A6%B8%E0%A6%A8%E0%A6%A6(NOC)'],
                    ['title' => 'অফিস আদেশ', 'url' => 'https://fec.ac.bd/site/page/0f690718-532b-48ad-9671-2285269f95fc/%E0%A6%85%E0%A6%AB%E0%A6%BF%E0%A6%B8-%E0%A6%86%E0%A6%A6%E0%A7%87%E0%A6%B6'],
                    ['title'=> 'ছাত্রছাত্রী সম্পর্কিত ফর্ম', 'url' => 'https://fec.ac.bd/site/page/80c55832-5d2c-4c42-99b6-0ec6b6a3455c/%E0%A6%9B%E0%A6%BE%E0%A6%A4%E0%A7%8D%E0%A6%B0%E0%A6%9B%E0%A6%BE%E0%A6%A4%E0%A7%8D%E0%A6%B0%E0%A7%80-%E0%A6%B8%E0%A6%AE%E0%A7%8D%E0%A6%AA%E0%A6%B0%E0%A7%8D%E0%A6%95%E0%A6%BF%E0%A6%A4-%E0%A6%AB%E0%A6%B0%E0%A7%8D%E0%A6%AE'],
                    ['title' => 'সরকারী নির্দেশনা/ফর্ম/গেজেট','url'=> 'https://fec.ac.bd/site/page/a202c393-b89e-4cfd-b8dc-fbb58557316c/%E0%A6%B8%E0%A6%B0%E0%A6%95%E0%A6%BE%E0%A6%B0%E0%A7%80-%E0%A6%A8%E0%A6%BF%E0%A6%B0%E0%A7%8D%E0%A6%A6%E0%A7%87%E0%A6%B6%E0%A6%A8%E0%A6%BE-%E0%A6%AB%E0%A6%B0%E0%A7%8D%E0%A6%AE-%E0%A6%97%E0%A7%87%E0%A6%9C%E0%A7%87%E0%A6%9F']

                ],
            ],
            [
                'title' => 'ই-টেন্ডার',
                'src' => 'https://fec.ac.bd/sites/default/files/files/fec.portal.gov.bd/front_service_box/41dca2f0_379f_403f_97db_4039cf59004e/2021-06-27-16-26-a9d2e54d25548a577943bdf90c9d01f6.png',
                'sub_links' => [
                    ['title' => 'দরপত্র বিজ্ঞপ্তি/নোটিশ ও প্রকিউরমেন্ট বিধিমালা, আইন','url' => 'https://fec.ac.bd/site/page/59f40673-76ff-4412-b8d8-95891fd47134/%E0%A6%A6%E0%A6%B0%E0%A6%AA%E0%A6%A4%E0%A7%8D%E0%A6%B0-%E0%A6%AC%E0%A6%BF%E0%A6%9C%E0%A7%8D%E0%A6%9E%E0%A6%AA%E0%A7%8D%E0%A6%A4%E0%A6%BF-%E0%A6%A8%E0%A7%8B%E0%A6%9F%E0%A6%BF%E0%A6%B6-%E0%A6%93-%E0%A6%AA%E0%A7%8D%E0%A6%B0%E0%A6%95%E0%A6%BF%E0%A6%89%E0%A6%B0%E0%A6%AE%E0%A7%87%E0%A6%A8%E0%A7%8D%E0%A6%9F-%E0%A6%AC%E0%A6%BF%E0%A6%A7%E0%A6%BF%E0%A6%AE%E0%A6%BE%E0%A6%B2%E0%A6%BE,-%E0%A6%86%E0%A6%87%E0%A6%A8-'],
                    ['title'=>'ক্রয় পরিকল্পনা, ফইক: ২০২৩-২৪','url'=>'https://fec.ac.bd/site/page/a1d592a0-40e4-4d2e-a940-c78686b9f43f/%E0%A6%95%E0%A7%8D%E0%A6%B0%E0%A7%9F-%E0%A6%AA%E0%A6%B0%E0%A6%BF%E0%A6%95%E0%A6%B2%E0%A7%8D%E0%A6%AA%E0%A6%A8%E0%A6%BE,-%E0%A6%AB%E0%A6%87%E0%A6%95:-%E0%A7%A8%E0%A7%A6%E0%A7%A8%E0%A7%A9-%E0%A7%A8%E0%A7%AA'],
                    ['title'=>'ই-জিপি পোর্টাল','url'=>'https://www.eprocure.gov.bd/'],
                    ['title'=>'ওয়েবমেইল ই-জিপি সম্পর্কিত','url' => 'https://mail.techedu.gov.bd/']

                ],
            ],
            [
                'title' => 'বিবিধ/সামাজিক মাধ্যম',
                'src' => 'https://fec.ac.bd/sites/default/files/files/fec.portal.gov.bd/front_service_box/c06da106_f993_480f_800a_b6891ec23230/2021-05-31-15-03-9a64a0b1440670bd902ed72680aeb8bc.png',
                'sub_links' => [
                    ['title' => 'ফোকাল পয়েন্ট তালিকা','url' => 'https://fec.ac.bd/site/page/3ed546c1-aad2-470e-a48e-663f8099de3a/%E0%A6%AB%E0%A7%8B%E0%A6%95%E0%A6%BE%E0%A6%B2-%E0%A6%AA%E0%A7%9F%E0%A7%87%E0%A6%A8%E0%A7%8D%E0%A6%9F-%E0%A6%A4%E0%A6%BE%E0%A6%B2%E0%A6%BF%E0%A6%95%E0%A6%BE'],
                    ['title'=>'উত্তম চর্চা','url'=>'https://fec.ac.bd/site/page/e901ce92-170e-4ee6-a055-6501995caa61/%E0%A6%89%E0%A6%A4%E0%A7%8D%E0%A6%A4%E0%A6%AE-%E0%A6%9A%E0%A6%B0%E0%A7%8D%E0%A6%9A%E0%A6%BE'],
                    ['title'=>'অফিসিয়াল ফেসবুক পেজ','url'=>'https://www.facebook.com/FECOfficial.2010'],
                    ['title'=>'অফিসিয়াল ইউটিউব চ্যানেল','url'=>'https://www.youtube.com/channel/UCAcokm1IWMtk09AoiWMI8dw']

                ],
            ],

        ];
        return view('livewire.partials.home.linking', ['govtCards' => $this->govtCards]);
    }
}
