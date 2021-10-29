<div
    x-show="{{$alphName}}"
    x-transition:enter="ease-out duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="ease-in duration-300"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="fixed z-30 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true"
>
    {{--    {{dd($alphName)}}--}}

    <div class="flex items-end justify-end min-h-screen text-right sm:block sm:p-0">
        <div class="fixed inset-0 bg-black bg-opacity-95 transition-opacity" aria-hidden="true"></div>

        <div @click.away="{{$alphName}} = false"
             class="inline-block border-2  align-bottom bg-black bg-opacity-10 text-left overflow-hidden shadow-xl transform transition-all h-screen sm:align-middle w-72">

            <div class="h-screen flex r justify-evenly flex-col">
                <h1 class="text-3xl text-white font-bold text-center  p-5">{{$title}}</h1>

                <div class="h-11/12 flex items-center justify-center ">

                    {{$form}}

                </div>

            </div>


        </div>
    </div>
</div>
