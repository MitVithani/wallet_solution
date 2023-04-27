<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Repositories\UserRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\ShareLink;
// use Flash;
use Response;

class ShareLinkController extends AppBaseController
{
    /**
     * Display a listing of the User.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $shareLinks = ShareLink::get();
        return view('admin.share_link.index')
            ->with('shareLinks', $shareLinks);
    }

}
