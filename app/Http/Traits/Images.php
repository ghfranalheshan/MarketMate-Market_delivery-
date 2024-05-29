<?php
namespace App\Http\Traits ;

use App\Http\Requests\StoreProductRequest;
use Illuminate\Http\Request;

trait Images
{

    public static function SaveUserImage(Request $request): string
{
    $image=$request->file('photo');
    $UsersProfile_Image=null;

    if($request->hasFile('photo')){
        $UsersProfile_Image=time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('UsersProfile'),$UsersProfile_Image);
        $UsersProfile_Image='UsersProfile/'.$UsersProfile_Image;
    }

    return $UsersProfile_Image;

}

     public static function SaveProductImage(StoreProductRequest $request): string
     {
         $image=$request->file('photo');
         $product_Image=null;

         if($request->hasFile('photo')){
             $product_Image=time().'.'.$image->getClientOriginalExtension();
             $image->move(public_path('Products'),$product_Image);
             $product_Image='Products/'.$product_Image;
         }

         return $product_Image;
     }



}
