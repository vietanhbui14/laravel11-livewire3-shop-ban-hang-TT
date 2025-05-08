<section class="flex items-center font-poppins dark:bg-gray-800 ">
  <div
    class="justify-center flex-1 max-w-6xl px-4 py-4 mx-auto bg-white border rounded-md dark:border-gray-900 dark:bg-gray-900 md:py-10 md:px-10">
    <div>
      @if(!$orderFound)
      <div class="text-center text-red-500 font-bold py-10">Không tìm thấy đơn hàng!</div>
      @else
      <h1 class="px-4 mb-8 text-2xl font-semibold tracking-wide text-gray-700 dark:text-gray-300 ">
        @if($order->status === 'new' || $order->status === 'pending')
        Đặt hàng thành công!
        @else
        Đặt hàng thất bại!
        @endif
      </h1>
      <div class="flex flex-wrap items-center pb-4 mb-10 border-b border-gray-200 dark:border-gray-700">
        <div class="w-full px-4 mb-4 md:w-1/4">
          <p class="mb-2 text-sm leading-5 text-gray-600 dark:text-gray-400 ">Mã đơn hàng:</p>
          <p class="text-base font-semibold leading-4 text-gray-800 dark:text-gray-400">{{ $order->order_number }}</p>
        </div>
        <div class="w-full px-4 mb-4 md:w-1/4">
          <p class="mb-2 text-sm leading-5 text-gray-600 dark:text-gray-400 ">Ngày:</p>
          <p class="text-base font-semibold leading-4 text-gray-800 dark:text-gray-400">{{
            $order->created_at->format('d-m-Y') }}</p>
        </div>
        <div class="w-full px-4 mb-4 md:w-1/4">
          <p class="mb-2 text-sm font-medium leading-5 text-gray-800 dark:text-gray-400 ">Tổng cộng:</p>
          <p class="text-base font-semibold leading-4 text-blue-600 dark:text-gray-400">{{
            number_format($order->grand_total, 0, ',', '.') }}₫</p>
        </div>
        <div class="w-full px-4 mb-4 md:w-1/4">
          <p class="mb-2 text-sm leading-5 text-gray-600 dark:text-gray-400 ">Phương thức thanh toán:</p>
          <p class="text-base font-semibold leading-4 text-gray-800 dark:text-gray-400">{{ $order->payment_method ===
            'cod' ? 'Thanh toán khi nhận hàng' : 'Chuyển khoản Ngân hàng' }}</p>
        </div>
      </div>
      <div class="px-4 mb-10">
        <div class="flex flex-col md:flex-row gap-8">
          <div class="w-full md:w-1/2">
            <h2 class="mb-2 text-xl font-semibold text-gray-700 dark:text-gray-400">Thông tin khách hàng</h2>
            <div class="mb-2">Tên: <span class="font-semibold">{{ $order->address->first_name }} {{
                $order->address->last_name }}</span>
            </div>
            <div class="mb-2">SĐT: <span class="font-semibold">{{ $order->address->phone }}</span></div>
            <div class="mb-2">Địa chỉ: <span class="font-semibold">{{ $order->address->street_address }}, {{
                $order->address->city }}</span></div>
          </div>
          <div class="w-full md:w-1/2">
            <h2 class="mb-2 text-xl font-semibold text-gray-700 dark:text-gray-400">Sản phẩm đã đặt</h2>
            <table class="w-full text-left border">
              <thead>
                <tr>
                  <th class="p-2 border">Tên sản phẩm</th>
                  <th class="p-2 border">Giá</th>
                  <th class="p-2 border">Số lượng</th>
                  <th class="p-2 border">Tổng</th>
                </tr>
              </thead>
              <tbody>
                @foreach($order->items as $item)
                <tr>
                  <td class="p-2 border">{{ $item->product->name }}</td>
                  <td class="p-2 border">{{ number_format($item->unit_amount, 0, ',', '.') }} ₫</td>
                  <td class="p-2 border">{{ $item->quantity }}</td>
                  <td class="p-2 border">{{ number_format($item->total_amount, 0, ',', '.') }} ₫</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="flex items-center justify-start gap-4 px-4 mt-6 ">
        <a href="/products"
          class="w-full text-center px-4 py-2 text-blue-500 border border-blue-500 rounded-md md:w-auto hover:text-white hover:bg-blue-600 dark:border-gray-700 dark:hover:bg-gray-700 dark:text-gray-300">
          Quay lại mua hàng
        </a>
        <a href="{{ route('my-orders') }}"
          class="w-full text-center px-4 py-2 bg-blue-500 rounded-md text-gray-50 md:w-auto dark:text-gray-300 hover:bg-blue-600 dark:hover:bg-gray-700 dark:bg-gray-800">
          Xem đơn hàng của tôi
        </a>
      </div>
      @endif
    </div>
  </div>
</section>