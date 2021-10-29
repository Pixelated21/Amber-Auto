@props([
    'type' => false,
    'message' => 'Unnamed Alert',
])

@if ($type)
    <script defer>


        let timerInterval
        Swal.fire({
            titleText: "{{$message}}",
            backdrop: false,
            toast: true,
            fontcolor: '#ececec',

            background: '#ececec',
            allowOutsideClick: true,
            showConfirmButton: false,

            timer: 3000,
            timerProgressBar: true,
            position: 'bottom-right',
            willClose: () => {
                clearInterval(timerInterval)
            }
        })
    </script>
@endif

