<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{mix("css/app.css")}}">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
</head>
<body>

<body class="bg-white">
<header>
    <nav class="p-6">
        <div class="flex justify-between items-center">
            <h1 class="pr-6 border-r-2 text-2xl font-bold text-gray-500">Pix Auto</h1>
            <div class="flex justify-between flex-grow">
                @auth


                    <div class="flex ml-6 font-light items-center">
                        {{Auth::user()->name}}
                    </div>
                @else
                    <div class="flex ml-6 font-light items-center">
                        Welcome Guest
                    </div>


                @endauth

                @auth

                    <div class="md:flex space-x-6 hidden">
                        <form method="post" action="{{route("Logout")}}">
                            @csrf
                            <button type="submit" class=" py-2 px-4 rounded bg-red-600 text-white text-md">Logout</button>
                        </form>
                    </div>

                @else

                    <div class="md:flex space-x-6 hidden">
                        <a href="{{route("Register")}}" class=" py-2 px-4 rounded bg-blue-700 text-white text-md">Sign up</a>
                        <a href="{{route("Login")}}" class=" py-2 px-4 rounded bg-blue-700 text-white text-md">Login</a>
                    </div>

                @endauth
            </div>
        </div>
    </nav>
    <!-- Section Hero -->
    <div class="container mx-auto bg-gray-400 h-72 rounded-md flex items-center">
        <div class="sm:ml-20 text-gray-50 text-center sm:text-left">
            <h1 class="text-5xl font-bold mb-4">
                Pix Auto
            </h1>
            <p class="text-lg inline-block sm:block">Find the Car You Want, Your Way
                Then, build your deal to fit your needs.</p>
            <button class="mt-8 px-4 py-2 bg-gray-600 rounded">Browse All</button>
        </div>
    </div>
</header>

<main class="py-16 container mx-auto px-6 md:px-0">
    <section>
        <div class="grid sm:grid-cols-3 gap-4 grid-cols-2">
            <div>
                <div class="bg-gray-300 h-44"></div>
                <h3 class="text-lg font-semibold text-gray-500 mt-2">Vehicle Brands</h3>
            </div>
            <div>
                <div class="bg-gray-300 h-44"></div>
                <h3 class="text-lg font-semibold text-gray-500 mt-2">Vehicle Models</h3>
            </div>
            <div>
                <div class="bg-gray-300 h-44"></div>
                <h3 class="text-lg font-semibold text-gray-500 mt-2">Vehicle Type</h3>
            </div>
        </div>
        <hr class="w-40 my-14 border-4 rounded-md sm:mx-0 mx-auto"/>
    </section>
    <section>
        <h1 class="inline-block text-gray-600 font-bold text-3xl">
            The holy sauna ritual <br/>
            (or how does Saunatime work).
        </h1>

        <div class="grid grid-cols-3 gap-4 mt-10">
            <div>
                <h3 class="text-lg font-semibold text-gray-500 mt-2">1. Browse and book</h3>
                <p class="text text-gray-400">Start by searching for a location. Once you find a sauna you like, simply
                    check the availability, book it, and make a secure payment right away.</p>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-gray-500 mt-2">2. Have a great bath</h3>
                <p class="text text-gray-400">Meet your host on the date you chose and enjoy the home sauna experience.
                    We'll handle the payment to the host after your experience.</p>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-gray-500 mt-2">3. Review the host</h3>
                <p class="text text-gray-400">If you enjoyed the experience, let others know by giving a review to your
                    sauna host. This way others will know where to go.</p>
            </div>
        </div>
    </section>

</main>
</body>
</body>
</html>
