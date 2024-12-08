<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */

     public function edit(Request $request): View
     {
         return view('profile.edit', [
             'user' => $request->user(),
         ]);
     }
     

    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();
    
        // Isi data user dengan data yang sudah divalidasi
        $user->fill($request->validated());
        
        // Jika ada perubahan pada email, set email_verified_at menjadi null
        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $ObtainedCertificates = null;
        $UploadDocumentsorImages = null;
    
        // Proses untuk 'ObtainedCertificates'
        if ($request->hasFile('ObtainedCertificates')) {
            $ObtainedCertificates = $request->file('ObtainedCertificates')->store('ObtainedCertificateds');
            $user->ObtainedCertificates = $ObtainedCertificates; // Simpan nama file ke kolom database
        } elseif ($user->ObtainedCertificates) {
            $ObtainedCertificates = $user->ObtainedCertificates; // Gunakan nilai lama jika tidak ada unggahan baru
        }
    
        // Proses untuk 'UploadDocumentsorImages' di folder 'AdditionalDocuments'
        if ($request->hasFile('UploadDocumentsorImages')) {
            $UploadDocumentsorImages = $request->file('UploadDocumentsorImages')->store('UploadDocumentsorImage');
            $user->UploadDocumentsorImages = $UploadDocumentsorImages; // Simpan nama file ke kolom database
        } elseif ($user->UploadDocumentsorImages) {
            $UploadDocumentsorImages = $user->UploadDocumentsorImages; // Gunakan nilai lama jika tidak ada unggahan baru
        }

    
        // Simpan data user
        $user->save();
    
        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }
    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}