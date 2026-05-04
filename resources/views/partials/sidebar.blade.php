<aside class="sidebar">
    <div class="sidebar-header">
        <div class="sidebar-logo">
            <img src="{{ asset('images/company-logo.png') }}" alt="Logo">
        </div>
        <i class="fas fa-bars" style="color: #999; cursor: pointer;"></i>
    </div>

    <nav>
        <div class="menu-label">الرئيسية</div>
        <ul class="sidebar-menu">
            <li class="{{ request()->routeIs('analysis') ? 'active' : '' }}">
                <a href="{{ route('analysis') }}"><i class="fas fa-th-large"></i> الاحصائيات</a>
            </li>
            <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}"><i class="fas fa-user"></i> الملف الشخصي</a>
            </li>
            <li class="{{ request()->routeIs('employees.index') ? 'active' : '' }}">
                <a href="{{ route('employees.index') }}"><i class="fas fa-users"></i> ادارة الموظفين</a>
            </li>
            <li><a href="#"><i class="fas fa-key"></i> ادارة الصلاحيات</a></li>
            <li><a href="#"><i class="fas fa-user-friends"></i> ادارة العملاء</a></li>
            <li class="{{ request()->routeIs('vehicles.index') ? 'active' : '' }}">
                <a href="{{ route('vehicles.index') }}"><i class="fas fa-car"></i> ادارة المركبات</a>
            </li>
            <li><a href="#"><i class="fas fa-calendar-alt"></i> ادارة الحجوزات</a></li>
            <li><a href="#"><i class="fas fa-shopping-cart"></i> ادارة المبيعات</a></li>
            <li><a href="#"><i class="fas fa-headset"></i> ادارة الدعم الفني</a></li>
        </ul>
    </nav>

    <div class="sidebar-footer">
        <div class="menu-label" style="padding-left: 0; padding-right: 0;">أخرى</div>
        <ul class="sidebar-menu" style="margin-bottom: 20px;">
            <li><a href="#"><i class="fas fa-cog"></i> اعدات النظام</a></li>
        </ul>
        <div class="night-mode">
            <div style="display: flex; align-items: center; gap: 10px;">
                <i class="fas fa-moon"></i> الوضع الليلي
            </div>
            <label class="switch">
                <input type="checkbox">
                <span class="slider"></span>
            </label>
        </div>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" style="background: none; border: none; padding: 0; width: 100%; text-align: right;">
                <div class="logout-link" style="color: var(--primary-red); cursor: pointer;">
                    <i class="fas fa-sign-out-alt"></i> تسجيل الخروج
                </div>
            </button>
        </form>
    </div>
</aside>
