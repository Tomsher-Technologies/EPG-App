<div class="row">
    <div class="col-md-6">
        <form wire:submit.prevent="save">
            <div class="form-group">
                <label class="form-label">Full name</label>
                <input wire:model="name" type="text" class="form-control" placeholder="Customer name">
                @error('name')
                <span class="invalid-feedback d-block">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label">Email address</label>
                <input wire:model="email" type="email" class="form-control" value="alexander.watson@fake-mail.com"
                    placeholder="Customer email address">
                @error('email')
                <span class="invalid-feedback d-block">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label">Phone no.</label>
                <input wire:model="phone" type="text" class="form-control" placeholder="Customer phone no ...">
                @error('phone')
                <span class="invalid-feedback d-block">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="select01">Nationality</label>
                <select wire:model="nationality" id="select01" data-toggle="select" class="form-control">
                    @foreach ($countries as $country)
                    <option value="{{$country->name}}">{{$country->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label class="form-label" for="select01">Package</label>
                <select wire:model="package" id="select01" data-toggle="select" class="form-control">
                    @foreach ($packages as $package)
                    <option value="{{$package->id}}">{{$package->name}}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>
    <script>
        window.addEventListener('memberUpdated', event => {
            console.log("asd");
            Swal.fire({
                title: 'Member create successfully!',
                icon: 'success'
            });
        })
    </script>
</div>