<html>
    <head>
        <title>Verification Pending</title>
    </head>
    @vite(['resources/css/app.css'])
    <body>
        <div class="flex items-center justify-center min-h-screen bg-gray-100">
            <div class="max-w-md w-full bg-white shadow-lg rounded-lg p-6">
                <div class="text-center">
                    <svg
                        class="mx-auto h-16 w-16 text-yellow-400"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M13 16h-1v-4h-1m0-4h.01M12 18v2m0-16v2m4.22 1.78l1.42-1.42m-1.42 1.42L16.6 3.4m1.42 1.42L21 3m-4.78 2.78L19.4 7.6M18 10v4m0 4h.01m-6-6h1v4h-1M9 16H8v-4h1m0-4h.01M9 18v2m0-16V2m-4.22 1.78L3.4 3.4m1.42 1.42L3 3m0 4.78L2 6.6m1.42 1.42L3 10v4m0 4h-.01M6 10v4m0 4H5m-1-2V2M9 18v2m0-16V2M3 18v2m0-16V2m15 16v2m0-16V2">
                        </path>
                    </svg>
                    <h2 class="mt-4 text-2xl font-bold text-gray-800">Pending Admin Approval</h2>
                    <p class="mt-2 text-gray-600">
                        Your account is pending for admin approval. Admin will manually verify your account and then you will able to login to the panel.
                    </p>
                    <form method="POST" action="{{ route('verification.logout') }}" class="mt-6">
                        @csrf
                        <button
                            type="submit"
                            class="w-full bg-red-500 hover:bg-red-600 text-white font-medium text-sm px-6 py-3 rounded-lg shadow-md transition">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html
