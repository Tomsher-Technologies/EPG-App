<div class="row">
    <div class="col-md-6">
        <form wire:submit.prevent="save">
            <div class="form-group">
                <label class="form-label">Full name</label>
                <input wire:model="name" name="name" type="text" class="form-control" placeholder="Customer name" autocomplete="name" >
                @error('name')
                    <span class="invalid-feedback d-block">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label">Email address</label>
                <input wire:model="email" type="email" name="email" class="form-control" placeholder="Customer email address" autocomplete="email">
                @error('email')
                    <span class="invalid-feedback d-block">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label">Phone no.</label>
                <input wire:model="phone" type="text" name="mobile" class="form-control" placeholder="Customer phone no ..." autocomplete="mobile">
                @error('phone')
                    <span class="invalid-feedback d-block">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label">Password</label>
                <input wire:model="password" type="password" class="form-control" placeholder="Password">
                @error('password')
                    <span class="invalid-feedback d-block">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="select01">Nationality</label>
                <select wire:model="nationality" id="select01" data-toggle="select" class="form-control">
                    <option value="">Select a country</option>
                    @foreach ($countries as $country)
                        <option value="{{ $country->name }}">{{ $country->name }}</option>
                    @endforeach
                </select>
                @error('nationality')
                    <span class="invalid-feedback d-block">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label" for="select01">Package</label>
                <select wire:model="package" id="select01" data-toggle="select" class="form-control">
                    <option value="">Select a package</option>
                    @foreach ($packages as $pac)
                        <option value="{{ $pac->id }}">{{ $pac->name }}</option>
                    @endforeach
                </select>
                @error('package')
                    <span class="invalid-feedback d-block">{{ $message }}</span>
                @enderror
                @if ($package > 0)
                    <div class="list-group list-group-form mt-3">
                        <div class="list-group-item">
                            <div class="form-group row align-items-center mb-0 justify-content-between">
                                <label class="col-form-label form-label ">Validity</label>
                                <div class=" d-flex align-items-center">
                                    <div class="flex">{{ $packages->find($package)->validity }} {{ Str::plural('year', $packages->find($package)->validity) }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="list-group-item">
                            <div class="form-group row align-items-center mb-0 justify-content-between">
                                <label class="col-form-label form-label ">Price</label>
                                <div class=" d-flex align-items-center">
                                    <div class="flex">AED {{ $packages->find($package)->getPrice() }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            <button class="btn btn-primary" type="submit">Save</button>
        </form>
    </div>
    <script>
        window.addEventListener('memberUpdated', event => {
            Swal.fire({
                title: 'Member create successfully!',
                icon: 'success'
            });
        })
    </script>
</div>
