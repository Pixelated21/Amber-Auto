@extends('layouts.landing')

@section('page_title','Amber Auto')

@section('content')

    <section style="height: 75vh" class="h-3/4 px-10 py-32  flex items-end">
        <h1 class="text-white text-7xl font-extrabold" style="font-family: 'Epilogue', sans-serif;">Amber Auto</h1>
    </section>


    <x-featured :featured="true">


        <x-slot name="carVideo">
            <source src="public/media/R8.mp4" type="video/mp4"/>
        </x-slot>

        <x-slot name="carName">
            Audi R8
        </x-slot>

        <x-slot name="carYear">
            2018
        </x-slot>

        <x-slot name="carColor">
            White
        </x-slot>

        <x-slot name="carTransmission">
            Auto
        </x-slot>

        <x-slot name="carDriverSide">
            Right
        </x-slot>

        <x-slot name="carMileage">
            {{number_format(5000)}}
        </x-slot>

        <x-slot name="carPrice">
            {{number_format(2000000)}}
        </x-slot>


    </x-featured>


    <section
        class="p-5 flex justify-center w-full"
        style="height: 60vh">

        <div class="flex md:flex-row flex-col w-full gap-5 justify-around items-center">

            <div class="w-full" x-data="{modal1: false}">
                <x-action-cards modal="modal1" route="#" name="Add Brand"/>

                <x-sidebar-modal title="Add Brand" alphName="modal1">

                    <x-slot name="form">
                        <form action="{{route('Brand.Store')}}" method="post"
                              class="p-5 flex justify-between flex-col  h-full space-y-4 overflow-auto">
                            @csrf
                            <div>
                                <x-sidebar-input title="Brand Name" name='brand_nm'/>
                            </div>

                            <div class=" flex  md:flex-row flex-col justify-around">
                                <x-sidebar-input-btn modalCloseBtn="modal1"/>
                            </div>

                        </form>
                    </x-slot>

                </x-sidebar-modal>
            </div>

            <div class=" w-full" x-data="{modal2: false}">
                <x-action-cards modal="modal2" route="#" name="Add Type"/>

                <x-sidebar-modal title="Add Type" alphName="modal2">

                    <x-slot name="form">
                        <form action="{{route('Type.Store')}}" method="post"
                              class="p-5 flex justify-between flex-col  h-full space-y-4 overflow-auto">
                            @csrf
                            <div>
                                <x-sidebar-input title="Vehicle Type" name='vhcl_type_nm'/>

                            </div>

                            <div class=" flex  md:flex-row flex-col justify-around">
                                <x-sidebar-input-btn modalCloseBtn="modal2"/>
                            </div>

                        </form>
                    </x-slot>

                </x-sidebar-modal>
            </div>

            <div class="md:w-1/3 w-full" x-data="{modal3: false}">
                <x-action-cards route="#" modal="modal3" name="Add Model"/>

                <x-sidebar-modal title="Add Model" alphName="modal3">

                    <x-slot name="form">
                        <form action="{{route('Model.Store')}}" method="post"
                              class="p-5 flex justify-between flex-col  h-full space-y-4 overflow-auto">
                            @csrf
                            <div class="space-y-4">
                                <x-sidebar-input title="Model Name" name='model_nm'/>
                                <x-sidebar-input title="Vin Number" name='vin_nbr'/>

                                <x-sidebar-input type="select" title="Driver Side" name='driver_side'>
                                    <x-slot name="options">
                                        <option disabled selected>Select Driver Side</option>
                                        <option>Left</option>
                                        <option>Right</option>
                                    </x-slot>
                                </x-sidebar-input>

                                <x-sidebar-input type="number" title="Mileage" name='mileage'/>
                                <x-sidebar-input title="Color" name='color'/>

                                <x-sidebar-input type="select" title="Year" name='year'>
                                    <x-slot name="options">
                                        <option disabled selected>Select Vehicle Year</option>

                                        @for ($i = \Carbon\Carbon::now('Jamaica')->year;  $i >= 1920 ; $i--)
                                            <option>{{$i}}</option>
                                        @endfor

                                    </x-slot>
                                </x-sidebar-input>

                                <x-sidebar-input type="select" title="Brand" name='brand_id'>
                                    <x-slot name="options">
                                        <option disabled selected>Select Vehicle Brand</option>

                                        @forelse ($brands as $brand)
                                            <option value="{{$brand->vehicle_brand_id}}">{{$brand->brand_nm}}</option>
                                        @empty
                                            <option disabled selected>No Brands Available</option>
                                        @endforelse

                                    </x-slot>
                                </x-sidebar-input>

                                <x-sidebar-input type="select" title="Type" name='type_id'>
                                    <x-slot name="options">
                                        <option disabled selected>Select Vehicle Type</option>

                                        @forelse ($types as $type)
                                            <option
                                                value="{{$type->vehicle_type_id}}">{{$type->vhcl_type_nm}}</option>
                                        @empty
                                            <option disabled selected>No Type Available</option>
                                        @endforelse

                                    </x-slot>
                                </x-sidebar-input>

                                <x-sidebar-input title="Price" name='price'/>
                            </div>

                            <div class=" flex  md:flex-row flex-col justify-around">
                                <x-sidebar-input-btn modalCloseBtn="modal3"/>
                            </div>

                        </form>
                    </x-slot>

                </x-sidebar-modal>
            </div>

        </div>

    </section>

    <section class="w-screen  p-20 justify-center items-center">


        <div class="flex flex-col  ">
            <div class="flex justify-center w-full">
                <h1 class="text-7xl font-semibold text-white">Browse By Brand</h1>
            </div>

            <div
                class="p-20 mt-15 w-full  h-full grid items-center gap-20 text-center justify-center  grid-cols-3">
                @forelse($brands as $brand)
                    <x-brand-card :name="$brand->brand_nm"/>
                @empty

                @endforelse

            </div>
        </div>

    </section>

@endsection
