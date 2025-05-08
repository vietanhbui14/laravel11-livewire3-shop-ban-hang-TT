<div>

  <div class="w-full h-screen bg-gradient-to-r from-blue-200 to-cyan-200 py-10 px-4 sm:px-6 lg:px-8 mx-auto">
    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
      <!-- Grid -->
      <div class="grid md:grid-cols-2 gap-4 md:gap-8 xl:gap-20 md:items-center">
        <div>
          <h1 class="block text-3xl font-bold text-gray-800 sm:text-4xl lg:text-6xl lg:leading-tight dark:text-white">
            Bắt đầu hành trình của bạn với <span class="text-blue-600">VA Shop</span></h1>
          <p class="mt-3 text-lg text-gray-800 dark:text-gray-400">Mua rất nhiều sản phẩm từ nhiều thương hiệu khác
            nhau.</p>

          <!-- Buttons -->
          <div class="mt-7 grid gap-3 w-full sm:inline-flex">
            <a wire:navigate.hover
              class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
              href="/register">
              Bắt đầu
              <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <path d="m9 18 6-6-6-6" />
              </svg>
            </a>
            <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
              href="https://www.facebook.com/profile.php?id=61575873126267">
              Liên hệ đội ngũ bán hàng
            </a>
          </div>
          <!-- End Buttons -->

          <!-- Review -->

          <!-- End Review -->
        </div>
        <!-- End Col -->

        <div class="relative ms-4">
          <img class="w-full rounded-md"
            src="https://png.pngtree.com/png-clipart/20220930/original/pngtree-mobile-shopping-concept-a-man-and-woman-buy-things-in-the-png-image_8644437.png"
            alt="Image Description">
          <div
            class="absolute inset-0 -z-[1] bg-gradient-to-tr from-gray-200 via-white/0 to-white/0 w-full h-full rounded-md mt-4 -mb-4 me-4 -ms-4 lg:mt-6 lg:-mb-6 lg:me-6 lg:-ms-6 dark:from-slate-800 dark:via-slate-900/0 dark:to-slate-900/0">
          </div>

          <!-- SVG-->
          <div class="absolute bottom-0 start-0">
            <svg class="w-2/3 ms-auto h-auto text-white dark:text-slate-900" width="630" height="451"
              viewBox="0 0 630 451" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="531" y="352" width="99" height="99" fill="currentColor" />
              <rect x="140" y="352" width="106" height="99" fill="currentColor" />
              <rect x="482" y="402" width="64" height="49" fill="currentColor" />
              <rect x="433" y="402" width="63" height="49" fill="currentColor" />
              <rect x="384" y="352" width="49" height="50" fill="currentColor" />
              <rect x="531" y="328" width="50" height="50" fill="currentColor" />
              <rect x="99" y="303" width="49" height="58" fill="currentColor" />
              <rect x="99" y="352" width="49" height="50" fill="currentColor" />
              <rect x="99" y="392" width="49" height="59" fill="currentColor" />
              <rect x="44" y="402" width="66" height="49" fill="currentColor" />
              <rect x="234" y="402" width="62" height="49" fill="currentColor" />
              <rect x="334" y="303" width="50" height="49" fill="currentColor" />
              <rect x="581" width="49" height="49" fill="currentColor" />
              <rect x="581" width="49" height="64" fill="currentColor" />
              <rect x="482" y="123" width="49" height="49" fill="currentColor" />
              <rect x="507" y="124" width="49" height="24" fill="currentColor" />
              <rect x="531" y="49" width="99" height="99" fill="currentColor" />
            </svg>
          </div>
          <!-- End SVG-->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Grid -->
    </div>
  </div>


  {{-- Brand Section Start --}}

  <section class="py-20">
    <div class="max-w-xl mx-auto">
      <div class="text-center ">
        <div class="relative flex flex-col items-center">
          <h1 class="text-5xl font-bold dark:text-gray-200"> Xem các thương hiệu<span class="text-blue-500"> phổ biến
            </span> </h1>
          <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
            <div class="flex-1 h-2 bg-blue-200">
            </div>
            <div class="flex-1 h-2 bg-blue-400">
            </div>
            <div class="flex-1 h-2 bg-blue-600">
            </div>
          </div>
        </div>
        <p class="mb-12 text-base text-center text-gray-500">
          Xem các thương hiệu phổ biến, chọn lựa những cái tên uy tín. Mỗi thương hiệu, một phong cách, một niềm tin để
          bạn gửi gắm.
        </p>
      </div>
    </div>
    <div class="justify-center max-w-6xl px-4 py-4 mx-auto lg:py-0">
      <div class="grid grid-cols-1 gap-6 lg:grid-cols-4 md:grid-cols-2">

        @foreach ($brands as $brand)

        <div class="bg-white rounded-lg shadow-md dark:bg-gray-800" wire:key="{{ $brand->id }}">
          <a href="/products?selected_brands[0]={{ $brand->id }}" class="">
            <img src="{{ url('storage', $brand->image) }}" alt="{{ $brand->name }}"
              class="object-cover w-full h-64 rounded-t-lg">
          </a>
          <div class="p-5 text-center">
            <a href="" class="text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-300">
              {{ $brand->name }}
            </a>
          </div>
        </div>

        @endforeach

      </div>
    </div>
  </section>

  {{-- Brand Section End --}}



  {{-- Category Section Start --}}

  <div class="bg-orange-200 py-20">
    <div class="max-w-xl mx-auto">
      <div class="text-center ">
        <div class="relative flex flex-col items-center">
          <h1 class="text-5xl font-bold dark:text-gray-200"> Xem các danh mục<span class="text-blue-500"> phổ biến
            </span> </h1>
          <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
            <div class="flex-1 h-2 bg-blue-200">
            </div>
            <div class="flex-1 h-2 bg-blue-400">
            </div>
            <div class="flex-1 h-2 bg-blue-600">
            </div>
          </div>
        </div>
        <p class="mb-12 text-base text-center text-gray-500">
          Xem các danh mục phổ biến, chọn nhanh điều bạn thích. Mỗi danh mục, một thế giới riêng, sẵn sàng để khám phá.
        </p>
      </div>
    </div>

    <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
      <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 sm:gap-6">

        @foreach ($categories as $category)

        <a class="group flex flex-col bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-900 dark:border-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
          href="/products?selected_categories[0]={{ $category->id }}" wire:key="{{ $category->name }}">
          <div class="p-4 md:p-5">
            <div class="flex justify-between items-center">
              <div class="flex items-center">
                <img class="h-[2.375rem] w-[2.375rem] rounded-full" src="{{ url('storage', $category->image) }}"
                  alt="{{ $category->name }}">
                <div class="ms-3">
                  <h3
                    class="group-hover:text-blue-600 font-semibold text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200">
                    {{ $category->name }}
                  </h3>
                </div>
              </div>
              <div class="ps-3">
                <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path d="m9 18 6-6-6-6" />
                </svg>
              </div>
            </div>
          </div>
        </a>

        @endforeach

      </div>
    </div>

  </div>

  {{-- Category Section End --}}


  {{-- Reviews Section Start --}}

  <section class="py-14 font-poppins dark:bg-gray-800">
    <div class="max-w-6xl px-4 py-6 mx-auto lg:py-4 md:px-6">
      <div class="max-w-xl mx-auto">
        <div class="text-center ">
          <div class="relative flex flex-col items-center">
            <h1 class="text-5xl font-bold dark:text-gray-200"> Đánh giá khách hàng<span class="text-blue-500">
              </span> </h1>
            <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
              <div class="flex-1 h-2 bg-blue-200">
              </div>
              <div class="flex-1 h-2 bg-blue-400">
              </div>
              <div class="flex-1 h-2 bg-blue-600">
              </div>
            </div>
          </div>
          <p class="mb-12 text-base text-center text-gray-500">
            Đánh giá khách hàng, lắng nghe từng phản hồi chân thật. Mỗi đánh giá, một góc nhìn, góp phần hoàn thiện dịch
            vụ tốt hơn.
          </p>
        </div>
      </div>

      <div class="grid grid-cols-1 gap-6 lg:grid-cols-2 ">
        <div class="py-6 bg-white rounded-md shadow dark:bg-gray-900">
          <div class="flex flex-wrap items-center justify-between pb-4 mb-6 space-x-2 border-b dark:border-gray-700">
            <div class="flex items-center px-6 mb-2 md:mb-0 ">
              <div class="flex mr-2 rounded-full">
                <img src="https://i.postimg.cc/rF6G0Dh9/pexels-emmy-e-2381069.jpg" alt=""
                  class="object-cover w-12 h-12 rounded-full">
              </div>
              <div>
                <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-300">
                  Việt Anh</h2>
                <p class="text-xs text-gray-500 dark:text-gray-400">Web Designer</p>
              </div>
            </div>
            <p class="px-6 text-base font-medium text-gray-600 dark:text-gray-400"> Tham gia ngày 1/5/2025
            </p>
          </div>
          <p class="px-6 mb-6 text-base text-gray-500 dark:text-gray-400">
            Dịch vụ thật sự ấn tượng, giao diện dễ dùng, thao tác nhanh gọn. Mọi thứ được thiết kế hợp lý, mang lại trải
            nghiệm tuyệt vời cho người làm web.
          </p>
          <div class="flex flex-wrap justify-between pt-4 border-t dark:border-gray-700">
            <div class="flex px-6 mb-2 md:mb-0">
              <ul class="flex items-center justify-start mr-4">
                <li>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                      </path>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                      </path>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                      </path>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                      </path>
                    </svg>
                  </a>
                </li>
              </ul>
              <h2 class="text-sm text-gray-500 dark:text-gray-400">Điểm số:<span
                  class="font-semibold text-gray-600 dark:text-gray-300">
                  4.8</span>
              </h2>
            </div>
            <div class="flex items-center px-6 space-x-1 text-sm font-medium text-gray-500 dark:text-gray-400">
              <div class="flex items-center">
                <div class="flex mr-3 text-sm text-gray-700 dark:text-gray-400">
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 h-4 mr-1 text-blue-400 bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                      <path
                        d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z">
                      </path>
                    </svg>
                  </a>
                  <span>10</span>
                </div>
                <div class="flex text-sm text-gray-700 dark:text-gray-400">
                  <a href="#" class="inline-flex hover:underline">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 h-4 mr-1 text-blue-400 bi bi-chat" viewBox="0 0 16 16">
                      <path
                        d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z">
                      </path>
                    </svg>Trả lời</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="py-6 bg-white rounded-md shadow dark:bg-gray-900">
          <div class="flex flex-wrap items-center justify-between pb-4 mb-6 space-x-2 border-b dark:border-gray-700">
            <div class="flex items-center px-6 mb-2 md:mb-0 ">
              <div class="flex mr-2 rounded-full">
                <img src="https://i.postimg.cc/q7pv50zT/pexels-edmond-dant-s-4342352.jpg" alt=""
                  class="object-cover w-12 h-12 rounded-full">
              </div>
              <div>
                <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-300">
                  Cường Mech</h2>
                <p class="text-xs text-gray-500 dark:text-gray-400">Quản lý</p>
              </div>
            </div>
            <p class="px-6 text-base font-medium text-gray-600 dark:text-gray-400"> Tham gia ngày 2/5/2025
            </p>
          </div>
          <p class="px-6 mb-6 text-base text-gray-500 dark:text-gray-400">
            Đội ngũ chuyên nghiệp, hỗ trợ tận tình, mọi vấn đề đều được giải quyết nhanh chóng. Chất lượng dịch vụ xứng
            đáng với chi phí bỏ ra.
          </p>
          <div class="flex flex-wrap justify-between pt-4 border-t dark:border-gray-700">
            <div class="flex px-6 mb-2 md:mb-0">
              <ul class="flex items-center justify-start mr-4">
                <li>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                      </path>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                      </path>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                      </path>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                      </path>
                    </svg>
                  </a>
                </li>
              </ul>
              <h2 class="text-sm text-gray-500 dark:text-gray-400">Điểm số:<span
                  class="font-semibold text-gray-600 dark:text-gray-300">
                  4.4</span>
              </h2>
            </div>
            <div class="flex items-center px-6 space-x-1 text-sm font-medium text-gray-500 dark:text-gray-400">
              <div class="flex items-center">
                <div class="flex mr-3 text-sm text-gray-700 dark:text-gray-400">
                  <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 h-4 mr-1 text-blue-400 bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                      <path
                        d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z">
                      </path>
                    </svg></a>
                  <span>8</span>
                </div>
                <div class="flex text-sm text-gray-700 dark:text-gray-400">
                  <a href="#" class="inline-flex hover:underline">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 h-4 mr-1 text-blue-400 bi bi-chat" viewBox="0 0 16 16">
                      <path
                        d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z">
                      </path>
                    </svg>Trả lời</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="py-6 bg-white rounded-md shadow dark:bg-gray-900">
          <div class="flex flex-wrap items-center justify-between pb-4 mb-6 space-x-2 border-b dark:border-gray-700">
            <div class="flex items-center px-6 mb-2 md:mb-0 ">
              <div class="flex mr-2 rounded-full">
                <img src="https://i.postimg.cc/JzmrHQmk/pexels-pixabay-220453.jpg" alt=""
                  class="object-cover w-12 h-12 rounded-full">
              </div>
              <div>
                <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-300">
                  Thái</h2>
                <p class="text-xs text-gray-500 dark:text-gray-400">Quản lý marketing</p>
              </div>
            </div>
            <p class="px-6 text-base font-medium text-gray-600 dark:text-gray-400"> Tham gia ngày 3/5/2025
            </p>
          </div>
          <p class="px-6 mb-6 text-base text-gray-500 dark:text-gray-400">
            Công cụ này giúp tôi theo dõi dữ liệu dễ dàng, báo cáo rõ ràng, phù hợp cho mọi chiến dịch. Một lựa chọn
            đáng tin cậy cho marketer.
          </p>
          <div class="flex flex-wrap justify-between pt-4 border-t dark:border-gray-700">
            <div class="flex px-6 mb-2 md:mb-0">
              <ul class="flex items-center justify-start mr-4">
                <li>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                      </path>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                      </path>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                      </path>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                      </path>
                    </svg>
                  </a>
                </li>
              </ul>
              <h2 class="text-sm text-gray-500 dark:text-gray-400">Đánh giá:<span
                  class="font-semibold text-gray-600 dark:text-gray-300">
                  4.3</span>
              </h2>
            </div>
            <div class="flex items-center px-6 space-x-1 text-sm font-medium text-gray-500 dark:text-gray-400">
              <div class="flex items-center">
                <div class="flex mr-3 text-sm text-gray-700 dark:text-gray-400">
                  <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 h-4 mr-1 text-blue-400 bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                      <path
                        d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z">
                      </path>
                    </svg></a>
                  <span>5</span>
                </div>
                <div class="flex text-sm text-gray-700 dark:text-gray-400">
                  <a href="#" class="inline-flex hover:underline">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 h-4 mr-1 text-blue-400 bi bi-chat" viewBox="0 0 16 16">
                      <path
                        d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z">
                      </path>
                    </svg>Trả lời</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="py-6 bg-white rounded-md shadow dark:bg-gray-900">
          <div class="flex flex-wrap items-center justify-between pb-4 mb-6 space-x-2 border-b dark:border-gray-700">
            <div class="flex items-center px-6 mb-2 md:mb-0 ">
              <div class="flex mr-2 rounded-full">
                <img src="https://i.postimg.cc/4NMZPYdh/pexels-dinielle-de-veyra-4195342.jpg" alt=""
                  class="object-cover w-12 h-12 rounded-full">
              </div>
              <div>
                <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-300">
                  Đức Việt</h2>
                <p class="text-xs text-gray-500 dark:text-gray-400">Java Programmer</p>
              </div>
            </div>
            <p class="px-6 text-base font-medium text-gray-600 dark:text-gray-400"> Tham gia ngày 5/5/2025
            </p>
          </div>
          <p class="px-6 mb-6 text-base text-gray-500 dark:text-gray-400">
            Rất hài lòng với sự ổn định của hệ thống. API dễ tích hợp, tài liệu rõ ràng, hỗ trợ tốt cho lập trình viên
            Java như tôi.
          </p>
          <div class="flex flex-wrap justify-between pt-4 border-t dark:border-gray-700">
            <div class="flex px-6 mb-2 md:mb-0">
              <ul class="flex items-center justify-start mr-4">
                <li>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                      </path>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                      </path>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                      </path>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                      </path>
                    </svg>
                  </a>
                </li>
              </ul>
              <h2 class="text-sm text-gray-500 dark:text-gray-400">Đánh giá:<span
                  class="font-semibold text-gray-600 dark:text-gray-300">
                  4.6</span>
              </h2>
            </div>
            <div class="flex items-center px-6 space-x-1 text-sm font-medium text-gray-500 dark:text-gray-400">
              <div class="flex items-center">
                <div class="flex mr-3 text-sm text-gray-700 dark:text-gray-400">
                  <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 h-4 mr-1 text-blue-400 bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                      <path
                        d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z">
                      </path>
                    </svg></a>
                  <span>5</span>
                </div>
                <div class="flex text-sm text-gray-700 dark:text-gray-400">
                  <a href="#" class="inline-flex hover:underline">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 h-4 mr-1 text-blue-400 bi bi-chat" viewBox="0 0 16 16">
                      <path
                        d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z">
                      </path>
                    </svg>Trả lời</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="py-6 bg-white rounded-md shadow dark:bg-gray-900">
          <div class="flex flex-wrap items-center justify-between pb-4 mb-6 space-x-2 border-b dark:border-gray-700">
            <div class="flex items-center px-6 mb-2 md:mb-0 ">
              <div class="flex mr-2 rounded-full">
                <img src="https://i.postimg.cc/4NMZPYdh/pexels-dinielle-de-veyra-4195342.jpg" alt=""
                  class="object-cover w-12 h-12 rounded-full">
              </div>
              <div>
                <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-300">
                  Duy Hưng</h2>
                <p class="text-xs text-gray-500 dark:text-gray-400">Khách hàng</p>
              </div>
            </div>
            <p class="px-6 text-base font-medium text-gray-600 dark:text-gray-400"> Tham gia ngày 7/5/2025
            </p>
          </div>
          <p class="px-6 mb-6 text-base text-gray-500 dark:text-gray-400">
            Shop phục vụ rất chu đáo, sản phẩm đẹp, chất lượng tốt, giá cả hợp lý. Tôi sẽ tiếp tục ủng hộ trong những
            lần mua sắm tới.
          </p>
          <div class="flex flex-wrap justify-between pt-4 border-t dark:border-gray-700">
            <div class="flex px-6 mb-2 md:mb-0">
              <ul class="flex items-center justify-start mr-4">
                <li>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                      </path>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                      </path>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                      </path>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                      </path>
                    </svg>
                  </a>
                </li>
              </ul>
              <h2 class="text-sm text-gray-500 dark:text-gray-400">Đánh giá:<span
                  class="font-semibold text-gray-600 dark:text-gray-300">
                  4.0</span>
              </h2>
            </div>
            <div class="flex items-center px-6 space-x-1 text-sm font-medium text-gray-500 dark:text-gray-400">
              <div class="flex items-center">
                <div class="flex mr-3 text-sm text-gray-700 dark:text-gray-400">
                  <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 h-4 mr-1 text-blue-400 bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                      <path
                        d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z">
                      </path>
                    </svg></a>
                  <span>3</span>
                </div>
                <div class="flex text-sm text-gray-700 dark:text-gray-400">
                  <a href="#" class="inline-flex hover:underline">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 h-4 mr-1 text-blue-400 bi bi-chat" viewBox="0 0 16 16">
                      <path
                        d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z">
                      </path>
                    </svg>Trả lời</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="py-6 bg-white rounded-md shadow dark:bg-gray-900">
          <div class="flex flex-wrap items-center justify-between pb-4 mb-6 space-x-2 border-b dark:border-gray-700">
            <div class="flex items-center px-6 mb-2 md:mb-0 ">
              <div class="flex mr-2 rounded-full">
                <img src="https://i.postimg.cc/4NMZPYdh/pexels-dinielle-de-veyra-4195342.jpg" alt=""
                  class="object-cover w-12 h-12 rounded-full">
              </div>
              <div>
                <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-300">
                  Vi Huấn</h2>
                <p class="text-xs text-gray-500 dark:text-gray-400">Khách hàng</p>
              </div>
            </div>
            <p class="px-6 text-base font-medium text-gray-600 dark:text-gray-400"> Tham gia ngày 8/5/2025
            </p>
          </div>
          <p class="px-6 mb-6 text-base text-gray-500 dark:text-gray-400">
            Trải nghiệm mua hàng tuyệt vời, nhân viên thân thiện, tư vấn nhiệt tình. Hàng hóa đa dạng, giao hàng nhanh,
            đáng tin cậy.
          </p>
          <div class="flex flex-wrap justify-between pt-4 border-t dark:border-gray-700">
            <div class="flex px-6 mb-2 md:mb-0">
              <ul class="flex items-center justify-start mr-4">
                <li>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                      </path>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                      </path>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                      </path>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                      </path>
                    </svg>
                  </a>
                </li>
              </ul>
              <h2 class="text-sm text-gray-500 dark:text-gray-400">Rating:<span
                  class="font-semibold text-gray-600 dark:text-gray-300">
                  4.3</span>
              </h2>
            </div>
            <div class="flex items-center px-6 space-x-1 text-sm font-medium text-gray-500 dark:text-gray-400">
              <div class="flex items-center">
                <div class="flex mr-3 text-sm text-gray-700 dark:text-gray-400">
                  <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 h-4 mr-1 text-blue-400 bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                      <path
                        d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z">
                      </path>
                    </svg></a>
                  <span>2</span>
                </div>
                <div class="flex text-sm text-gray-700 dark:text-gray-400">
                  <a href="#" class="inline-flex hover:underline">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 h-4 mr-1 text-blue-400 bi bi-chat" viewBox="0 0 16 16">
                      <path
                        d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z">
                      </path>
                    </svg>Trả lời</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="py-6 bg-white rounded-md shadow dark:bg-gray-900">
          <div class="flex flex-wrap items-center justify-between pb-4 mb-6 space-x-2 border-b dark:border-gray-700">
            <div class="flex items-center px-6 mb-2 md:mb-0 ">
              <div class="flex mr-2 rounded-full">
                <img src="https://i.postimg.cc/4NMZPYdh/pexels-dinielle-de-veyra-4195342.jpg" alt=""
                  class="object-cover w-12 h-12 rounded-full">
              </div>
              <div>
                <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-300">
                  Hữu Phú</h2>
                <p class="text-xs text-gray-500 dark:text-gray-400">Khách hàng</p>
              </div>
            </div>
            <p class="px-6 text-base font-medium text-gray-600 dark:text-gray-400"> Tham gia ngày 5/5/2025
            </p>
          </div>
          <p class="px-6 mb-6 text-base text-gray-500 dark:text-gray-400">
            Tôi rất hài lòng với dịch vụ tại shop, đóng gói cẩn thận, sản phẩm giống mô tả, mua online nhưng cảm giác an
            tâm như mua trực tiếp.
          </p>
          <div class="flex flex-wrap justify-between pt-4 border-t dark:border-gray-700">
            <div class="flex px-6 mb-2 md:mb-0">
              <ul class="flex items-center justify-start mr-4">
                <li>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                      </path>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                      </path>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                      </path>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                      </path>
                    </svg>
                  </a>
                </li>
              </ul>
              <h2 class="text-sm text-gray-500 dark:text-gray-400">Rating:<span
                  class="font-semibold text-gray-600 dark:text-gray-300">
                  4.1</span>
              </h2>
            </div>
            <div class="flex items-center px-6 space-x-1 text-sm font-medium text-gray-500 dark:text-gray-400">
              <div class="flex items-center">
                <div class="flex mr-3 text-sm text-gray-700 dark:text-gray-400">
                  <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 h-4 mr-1 text-blue-400 bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                      <path
                        d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z">
                      </path>
                    </svg></a>
                  <span>1</span>
                </div>
                <div class="flex text-sm text-gray-700 dark:text-gray-400">
                  <a href="#" class="inline-flex hover:underline">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 h-4 mr-1 text-blue-400 bi bi-chat" viewBox="0 0 16 16">
                      <path
                        d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z">
                      </path>
                    </svg>Trả lời</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="py-6 bg-white rounded-md shadow dark:bg-gray-900">
          <div class="flex flex-wrap items-center justify-between pb-4 mb-6 space-x-2 border-b dark:border-gray-700">
            <div class="flex items-center px-6 mb-2 md:mb-0 ">
              <div class="flex mr-2 rounded-full">
                <img src="https://i.postimg.cc/4NMZPYdh/pexels-dinielle-de-veyra-4195342.jpg" alt=""
                  class="object-cover w-12 h-12 rounded-full">
              </div>
              <div>
                <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-300">
                  Đình Quý</h2>
                <p class="text-xs text-gray-500 dark:text-gray-400">Khách hàng</p>
              </div>
            </div>
            <p class="px-6 text-base font-medium text-gray-600 dark:text-gray-400"> Tham gia ngày 9/5/2025
            </p>
          </div>
          <p class="px-6 mb-6 text-base text-gray-500 dark:text-gray-400">
            Shop mang đến trải nghiệm mua sắm thoải mái, không gian sạch đẹp, nhân viên lịch sự, sản phẩm chất lượng
            cao, sẽ giới thiệu cho bạn bè.
          </p>
          <div class="flex flex-wrap justify-between pt-4 border-t dark:border-gray-700">
            <div class="flex px-6 mb-2 md:mb-0">
              <ul class="flex items-center justify-start mr-4">
                <li>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                      </path>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                      </path>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                      </path>
                    </svg>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 mr-1 text-blue-500 dark:text-blue-400 bi bi-star-fill" viewBox="0 0 16 16">
                      <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                      </path>
                    </svg>
                  </a>
                </li>
              </ul>
              <h2 class="text-sm text-gray-500 dark:text-gray-400">Đánh giá:<span
                  class="font-semibold text-gray-600 dark:text-gray-300">
                  4.5</span>
              </h2>
            </div>
            <div class="flex items-center px-6 space-x-1 text-sm font-medium text-gray-500 dark:text-gray-400">
              <div class="flex items-center">
                <div class="flex mr-3 text-sm text-gray-700 dark:text-gray-400">
                  <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 h-4 mr-1 text-blue-400 bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                      <path
                        d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z">
                      </path>
                    </svg></a>
                  <span>4</span>
                </div>
                <div class="flex text-sm text-gray-700 dark:text-gray-400">
                  <a href="#" class="inline-flex hover:underline">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="w-4 h-4 mr-1 text-blue-400 bi bi-chat" viewBox="0 0 16 16">
                      <path
                        d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z">
                      </path>
                    </svg>Trả lời</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  {{-- Reviews Section End --}}

  {{-- Floating Social Icons Start --}}
  <div class="fixed bottom-4 right-4 z-50 flex flex-col gap-4">
    <!-- Messenger -->
    <a href="https://m.me/61575873126267" target="_blank" title="Chat Messenger"
      class="flex items-center justify-center w-14 h-14 rounded-full bg-[#0A7CFF] hover:bg-[#0973e7] transition-colors duration-300 shadow-lg hover:shadow-xl">
      <img src="{{ asset('storage/Facebook_Messenger_logo_2025.svg.png') }}" class="w-8 h-8" alt="Messenger" />
    </a>

    <!-- Zalo -->
    <a href="https://zalo.me/0352559313" target="_blank"
      class="flex items-center justify-center w-14 h-14 rounded-full bg-[#0068ff] hover:bg-[#0055d4] transition-colors duration-300 shadow-lg hover:shadow-xl">
      <img src="{{ asset('storage/Logo-Zalo-Arc.webp') }}" class="w-8 h-8" alt="Zalo" />
    </a>
  </div>
  {{-- Floating Social Icons End --}}

</div>