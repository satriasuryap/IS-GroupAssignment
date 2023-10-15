<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200 p-4">
    <div class="max-w-md mx-auto bg-white p-8 rounded shadow-lg">
        <h2 class="text-2xl font-semibold mb-4">Upload Form</h2>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="mb-4">
                <label for="name" class="block text-gray-600">Name</label>
                <input type="text" name="name" id="name" class="w-full p-2 border rounded">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-600">Email</label>
                <input type="email" name="email" id="email" class="w-full p-2 border rounded">
            </div>
            <div class="mb-4">
                <label for="phone" class="block text-gray-600">Phone Number</label>
                <input type="tel" name="phone" id="phone" class="w-full p-2 border rounded">
            </div>
            <div class="mb-4">
                <label for="files" class="block text-gray-600">Upload Files</label>
                <input type="file" name="files[]" id="files" class="w-full p-2 border rounded" multiple accept=".pdf, .docx, .xls, .mp4, .mov">
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Submit</button>
        </form>
    </div>
</body>
</html>
