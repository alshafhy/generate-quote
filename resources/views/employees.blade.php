<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة الموظفين</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-blue: #1E3A8A;
            --bg-gray: #F3F4F6;
            --sidebar-width: 260px;
            --header-height: 70px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Cairo', sans-serif;
        }

        body {
            background-color: var(--bg-gray);
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: var(--sidebar-width);
            background-color: white;
            border-left: 1px solid #E5E7EB;
            display: flex;
            flex-direction: column;
            position: fixed;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: 100;
        }

        .sidebar-logo {
            padding: 24px;
            text-align: center;
            border-bottom: 1px solid #F3F4F6;
        }

        .sidebar-menu {
            list-style: none;
            padding: 20px;
        }

        .sidebar-menu li {
            margin-bottom: 8px;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 16px;
            color: #6B7280;
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.2s;
            font-size: 14px;
        }

        .sidebar-menu a:hover, .sidebar-menu a.active {
            background-color: #F3F4F6;
            color: var(--primary-blue);
            font-weight: 600;
        }

        /* Main Content Area */
        .main-wrapper {
            flex: 1;
            margin-right: var(--sidebar-width);
            display: flex;
            flex-direction: column;
        }

        /* Top Header */
        .top-header {
            height: var(--header-height);
            background: white;
            border-bottom: 1px solid #E5E7EB;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 40px;
            position: sticky;
            top: 0;
            z-index: 90;
        }

        .header-search {
            position: relative;
            width: 300px;
        }

        .header-search input {
            width: 100%;
            padding: 10px 16px 10px 40px;
            border: 1px solid #E5E7EB;
            border-radius: 8px;
            background: #F9FAFB;
            font-size: 14px;
        }

        .header-search i {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #9CA3AF;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .header-actions i {
            color: #6B7280;
            font-size: 20px;
            cursor: pointer;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
        }

        .user-avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background-color: var(--primary-blue);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
        }

        /* Page Content */
        .content-body {
            padding: 40px;
        }

        .page-header {
            margin-bottom: 32px;
        }

        .page-title {
            font-size: 28px;
            font-weight: 700;
            color: #111827;
            margin-bottom: 4px;
        }

        .page-subtitle {
            font-size: 14px;
            color: #6B7280;
        }

        .main-card {
            background: white;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        }

        .table-container {
            overflow-x: auto;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th {
            padding: 16px;
            text-align: right;
            font-weight: 700;
            color: #4B5563;
            font-size: 13px;
            border-bottom: 1px solid #F3F4F6;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .table td {
            padding: 20px 16px;
            vertical-align: middle;
            border-bottom: 1px solid #F3F4F6;
            font-size: 14px;
            color: #374151;
        }

        .employee-info {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .avatar {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 700;
            font-size: 15px;
        }

        .avatar-km { background-color: #3B82F6; }
        .avatar-sa { background-color: #F97316; }
        .avatar-am { background-color: #84CC16; }

        .role-badge {
            padding: 4px 12px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 600;
            display: inline-block;
        }

        .role-red { background-color: #FEE2E2; color: #DC2626; }
        .role-orange { background-color: #FFEDD5; color: #D97706; }
        .role-pink { background-color: #FCE7F3; color: #DB2777; }

        .stat-number {
            font-weight: 700;
            color: #111827;
        }

        .actions {
            display: flex;
            gap: 12px;
        }

        .btn-action {
            padding: 8px 20px;
            border: 1px solid #E5E7EB;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 600;
            color: #374151;
            text-decoration: none;
            background: white;
            transition: all 0.2s;
        }

        .btn-action:hover {
            background-color: #F9FAFB;
            border-color: #D1D5DB;
        }

        @media (max-width: 1024px) {
            .sidebar { display: none; }
            .main-wrapper { margin-right: 0; }
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-logo">
            <h2 style="color: var(--primary-blue); font-weight: 800;">DASHBOARD</h2>
        </div>
        <ul class="sidebar-menu">
            <li><a href="#"><i class="fas fa-home"></i> الرئيسية</a></li>
            <li><a href="#" class="active"><i class="fas fa-users"></i> إدارة الموظفين</a></li>
            <li><a href="#"><i class="fas fa-tasks"></i> إدارة المهام</a></li>
            <li><a href="#"><i class="fas fa-chart-line"></i> التقارير</a></li>
            <li><a href="#"><i class="fas fa-cog"></i> الإعدادات</a></li>
        </ul>
    </aside>

    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <!-- Top Header -->
        <header class="top-header">
            <div class="header-search">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="بحث عن موظف...">
            </div>
            <div class="header-actions">
                <i class="fas fa-bell"></i>
                <div class="user-profile">
                    <span style="font-size: 14px; font-weight: 600;">أدمن</span>
                    <div class="user-avatar">A</div>
                </div>
            </div>
        </header>

        <!-- Content Body -->
        <main class="content-body">
            <div class="page-header">
                <h1 class="page-title">إدارة الموظفين</h1>
                <p class="page-subtitle">إدارة فريق العمل والصلاحيات والمهام المسندة.</p>
            </div>

            <div class="main-card">
                <div class="table-container">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>الموظف</th>
                                <th>المسمى الوظيفي</th>
                                <th>المهام الكلية</th>
                                <th>المهام المكتملة</th>
                                <th>الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="employee-info">
                                        <div class="avatar avatar-km">KM</div>
                                        <span class="employee-name">خالد محمد</span>
                                    </div>
                                </td>
                                <td><span class="role-badge role-red">فني صيانة</span></td>
                                <td class="stat-number">08</td>
                                <td class="stat-number">05</td>
                                <td>
                                    <div class="actions">
                                        <a href="#" class="btn-action">تعديل</a>
                                        <a href="#" class="btn-action">عرض الملف</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="employee-info">
                                        <div class="avatar avatar-sa">SA</div>
                                        <span class="employee-name">سارة علي</span>
                                    </div>
                                </td>
                                <td><span class="role-badge role-orange">موظفة استقبال</span></td>
                                <td class="stat-number">25</td>
                                <td class="stat-number">22</td>
                                <td>
                                    <div class="actions">
                                        <a href="#" class="btn-action">تعديل</a>
                                        <a href="#" class="btn-action">عرض الملف</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="employee-info">
                                        <div class="avatar avatar-am">AM</div>
                                        <span class="employee-name">أحمد المنصور</span>
                                    </div>
                                </td>
                                <td><span class="role-badge role-pink">مدير النظام</span></td>
                                <td class="stat-number">12</td>
                                <td class="stat-number">10</td>
                                <td>
                                    <div class="actions">
                                        <a href="#" class="btn-action">تعديل</a>
                                        <a href="#" class="btn-action">عرض الملف</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
