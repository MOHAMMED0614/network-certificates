
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </html>
<title>certificate Info</title>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
<!-- Styles / Scripts -->
</head>
<body>
    <section class="flex justify-center mt-5 mb-5">
<div class="w-full max-w-lg bg-white  dark:bg-gray-800 border-gray-200 border dark:border-gray-700 shadow-sm rounded-lg p-5">
    <h2 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Certificate Information</h2>

    <!-- Product Name -->
    <label for="product-name" class="text-sm font-medium text-gray-900 dark:text-white mb-2 block">Product Name:</label>
    <div class="relative mb-4">
        <input id="product-name" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $certificate->product_name }}" disabled readonly>
        <button data-copy-to-clipboard-target="product-name" data-tooltip-target="tooltip-product-name" class="absolute end-2 top-1/2 -translate-y-1/2 text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-lg p-2 inline-flex items-center justify-center" type="button">
            <span id="default-icon-product-name">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 18 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z"/>
                </svg>
            </span>
            <span id="success-icon-product-name" class="hidden text-blue-600">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 16 12" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M1 6l4 4 10-10"/>
                </svg>
            </span>
        </button>
        <div id="tooltip-product-name" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-lg opacity-0 tooltip dark:bg-gray-700">
            <span id="default-tooltip-message-product-name">Copy to clipboard</span>
            <span id="success-tooltip-message-product-name" class="hidden">Copied!</span>
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
    </div>

    <!-- Product Type -->
    <label for="product-type" class="text-sm font-medium text-gray-900 dark:text-white mb-2 block">Product Type:</label>
    <div class="relative mb-4">
        <input id="product-type" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $certificate->product_type }}" disabled readonly>
        <button data-copy-to-clipboard-target="product-type" data-tooltip-target="tooltip-product-type" class="absolute end-2 top-1/2 -translate-y-1/2 text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-lg p-2 inline-flex items-center justify-center" type="button">
            <span id="default-icon-product-type">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 18 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z"/>
                </svg>
            </span>
            <span id="success-icon-product-type" class="hidden text-blue-600">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 16 12" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M1 6l4 4 10-10"/>
                </svg>
            </span>
        </button>
        <div id="tooltip-product-type" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-lg opacity-0 tooltip dark:bg-gray-700">
            <span id="default-tooltip-message-product-type">Copy to clipboard</span>
            <span id="success-tooltip-message-product-type" class="hidden">Copied!</span>
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
    </div>

    <!-- Nickname -->
    <label for="nickname" class="text-sm font-medium text-gray-900 dark:text-white mb-2 block">Nickname:</label>
    <div class="relative mb-4">
        <input id="nickname" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $certificate->nickname }}" disabled readonly>
        <button data-copy-to-clipboard-target="nickname" data-tooltip-target="tooltip-nickname" class="absolute end-2 top-1/2 -translate-y-1/2 text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-lg p-2 inline-flex items-center justify-center" type="button">
            <span id="default-icon-nickname">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 18 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z"/>
                </svg>
            </span>
            <span id="success-icon-nickname" class="hidden text-blue-600">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 16 12" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M1 6l4 4 10-10"/>
                </svg>
            </span>
        </button>
        <div id="tooltip-nickname" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-lg opacity-0 tooltip dark:bg-gray-700">
            <span id="default-tooltip-message-nickname">Copy to clipboard</span>
            <span id="success-tooltip-message-nickname" class="hidden">Copied!</span>
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
    </div>

    <!-- Location -->
    <label for="location" class="text-sm font-medium text-gray-900 dark:text-white mb-2 block">Location:</label>
    <div class="relative mb-4">
        <input id="location" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $certificate->location }}" disabled readonly>
        <button data-copy-to-clipboard-target="location" data-tooltip-target="tooltip-location" class="absolute end-2 top-1/2 -translate-y-1/2 text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-lg p-2 inline-flex items-center justify-center" type="button">
            <span id="default-icon-location">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 18 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z"/>
                </svg>
            </span>
            <span id="success-icon-location" class="hidden text-blue-600">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 16 12" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M1 6l4 4 10-10"/>
                </svg>
            </span>
        </button>
        <div id="tooltip-location" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-lg opacity-0 tooltip dark:bg-gray-700">
            <span id="default-tooltip-message-location">Copy to clipboard</span>
            <span id="success-tooltip-message-location" class="hidden">Copied!</span>
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
    </div>

    <!-- Support Level -->
    <label for="support-level" class="text-sm font-medium text-gray-900 dark:text-white mb-2 block">Support Level:</label>
    <div class="relative mb-4">
        <input id="support-level" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $certificate->support_level }}" disabled readonly>
        <button data-copy-to-clipboard-target="support-level" data-tooltip-target="tooltip-support-level" class="absolute end-2 top-1/2 -translate-y-1/2 text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-lg p-2 inline-flex items-center justify-center" type="button">
            <span id="default-icon-support-level">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 18 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z"/>
                </svg>
            </span>
            <span id="success-icon-support-level" class="hidden text-blue-600">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 16 12" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M1 6l4 4 10-10"/>
                </svg>
            </span>
        </button>
        <div id="tooltip-support-level" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-lg opacity-0 tooltip dark:bg-gray-700">
            <span id="default-tooltip-message-support-level">Copy to clipboard</span>
            <span id="success-tooltip-message-support-level" class="hidden">Copied!</span>
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
    </div>

    <!-- Support End Date -->
    <label for="support-end-date" class="text-sm font-medium text-gray-900 dark:text-white mb-2 block">Support End Date:</label>
    <div class="relative mb-4">
        <input id="support-end-date" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $certificate->support_end_date }}" disabled readonly>
        <button data-copy-to-clipboard-target="support-end-date" data-tooltip-target="tooltip-support-end-date" class="absolute end-2 top-1/2 -translate-y-1/2 text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-lg p-2 inline-flex items-center justify-center" type="button">
            <span id="default-icon-support-end-date">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 18 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z"/>
                </svg>
            </span>
            <span id="success-icon-support-end-date" class="hidden text-blue-600">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 16 12" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M1 6l4 4 10-10"/>
                </svg>
            </span>
        </button>
        <div id="tooltip-support-end-date" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-lg opacity-0 tooltip dark:bg-gray-700">
            <span id="default-tooltip-message-support-end-date">Copy to clipboard</span>
            <span id="success-tooltip-message-support-end-date" class="hidden">Copied!</span>
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
    </div>

    <!-- Status -->
    <label for="status" class="text-sm font-medium text-gray-900 dark:text-white mb-2 block">Status:</label>
    <div class="relative mb-4">
        <input id="status" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $certificate->status }}" disabled readonly>
        <button data-copy-to-clipboard-target="status" data-tooltip-target="tooltip-status" class="absolute end-2 top-1/2 -translate-y-1/2 text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-lg p-2 inline-flex items-center justify-center" type="button">
            <span id="default-icon-status">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 18 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z"/>
                </svg>
            </span>
            <span id="success-icon-status" class="hidden text-blue-600">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 16 12" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M1 6l4 4 10-10"/>
                </svg>
            </span>
        </button>
        <div id="tooltip-status" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-lg opacity-0 tooltip dark:bg-gray-700">
            <span id="default-tooltip-message-status">Copy to clipboard</span>
            <span id="success-tooltip-message-status" class="hidden">Copied!</span>
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
    </div>

    <!-- IP -->
    <label for="ip" class="text-sm font-medium text-gray-900 dark:text-white mb-2 block">IP:</label>
    <div class="relative mb-6">
        <input id="ip" type="text" class="col-span-6 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $certificate->ip }}" disabled readonly>
        <button data-copy-to-clipboard-target="ip" data-tooltip-target="tooltip-ip" class="absolute end-2 top-1/2 -translate-y-1/2 text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-lg p-2 inline-flex items-center justify-center" type="button">
            <span id="default-icon-ip">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 18 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z"/>
                </svg>
            </span>
            <span id="success-icon-ip" class="hidden text-blue-600">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 16 12" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M1 6l4 4 10-10"/>
                </svg>
            </span>
        </button>
        <div id="tooltip-ip" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-xs font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-lg opacity-0 tooltip dark:bg-gray-700">
            <span id="default-tooltip-message-ip">Copy to clipboard</span>
            <span id="success-tooltip-message-ip" class="hidden">Copied!</span>
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
    </div>

    <div class="flex items-center space-x-4 rtl:space-x-reverse">
    <a href="{{ route('certificates.index')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">BACK</a>
    </div>
</div>
</section>
<script>
window.addEventListener('load', function() {
    const fields = [
        'product-name',
        'product-type',
        'nickname',
        'location',
        'support-level',
        'support-end-date',
        'status',
        'ip'
    ];

    fields.forEach(id => {
        const input = document.getElementById(id);
        const button = document.querySelector(`[data-copy-to-clipboard-target="${id}"]`);
        const tooltip = document.getElementById(`tooltip-${id}`);
        const defaultMessage = document.getElementById(`default-tooltip-message-${id}`);
        const successMessage = document.getElementById(`success-tooltip-message-${id}`);
        const defaultIcon = document.getElementById(`default-icon-${id}`);
        const successIcon = document.getElementById(`success-icon-${id}`);

        button.addEventListener('click', () => {
            navigator.clipboard.writeText(input.value).then(() => {
                // Show success state
                defaultIcon.classList.add('hidden');
                successIcon.classList.remove('hidden');
                defaultMessage.classList.add('hidden');
                successMessage.classList.remove('hidden');
                tooltip.classList.remove('invisible', 'opacity-0');

                // Reset after 2 seconds
                setTimeout(() => {
                    defaultIcon.classList.remove('hidden');
                    successIcon.classList.add('hidden');
                    defaultMessage.classList.remove('hidden');
                    successMessage.classList.add('hidden');
                    tooltip.classList.add('invisible', 'opacity-0');
                }, 2000);
            });
        });
    });
});
</script>

</body>
</html>

