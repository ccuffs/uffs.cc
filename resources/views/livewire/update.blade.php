<div>
    <input type="hidden" wire:model="selected_id">
    <div class="form-group">
        <label for="key" class="block font-medium text-sm text-gray-700">Key</label>
        <input type="text" wire:model="key" class="form-input rounded-md shadow-sm mt-1 block w-full" id="key" name="key" placeholder="Ex.: abc">
    </div>
    <div class="form-group">
        <label for="url" class="block font-medium text-sm text-gray-700">URL</label>
        <input type="email" wire:model="url" class="form-input rounded-md shadow-sm mt-1 block w-full" id="url" name="url" placeholder="Ex.: https://test.com" >
    </div>
    <button wire:click="update()" class="btn btn-primary">Update</button>
</div> 