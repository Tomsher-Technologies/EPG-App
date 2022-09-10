<div class="row">
    <div class="col-md-6">
        <form wire:submit.prevent="save">
            <div class="form-group">
                <label class="form-label">Name</label>
                <input wire:model="location.name" type="text" class="form-control">
                @error('location.name')
                    <span class="invalid-feedback d-block">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="select01">Status</label>
                <select wire:model="location.status" id="select02" data-toggle="select" class="form-control">
                    <option value="1" {{ $location->status == 1 ? 'selected' : '' }}>Enabled</option>
                    <option value="0" {{ $location->status == 0 ? 'selected' : '' }}>Disabled</option>
                </select>
            </div>
            <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>
    <script>
        window.addEventListener('memberUpdated', event => {
            Swal.fire({
                title: 'Location Updated successfully!',
                icon: 'success'
            });
        })
    </script>
</div>
