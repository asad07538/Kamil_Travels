<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\User;
use App\User_Group;

use Modules\Common\Entities\Email;
use Modules\Common\Entities\Person;
use Modules\Common\Entities\Phone;
use Modules\Customer\Entities\Customer;

use Modules\Account\Entities\AccountHead;

use Modules\Common\Entities\PersonAddress;
use Modules\Common\Entities\PersonEmail;
use Modules\Common\Entities\PersonFax;
use Modules\Common\Entities\PersonPhone;

use Illuminate\Support\Facades\Auth;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        // dd($data);
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'sur_name' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'dob' => ['required'],
            'gender' => ['required'],
            'email' => ['string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'min:8', 'confirmed'],
            'father_name' => ['required'],
            'phone_no' => ['required'],
            'cnic' => ['required','unique:users','max:13','min:13'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $request = request();
        
        // dd($request);
        $user=new User;
        $user->name = $data['name'];
        $user->cnic = $data['cnic'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->save();

        if($request->hasfile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=$user->id."." .$extension;
            $destinatioin=public_path('/member_profile/');
            $file->move($destinatioin,$filename);
            $user->image='/member_profile/'.$filename;
        }
        $user->save();

        $user_group=new User_Group;
        $user_group->user_id=$user->id;
        $user_group->group_id=6;
        $user_group->save();

        $person=new Person;
        $person->name=$data['name'];
        $person->surname=$data['sur_name'];
        $person->country_id=$data['country'];
        $person->date_of_birth=$data['dob'];
        $person->father_name=$data['father_name'];
        $person->gender=$data['gender'];
        $person->cnic=$data['cnic'];
        $person->save();

        $account_head=AccountHead::create(['title'=>$data['name'],
            'level_id'=>3,
            'parent_id'=>5,
            'added_by'=>0,
        ]);
        $refund=AccountHead::create(['title'=>$data['name'],
            'level_id'=>3,
            'parent_id'=>5,
            'added_by'=>0,
        ]);
        $agreement_account=AccountHead::create(['title'=>$data['name'],
            'level_id'=>3,
            'parent_id'=>5,
            'added_by'=>0,
        ]);

        $customer= New Customer;
        $customer->user_id=$user->id;
        $customer->person_id=$person->id;
        $customer->account_head_id=$account_head->id;
        $customer->refund_id=$refund->id;
        $customer->agreement_account_id=$agreement_account->id;
        $customer->save();

        $number = sprintf('%05d',$customer->id);
        
        if($data['gender']=="male"){
            $user->email="A1".$number;
        }else{
            $user->email="A2".$number;
        }

        $user->save();

        $pho=New Phone;
        $pho->number=$data['phone_no'];
        $pho->save();
        $phone=New PersonPhone;
        $phone->person_id=$person->id;
        $phone->phone_id=$pho->id;
        $phone->save();

        $ema=New Email;
        $ema->email=$data['email'];
        $ema->save();
        $email=New PersonEmail;
        $email->person_id=$person->id;
        $email->email_id=$ema->id;
        $email->save();

        return $user;
    }
}
