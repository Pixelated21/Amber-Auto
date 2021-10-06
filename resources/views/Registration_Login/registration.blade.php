<!-- component -->
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="{{asset("css/app.css")}}">
<section class=" bg-blueGray-50">
    <div class="w-full lg:w-6/12 px-4 mx-auto pt-6">
        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-200 border-0">
            <div class="rounded-t mb-0 px-6 py-6">

                <div class="btn-wrapper mb-3  text-center">
                        <span class="text-4xl font-bold">Pix Auto</span>
                </div>
                <hr class="mt-6 border-b-1 border-blueGray-300">
            </div>
            <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                <div class="text-blueGray-400 text-center mb-3 font-bold">
                    <small>Or sign up with credentials</small>
                </div>
                <form method="post" action="{{route("On-Register")}}">
                    @csrf
                    <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password"> Name</label>
                        <input type="text" name="name" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Name">
                    </div>

                    <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">Email</label>
                        <input type="email" name="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Email">
                    </div>

                    <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">Password</label>
                        <input type="password" name="password" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Password">
                    </div>

                    <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">Verify Password</label>
                        <input type="password" name="password_confirmation" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Verify Password">
                    </div>

                    <div>
                        <label class="inline-flex items-center cursor-pointer">
                            <input name="privacy_policy" id="customCheckLogin" type="checkbox" class="form-checkbox border-0 rounded text-blueGray-700 ml-1 w-5 h-5 ease-linear transition-all duration-150">
                            <span class="ml-2 text-sm font-semibold text-blueGray-600">
              I agree with the
              <a href="javascript:void(0)" class="text-pink-500">
                Privacy Policy
              </a>
            </span>
                        </label>
                    </div>

                    <div class="text-center mt-6">
                        <button  class="bg-blueGray-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150" type="submit">
                            Create Account
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="relative  pt-8 pb-6 mt-8">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap items-center md:justify-between justify-center">
                <div class="w-full md:w-6/12 px-4 mx-auto text-center">
                    <div class="text-sm text-blueGray-500 font-semibold py-1">
                        <p>Pixelated 21 </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</section>
