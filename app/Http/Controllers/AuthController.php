<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Use MD5 for password verification (not recommended for production)
        $user = \App\Models\User::where('email', $credentials['email'])
            ->where('password', md5($credentials['password']))
            ->first();

        if ($user) {
            Auth::login($user, $request->boolean('remember'));
            return redirect()->intended(''); // Redirect to home or home
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput($request->only('email'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function updateProfile(Request $request)
{
    $user = Auth::user(); // Mendapatkan user yang sedang login

    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:user,email,' . $user->id_user . ',id_user',
        'password' => 'nullable|min:6',
        'no_telp' => 'nullable|string|max:20',
        'alamat' => 'nullable|string|max:255',
        'foto' => 'nullable|image|max:2048',
    ]);

    // Update data
    $user->nama_user = $validatedData['name'];
    $user->email = $validatedData['email'];
    $user->no_telp = $validatedData['no_telp'] ?? $user->no_telp;
    $user->alamat = $validatedData['alamat'] ?? $user->alamat;

    // Update password jika diisi
    if (!empty($validatedData['password'])) {
        $user->password = md5($validatedData['password']); // Menggunakan MD5
    }

    // Update foto jika ada
    if ($request->hasFile('foto')) {
        // Hapus foto lama jika ada
        if ($user->foto && file_exists(public_path('uploads/' . $user->foto))) {
            unlink(public_path('uploads/' . $user->foto));
        }

        // Upload foto baru
        $newFotoName = time() . '_' . $request->file('foto')->getClientOriginalName();
        $request->file('foto')->move(public_path('uploads'), $newFotoName);
        $user->foto = $newFotoName;
    }

    $user->save(); // Simpan perubahan

    return redirect()->back()->with('success', 'Profil berhasil diperbarui!');
}

    

}