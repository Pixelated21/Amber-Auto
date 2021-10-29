@props([
    'featured' => false
    ])

@if ($featured)
    <section style="height: 75vh" class="h-3/4">

        <video
            autoplay
            loop
            class="absolute h-3/4 w-screen object-cover">
            {{$carVideo}}
        </video>
        <div class="text-white flex-col h-full  p-5 flex items-end justify-between relative">
            <div class="md:text-6xl text-4xl mb-10 font-bold" style="font-family: 'Epilogue', sans-serif;">Featured This
                Week
            </div>

            <div class="flex flex-col items-end space-y-2">
                <h1 class="md:text-4xl text-3xl font-medium"
                    style="font-family: 'Epilogue', sans-serif;">{{$carName}}</h1>
                <h1 class="md:block hidden" style="font-family: 'Epilogue', sans-serif;">{{$carYear}}</h1>
                <h1 class="md:block hidden" style="font-family: 'Epilogue', sans-serif;">{{$carColor}}</h1>
                <h1 class="md:block hidden" style="font-family: 'Epilogue', sans-serif;">{{$carTransmission}}</h1>
                <h1 class="md:block hidden" style="font-family: 'Epilogue', sans-serif;">{{$carDriverSide}}</h1>
                <h1 class="md:block hidden" style="font-family: 'Epilogue', sans-serif;">{{$carMileage}} mi</h1>
                <h1 style="font-family: 'Epilogue', sans-serif;">$ {{$carPrice}}</h1>
            </div>

        </div>

    </section>
@endif
