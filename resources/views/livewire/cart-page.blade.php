<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
  <div class="container mx-auto px-4">
    <h1 class="text-2xl font-semibold mb-4">GIỎ HÀNG</h1>
    <div class="flex flex-col md:flex-row gap-4">
      <div class="md:w-3/4">
        <div class="bg-white overflow-x-auto rounded-lg shadow-md p-6 mb-4">
          <table class="w-full">
            <thead>
              <tr>
                <th class="text-left font-semibold">Sản phẩm</th>
                <th class="text-left font-semibold">Giá</th>
                <th class="text-left font-semibold">Số lượng</th>
                <th class="text-left font-semibold">Tổng</th>
                <th class="text-left font-semibold">Xóa</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($cart_items as $item)
              <tr>
                <td class="py-4">
                  <div class="flex items-center">
                    <img class="h-16 w-16 mr-4" src="{{ url('storage/' . $item['image']) }}" alt="Product image">
                    <span class="font-semibold">{{ $item['product_name'] }}</span>
                  </div>
                </td>
                <td class="py-4">{{ number_format($item['unit_amount'], 0, ',', '.') }}₫</td>
                <td class="py-4">
                  <div class="flex items-center">
                    <button wire:click="decrementQty('{{ $item['product_id'] }}')"
                      class="border rounded-md py-2 px-4 mr-2">-</button>
                    <span class="text-center w-8">{{ $item['quantity'] }}</span>
                    <button wire:click="incrementQty('{{ $item['product_id'] }}')"
                      class="border rounded-md py-2 px-4 ml-2">+</button>
                  </div>
                </td>
                <td class="py-4">{{ number_format($item['total_amount'], 0, ',', '.') }}₫</td>
                <td>
                  <button wire:click="removeItem('{{ $item['product_id'] }}')"
                    class="bg-slate-300 border-2 border-slate-400 rounded-lg px-3 py-1 hover:bg-red-500 hover:text-white hover:border-red-700">Remove</button>
                </td>
              </tr>
              @empty
              <tr>
                <td colspan="5" class="text-center py-8 text-gray-400">Giỏ hàng trống</td>
              </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
      <div class="md:w-1/4">
        <div class="bg-white rounded-lg shadow-md p-6">
          <h2 class="text-lg font-semibold mb-4">GIỎ HÀNG</h2>
          <div class="flex justify-between mb-2">
            <span>Tổng</span>
            <span>{{ number_format($grand_total, 0, ',', '.') }}₫</span>
          </div>
          <div class="flex justify-between mb-2">
            <span>Thuế</span>
            <span>{{ number_format($tax, 0, ',', '.') }}₫</span>
          </div>
          <div class="flex justify-between mb-2">
            <span>Vận chuyển</span>
            <span>{{ number_format($shipping, 0, ',', '.') }}₫</span>
          </div>
          <hr class="my-2">
          <div class="flex justify-between mb-2">
            <span class="font-semibold">Tổng tiền</span>
            <span class="font-semibold">{{ number_format($grand_total + $tax + $shipping, 0, ',', '.') }}₫</span>
          </div>
          <button class="bg-blue-500 text-white py-2 px-4 rounded-lg mt-4 w-full" wire:click="placeOrder">Thanh
            toán</button>
        </div>
      </div>
    </div>
  </div>
</div>