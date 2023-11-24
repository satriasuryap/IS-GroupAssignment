<!DOCTYPE html>
<html>
<head>
    
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
   <title>Message Encryption</title>
</head>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1>{{ __("Items List") }}</h1>

                    <!-- Display AES Items -->
                    <h2>AES Items</h2>
                    <table class="table-auto">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Name</th>
                                <th class="px-4 py-2">Email</th>
                                <th class="px-4 py-2">Phone</th>
                                <th class="px-4 py-2">Image</th>
                                <th class="px-4 py-2">File</th>
                                <th class="px-4 py-2">Video</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($aesItems as $item)
                                <tr>
                                    <td class="px-4 py-2">{{ $item->name }}</td>
                                    <td class="px-4 py-2">{{ $item->email }}</td>
                                    <td class="px-4 py-2">{{ $item->phone }}</td>
                                    <td class="px-4 py-2">{{ $item->img }}</td>
                                    <td class="px-4 py-2">{{ $item->file }}</td>
                                    <td class="px-4 py-2">{{ $item->video }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Display DES Items -->
                    <h2>DES Items</h2>
                    <table class="table-auto">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Name</th>
                                <th class="px-4 py-2">Email</th>
                                <th class="px-4 py-2">Phone</th>
                                <th class="px-4 py-2">Image</th>
                                <th class="px-4 py-2">File</th>
                                <th class="px-4 py-2">Video</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($desItems as $item)
                                <tr>
                                    <td class="px-4 py-2">{{ $item->name }}</td>
                                    <td class="px-4 py-2">{{ $item->email }}</td>
                                    <td class="px-4 py-2">{{ $item->phone }}</td>
                                    <td class="px-4 py-2">{{ $item->img }}</td>
                                    <td class="px-4 py-2">{{ $item->file }}</td>
                                    <td class="px-4 py-2">{{ $item->video }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- Display RC4 Items -->
                    <h2>RC4 Items</h2>
                    <table class="table-auto">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Name</th>
                                <th class="px-4 py-2">Email</th>
                                <th class="px-4 py-2">Phone</th>
                                <th class="px-4 py-2">Image</th>
                                <th class="px-4 py-2">File</th>
                                <th class="px-4 py-2">Video</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rc4Items as $item)
                                <tr>
                                    <td class="px-4 py-2">{{ $item->name }}</td>
                                    <td class="px-4 py-2">{{ $item->email }}</td>
                                    <td class="px-4 py-2">{{ $item->phone }}</td>
                                    <td class="px-4 py-2">{{ $item->img }}</td>
                                    <td class="px-4 py-2">{{ $item->file }}</td>
                                    <td class="px-4 py-2">{{ $item->video }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</html>
