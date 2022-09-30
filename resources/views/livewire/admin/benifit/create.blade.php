<div class="row">
    <div class="col-md-6">
        <form wire:submit.prevent="save">
            <div class="form-group">
                <label class="form-label">Name</label>
                <input wire:model="name" type="text" class="form-control @error('name') {{ 'is-invalid' }} @enderror">
                @error('name')
                    <span class="invalid-feedback d-block">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label class="form-label" for="select01">Category</label>
                <select wire:model="benefit_category_id" id="select01" data-toggle="select" class="form-control">
                    <option value="">Select a category</option>
                    @foreach ($category as $cat)
                        <option value="{{ $cat->id }}">
                            {{ $cat->name }}</option>
                    @endforeach
                </select>
                @error('benefit_category_id')
                    <span class="invalid-feedback d-block">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label class="form-label" for="select01">Locations</label>
                <select wire:model="location_id" id="select01" data-toggle="select" class="form-control">
                    <option value="0">Select a location</option>
                    @foreach ($location as $loc)
                        <option value="{{ $loc->id }}">
                            {{ $loc->name }}</option>
                    @endforeach
                </select>
                @error('location_id')
                    <span class="invalid-feedback d-block">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label class="form-label" for="select01">Discount Type</label>
                <select wire:model="discount_type" id="select01" data-toggle="select" class="form-control">
                    <option value="">Select a discount type</option>
                    @foreach ($discountList as $key => $item)
                        <option value="{{ $key }}">
                            {{ $item }}
                        </option>
                    @endforeach
                </select>
                @error('discount_type')
                    <span class="invalid-feedback d-block">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label class="form-label">Discount</label>
                <input wire:model="discount" type="number"
                    class="form-control @error('discount') {{ 'is-invalid' }} @enderror">
                @error('discount')
                    <span class="invalid-feedback d-block">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label class="form-label" for="select01">Validity Type</label>
                <select wire:model="validity_type" id="select01" data-toggle="select" class="form-control">
                    <option value="">Select a validity type</option>
                    @foreach ($validityList as $key => $item)
                        <option value="{{ $key }}">
                            {{ $item }}
                        </option>
                    @endforeach
                </select>
                @error('validity_type')
                    <span class="invalid-feedback d-block">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label class="form-label">Validity</label>
                <input wire:model="validity" type="number"
                    class="form-control @error('validity') {{ 'is-invalid' }} @enderror">
                @error('validity')
                    <span class="invalid-feedback d-block">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label class="form-label" for="select01">Status</label>
                <select wire:model="status" id="select02" data-toggle="select" class="form-control">
                    <option selected value="1">Enabled</option>
                    <option value="0">Disabled</option>
                </select>
                @error('status')
                    <span class="invalid-feedback d-block">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>

    <script>
        window.addEventListener('memberUpdated', event => {
            Swal.fire({
                title: 'Benefit create successfully!',
                icon: 'success'
            });
        })
    </script>
</div>
