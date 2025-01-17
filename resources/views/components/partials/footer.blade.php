<footer class="bg-gray-800 text-white p-16 bg-gradient-to-b from-gray-600 via-slate-800 to-gray-800">
    <div class="hidden md:block">
        <div class="container mx-auto grid grid-cols-1 lg:grid-cols-4">
            <div class="flex border-r border-x-blue-300">
                <ul class="grid grid-cols-1 text-left ml-48 mt-1 gap-1">
                    <li><a href="{{ route('home') }}" class="hover:text-gray-400 transition" wire:navigate>Home</a></li>
                    <li><a href="{{ route('events') }}" class="hover:text-gray-400 transition" wire:navigate>Events</a></li>
                    <li><a href="{{ route('clubs') }}" class="hover:text-gray-400 transition" wire:navigate>Clubs</a></li>
                    <li><a href="{{ route('admission') }}" class="hover:text-gray-400 transition" wire::navigate >Admission</a></li>
                </ul>
            </div>

            <div class="flex border-r border-x-blue-300">
                <ul class="grid grid-cols-1 text-left mt-1 ml-6">
                    <li><a href="http://tmed.gov.bd/" target="_blank" class="hover:text-gray-400 transition">কারিগরি ও মাদ্রাসা শিক্ষা বিভাগ</a></li>
                    <li><a href="http://www.techedu.gov.bd/" target="_blank" class="hover:text-gray-400 transition">কারিগরি শিক্ষা অধিদপ্তর</a></li>
                    <li><a href="http://ducmc.com/index.php" target="_blank" class="hover:text-gray-400 transition">ঢাকা বিশ্ববিদ্যালয়ের অধিভুক্ত ইঞ্জিনিয়ারিং কলেজ</a></li>
                    <li><a href="https://fec.ac.bd/site/view/photogallery/-" target="_blank" class="hover:text-gray-400 transition">ফটোগ্যালারি</a></li>
                </ul>
            </div>
            <div class="flex border-r border-x-blue-300">
                <ul class="grid grid-cols-1 text-left mt-1 ml-6">
                    <li><a href="https://ibas.finance.gov.bd/login" target="_blank" class="hover:text-gray-400 transition">আইবাস++</a></li>
                    <li><a href="https://www.grs.gov.bd/" target="_blank" class="hover:text-gray-400 transition">অভিযোগ প্রতিকার ব্যবস্থা</a></li>
                    <li><a href="https://fec.ac.bd/site/page/5124482a-81d6-486a-8f11-fa1d1eb347d3/%E0%A6%85%E0%A6%AD%E0%A6%BF%E0%A6%AF%E0%A7%8B%E0%A6%97-%E0%A6%AC%E0%A6%95%E0%A7%8D%E0%A6%B8" target="_blank" class="hover:text-gray-400 transition">অভিযোগ বক্স</a></li>
                    <li><a href="https://fec.ac.bd/site/page/8d4d2b68-f67a-4f87-9e0e-eb2a0d29ee8d/-#" target="_blank" class="hover:text-gray-400 transition">যোগাযোগ</a></li>
                </ul>
            </div>
            <div>
                <ul class="grid grid-cols-1 text-left ml-6 mt-1">
                    <li><a href="https://library-fec.ac.bd/" class="hover:text-gray-400 transition" target="_blank" >ই-কেন্দ্রীয় লাইব্রেরি</a></li>
                    <li><a href="http://dte.gov.bd/dte/#/" class="hover:text-gray-400 transition"  target="_blank" >HRMIS</a></li>
                    <li><a href="https://mail.fec.ac.bd/" class="hover:text-gray-400 transition" target="_blank" >ওয়েবমেইল</a></li>
                    <li><a href="https://gmail.google.com/" class="hover:text-gray-400 transition" target="_blank" >ওয়েবমেইল (শিক্ষার্থী)</a></li>
                </ul>
            </div>
        </div>

        <div class="container grid grid-cols-6 mx-auto mt-6 border-t border-gray-600 pt-4">
            <div class="col-start-1 col-end-3 flex flex-col items-end mt-8">
              <p class="text-gray-400 text-right">
                Dr. Kaji Motaher Hossain Road <br>
                Komolapur, Baitul Aman, Faridpur - 7800
              </p>
              <div class="mt-4 flex items-center space-x-4">
                <a href="https://www.facebook.com/FECOfficial.2010">
                  <img src="{{asset('images/logo/facebook.svg')}}" alt="Facebook Icon" class="w-8 h-8">
                </a>
                <a href="#">
                  <img src="{{asset('images/logo/email.svg')}}" alt="Email Icon" class="w-8 h-8">
                </a>
                <a href="https://www.youtube.com/channel/UCAcokm1IWMtk09AoiWMI8dw">
                  <img src="{{asset('images/logo/youtube.svg')}}" alt="YouTube Icon" class="w-9 h-9">
                </a>
              </div>
            </div>

            <div class="col-start-3 col-end-5 flex justify-center">
              <img src="{{ asset('images/FEClogo.png') }}" alt="College Logo" class="max-h-36">
            </div>

            <div class="col-start-5 col-end-8 flex flex-col items-center sm:items-baseline justify-center text-gray-400">
              <div class="flex items-center space-x-2">
                <img src="{{asset('images/BytesBinary.png')}}" alt="College Logo" class="w-5 h-5 rounded-full">
                <span>
                  Copyright &copy; 2024
                  <a href="#" class="text-red-400 hover:text-blue-500">BytesBinary</a>.
                  <br>
                  All rights reserved.
                </span>
              </div>
            </div>
        </div>
    </div>
    <div class=" block md:hidden">
        <div class="grid grid-cols-2 text-center py-8 mx-auto ">
            <div class="flex border-r border-blue-300">
                <ul class="grid grid-cols-1 text-left text-sm mt-1">
                    <li>
                        <a href="{{ route('home') }}" class="hover:text-gray-400 transition">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('events') }}" class="hover:text-gray-400 transition">
                            Events
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('clubs') }}" class="hover:text-gray-400 transition">
                            Clubs
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admission') }}" class="hover:text-gray-400 transition">
                            Admission
                        </a>
                    </li>
                </ul>
            </div>
                <ul class="grid grid-cols-1 text-left mt-1 ml-3">
                    <li>
                    <a href="http://tmed.gov.bd/" target="_blank" class="hover:text-gray-400 transition">
                        কারিগরি ও মাদ্রাসা শিক্ষা বিভাগ
                    </a>
                    </li>
                    <li>
                        <a href="http://www.techedu.gov.bd/" target="_blank" class="hover:text-gray-400 transition">
                            কারিগরি শিক্ষা অধিদপ্তর
                        </a>
                    </li>
                    <li>
                        <a href="http://ducmc.com/index.php" target="_blank" class="hover:text-gray-400 transition">
                            ঢাকা বিশ্ববিদ্যালয়ের অধিভুক্ত ইঞ্জিনিয়ারিং কলেজ
                        </a>
                    </li>
                    <li>
                        <a href="https://fec.ac.bd/site/view/photogallery/-" target="_blank" class="hover:text-gray-400 transition">
                            ফটোগ্যালারি
                        </a>
                    </li>
                </ul>
                <hr class="my-4"><hr class="my-4">
                <div class="flex border-r border-blue-300">
                    <ul class="grid grid-cols-1 text-left mt-3">
                        <li>
                            <a href="https://ibas.finance.gov.bd/login" target="_blank" class="hover:text-gray-400 transition">
                                আইবাস++
                            </a>
                        </li>
                        <li>
                            <a href="https://www.grs.gov.bd/" target="_blank" class="hover:text-gray-400 transition">
                                অভিযোগ প্রতিকার ব্যবস্থা
                            </a>
                        </li>
                        <li>
                            <a href="https://fec.ac.bd/site/page/5124482a-81d6-486a-8f11-fa1d1eb347d3/%E0%A6%85%E0%A6%AD%E0%A6%BF%E0%A6%AF%E0%A7%8B%E0%A6%97-%E0%A6%AC%E0%A6%95%E0%A7%8D%E0%A6%B8" target="_blank" class="hover:text-gray-400 transition">
                                অভিযোগ বক্স
                            </a>
                        </li>
                        <li>
                            <a href="https://fec.ac.bd/site/page/8d4d2b68-f67a-4f87-9e0e-eb2a0d29ee8d/-#" target="_blank" class="hover:text-gray-400 transition">
                                যোগাযোগ
                            </a>
                        </li>
                    </ul>
                </div>
                <ul class="grid grid-cols-1 text-left mt-3 ml-3">
                    <li>
                        <a href="https://library-fec.ac.bd/" target="_blank" class="hover:text-gray-400 transition">
                            ই-কেন্দ্রীয় লাইব্রেরি
                        </a>
                    </li>
                    <li>
                        <a href="http://dte.gov.bd/dte/#/" target="_blank" class="hover:text-gray-400 transition">
                            HRMIS
                        </a>
                    </li>
                    <li>
                        <a href="https://mail.fec.ac.bd/" target="_blank" class="hover:text-gray-400 transition">
                            ওয়েবমেইল
                        </a>
                    </li>
                    <li>
                        <a href="https://gmail.google.com/" target="_blank" class="hover:text-gray-400 transition">
                            ওয়েবমেইল (শিক্ষার্থী)
                        </a>
                    </li>
                </ul>
        </div>
        <div class="container grid grid-cols-8 mx-auto mt-6 border-t border-gray-600 pt-4">
            <div class="col-span-8 order-2 flex flex-col items-start mt-8">
              <p class="text-gray-400 text-center">
                Dr. Kaji Motaher Hossain Road <br>
                Komolapur, Baitul Aman, Faridpur - 7800
              </p>
              <div class="flex justify-center items-center mt-4 space-x-4">
                <a href="https://www.facebook.com/FECOfficial.2010">
                  <img src="{{asset('images/logo/facebook.svg')}}" alt="Facebook Icon" class="w-8 h-8">
                </a>
                <a href="#">
                  <img src="{{asset('images/logo/email.svg')}}" alt="Email Icon" class="w-8 h-8">
                </a>
                <a href="https://www.youtube.com/channel/UCAcokm1IWMtk09AoiWMI8dw">
                  <img src="{{asset('images/logo/youtube.svg')}}" alt="YouTube Icon" class="w-9 h-9">
                </a>
              </div>
            </div>

            <div class="col-span-8 flex justify-center">
              <img src="{{ asset('images/FEClogo.png') }}" alt="College Logo" class="max-h-36 order-1">
            </div>

            <div class="col-span-8 order-3 flex flex-col items-center justify-center text-gray-400 mx-auto mt-6 border-t border-gray-600 pt-4">
              <div class="flex items-center space-x-2">
                <img src="{{asset('images/BytesBinary.png')}}" alt="College Logo" class="w-5 h-5 rounded-full">
                <span>
                  Copyright &copy; 2024
                  <a href="#" class="text-red-400 hover:text-blue-500">BytesBinary</a>.
                  <br>
                  All rights reserved.
                </span>
              </div>
            </div>
        </div>
    </div>

</footer>
