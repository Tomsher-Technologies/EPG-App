<div>
    <form wire:submit.prevent="save" class="raffles-contact-form raffles-form type-2">
        <div class="">
            <div class="row">
                <div class="col-sm-12 col-md-12 raffles-form-item">
                    <label>Location*</label>
                    <div class="raffles-custom-select">
                        <select wire:model="location" data-default-text="Please select">
                            @foreach ($locations as $location)
                                <option value="{{ $location->id }}">{{ $location->name }}</option>
                            @endforeach
                        </select>
                        @error('location')
                            <span class="alert alert-danger" style="display: block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 raffles-form-item">
                    <label>My Preference*</label>
                    <textarea type="textarea" id="cf_name" name="pref_text" wire:model="pref_text" placeholder="My Preference"></textarea>
                    @error('pref_text')
                        <span class="alert alert-danger" style="display: block">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-12 raffles-form-item">
                    <button type="submit" class="btn" style="margin-top: 9px; width: 100%">Add</button>
                </div>
            </div>
        </div>
    </form>
</div>
