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
            --primary-red: #A12525;
            --bg-gray: #F9FAFB;
            --border-gray: #E5E7EB;
            --text-dark: #1F2937;
            --text-gray: #6B7280;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Cairo', sans-serif;
        }

        body {
            background-color: var(--bg-gray);
            color: var(--text-dark);
            padding: 60px 40px;
        }

        .container {
            max-width: 1300px;
            margin: 0 auto;
        }

        /* Top Header Section */
        .top-section {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 40px;
        }

        .header-content {
            text-align: right;
        }

        .page-title {
            font-size: 32px;
            font-weight: 700;
            color: #111827;
            margin-bottom: 4px;
        }

        .page-subtitle {
            font-size: 14px;
            color: #9CA3AF;
        }

        .btn-add-new {
            background-color: var(--primary-red);
            color: white;
            border: none;
            padding: 10px 24px;
            border-radius: 8px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            font-size: 15px;
            transition: all 0.2s;
        }

        .btn-add-new:hover {
            background-color: #8B1E1E;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        /* Table Card Area */
        .main-card {
            background: white;
            border-radius: 16px;
            padding: 32px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
            border: 1px solid #F3F4F6;
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
            color: #6B7280;
            font-size: 14px;
            border-bottom: 1px solid #F3F4F6;
            background: #FDFDFD;
        }

        .table td {
            padding: 24px 16px;
            vertical-align: middle;
            border-bottom: 1px solid #F3F4F6;
            font-size: 15px;
        }

        .table tr:last-child td {
            border-bottom: none;
        }

        /* Avatar & Name Column */
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

        .avatar-km { background-color: #2D4A99; }
        .avatar-sa { background-color: #E67E22; }
        .avatar-am { background-color: #A3D900; }

        .employee-name {
            font-weight: 700;
            color: #111827;
        }

        /* Badges */
        .role-badge {
            padding: 4px 14px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 600;
        }

        .badge-red { background-color: #FEF2F2; color: #B91C1C; }
        .badge-orange { background-color: #FFF7ED; color: #C2410C; }
        .badge-blue { background-color: #EFF6FF; color: #1D4ED8; }

        .stat-val {
            font-weight: 700;
            color: #111827;
        }

        /* Checkbox */
        .form-check-input {
            width: 18px;
            height: 18px;
            border: 2px solid #D1D5DB;
        }

        /* Actions */
        .action-dots {
            cursor: pointer;
            color: #9CA3AF;
            font-size: 18px;
        }

        .action-dots:hover {
            color: #111827;
        }

        @media (max-width: 768px) {
            .top-section { flex-direction: column-reverse; gap: 20px; align-items: flex-start; }
            body { padding: 20px; }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="top-section">
            <a href="#" class="btn-add-new">
                <i class="fas fa-user-plus"></i> إضافة موظف جديد
            </a>
            <div class="header-content">
                <h1 class="page-title">إدارة الموظفين</h1>
                <p class="page-subtitle">إدارة فريق العمل والصلاحيات والمهام المسندة.</p>
            </div>
        </div>

        <!-- Table Card -->
        <div class="main-card">
            <div class="table-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 40px;"><input type="checkbox" class="form-check-input"></th>
                            <th>الموظف</th>
                            <th>المسمى الوظيفي</th>
                            <th>البريد الالكتروني</th>
                            <th>رقم الجوال</th>
                            <th>المهام</th>
                            <th>المكتملة</th>
                            <th style="width: 50px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" class="form-check-input" checked></td>
                            <td>
                                <div class="employee-info">
                                    <div class="avatar avatar-km">KM</div>
                                    <span class="employee-name">خالد محمد</span>
                                </div>
                            </td>
                            <td><span class="role-badge badge-red">فني صيانة</span></td>
                            <td style="color: #6B7280;">khaled@example.com</td>
                            <td style="color: #6B7280;">+966 5698222</td>
                            <td class="stat-val">08</td>
                            <td class="stat-val">05</td>
                            <td class="text-center"><i class="fas fa-ellipsis-v action-dots"></i></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="form-check-input" checked></td>
                            <td>
                                <div class="employee-info">
                                    <div class="avatar avatar-sa">SA</div>
                                    <span class="employee-name">سارة علي</span>
                                </div>
                            </td>
                            <td><span class="role-badge badge-orange">موظفة استقبال</span></td>
                            <td style="color: #6B7280;">sara@example.com</td>
                            <td style="color: #6B7280;">+966 5698222</td>
                            <td class="stat-val">25</td>
                            <td class="stat-val">22</td>
                            <td class="text-center"><i class="fas fa-ellipsis-v action-dots"></i></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class="form-check-input"></td>
                            <td>
                                <div class="employee-info">
                                    <div class="avatar avatar-am">AM</div>
                                    <span class="employee-name">أحمد المنصور</span>
                                </div>
                            </td>
                            <td><span class="role-badge badge-blue">مدير النظام</span></td>
                            <td style="color: #6B7280;">ahmed@example.com</td>
                            <td style="color: #6B7280;">+966 5698222</td>
                            <td class="stat-val">12</td>
                            <td class="stat-val">10</td>
                            <td class="text-center"><i class="fas fa-ellipsis-v action-dots"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
