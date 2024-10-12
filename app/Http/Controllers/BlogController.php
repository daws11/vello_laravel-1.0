<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // Menampilkan halaman blog utama (Frontend)
    public function index()
    {
        $blogs = Blog::all();
        return view('blog.index', compact('blogs'));
    }

    // Menampilkan detail blog berdasarkan slug (Frontend)
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('blog.show', compact('blog'));
    }

    // Menampilkan daftar blog di halaman admin (Admin)
    public function adminIndex()
    {
        $blogs = Blog::all();
        return view('blog.admin.index', compact('blogs')); // View admin untuk daftar blog
    }

    // Menampilkan form untuk menambah blog baru (Admin)
    public function create()
    {
        return view('blog.admin.create'); // View form tambah blog
    }

    // Menyimpan blog baru (Admin)
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:blogs,slug',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi file gambar
            'type' => 'required',
            'content_paragraphs' => 'required|array|min:1',
            'date' => 'required|date', // Validasi untuk tanggal
        ]);
    
        // Simpan gambar ke folder public/assets/images/blog
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('assets/images/blog'), $imageName);
    
        // Simpan data ke database
        Blog::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'image' => $imageName, // Simpan nama file gambar ke database
            'type' => $request->type,
            'content_paragraphs' => $request->content_paragraphs,
            'date' => $request->date, // Simpan tanggal yang valid
        ]);
    
        return redirect()->route('admin.index')->with('success', 'Blog berhasil ditambahkan.');
    }
    

    // Menampilkan form untuk mengedit blog (Admin)
    public function edit(Blog $blog)
    {
        return view('blog.admin.edit', compact('blog')); // View form edit blog
    }

    // Memperbarui blog yang ada (Admin)
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:blogs,slug,' . $blog->id,
            'image' => 'required',
            'type' => 'required',
            'content_paragraphs' => 'required|array|min:1',
        ]);

        $blog->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'image' => $request->image,
            'type' => $request->type,
            'content_paragraphs' => $request->content_paragraphs,
            'date' => $request->date,
        ]);

        return redirect()->route('admin.index')->with('success', 'Blog berhasil diperbarui.');
    }

    // Menghapus blog (Admin)
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('admin.index')->with('success', 'Blog berhasil dihapus.');
    }
}
