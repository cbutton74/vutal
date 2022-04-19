<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Testing</title>
        <link href="/css/app.css" rel="stylesheet">
        @livewireStyles
    </head>
    <body>
				<p>Test</p>
				<h1>This is another test</h1>
				<p>To Push a Test</p>
        <div class="h-screen w-full flex justify-center items-center bg-gray-800">
            @livewire('counter')
        </div>
        <script src="/js/app.js"></script>
        @livewireScripts
    </body>
</html>
