@props([
   'type' => 'text',
   'title' => 'Unnamed Input',
   'name' => false,

])

<div class="mt-2">
    @if ($title !== false)
        <label class="block text-sm mb-1 @error($name) text-red-700 @enderror text-white"
               for="cus_name">{{$title}}</label>
    @endif
    @error($name)<h6 class="block text-xs mb-1 text-red-700">{{$message}}</h6>@enderror

    @if ($type === 'select')
        <select
            class="w-full  @error($name) border border-red-800 @enderror p-5 px-5 py-2 outline-none rounded-sm text-white bg-gray-900"
            name="{{$name}}"
        >
            {{$options}}
        </select>
    @else
        <input
            class="w-full  @error($name) border border-red-800 @enderror p-5 px-5 py-2 outline-none rounded-sm text-white bg-gray-900"
            id="cus_name"
            name="{{$name}}"
            type="{{$type}}"
            autocomplete="off"
            spellcheck="false"
            placeholder="Enter {{$title}}"
        >
    @endif
</div>
