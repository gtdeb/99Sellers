<div class="sidebar" data-color="orange" data-background-color="white" data-image="">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="{{ route('home') }}" class="logo-mini">
        <img src="{{ asset('material') }}/img/logo.png" width="80%" height="60%" >
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'property_config' || $activePage == 'media_config' || $activePage == 'booster_config') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#ConfigurationPanel" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('material') }}/icons/configuration.png"></i>
            <p>{{ __('Configuration Panel') }}
              <b class="caret"></b>
            </p>
        </a>
        <div class="collapse show" id="ConfigurationPanel">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'property_config' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('property_config') }}">
                 <span class="sidebar-mini"> <i><img style="width:25px" src="{{ asset('material') }}/icons/property_config.png"></i> </span>
                 <span class="sidebar-normal">{{ __('Property') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'media_config' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('media_config') }}">
                 <span class="sidebar-mini"> <i><img style="width:25px" src="{{ asset('material') }}/icons/media_config.png"></i> </span>
                 <span class="sidebar-normal"> {{ __('Media') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'booster_config' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('booster_config') }}">
                 <span class="sidebar-mini"> <i><img style="width:25px" src="{{ asset('material') }}/icons/booster_config.png"></i> </span>
                 <span class="sidebar-normal"> {{ __('Booster Content') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'survey_config' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('survey_config') }}">
                  <span class="sidebar-mini"> <i><img style="width:25px" src="{{ asset('material') }}/icons/survey_config.png"></i> </span>
                  <span class="sidebar-normal"> {{ __('Survey Content') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user_config' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user_config') }}">
                 <span class="sidebar-mini"> <i><img style="width:25px" src="{{ asset('material') }}/icons/user_config.png"></i> </span>
                 <span class="sidebar-normal"> {{ __('User') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'notification_settings' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('notification_settings') }}">
                  <span class="sidebar-mini"> <i><img style="width:25px" src="{{ asset('material') }}/icons/notification_settings.png"></i> </span>
                  <span class="sidebar-normal"> {{ __('Notification Settings') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'api_gateway_settings' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('api_gateway_settings') }}">
                  <span class="sidebar-mini"> <i><img style="width:25px" src="{{ asset('material') }}/icons/api_gateway_settings.png"></i> </span>
                  <span class="sidebar-normal"> {{ __('Api Gateway Settings') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <!--<li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('Laravel Examples') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('table') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Table List') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('typography') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Typography') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('icons') }}">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Icons') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('map') }}">
          <i class="material-icons">location_ons</i>
            <p>{{ __('Maps') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('notifications') }}">
          <i class="material-icons">notifications</i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('language') }}">
          <i class="material-icons">language</i>
          <p>{{ __('RTL Support') }}</p>
        </a>
      </li>
      <li class="nav-item active-pro{{ $activePage == 'upgrade' ? ' active' : '' }}">
        <a class="nav-link text-white bg-danger" href="{{ route('upgrade') }}">
          <i class="material-icons text-white">unarchive</i>
          <p>{{ __('Upgrade to PRO') }}</p>
        </a>
      </li>-->
    </ul>
  </div>
</div>
