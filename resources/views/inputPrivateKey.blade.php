<!DOCTYPE html>
<html>
<head>
    <title>Input Private Key</title>
</head>
<body>
    <form method="post" action="/verifyPrivateKey">
        @csrf
        <label for="private_key">Enter Your Private Key:</label>
        <textarea name="private_key" required></textarea>
        <button type="submit">Submit</button>
    </form>
    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

</body>
</html>
