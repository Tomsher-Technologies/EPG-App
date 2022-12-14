<div class="row">
    <div class="col-md-6">
        <form wire:submit.prevent="save">
            <div class="form-group">
                <label class="form-label">Name</label>
                <input wire:model="name" type="text" class="form-control">
                @error('name')
                    <span class="invalid-feedback d-block">{{ $message }}</span>
                @enderror
            </div>
            <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>
    <script>
        window.addEventListener('memberUpdated', event => {
            Swal.fire({
                title: 'Location created successfully!',
                icon: 'success'
            });
        })
    </script>
</div>
