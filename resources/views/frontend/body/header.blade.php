  @php
      $route = Route::current()->getName();
  @endphp

  <header>
      <div id="sticky-header" class="menu__area transparent-header" style="background:rgb(45, 45, 45); color:white">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <div class="mobile__nav__toggler"><i class="fas fa-bars"></i></div>
                      <div class="menu__wrap">
                          <nav class="menu__nav">
                              <div class="logo">
                                  <h3><a href="/">ສສວ (ALACE)</a></h3>
                              </div>
                              <div class="navbar__wrap main__menu d-none d-xl-flex">
                                  <ul class="navigation">
                                      <li class="{{ $route == 'home' ? 'active' : '' }}">
                                          <a href="{{ route('home') }}">Home</a>
                                      </li>
                                      <li class="{{ $route == 'expo' ? 'active' : '' }}">
                                          <a href="{{ route('expo') }}">EXPO</a>
                                      </li>
                                      <li class="{{ $route == 'congress-forum' ? 'active' : '' }}">
                                          <a href="{{ route('congress-forum') }}">CONGRESS</a>
                                      </li>
                                      <li class="{{ $route == 'siminar-workshop' ? 'active' : '' }}">
                                          <a href="{{ route('siminar-workshop') }}">SEMINAR / WORKSHOP</a>
                                      </li>
                                      <li class="{{ $route == 'compitition' ? 'active' : '' }}">
                                          <a href="{{ route('compitition') }}">COMPETITION</a>
                                      </li>
                                      <li class="{{ $route == 'contact' ? 'active' : '' }}">
                                          <a href="{{ route('contact') }}">CONTACT</a>
                                      </li>
                                      {{-- <li
                                          class="{{ $route == 'expo-fact-sheet' || $route == 'them-design' || $route == 'sponsorship-package' || $route == 'zoning-design' ? 'active' : '' }} dropdown">
                                          <a href="javascript:;">ACHIEVE</a>
                                          <ul class="dropdown-menu">
                                              <li class="dropdown-item">
                                                  <a href="{{ route('expo-fact-sheet') }}">Expo Fact Sheet</a>
                                              </li>
                                              <li class="dropdown-item">
                                                  <a href="{{ route('them-design') }}">Theme Design</a>
                                              </li>
                                              <li class="dropdown-item">
                                                  <a href="{{ route('sponsorship-package') }}">Sponsorship Package</a>
                                              </li>
                                              <li class="dropdown-item">
                                                  <a href="{{ route('zoning-design') }}">Zoning Design</a>
                                              </li>
                                          </ul>
                                      </li> --}}
                                      <li class="{{ $route == 'sponsorship-package' ? 'active' : '' }}">
                                          <a href="{{ route('sponsorship-package') }}">Sponsorship</a>
                                      </li>
                                  </ul>
                              </div>
                              <div class="d-none d-xl-flex social-media" style="width: 20%">
                                  <ul>
                                      <li><a href="https://www.facebook.com/ALACELAOS"><span
                                                  class="fab fa-facebook-square"></span></a></li>&nbsp;
                                      <li><a href="#"><span class="fab fa-twitter"></span></a></li>&nbsp;
                                      <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>&nbsp;
                                      <li><a href="#"><span class="fab fa-instagram"></span></a></li>&nbsp;
                                      <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                  </ul>
                              </div>
                          </nav>
                      </div>
                      <!-- Mobile Menu  -->
                      <div class="mobile__menu">
                          <nav class="menu__box">
                              <div class="close__btn"><i class="fal fa-times"></i></div>
                              <div class="nav-logo">
                                  <h3 style="color: black">ASL</h3>
                              </div>
                              <div class="menu__outer">
                              </div>
                              <div class="social-links">
                                  <ul class="clearfix">
                                      <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                      <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                      <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                      <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                      <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                  </ul>
                              </div>
                          </nav>
                      </div>
                      <div class="menu__backdrop"></div>
                  </div>
              </div>
          </div>
      </div>
  </header>
