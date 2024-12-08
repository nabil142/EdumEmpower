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

    <form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data" >
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
            <span style="font-size: 12px; color: gray;">max 13 number</span>
            <x-text-input id="contact_number" name="contact_number" type="text" :value="old('contact_number', $user->contact_number)" required autocomplete="Contact_Number" />
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

        {{-- <div class="form-actions">
            <button type="submit" class="save-button">{{ __('Save') }}</button>
            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="saved-message">
                    {{ __('Saved.') }}
                </p>
            @endif
        </div> --}}
        <h2>{{ __('Learning Profile') }}</h2>
    
        <div class="form-group">
            <x-input-label for="AcademicAchievement" :value="('Academic Achievement')" />
            <x-text-input  
            id="AcademicAchievement" 
            name="AcademicAchievement"
             type="text" 
             :value="old('AcademicAchievement', $user->AcademicAchievement)" 
             required autocomplete="AcademicAchievement" 
             />
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
                    :value="old('certificate_name', basename($user->ObtainedCertificates))" 
                    readonly 
                />
                <x-input-error :messages="$errors->get('certificate_name')" />
                
                <!-- Tautan untuk melihat file jika ada -->
                @if ($user->ObtainedCertificates)
                    <a href="{{ asset('storage/' . $user->ObtainedCertificates) }}" target="_blank" class="view-file-link">
                        <img src="/Source/vector2.png" alt="View File Icon" class="icon">
                    </a>
                @endif
        
                <!-- Input file untuk memilih dokumen -->
                <input 
                    id="ObtainedCertificates" 
                    name="ObtainedCertificates" 
                    type="file" 
                    accept=".pdf,.doc,.docx,.jpg,.png,.jpeg" 
                    class="file-input" 
                    onchange="showFileName('ObtainedCertificates', 'certificate-file-name')" 
                />
                <label for="ObtainedCertificates" class="file-label">
                    <img src="/Source/choose-image.png" alt="Choose File Icon" class="icon">
                </label>
            </div>
        </div>
        
    
    {{-- <div class="form-actions">
        <button type="submit" class="save-button">{{ __('Save') }}</button>
        @if (session('status') === 'profile-updated')
        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="saved-message">
            {{ __('Saved.') }}
        </p>
        @endif
    </div> --}}
    
    <h2>Digital Portfolio</h2>
    <div class="form-group">
        <x-input-label for="ProjectsorWorkCompleted" :value="('ProjectsorWorkCompleted')" />
        <x-text-input id="ProjectsorWorkCompleted" name="ProjectsorWorkCompleted" type="text" :value="old('ProjectsorWorkCompleted', $user->ProjectsorWorkCompleted)" required autocomplete="ProjectsorWorkCompleted" />
        @error('ProjectsorWorkCompleted')
            <span class="error-message">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <x-input-label for="UploadDocumentsorImages" :value="('UploadDocumentsorImages')" />
        <div class="file-upload">
            <!-- Input readonly untuk nama file -->
            <x-text-input 
                id="certificate-file-name2" 
                name="certificate_name2" 
                type="text" 
                :value="old('certificate_name2', basename($user->UploadDocumentsorImages))" 
                readonly 
            />
            <x-input-error :messages="$errors->get('certificate_name2')" />
            
            <!-- Tautan untuk melihat file jika ada -->
            @if ($user->ObtainedCertificates)
                <a href="{{ asset('storage/' . $user->UploadDocumentsorImages) }}" target="_blank" class="view-file-link">
                    <img src="/Source/vector2.png" alt="View File Icon" class="icon">
                </a>
            @endif
    
            <!-- Input file untuk memilih dokumen -->
            <input 
                id="UploadDocumentsorImages" 
                name="UploadDocumentsorImages" 
                type="file" 
                accept=".pdf,.doc,.docx,.jpg,.png,.jpeg" 
                class="file-input" 
                onchange="showFileName('UploadDocumentsorImages', 'certificate-file-name2')" 
            />
            <label for="UploadDocumentsorImages" class="file-label">
                <img src="/Source/choose-image.png" alt="Choose File Icon" class="icon">
            </label>
        </div>
    </div>

    <div class="form-actions">
        <button type="submit" class="save-button">{{ __('Save All My Change') }}</button>
        @if (session('status') === 'profile-updated')
        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" class="saved-message">
            {{ __('Saved.') }}
        </p>
        @endif
    </div>
    <section class="space-y-6">
        <header>
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Delete Account') }}
            </h2>
    
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
            </p>
        </header>
    
        <x-danger-button
            x-data=""
            x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
        >{{ __('Delete Account') }}</x-danger-button>
    
        <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
            <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                @csrf
                @method('delete') <!-- Menambahkan metode DELETE -->
    
                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                    {{ __('Are you sure you want to delete your account?') }}
                </h2>
    
                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                    {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                </p>
    
                <div class="mt-6">
                    <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />
    
                    <x-text-input
                        id="password"
                        name="password"
                        type="password"
                        class="mt-1 block w-3/4"
                        placeholder="{{ __('Password') }}"
                    />
    
                    <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                </div>
    
                <div class="mt-6 flex justify-end">
                    <x-secondary-button x-on:click="$dispatch('close')">
                        {{ __('Cancel') }}
                    </x-secondary-button>
    
                    <x-danger-button class="ms-3">
                        {{ __('Delete Account') }}
                    </x-danger-button>
                </div>
            </form>
        </x-modal>
    </section>
    
</form>
</div>

<script>
    // Menampilkan nama file yang dipilih
    function showFileName(inputId, displayId) {
        const input = document.getElementById(inputId);
        const display = document.getElementById(displayId);
        if (input.files.length > 0) {
            let fileNames = [];
            for (let i = 0; i < input.files.length; i++) {
                fileNames.push(input.files[i].name);
            }
            display.value = fileNames.join(', ');
        }
    }
</script> 

<script>
    function handleFileChange(event) {
        const fileInput = event.target;
        const fileNameDisplay = document.getElementById('file-name');

        // Perbarui nama file di UI (opsional)
        if (fileInput.files && fileInput.files[0]) {
            fileNameDisplay.textContent = File: ${fileInput.files[0].name};

            // Menampilkan preview gambar secara instan (opsional)
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('profile-img').src = e.target.result;
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
}
</script>