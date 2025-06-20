<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Illuminate\Console\View\Components\Success;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('code', 'asc')->paginate(5);
        return view('product.index', compact('products'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:50|unique:products,code',
            'price' => 'required|numeric|min:0|max:9999999999999999999999999999',
            'stock' => 'required|integer|min:0',
            'category' => 'required|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'

        ], [
            'code.unique' => 'Kode produk sudah digunakan, silakan gunakan kode lain.',
            'price.numeric' => 'Harga harus berupa angka antara 0 dan 999.999.999.999.999',
            'stock.min' => 'Stok tidak boleh negatif.',
            'stock.required' => 'Stok wajib diisi.',
            'stock.integer' => 'Stok harus berupa angka bulat.',
        ]);

        try {



            $data = $request->except('image');

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images'), $imageName);
                $data['image'] = 'images/' . $imageName;
            } else {
                $data['image'] = null;
            }

            Product::create($data);

            return redirect()
                ->route('product.index')
                ->with('success', 'Produk berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withErrors([
                    'error' => 'Gagal menambahkan produk: ' . $e->getMessage()
                ])
                ->withInput();
        }
    }


    /**
     * Display the specified resource.
     */
    public function show($code)
    {
        $product = Product::where('name', $code)->firstOrFail();
        // if (url()->previous() !== url()->current()) {
        //     session(['products_previous_url' => url()->previous()]);
        // }
        return view('product.detail', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($code)
    {
        $product = Product::where('code', $code)->firstOrFail();
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $code)
    {

        $product = Product::where('code', $code)->firstOrFail();

        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:50|unique:products,code,' . $product->id,
            'price' => 'required|numeric|min:0|max:9999999999999999999999999999',
            'stock' => 'required|integer|min:0',
            'category' => 'required|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ], [
            'code.unique' => 'Kode produk sudah digunakan, silakan gunakan kode lain.',
            'price.numeric' => 'Harga harus berupa angka antara 0 dan 999.999.999.999.999',
            'stock.min' => 'Stok tidak boleh negatif.',
            'stock.required' => 'Stok wajib diisi.',
            'stock.integer' => 'Stok harus berupa angka bulat.',
        ]);

        try {

            $data = $request->except('image');

            if ($request->hasFile('image')) {
                if ($product->image && file_exists(public_path($product->image))) {
                    unlink(public_path($product->image));
                }

                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images'), $imageName);
                $data['image'] = 'images/' . $imageName;
            }

            $product->update($data);

            return redirect()
                ->route('product.index')
                ->with('success', 'Produk berhasil diperbarui');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withErrors([
                    'error' => 'Gagal menambahkan produk: ' . $e->getMessage()
                ])
                ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($code)
    {
        try {
            $product = Product::where('code', $code)->firstOrFail();

            if ($product->image && file_exists(public_path($product->image))) {
                unlink(public_path($product->image));
            }

            $product->delete();

            return redirect()
                ->route('product.index')
                ->with('success', 'Produk berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('error', 'Gagal menghapus produk: ' . $e->getMessage());
        }
    }

    public function gambar($filename)
    {
        $path = public_path('images/' . $filename);

        if (!file_exists($path)) {
            abort(404);
        }

        $imageUrl = asset('images/' . $filename);
        return view('product.gambar', compact('imageUrl'));
    }

    public function boot()
    {
        Blade::component('alert.success', Success::class);
    }

     
}
