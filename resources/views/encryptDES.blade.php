<!DOCTYPE html>
<html>
<head>
    
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
   <title>Message Encryption</title>
</head>
<body class="bg-gradient-to-r from-blue-400 to-red-400 flex items-center min-h-screen mt-5 mb-5">
<div class="max-w-2xl mx-auto bg-white p-8 rounded shadow-lg"> 
   <div class="bg-white shadow-md rounded p-4">
       <h2 class="text-2xl font-semibold text-center">DES Encryption</h2>

        <!-- Encrypt Name Form -->
        @if (session('encryptednameDES'))
            <div class="message-container bg-gray-100 border p-2 rounded my-2 text-ellipsis truncate">
                <h3 class="font-semibold">Encrypted Message:</h3>
                <p>{{ session('encryptednameDES') }}</p>
            </div>
        @endif

        <!-- Decrypt Name Form -->
        @if (session('decryptednameDES'))
            <div class="message-container bg-gray-100 border p-2 rounded my-2">
                <h3 class="font-semibold">Decrypted Message:</h3>
                <p>{{ session('decryptednameDES') }}</p>
            </div>
        @endif

                <!-- Encrypt Email Form -->
                @if (session('encryptedemailDES'))
            <div class="message-container bg-gray-100 border p-2 rounded my-2 text-ellipsis truncate">
                <h3 class="font-semibold">Encrypted Message:</h3>
                <p>{{ session('encryptedemailDES') }}</p>
            </div>
        @endif

        <!-- Decrypt Email Form -->
        @if (session('decryptedemailDES'))
            <div class="message-container bg-gray-100 border p-2 rounded my-2">
                <h3 class="font-semibold">Decrypted Message:</h3>
                <p>{{ session('decryptedemailDES') }}</p>
            </div>
        @endif

          <!-- Encrypt Phone Form -->
          @if (session('encryptedphoneDES'))
            <div class="message-container bg-gray-100 border p-2 rounded my-2 text-ellipsis truncate">
                <h3 class="font-semibold">Encrypted Message:</h3>
                <p>{{ session('encryptedphoneDES') }}</p>
            </div>
        @endif

        <!-- Decrypt Phone Form -->
        @if (session('decryptedphoneDES'))
            <div class="message-container bg-gray-100 border p-2 rounded my-2">
                <h3 class="font-semibold">Decrypted Message:</h3>
                <p>{{ session('decryptedphoneDES') }}</p>
            </div>
        @endif

        <form action="/encryptDES/name" method="POST" class="my-4">
            @csrf
            <label for="name" class="block mb-2">Name:</label>
            <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded">
            <button type="submit" class="mt-2 px-4 py-2 bg-green-500 text-white rounded cursor-pointer">Encrypt Name</button>
        </form>

        <form action="/decryptDES/name" method="POST" class="my-4">
            @csrf
            <label for="encrypted_nameDES" class="block mb-2">Enter Encrypted Name:</label>
            <input type="text" id="encrypted_nameDES" name="encrypted_nameDES" class="w-full px-4 py-2 border rounded">
            <button type="submit" class="mt-2 px-4 py-2 bg-green-500 text-white rounded cursor-pointer">Decrypt Name</button>
        </form>

        <form action="/encryptDES/email" method="POST" class="my-4">
            @csrf
            <label for="email" class="block mb-2">Email:</label>
            <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded">
            <button type="submit" class="mt-2 px-4 py-2 bg-green-500 text-white rounded cursor-pointer">Encrypt Email</button>
        </form>

        <form action="/decryptDES/email" method="POST" class="my-4">
            @csrf
            <label for="encrypted_emailDES" class="block mb-2">Enter Encrypted Email:</label>
            <input type="text" id="encrypted_emailDES" name="encrypted_emailDES" class="w-full px-4 py-2 border rounded">
            <button type="submit" class="mt-2 px-4 py-2 bg-green-500 text-white rounded cursor-pointer">Decrypt Email</button>
        </form>

        <form action="/encryptDES/phone" method="POST" class="my-4">
            @csrf
            <label for="phone" class="block mb-2">Phone:</label>
            <input type="tel" id="phone" name="phone" class="w-full px-4 py-2 border rounded">
            <button type="submit" class="mt-2 px-4 py-2 bg-green-500 text-white rounded cursor-pointer">Encrypt Phone</button>
        </form>

        <form action="/decryptDES/phone" method="POST" class="my-4">
            @csrf
            <label for="encrypted_phoneDES" class="block mb-2">Enter Encrypted Phone:</label>
            <input type="text" id="encrypted_phoneDES" name="encrypted_phoneDES" class="w-full px-4 py-2 border rounded">
            <button type="submit" class="mt-2 px-4 py-2 bg-green-500 text-white rounded cursor-pointer">Decrypt Phone</button>
        </form>

   </div>
</div>
</body>
</html>
