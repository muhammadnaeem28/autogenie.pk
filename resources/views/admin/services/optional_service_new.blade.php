@extends('admin.layouts.master')
@section('title')
    Dashboard
    @parent
@endsection

@section('content')

	<div class="page-content">

					<div class="row">
						<div class="col-md-12">
							<!-- BEGIN PAGE TITLE & BREADCRUMB-->
							<h3 class="page-title">
                                Optional Services
							</h3>
							<ul class="page-breadcrumb breadcrumb">
								<li>
									<i class="fa fa-home"></i>
                                    Services
									<i class="fa fa-angle-right"></i>
                                    Optional Services
									<i class="fa fa-angle-right"></i>
								</li>
								<li>
                                    New Optional Service
								</li>

							</ul>
							<!-- END PAGE TITLE & BREADCRUMB-->
						</div>
					</div>

		<div class="row">

			 <div class="portlet box red col-xs-10 col-xs-offset-1" >
                <div class="portlet-title">
                    <div class="caption">
                    	<b>Optional Service</b>
                    </div>

                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <form method="POST" action="{{ route('admin.optional-services.add') }}" class="form-horizontal">
                    	{{ csrf_field() }}
                                <br>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" class="form-control" value="{{Input::old('name')}}">
                                    <span>{{ $errors->first('name') }}</span>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Price</label>
                                <div class="col-md-8">
                                    <input type="text" name="price" class="form-control" value="{{Input::old('price')}}">
                                    <span>{{ $errors->first('price') }}</span>

                                </div>
                            </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label" for="textarea">Description</label>
                            <div class="col-md-8">
                            <textarea rows="12" col="9" class="form-control" id="textarea" name="desc"
                                      placeholder="">{{Input::old('desc')}}</textarea>
                            </div>
                        </div>

                        <div class="form-actions fluid">

                            <div class="col-md-offset-5 col-md-6">
                                <button type="submit" class="btn green">Submit</button>
                            </div>

                        </div>
                    </form>
                    <!-- END FORM-->
                </div>

		</div>
	</div>
</div>



@endsection
