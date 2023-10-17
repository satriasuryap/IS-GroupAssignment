<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-blue-400 to-red-400 h-screen flex items-center ">
    <div class="max-w-2xl mx-auto bg-white p-8 rounded shadow-lg">
        <h2 class="text-2xl font-bold mb-4 text-center">Upload Form</h2>
        <form method="POST" action="/upload" enctype="multipart/form-data">
            <div class="mb-4">
                <label for="name" class="block text-gray-600 font-semibold">Name</label>
                <input type="text" name="name" id="name" class="w-full p-2 border rounded">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-600 font-semibold">Email</label>
                <input type="email" name="email" id="email" class="w-full p-2 border rounded">
            </div>
            <div class="mb-4">
                <label for="phone" class="block text-gray-600 font-semibold">Phone Number</label>
                <input type="tel" name="phonenum" id="phonenum" class="w-full p-2 border rounded">
            </div>
            <div class="mb-4">
                <label for="files" class="block text-gray-600 font-semibold">Upload Files for ID Card</label>
                <input type="file" name="image" id="image" class="w-full p-2 border rounded" multiple accept=".png, .jpg, jpeg">
            </div>
            <div class="mb-4">
                <label for="files" class="block text-gray-600 font-semibold">Upload Files for PDF/DOC/XLS</label>
                <input type="file" name="file" id="file" class="w-full p-2 border rounded" multiple accept=".pdf, .docx, .xls">
            </div>
            <div class="mb-4">
                <label for="files" class="block text-gray-600 font-semibold">Upload Files for Video</label>
                <input type="file" name="video" id="video" class="w-full p-2 border rounded" multiple accept=".mp4, .mov">
            </div>
            <button type="submit" class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white item-center font-bold py-2 px-4 rounded">Submit</button>
        </form>
    </div>
</body>
</html>
