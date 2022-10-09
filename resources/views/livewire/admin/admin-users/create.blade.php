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
            <div class="form-group">
                <label class="form-label">Email address</label>
                <input wire:model="email" type="email" class="form-control">
                @error('email')
                    <span class="invalid-feedback d-block">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label">Password</label>
                <input wire:model="password" type="password" class="form-control">
                @error('password')
                    <span class="invalid-feedback d-block">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label">Confirm Password</label>
                <input wire:model="password_confirmation" type="password" class="form-control">
            </div>

            <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>
    <script>
        window.addEventListener('memberUpdated', event => {
            Swal.fire({
                title: 'Admin user created successfully!',
                icon: 'success'
            });
        })
    </script>
</div>
