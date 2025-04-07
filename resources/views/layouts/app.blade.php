<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        /* Position Toastr to the right */
        #toast-container {
            top: 20px !important;
            right: 20px !important;
            left: auto !important;
            /* Ensure it stays on the right */
        }
    </style>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <title>{{ env('APP_NAME') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

</head>

<body>
    {{ $slot }}
    @livewireScripts
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Toastr Settings
            toastr.options = {
                closeButton: true,
                progressBar: true,
                positionClass: "toast-top-right", // Change to "toast-bottom-right" for bottom placement
                showDuration: "300",
                hideDuration: "1000",
                timeOut: "3000", // Toast disappears after 3 seconds
                extendedTimeOut: "1000",
                showEasing: "swing",
                hideEasing: "linear",
                showMethod: "fadeIn",
                hideMethod: "fadeOut"
            };

            // Listen for Livewire event
            Livewire.on('showToast', (message, type = 'success') => {
                if (type === 'success') {
                    toastr.success(message);
                } else if (type === 'error') {
                    toastr.error(message);
                } else if (type === 'info') {
                    toastr.info(message);
                } else if (type === 'warning') {
                    toastr.warning(message);
                }
            });
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</body>

</html>
