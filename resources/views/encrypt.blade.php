<!DOCTYPE html>
<html>
<head>
    
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
   <title>Message Encryption</title>
</head>
<body class="bg-gradient-to-r from-blue-400 to-red-400 flex items-center min-h-screen mt-5 mb-5">
<div class="max-w-2xl mx-auto bg-white p-8 rounded shadow-lg"> 
   <div class="bg-white shadow-md rounded p-4">
       <h2 class="text-2xl font-semibold text-center">AES Encryption</h2>

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

       {{-- Email Encryption --}}
       @if (session('encryptedemail'))
           <div class="message-container bg-gray-100 border p-2 rounded my-2 text-ellipsis truncate">
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

       {{-- Phone Encryption --}}
       @if (session('encryptedphone'))
           <div class="message-container bg-gray-100 border p-2 rounded my-2 text-ellipsis truncate">
               <h3 class="font-semibold">Encrypted Message:</h3>
               <p>{{ session('encryptedphone') }}</p>
           </div>
       @endif

       {{-- Phone Decryption --}}
       @if (session('decryptedphone'))
           <div class="message-container bg-gray-100 border p-2 rounded my-2">
               <h3 class="font-semibold">Decrypted Message:</h3>
               <p>{{ session('decryptedphone') }}</p>
           </div>
       @endif

       {{-- Image Encryption --}}
       @if (session('encryptedimg'))
           <div class="message-container bg-gray-100 border p-2 rounded my-2 text-ellipsis truncate">
               <h3 class="font-semibold">Encrypted Message:</h3>
               <p>{{ session('encryptedimg') }}</p>
           </div>
       @endif

       {{-- Image Decryption --}}
        @if (session('decryptedimg'))
            <div class="message-container bg-gray-100 border p-2 rounded my-2">
                <h3 class="font-semibold">Decrypted Image:</h3>
                <img src="{{ asset('storage/' . session('decryptedimg')) }}" alt="Decrypted Image">
            </div>
        @endif

        {{-- File Encryption --}}
       @if (session('encryptedfile'))
           <div class="message-container bg-gray-100 border p-2 rounded my-2 text-ellipsis truncate">
               <h3 class="font-semibold">Encrypted Message:</h3>
               <p>{{ session('encryptedfile') }}</p>
           </div>
       @endif

       {{-- File Decryption --}}
       @if (session('decryptedfile'))
           <div class="message-container bg-gray-100 border p-2 rounded my-2">
               <h3 class="font-semibold">Decrypted Message:</h3>
               <p>{{ session('decryptedfile') }}</p>
           </div>
       @endif

       {{-- Video Encryption --}}
       @if (session('encryptedvideo'))
           <div class="message-container bg-gray-100 border p-2 rounded my-2 text-ellipsis truncate">
               <h3 class="font-semibold">Encrypted Message:</h3>
               <p>{{ session('encryptedvideo') }}</p>
           </div>
       @endif

       <!-- Display Decrypted Video -->
        @if (session('decryptedvideo'))
            <div class="message-container bg-gray-100 border p-2 rounded my-2">
                <h3 class="font-semibold">Decrypted Video:</h3>
                <video width="640" height="360" controls>
                    <source src="{{ asset('storage/' . session('decryptedvideo')) }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        @endif

       <!-- Name Encryption Form -->
        <form action="/encrypt/name" method="POST" class="my-4">
            @csrf
            <label for="name" class="block mb-2">Name:</label>
            <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded">
            <button type="submit" class="mt-2 px-4 py-2 bg-green-500 text-white rounded cursor-pointer">Encrypt Name</button>
        </form>

        <!-- Name Decryption Form -->
        <form action="/decrypt/name" method="POST" class="my-4">
            @csrf
            <label for="encrypted_name" class="block mb-2">Enter Encrypted Name:</label>
            <input type="text" id="encrypted_name" name="encrypted_name" class="w-full px-4 py-2 border rounded">
            <button type="submit" class="mt-2 px-4 py-2 bg-green-500 text-white rounded cursor-pointer">Decrypt Name</button>
        </form>

        <!-- Email Encryption Form -->
        <form action="/encrypt/email" method="POST" class="my-4">
            @csrf
            <label for="email" class="block mb-2">Email:</label>
            <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded">
            <button type="submit" class="mt-2 px-4 py-2 bg-green-500 text-white rounded cursor-pointer">Encrypt Email</button>
        </form>

        <!-- Email Decryption Form -->
        <form action="/decrypt/email" method="POST" class="my-4">
            @csrf
            <label for="encrypted_email" class="block mb-2">Enter Encrypted Email:</label>
            <input type="text" id="encrypted_email" name="encrypted_email" class="w-full px-4 py-2 border rounded">
            <button type="submit" class="mt-2 px-4 py-2 bg-green-500 text-white rounded cursor-pointer">Decrypt Email</button>
        </form>

        <!-- Phone Encryption Form -->
        <form action="/encrypt/phone" method="POST" class="my-4">
            @csrf
            <label for="phone" class="block mb-2">Phone:</label>
            <input type="tel" id="phone" name="phone" class="w-full px-4 py-2 border rounded">
            <button type="submit" class="mt-2 px-4 py-2 bg-green-500 text-white rounded cursor-pointer">Encrypt Phone</button>
        </form>

        <!-- Phone Decryption Form -->
        <form action="/decrypt/phone" method="POST" class="my-4">
            @csrf
            <label for="encrypted_phone" class="block mb-2">Enter Encrypted Phone:</label>
            <input type="text" id="encrypted_phone" name="encrypted_phone" class="w-full px-4 py-2 border rounded">
            <button type="submit" class="mt-2 px-4 py-2 bg-green-500 text-white rounded cursor-pointer">Decrypt Phone</button>
        </form>       

        <!-- Image Encryption Form -->
        <form action="/encrypt/img" method="POST" class="my-4">
            @csrf
            <label for="img" class="block mb-2">Image:</label>
            <input type="file" id="img" name="img" class="w-full px-4 py-2 border rounded" multiple accept=".png, .jpg, jpeg">
            <button type="submit" class="mt-2 px-4 py-2 bg-green-500 text-white rounded cursor-pointer">Encrypt Image</button>
        </form>

        <!-- Image Decryption Form -->
        <form action="/decrypt/img" method="POST" class="my-4">
            @csrf
            <label for="encrypted_img" class="block mb-2">Enter Encrypted Image:</label>
            <input type="text" id="encrypted_img" name="encrypted_img" class="w-full px-4 py-2 border rounded">
            <button type="submit" class="mt-2 px-4 py-2 bg-green-500 text-white rounded cursor-pointer">Decrypt Image</button>
        </form> 

        <!-- File Encryption Form -->
        <form action="/encrypt/file" method="POST" class="my-4">
            @csrf
            <label for="file" class="block mb-2">File:</label>
            <input type="file" id="file" name="file" class="w-full px-4 py-2 border rounded" multiple accept=".pdf, .docx, .xls">
            <button type="submit" class="mt-2 px-4 py-2 bg-green-500 text-white rounded cursor-pointer">Encrypt File</button>
        </form>

        <!-- File Decryption Form -->
        <form action="/decrypt/file" method="POST" class="my-4">
            @csrf
            <label for="encrypted_file" class="block mb-2">Enter Encrypted File:</label>
            <input type="text" id="encrypted_file" name="encrypted_file" class="w-full px-4 py-2 border rounded">
            <button type="submit" class="mt-2 px-4 py-2 bg-green-500 text-white rounded cursor-pointer">Decrypt File</button>
        </form>

        <!-- Video Encryption Form -->
        <form action="/encrypt/video" method="POST" class="my-4">
            @csrf
            <label for="video" class="block mb-2">Video:</label>
            <input type="file" id="video" name="video" class="w-full px-4 py-2 border rounded" multiple accept=".mp4, .mov">
            <button type="submit" class="mt-2 px-4 py-2 bg-green-500 text-white rounded cursor-pointer">Encrypt Video</button>
        </form>

        <!-- Video Decryption Form -->
        <form action="/decrypt/video" method="POST" class="my-4">
            @csrf
            <label for="encrypted_video" class="block mb-2">Enter Encrypted Video:</label>
            <input type="text" id="encrypted_video" name="encrypted_video" class="w-full px-4 py-2 border rounded">
            <button type="submit" class="mt-2 px-4 py-2 bg-green-500 text-white rounded cursor-pointer">Decrypt Video</button>
        </form> 

   </div>
</div>
</body>
</html>
