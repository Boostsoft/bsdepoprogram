<?php

namespace App\Http\Controllers\StoreFront\Product;

use App\Helpers\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Resources\ProductBrandResource;
use App\Models\Product;
use App\Models\ProductBrand;
use App\Services\ProductService;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function add(StoreRequest $request, ProductService $productService)
    {
        // Fotoğrafı yükleyip, yolunu elde ediyoruz
        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
        }

        // Diğer verilerle birlikte fotoğraf yolunu da kaydediyoruz
        $model = $productService->storeModel(
            array_merge($request->validated(), ['photo' => $photoPath])
        );

        return redirect('/product/edit/'.$model->getAttribute('id'));
    }


    public function view(Request $request)
    {
        $productBrands = ProductBrand::all();

        return view('admin.product.add', compact('productBrands'));
    }
}
