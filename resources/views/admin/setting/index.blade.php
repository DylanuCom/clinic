@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">{{trans('admin.General_Settings')}}</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{trans('admin.Settings')}}</span>
						</div>
					</div>

				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row row-sm">
					<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
						<div class="card  box-shadow-0">
							<div class="card-header">
								<h4 class="card-title mb-1">{{trans('admin.General_Settings')}}</h4>
							</div>

							<div class="card-body pt-0">
	                           <form role="form" method="POST" class="form-horizontal" enctype="multipart/form-data" action="">
								    <div class="form-group">
                                     <label class="form-label">الموبايل</label>
										<input type="text" class="form-control" id="inputName" placeholder="الموبايل">
									</div>
                                    <div class="form-group">
										<label class="form-label">البريد</label>
                                        <input type="email" class="form-control" id="inputName" placeholder="الايميل">
									</div>
                                    <div class="col-sm-12 col-md-4 mg-t-10 mg-sm-t-0">
										<label class="form-label">لوجو الموقع</label>
                                        <input type="file" class="dropify" data-default-file="{{URL::asset('assets/img/photos/1.jpg')}}" data-height="200"  />
									</div>
                                      <div class="col-sm-12 col-md-4 mg-t-10 mg-sm-t-0">
										<label class="form-label">ايقونة الموقع</label>
                                        <input type="file" class="dropify" data-default-file="{{URL::asset('assets/img/photos/1.jpg')}}" data-height="200"  />
									</div>

                                    <div class="form-group">
                                     <label class="form-label">facebook</label>
										<input type="text" class="form-control" id="inputName" placeholder="#">
									</div>

                                    <div class="form-group">
                                     <label class="form-label">instagram</label>
										<input type="text" class="form-control" id="inputName" placeholder="#">
									</div>

                                    <div class="form-group">
                                     <label class="form-label">twitter</label>
										<input type="text" class="form-control" id="inputName" placeholder="#">
									</div>

                                    <div class="form-group">
                                     <label class="form-label">linkedin</label>
										<input type="text" class="form-control" id="inputName" placeholder="#">
									</div>




			<!-- div -->
						<div class="card mg-b-20" id="tabs-style2">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									البيانات الاساسية
								</div>
								<p class="mg-b-20">البيانات الخاصة باللغات</p>
                                <div class="text-wrap">
									<div class="example">
										<div class="panel panel-primary tabs-style-2">
											<div class=" tab-menu-heading">
												<div class="tabs-menu1">
													<!-- Tabs -->
													<ul class="nav panel-tabs main-nav-line">
                                                    @foreach (config('app.languages') as $key => $lang)
                                                        <li><a href="#{{$key}}" class="nav-link @if($loop->index == 0) active @endif" data-toggle="tab">{{$lang}}</a></li>

                                                    @endforeach

                                                    </ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body main-content-body-right border">
												<div class="tab-content">
                                                    @foreach (config('app.languages') as $key => $lang)

													<div class="tab-pane  @if($loop->index == 0) active @endif" id="{{$key}}">
                                                       <div class="form-group">
                                                        <label class="form-label">اسم الموقع - {{$key}}</label>
                                                            <input type="text" class="form-control" id="inputName">
                                                        </div>
                                                        <div class="form-group">
                                                        <label class="form-label">العنوان - {{$key}}</label>
                                                            <input type="text" class="form-control" id="inputName">
                                                        </div>
													</div>
                                                    @endforeach
                                            </div>
											</div>
										</div>
									</div>


                                    		</div>
										</div>
									</div>

<!---Prism Pre code-->

									<div class="form-group mb-0 mt-3 justify-content-end">
										<div>
											<button type="submit" class="btn btn-primary">تحديث</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>

				</div>
				<!-- row -->

			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
@endsection
