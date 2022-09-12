<div class="row">
    <div class="col-md-6">
        <form wire:submit.prevent="save">
            <div class="form-group">
                <label class="form-label">Name</label>
                <input wire:model="package.name" type="text" class="form-control">
                @error('package.name')
                    <span class="invalid-feedback d-block">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label">Price</label>
                <input wire:model="package.price" type="number" class="form-control">
                @error('package.price')
                    <span class="invalid-feedback d-block">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group" wire:ignore>
                <label class="form-label" for="select01">Status</label>
                <select wire:model="package.status" id="select02" data-toggle="select" class="form-control">
                    <option value="1" {{ $package->status == 1 ? 'selected' : '' }}>Enabled</option>
                    <option value="0" {{ $package->status == 0 ? 'selected' : '' }}>Disabled</option>
                </select>
            </div>
            <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>
    <script>
        window.addEventListener('memberUpdated', event => {
            Swal.fire({
                title: 'Package Updated successfully!',
                icon: 'success'
            });
        })
    </script>
</div>
