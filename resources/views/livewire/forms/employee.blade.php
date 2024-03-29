<div>{{-- name --}}
<div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-1/4 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="lastname">
            Lastname
        </label>
        <input wire:model="lastname"
            class="appearance-none block w-full bg-gray-200 text-gray-700 border  @error('lastname') border-red-500  @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
            type="text" placeholder="Type here...">
        @error('lastname')
            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
        @enderror
    </div>

    <div class="w-1/4 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="firstname">
            Firstname
        </label>
        <input wire:model.defer="firstname"
            class="appearance-none block w-full bg-gray-200 text-gray-700 border  @error('firstname') border-red-500  @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
            type="text" placeholder="Type here...">
        @error('firstname')
            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
        @enderror
    </div>

    <div class="w-1/4 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="middlename">
            Middlename
        </label>
        <input wire:model.defer="middlename"
            class="appearance-none block w-full bg-gray-200 text-gray-700 border  @error('middlename') border-red-500  @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
            type="text" placeholder="Type here...">
        @error('middlename')
            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
        @enderror
    </div>

    <div class="px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="extension">
            Extension
        </label>
        <div class="relative">

            <select wire:model.defer="extension"
                class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="grid-state">
                <option value="" selected>Select...</option>
                <option value="Jr.">Jr.</option>
                <option value="Sr.">Sr. </option>
                <option value="II">II</option>
                <option value="III">III</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
            </div>

        </div>

        @error('extension')
            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
        @enderror
    </div>


</div>

{{-- birthdate --}}
{{-- input --}}
<div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-1/4 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="birthdate">
            Birthdate
        </label>
        <input wire:model.defer="birthdate"
            class="appearance-none block w-full bg-gray-200 text-gray-700 border  @error('birthdate') border-red-500  @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
            type="date" placeholder="Type here...">
        @error('birthdate')
            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
        @enderror
    </div>

    {{-- civil status --}}  

    <div class="px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="civilstatus">
            Civil Status
        </label>
        <div class="relative">

            <select wire:model.defer="civilstatus"
                class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="grid-state">
                <option value="" selected>Select...</option>
                <option value="Jr.">Single</option>
                <option value="Sr.">Married</option>
                <option value="II">Widowed</option>
                <option value="III">Separated</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
            </div>

        </div>

        @error('civilstatus')
            <p class="text-red-500 text-xs italic">Please select civil status.</p>
        @enderror
    </div>

    {{-- sex --}}
    <div class="px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="sex">
            Sex
        </label>
        <div class="relative">

            <select wire:model.defer="sex"
                class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="grid-state">
                <option value="" selected>Select...</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
            </div>

        </div>

        @error('sex')
            <p class="text-red-500 text-xs italic">Please select civil status.</p>
        @enderror
    </div>
    {{-- religion --}}
    <div class="px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="religion">
            Religion
        </label>
        <div class="relative">

            <select wire:model.defer="religion"
                class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="grid-state">
                <option value="" selected>Select...</option>
                <option value="Roman Catholic">Roman Catholic</option>
                <option value="Bapthist">Bapthist</option>
                <option value="Christian">Christian</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
            </div>

        </div>

        @error('religion')
            <p class="text-red-500 text-xs italic">Please select religion.</p>
        @enderror
    </div>

</div>

{{-- third --}}



<div class="flex flex-wrap -mx-3 mb-6">
 

    {{-- chapa number --}}

<div class="w-1/4 px-3 mb-6 md:mb-0">
    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="chapanumber">
        Chapa Number
    </label>
    <input wire:model.defer="chapanumber"
        class="appearance-none block w-full bg-gray-200 text-gray-700 border  @error('chapanumber') border-red-500  @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
        type="text" placeholder="Type here...">
    @error('chapanumber')
        <p class="text-red-500 text-xs italic">Please fill out this field.</p>
    @enderror
</div>

   {{-- department --}}
    <div class="px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="department">
            Department
        </label>
        <div class="relative">

            <select wire:model.defer="department"
                class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="grid-state">
                <option value="" selected>Select...</option>
                <option value="Spray">Spray</option>
                <option value="Plantation">Plantation</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
            </div>

        </div>

        @error('department')
            <p class="text-red-500 text-xs italic">Please select civil status.</p>
        @enderror
    </div>
{{-- position --}}
    <div class="w-1/4 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="position">
            Position
        </label>
        <input wire:model.defer="position"
            class="appearance-none block w-full bg-gray-200 text-gray-700 border  @error('position') border-red-500  @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
            type="text" placeholder="Type here...">
        @error('position')
            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
        @enderror
    </div>
{{-- employmentdate --}}
    <div class="w-1/4 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="employmentdate">
            Employment Date
        </label>
        <input wire:model.defer="employmentdate"
            class="appearance-none block w-full bg-gray-200 text-gray-700 border  @error('employmentdate') border-red-500  @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
            type="date" placeholder="Type here...">
        @error('employmentdate')
            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
        @enderror
    </div>

    {{--phonenumber  --}}

    <div class="w-1/4 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="phonenumber">
            Phone Number
        </label>
        <input wire:model.defer="phonenumber"
            class="appearance-none block w-full bg-gray-200 text-gray-700 border  @error('phonenumber') border-red-500  @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
            type="number" placeholder="Type here...">
        @error('phonenumber')
            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
        @enderror
    </div>
{{--educationalattainment  --}}
    <div class="px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="educationalattainment">
            Educational Attainment
        </label>
        <div class="relative">

            <select wire:model.defer="educationalattainment"
                class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="grid-state">
                <option value="" selected>Select...</option>
                <option value="Post Graduate">Post Graduate</option>
                <option value="College Graduate">College Graduate</option>
                <option value="High School Graduate">High School Graduate</option>
                <option value="High School Level">High School Level</option>
                <option value="Elementary Graduate">Elementary Graduate</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
            </div>

        </div>

        @error('educationalattainment')
            <p class="text-red-500 text-xs italic">Please select educational attainment.</p>
        @enderror
    </div>

    {{--estimatedannualgross  --}}

    <div class="w-1/4 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="estimatedannualgross">
            Estimated Annual Gross
        </label>
        <input wire:model.defer="estimatedannualgross"
            class="appearance-none block w-full bg-gray-200 text-gray-700 border  @error('estimatedannualgross') border-red-500  @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
            type="number" placeholder="Type here...">
        @error('estimatedannualgross')
            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
        @enderror
    </div>

    {{-- tin  --}}

    <div class="w-1/4 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="tin">
            T.I.N.
        </label>
        <input wire:model.defer="tin"
            class="appearance-none block w-full bg-gray-200 text-gray-700 border  @error('tin') border-red-500  @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
            type="number" placeholder="Type here...">
        @error('tin')
            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
        @enderror
    </div>


</div>

{{-- Permanent Residential Address --}}

<span class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2">Permanent Residential Address</span> 

<div class="flex flex-wrap -mx-3 mb-6">
    <div class="px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="prahouseno">
            House No.
        </label>
        <input wire:model.defer="prahouseno"
            class="appearance-none block w-full bg-gray-200 text-gray-700 border  @error('prahouseno') border-red-500  @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
            type="text" placeholder="Type here...">
        @error('prahouseno')
            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
        @enderror
    </div>

    <div class="wpx-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="prabuildingstreet">
            Building/Street
        </label>
        <input wire:model.defer="prabuildingstreet"
            class="appearance-none block w-full bg-gray-200 text-gray-700 border  @error('prabuildingstreet') border-red-500  @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
            type="text" placeholder="Type here...">
        @error('prabuildingstreet')
            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
        @enderror
    </div>

    <div class="px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="prasubdivision">
            Subdivision
        </label>
        <input wire:model.defer="prasubdivision"
            class="appearance-none block w-full bg-gray-200 text-gray-700 border  @error('prasubdivision') border-red-500  @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
            type="text" placeholder="Type here...">
        @error('prasubdivision')
            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
        @enderror
    </div>

    <div class="px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="prabarangay">
            Barangay
        </label>
        <input wire:model.defer="prabarangay"
            class="appearance-none block w-full bg-gray-200 text-gray-700 border  @error('prabarangay') border-red-500  @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
            type="text" placeholder="Type here...">
        @error('prabarangay')
            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
        @enderror
    </div>

    <div class="px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="pramun">
            Municipality
        </label>
        <input wire:model.defer="pramun"
            class="appearance-none block w-full bg-gray-200 text-gray-700 border  @error('pramun') border-red-500  @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
            type="text" placeholder="Type here...">
        @error('pramun')
            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
        @enderror
    </div>

    <div class="px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="praprov">
            Province 
        </label>
        <input wire:model.defer="praprov"
            class="appearance-none block w-full bg-gray-200 text-gray-700 border  @error('praprov') border-red-500  @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
            type="text" placeholder="Type here...">
        @error('praprov')
            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
        @enderror
    </div>

    <div class="px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="prazipcode">
            Zip Code
        </label>
        <input wire:model.defer="prazipcode"
            class="appearance-none block w-full bg-gray-200 text-gray-700 border  @error('prazipcode') border-red-500  @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
            type="text" placeholder="Type here...">
        @error('prazipcode')
            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
        @enderror
    </div>



</div>



{{-- Permanent Employment Address --}}

<span class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2">Permanent Employment Address</span> 

<input type="checkbox" wire:model="sameaddress" wire:click="sameAddress"> Same with residential address.

<div class="flex flex-wrap -mx-3 mb-6">
    <div class="px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="peahouseno">
            House No.
        </label>
        <input wire:model.defer="peahouseno"
            class="appearance-none block w-full bg-gray-200 text-gray-700 border  @error('peahouseno') border-red-500  @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
            type="text" placeholder="Type here...">
        @error('peahouseno')
            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
        @enderror
    </div>

    <div class="px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="peabuildingstreet">
            Building/Street
        </label>
        <input wire:model.defer="peabuildingstreet"
            class="appearance-none block w-full bg-gray-200 text-gray-700 border  @error('peabuildingstreet') border-red-500  @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
            type="text" placeholder="Type here...">
        @error('peabuildingstreet')
            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
        @enderror
    </div>

    <div class="px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="peasubdivision">
            Subdivision
        </label>
        <input wire:model.defer="peasubdivision"
            class="appearance-none block w-full bg-gray-200 text-gray-700 border  @error('peasubdivision') border-red-500  @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
            type="text" placeholder="Type here...">
        @error('peasubdivision')
            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
        @enderror
    </div>

    <div class="px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="peabarangay">
            Barangay
        </label>
        <input wire:model.defer="peabarangay"
            class="appearance-none block w-full bg-gray-200 text-gray-700 border  @error('peabarangay') border-red-500  @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
            type="text" placeholder="Type here...">
        @error('peabarangay')
            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
        @enderror
    </div>

    <div class="px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="peamun">
            Municipality
        </label>
        <input wire:model.defer="peamun"
            class="appearance-none block w-full bg-gray-200 text-gray-700 border  @error('peamun') border-red-500  @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
            type="text" placeholder="Type here...">
        @error('peamun')
            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
        @enderror
    </div>

    <div class="px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="peaprov">
            Province 
        </label>
        <input wire:model.defer="peaprov"
            class="appearance-none block w-full bg-gray-200 text-gray-700 border  @error('peaprov') border-red-500  @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
            type="text" placeholder="Type here...">
        @error('peaprov')
            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
        @enderror
    </div>

    <div class="px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="peazipcode">
            Zip Code
        </label>
        <input wire:model.defer="peazipcode"
            class="appearance-none block w-full bg-gray-200 text-gray-700 border  @error('peazipcode') border-red-500  @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
            type="text" placeholder="Type here...">
        @error('peazipcode')
            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
        @enderror
    </div>

</div>

<div class="flex flex-wrap -mx-3 mb-6">
    <div class="px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2" for="pmailadd">
            Preferred Mailing Address
        </label>
        <div>
        <input wire:model.defer="pmailadd" name="pmailadd"
            class="bg-gray-200 text-gray-700 border"
            type="radio" value="Residential"> Residential 

            <input wire:model.defer="pmailadd" name="pmailadd"
            class="bg-gray-200 text-gray-700 border"
            type="radio" value="Employment"> Employment 
        </div>
        @error('pmailadd')
            <p class="text-red-500 text-xs italic">Please select preferred mailing address.</p>
        @enderror
    </div>

    <div class="px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
            Email Address
        </label>
        <input wire:model.defer="email"
            class="appearance-none block w-full bg-gray-200 text-gray-700 border  @error('email') border-red-500  @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
            type="text" placeholder="Type here...">
        @error('email')
            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
        @enderror
    </div>

    <div class="px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="fbaccount">
            Facebook Account
        </label>
        <input wire:model.defer="fbaccount"
            class="appearance-none block w-full bg-gray-200 text-gray-700 border  @error('fbaccount') border-red-500  @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
            type="text" placeholder="Type here...">
        @error('fbaccount')
            <p class="text-red-500 text-xs italic">Please fill out this field.</p>
        @enderror
    </div>

    <div class="px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2" for="ispinecoopmem">
            Pinecoop Member ?
        </label>
        <div>
        <input wire:model="ispinecoopmem" name="ispinecoopmem"
            class="bg-gray-200 text-gray-700 border"
            type="radio" value="1"> Yes 

            <input wire:model="ispinecoopmem" name="ispinecoopmem"
            class="bg-gray-200 text-gray-700 border"
            type="radio" value="0"> No 
        </div>
        @error('ispinecoopmem')
            <p class="text-red-500 text-xs italic">Please select.</p>
        @enderror
    </div>

@if($ispinecoopmem)
<div class="px-3 mb-6 md:mb-0">
    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="dateofmembership">
        Date of Membership 
    </label>
    <input wire:model.defer="dateofmembership"
        class="appearance-none block w-full bg-gray-200 text-gray-700 border  @error('dateofmembership') border-red-500  @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
        type="date">
    @error('dateofmembership')
        <p class="text-red-500 text-xs italic">Please fill out this field.</p>
    @enderror
</div>
@endif

<div class="px-3 mb-6 md:mb-0">
    <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2" for="ispersonwithdisability">
        Is person with disability?
    </label>
    <div>
    <input wire:model="ispersonwithdisability" name="ispersonwithdisability"
        class="bg-gray-200 text-gray-700 border"
        type="radio" value="1"> Yes 

        <input wire:model="ispersonwithdisability" name="ispersonwithdisability"
        class="bg-gray-200 text-gray-700 border"
        type="radio" value="0"> No 
    </div>
    @error('ispersonwithdisability')
        <p class="text-red-500 text-xs italic">Please select.</p>
    @enderror
</div>

@if($ispersonwithdisability)
<div class="px-3 mb-6 md:mb-0">
    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="pwdid">
        PWD Identification Number
    </label>
    <input wire:model.defer="pwdid"
        class="appearance-none block w-full bg-gray-200 text-gray-700 border  @error('pwdid') border-red-500  @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
        type="text" placeholder="Type here...">
    @error('pwdid')
        <p class="text-red-500 text-xs italic">Please fill out this field.</p>
    @enderror
</div>
@endif


</div>
</div>