@extends('dashboard.core.app')
@section('title', trans('dashboard.research_paper_section'))
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>      {{trans('dashboard.research_paper_section')}}</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"> {{trans('dashboard.research_paper_section')}}</h3>
                            <div class="card-tools">


                                {{--start search model--}}
                                <a href="{{route('research_papers.index')}}" style="color: #fff" class="btn btn-dark waves-effect waves-light"><i class="fa fa-spinner"></i> </a>
                                <button class="btn btn-dark waves-effect waves-light" data-toggle="modal" data-target="#delete-modal-0">{{__('dashboard.search')}}</button>
                                <a href="{{route('research_papers.create')}}"><button class="btn btn-dark waves-effect waves-light">{{trans('dashboard.create_model')}}</button></a>

                                <div id="delete-modal-0" class="modal fade modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">                                                    <div class="modal-dialog">
                                        <div class="modal-content float-left">
                                            <div class="modal-header">
                                                <h5 class="modal-title">{{__('dashboard.search_data')}}</h5>
                                            </div>


                                            <form action="{{route('research_papers.index')}}" method="GET">

                                                <div class="form-group col-md-12 col-12">
                                                    <label for="">{{trans('dashboard.research_paper_category')}}</label>
                                                    <select id="research_department_id" name="research_department_id" class="form-control">
                                                        <option  value="" disabled>{{trans('dashboard.research_paper_category')}}</option>
                                                        @foreach($research_paper_departments as $research_paper_department)
                                                            <option  value="{{$research_paper_department->id}}">{{$research_paper_department->title}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" data-dismiss="modal" class="btn btn-dark waves-effect waves-light m-l-5 mr-1 ml-1">
                                                        {{__('dashboard.search_close')}}
                                                    </button>
                                                    <button type="submit" class="btn btn-danger">{{__('dashboard.search')}}</button>

                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                {{--end search---}}
                            </div>
                        </div>


                        <div style="overflow-x: auto" class="card-body">

                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{trans('dashboard.research_paper_department_title')}}</th>
                                    <th>{{trans('dashboard.research_paper_category')}}</th>
                                    <th>{{trans('dashboard.research_paper_editor')}}</th>
                                    <th>{{trans('dashboard.research_paper_background_image')}}</th>
                                    <th>{{trans('dashboard.operations')}}</th>

                                </tr>
                                </thead>
                                <tbody>
                                @forelse($research_papers as  $research_paper)
                                    <tr>
                                        <td>{{$research_paper->id}}</td>
                                        <td>{{$research_paper->translate(lang())->title}}</td>
                                        <td>{{$research_paper->research_paper_department->translate(lang())->title}}</td>
                                        <td>{{$research_paper->editor}}</td>

                                        <td>
                                            <img style="width: 200px;height: 100px;border-radius: 4px" src="{{asset($research_paper->background_image)}}">
                                        </td>

                                        <td>
                                            <div class="operations-btns" style="">
                                                <a href="{{route('research_papers.edit',$research_paper->id)}}"> <button class="btn btn-dark waves-effect waves-light">{{trans('dashboard.update_model')}}</button></a>
                                                <button class="btn btn-dark waves-effect waves-light" data-toggle="modal" data-target="#delete-modal{{$research_paper->id}}">{{trans('dashboard.delete_model')}}</button>
                                                <div id="delete-modal{{$research_paper->id}}" class="modal fade modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">                                                    <div class="modal-dialog">
                                                        <div class="modal-content float-left">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">{{__('dashboard.delete_ok')}}</h5>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>{{__('dashboard.Do you want to real delete')}}</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" data-dismiss="modal" class="btn btn-dark waves-effect waves-light m-l-5 mr-1 ml-1">
                                                                    {{__('dashboard.close')}}
                                                                </button>
                                                                <form action="{{route('research_papers.destroy',$research_paper->id)}}" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-danger">{{trans('dashboard.delete_model')}}</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                @empty
                                    {{__('dashboard.not_data')}}
                                @endforelse
                                </tbody>
                            </table>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <div>{{$research_papers->links()}}</div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
