<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    {{--
    <script src="https://cdn.tailwindcss.com"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="{{ asset('js/alerts.js') }}"></script>
    <script src="{{ asset('js/delete.js') }}"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Kasir App</title>

    <style>
        .separator2.hidden-xs {
            display: inline-block;
            width: 1px;
            height: 46px;
            /* Sesuaikan tinggi sesuai kebutuhan */
            margin-left: 10px;
            /* Sesuaikan margin sesuai kebutuhan */
            background-color: #3b3b3b;
            /* Ganti dengan warna yang Anda inginkan */
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-800 min-h-screen flex flex-col">

    <x:navbar></x:navbar>

    <main class="container mx-auto mt-10 flex-grow px-4">

        @yield('content')
        <x-alerts.success :message="session('success')" />
        <x-alerts.error :message="session('error')" />
        <x-alerts.warning :message="session('warning')" />
        <x-alerts.welcome :message="session('welcome')" />

    </main>

    <x-info></x-info>

    <x:footer></x:footer>

    <script>
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
        function setupAllDropdowns() {
            const dropdowns = [
                { buttonId: 'notificationButton', dropdownId: 'notificationDropdown' },
                { buttonId: 'messageButton', dropdownId: 'messageDropdown' },
                { buttonId: 'mobileNotificationButton', dropdownId: 'notificationDropdownMobile' },
                { buttonId: 'mobileMessageButton', dropdownId: 'messageDropdownMobile' }
            ];

            dropdowns.forEach(({ buttonId, dropdownId }) => {
                const button = document.getElementById(buttonId);
                const dropdown = document.getElementById(dropdownId);

                if (button && dropdown) {
                    button.addEventListener('click', (e) => {
                        e.stopPropagation();

                        dropdowns.forEach(d => {
                            const otherDropdown = document.getElementById(d.dropdownId);
                            if (otherDropdown && d.dropdownId !== dropdownId) {
                                otherDropdown.classList.add('hidden');
                            }
                        });

                        dropdown.classList.toggle('hidden');
                    });
                }
            });

            document.addEventListener('click', (e) => {
                dropdowns.forEach(({ dropdownId }) => {
                    const dropdown = document.getElementById(dropdownId);
                    if (dropdown && !dropdown.contains(e.target)) {
                        dropdown.classList.add('hidden');
                    }
                });
            });
        }
        setupAllDropdowns();

        document.addEventListener('DOMContentLoaded', function () {
            @if(session('success'))
                showAlert('success', {!! json_encode(session('success')) !!});
            @endif

            @if(session('error'))
                showAlert('error', {!! json_encode(session('error')) !!});
            @endif

            @if(session('warning'))
                showAlert('warning', {!! json_encode(session('warning')) !!});
            @endif

            @if(session('welcome'))
                showAlert('welcome', {!! json_encode(session('welcome')) !!});
            @endif
    });

    </script>
</body>

</html>