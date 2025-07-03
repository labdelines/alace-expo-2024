  <header id="page-topbar">
      <div class="navbar-header">
          <div class="d-flex">
              <div class="navbar-brand-box" style="display:flex; align-items:center; justify-content:center">
                  <h5 style="color:white">ASAEXPO-LAOS</h5>
              </div>
              <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                  <i class="ri-menu-2-line align-middle"></i>
              </button>
              <form class="app-search d-none d-lg-block">
                  <div class="position-relative">
                      <input type="text" class="form-control" placeholder="Search...">
                      <span class="ri-search-line"></span>
                  </div>
              </form>
          </div>

          {{-- <div class="d-flex">
              <div class="dropdown d-none d-lg-inline-block ms-1">
                  <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                      <i class="ri-fullscreen-line"></i>
                  </button>
              </div>
              @php
                  $id = Auth::user()->id;
                  $adminData = App\Models\User::find($id);
              @endphp
              <div class="dropdown d-inline-block user-dropdown">
                  <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                      data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img class="rounded-circle header-profile-user"
                          src="{{ !empty($adminData->profile_image) ? url('upload/admin_images/' . $adminData->profile_image) : url('upload/no_image.jpg') }}"
                          alt="Header Avatar">
                      <span class="d-none d-xl-inline-block ms-1">{{ $adminData->name }}</span>
                      <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end">
                      <a class="dropdown-item" href="{{ route('admin.profile') }}"><i
                              class="ri-user-line align-middle me-1"></i> Profile</a>
                      <a class="dropdown-item" href="{{ route('change.password') }}"><i
                              class="ri-wallet-2-line align-middle me-1"></i> Change Password</a>
                      <div class="dropdown-divider"></div>

                      <a class="dropdown-item text-danger" href="{{ route('admin.logout') }}"><i
                              class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                  </div>
              </div>
          </div> --}}
          <div style="display:flex; align-items:center; justify-content:center;">
              <div class="mb-4">
                  <div class="dropdown">
                      <a class="btn" href="#" id="dropdownMenuLink" data-bs-toggle="dropdown"
                          aria-expanded="false" style="text-decoration: none; color:white; margin-top:1rem">
                          @php
                              $lang = App::getLocale();
                          @endphp

                          <span class="{{ $lang == 'en' ? 'fi fi-us' : 'fi fi-la' }}"></span>&nbsp;
                          {{ $lang == 'en' ? 'English' : 'ລາວ' }}
                      </a>

                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          @foreach (config('app.available_locales') as $locale)
                              <a class="dropdown-item" style="color:black"
                                  href="{{ route(Route::currentRouteName(), array_merge(Route::current()->parameters(), ['locale' => $locale])) }}">
                                  @if ($lang == 'en')
                                      @if ($locale == 'lo')
                                          <span class="fi fi-la"></span>&nbsp; @lang('lang._laos')
                                      @endif
                                  @endif

                                  @if ($lang == 'lo')
                                      @if ($locale == 'en')
                                          <span class="fi fi-us"></span>&nbsp; @lang('lang._english')
                                      @endif
                                  @endif
                              </a>
                          @endforeach
                      </ul>
                  </div>
              </div>

              <div class="dropdown ms-1">
                  <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                      <i class="ri-fullscreen-line"></i>
                  </button>
              </div>

              @php
                  $id = Auth::user()->id;
                  $adminData = App\Models\User::find($id);
              @endphp

              <div class="dropdown d-inline-block user-dropdown">
                  <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                      data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img class="rounded-circle header-profile-user"
                          src="{{ !empty($adminData->profile_image) ? url('upload/admin_images/' . $adminData->profile_image) : url('upload/no_image.jpg') }}"
                          alt="Header Avatar">
                      <span class="d-none d-xl-inline-block ms-1">{{ $adminData->name }}</span>
                      <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end">
                      <a class="dropdown-item" href="{{ route('admin.profile') }}"><i
                              class="ri-user-line align-middle me-1"></i> Profile</a>
                      <a class="dropdown-item" href="{{ route('change.password') }}"><i
                              class="ri-wallet-2-line align-middle me-1"></i> Change Password</a>
                      <div class="dropdown-divider"></div>

                      <a class="dropdown-item text-danger" href="{{ route('admin.logout') }}"><i
                              class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                  </div>
              </div>
          </div>
      </div>
  </header>
