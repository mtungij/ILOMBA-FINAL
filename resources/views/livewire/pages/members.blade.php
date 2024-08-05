
<div>
<x-app-layout>
<div class="col-span-2">
        <div class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <h3 class="mb-4 text-xl font-semibold dark:text-white">Member Registation</h3>
            <form wire:submit.prevent="save">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jina la Kwanza</label>
                        <input type="text" wire:model="fname" id="first-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Jina la Kwanza" >
                        <div class="text-red-500">@error('fname') {{ $message }} @enderror</div>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jina la Mwisho</label>
                        <input type="text" wire:model="lname" id="last-name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Jina la mwisho" >
                        <div class="text-red-500">@error('lname') {{ $message }} @enderror</div>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="country" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jina Maarufu</label>
                        <input type="text" wire:model="nickname" id="country" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Mama Jonson" >
                        <div class="text-red-500">@error('nickname') {{ $message }} @enderror</div>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="city" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">makazi</label>
                        <input type="text" wire:model="address" id="city" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="e.g. ilomba" >
                        <div class="text-red-500">@error('address') {{ $message }} @enderror</div>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Namba Ya Simu</label>
                        <input type="number" wire:model="phone" id="address" value="255"  class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"  >
                        <div class="text-red-500">@error('phone') {{ $message }} @enderror</div>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                    <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jinsia</label>
                    <select id="countries" wire:model="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Chagua Jinsia</option>
                        <option value="mwanaume">Mwanaume</option>
                        <option value="mwanamke">Mwanamke</option>
                    </select>
                    <div class="text-red-500">@error('gender') {{ $message }} @enderror</div>
                    </div>
                    
                    <div class="w-full">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
                            <input wire:model="img" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>
                            
                        </div>         

                    
                    <div class="col-span-6 sm:col-full">
                        <button class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="submit">Hifadhi</button>
                    </div>
                </div>
            </form>
        </div>
       
    </div>
</x-app-layout>
</div>

