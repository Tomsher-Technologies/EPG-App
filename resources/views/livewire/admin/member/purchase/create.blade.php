<div class="row">
    <div class="col-md-12">
        <form wire:submit.prevent="save">
            <div class="form-row">
                <div class="col-12 col-md-4 mb-3">
                    <label class="form-label" for="validationSample01">Item name</label>
                    <input wire:model="item_name" type="text" class="form-control">
                    @error('item_name')
                        <span class="invalid-feedback d-block">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-12 col-md-3 mb-3">
                    <label class="form-label" for="validationSample02">Price</label>
                    <input type="number" step=".01" wire:model='price' class="form-control">
                    @error('price')
                        <span class="invalid-feedback d-block">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-12 col-md-3 mb-3">
                    <label class="form-label" for="validationSample02">Quantity</label>
                    <input type="number" wire:model="quantity" class="form-control">
                    @error('quantity')
                        <span class="invalid-feedback d-block">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-12 col-md-2 mb-3">
                    <label class="form-label" for="">&nbsp;</label>
                    <button class="btn btn-primary form-control" type="submit">Save</button>
                </div>
            </div>
        </form>
    </div>
    <script>
        window.addEventListener('memberUpdated', event => {
            Swal.fire({
                title: 'Purchase create successfully!',
                icon: 'success'
            });
        })
    </script>
</div>
