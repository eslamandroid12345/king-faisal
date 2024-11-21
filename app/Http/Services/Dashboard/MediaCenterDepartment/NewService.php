<?php

namespace App\Http\Services\Dashboard\MediaCenterDepartment;
use App\Http\Requests\Dashboard\News\NewStoreRequest;
use App\Http\Requests\Dashboard\News\NewUpdateRequest;
use App\Http\Services\Mutual\FileManagerService;
use App\Repository\NewRepositoryInterface;
use Illuminate\Http\RedirectResponse;

class NewService
{

    public function __construct(
        private readonly NewRepositoryInterface $newRepository,
        private readonly FileManagerService $fileManagerService
    )
    {
    }

    public function index(){

        $news = $this->newRepository->get('type','new');
        return view('dashboard.news.index',compact('news'));
    }


    public function create(){

        return view('dashboard.news.create');
    }

    public function store(NewStoreRequest $request): RedirectResponse
    {

        try {

            $inputs = $request->only('image_url','type','published_date');

            if($request->hasFile('image_url')){

                $image = $this->fileManagerService->handle("image_url","media_center_departments/images/news");
                $inputs['image_url'] = $image;

            }
            $new = $this->newRepository->create($inputs);
            $this->newRepository->multipleLanguages($new,$request,['title','description']);
            return redirect()->route('news.index')->with(['success' => __('dashboard.store')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


    public function edit($id)
    {
        $new = $this->newRepository->getById($id);

        return view('dashboard.news.edit',compact('new'));
    }


    public function update(NewUpdateRequest $request,$id): RedirectResponse
    {

        try {
            $new = $this->newRepository->getById($id);
            $inputs = $request->only('image_url', 'published_date');

            if($request->hasFile('image_url')){

                $image = $this->fileManagerService->handle("image_url","media_center_departments/images/news",$new->image_url);
                $inputs['image_url'] = $image;

            }

            $this->newRepository->update($new->id,$inputs);
            $this->newRepository->multipleLanguages($new,$request,['title','description']);

            return redirect()->route('news.index')->with(['success' => __('dashboard.update')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


    public function destroy($id): RedirectResponse
    {

        try {
            $this->newRepository->delete($id);
            return redirect()->route('news.index')->with(['error' => __('dashboard.delete')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


}
