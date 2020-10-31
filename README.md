># Resize Image
<br><br><br>



+ Install Package `composer require intervention/image`
<br><br><br>


+ Include Package `App.php`
```php
'providers' =>[
  Intervention\Image\ImageServiceProvider::class, 
];

'aliases' =>[
  'Image' => \Intervention\Image\Facades\Image::class
];
```
<br><br>






+ `php artisan vendor:publish --provider="Intervention\Image\ImageServiceProviderLaravelRecent"`
<br><br>


+ `php artisan make:controller ImageController`
<br><br>


+ `php artisan serve`
<br><br>







 >## ImageController.php
 ```php


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;

class ImageController extends Controller
{
    
    public function resizeImage()
    {
    return view('resizeImage');
    }


    public function resizeImageSubmit(Request $request)
    {
        $image = $request->file('file');
        $fileName = $image->getClientOriginalName();
        $resizes = Image::make($image->getRealPath());
        $resizes->resize(300,300);
        $resizes->save(public_path('image/'.$fileName));
        return back()->with('resize','Image Resize Successfully');
    } 
}




 ```
 <br><br>



>## resize-image.blade.php
 ```php

<section class="py-3">
 <div class="container">
  <div class="row">
   <div class="col-m8-8 m-auto">
    <div class="card">
     <div class="card-header">
      <span class="h3">Resize A Image</span>
      <a href=""></a>
     </div>
     <div class="card-body">
      @if(Session::has('resize'))
        <div class="alert alert-info">
         {{Session::get('resize')}}
        </div>
      @endif
     <form action="{{route('image.resize')}}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="form-group">
       <input type="file" name="file" class="form-control" />
       <br>
       <button type="submit" class="btn btn-info form-control">Submit</button>
      </div>
     </form>
     </div>
    </div>
   </div>
  </div>
 </div>
</section>
 ```
 <br><br>












 >## web.php

 ```php
Route::get('/resize', [ImageController::class,'resizeImage']);

Route::post('/resize', [ImageController::class,'resizeImageSubmit'])->name('image.resize');


 ```
  <br><br>
