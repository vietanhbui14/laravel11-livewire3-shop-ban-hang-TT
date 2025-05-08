<div class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
	<h1 class="text-2xl font-bold text-gray-800 dark:text-white mb-4">
		Thanh toán
	</h1>
	<div class="grid grid-cols-12 gap-4">
		<div class="md:col-span-12 lg:col-span-8 col-span-12">
			<!-- Card -->
			<div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
				<!-- Shipping Address -->
				<div class="mb-6">
					<h2 class="text-xl font-bold underline text-gray-700 dark:text-white mb-2">
						Địa chỉ giao hàng
					</h2>
					<div class="grid grid-cols-2 gap-4">
						<div>
							<label class="block text-gray-700 dark:text-white mb-1" for="first_name">
								Tên
							</label>
							<input
								class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none"
								id="first_name" type="text" wire:model.defer="first_name">
							</input>
							@error('first_name')
							<span class="text-red-500 text-xs">{{ $message }}</span>
							@enderror
						</div>
						<div>
							<label class="block text-gray-700 dark:text-white mb-1" for="last_name">
								Họ
							</label>
							<input
								class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none"
								id="last_name" type="text" wire:model.defer="last_name">
							</input>
							@error('last_name')
							<span class="text-red-500 text-xs">{{ $message }}</span>
							@enderror
						</div>
						<div class="mt-4">
							<label class="block text-gray-700 dark:text-white mb-1" for="phone">
								SĐT
							</label>
							<input
								class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none"
								id="phone" type="text" wire:model.defer="phone">
							</input>
							@error('phone')
							<span class="text-red-500 text-xs">{{ $message }}</span>
							@enderror
						</div>
						<div class="mt-4">
							<label class="block text-gray-700 dark:text-white mb-1" for="address">
								Địa chỉ
							</label>
							<input
								class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none"
								id="address" type="text" wire:model.defer="address">
							</input>
							@error('address')
							<span class="text-red-500 text-xs">{{ $message }}</span>
							@enderror
						</div>
						<div class="mt-4">
							<label class="block text-gray-700 dark:text-white mb-1" for="city">
								Thành phố
							</label>
							<input
								class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none"
								id="city" type="text" wire:model.defer="city">
							</input>
							@error('city')
							<span class="text-red-500 text-xs">{{ $message }}</span>
							@enderror
						</div>
						<div class="mt-4">
							<label class="block text-gray-700 dark:text-white mb-1" for="email">
								E-mail
							</label>
							<input
								class="w-full rounded-lg border py-2 px-3 dark:bg-gray-700 dark:text-white dark:border-none"
								id="email" type="email" wire:model.defer="email">
							</input>
							@error('email')
							<span class="text-red-500 text-xs">{{ $message }}</span>
							@enderror
						</div>
					</div>
					<div class="text-lg font-semibold mb-4">
						Chọn phương thức thanh toán
					</div>
					<div class="flex flex-col gap-4 mb-4">
						<label class="flex items-center gap-2 cursor-pointer">
							<input type="radio" wire:model="payment_method" value="cod"
								class="form-radio text-blue-600" />
							<span>Ship COD (Thanh toán khi nhận hàng)</span>
						</label>
						<label class="flex items-center gap-2 cursor-pointer">
							<input type="radio" wire:model="payment_method" value="bank"
								class="form-radio text-blue-600" />
							<span>Chuyển khoản Ngân hàng</span>
						</label>
					</div>

					<div class="mt-2 flex flex-col items-center animate-fade-in">
						<span class="mb-2 text-sm text-gray-600">Quét mã QR để chuyển khoản:</span>
						<img src="/frontend/MyQR.jpg" alt="QR chuyển khoản"
							class="w-48 h-48 object-contain border rounded shadow" />
						<span class="mt-2 text-xs text-gray-500">Nội dung chuyển khoản: SĐT + Họ tên</span>
					</div>

					@if($errors->has('cart'))
					<div class="text-red-500 text-center mt-2">{{ $errors->first('cart') }}</div>
					@endif
					@if($errors->has('checkout'))
					<div class="text-red-500 text-center mt-2">{{ $errors->first('checkout') }}</div>
					@endif

				</div>
				<!-- End Card -->
			</div>
			<div class="md:col-span-12 lg:col-span-4 col-span-12">
				<div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900">
					<div class="text-xl font-bold underline text-gray-700 dark:text-white mb-2">
						TÓM TẮT ĐƠN HÀNG
					</div>
					<div class="flex justify-between mb-2 font-bold">
						<span>
							Tổng
						</span>
						<span>
							{{ number_format($grand_total, 0, ',', '.') }}₫
						</span>
					</div>
					<div class="flex justify-between mb-2 font-bold">
						<span>
							Thuế
						</span>
						<span>
							{{ number_format($tax, 0, ',', '.') }}₫
						</span>
					</div>
					<div class="flex justify-between mb-2 font-bold">
						<span>
							Vận chuyển
						</span>
						<span>
							{{ number_format($shipping, 0, ',', '.') }}₫
						</span>
					</div>
					<hr class="bg-slate-400 my-4 h-1 rounded">
					<div class="flex justify-between mb-2 font-bold">
						<span>
							Tổng
						</span>
						<span>
							{{ number_format($grand_total + $tax + $shipping, 0, ',', '.') }}₫
						</span>
					</div>
					</hr>
				</div>
				<button wire:loading.attr="disabled" wire:click="placeOrder"
					class="bg-green-500 mt-4 w-full p-3 rounded-lg text-lg text-white hover:bg-green-600">
					<span wire:loading.remove>ĐẶT HÀNG</span>
					<span wire:loading>
						<svg class="inline mr-2 w-4 h-4 animate-spin" viewBox="0 0 24 24">
							<circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
							</circle>
							<path class="opacity-75" fill="currentCslor"
								d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
							</path>
						</svg>
						Đang xử lý...
					</span>
				</button>

				@if($errors->has('checkout'))
				<div class="mt-4 p-4 text-red-500 bg-red-100 rounded">
					{{ $errors->first('checkout') }}
				</div>
				@endif

				@if($errors->any())
				<div class="mt-4 p-4 text-red-500 bg-red-100 rounded">
					<ul class="list-disc list-inside">
						@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif
				<div class="mt-4">
					<a href="/products"
						class="w-full text-center px-4 py-2 text-blue-500 border border-blue-500 rounded-md md:w-auto hover:text-white hover:bg-blue-600 dark:border-gray-700 dark:hover:bg-gray-700 dark:text-gray-300">
						Quay lại mua hàng
					</a>
				</div>
			</div>
		</div>
	</div>
</div>