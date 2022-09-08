<div class="row">
    <div class="col-md-6">
        <form wire:submit.prevent="save">
            <div class="form-group">
                <label class="form-label" for="select01">Location</label>
                <select wire:model="receptionist.location_id" id="select01" data-toggle="select" class="form-control">
                    @foreach ($allLocation as $loc)
                        <option value="{{ $loc->id }}">{{ $loc->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label class="form-label">Name</label>
                <input wire:model="receptionist.name" type="text" class="form-control">
                @error('name')
                    <span class="invalid-feedback d-block">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label">Email address</label>
                <input wire:model="receptionist.email" type="email" class="form-control" >
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
            <div class="form-group">
                <label class="form-label" for="select01">Status</label>
                <select wire:model="receptionist.status" id="select02" data-toggle="select" class="form-control">
                <option value="1" {{ $receptionist->status == 1 ? "selected" : "" }}>Enabled</option>
                <option value="0" {{ $receptionist->status == 0 ? "selected" : "" }}>Disabled</option>
                </select>
            </div>
            <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>
    <script>
        window.addEventListener('memberUpdated', event => {
            Swal.fire({
                title: 'Receptionist updated successfully!',
                icon: 'success'
            });
        })
    </script>
</div>