<footer class="bg-gray-800 text-white p-16 bg-gradient-to-b from-gray-600 via-slate-800 to-gray-800">
    <div class="container mx-auto grid grid-cols-1 lg:grid-cols-3 gap-6">
        <div>
            <img src="{{ asset('images/FEClogo.png') }}" alt="" class="max-h-24 max-w-24 mx-auto">
            <p class="text-center mt-8">Dr. Kaji Motaher Hossain Road <br>
                Komolapur, Baitul Aman, Faridpur - 7800</p>
            <div class="mt-4 flex justify-center space-x-4">
                <a href=""><img src="{{asset('images/facebook.png')}}" alt="Facebook Icon" class="w-6 h-6"></a>
                <a href="#"><img src="{{asset('images/email.png')}}" alt="Twitter Icon" class="w-6 h-6"></a>
                <a href="#"><img src="{{asset('images/youtube.png')}}" alt="YouTube Icon" class="w-6 h-6"></a>
            </div>
        </div>


        <div>
            <h3 class="font-bold mb-3 text-xl text-center">QUICK LINKS</h3>
            <div class="border border-gray-600 w-1/4 mx-auto"></div>
            <ul class="grid grid-cols-3 gap-2 text-center mt-8">
                <li><a href="#" class="hover:text-gray-400 transition">Accreditation</a></li>
                <li><a href="#" class="hover:text-gray-400 transition">Calendar</a></li>
                <li><a href="#" class="hover:text-gray-400 transition">Campus Directories</a></li>
                <li><a href="#" class="hover:text-gray-400 transition">Help Desk</a></li>
                <li><a href="#" class="hover:text-gray-400 transition">Library</a></li>
                <li><a href="#" class="hover:text-gray-400 transition">Email</a></li>
            </ul>
        </div>

        <div>
            <h3 class="font-bold mb-3 text-xl text-center">ABOUT US</h3>
            <div class="border border-gray-600 w-1/4 mx-auto"></div>
            <P class="text-justify mx-auto mt-10 w-60">
                Faridpur Engineering College (FEC) is a public undergraduate college in Faridpur, Bangladesh. It was established in 2010.
            </P>
        </div>


    </div>

    <div
        class="container mx-auto mt-8 flex flex-col lg:flex-row justify-between items-center border-t border-gray-600 pt-4">
        <div class="text-base text-gray-400 text-center sm:text-left flex items-center">
            <img src="{{asset('images/BytesBinary.png')}}" alt="College Logo" class="w-7 h-7 mr-2 rounded-full">
            &copy; 2024 BytesBinary. All rights reserved.
        </div>
        <div class="mt-2 sm:mt-4">
            <a href="#" class="hover:text-gray-200 transition">About Us</a> |
            <a href="#" class="hover:text-gray-200 transition">Visit Us</a> |
            <a href="#" class="hover:text-gray-200 transition">Contact Us</a> |
            <a href="#" class="hover:text-gray-200 transition"><button
                    class="bg-gray-600 text-white py-1 px-3 rounded">Apply Now</button></a>
        </div>
    </div>
</footer>
