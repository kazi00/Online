<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use function PHPUnit\Framework\fileExists;

class StaffController extends Controller
{

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    public function index()
    {
       $staff= Staff::latest() ->get();
        return view('staff.index',[
            'all_staff' =>$staff
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    public function create()
    {
        return view('staff.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required | unique:staff',
            'cell' => 'required | unique:staff',
            'uname' => 'required | max:15 | min:6 | unique:staff',
        ],[
            'name.required' => ' namer ghore nam likhun',
            'email.required' => ' email ghore nam likhun',
            'email.unique' => ' email ghor khali kn',
        ]);

        $unique_name = '' ;
        if ($request -> hasFile('photo')){
            $file = $request -> file('photo');
            $unique_name = md5(time().rand()) . '.' . $file ->getClientOriginalExtension();
            $file -> move(public_path('media/staff'), $unique_name);
        }

        Staff::create([
            'name'      => $request -> name,
            'email'     => $request -> email,
            'cell'      => $request -> cell,
            'uname'     => $request -> uname,
            'password'  => password_hash($request ->pass,PASSWORD_DEFAULT),
            'age'       => $request -> age,
            'photo'     => '$unique_name',
        ]);

        return redirect() ->back() ->with('success', 'Staff added successfully !');


    }

    public function show($id)
    {
        $data = Staff::find($id);
        return view('staff.show', [
            'staff'   => $data
        ]);
    }

    /**
     * @param $id
     */
    public function delete($id)
    {
        $delete_data = Staff::find($id);
        $delete_data -> delete();

        if (file_exists('public/media/staff/' . $delete_data -> photo) ){
            unlink('public/media/staff/' . $delete_data -> photo);
       }
        return redirect() ->back() -> with('success' , 'Staff deleted successful ! ' );
    }

    public function edit($id){
        $edit_data = Staff::find($id);
        return view('staff.edit',[
            'edit_data' =>$edit_data
        ]);

    }
    public function update(Request $request,$id){

        if($request -> hasFile('new_photo')) {
            $file = $request->file('new_photo');
            $unique_name = md5(time() . rand()) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('media/staff'), $unique_name);

            if (file_exists('public/media/staff/' . $request->old_photo)) {
                unlink('public/media/staff/' . $request->old_photo);
            }
        }else{
            $unique_name = $request-> old_photo;

        }



        $update_data = Staff::find($id);
        $update_data -> name = $request -> name;
        $update_data -> email = $request-> email;
        $update_data -> cell = $request->cell;
        $update_data -> uname = $request-> uname;
        $update_data -> age = $request->age;
        $update_data -> photo = $request->$unique_name;
        $update_data -> update();

        return redirect() -> back() -> with('success','Staff Updated Successful !');

        }
}
