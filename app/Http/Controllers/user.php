<?php

namespace App\Http\Controllers;

use App\Http\Resources\marketresource;
use App\Http\Resources\driverresource;
use App\Http\Resources\userresource;
use App\Models\markets;
use App\Models\type;
use App\Models\User as ModelsUser;
use Illuminate\Http\Request;

class user extends Controller
{
    use markettrait;

    public function test()
    {

        $data = ModelsUser::where('type_id', 3)->find(2)->markettype->markets_type;
        //  $data=ModelsUser::where('type_id',3)->find(2);


        // $data=markets::find(1)->typemarket;
        // $data=markets::find(1);

        // return $data->name;
        return $data;
        // return $data;


    }

    public function upload_profile_image(Request $request)
    {
        $img = $request->profilephoto;
        $new = time() . $img->getClientOriginalName();
        $path = $request->file('profilephoto')->storeAs('profile', $new, 'imagefile');
        ModelsUser::create([
            'name' =>$request->name,
            'password' =>$request->password,
            'img_profile' => $path
        ]);

        return 'Upload ok';
    }

    public function upload_back_image(Request $request)
    {
        $img = $request->backphoto;
        $new = time() . $img->getClientOriginalName();
        $path = $request->file('backphoto')->storeAs('profile', $new, 'imagefile');
        ModelsUser::create([
            'name' =>$request->name,
            'password' =>$request->password,
            'img_back' => $path
        ]);

    }




    public function showalluser()
    {

        $data = userresource::collection(type::find(1)->showuser);

        return $this->bill($data, 'success', 200);
    }


    public function showoneuser($id)
    {
        $data = ModelsUser::where('type_id', 1)->find($id);
        if (!$data) {
            return response()->json('message: Not Found');
        }


        return $this->bill(new userresource($data), 'success', 200);
    }












    public function showalldriver()
    {

        $data = driverresource::collection(type::find(2)->showuser);

        return $this->bill($data, 'success', 200);
    }


    public function showonedriver($id)
    {
        $data = ModelsUser::where('type_id', 2)->find($id);
        if (!$data) {
            return response()->json('message: Not Found');
        }


        return $this->bill(new driverresource($data), 'success', 200);
    }





    public function showallmarket()
    {

        // $data = type::find(3)->showuser;

        $data = marketresource::collection(type::find(3)->showuser);

        return $this->bill($data, 'success', 200);



    }


    public function showonemarket($id)
    {
        $data = ModelsUser::where('type_id', 3)->find($id);

        if (!$data) {
            return response()->json('message: Not Found');
        }
        return $this->bill(new marketresource($data), 'success', 200);

       }
}
