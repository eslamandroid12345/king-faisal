<?php

namespace App\Http\Services\Dashboard\AboutCenter;

use App\Http\Requests\Dashboard\ChairmanOfTheBoardNews\ChairmanOfTheBoardNewStoreRequest;
use App\Http\Requests\Dashboard\ChairmanOfTheBoardNews\ChairmanOfTheBoardNewUpdateRequest;
use App\Http\Services\Mutual\FileManagerService;
use App\Repository\ChairmanOfTheBoardNewRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;

class ChairmanOfTheBoardNewService
{

    public function __construct(
        private readonly  ChairmanOfTheBoardNewRepositoryInterface $chairmanOfTheBoardNewRepository,
        private readonly FileManagerService                        $fileManagerService
    )
    {
    }


    public function index(){

        $chairman_of_the_board_news =  $this->chairmanOfTheBoardNewRepository->paginate();
        return view('dashboard.about_center.chairman_of_the_board_news.index',compact('chairman_of_the_board_news'));
    }


    public function create(){

        return view('dashboard.about_center.chairman_of_the_board_news.create');
    }

    public function store(ChairmanOfTheBoardNewStoreRequest $request): RedirectResponse
    {

        try {
            $inputs = $request->only('background_image','published_date');

            $inputs['published_date'] = Carbon::parse($request->published_date)->format('Y-m-d');

            if($request->hasFile('background_image')){

                $image = $this->fileManagerService->handle("background_image","about_center/chairman_of_the_board_news/images");
                $inputs['background_image'] = $image;

            }
            $new =  $this->chairmanOfTheBoardNewRepository->create($inputs);
            $this->chairmanOfTheBoardNewRepository->multipleLanguages($new,$request,['title','description']);

            return redirect()->route('chairman_of_the_board_news.index')->with(['success' => __('dashboard.store')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


    public function edit($id)
    {
        $chairman_of_the_board_new =  $this->chairmanOfTheBoardNewRepository->getById($id);

        return view('dashboard.about_center.chairman_of_the_board_news.edit',compact('chairman_of_the_board_new'));
    }


    public function update(ChairmanOfTheBoardNewUpdateRequest $request,$id): RedirectResponse
    {

        try {
            $chairman_of_the_board_new =  $this->chairmanOfTheBoardNewRepository->getById($id);

            $inputs = $request->only('background_image','published_date');

            $inputs['published_date'] = Carbon::parse($request->published_date)->format('Y-m-d');
            if($request->hasFile('background_image')){

                $image = $this->fileManagerService->handle("background_image", "about_center/chairman_of_the_board_news/images", $chairman_of_the_board_new->background_image);
                $inputs['background_image'] = $image;

            }

            $this->chairmanOfTheBoardNewRepository->update($chairman_of_the_board_new->id,$inputs);
            $this->chairmanOfTheBoardNewRepository->multipleLanguages($chairman_of_the_board_new,$request,['title','description']);

            return redirect()->route('chairman_of_the_board_news.index')->with(['success' => __('dashboard.update')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


    public function destroy($id): RedirectResponse
    {

        try {
            $this->chairmanOfTheBoardNewRepository->delete($id);
            return redirect()->route('chairman_of_the_board_news.index')->with(['error' => __('dashboard.delete')]);

        }catch (\Exception $e){
            return redirect()->back()->with(['error' => __('messages.Something went wrong')]);

        }
    }


}
