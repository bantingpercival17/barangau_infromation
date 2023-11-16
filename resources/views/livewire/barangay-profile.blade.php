<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Barangay Profile') }}
        </h2>
    </x-slot>
    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            {{-- General Information --}}
            <x-form-section submit="updatePassword">
                <x-slot name="title">
                    {{ __('GENERAL INFORMATION') }}
                </x-slot>

                <x-slot name="description">
                    {{ __('Barangay General Information') }}
                </x-slot>

                <x-slot name="form">

                    <div class="col-span-6 sm:col-span-6">
                        <x-label for="barangay" value="{{ __('Barangay') }}" />
                        <x-input id="barangay" type="text" class="mt-1 block w-full"
                            value="{{ $profile['name'] }}" />
                        <x-input-error for="barangay" class="mt-2" />
                    </div>

                    <div class="col-span-6 sm:col-span-2">
                        <x-label for="political_district" value="{{ __('Political District') }}" />
                        <x-input id="political_district" type="text" class="mt-1 block w-full"
                            wire:model.defer="state.political_district" />
                        <x-input-error for="political_district" class="mt-2" />
                    </div>

                    <div class="col-span-6 sm:col-span-2">
                        <x-label for="congressional_district" value="{{ __('Congressional District') }}" />
                        <x-input id="congressional_district" type="text" class="mt-1 block w-full"
                            wire:model.defer="state.congressional_district" autocomplete="new-password" />
                        <x-input-error for="congressional_district" class="mt-2" />
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <x-label for="leagl_base" value="{{ __('Legal Base of Creation') }}" />
                        <x-input id="leagl_base" type="text" class="mt-1 block w-full"
                            wire:model.defer="state.leagl_base" autocomplete="new-password" />
                        <x-input-error for="leagl_base" class="mt-2" />
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <x-label for="no_of_puroks" value="{{ __('No. of Purok/Sitios') }}" />
                        <x-input id="no_of_puroks" type="text" class="mt-1 block w-full"
                            wire:model.defer="state.no_of_puroks" autocomplete="new-password" />
                        <x-input-error for="no_of_puroks" class="mt-2" />
                    </div>
                </x-slot>
            </x-form-section>
            {{-- Local Goverment --}}
            <x-section-border />
            <div class="mt-10 sm:mt-0">
                <x-form-section submit="updatePassword">
                    <x-slot name="title">
                        {{ __('LOCAL GOVERMENT ADMINISTRATION') }}
                    </x-slot>

                    <x-slot name="description">
                        {{ __('List of the Barangay Officials') }}
                    </x-slot>

                    <x-slot name="form">
                        <div class="col-span-6 sm:col-span-6">
                            <x-label for="barangay" value="{{ __('Barangay Captain') }}" />
                            <x-input id="barangay" type="text" class="mt-1 block w-full"
                                wire:model.defer="state.barangay" />
                            <x-input-error for="barangay" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                            <x-label for="political_district" value="{{ __('Barangay Councilors') }}" />
                            <x-input id="political_district" type="text" class="mt-1 block w-full"
                                wire:model.defer="state.political_district" />
                            <x-input id="political_district" type="text" class="mt-1 block w-full"
                                wire:model.defer="state.political_district" />
                            <x-input id="political_district" type="text" class="mt-1 block w-full"
                                wire:model.defer="state.political_district" />
                            <x-input id="political_district" type="text" class="mt-1 block w-full"
                                wire:model.defer="state.political_district" />
                            <x-input id="political_district" type="text" class="mt-1 block w-full"
                                wire:model.defer="state.political_district" />
                            <x-input id="political_district" type="text" class="mt-1 block w-full"
                                wire:model.defer="state.political_district" />
                            <x-input id="political_district" type="text" class="mt-1 block w-full"
                                wire:model.defer="state.political_district" />
                            <x-input-error for="political_district" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                            <x-label for="congressional_district" value="{{ __('SK Chairpeson') }}" />
                            <x-input id="congressional_district" type="text" class="mt-1 block w-full"
                                wire:model.defer="state.congressional_district" autocomplete="new-password" />
                            <x-input-error for="congressional_district" class="mt-2" />
                        </div>

                    </x-slot>
                </x-form-section>
            </div>
            {{-- DEMOGRAPHY --}}
            <x-section-border />
            <div class="mt-10 sm:mt-0">
                <x-form-section submit="updatePassword">
                    <x-slot name="title">
                        {{ __('DEMOGRAPHY') }}
                    </x-slot>

                    <x-slot name="description">
                        {{ __('List of the Barangay Officials') }}
                    </x-slot>

                    <x-slot name="form">
                        <div class="col-span-6 sm:col-span-2">
                            <x-label for="barangay" value="{{ __('Total Population') }}" />
                            <x-input id="barangay" type="text" class="mt-1 block w-full"
                                wire:model.defer="state.barangay" />
                            <x-input-error for="barangay" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                            <x-label for="political_district" value="{{ __('Population Growth Rate') }}" />
                            <x-input id="political_district" type="text" class="mt-1 block w-full"
                                wire:model.defer="state.political_district" />
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                            <x-label for="congressional_district" value="{{ __('Population Density') }}" />
                            <x-input id="congressional_district" type="text" class="mt-1 block w-full"
                                wire:model.defer="state.congressional_district" autocomplete="new-password" />
                            <x-input-error for="congressional_district" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-2">
                            <x-label for="congressional_district" value="{{ __('Total Land Area (has.)') }}" />
                            <x-input id="congressional_district" type="text" class="mt-1 block w-full"
                                wire:model.defer="state.congressional_district" autocomplete="new-password" />
                            <x-input-error for="congressional_district" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-2">
                            <x-label for="congressional_district" value="{{ __('Dialect Spoken') }}" />
                            <x-input id="congressional_district" type="text" class="mt-1 block w-full"
                                wire:model.defer="state.congressional_district" autocomplete="new-password" />
                            <x-input-error for="congressional_district" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-2">
                            <x-label for="congressional_district" value="{{ __('Indigenous Group') }}" />
                            <x-input id="congressional_district" type="text" class="mt-1 block w-full"
                                wire:model.defer="state.congressional_district" autocomplete="new-password" />
                            <x-input-error for="congressional_district" class="mt-2" />
                        </div>
                    </x-slot>
                </x-form-section>
            </div>
            {{-- DEMOGRAPHY --}}
            <x-section-border />
            <div class="mt-10 sm:mt-0">
                <div class="md:grid md:grid-cols-3 md:gap-6 p-10">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium text-gray-900">ECONOMIC INDICATORS</h3>

                            <p class="mt-1 text-sm text-gray-600">
                                List of the Barangay Officials
                            </p>
                        </div>
                    </div>
                    <div class="mt-5 md:col-span-2 md:mt-0">
                        <div class="overflow-hidden shadow sm:rounded-md">
                            <div class="bg-white px-4 py-5 sm:p-6">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Agriculture / Forestry /
                                    Fishery</h3>

                                <div class="relative overflow-x-auto  sm:rounded-lg mt-5">
                                    <table class="w-full text-sm text-left text-gray-500  m-6">
                                        <thead class="text-xs text-gray-700 uppercase ">
                                            <tr>
                                                <th scope="col" class="px-6 py-3">
                                                    CATEGORY
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    TYPE
                                                </th>

                                                <th scope="col" class="px-6 py-3">
                                                    HAS/ NO.
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="m-6">
                                            <tr>
                                                <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                                    Major Crops</th>
                                                <td>
                                                    <x-input id="congressional_district" type="text"
                                                        class="mt-1 block w-full"
                                                        wire:model.defer="state.congressional_district"
                                                        autocomplete="new-password" />
                                                    <x-input id="congressional_district" type="text"
                                                        class="mt-1 block w-full"
                                                        wire:model.defer="state.congressional_district"
                                                        autocomplete="new-password" />
                                                </td>
                                                <td>
                                                    <x-input id="congressional_district" type="text"
                                                        class="mt-1 block w-full"
                                                        wire:model.defer="state.congressional_district"
                                                        autocomplete="new-password" />
                                                    <x-input id="congressional_district" type="text"
                                                        class="mt-1 block w-full"
                                                        wire:model.defer="state.congressional_district"
                                                        autocomplete="new-password" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                                    Livestock/ Poultry</td>
                                                <td>
                                                    <x-input id="congressional_district" type="text"
                                                        class="mt-1 block w-full"
                                                        wire:model.defer="state.congressional_district"
                                                        autocomplete="new-password" />
                                                    <x-input id="congressional_district" type="text"
                                                        class="mt-1 block w-full"
                                                        wire:model.defer="state.congressional_district"
                                                        autocomplete="new-password" />
                                                </td>
                                                <td>
                                                    <x-input id="congressional_district" type="text"
                                                        class="mt-1 block w-full"
                                                        wire:model.defer="state.congressional_district"
                                                        autocomplete="new-password" />
                                                    <x-input id="congressional_district" type="text"
                                                        class="mt-1 block w-full"
                                                        wire:model.defer="state.congressional_district"
                                                        autocomplete="new-password" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                                    Major Crops</td>
                                                <td>
                                                    <x-input id="congressional_district" type="text"
                                                        class="mt-1 block w-full"
                                                        wire:model.defer="state.congressional_district"
                                                        autocomplete="new-password" />
                                                    <x-input id="congressional_district" type="text"
                                                        class="mt-1 block w-full"
                                                        wire:model.defer="state.congressional_district"
                                                        autocomplete="new-password" />
                                                </td>
                                                <td>
                                                    <x-input id="congressional_district" type="text"
                                                        class="mt-1 block w-full"
                                                        wire:model.defer="state.congressional_district"
                                                        autocomplete="new-password" />
                                                    <x-input id="congressional_district" type="text"
                                                        class="mt-1 block w-full"
                                                        wire:model.defer="state.congressional_district"
                                                        autocomplete="new-password" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                                    Post-Harvest Facilities</td>
                                                <td>
                                                    <x-input id="congressional_district" type="text"
                                                        class="mt-1 block w-full"
                                                        wire:model.defer="state.congressional_district"
                                                        autocomplete="new-password" />
                                                    <x-input id="congressional_district" type="text"
                                                        class="mt-1 block w-full"
                                                        wire:model.defer="state.congressional_district"
                                                        autocomplete="new-password" />
                                                </td>
                                                <td>
                                                    <x-input id="congressional_district" type="text"
                                                        class="mt-1 block w-full"
                                                        wire:model.defer="state.congressional_district"
                                                        autocomplete="new-password" />
                                                    <x-input id="congressional_district" type="text"
                                                        class="mt-1 block w-full"
                                                        wire:model.defer="state.congressional_district"
                                                        autocomplete="new-password" />
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                {{-- <x-form-section submit="updatePassword">
                    <x-slot name="title">
                        {{ __('ECONOMIC INDICATORS') }}
                </x-slot>

                <x-slot name="description">
                    {{ __('List of the Barangay Officials') }}
                </x-slot>

                <x-slot name="form">
                    <x-label for="barangay" value="{{ __('Agriculture / Forestry / Fishery') }}" />
                    <div class="col-span-6 sm:col-span-2">
                        <x-label for="barangay" value="{{ __('Total Population') }}" />
                        <x-input id="barangay" type="text" class="mt-1 block w-full" wire:model.defer="state.barangay" />
                        <x-input-error for="barangay" class="mt-2" />
                    </div>

                    <div class="col-span-6 sm:col-span-2">
                        <x-label for="political_district" value="{{ __('Population Growth Rate') }}" />
                        <x-input id="political_district" type="text" class="mt-1 block w-full" wire:model.defer="state.political_district" />
                    </div>

                    <div class="col-span-6 sm:col-span-2">
                        <x-label for="congressional_district" value="{{ __('Population Density') }}" />
                        <x-input id="congressional_district" type="text" class="mt-1 block w-full" wire:model.defer="state.congressional_district" autocomplete="new-password" />
                        <x-input-error for="congressional_district" class="mt-2" />
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <x-label for="congressional_district" value="{{ __('Total Land Area (has.)') }}" />
                        <x-input id="congressional_district" type="text" class="mt-1 block w-full" wire:model.defer="state.congressional_district" autocomplete="new-password" />
                        <x-input-error for="congressional_district" class="mt-2" />
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <x-label for="congressional_district" value="{{ __('Dialect Spoken') }}" />
                        <x-input id="congressional_district" type="text" class="mt-1 block w-full" wire:model.defer="state.congressional_district" autocomplete="new-password" />
                        <x-input-error for="congressional_district" class="mt-2" />
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <x-label for="congressional_district" value="{{ __('Indigenous Group') }}" />
                        <x-input id="congressional_district" type="text" class="mt-1 block w-full" wire:model.defer="state.congressional_district" autocomplete="new-password" />
                        <x-input-error for="congressional_district" class="mt-2" />
                    </div>
                </x-slot>
                </x-form-section> --}}
            </div>
            {{-- DEMOGRAPHY --}}
            <x-section-border />
            <div class="mt-10 sm:mt-0">
                <div class="md:grid md:grid-cols-3 md:gap-6 p-10">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium text-gray-900">INFRASTRUCTURE INDICATORS</h3>

                            <p class="mt-1 text-sm text-gray-600">
                                List of the Barangay Officials
                            </p>
                        </div>
                    </div>
                    <div class="mt-5 md:col-span-2 md:mt-0">
                        <div class="overflow-hidden shadow sm:rounded-md">
                            <div class="bg-white px-4 py-5 sm:p-6">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Agriculture / Forestry /
                                    Fishery</h3>

                                <div class="relative overflow-x-auto  sm:rounded-lg mt-5">
                                    <table class="w-full text-sm text-left text-gray-500  m-6">
                                        <thead class="text-xs text-gray-700 uppercase ">
                                            <tr>
                                                <th scope="col" class="px-6 py-3">
                                                    CATEGORY
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    TYPE
                                                </th>

                                                <th scope="col" class="px-6 py-3">
                                                    HAS/ NO.
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="m-6">
                                            <tr>
                                                <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                                    Existing Roads</th>
                                                <td>
                                                    <x-input id="congressional_district" type="text"
                                                        class="mt-1 block w-full"
                                                        wire:model.defer="state.congressional_district"
                                                        autocomplete="new-password" />
                                                    <x-input id="congressional_district" type="text"
                                                        class="mt-1 block w-full"
                                                        wire:model.defer="state.congressional_district"
                                                        autocomplete="new-password" />
                                                </td>
                                                <td>
                                                    <x-input id="congressional_district" type="text"
                                                        class="mt-1 block w-full"
                                                        wire:model.defer="state.congressional_district"
                                                        autocomplete="new-password" />
                                                    <x-input id="congressional_district" type="text"
                                                        class="mt-1 block w-full"
                                                        wire:model.defer="state.congressional_district"
                                                        autocomplete="new-password" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                                    Water System</td>
                                                <td>
                                                    <x-input id="congressional_district" type="text"
                                                        class="mt-1 block w-full"
                                                        wire:model.defer="state.congressional_district"
                                                        autocomplete="new-password" />
                                                    <x-input id="congressional_district" type="text"
                                                        class="mt-1 block w-full"
                                                        wire:model.defer="state.congressional_district"
                                                        autocomplete="new-password" />
                                                </td>
                                                <td>
                                                    <x-input id="congressional_district" type="text"
                                                        class="mt-1 block w-full"
                                                        wire:model.defer="state.congressional_district"
                                                        autocomplete="new-password" />
                                                    <x-input id="congressional_district" type="text"
                                                        class="mt-1 block w-full"
                                                        wire:model.defer="state.congressional_district"
                                                        autocomplete="new-password" />
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
