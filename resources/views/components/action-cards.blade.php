@props([
    'modal' => false,
    'route' => '#',
    'name' => 'Unnamed Modal'
])

<a @click.prevent="{{$modal}} = !{{$modal}}" href="{{$route}}" class="border hover:bg-white duration-300 transform hover:scale-105 hover:text-black md:h-56 md:w-96 w-full h-12 md:border-2 border-4  flex items-center md:rounded-md justify-center text-white relative border-white">
    <div>
        <h1 class="md:text-4xl text-3xl font-semibold" style="font-family: 'Epilogue', sans-serif;">{{$name}}</h1>
    </div>
</a>

