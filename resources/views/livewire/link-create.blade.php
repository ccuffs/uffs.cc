<div class="max-w-2xl bg-white py-10 px-5 m-auto w-full mt-10">
    <div class="grid grid-cols-4 gap-4">
        <div class="col-span-1 lg:col-span-1">
            <label for="key" class="block font-medium text-sm text-gray-700">Key</label>
            <input type="text" wire:model="key" class="form-input rounded-md shadow-sm mt-1 block w-full" id="key" name="key" placeholder="Ex.: abc">
        </div>

        <div class="col-span-2 lg:col-span-2">
            <label for="url" class="block font-medium text-sm text-gray-700">URL</label>
            <input type="email" wire:model="url" class="form-input rounded-md shadow-sm mt-1 block w-full" id="url" name="url" placeholder="Ex.: https://test.com" >
        </div>

        <div class="col-span-1 lg:col-span-1">
            <button wire:click="store()" class="mt-7 items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">Submit</button>
        </div>
    </div>
</div>

