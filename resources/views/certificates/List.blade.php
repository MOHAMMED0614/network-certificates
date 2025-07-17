
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </html>
<title>List certificates</title>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
<!-- Styles / Scripts -->
</head>
<body>

<div class="p-8">
<a href="{{ route('certificates.create') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">ADD New Certificate</a>
</div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-8">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Product name
                </th>
                <th scope="col" class="px-6 py-3">
               id
                </th>
                <th scope="col" class="px-6 py-3">
                Product Type
                </th>
                <th scope="col" class="px-6 py-3">
                IP
                </th>
                <th scope="col" class="px-6 py-3">
                Support End Date
                </th>
                <th scope="col" class="px-6 py-3">
                status
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
        @foreach($certificates as $certificate)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">

                {{ $certificate->product_name }}
                </th>
                <td class="px-6 py-4">
                {{ $certificate->id }}
                </td>
                <td class="px-6 py-4">
                {{ $certificate->product_type }}
                </td>
                <td class="px-6 py-4">
                {{ $certificate->ip }}
                </td>
                <td class="px-6 py-4">
                {{ $certificate->support_end_date }}
                <p id="support_days_remaining" class="text-sm font-semibold mt-2 text-blue-600 dark:text-blue-400">{{ $certificate->days_remaining }} Days Left</p>

                <td>
    @if ($certificate->status == 'Expired')
        <span class="badge p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50">Expired</span>
    @elseif ($certificate->status == 'Nearly Expired')
        <span class="badgep-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50">Nearly Expired</span>
    @else
        <span class="badge p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50  px-6 py-4 text-right">Active</span>
    @endif
</td>
                <td class="px-6 py-4 text-right">
                    <a href="{{ route('certificates.show', $certificate->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Show</a>
                </td>
                <td class="px-6 py-4 text-right">
                <a href="{{ route('certificates.edit', $certificate->id) }}"class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>

                <form action="{{ route('certificates.destroy', $certificate->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this certificate?');">
                        @csrf
                        @method('DELETE')
                        <td class="px-6 py-4 ">
                        <button type="submit" class="text-red-600 hover:text-red-800 font-semibold ">Delete</button>
                </td>                    </form>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>


</body>
</html>
