<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Message Encryption</title>
</head>

<body class="bg-gray-100 dark:bg-gray-900">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-2xl font-bold mb-4">Database Item List</h1>

                    <!-- Display AES Items -->
                    <div class="mb-6 truncate overflow-hidden">
                        <h2 class="text-xl font-semibold mb-2">AES Items</h2>
                        <table class="min-w-full bg-white border border-gray-300 text-black truncate overflow-hidden">
                            <thead>
                                <tr>
                                    <th class="py-2 px-4 border-b">Name</th>
                                    <th class="py-2 px-4 border-b">Email</th>
                                    <th class="py-2 px-4 border-b">Phone</th>
                                    <th class="py-2 px-4 border-b">Image</th>
                                    <th class="py-2 px-4 border-b">File</th>
                                    <th class="py-2 px-4 border-b">Video</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($aesItems as $item)
                                    <tr>
                                        <td class="py-2 px-4 border-b truncate overflow-hidden">{{ $item->name }}</td>
                                        <td class="py-2 px-4 border-b truncate overflow-hidden">{{ $item->email }}</td>
                                        <td class="py-2 px-4 border-b truncate overflow-hidden">{{ $item->phone }}</td>
                                        <td class="py-2 px-4 border-b truncate overflow-hidden">{{ $item->img }}</td>
                                        <td class="py-2 px-4 border-b truncate overflow-hidden">{{ $item->file }}</td>
                                        <td class="py-2 px-4 border-b truncate overflow-hidden">{{ $item->video }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Display DES Items -->
                    <div class="mb-6">
                        <h2 class="text-xl font-semibold mb-2">DES Items</h2>
                        <table class="min-w-full bg-white border border-gray-300 text-black">
                            <thead>
                                <tr>
                                    <th class="py-2 px-4 border-b">Name</th>
                                    <th class="py-2 px-4 border-b">Email</th>
                                    <th class="py-2 px-4 border-b">Phone</th>
                                    <th class="py-2 px-4 border-b">Image</th>
                                    <th class="py-2 px-4 border-b">File</th>
                                    <th class="py-2 px-4 border-b">Video</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($desItems as $item)
                                    <tr>
                                        <td class="py-2 px-4 border-b overflow-hidden">{{ $item->name }}</td>
                                        <td class="py-2 px-4 border-b">{{ $item->email }}</td>
                                        <td class="py-2 px-4 border-b">{{ $item->phone }}</td>
                                        <td class="py-2 px-4 border-b">{{ $item->img }}</td>
                                        <td class="py-2 px-4 border-b">{{ $item->file }}</td>
                                        <td class="py-2 px-4 border-b">{{ $item->video }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Display RC4 Items -->
                    <div>
                        <h2 class="text-xl font-semibold mb-2">RC4 Items</h2>
                        <table class="min-w-full bg-white border border-gray-300 text-black">
                            <thead>
                                <tr>
                                    <th class="py-2 px-4 border-b">Name</th>
                                    <th class="py-2 px-4 border-b">Email</th>
                                    <th class="py-2 px-4 border-b">Phone</th>
                                    <th class="py-2 px-4 border-b">Image</th>
                                    <th class="py-2 px-4 border-b">File</th>
                                    <th class="py-2 px-4 border-b">Video</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rc4Items as $item)
                                    <tr>
                                        <td class="py-2 px-4 border-b">{{ $item->name }}</td>
                                        <td class="py-2 px-4 border-b">{{ $item->email }}</td>
                                        <td class="py-2 px-4 border-b">{{ $item->phone }}</td>
                                        <td class="py-2 px-4 border-b">{{ $item->img }}</td>
                                        <td class="py-2 px-4 border-b">{{ $item->file }}</td>
                                        <td class="py-2 px-4 border-b">{{ $item->video }}</td>
                                    </tr>
                                @endforeach
                            </tbody> 
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
