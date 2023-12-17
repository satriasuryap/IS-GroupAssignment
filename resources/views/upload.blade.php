<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Upload</title>
</head>
<body>
    @if (session('pdf_path'))
        <p>PDF uploaded successfully. <a href="{{ route('pdf.download', ['pdfPath' => session('pdf_path')]) }}">Download PDF</a></p>
    @endif

    <form action="{{ route('pdf.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="pdf_file" accept=".pdf" required>
        <button type="submit">Upload PDF</button>
    </form>
</body>
</html>
