@extends('admin.layout')

@section('css')
<link href="{{ asset('public/plugins/iCheck/all.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h4>
            {{ trans('admin.admin') }}
            	<i class="fa fa-angle-right margin-separator"></i>
            		{{ trans('admin.storage') }}
          </h4>
        </section>

        <!-- Main content -->
        <section class="content">

        	 @if (session('success_message'))
		    <div class="alert alert-success">
		    	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">×</span>
								</button>
		       <i class="fa fa-check margin-separator"></i> {{ session('success_message') }}
		    </div>
		@endif

        	<div class="content">

        		<div class="row">

        	<div class="box">
                <div class="box-header">
                  <h3 class="box-title">{{ trans('admin.storage') }}</h3>
                </div><!-- /.box-header -->

                <!-- form start -->
                <form class="form-horizontal" method="POST" action="{{ url('panel/admin/storage') }}" enctype="multipart/form-data">

                	<input type="hidden" name="_token" value="{{ csrf_token() }}">

					@include('errors.errors-forms')

          <!-- Start Box Body -->
           <div class="box-body">
             <div class="form-group">
               <label class="col-sm-2 control-label">App URL</label>
               <div class="col-sm-10">
                 <input type="text" value="{{ env('APP_URL') }}" name="APP_URL" class="form-control" placeholder="App URL">
                 <p class="help-block margin-bottom-zero">{{trans('admin.notice_app_url')}} <strong>{{url('/')}}</strong></p>
               </div>
             </div>
           </div><!-- /.box-body -->

              <!-- Start Box Body -->
               <div class="box-body">
                 <div class="form-group">
                   <label class="col-sm-2 control-label">{{trans('admin.disk')}}</label>
                   <div class="col-sm-10">
                     <select name="FILESYSTEM_DRIVER" class="form-control custom-select">
                       <option @if (env('FILESYSTEM_DRIVER') == 'default') selected @endif value="default">{{trans('admin.disk_local')}}</option>
                       <option @if (env('FILESYSTEM_DRIVER') == 's3') selected @endif value="s3">Amazon S3</option>
                       <option @if (env('FILESYSTEM_DRIVER') == 'dospace') selected @endif value="dospace">DigitalOcean</option>
                       <option @if (env('FILESYSTEM_DRIVER') == 'wasabi') selected @endif value="wasabi">Wasabi</option>
                       <option @if (env('FILESYSTEM_DRIVER') == 'backblaze') selected @endif value="backblaze">Backblaze B2</option>
                       <option @if (env('FILESYSTEM_DRIVER') == 'vultr') selected @endif value="vultr">Vultr</option>
                     </select>
                   </div>
                 </div>
               </div><!-- /.box-body -->

               <hr/>

                 <!-- Start Box Body -->
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Amazon Key</label>
                      <div class="col-sm-10">
                        <input type="text" value="{{ env('AWS_ACCESS_KEY_ID') }}" name="AWS_ACCESS_KEY_ID" class="form-control" placeholder="Amazon Key">
                      </div>
                    </div>
                  </div><!-- /.box-body -->

                  <!-- Start Box Body -->
                   <div class="box-body">
                     <div class="form-group">
                       <label class="col-sm-2 control-label">Amazon Secret</label>
                       <div class="col-sm-10">
                         <input type="text" value="{{ env('AWS_SECRET_ACCESS_KEY') }}" name="AWS_SECRET_ACCESS_KEY" class="form-control" placeholder="Amazon Secret">
                       </div>
                     </div>
                   </div><!-- /.box-body -->

                   <!-- Start Box Body -->
                    <div class="box-body">
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Amazon Region</label>
                        <div class="col-sm-10">
                          <input type="text" value="{{ env('AWS_DEFAULT_REGION') }}" name="AWS_DEFAULT_REGION" class="form-control" placeholder="Amazon Region">
                        </div>
                      </div>
                    </div><!-- /.box-body -->

                    <!-- Start Box Body -->
                     <div class="box-body">
                       <div class="form-group">
                         <label class="col-sm-2 control-label">Amazon Bucket</label>
                         <div class="col-sm-10">
                           <input type="text" value="{{ env('AWS_BUCKET') }}" name="AWS_BUCKET" class="form-control" placeholder="Amazon Bucket">
                         </div>
                       </div>
                     </div><!-- /.box-body -->

                    <hr />

                    <!-- Start Box Body -->
                     <div class="box-body">
                       <div class="form-group">
                         <label class="col-sm-2 control-label">DigitalOcean Key</label>
                         <div class="col-sm-10">
                           <input type="text" value="{{ env('DOS_ACCESS_KEY_ID') }}" name="DOS_ACCESS_KEY_ID" class="form-control" placeholder="DigitalOcean Key">
                         </div>
                       </div>
                     </div><!-- /.box-body -->

                     <!-- Start Box Body -->
                      <div class="box-body">
                        <div class="form-group">
                          <label class="col-sm-2 control-label">DigitalOcean Secret</label>
                          <div class="col-sm-10">
                            <input type="text" value="{{ env('DOS_SECRET_ACCESS_KEY') }}" name="DOS_SECRET_ACCESS_KEY" class="form-control" placeholder="DigitalOcean Secret">
                          </div>
                        </div>
                      </div><!-- /.box-body -->

                      <!-- Start Box Body -->
                       <div class="box-body">
                         <div class="form-group">
                           <label class="col-sm-2 control-label">DigitalOcean Region</label>
                           <div class="col-sm-10">
                             <input type="text" value="{{ env('DOS_DEFAULT_REGION') }}" name="DOS_DEFAULT_REGION" class="form-control" placeholder="DigitalOcean Region">
                           </div>
                         </div>
                       </div><!-- /.box-body -->

                       <!-- Start Box Body -->
                        <div class="box-body">
                          <div class="form-group">
                            <label class="col-sm-2 control-label">DigitalOcean Bucket</label>
                            <div class="col-sm-10">
                              <input type="text" value="{{ env('DOS_BUCKET') }}" name="DOS_BUCKET" class="form-control" placeholder="DigitalOcean Bucket">
                            </div>
                          </div>
                        </div><!-- /.box-body -->

                        <!-- Start Box Body -->
                        <div class="box-body">
                          <div class="form-group">
                            <label class="col-sm-2 control-label">DigitalOcean CDN</label>
                            <div class="col-sm-10">
                              <div class="radio">
                              <label class="padding-zero">
                                <input type="checkbox" name="DOS_CDN" class="check" @if (env('DOS_CDN')) checked="checked" @endif value="1">

                                 {{ trans('general.enabled') }}/{{ trans('admin.disabled') }} DigitalOcean CDN
                              </label>
                            </div>
                            </div>
                          </div>
                        </div><!-- /.box-body -->

                        <hr />

                        <!-- Start Box Body -->
                         <div class="box-body">
                           <div class="form-group">
                             <label class="col-sm-2 control-label">Wasabi Key</label>
                             <div class="col-sm-10">
                               <input type="text" value="{{ env('WAS_ACCESS_KEY_ID') }}" name="WAS_ACCESS_KEY_ID" class="form-control" placeholder="Wasabi Key">
                               <p class="help-block margin-bottom-zero"><strong>Important:</strong> Wasabi in trial mode does not allow public files, you must send an email to <strong>support@wasabi.com</strong> to enable public files, or avoid trial mode.</p>
                             </div>
                           </div>
                         </div><!-- /.box-body -->

                         <!-- Start Box Body -->
                          <div class="box-body">
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Wasabi Secret</label>
                              <div class="col-sm-10">
                                <input type="text" value="{{ env('WAS_SECRET_ACCESS_KEY') }}" name="WAS_SECRET_ACCESS_KEY" class="form-control" placeholder="Wasabi Secret">
                              </div>
                            </div>
                          </div><!-- /.box-body -->

                          <!-- Start Box Body -->
                           <div class="box-body">
                             <div class="form-group">
                               <label class="col-sm-2 control-label">Wasabi Region</label>
                               <div class="col-sm-10">
                                 <input type="text" value="{{ env('WAS_DEFAULT_REGION') }}" name="WAS_DEFAULT_REGION" class="form-control" placeholder="Wasabi Region">
                               </div>
                             </div>
                           </div><!-- /.box-body -->

                           <!-- Start Box Body -->
                            <div class="box-body">
                              <div class="form-group">
                                <label class="col-sm-2 control-label">Wasabi Bucket</label>
                                <div class="col-sm-10">
                                  <input type="text" value="{{ env('WAS_BUCKET') }}" name="WAS_BUCKET" class="form-control" placeholder="Wasabi Bucket">
                                </div>
                              </div>
                            </div><!-- /.box-body -->

                  <hr />

                  <!-- Start Box Body -->
                   <div class="box-body">
                     <div class="form-group">
                       <label class="col-sm-2 control-label">Backblaze Account ID</label>
                       <div class="col-sm-10">
                         <input type="text" value="{{ env('BACKBLAZE_ACCOUNT_ID') }}" name="BACKBLAZE_ACCOUNT_ID" class="form-control" placeholder="Backblaze Account ID">
                       </div>
                     </div>
                   </div><!-- /.box-body -->

                   <!-- Start Box Body -->
                    <div class="box-body">
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Backblaze Master Application Key</label>
                        <div class="col-sm-10">
                          <input type="text" value="{{ env('BACKBLAZE_APP_KEY') }}" name="BACKBLAZE_APP_KEY" class="form-control" placeholder="Backblaze Master Application Key">
                        </div>
                      </div>
                    </div><!-- /.box-body -->

                    <!-- Start Box Body -->
                     <div class="box-body">
                       <div class="form-group">
                         <label class="col-sm-2 control-label">Backblaze Bucket Name</label>
                         <div class="col-sm-10">
                           <input type="text" value="{{ env('BACKBLAZE_BUCKET') }}" name="BACKBLAZE_BUCKET" class="form-control" placeholder="Backblaze Bucket Name">
                         </div>
                       </div>
                     </div><!-- /.box-body -->

                     <!-- Start Box Body -->
                      <div class="box-body">
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Backblaze Bucket ID</label>
                          <div class="col-sm-10">
                            <input type="text" value="{{ env('BACKBLAZE_BUCKET_ID') }}" name="BACKBLAZE_BUCKET_ID" class="form-control" placeholder="Backblaze Bucket ID">
                          </div>
                        </div>
                      </div><!-- /.box-body -->

                     <!-- Start Box Body -->
                      <div class="box-body">
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Backblaze Bucket Endpoint</label>
                          <div class="col-sm-10">
                            <input type="text" value="{{ env('BACKBLAZE_BUCKET_REGION') }}" name="BACKBLAZE_BUCKET_REGION" class="form-control" placeholder="s3.us-west-000.backblazeb2.com">
                          </div>
                        </div>
                      </div><!-- /.box-body -->

                      <hr/>

                        <!-- Start Box Body -->
                         <div class="box-body">
                           <div class="form-group">
                             <label class="col-sm-2 control-label">Vultr Key</label>
                             <div class="col-sm-10">
                               <input type="text" value="{{ env('VULTR_ACCESS_KEY') }}" name="VULTR_ACCESS_KEY" class="form-control" placeholder="Vultr Key">
                             </div>
                           </div>
                         </div><!-- /.box-body -->

                         <!-- Start Box Body -->
                          <div class="box-body">
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Vultr Secret</label>
                              <div class="col-sm-10">
                                <input type="text" value="{{ env('VULTR_SECRET_KEY') }}" name="VULTR_SECRET_KEY" class="form-control" placeholder="Vultr Secret">
                              </div>
                            </div>
                          </div><!-- /.box-body -->

                          <!-- Start Box Body -->
                           <div class="box-body">
                             <div class="form-group">
                               <label class="col-sm-2 control-label">Vultr Region</label>
                               <div class="col-sm-10">
                                 <input type="text" value="{{ env('VULTR_REGION') }}" name="VULTR_REGION" class="form-control" placeholder="Vultr Region">
                               </div>
                             </div>
                           </div><!-- /.box-body -->

                           <!-- Start Box Body -->
                            <div class="box-body">
                              <div class="form-group">
                                <label class="col-sm-2 control-label">Vultr Bucket</label>
                                <div class="col-sm-10">
                                  <input type="text" value="{{ env('VULTR_BUCKET') }}" name="VULTR_BUCKET" class="form-control" placeholder="Vultr Bucket">
                                </div>
                              </div>
                            </div><!-- /.box-body -->


                  <div class="box-footer">
                    <button type="submit" class="btn btn-success">{{ trans('admin.save') }}</button>
                  </div><!-- /.box-footer -->
                </form>
              </div>
        		</div><!-- /.row -->
        	</div><!-- /.content -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
@endsection
