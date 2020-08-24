<?php

namespace App\Http\Controllers\Manage;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manage.profile.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updatesettings(Request $request,User $user)
    {
        $messages = [
            'name.required' => 'Tiêu đề bắt buộc nhập',
            'name.max' => 'Từ khóa không được vượt quá 30 ký tự',
            'image.required' => 'Bắt buộc gắn ảnh',
            'image.mimes' => 'Hình ảnh phải là một loại tệp: png, jpg.'
        ];
        $validatedData =$request->validate([
            'name' => 'required|max:30|',
            'image' => 'mimes:jpeg,jpg,png|required|max:10000',
        ],$messages);

        $file = $request->image;

        $file->move('images/avatar' , $file->getClientOriginalName());

        $data = ([
            'name' => $request->name,
            'image' => $file->getClientOriginalName()
        ]);

        $id_user = auth()->user()->id;

        if(User::where('id',$id_user)->update($data)){
            $request->session()->flash('success', 'Proflie has been updated');
        }else{
            $request->session()->flash('error' , ' Error!!!');
        }

        return redirect()->route('manage.profile.index');
    }

    public function updatepassword(Request $request)
    {
        $rules = [
            'OldPassword' => ['required', new MatchOldPassword],
            'NewPassword' => ['required'],
            'NewPasswordConfirm' => ['required_with:NewPassword','same:NewPassword'],
        ];
        $messages = [
            'OldPassword.required' => 'Vui lòng nhập mật khẩu cũ',
            'NewPassword.required' => 'Vui lòng nhập mật khẩu mới',
            'NewPasswordConfirm.same' => 'Nhập lại mật khẩu mới không giống nhau',
            'NewPasswordConfirm.required_with' => 'Bạn chưa nhập lại mật khẩu mới'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            // Điều kiện dữ liệu không hợp lệ sẽ chuyển về trang profile và thông báo lỗi
            return redirect()->route('manage.profile.index')->withErrors($validator)->withInput();
            $request->session()->flash('error' , 'Password has been updated!!!');
        } else {
            $data = array (
                'password'=> Hash::make($request->NewPassword)
            );
            $id_user = auth()->user()->id;
            $update = User::where('id',$id_user)->update($data);

            if($update == 1) {
                // Insert thành công sẽ hiển thị thông báo
                $request->session()->flash('success' , 'Password has been updated!!!');
            }else{
                 // Insert thất bại sẽ hiển thị thông báo lỗi

            }
            return redirect()->route('manage.profile.index');
        }
    }
}
