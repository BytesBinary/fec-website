<footer class="text-white py-16 px-4 bg-deepBlue">
    <div class="hidden md:block">
        <section class="container mx-auto grid grid-cols-4 gap-6 py-8">
            <!-- Column 1 -->
            <div class="flex flex-col space-y-2 pr-6 border-r border-blue-300">
                <a href="{{ route('home') }}" class="hover:text-gray-400 transition" wire:navigate>Home</a>
                <a href="{{ route('events') }}" class="hover:text-gray-400 transition" wire:navigate>Events</a>
                <a href="{{ route('clubs') }}" class="hover:text-gray-400 transition" wire:navigate>Clubs</a>
                <a href="{{ route('admission') }}" class="hover:text-gray-400 transition" wire:navigate>Admission</a>
            </div>

            <!-- Column 2 -->
            <div class="flex flex-col space-y-2 text-end px-6 border-r border-blue-300">
                <a href="http://tmed.gov.bd/" target="_blank" class="hover:text-gray-400 transition"
                    aria-label="Technical and Madrasa Education">
                    Technical and Madrasa Education Department
                </a>
                <a href="http://www.techedu.gov.bd/" target="_blank" class="hover:text-gray-400 transition"
                    aria-label="Technical Education Directorate">
                    Directorate of Technical Education
                </a>
                <a href="http://ducmc.com/index.php" target="_blank" class="hover:text-gray-400 transition"
                    aria-label="DU Engineering Colleges">
                    DU affiliated Engineering Colleges
                </a>
                <a href="https://fec.ac.bd/site/view/photogallery/-" target="_blank"
                    class="hover:text-gray-400 transition" aria-label="Photo Gallery">
                    Photo Gallery
                </a>
            </div>

            <!-- Column 3 -->
            <div class="flex flex-col space-y-2 text-end px-6 border-r border-blue-300">
                <a href="https://ibas.finance.gov.bd/login" target="_blank" class="hover:text-gray-400 transition"
                    aria-label="IBAS++">
                    IBAS++
                </a>
                <a href="https://www.grs.gov.bd/" target="_blank" class="hover:text-gray-400 transition"
                    aria-label="GRS">
                    Grievance Redressal System
                </a>
                <a href="https://fec.ac.bd/site/page/5124482a-81d6-486a-8f11-fa1d1eb347d3/%E0%A6%85%E0%A6%AD%E0%A6%BF%E0%A6%AF%E0%A7%8B%E0%A6%97-%E0%A6%AC%E0%A6%95%E0%A7%8D%E0%A6%B8"
                    target="_blank" class="hover:text-gray-400 transition" aria-label="Complaint Box">
                    Complaint Box
                </a>
                <a href="https://fec.ac.bd/site/page/8d4d2b68-f67a-4f87-9e0e-eb2a0d29ee8d/-#" target="_blank"
                    class="hover:text-gray-400 transition" aria-label="Contact">
                    Contact
                </a>
            </div>

            <!-- Column 4 -->
            <div class="flex flex-col space-y-2 text-end pl-6">
                <a href="http://dte.gov.bd/dte/#/" target="_blank" class="hover:text-gray-400 transition"
                    aria-label="HRMIS">
                    HRMIS
                </a>
                <a href="https://mail.fec.ac.bd/" target="_blank" class="hover:text-gray-400 transition"
                    aria-label="Webmail">
                    WebMail
                </a>
                <a href="https://gmail.google.com/" target="_blank" class="hover:text-gray-400 transition"
                    aria-label="Student Webmail">
                    WebMail(Student)
                </a>
            </div>
        </section>



        <section class="container grid grid-cols-6 mx-auto mt-6 border-t border-gray-600 pt-4">
            <!-- Address and Social Links -->
            <div class="col-start-1 col-end-3 flex flex-col items-end mt-8 text-gray-400">
                <p class="text-right">
                    Dr. Kaji Motaher Hossain Road <br>
                    Komolapur, Baitul Aman, Faridpur - 7800
                </p>
                <div class="mt-4 flex items-center space-x-4">
                    <a href="https://www.facebook.com/FECOfficial.2010" aria-label="Facebook">
                        <img src="{{ asset('images/logo/facebook.svg') }}" alt="Facebook Icon" class="w-8 h-8">
                    </a>
                    <a href="#" aria-label="Email">
                        <img src="{{ asset('images/logo/email.svg') }}" alt="Email Icon" class="w-8 h-8">
                    </a>
                    <a href="https://www.youtube.com/channel/UCAcokm1IWMtk09AoiWMI8dw" aria-label="YouTube">
                        <img src="{{ asset('images/logo/youtube.svg') }}" alt="YouTube Icon" class="w-9 h-9">
                    </a>
                </div>
            </div>

            <!-- College Logo -->
            <div class="col-start-3 col-end-5 flex justify-center">
                <img src="{{ asset('images/FEClogo.png') }}" alt="FEC Logo" class="max-h-36">
            </div>

            <!-- Footer Rights -->
            <div class="col-start-5 col-end-7 flex flex-col items-center justify-center text-gray-400">
                <div class="flex items-center space-x-2">
                    <img src="{{ asset('images/BytesBinary.png') }}" alt="BytesBinary Logo" class="w-10 h-10">
                    <span class="flex-col text-start items-center">
                        Copyright &copy; 2024
                        <a href="#" class="text-red-500 hover:text-blue-500">BytesBinary</a>.
                        <br>All rights reserved.
                    </span>
                </div>
            </div>
        </section>
    </div>

    <!-- Mobile Section -->
    <div class="block md:hidden">
        <div class="grid grid-cols-2 text-center pb-8 gap-y-6">

            <!-- Column 1 -->
            <div class="flex flex-col text-start space-y-4 border-r pl-8 border-blue-300">
                <a href="{{ route('home') }}" class="hover:text-gray-400 transition" wire:navigate>Home</a>
                <a href="{{ route('events') }}" class="hover:text-gray-400 transition" wire:navigate>Events</a>
                <a href="{{ route('clubs') }}" class="hover:text-gray-400 transition" wire:navigate>Clubs</a>
                <a href="{{ route('admission') }}" class="hover:text-gray-400 transition" wire:navigate>Admission</a>
            </div>

            <!-- Column 2 -->
            <div class="flex flex-col text-start space-y-2 px-6 md:border-r border-blue-300">
                <a href="http://tmed.gov.bd/" target="_blank" class="hover:text-gray-400 transition"
                    aria-label="Technical and Madrasa Education">
                    TMED
                </a>
                <a href="http://www.techedu.gov.bd/" target="_blank" class="hover:text-gray-400 transition"
                    aria-label="Technical Education Directorate">
                    DTE
                </a>
                <a href="http://ducmc.com/index.php" target="_blank" class="hover:text-gray-400 transition"
                    aria-label="DU Engineering Colleges">
                    DU affiliated Engineering Colleges
                </a>
                <a href="https://fec.ac.bd/site/view/photogallery/-" target="_blank"
                    class="hover:text-gray-400 transition" aria-label="Photo Gallery">
                    Photo Gallery
                </a>
            </div>

        </div>


        <div class="block md:hidden ">
            <div class="grid grid-cols-2 text-center pb-4 mx-auto ">
                <hr class="mb-4">
                <hr class="mb-4">
                <div class="flex border-r border-blue-300 pl-8">
                    <ul class="grid grid-cols-1 text-left mt-3">
                        <li>
                            <a href="https://ibas.finance.gov.bd/login" target="_blank"
                                class="hover:text-gray-400 transition">
                                IBAS++
                            </a>
                        </li>
                        <li>
                            <a href="https://www.grs.gov.bd/" target="_blank" class="hover:text-gray-400 transition">
                                GRS
                            </a>
                        </li>
                        <li>
                            <a href="https://fec.ac.bd/site/page/5124482a-81d6-486a-8f11-fa1d1eb347d3/%E0%A6%85%E0%A6%AD%E0%A6%BF%E0%A6%AF%E0%A7%8B%E0%A6%97-%E0%A6%AC%E0%A6%95%E0%A7%8D%E0%A6%B8"
                                target="_blank" class="hover:text-gray-400 transition">
                                Complaint Box
                            </a>
                        </li>
                        <li>
                            <a href="https://fec.ac.bd/site/page/8d4d2b68-f67a-4f87-9e0e-eb2a0d29ee8d/-#"
                                target="_blank" class="hover:text-gray-400 transition">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
                <ul class="grid grid-cols-1 text-left mt-3 pl-6">
                    <li>
                        <a href="http://dte.gov.bd/dte/#/" target="_blank" class="hover:text-gray-400 transition">
                            HRMIS
                        </a>
                    </li>
                    <li>
                        <a href="https://mail.fec.ac.bd/" target="_blank" class="hover:text-gray-400 transition">
                            Web Mail
                        </a>
                    </li>
                    <li>
                        <a href="https://gmail.google.com/" target="_blank" class="hover:text-gray-400 transition">
                            Web Mail (Student)
                        </a>
                    </li>
                </ul>
            </div>
            <div class="container mx-auto mt-6 border-t border-gray-600 pt-4 grid grid-cols-8 gap-y-6">
                <!-- Address Section -->
                <div class="col-span-8 order-2 flex flex-col items-center text-center">
                    <p class="text-gray-400">
                        Dr. Kaji Motaher Hossain Road <br>
                        Komolapur, Baitul Aman, Faridpur - 7800
                    </p>
                    <!-- Social Links -->
                    <div class="flex justify-center items-center mt-4 space-x-4">
                        <a href="https://www.facebook.com/FECOfficial.2010" aria-label="Facebook">
                            <img src="{{ asset('images/logo/facebook.svg') }}" alt="Facebook Icon" class="w-8 h-8">
                        </a>
                        <a href="#" aria-label="Email">
                            <img src="{{ asset('images/logo/email.svg') }}" alt="Email Icon" class="w-8 h-8">
                        </a>
                        <a href="https://www.youtube.com/channel/UCAcokm1IWMtk09AoiWMI8dw" aria-label="YouTube">
                            <img src="{{ asset('images/logo/youtube.svg') }}" alt="YouTube Icon" class="w-9 h-9">
                        </a>
                    </div>
                </div>

                <!-- College Logo -->
                <div class="col-span-8 flex justify-center order-1">
                    <img src="{{ asset('images/FEClogo.png') }}" alt="FEC Logo" class="max-h-36">
                </div>

                <!-- Footer Bottom Section -->
                <div
                    class="col-span-8 order-3 flex flex-col items-center text-center text-gray-400 border-t border-gray-600 pt-6">
                    <div class="flex items-center space-x-2">
                        <img src="{{ asset('images/BytesBinary.png') }}" alt="BytesBinary Logo" class="w-10 h-10">
                        <span class="flex-col text-start items-center">
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
