<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('https://unpkg.com/trix@2.0.0/dist/trix.css') }}">
</head>
<body>
    <form method="post" action="/store">
        @csrf
        <p>
            <input id="x" type="hidden" name="content" value="" />
            <trix-editor input="x" class="trix-content"></trix-editor>
        </p>
        <input type="submit" name="submit" value="Submit" />
    </form>
     
    <script src="{{ asset('https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js') }}"></script>
    <script src="{{ asset('js/attachments.js') }}"></script>
</body>
</html>