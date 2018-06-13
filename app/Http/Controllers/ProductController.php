<?php

namespace App\Http\Controllers;

use App\Http\Resources\Product as ProductResource;
use App\Product;
use App\Category;
use App\ProductMap;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use function response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    const name = "name";
    const category = "category";
    const sku = "sku";
    const price = "price";

    public function index()
    {
        //
    }
    
    public function getById ($id)
    {
        return new ProductResource(Product::find($id));
    }
    
    public function getProducts ()
    {
        $products = [];
        $results = Product::all();
        
        foreach($results as $val)
        {
            $categoryName = '';
            // prod map
            $prodMap = ProductMap::where("prodId",$val->prodId)->get();
            
            foreach($prodMap as $map)
            {
                $category = Category::find($map->catId);
                $categoryName[] = $category->categoryName;               
            }
            //
            
            $prod[self::name] = $val->prodName;
            $prod[self::category] = $categoryName;
            $prod[self::sku] = $val->SKU;
            $prod[self::price] = $val->price;
            
            $products["products"][] = $prod;
        }
               
        return response()->json($products, 200);
        //return new ProductResource($products);
    }
    
    public function insertProduct (Request $request)
    {        
        try
        {
            $rules = [
                'catId' => 'required|integer',
                'prodName' => 'required',
                'SKU' => 'required',
                'price' => 'required',
            ];
            
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) 
            {
                $response['response'] = $validator->messages();
                $status = 400;
            } 
            else 
            {
                $prodValues = [
                'prodName' => $request->input('prodName'),
                'SKU' => $request->input('SKU'),
                'price' => $request->input('price')];
                
                $product = Product::create($prodValues);
                
                if ($product->prodId) 
                {
                    $prodMapValues = [
                        'catId' => $request->input('catId'),
                        'prodId' => $product->prodId
                    ];
                    $productMap = ProductMap::create($prodMapValues);
                }

                $response["response"] = "OK";
                $status = 201;
            }
            
            return response()->json($response, $status);
        }
        catch (Exception $ex)
        {
            $message = $ex->getMessage();
            return response()->json($message, 500);
        }
    }
    
    public function updateProduct (Request $request, Product $id)
    {        
        try{
            $id->update($request->all());
            $message["status"] = "200";
            $message["message"] = "Updated Successfully";
            return response()->json($message, 200);
        }
        catch (Exception $ex)
        {
            $message = $ex->getMessage();
            return response()->json($message, 500);
        }
    }
    
    public function deleteProduct ( Product $id)
    {        
        try{
            $id->delete();
            return response()->json(204);
        }
        catch (Exception $ex)
        {
            $message = $ex->getMessage();
            return response()->json($message, 500);
        }
    }
    
}
