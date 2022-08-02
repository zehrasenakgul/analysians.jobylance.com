@extends('layouts.app')

@section('title') {{trans('admin.dashboard')}} -@endsection
 <link rel="stylesheet" href="{{ asset('public/talha/assets/css/MyFonts.css')}}">
    <link rel="stylesheet" href="{{ asset('public/talha/assets/css/Mainpage.css')}}">
    <link rel="stylesheet" href="{{ asset('public/talha/assets/css/LoggedInLayout.css')}}">
    
    
@section('content')





<section class="section section-sm">
     <div class="SideNavbar">
            <div class="CurrentSession_Account">
               <img class="rounded-circle mr-2" src="{{Helper::getFile(config('path.avatar').auth()->user()->avatar)}}" width="60" height="60">
                <div class="CurrentSession_Account_Textbox">
                    <h5>{{auth()->user()->name}}</h5>
                    <a href="{{url(auth()->user()->username)}}"><span class="CurrentSession_ProfiliGoruntule">Profili Görüntüle</span></a>
                </div>
            </div>
            <div class="SideNavbar-Links">
                <a href="/" class="SideNavbar-Link">
                    <div class="SideNavbar-Link scrollhere">
                        <img src="{{ asset('public/talha/assets/media/SideNavbar/Homepage.png') }}" alt="" class="SideNavbar-Link_Icon">
                        <span class="SideNavbar-Link_LinkName"">Anasayfa</span>
                    </div>
                </a>
                <a href="/gruplar" class="SideNavbar-Link">
                    <div class="SideNavbar-Link">
                        <img src="{{ asset('public/talha/assets/media/SideNavbar/Groups.png') }}" alt="" class="SideNavbar-Link_Icon">
                        <span class="SideNavbar-Link_LinkName">Gruplar</span>
                    </div>
                </a>
                <a href="/creators" class="SideNavbar-Link">
                    <div class="SideNavbar-Link">
                        <img src="{{ asset('public/talha/assets/media/SideNavbar/Analysianlar.png') }}" alt="" class="SideNavbar-Link_Icon">
                        <span class="SideNavbar-Link_LinkName">Analysian'lar</span>
                    </div>
                </a>
                  @if (auth()->user()->verified_id == 'yes')
                <a href="/dashboard" class="SideNavbar-Link">
                    <div class="SideNavbar-Link">
                        <img src="{{ asset('public/talha/assets/media/SideNavbar/Dashboard.png') }}" alt="" class="SideNavbar-Link_Icon">
                        <span class="SideNavbar-Link_LinkName"style="color: #9531C0;">Dashboard</span>
                    </div>
                </a>
                @endif
                <a href="./Egitimler.html" class="SideNavbar-Link">
                    <div class="SideNavbar-Link">
                        <img src="{{ asset('public/talha/assets/media/SideNavbar/Egitimler.png') }}" alt="" class="SideNavbar-Link_Icon">
                        <span class="SideNavbar-Link_LinkName">Egitimler</span>
                    </div>
                </a>
                <a href="./Destek.html" class="SideNavbar-Link">
                    <div class="SideNavbar-Link">
                        <img src="{{ asset('public/talha/assets/media/SideNavbar/Destek.png') }}" alt="" class="SideNavbar-Link_Icon">
                        <span class="SideNavbar-Link_LinkName">Destek</span>
                    </div>
                </a>
            </div>
        </div>
    <div class="container">
      <div class="row justify-content-center text-center mb-sm">
        <div class="col-lg-8 py-5">
          <h2 class="mb-0 font-montserrat"><i class="bi bi-speedometer2 mr-2"></i> {{trans('admin.dashboard')}}</h2>
          <p class="lead text-muted mt-0">{{trans('general.dashboard_desc')}}</p>
        </div>
      </div>
      <div class="row">

        <div class="col-lg-12 mb-5 mb-lg-0">

          <div class="content">
            <div class="row">
              <div class="col-lg-4 mb-2">
                <div class="card">
                  <div class="card-body">
                    <h4><i class="fas fa-hand-holding-usd mr-2 text-primary icon-dashboard"></i> {{ Helper::amountFormatDecimal($earningNetUser) }}</h4>
                    <small>{{ trans('admin.earnings_net') }}</small>
                  </div>
                </div><!-- card 1 -->
              </div><!-- col-lg-4 -->

              <div class="col-lg-4 mb-2">
                <div class="card">
                  <div class="card-body">
                    <h4><i class="fas fa-wallet mr-2 text-primary icon-dashboard"></i> {{ Helper::amountFormatDecimal(Auth::user()->balance) }}</h4>
                    <small>{{ trans('general.balance') }}
                      @if (Auth::user()->balance >= $settings->amount_min_withdrawal)
                      <a href="{{ url('settings/withdrawals')}}" class="link-border"> {{ trans('general.make_withdrawal') }}</a>
                    @endif
                    </small>
                  </div>
                </div><!-- card 1 -->
              </div><!-- col-lg-4 -->

              <div class="col-lg-4 mb-2">
                <div class="card">
                  <div class="card-body">
                    <h4><i class="fas fa-users mr-2 text-primary icon-dashboard"></i> <span title="{{$subscriptionsActive}}">{{ Helper::formatNumber($subscriptionsActive) }}</span></h4>
                    <small>{{ trans('general.subscriptions_active') }}</small>
                  </div>
                </div><!-- card 1 -->
              </div><!-- col-lg-4 -->

              <div class="col-lg-4 mb-2">
                <div class="card">
                  <div class="card-body">
                    <h6 class="{{$stat_revenue_today > 0 ? 'text-success' : 'text-danger' }}">
                      {{ Helper::amountFormatDecimal($stat_revenue_today) }}
                      <small class="float-right ml-2">
                        <i class="bi bi-question-circle text-muted" data-toggle="tooltip" data-placement="top" title="{{ trans('general.compared_yesterday') }}"></i>
                      </small>
                        {!! Helper::PercentageIncreaseDecrease($stat_revenue_today, $stat_revenue_yesterday) !!}
                    </h6>
                    <small>{{ trans('general.revenue_today') }}</small>
                  </div>
                </div><!-- card 1 -->
              </div><!-- col-lg-4 -->

              <div class="col-lg-4 mb-2">
                <div class="card">
                  <div class="card-body">
                    <h6 class="{{$stat_revenue_week > 0 ? 'text-success' : 'text-danger' }}">
                      {{ Helper::amountFormatDecimal($stat_revenue_week) }}
                      <small class="float-right ml-2">
                        <i class="bi bi-question-circle text-muted" data-toggle="tooltip" data-placement="top" title="{{ trans('general.compared_last_week') }}"></i>
                      </small>
                        {!! Helper::PercentageIncreaseDecrease($stat_revenue_week, $stat_revenue_last_week) !!}
                    </h6>
                    <small>{{ trans('general.revenue_week') }}</small>
                  </div>
                </div><!-- card 1 -->
              </div><!-- col-lg-4 -->

              <div class="col-lg-4 mb-2">
                <div class="card">
                  <div class="card-body">
                    <h6 class="{{$stat_revenue_month > 0 ? 'text-success' : 'text-danger' }}">
                      {{ Helper::amountFormatDecimal($stat_revenue_month) }}
                      <small class="float-right ml-2">
                        <i class="bi bi-question-circle text-muted" data-toggle="tooltip" data-placement="top" title="{{ trans('general.compared_last_month') }}"></i>
                      </small>
                        {!! Helper::PercentageIncreaseDecrease($stat_revenue_month, $stat_revenue_last_month) !!}
                    </h6>
                    <small>{{ trans('general.revenue_month') }}</small>
                  </div>
                </div><!-- card 1 -->
              </div><!-- col-lg-4 -->

              <div class="col-lg-12 mt-3 py-4">
                 <div class="card">
                   <div class="card-body">
                     <h4 class="mb-4">{{ trans('general.earnings_this_month') }} ({{ $month }})</h4>
                     <div style="height: 350px">
                      <canvas id="Chart"></canvas>
                    </div>
                   </div>
                 </div>
              </div>
            </div><!-- end row -->
          </div><!-- end content -->

        </div><!-- end col-md-6 -->

      </div>
    </div>
  </section>
@endsection

@section('javascript')
  <script src="{{ asset('public/js/Chart.min.js') }}"></script>
  

  <script type="text/javascript">

function decimalFormat(nStr)
{
  @if ($settings->decimal_format == 'dot')
	 $decimalDot = '.';
	 $decimalComma = ',';
	 @else
	 $decimalDot = ',';
	 $decimalComma = '.';
	 @endif

   @if ($settings->currency_position == 'left')
   currency_symbol_left = '{{$settings->currency_symbol}}';
   currency_symbol_right = '';
   @else
   currency_symbol_right = '{{$settings->currency_symbol}}';
   currency_symbol_left = '';
   @endif

    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? $decimalDot + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + $decimalComma + '$2');
    }
    return currency_symbol_left + x1 + x2 + currency_symbol_right;
  }

  function transparentize(color, opacity) {
			var alpha = opacity === undefined ? 0.5 : 1 - opacity;
			return Color(color).alpha(alpha).rgbString();
		}

  var init = document.getElementById("Chart").getContext('2d');

  const gradient = init.createLinearGradient(0, 0, 0, 300);
                    gradient.addColorStop(0, '{{$settings->color_default}}');
                    gradient.addColorStop(1, '{{$settings->color_default}}2b');

  const lineOptions = {
                        pointRadius: 4,
                        pointHoverRadius: 6,
                        hitRadius: 5,
                        pointHoverBorderWidth: 3
                    }

  var ChartArea = new Chart(init, {
      type: 'line',
      data: {
          labels: [{!!$label!!}],
          datasets: [{
              label: '{{trans('general.earnings')}}',
              backgroundColor: gradient,
              borderColor: '{{$settings->color_default}}',
              data: [{!!$data!!}],
              borderWidth: 2,
              fill: true,
              lineTension: 0.4,
              ...lineOptions
          }]
      },
      options: {
          scales: {
              yAxes: [{
                  ticks: {
                    min: 0, // it is for ignoring negative step.
                     display: true,
                      maxTicksLimit: 8,
                      padding: 10,
                      beginAtZero: true,
                      callback: function(value, index, values) {
                          return '@if($settings->currency_position == 'left'){{ $settings->currency_symbol }}@endif' + value + '@if($settings->currency_position == 'right'){{ $settings->currency_symbol }}@endif';
                      }
                  }
              }],
              xAxes: [{
                gridLines: {
                  display:false
                },
                display: true,
                ticks: {
                  maxTicksLimit: 15,
                  padding: 5,
                }
              }]
          },
          tooltips: {
            mode: 'index',
            intersect: false,
            reverse: true,
            backgroundColor: '#000',
            xPadding: 16,
            yPadding: 16,
            cornerRadius: 4,
            caretSize: 7,
              callbacks: {
                  label: function(t, d) {
                      var xLabel = d.datasets[t.datasetIndex].label;
                      var yLabel = t.yLabel == 0 ? decimalFormat(t.yLabel) : decimalFormat(t.yLabel.toFixed(2));
                      return xLabel + ': ' + yLabel;
                  }
              },
          },
          hover: {
            mode: 'index',
            intersect: false
          },
          legend: {
              display: false
          },
          responsive: true,
          maintainAspectRatio: false
      }
  });
  </script>
  @endsection
