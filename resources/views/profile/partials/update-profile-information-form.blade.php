<div class="container">
    <div class="header">
        <h2>{{ __('Personal Information') }}</h2>
        <div class="icons">
            <img src="/Source/dark-mode.png" alt="Dark Mode Icon" class="dark-mode-icon">
            <img src="/Source/icon-navbar.png" alt="Profile Icon" class="profile-icon">
        </div>
    </div>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}">
        @csrf
        @method('patch')

        <div class="form-row">
            <div class="form-group">
                <x-input-label for="name" :value="('First Name')" />
                <x-text-input id="name" name="name" type="text" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" />
            </div>
            <div class="form-group">
                <x-input-label for="lastname" :value="('Last Name')" />
                <x-text-input id="lastname" name="lastname" type="text" :value="old('lastname', $user->lastname)" autocomplete="lastname" />
                <x-input-error  :messages="$errors->get('lastname')" />
                @error('lastname')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <x-input-label for="email" :value="('Email')" />
            <x-text-input id="email" name="email" type="email" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" />
            @error('email')
                <span class="error-message">{{ $message }}</span>
            @enderror

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <div>
                <p>
                    {{ __('Your email address is unverified.') }}

                    <button form="send-verification">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </p>

                @if (session('status') === 'verification-link-sent')
                    <p>
                        {{ __('A new verification link has been sent to your email address.') }}
                    </p>
                @endif
            </div>
        @endif

            
        </div>

        <div class="form-group">
            <x-input-label for="address" :value="('Address')" /> 
            <x-text-input id="address" name="address" type="text" :value="old('address', $user->address)" required autocomplete="address" />
            <x-input-error :messages="$errors->get('address')" />
            @error('address')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <x-input-label for="contact_number" :value="('Contact Number')" />
            <x-text-input id="contact_number" name="contact_number" type="text" :value="old('contact_number', $user->contact_number)" required autocomplete="Contact_Number" />
            <x-input-error :messages="$errors->get('contact_number')" />
            @error('contact_number')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-row">
            <div class="form-group">
                <x-input-label for="city" :value="('City')" />
                <x-text-input id="city" name="city" type="text" :value="old('city', $user->city)" required autocomplete="city" />
                <x-input-error :messages="$errors->get('city')" />
                @error('city')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <x-input-label for="state" :value="('State')" />
                <x-text-input id="state" name="state" type="text" :value="old('state', $user->state)" required autocomplete="state" />
                <x-input-error :messages="$errors->get('state')" />
                @error('state')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <x-input-label for="work_experience" :value="('Work Experience')" />
            <x-text-input id="work_experience" name="work_experience" type="text" :value="old('work_experience', $user->work_experience)" required autocomplete="work_experience" />
            <x-input-error :messages="$errors->get('work_experience')" />
            @error('work_experience')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-actions">
            <button type="submit" class="save-button">{{ __('Save') }}</button>
            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="saved-message">
                    {{ __('Saved.') }}
                </p>
            @endif
        </div>
    </form>
</div>

    <h2>{{ __('Learning Profile') }}</h2>

    <div class="form-group">
        <x-input-label for="AcademicAchievement" :value="('Academic Achievement')" />
        <x-text-input  id="AcademicAchievement" name="AcademicAchievement" type="text" :value="old('AcademicAchievement', $user->AcademicAchievement)" required autocomplete="AcademicAchievement" />
        <x-input-error :messages="$errors->get('AcademicAchievement')" />
    </div>
    
    <div class="form-group">
        <x-input-label for="SkillsMastered" :value="('Skills Mastered')" />
        <x-text-input 
            id="SkillsMastered" 
            name="SkillsMastered" 
            type="text" 
            :value="old('SkillsMastered', $user->SkillsMastered)" 
            required 
            autocomplete="SkillsMastered" 
        />
        <x-input-error :messages="$errors->get('SkillsMastered')" />
    </div>
    
    <div class="form-group">
        <x-input-label for="CompletedCourses" :value="('Completed Courses')" />
        <x-text-input 
            id="CompletedCourses" 
            name="CompletedCourses" 
            type="text" 
            :value="old('CompletedCourses', $user->CompletedCourses)" 
            required 
            autocomplete="CompletedCourses" 
        />
        <x-input-error :messages="$errors->get('CompletedCourses')" />
    </div>
    
    <div class="form-group">
        <x-input-label for="ObtainedCertificates" :value="('Obtained Certificates')" />
        <div class="file-upload">
            <!-- Input readonly untuk nama file -->
            <x-text-input 
                id="certificate-file-name" 
                name="certificate_name" 
                type="text" 
                :value="old('certificate_name', $user->certificate_name)" 
                readonly 
            />
            <x-input-error :messages="$errors->get('certificate_name')" />
            
            <!-- Input file untuk memilih dokumen -->
            <input 
                id="certificate-file" 
                name="certificate_files[]" 
                type="file" 
                multiple 
                accept=".pdf,.doc,.docx,.jpg,.png,.jpeg" 
                class="file-input" 
                onchange="showFileName('certificate-file', 'certificate-file-name')" 
            />
            <label for="certificate-file" class="file-label">
                <img src="/Source/choose-image.png" alt="Choose File Icon" class="icon">
            </label>
        </div>
    
        <!-- Tampilkan daftar sertifikat yang diunggah -->
        @if($user->ObtainedCertificates)
            <div class="uploaded-certificates">
                <h4>Uploaded Certificates:</h4>
                @foreach(json_decode($user->ObtainedCertificates, true) as $certificate)
                    <p><a href="{{ asset('storage/' . $certificate) }}" target="_blank">{{ basename($certificate) }}</a></p>
                @endforeach
            </div>
        @endif
    </div>
    
    
    <!-- Modal -->
    <div class="modal" id="uploadModal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal()">&times;</span>
            <h2>Media Upload</h2>
            <div class="upload-area">
                <input 
                    type="file" 
                    id="fileInput" 
                    hidden 
                    onchange="showFileName('fileInput', 'fileNameInput')" 
                />
                <label for="fileInput" class="upload-label">
                    <img src="/Source/upload-image.png" alt="Upload Icon">
                    <button type="button" class="browse-btn">Browse files</button>
                </label>
                <input 
                    type="text" 
                    id="fileNameInput" 
                    class="file-name-input" 
                    value="No file chosen" 
                    readonly 
                />
            </div>
            <div class="modal-footer">
                <button onclick="closeModal()" class="cancel-btn">Cancel</button>
                <button onclick="saveFile()" class="save-btn">Save</button>
            </div>
        </div>
    </div>
    
<div class="modal" id="uploadModal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal()">&times;</span>
        <h2>Media Upload</h2>
        <div class="upload-area">
            <input type="file" id="fileInput" hidden onchange="showFileName('fileInput', 'fileNameInput')">
            <label for="fileInput" class="upload-label">
                <img src="/Source/upload-image.png" alt="Upload Icon">
                <button type="button" class="browse-btn">Browse files</button>
            </label>
            <input type="text" id="fileNameInput" class="file-name-input" value="No file chosen" readonly>
        </div>
        <div class="modal-footer">
            <button onclick="closeModal()" class="cancel-btn">Cancel</button>
            <button onclick="saveFile()" class="save-btn">Save</button>
        </div>
    </div>
</div>

<script src="/Js/filename.js"></script>
