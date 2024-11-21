<?php

namespace App\Http\Services\Dashboard\Auth;
use App\Http\Requests\Dashboard\Auth\AdminLoginRequest;
use App\Http\Requests\Dashboard\Admin\AdminStoreRequest;
use App\Http\Requests\Dashboard\Admin\AdminUpdateRequest;
use App\Http\Services\Mutual\FileManagerService;
use App\Repository\AdminRepositoryInterface;
use App\Repository\AntiqueRepositoryInterface;
use App\Repository\BookStoreRepositoryInterface;
use App\Repository\ContactRepositoryInterface;
use App\Repository\EntityVisitorRepositoryInterface;
use App\Repository\InformationRequestRepositoryInterface;
use App\Repository\MemberShipRequestRepositoryInterface;
use App\Repository\OrderRepositoryInterface;
use App\Repository\PointOfSaleRepositoryInterface;
use App\Repository\SurveyRequestRepositoryInterface;
use App\Repository\UserRepositoryInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

class AdminService{

    public function __construct(
       private readonly  AdminRepositoryInterface                $adminRepository,
       private readonly  FileManagerService                      $fileManagerService,
       private readonly  UserRepositoryInterface                 $userRepository,
       private readonly  BookStoreRepositoryInterface            $bookStoreRepository,
       private readonly  AntiqueRepositoryInterface              $antiqueRepository,
       private readonly  ContactRepositoryInterface              $contactRepository,
       private readonly  EntityVisitorRepositoryInterface        $entityVisitorRepository,
       private readonly  PointOfSaleRepositoryInterface          $pointOfSaleRepository,
       private readonly  OrderRepositoryInterface                $orderRepository,
       private readonly  MemberShipRequestRepositoryInterface    $memberShipRequestRepository,
       private readonly  SurveyRequestRepositoryInterface        $surveyRequestRepository,
       private readonly  InformationRequestRepositoryInterface   $informationRequestRepository
    )
    {
    }


    public function login(){

        return view('dashboard.auth.login');
    }

    public function loginProcess(AdminLoginRequest $request)
    {

//        dd($request->all());

        $credentials = $request->validated();
        $credentials['is_active'] = 1;

        $rememberMe = $request->remember_me == 'on';
        if (auth('admin')->attempt($credentials,$rememberMe)) {

            return redirect()->route('admin.home')->with(['success' => __('dashboard.login_success')]);
        } else {
            return redirect()->route('admin.login')->with(['error' => __('dashboard.login_error')]);
        }
    }

    public function home(){

        $users = $this->userRepository->getCountModel('is_member',0);
        $members = $this->userRepository->getCountModel('is_member',1);
        $book_stores = $this->bookStoreRepository->getCountModel();
        $antiques = $this->antiqueRepository->getCountModel();
        $contacts = $this->contactRepository->getCountModel();
        $entityVisitors = $this->entityVisitorRepository->getCountModel();
        $pointOfSales = $this->pointOfSaleRepository->getCountModel();
        $orders = $this->orderRepository->getCountModel();
        $memberShipRequests = $this->memberShipRequestRepository->getCountModel();
        $surveyRequests = $this->surveyRequestRepository->getCountModel();
        $informationRequests = $this->informationRequestRepository->getCountModel();

        $usersToday = $this->userRepository->getCountToday('is_member',0);
        $membersToday = $this->userRepository->getCountToday('is_member',1);
        $contactsToday = $this->contactRepository->getCountToday();
        $entityVisitorsToday = $this->entityVisitorRepository->getCountToday();
        $ordersToday = $this->orderRepository->getCountToday();
        $memberShipRequestsToday = $this->memberShipRequestRepository->getCountToday();
        $surveyRequestsToday = $this->surveyRequestRepository->getCountToday();
        $informationRequestsToday = $this->informationRequestRepository->getCountToday();

        return view('dashboard.home',get_defined_vars());
    }

    public function index(){

        $admins = $this->adminRepository->getAdminList();
        return view('dashboard.admins.index',compact('admins'));
    }


    public function create(){

        return view('dashboard.admins.create');
    }

    public function store(AdminStoreRequest $request): RedirectResponse
    {

        $inputs = $request->validated();

        if($request->hasFile('image')){

            $image = $this->fileManagerService->handle("image","admins/images");
            $inputs['image'] = $image;
        }
        $inputs['password'] = Hash::make($inputs['password']);
        $this->adminRepository->create($inputs);

        return redirect()->route('admin.index')->with(['success' => __('dashboard.store')]);
    }


    public function edit($id)
    {
        $admin = $this->adminRepository->getById($id);

        return view('dashboard.admins.edit',compact('admin'));
    }


    public function update($id,AdminUpdateRequest $request): RedirectResponse
    {
        $admin = $this->adminRepository->getById($id);

        $inputs = $request->validated();

        if($request->hasFile('image')){

            $image = $this->fileManagerService->handle("image","admins/images",$admin->image);
            $inputs['image'] = $image;

        }
        if ($request->has('password') && $request->password != null){
            $inputs['password'] = Hash::make( $inputs['password']);

        }else{
            unset($inputs['password']);
        }

        $inputs['is_active'] =  $request->input('is_active', false);


        $this->adminRepository->update($admin->id,$inputs);

        return redirect()->route('admin.index')->with(['success' => __('dashboard.update')]);

    }


    public function destroy($id): RedirectResponse
    {

        try {
            $this->adminRepository->delete($id);
            return redirect()->route('admin.index')->with(['success' => __('dashboard.delete')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }



    public function logout(): RedirectResponse
    {
        auth('admin')->logout();
        return redirect()->route('admin.login')->with(['success' => __('dashboard.logout_success')]);
    }

}
