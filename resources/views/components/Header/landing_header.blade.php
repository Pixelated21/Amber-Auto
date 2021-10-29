<section class="sticky top-0 z-20">
    <div class="flex items-center bg-black md:bg-opacity-10 bg-opacity-100  h-14 shadow-md  justify-between px-5">
      <div class="text-white font-medium text-xl md:text-2xl">Amber Auto</div>
      <div>
          @auth
              <div class="flex text-white font-semibold  justify-around w-32">
                  <a>Logout</a>
              </div>
          @else
              <div class="flex text-white text-xl font-semibold justify-around w-40">
                  <a>Login</a>
                  <a>Logout</a>
              </div>
          @endauth

      </div>
    </div>
</section>
