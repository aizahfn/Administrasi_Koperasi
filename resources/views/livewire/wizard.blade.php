                        {{-- <form method='POST' action='{{ route('pages.pendaftaran.postCreateStepOne') }}'>
                            @csrf
                            <div class="row">

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control border border-2 p-2" value='{{ old('email') }}'>
                                    @error('email')
                                <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Nama Lengkap</label>
                                    <input type="text" name="nama_lengkap" class="form-control border border-2 p-2" value='{{ old('nama_lengkap') }}'>
                                    @error('nama_lengkap')
                                <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">No. Telepon</label>
                                    <input type="number" name="no_telp" class="form-control border border-2 p-2" value='{{ old('no_telp') }}'>
                                    @error('no_telp')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Lowongan yang Dilamar</label>
                                    <select class="form-control border border-3 p-2" name="jabatan">
                                        @forelse (App\Models\Lowongan::all() as $lowongan)
                                            <option value="{{ $lowongan->id }}">{{ $lowongan->nama_lowongan }}</option>
                                        @empty
                                            <option value="">Tidak ada lowongan</option>
                                        @endforelse
                                    </select>
                                    @error('jabatan')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>


                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control border border-2 p-2" value='{{ old('password') }}'>
                                    @error('password')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Jenis Kelamin</label><br>
                                    <select class="form-control border border-3 p-2" name="jenis_kelamin">
                                        <option value="pria">Pria</option>
                                        <option value="wanita">Wanita</option>
                                    </select>
                                    @error('jenis_kelamin')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" class="form-control border border-2 p-2" value='{{ old('tanggal_lahir') }}'>
                                    @error('tanggal_lahir')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label for="floatingTextarea2">Alamat</label>
                                    <textarea class="form-control border border-2 p-2"
                                        placeholder=" Say something about your alamat" id="floatingTextarea2" name="alamat"
                                        rows="4" cols="50">{{ old('alamat') }}</textarea>
                                        @error('alamat')
                                        <p class='text-danger inputerror'>{{ $message }} </p>
                                        @enderror
                                </div>
                            </div>
                            <div class="btn-group btn-group-lg d-flex justify-content-center" role="group" aria-label="Navigation">
                                <button type="button" class="btn bg-gradient-dark">Kembali</button>
                                <button type="submit" class="btn bg-gradient-dark">Lanjut</button>
                            </div>
                        </form> --}}

                        <form wire:submit.prevent="register">

                            {{-- STEP 1 --}}

                            @if ($currentStep == 1)


                            <div class="step-one">
                                <div class="card">
                                    <div class="card-header bg-secondary text-white">Langkah 1/4 - Isi Biodata</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Email</label>
                                                <input type="email" placeholder="Masukkan alamat email" name="email" class="form-control border border-2 p-2" wire:model="email">
                                                @error('email')
                                                <p class='text-danger inputerror'>{{ $message }} </p>
                                                @enderror
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Nama Lengkap</label>
                                                <input type="email" placeholder="Masukkan nama lengkap" name="nama_lengkap" class="form-control border border-2 p-2" wire:model="nama_lengkap">
                                                @error('nama_lengkap')
                                                <p class='text-danger inputerror'>{{ $message }} </p>
                                                @enderror
                                            </div>

                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">No. Telepon</label>
                                                <input type="number" placeholder="Masukkan nomor telepon" name="no_telp" class="form-control border border-2 p-2" wire:model='no_telp'>
                                                @error('no_telp')
                                                <p class='text-danger inputerror'>{{ $message }} </p>
                                                @enderror
                                            </div>

                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Jenis Kelamin</label>
                                                <select class="form-control border border-2 p-2" wire:model="jenis_kelamin">
                                                    <option value="" selected>Kelamin</option>
                                                    <option value="pria">Pria</option>
                                                    <option value="wanita">Wanita</option>
                                                </select>
                                                @error('nama_lengkap')
                                                <p class='text-danger inputerror'>{{ $message }} </p>
                                                @enderror
                                            </div>

                                            {{-- <div class="mb-3 col-md-6">
                                                <label class="form-label">Lowongan yang Dilamar</label>
                                                <select wire:model = "jabatan" class="form-control border border-3 p-2" name="jabatan">
                                                    @forelse (App\Models\Lowongan::all() as $lowongan)
                                                        <option value="{{ $lowongan->id }}">{{ $lowongan->nama_lowongan }}</option>
                                                    @empty
                                                        <option value="">Tidak ada lowongan</option>
                                                    @endforelse
                                                </select>
                                                @error('jabatan')
                                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                                @enderror
                                            </div> --}}

                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Password</label>
                                                <input wire:model="password" placeholder="Masukkan password" type="password" name="password" class="form-control border border-2 p-2" >
                                                @error('password')
                                                <p class='text-danger inputerror'>{{ $message }} </p>
                                                @enderror
                                            </div>

                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Tanggal Lahir</label>
                                                <input wire:model="tanggal_lahir" type="date" name="tanggal_lahir" class="form-control border border-2 p-2">
                                                @error('tanggal_lahir')
                                                <p class='text-danger inputerror'>{{ $message }} </p>
                                                @enderror
                                            </div>

                                            <div class="mb-3 col-md-12">
                                                <label for="floatingTextarea2">Alamat</label>
                                                <textarea wire:model="alamat" class="form-control border border-2 p-2"
                                                    placeholder=" Masukkan detail alamat anda" id="floatingTextarea2" name="alamat"
                                                    rows="4" cols="50">
                                                </textarea>
                                                    @error('alamat')
                                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                                    @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif

                            {{-- STEP 2 --}}

                            @if ($currentStep == 2)


                            <div class="step-two">
                                <div class="card">
                                    <div class="card-header bg-secondary text-white">STEP 2/4 - Address & Contacts</div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Email Address</label>
                                                    <input type="text" class="form-control" placeholder="Enter email address" wire:model="email">
                                                    <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                               <div class="form-group">
                                                   <label for="">Phone</label>
                                                   <input type="text" class="form-control" placeholder="Enter phone number" wire:model="phone">
                                                   <span class="text-danger">@error('phone'){{ $message }}@enderror</span>
                                               </div>
                                           </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">Country of residence</label>
                                                    <select class="form-control" wire:model="country">
                                                        <option value="" selected>Select country</option>
                                                        <option value="United States">United States</option>
                                                        <option value="India">India</option>
                                                        <option value="Rwanda">Rwanda</option>
                                                        <option value="Nigeria">Nigeria</option>
                                                        <option value="Phillipines">Phillipines</option>
                                                        <option value="Canada">Canada</option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                    </select>
                                                    <span class="text-danger">@error('country'){{ $message }}@enderror</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="">City</label>
                                                    <input type="text" class="form-control" placeholder="Enter city" wire:model="city">
                                                    <span class="text-danger">@error('city'){{ $message }}@enderror</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endif
                            {{-- STEP 3 --}}

                            @if ($currentStep == 3)


                            <div class="step-three">
                                <div class="card">
                                    <div class="card-header bg-secondary text-white">STEP 3/4 - Frameworks experience</div>
                                    <div class="card-body">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur explicabo, impedit maxime possimus excepturi veniam ut error sit, molestias aliquam repellat eos porro? Sit ex voluptates nemo veritatis delectus quia?
                                        <div class="frameworks d-flex flex-column align-items-left mt-2">
                                            <label for="laravel">
                                                <input type="checkbox" id="laravel" value="laravel" wire:model="frameworks"> Laravel
                                            </label>
                                            <label for="codeigniter">
                                               <input type="checkbox" id="codeigniter" value="codeigniter" wire:model="frameworks"> Codeigniter
                                           </label>
                                           <label for="vuejs">
                                               <input type="checkbox" id="vuejs" value="vuejs" wire:model="frameworks"> Vue Js
                                           </label>
                                           <label for="cakePHP">
                                               <input type="checkbox" id="cakePHP" value="cakePHP" wire:model="frameworks"> CakePHP
                                           </label>
                                        </div>
                                        <span class="text-danger">@error('frameworks'){{ $message }}@enderror</span>
                                    </div>
                                </div>
                            </div>
                            @endif

                            {{-- STEP 4 --}}
                            @if ($currentStep == 4)


                            <div class="step-four">
                                <div class="card">
                                    <div class="card-header bg-secondary text-white">STEP 4/4 - Attachments</div>
                                    <div class="card-body">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque delectus officia inventore id facere at aspernatur ad corrupti asperiores placeat, fugiat tempora soluta optio recusandae eligendi impedit ipsam ullam amet!
                                        <div class="form-group">
                                            <label for="cv">CV</label>
                                            <input type="file" class="form-control" wire:model="cv">
                                            <span class="text-danger">@error('cv'){{ $message }}@enderror</span>
                                        </div>
                                        <div class="form-group">
                                            <label for="terms" class="d-block">
                                                <input type="checkbox"  id="terms" wire:model="terms"> You must agree with our <a href="#">Terms and Conditions</a>
                                            </label>
                                            <span class="text-danger">@error('terms'){{ $message }}@enderror</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endif

                            <div class="action-buttons d-flex justify-content-between bg-white pt-2 pb-2">

                               @if ($currentStep == 1)
                                   <div></div>
                               @endif

                               @if ($currentStep == 2 || $currentStep == 3 || $currentStep == 4)
                                   <button type="button" class="btn btn-md btn-secondary" wire:click="decreaseStep()">Back</button>
                               @endif

                               @if ($currentStep == 1 || $currentStep == 2 || $currentStep == 3)
                                   <button type="button" class="btn btn-md btn-success" wire:click="increaseStep()">Next</button>
                               @endif

                               @if ($currentStep == 4)
                                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                               @endif


                            </div>

                        </form>

                    </div>

