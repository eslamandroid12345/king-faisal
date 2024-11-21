@extends('dashboard.core.app')
@section('title',trans('dashboard.payment_receipts'))
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>    {{trans('dashboard.payment_receipts')}}</h1>
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
                            <h3 class="card-title">   {{trans('dashboard.payment_receipts')}}</h3>
                            <div class="card-tools">
                                {{--start search model--}}
                                <a href="{{route('payments.transfers')}}" style="color: #fff" class="btn btn-dark waves-effect waves-light"><i class="fa fa-spinner"></i> </a>
                                <button class="btn btn-dark waves-effect waves-light" data-toggle="modal" data-target="#delete-modal-0">{{__('dashboard.search')}}</button>

                                <div id="delete-modal-0" class="modal fade modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">                                                    <div class="modal-dialog">
                                        <div class="modal-content float-left">
                                            <div class="modal-header">
                                                <h5 class="modal-title">{{__('dashboard.search_data')}}</h5>
                                            </div>


                                            <form action="{{route('payments.transfers')}}" method="GET">


                                                <div class="modal-body">


                                                    <div class="form-group col-md-12 col-12">
                                                        <label for="">جميع العناصر</label>
                                                        <select id="" name="" class="form-control">
                                                            <option  value="" disabled>جميع العناصر</option>
                                                            <option  value="">طلبات السله</option>
                                                            <option  value="">طلبات الافاده</option>
                                                            <option  value="">طلبات الاستقصاء</option>
                                                            <option  value="">طلبات العضويه</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-12 col-12">
                                                        <label for="exampleInputName1">{{trans('dashboard.phone_')}}</label>
                                                        <input name="phone" type="number" class="form-control" id="exampleInputName1">
                                                    </div>

                                                    <div class="form-group col-md-12 col-12">
                                                        <label for="exampleInputName1">التاريخ من</label>
                                                        <input name="from_date" type="date" class="form-control" id="exampleInputName1" value="{{\Carbon\Carbon::now()->format('Y-m-d')}}">
                                                    </div>

                                                    <div class="form-group col-md-12 col-12">
                                                        <label for="exampleInputName1">التاريخ الي</label>
                                                        <input name="to_date" type="date" class="form-control" id="exampleInputName1" value="{{\Carbon\Carbon::now()->addDay()->format('Y-m-d')}}">
                                                    </div>

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
                                    <th>@lang('dashboard.information_request_payment_type')</th>
                                    <th>@lang('dashboard.information_request_total')</th>
                                    <th>@lang('dashboard.information_request_account_name')</th>
                                    <th>@lang('dashboard.information_request_account_number')</th>
                                    <th>@lang('dashboard.information_request_from_bank')</th>
                                    <th>@lang('dashboard.information_request_to_bank')</th>
                                    <th>@lang('dashboard.information_request_payment_date')</th>
                                    <th>@lang('dashboard.information_request_payment_time')</th>
                                    <th>@lang('dashboard.information_request_payment_status')</th>
                                    <th>{{trans('dashboard.operations')}}</th>

                                </tr>
                                </thead>
                                <tbody>
                                @forelse($payments as $payment)
                                    <tr>
                                        <td>{{$payment->id}}</td>
                                        <td>{{$payment->payment_type_check}}</td>
                                        <td>{{$payment->total_amount}}</td>
                                        <td>{{$payment->bank_account_name}}</td>
                                        <td>{{$payment->bank_account_number}}</td>
                                        <td>{{$payment->from_bank}}</td>
                                        <td>{{$payment->to_bank}}</td>
                                        <td>{{$payment->transfer_date}}</td>
                                        <td>{{$payment->transfer_time}}</td>
                                        <td>{{$payment->payment_status}}</td>

                                        <td>
                                            <div class="operations-btns" style="">
                                            <a href="#"> <button class="btn btn-dark waves-effect waves-light">عرض</button></a>
                                            <a href="#"> <button class="btn btn-dark waves-effect waves-light">تاكيد عمليه الدفع</button></a>
                                            <a href="#"> <button class="btn btn-danger waves-effect waves-light">رفض عمليه الدفع</button></a>


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
                            <div>{{$payments->links()}}</div>
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
