<div>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="md:grid md:grid-cols-3 md:gap-6 p-10">
            <div class="md:col-span-1">

                <div class="overflow-hidden shadow sm:rounded-md bg-white px-4 py-5 sm:p-6">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">FIND BARANGAY</h3>
                    </div>
                    <form wire:submit.prevent="storeProduct" method="POST">
                        <div class="mt-4">
                            <div class="">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-6">
                                        <label for="barcode"
                                            class="block text-sm font-medium text-gray-700">PROVINCE</label>
                                        <select wire:model.lazy="name" name="name"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                            <option value="ml">Milliliter</option>
                                            <option value="pieces">Pieces</option>
                                        </select>
                                        @error('name')
                                            <span class="text-red-600 mt-2">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-span-6 sm:col-span-6">
                                        <label for="barcode"
                                            class="block text-sm font-medium text-gray-700">MUNICIPALITY / CITY</label>
                                        <select wire:model.lazy="name" name="name"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                            <option value="ml">Milliliter</option>
                                            <option value="pieces">Pieces</option>
                                        </select>
                                        @error('name')
                                            <span class="text-red-600 mt-2">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="quantity"
                                            class="block text-sm font-medium text-gray-700">BARANGAY</label>
                                        <select wire:model.lazy="name" name="name"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                            <option value="ml">Milliliter</option>
                                            <option value="pieces">Pieces</option>
                                        </select>
                                        @error('quantity')
                                            <span class="text-red-600 mt-2">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="stock_alert" class="block text-sm font-medium text-gray-700">Stock
                                            Alert</label>
                                        <input type="number" wire:model.lazy="stock_alert" name="stock_alert"
                                            id="stock_alert"
                                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        @error('stock_alert')
                                            <span class="text-red-600 mt-2">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="py-3 text-right">
                                <button type="submit"
                                    class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <div class="mt-5 md:col-span-2 md:mt-0">
                <div class="overflow-hidden shadow sm:rounded-md">
                    <div class="bg-white px-4 py-5 sm:p-6">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">LIST OF BARANGAY</h3>

                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left text-gray-500">
                                <thead class="text-xs text-gray-700 uppercase bg-white-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            PROVINCE
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            MUNICIPALITY
                                        </th>

                                        <th scope="col" class="px-6 py-3">
                                            BARANGAY
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <span class="sr-only">ACTION</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($dataLists as $item)
                                        <tr class=" border-b">
                                            <th scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                                {{ $item }}
                                            </th>
                                            <td class="px-6 py-4">

                                            </td>
                                            <td class="px-6 py-4">

                                            </td>
                                            <td class="px-6 py-4 text-right">
                                                <a href="#"
                                                    class="font-medium text-blue-600 hover:underline">Edit</a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap "
                                                colspan="4">NO DATA RECORD</th>
                                        </tr>
                                    @endforelse
                                    {{-- @if (count($products) > 0)
                                        @foreach ($products as $product)
                                            <tr class=" border-b">
                                                <th scope="row"
                                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                                    {{ $product->product_barcode }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $product->product_name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $product->product_price }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $product->total_quantity() }}
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                                    </td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr class=" border-b">
                                        <th scope="row" colspan="5" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                            No Product Data
                                        </th>
                                    </tr>
                                    @endif --}}

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
