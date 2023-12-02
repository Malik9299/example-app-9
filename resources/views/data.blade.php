<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <title>Laravel</title>

</head>

<body class="antialiased">
    <h1 class="text-3xl font-bold underline">
        Hello world!
    </h1>

    <div class="overflow-x-auto">

        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Name</th>
                    <th class="py-2 px-4 border-b">Author</th>
                    <th class="py-2 px-4 border-b">publishes</th>
                    <!-- Add more table headers as needed -->
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr class="hover:bg-gray-100">
                    <td class="py-2 px-4 border-b">{{ $item->id }}</td>
                    <td class="py-2 px-4 border-b">{{ $item->name }}</td>
                    <td class="py-2 px-4 border-b">{{ $item->author }}</td>
                    <td class="py-2 px-4 border-b">{{ $item->publish_date }}</td>
                    <!-- Add more table cells as needed -->
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $data->links() }}

    </div>

</body>

</html>