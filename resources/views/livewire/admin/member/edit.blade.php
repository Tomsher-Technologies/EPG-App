<div class="row">
    <div class="col-md-6">
        <form wire:submit.prevent="save">
            <div class="form-group">
                <label class="form-label">First name</label>
                <input wire:model="member.name" type="text"
                    class="form-control @error('member.name') {{ 'is-invalid' }} @enderror" placeholder="Member First name">
                @error('member.name')
                    <span class="invalid-feedback d-block">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-label">Last name</label>
                <input wire:model="member.last_name" type="text"
                    class="form-control @error('member.last_name') {{ 'is-invalid' }} @enderror" placeholder="Member Last name">
                @error('member.last_name')
                    <span class="invalid-feedback d-block">{{ $message }}</span>
                @enderror
            </div>
 
            <div class="form-group">
                <label class="form-label">Email address</label>
                <input wire:model="member.email" type="email" class="form-control @error('member.email') {{ 'is-invalid' }} @enderror"
                    placeholder="Member email address ...">
                @error('member.email')
                    <span class="invalid-feedback d-block">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label class="form-label">Phone no.</label>
                <input wire:model="member.member_details.phone" type="text" class="form-control @error('member.member_details.phone') {{ 'is-invalid' }} @enderror" placeholder="Member phone no ...">
                @error('member.phone')
                    <span class="invalid-feedback d-block">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group" wire:ignore>
                <label class="form-label" for="select01">Nationality</label>
                <select wire:model.lazy="member.member_details.nationality" id="select01" data-toggle="select" class="form-control">
                    @foreach ($countries as $country)
                        <option {{ strtolower($member->nationality) === strtolower($country->name) ? 'selected' : '' }}
                            value="{{ $country->name }}">
                            {{ $country->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label class="form-label" for="select01">Package</label>
                <select wire:model="member.member_details.package_id" wire:ignore id="select02" data-toggle="select"
                    class="form-control">
                    @foreach ($packages as $package)
                        <option {{ $member->package_id == $package->id ? 'selected' : '' }} value="{{ $package->id }}">
                            {{ $package->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>

    <script>
        window.addEventListener('memberUpdated', event => {
            Swal.fire({
                title: 'Member updated successfully!',
                icon: 'success'
            });
        })
    </script>

</div>
