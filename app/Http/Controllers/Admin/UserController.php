<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Repositories\UserRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ShareLink;
// use Flash;
use Response;

class UserController extends AppBaseController
{
    /** @var UserRepository $userRepository*/
    private $userRepository;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepository = $userRepo;
    }

    /**
     * Display a listing of the User.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $users = User::where('is_admin', '!=', '1')->orderBy('id', 'desc')->get();

        return view('admin.users.index')
            ->with('users', $users);
    }

    /**
     * Show the form for creating a new User.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created user in storage.
     *
     * @param CreateUserRequest $request
     *
     * @return Response
     */
    public function store(CreateUserRequest $request)
    {
        $input = $request->all();

        $user = $this->userRepository->create($input);

        // Flash::success('User saved successfully.');

        return redirect(route('admin.users.index'));
    }

    /**
     * Display the specified user.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $user = $this->userRepository->find($id);

        $shareLinks = ShareLink::where(['user_id' => $id])->get();

        if (empty($user)) {
            // Flash::error('User not found');

            return redirect(route('users.index'));
        }
        return view('admin.share_link.index')
        ->with('shareLinks', $shareLinks);
        // return view('admin.users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified user.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            // Flash::error('User not found');

            return redirect(route('users.index'));
        }

        return view('admin.users.edit')->with('user', $user);
    }

    public function changeStatus(Request $request)
    {
        // dd($request->status);
        if($request->status == 'pending' || $request->status == 'deactive'){
            $status = "active";
        }else if($request->status == 'active'){
            $status = "deactive";
        }else{
            $status = "deactive";
        }
        User::where(['id' => $request->id])->update(['status' => $status]);

        return $status;
    }

    public function update($id, Request $request)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            // Flash::error('User not found');

            return redirect(route('admin.users.index'));
        }
        // dd($request->all());
        $data['name'] = $request->name;
        $data['shop_name'] = $request->shop_name;
        $data['phone_number'] = $request->phone_number;
        $data['email'] = $request->email;
        $data['company_name'] = $request->company_name;
        $data['tax_number'] = $request->tax_number;
        $data['address'] = $request->address;
        $data['city_name'] = $request->city_name;
        $data['bank_iban'] = $request->bank_iban;
        if(!empty($request->logo)){
            $logoname = time() . uniqid() . '.' . $request->logo->getClientOriginalExtension();
            $request->logo->move(public_path('logo'), $logoname);
            $request->request->remove('logo');
            $data['logo'] = $logoname;
        }

        User::where(['id' => $id])->update($data);
        // Flash::success('User updated successfully.');

        return redirect(route('users.index'));
    }

    /**
     * Remove the specified user from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            // Flash::error('User not found');

            return redirect(route('users.index'));
        }

        $this->userRepository->delete($id);

        // Flash::success('User deleted successfully.');

        return redirect(route('admin.users.index'));
    }
}
