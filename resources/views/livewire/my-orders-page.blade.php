<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
  <h1 class="text-4xl font-bold text-slate-500">Đơn hàng của tôi</h1>
  <div class="flex flex-col bg-white p-5 rounded mt-4 shadow-lg">
    <div class="-m-1.5 overflow-x-auto">
      <div class="p-1.5 min-w-full inline-block align-middle">
        <div class="overflow-hidden">
          <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
            <thead>
              <tr>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Đơn hàng</th>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Ngày đặt hàng
                </th>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Trạng thái đơn
                  hàng</th>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Trạng thái
                  thanh toán</th>
                <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Số tiền đơn
                  hàng</th>
                <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Hành động</th>
              </tr>
            </thead>
            <tbody>
              @foreach($orders as $order)
              <tr class="odd:bg-white even:bg-gray-100 dark:odd:bg-slate-900 dark:even:bg-slate-800">
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">{{
                  $order->order_number }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{
                  $order->created_at->format('d-m-Y') }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                  <span
                    class="@if($order->status === 'new') bg-blue-500 @elseif($order->status === 'processing') bg-orange-500 @else bg-green-500 @endif py-1 px-3 rounded text-white shadow">
                    {{ $order->status === 'new' ? 'Mới' : ($order->status === 'processing' ? 'Đang xử lý' : 'Hoàn
                    thành') }}
                  </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                  <span
                    class="@if($order->payment_status === 'pending') bg-orange-500 @else bg-green-500 @endif py-1 px-3 rounded text-white shadow">
                    {{ $order->payment_status === 'pending' ? 'Chưa thanh toán' : 'Đã thanh toán' }}
                  </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{
                  number_format($order->grand_total, 0, ',', '.') }}₫</td>
                <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                  <a href="{{ route('my-order-details', $order->id) }}"
                    class="bg-slate-600 text-white py-2 px-4 rounded-md hover:bg-slate-500">Xem chi tiết</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>