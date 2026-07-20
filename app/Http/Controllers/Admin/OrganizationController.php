<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class OrganizationController extends Controller
{
    public function index()
    {
        $organizations = Organization::latest()->paginate(10);

        return view('admin.organizations.index', compact('organizations'));
    }

    public function create()
    {
        return view('admin.organizations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_organisasi' => 'required|string|max:100|unique:organizations,nama_organisasi',
            'deskripsi' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $logo = null;

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo')->store('organizations', 'public');
        }

        Organization::create([
            'nama_organisasi' => $request->nama_organisasi,
            'deskripsi' => $request->deskripsi,
            'logo' => $logo,
            'created_by' => Auth::id(),
        ]);

        return redirect()
            ->route('admin.organizations.index')
            ->with('success', 'Organisasi berhasil ditambahkan.');
    }

    public function edit(Organization $organization)
    {
        return view('admin.organizations.edit', compact('organization'));
    }

    public function update(Request $request, Organization $organization)
    {
        $request->validate([
            'nama_organisasi' => 'required|string|max:100|unique:organizations,nama_organisasi,' . $organization->id,
            'deskripsi' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $logo = $organization->logo;

        if ($request->hasFile('logo')) {

            if ($organization->logo) {
                Storage::disk('public')->delete($organization->logo);
            }

            $logo = $request->file('logo')->store('organizations', 'public');
        }

        $organization->update([
            'nama_organisasi' => $request->nama_organisasi,
            'deskripsi' => $request->deskripsi,
            'logo' => $logo,
        ]);

        return redirect()
            ->route('admin.organizations.index')
            ->with('success', 'Organisasi berhasil diperbarui.');
    }

    public function destroy(Organization $organization)
    {
        if ($organization->events()->exists()) {

            return back()->with(
                'success',
                'Organisasi tidak dapat dihapus karena masih digunakan oleh event.'
            );
        }

        if ($organization->logo) {
            Storage::disk('public')->delete($organization->logo);
        }

        $organization->delete();

        return redirect()
            ->route('admin.organizations.index')
            ->with('success', 'Organisasi berhasil dihapus.');
    }
}
