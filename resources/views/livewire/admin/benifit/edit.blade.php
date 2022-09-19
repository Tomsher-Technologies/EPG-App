<div class="row">
    <div class="col-md-6">
        <form wire:submit.prevent="save">
            <div class="form-group">
                <label class="form-label">Name</label>
                <input wire:model="benefit.name" type="text"
                    class="form-control @error('benefit.name') {{ 'is-invalid' }} @enderror">
                @error('benefit.name')
                    <span class="invalid-feedback d-block">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label class="form-label" for="select01">Category</label>
                <select wire:model="benefit.benefit_category_id" id="select01" data-toggle="select"
                    class="form-control">
                    <option value="">Select a category</option>
                    @foreach ($category as $cat)
                        <option {{ isSelected($cat->id, $benefit->benefit_category_id) }} value="{{ $cat->id }}">
                            {{ $cat->name }}</option>
                    @endforeach
                </select>
                @error('benefit.benefit_category_id')
                    <span class="invalid-feedback d-block">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label class="form-label" for="select01">Locations</label>
                <select wire:model="benefit.location_id" id="select01" data-toggle="select" class="form-control">
                    <option value="">Select a location</option>
                    @foreach ($location as $loc)
                        <option {{ isSelected($loc->id, $benefit->location_id) }} value="{{ $loc->id }}">
                            {{ $loc->name }}</option>
                    @endforeach
                </select>
                @error('benefit.location_id')
                    <span class="invalid-feedback d-block">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label class="form-label" for="select01">Discount Type</label>
                <select wire:model="benefit.discount_type" id="select01" data-toggle="select" class="form-control">
                    <option value="">Select a discount type</option>
                    @foreach ($discountList as $key => $item)
                        <option {{ isSelected($key, $benefit->discount_type) }} value="{{ $key }}">
                            {{ $item }}
                        </option>
                    @endforeach
                </select>
                @error('benefit.discount_type')
                    <span class="invalid-feedback d-block">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label class="form-label">Discount</label>
                <input wire:model="benefit.discount" type="number"
                    class="form-control @error('benefit.discount') {{ 'is-invalid' }} @enderror">
                @error('benefit.discount')
                    <span class="invalid-feedback d-block">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label class="form-label" for="select01">Validity Type</label>
                <select wire:model="benefit.validity_type" id="select01" data-toggle="select" class="form-control">
                    <option value="">Select a validity type</option>
                    @foreach ($validityList as $key => $item)
                        <option {{ isSelected($key, $benefit->validity_type) }} value="{{ $key }}">
                            {{ $item }}
                        </option>
                    @endforeach
                </select>
                @error('benefit.validity_type')
                    <span class="invalid-feedback d-block">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label class="form-label">Validity</label>
                <input wire:model="benefit.validity" type="number"
                    class="form-control @error('benefit.validity') {{ 'is-invalid' }} @enderror">
                @error('benefit.validity')
                    <span class="invalid-feedback d-block">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label class="form-label" for="select01">Status</label>
                <select wire:model="benefit.status" id="select02" data-toggle="select" class="form-control">
                    <option value="1" {{ $benefit->status == 1 ? 'selected' : '' }}>Enabled</option>
                    <option value="0" {{ $benefit->status == 0 ? 'selected' : '' }}>Disabled</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>

    <script>
        window.addEventListener('memberUpdated', event => {
            Swal.fire({
                title: 'Benefit updated successfully!',
                icon: 'success'
            });
        })
    </script>
</div>
