<?php

namespace App\Http\Requests\Admin;


use App\Events\Admin\UserEdited;
use App\Exceptions\RequestException;
use App\Log;
use App\User;
use Illuminate\Foundation\Http\FormRequest;

class ChangeBasicInfoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
//            'username' => 'unique:users'
        ];
    }

    public function messages(){
        return [
//            'username.unique' => 'User with that username already exists'
        ];
    }

    public function persist(User $user){
        $this->updateUsername($user);
        session()->flash('success', 'Successfully updated ' . $user->username . '\'s basic info');
    }

    public function updateUsername(User $user){

        if ($this->username !== null && $this->username !== $user->username){
            // check if user with username already exist
            $userCheck = User::where('username',$this->username)->first();
            if ($userCheck !== null)
                throw new RequestException('User with that username already exists');
            $oldUser = User::find($user->id);
            $user->username = $this->username;
            $user->save();
            event(new UserEdited($oldUser,$user,auth()->user()));

        }
    }
}
