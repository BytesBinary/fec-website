<section class="bg-gray-100 p-8 bangla-font">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- First Card: প্রশাসন/কলেজ সম্পর্কিত -->
        @php $name = config('govt-link.administration'); @endphp
        <x-govt-link-card
            logo="https://fec.ac.bd/sites/default/files/files/fec.portal.gov.bd/front_service_box/a628dde3_77c8_4fce_bb60_426b0e02ae41/2022-11-06-06-22-b5b94b90a8ec2da29d4dc4381d8a7d27.png"
            headline="প্রশাসন/কলেজ সম্পর্কিত"
            :menus = "$name"
            />

        <!-- Second Card: সেবা প্রদান প্রতিশ্রুতি -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <!-- Card Content -->
            <div class="flex items-center space-x-4">
                <!-- Image -->
                <img src="https://fec.ac.bd/sites/default/files/files/fec.portal.gov.bd/front_service_box/1a2dcdcd_a3fa_4bbf_8ef7_ef2913090081/2024-01-02-16-27-422b9a6dbe1e1b352d85150cfc1a5b20.png" alt="Service" class="w-24 h-24">
                <!-- Text Section -->
                <div>
                    <h2 class="text-xl font-bold mb-2">সেবা প্রদান প্রতিশ্রুতি (সিটিজেন চার্টার)</h2>
                    <ul class="list-none">
                        <li class="text-green-600 font-semibold">সিটিজেন চার্টার</li>
                        <li class="text-gray-600">ফোকাল পয়েন্ট কর্মকর্তা</li>
                        <li class="text-gray-600">কর্ম-পরিকল্পনা ও মূল্যায়ন প্রতিবেদনসমূহ</li>
                        <li class="text-gray-600">আইন/বিধি/নীতিমালা/পরিপত্র</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>

