<div>
    <form wire:submit.prevent="saveStudent">
        <div class="row">
            <div class="col-md-4">
                <div class="form-label">First Name</div>
                <input type="text" class="form-control" wire:model="FirstName">
                @error('FirstName') <div class="text-danger"> {{$message}} </div>@enderror
            </div>
            <div class="col-md-2">
                <div class="form-label">Middle Name</div>
                <input type="text" class="form-control" wire:model="MiddleName">
                @error('MiddleName') <div class="text-danger"> {{$message}} </div>@enderror
            </div>
            <div class="col-md-4">
                <div class="form-label">Last Name</div>
                <input type="text" class="form-control" wire:model="LastName">
                @error('LastName') <div class="text-danger"> {{$message}} </div>@enderror
            </div>
            <div class="col-md-2">
                <div class="form-label">Suffix</div>
                <select wire:model="Suffix" class="form-control">
                    <option value=""></option>
                    <option value="JR">JR</option>
                    <option value="SR">SR</option>
                    <option value="I">I</option>
                    <option value="II">II</option>
                    <option value="III">III</option>
                </select>
                @error('Suffix') <div class="text-danger"> {{$message}} </div>@enderror
            </div>
            <div class="col-md-4">
                <div class="form-label">Date of Birth</div>
                <input type="date" class="form-control" wire:model="DateofBirth">
                @error('DateofBirth') <div class="text-danger"> {{$message}} </div>@enderror
            </div>
            <div class="col-md-6">
                <div class="form-label">Address</div>
                <textarea class="form-control" wire:model="Address" rows="1"></textarea>
                @error('Address') <div class="text-danger"> {{$message}} </div>@enderror
            </div>
            <div class="col-md-2">
                <div class="form-label"></div>
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
