@extends('admin.layout')

@section('css')
<link href="{{ asset('public/plugins/iCheck/all.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('public/plugins/tagsinput/jquery.tagsinput.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('public/plugins/select2/select2.min.css') }}?v={{$settings->version}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h4>
            {{ trans('admin.admin') }}
            	<i class="fa fa-angle-right margin-separator"></i>
            		{{ trans('admin.general_settings') }}
          </h4>
        </section>

        <!-- Main content -->
        <section class="content">

        	 @if(Session::has('success_message'))
		    <div class="alert alert-success">
		    	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">×</span>
								</button>
		       <i class="fa fa-check margin-separator"></i> {{ Session::get('success_message') }}
		    </div>
		@endif

        	<div class="content">

        		<div class="row">

        	<div class="box">
                <div class="box-header">
                  <h3 class="box-title">{{ trans('admin.general_settings') }}</h3>
                </div><!-- /.box-header -->

                <!-- form start -->
                <form class="form-horizontal" method="POST" action="{{ url('panel/admin/settings') }}" enctype="multipart/form-data">

                	<input type="hidden" name="_token" value="{{ csrf_token() }}">

					@include('errors.errors-forms')

                 <!-- Start Box Body -->
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">{{ trans('admin.name_site') }}</label>
                      <div class="col-sm-10">
                        <input type="text" value="{{ $settings->title }}" name="title" class="form-control" placeholder="{{ trans('admin.title') }}">
                      </div>
                    </div>
                  </div><!-- /.box-body -->

                  <!-- Start Box Body -->
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">{{ trans('admin.email_admin') }}</label>
                      <div class="col-sm-10">
                        <input type="text" value="{{ $settings->email_admin }}" name="email_admin" class="form-control" placeholder="{{ trans('admin.email_admin') }}">
                      </div>
                    </div>
                  </div><!-- /.box-body -->

                  <!-- Start Box Body -->
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">{{ trans('admin.link_terms') }}</label>
                      <div class="col-sm-10">
                        <input type="text" value="{{ $settings->link_terms }}" name="link_terms" class="form-control" placeholder="https://yousite.com/p/terms">
                      </div>
                    </div>
                  </div><!-- /.box-body -->

                  <!-- Start Box Body -->
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">{{ trans('admin.link_privacy') }}</label>
                      <div class="col-sm-10">
                        <input type="text" value="{{ $settings->link_privacy }}" name="link_privacy" class="form-control" placeholder="https://yousite.com/p/privacy">
                      </div>
                    </div>
                  </div><!-- /.box-body -->

                  <!-- Start Box Body -->
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">{{ trans('admin.link_cookies') }}</label>
                      <div class="col-sm-10">
                        <input type="text" value="{{ $settings->link_cookies }}" name="link_cookies" class="form-control" placeholder="https://yousite.com/p/cookies">
                      </div>
                    </div>
                  </div><!-- /.box-body -->

                  <!-- Start Box Body -->
                 <div class="box-body">
                   <div class="form-group">
                     <label class="col-sm-2 control-label">{{ trans('admin.date_format') }}</label>
                     <div class="col-sm-10">
                       <select name="date_format" class="form-control">
                         <option @if( $settings->date_format == 'M d, Y' ) selected="selected" @endif value="M d, Y"><?php echo date('M d, Y'); ?></option>
                           <option @if( $settings->date_format == 'd M, Y' ) selected="selected" @endif value="d M, Y"><?php echo date('d M, Y'); ?></option>
                         <option @if( $settings->date_format == 'Y-m-d' ) selected="selected" @endif value="Y-m-d"><?php echo date('Y-m-d'); ?></option>
                           <option @if( $settings->date_format == 'm/d/Y' ) selected="selected" @endif  value="m/d/Y"><?php echo date('m/d/Y'); ?></option>
                             <option @if( $settings->date_format == 'd/m/Y' ) selected="selected" @endif  value="d/m/Y"><?php echo date('d/m/Y'); ?></option>
                         </select>
                     </div>
                   </div>
                 </div><!-- /.box-body -->

                 <!-- Start Box Body -->
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">{{trans('general.genders')}}</label>
                      <div class="col-sm-10">
                        <select name="genders[]" multiple="multiple" class="form-control custom-select select2Multiple">
                          <option @if (in_array('male', $genders)) selected="selected" @endif value="male">{{ __('general.male') }}</option>
                          <option @if (in_array('female', $genders)) selected="selected" @endif value="female">{{ __('general.female') }}</option>
                          <option @if (in_array('gay', $genders)) selected="selected" @endif value="gay">{{ __('general.gay') }}</option>
                          <option @if (in_array('lesbian', $genders)) selected="selected" @endif value="lesbian">{{ __('general.lesbian') }}</option>
                          <option @if (in_array('bisexual', $genders)) selected="selected" @endif value="bisexual">{{ __('general.bisexual') }}</option>
                          <option @if (in_array('transgender', $genders)) selected="selected" @endif value="transgender">{{ __('general.transgender') }}</option>
                          <option @if (in_array('metrosexual', $genders)) selected="selected" @endif value="metrosexual">{{ __('general.metrosexual') }}</option>
                          <option @if (in_array('no_binary', $genders)) selected="selected" @endif value="no_binary">{{ __('general.no_binary') }}</option>
                          <option @if (in_array('couple', $genders)) selected="selected" @endif value="couple">{{ __('general.couple') }}</option>
                        </select>
                      </div>
                    </div>
                  </div><!-- /.box-body -->

                  <!-- Start Box Body -->
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">{{ trans('general.default_language') }}</label>
                      <div class="col-sm-10">
                      	<select name="default_language" class="form-control">
                          @foreach (Languages::orderBy('name')->get() as $language)
                            <option @if ($language->abbreviation == env('DEFAULT_LOCALE')) selected="selected" @endif value="{{$language->abbreviation}}">{{ $language->name }}</option>
                          @endforeach
                          </select>
                          <p class="help-block">{{ trans('general.default_language_info') }}</p>
                      </div>
                    </div>
                  </div><!-- /.box-body -->

                 <!-- Start Box Body -->
                 <div class="box-body">
                   <div class="form-group">
                     <label class="col-sm-2 control-label">{{ trans('general.show_errors') }}</label>
                     <div class="col-sm-10">
                       <div class="radio">
                       <label class="padding-zero">
                         <input type="radio" value="true" name="app_debug" @if (env('APP_DEBUG') == true) checked="checked" @endif checked>
                         On <em>({{ trans('general.info_show_errors') }})</em>
                       </label>
                     </div>
                     <div class="radio">
                       <label class="padding-zero">
                         <input type="radio" value="false" name="app_debug" @if (env('APP_DEBUG') == false) checked="checked" @endif>
                         Off
                       </label>
                     </div>
                     </div>
                   </div>
                 </div><!-- /.box-body -->

                 <!-- Start Box Body -->
                 <div class="box-body">
                   <div class="form-group">
                     <label class="col-sm-2 control-label">{{ trans('admin.account_verification') }}</label>
                     <div class="col-sm-10">

                       <div class="radio">
                       <label class="padding-zero">
                         <input type="radio" name="account_verification" @if( $settings->account_verification == '1' ) checked="checked" @endif value="1" checked>
                         {{ trans('general.yes') }}
                       </label>
                     </div>

                     <div class="radio">
                       <label class="padding-zero">
                         <input type="radio" name="account_verification" @if( $settings->account_verification == '0' ) checked="checked" @endif value="0">
                         {{ trans('general.no') }}
                       </label>
                     </div>
                     </div>
                   </div>
                 </div><!-- /.box-body -->

                  <!-- Start Box Body -->
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Captcha</label>
                      <div class="col-sm-10">

                      	<div class="radio">
                        <label class="padding-zero">
                          <input type="radio" name="captcha" @if( $settings->captcha == 'on' ) checked="checked" @endif value="on" checked>
                          {{ trans('general.yes') }}
                        </label>
                      </div>

                      <div class="radio">
                        <label class="padding-zero">
                          <input type="radio" name="captcha" @if( $settings->captcha == 'off' ) checked="checked" @endif value="off">
                          {{ trans('general.no') }}
                        </label>
                      </div>
                      </div>
                    </div>
                  </div><!-- /.box-body -->

                  <!-- Start Box Body -->
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">{{ trans('general.captcha_contact') }}</label>
                      <div class="col-sm-10">

                      	<div class="radio">
                        <label class="padding-zero">
                          <input type="radio" name="captcha_contact" @if( $settings->captcha_contact == 'on' ) checked="checked" @endif value="on" checked>
                          {{ trans('general.yes') }}
                        </label>
                      </div>

                      <div class="radio">
                        <label class="padding-zero">
                          <input type="radio" name="captcha_contact" @if( $settings->captcha_contact == 'off' ) checked="checked" @endif value="off">
                          {{ trans('general.no') }}
                        </label>
                      </div>
                      </div>
                    </div>
                  </div><!-- /.box-body -->

                  <!-- Start Box Body -->
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">{{ trans('general.disable_tips') }}</label>
                      <div class="col-sm-10">

                      	<div class="radio">
                        <label class="padding-zero">
                          <input type="radio" name="disable_tips" @if( $settings->disable_tips == 'on' ) checked="checked" @endif value="on" checked>
                          {{ trans('general.yes') }}
                        </label>
                      </div>

                      <div class="radio">
                        <label class="padding-zero">
                          <input type="radio" name="disable_tips" @if( $settings->disable_tips == 'off' ) checked="checked" @endif value="off">
                          {{ trans('general.no') }}
                        </label>
                      </div>
                      </div>
                    </div>
                  </div><!-- /.box-body -->

                  <!-- Start Box Body -->
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">{{ trans('admin.new_registrations') }}</label>
                      <div class="col-sm-10">

                      	<div class="radio">
                        <label class="padding-zero">
                          <input type="radio" name="registration_active" @if( $settings->registration_active == '1' ) checked="checked" @endif value="1" checked>
                          {{ trans('general.yes') }}
                        </label>
                      </div>

                      <div class="radio">
                        <label class="padding-zero">
                          <input type="radio" name="registration_active" @if( $settings->registration_active == '0' ) checked="checked" @endif value="0">
                          {{ trans('general.no') }}
                        </label>
                      </div>
                      </div>
                    </div>
                  </div><!-- /.box-body -->

                  <!-- Start Box Body -->
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">{{ trans('admin.email_verification') }}</label>
                      <div class="col-sm-10">

                      	<div class="radio">
                        <label class="padding-zero">
                          <input type="radio" name="email_verification" @if( $settings->email_verification == '1' ) checked="checked" @endif value="1" checked>
                          {{ trans('general.yes') }}
                        </label>
                      </div>

                      <div class="radio">
                        <label class="padding-zero">
                          <input type="radio" name="email_verification" @if( $settings->email_verification == '0' ) checked="checked" @endif value="0">
                          {{ trans('general.no') }}
                        </label>
                      </div>
                      </div>
                    </div>
                  </div><!-- /.box-body -->

                  <!-- Start Box Body -->
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">{{ trans('general.show_counter') }}</label>
                      <div class="col-sm-10">

                        <div class="radio">
                          <label class="padding-zero">
                            <input type="radio" name="show_counter" @if ($settings->show_counter == 'on') checked="checked" @endif value="on">
                            {{ trans('general.yes') }}
                          </label>
                        </div>

                      	<div class="radio">
                        <label class="padding-zero">
                          <input type="radio" name="show_counter" @if ($settings->show_counter == 'off') checked="checked" @endif value="off">
                          {{ trans('general.no') }}
                        </label>
                      </div>
                      </div>
                    </div>
                  </div><!-- /.box-body -->

                  <!-- Start Box Body -->
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">{{ trans('general.show_widget_creators') }}</label>
                      <div class="col-sm-10">

                        <div class="radio">
                          <label class="padding-zero">
                            <input type="radio" name="widget_creators_featured" @if ($settings->widget_creators_featured == 'on') checked="checked" @endif value="on">
                            {{ trans('general.yes') }}
                          </label>
                        </div>

                      	<div class="radio">
                        <label class="padding-zero">
                          <input type="radio" name="widget_creators_featured" @if ($settings->widget_creators_featured == 'off') checked="checked" @endif value="off">
                          {{ trans('general.no') }}
                        </label>
                      </div>
                      </div>
                    </div>
                  </div><!-- /.box-body -->

                  <!-- Start Box Body -->
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">{{ trans('general.show_earnings_simulator') }}</label>
                      <div class="col-sm-10">

                      	<div class="radio">
                        <label class="padding-zero">
                          <input type="radio" name="earnings_simulator" @if( $settings->earnings_simulator == 'on' ) checked="checked" @endif value="on" checked>
                          {{ trans('general.yes') }}
                        </label>
                      </div>

                      <div class="radio">
                        <label class="padding-zero">
                          <input type="radio" name="earnings_simulator" @if( $settings->earnings_simulator == 'off' ) checked="checked" @endif value="off">
                          {{ trans('general.no') }}
                        </label>
                      </div>
                      </div>
                    </div>
                  </div><!-- /.box-body -->

                  <!-- Start Box Body -->
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">{{ trans('general.receive_verification_requests') }}</label>
                      <div class="col-sm-10">

                      	<div class="radio">
                        <label class="padding-zero">
                          <input type="radio" name="requests_verify_account" @if( $settings->requests_verify_account == 'on' ) checked="checked" @endif value="on" checked>
                          {{ trans('general.yes') }}
                        </label>
                      </div>

                      <div class="radio">
                        <label class="padding-zero">
                          <input type="radio" name="requests_verify_account" @if( $settings->requests_verify_account == 'off' ) checked="checked" @endif value="off">
                          {{ trans('general.no') }}
                        </label>
                      </div>
                      </div>
                    </div>
                  </div><!-- /.box-body -->

                  <!-- Start Box Body -->
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">{{ trans('general.hide_admin_profile') }}</label>
                      <div class="col-sm-10">

                      	<div class="radio">
                        <label class="padding-zero">
                          <input type="radio" name="hide_admin_profile" @if( $settings->hide_admin_profile == 'on' ) checked="checked" @endif value="on" checked>
                          {{ trans('general.yes') }}
                        </label>
                      </div>

                      <div class="radio">
                        <label class="padding-zero">
                          <input type="radio" name="hide_admin_profile" @if( $settings->hide_admin_profile == 'off' ) checked="checked" @endif value="off">
                          {{ trans('general.no') }}
                        </label>
                      </div>
                      </div>
                    </div>
                  </div><!-- /.box-body -->

                  <!-- Start Box Body -->
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">{{ trans('general.watermark_on_images') }}</label>
                      <div class="col-sm-10">

                      	<div class="radio">
                        <label class="padding-zero">
                          <input type="radio" name="watermark" @if( $settings->watermark == 'on' ) checked="checked" @endif value="on" checked>
                          {{ trans('general.yes') }}
                        </label>
                      </div>

                      <div class="radio">
                        <label class="padding-zero">
                          <input type="radio" name="watermark" @if( $settings->watermark == 'off' ) checked="checked" @endif value="off">
                          {{ trans('general.no') }}
                        </label>
                      </div>
                      </div>
                    </div>
                  </div><!-- /.box-body -->

                  <!-- Start Box Body -->
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">{{ trans('general.watermark_on_videos') }}</label>
                      <div class="col-sm-10">

                      	<div class="radio">
                        <label class="padding-zero">
                          <input type="radio" name="watermark_on_videos" @if( $settings->watermark_on_videos == 'on' ) checked="checked" @endif value="on" checked>
                          {{ trans('general.yes') }}
                        </label>
                      </div>

                      <div class="radio">
                        <label class="padding-zero">
                          <input type="radio" name="watermark_on_videos" @if( $settings->watermark_on_videos == 'off' ) checked="checked" @endif value="off">
                          {{ trans('general.no') }}
                        </label>
                      </div>
                      </div>
                    </div>
                  </div><!-- /.box-body -->

                  <!-- Start Box Body -->
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">{{ trans('general.show_alert_adult') }}</label>
                      <div class="col-sm-10">

                      	<div class="radio">
                        <label class="padding-zero">
                          <input type="radio" name="alert_adult" @if( $settings->alert_adult == 'on' ) checked="checked" @endif value="on" checked>
                          {{ trans('general.yes') }}
                        </label>
                      </div>

                      <div class="radio">
                        <label class="padding-zero">
                          <input type="radio" name="alert_adult" @if( $settings->alert_adult == 'off' ) checked="checked" @endif value="off">
                          {{ trans('general.no') }}
                        </label>
                      </div>
                      </div>
                    </div>
                  </div><!-- /.box-body -->

                  <!-- Start Box Body -->
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">{{ trans('general.who_can_see_content') }}</label>
                      <div class="col-sm-10">

                      	<div class="radio">
                        <label class="padding-zero">
                          <input type="radio" name="who_can_see_content" @if( $settings->who_can_see_content == 'all' ) checked="checked" @endif value="all" checked>
                          {{ trans('general.all') }}
                        </label>
                      </div>

                      <div class="radio">
                        <label class="padding-zero">
                          <input type="radio" name="who_can_see_content" @if( $settings->who_can_see_content == 'users' ) checked="checked" @endif value="users">
                          {{ trans('admin.only_users') }}
                        </label>
                      </div>
                      </div>
                    </div>
                  </div><!-- /.box-body -->

                  <!-- Start Box Body -->
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">{{ trans('general.users_can_edit_post') }}</label>
                      <div class="col-sm-10">

                      	<div class="radio">
                        <label class="padding-zero">
                          <input type="radio" name="users_can_edit_post" @if( $settings->users_can_edit_post == 'on' ) checked="checked" @endif value="on" checked>
                          {{ trans('general.yes') }}
                        </label>
                      </div>

                      <div class="radio">
                        <label class="padding-zero">
                          <input type="radio" name="users_can_edit_post" @if( $settings->users_can_edit_post == 'off' ) checked="checked" @endif value="off">
                          {{ trans('general.no') }}
                        </label>
                      </div>
                      </div>
                    </div>
                  </div><!-- /.box-body -->

                  <!-- Start Box Body -->
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">{{ trans('general.disable_banner_cookies') }}</label>
                      <div class="col-sm-10">

                      	<div class="radio">
                        <label class="padding-zero">
                          <input type="radio" name="disable_banner_cookies" @if( $settings->disable_banner_cookies == 'on' ) checked="checked" @endif value="on" checked>
                          {{ trans('general.yes') }}
                        </label>
                      </div>

                      <div class="radio">
                        <label class="padding-zero">
                          <input type="radio" name="disable_banner_cookies" @if( $settings->disable_banner_cookies == 'off' ) checked="checked" @endif value="off">
                          {{ trans('general.no') }}
                        </label>
                      </div>
                      </div>
                    </div>
                  </div><!-- /.box-body -->

                  <!-- Start Box Body -->
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">{{ trans('general.referral_system') }}</label>
                      <div class="col-sm-10">

                      	<div class="radio">
                        <label class="padding-zero">
                          <input type="radio" name="referral_system" @if( $settings->referral_system == 'on' ) checked="checked" @endif value="on" checked>
                          {{ trans('general.enabled') }}
                        </label>
                      </div>

                      <div class="radio">
                        <label class="padding-zero">
                          <input type="radio" name="referral_system" @if( $settings->referral_system == 'off' ) checked="checked" @endif value="off">
                          {{ trans('general.disabled') }}
                        </label>
                      </div>
                      </div>
                    </div>
                  </div><!-- /.box-body -->

                  <!-- Start Box Body -->
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">{{ trans('general.video_encoding') }}</label>
                      <div class="col-sm-10">

                      	<div class="radio">
                        <label class="padding-zero">
                          <input type="radio" name="video_encoding" @if ($settings->video_encoding == 'on') checked="checked" @endif value="on" checked>
                          {{ trans('general.enabled') }} <em>({{ trans('general.video_encoding_alert') }})</em>
                        </label>
                      </div>

                      <div class="radio">
                        <label class="padding-zero">
                          <input type="radio" name="video_encoding" @if ($settings->video_encoding == 'off') checked="checked" @endif value="off">
                          {{ trans('general.disabled') }}
                        </label>
                      </div>
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
