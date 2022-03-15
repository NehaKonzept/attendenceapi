<?php

namespace App\Http\Controllers;

use App\Models\otp;

use App\Models\cart;
use App\Models\User;
use Razorpay\Api\api;
use App\Models\Address;
use App\Models\Product;
use App\Models\Category;
use App\Models\wishlist;
use Illuminate\Support\Str;

Use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    //
    public function loginOtp(Request $request):JsonResponse
   {
       if($request->get('mobile') && $request->get('password') && $request->get('role'))
       {
           $user=User::where('mobile',$request->get('mobile'))->where('role',1)->first();
           
           if($user && Hash::check($request->password,$user->password))
            {
           
               return $this->sendOTP($request);
              
           }
           else
           {
               return response()->json([
                'status'=>false,
                'message'=>'not matched'

               ]);
              
           }
       }
       else
       {
        $user=User::where('mobile',$request->get('mobile'))->first();
           //dd($user);
          
        if($user)
          { 
              $user=User::where('mobile',$request->get('mobile'))->where('status','block')->first();
             
              if($user)
              {
                
                return response()->json([
                    'status'=>false,
                    'message'=>'user is blocked'
    
                   ]);
                  //dd($user);
              }

              else{
                return $this->sendOTP($request);
              }
          
            
          }
          else
          {

            $user=User::create(array('mobile'=>$request->mobile));
            
            // dd($user);
             
             $user=Address::create(array(
                 'user_id'=>$user->id,
                  'city'=>'Ahemedabad',
                  'state'=>'gujrat',
                  'country'=>'India'
              ));
              if($user)
              {
               
                return  $this->sendOTP($request);
              }

          }
         
            
       }

   }
   public function sendOTP(Request $request)
   {
    $otp=778899;
    $user=Otp::create([
        'mobile'=>$request->mobile,
        'otp'=>$otp
    ]);
    //$user=User::where('mobile','=',$request->mobile)->update(['otp'=>$otp]);
   
    return response()->json([
        'status'=>true,
        'message'=>'Otp stored'

       ]);
   }
   public function verifyOtp(Request $request)
  {
     $user= new User();
    
    $getUser=Otp::where('mobile','=',$request->mobile)->where('otp','=',$request->otp)->first();
   
        if($getUser)
        {  
            Otp::where('mobile', $request->mobile)->delete();
                $user = User::where('mobile', $request->mobile)->first();
               $token = $user->createToken('login')->accessToken;
               /*if ($request->has('token')) {
                User::where('id', $user->id)->update(array('push_token' => $request->token));
            }*/
            return response()->json([
                'message' => 'Logged in successfully',
            
                'token' => $token,
                'status' => true
            ]);
        }
        else
        {
            return response()->json([
                'status'=>false,
                'message'=>'not matched'

            ]); 
            
        }

   }
   public function get_profile()
   {
       /* $user = auth()->User();
        $users = User::where('role','0')->get()->toArray();
      
        if ($users) {
            return response()->json([
                'data' => $users,
                'status' => true
            ]);
        } else {
            return response()->json([
                'message' => 'error',
                'status' => false
            ]);
        }*/
        $user = request()->user();
        if ($user) {
            if ($user->Id) {
                $user = $user->toArray();
            }
            $user->address = Address::where('user_id', $user->id)->first();
            $response = array(
                'status' => true,
                'data' => $user
            );
        } else {
            $response = array(
                'status' => false,
                'message' => 'User not found'
            );
        }
        return response()->json($response);
   }
   public function update_profile(Request $request)
   {
    
    $user = User::where('id', '=', $request->id)->first();
    
        if($user)
        {
            $data=new User();
            if($request->hasfile('image_path'))
            {
               
                $file=$request->file('image_path');
                //$extension=$file->getClientOriginalExtension();
                $originalname=$file->getClientOriginalName();
                $filename=time().'.'.$originalname;
                $file->move('public/image/',$filename);
                $data->image_path=$filename;
               // dd($data->image_path);
            }
            else{
                return $request;
                $data->image_path='';
            }
            
            $user->update(array(
            
                'name'=>$request->name,
                'email'=>$request->email,
                'image_path'=>$data->image_path
            
            ));
        
            if($user)
            {
                return response()->json([
                    'status'=>true,
                    'message'=>'updated'
            
                ]);

            }
            else
            {
                return response()->json([
                    'status'=>true,
                    'message'=>'failed to update'
            
                ]);
            }
        }

   }
   public function resendOtp(Request $request)
   {
        $user=User::where('mobile',$request->get('mobile'))->first();
        if($user)
        {
            $otp=999999;
        $user=User::where('mobile','=',$request->mobile)->update(['otp'=>$otp]);
        return response()->json([
            'status'=>true,
            'message'=>'Otp stored'

        ]);
        }
       /* if ($request->get('mobile') != null) {
            return response()->json($this->loginOTP($request)->original);
        } else {
            $response = array(
                'status' => false,
                'message' => 'Please enter mobile number'
            );
        }
        return response()->json($response);*/
   }
   public function addCategory(Request $request):JsonResponse
   {
        $data = $request->all();
        unset($data['id']);
        if ($request->has('id') && $request->id !== null) {
            $status = Category::where('id', $request->id)->update($data);
            $message = 'Category has been updated successfully';
        }
        else{
            $status = Category::create($data);
            $message = 'Category has been added successfully';
           
        }
        
        if ($status) {
            $response = array(
                'status' => true,
                'message' => $message,
            );
        } else {
            $response = array(
                'status' => false,
                'message' => 'Something went wrong'
            );
        }
        return response()->json($response);
   }
   public function addProduct(Request $request)
   {
      
        $product=Product::create(array(
            'category_id'=>$request->id,
            'name'=>$request->name,
            'price'=>$request->price,
            'description'=>$request->description
        ));
        
        if($product)
        {
            return response()->json([
                'status'=>true,
                'message'=>'Product added'
        
            ]);

        }
        else{
            return response()->json([
                'status'=>false,
                'message'=>'failed to insert category'
        
            ]);
        }
   }
   public function getList(Request $request)
   {
    $data = brand_mode::where('is_removed', 0)->with('category');

   }
   public function add_cart(Request $request,$id)
   {
    
        $data=$request->all();
        $convenienceFee=$request->quantity*4.25;
        $baseprice=$request->baseprice ;
        $quantity= $request->quantity ;
        $total=($baseprice*$quantity)+$convenienceFee;
    
        
   
            $getData=Cart::where('user_id',auth()->id())->where('product_id',$id)->first();
        //dd($getData);
        
            
            if($getData)
            {
                $cart=Cart::where('user_id',auth()->id())->update([
                    'baseprice' => $baseprice,
                    'convenienceFee' =>$convenienceFee,
                    'quantity' => $request->quantity,
                    'total' => $total
                ]);
            
                if($cart)
                {
                    return response()->json([
                        'status'=>TRUE,
                        'message'=>'Cart updated'
                
                    ]);
                }

            }
            else
            {
                $cart=Cart::create([
                    'user_id' => auth()->id(),
                    'product_id' => $id,
                    'baseprice' => $baseprice,
                    'convenienceFee' =>$convenienceFee,
                    'quantity' => $request->quantity,
                    'total' => $total
                    
                ]);
                //dd($cart);
                if($cart)
                {
                    return response()->json([
                        'status'=>TRUE,
                        'message'=>'Added to cart successfully'
                
                    ]);
                }

            }
   
     }
   
     public function getCartList()
     {
        $user = auth()->User();
          $users = Cart::where('user_id',auth()->id())->get()->toArray();
          //dd($users);
          if ($users) {
              return response()->json([
                  'data' => $users,
                  'status' => true
              ]);
          } else {
              return response()->json([
                  'message' => 'error',
                  'status' => false
              ]);
          }
     }
     public function removeCart(Request $request)
     {
        $data=Cart::where('user_id',auth()->id())->where('product_id','=',$request->id)->delete();
         //dd($data);
         if($data)
         {
            return response()->json([
                'status'=>true,
                'message'=>'Product deleted'
        
            ]);
         }
     }
     public function addToWishlist(Request $request)
     {
        $user = auth()->user();
         if($user)
         {
            $wish=wishlist::create([
                'user_id' => auth()->id(),
                'product_id' =>$request->id
                
               
            ]);
            return response()->json([
                'status'=>true,
                'message'=>'Product Added to wish list'
        
            ]); 
         }
         else{
            return response()->json([
                'status'=>true,
                'message'=>'login first'
        
            ]);
         }
        
    }
    public function removeWishList(Request $request)
     {
         $data=Wishlist::where('user_id',auth()->id())->where('product_id','=',$request->id)->delete();
         //dd($data);
         if($data)
         {
            return response()->json([
                'status'=>true,
                'message'=>'Product removed'
        
            ]);
         }
     }
     public function checkStatus(Request $request)
     {
         $user=new User();
       $status=$request->status;
        //$id=$request->id;
        //$id=user::where('id',"=",$request->id);
        //dd($id);

        if($status=='unblock')
        {
            $user=User::where('id','=',$request->id)->update(['status'=>'block']);
            if($user)
            {
                return "block successfully";
            }
            
           // dd($user);
            
        }
        else
        {
            $user=User::where('id','=',$request->id)->update(['status'=>'unblock']);
            if($user)
            {
                return "unblock successfully";
            }
        }
     }
     public function changePassword(Request $request): JsonResponse
     {
         $input = $request->all();
         $authUser = Auth::user();
         $user = User::find($authUser->getAuthIdentifier());
         if (!Hash::check($input['oldPassword'], $user->password)) {
             $response = array(
                 'status' => false,
                 'message' => 'Old Password does not match'
             );
         } else {
             if ($request->password) {
                 $user->update(['password' => Hash::make($request->password)]);
                 return response()->json(['message' => 'Password has been changed successfully', 'status' => true]);
             } else {
                 return response()->json(['message' => 'Please enter New password', 'status' => false]);
             }
         }
         return response()->json($response);
     }
     public function logout(Request $request): JsonResponse
    {
        if (Auth::check()) {
            $request->user()->token()->revoke();
        }
        return response()->json([
            'message' => 'Successfully logged out',
            'status' => true
        ]);
    }
    public function forgot(Request $request): JsonResponse
    {
        if ($request->email) {
            $user = User::where('email', $request->email)->first();
            if ($user) {
                $random = Str::random(8);
                $files = [
                    public_path('public/image/1645766460.jpeg'),
                    public_path('public/image/mail.blade.php'),
                ];
                
                $data = array('link' => $random, 'user' => $user);
                Mail::send('mail', $data, function ($message) use ($request, $user,$files) {
                    $message->to($request->email, $user->firstName)
                        ->subject('Reset Password');
                    $message->from(env('MAIL_FROM_ADDRESS'), 'Reset Password');
                    foreach ($files as $file){
                        $message->attach($file);
                    }            
                
                    
                });
                User::where('id', $user->id)->update(array('token' => $random));
                $response = array(
                    'status' => true,
                    'message' => 'Reset link has been sent to your email'
                );
            } else {
                $response = array(
                    'status' => false,
                    'message' => 'User not found'
                );
            }
            return response()->json($response);
        } else {
            return response()->json(['message' => 'Please enter email', 'status' => false], 500);
        }
    }
    public function tokenVerification(Request $request): JsonResponse
    {
        if ($request->token) {
            $user = User::where('token', $request->token)->first();
        } else {
            $user = request()->user();
        }
        if ($user) {
            $response = array(
                'status' => true,
                'message' => 'Your Token Match Successfully'
            );
        } else {
            $response = array(
                'status' => false,
                'message' => 'You Have Entered Wrong Token'
            );
        }
        return response()->json($response);
    }
    public function reset(Request $request): JsonResponse
    {
        if ($request->token) {
            $user = User::where('token', $request->token)->first();
        } else {
            $user = request()->user();
        }
        if ($user) {
            $update = User::where('id', $user->id)->update(['password' => Hash::make($request->password),
                'token' => null]);
            if ($update) {
                $status = true;
                $message = 'Password has been changed successfully';
            } else {
                $status = false;
                $message = 'You Have Entered Wrong Password';
            }
        }
        return response()->json(['status' => $status, 'message' => $message]);
    }
         
}
