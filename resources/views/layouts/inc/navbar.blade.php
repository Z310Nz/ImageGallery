<!-- Start navbar -->
<nav>
    <div class='heading'>
        <a href="{{ url('/home') }}" id="logo"><img src="{{ asset('assets/img/imga.png') }}" width="300px"></a>
    </div>
    <ul class='nav-link'>
        <li><a href="{{ url('/home') }}" class="active" id="pi">ภาพวาด</a></li>
        <li><a href="{{ url('/home') }}" id="pi">ภาพถ่าย</a></li>
        <li><a href="{{ url('/home') }}" id="pi">ไอค่อน</a></li>
        <li><a href="{{ url('/home') }}" id="pi">ภาพเสมือนจริง</a></li>
        <li><a href="{{ url('/home') }}" id="pi">คอลเลคชั่น</a></li>
    </ul>

    <div class="profile">
            <a href="#" id="prof"><img src="{{ asset('assets/img/icon/profile.png') }}" width="100px"></a>
    </div>

    <a class="addwork" href="{{ url('/upload') }}"><button id="addw">เพิ่มผลงาน</button></a>

    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            <button class="btn btn-outline-danger">{{ __('Logout') }}</button>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>



</nav>
<!-- End navbar -->