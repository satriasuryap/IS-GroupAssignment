<!DOCTYPE html>
<html>
<head>
    
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
   <title>Message Encryption</title>
</head>
<body class="bg-gradient-to-r from-blue-400 to-red-400 h-screen flex items-center">
<div class="max-w-2xl mx-auto bg-white p-8 rounded shadow-lg"> 
   <div class="bg-white shadow-md rounded p-4">
       <h2 class="text-2xl font-semibold">Message Encryption</h2>

       {{-- Encrypt Name --}}
       @if (session('encryptedname'))
           <div class="message-container bg-gray-100 border p-2 rounded my-2 text-ellipsis truncate">
               <h3 class="font-semibold">Encrypted Message:</h3>
               <p>{{ session('encryptedname') }}</p>
           </div>
       @endif

       {{-- Decrypt Name --}}
       @if (session('decryptedname'))
           <div class="message-container bg-gray-100 border p-2 rounded my-2">
               <h3 class="font-semibold">Decrypted Message:</h3>
               <p>{{ session('decryptedname') }}</p>
           </div>
       @endif

       {{-- Name Encryption Form --}}
       <form action="/encrypt" method="POST" class="my-4">
           @csrf
           <label for="name" class="block mb-2">Name:</label>
           <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded">
           <button type="submit" class="mt-2 px-4 py-2 bg-green-500 text-white rounded cursor-pointer">Encrypt</button>
       </form>

       {{-- Name Decryption Form --}}
       <form action="/decrypt" method="POST" class="my-4">
           @csrf
           <label for="encrypted_name" class="block mb-2">Enter Encrypted Message:</label>
           <input type="text" id="encrypted_name" name="encrypted_name" class="w-full px-4 py-2 border rounded">
           <button type="submit" class="mt-2 px-4 py-2 bg-green-500 text-white rounded cursor-pointer">Decrypt</button>
       </form>

       {{-- Email Encryption --}}
       @if (session('encryptedemail'))
           <div class="message-container bg-gray-100 border p-2 rounded my-2">
               <h3 class="font-semibold">Encrypted Message:</h3>
               <p>{{ session('encryptedemail') }}</p>
           </div>
       @endif

       {{-- Email Decryption --}}
       @if (session('decryptedemail'))
           <div class="message-container bg-gray-100 border p-2 rounded my-2">
               <h3 class="font-semibold">Decrypted Message:</h3>
               <p>{{ session('decryptedemail') }}</p>
           </div>
       @endif

       {{-- Email Encryption Form --}}
       <form action="/encrypt" method="POST" class="my-4">
           @csrf
           <label for="email" class="block mb-2">Email:</label>
           <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded">
           <button type="submit" class="mt-2 px-4 py-2 bg-green-500 text-white rounded cursor-pointer">Encrypt</button>
       </form>

       {{-- Email Decryption Form --}}
       <form action="/decrypt" method="POST" class="my-4">
           @csrf
           <label for="encrypted_email" class="block mb-2">Enter Encrypted Message:</label>
           <input type="text" id="encrypted_email" name="encrypted_email" class="w-full px-4 py-2 border rounded">
           <button type="submit" class="mt-2 px-4 py-2 bg-green-500 text-white rounded cursor-pointer">Decrypt</button>
       </form>
   </div>
</div>
</body>
</html>
