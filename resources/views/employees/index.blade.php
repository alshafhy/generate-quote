@extends('layouts.app')

@section('title', 'ادارة الموظفين | نظام المركبات')

@push('styles')
<style>
    .employees-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
    }

    .btn-add-employee {
        background-color: var(--primary-red);
        color: white;
        border: none;
        padding: 12px 25px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        gap: 10px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s;
    }

    .btn-add-employee:hover {
        background-color: #a01a1f;
        transform: translateY(-2px);
    }

    .employees-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 20px;
    }

    .employee-card {
        background: white;
        border: 1px solid #f0f0f0;
        border-radius: 20px;
        padding: 25px;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        transition: all 0.3s;
    }

    .employee-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.05);
    }

    .employee-avatar {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        margin-bottom: 15px;
        border: 3px solid #f9f9f9;
    }

    .employee-name {
        font-size: 18px;
        font-weight: 700;
        color: #334155;
        margin-bottom: 5px;
    }

    .employee-role {
        font-size: 13px;
        color: var(--primary-red);
        background-color: #fff5f5;
        padding: 4px 12px;
        border-radius: 20px;
        margin-bottom: 15px;
    }

    .employee-stats {
        display: flex;
        width: 100%;
        justify-content: space-around;
        padding: 15px 0;
        border-top: 1px solid #f9f9f9;
        margin-top: 10px;
    }

    .stat-item {
        display: flex;
        flex-direction: column;
    }

    .stat-label {
        font-size: 11px;
        color: #94a3b8;
    }

    .stat-value {
        font-size: 14px;
        font-weight: 700;
        color: #334155;
    }

    .card-actions {
        display: flex;
        gap: 10px;
        width: 100%;
        margin-top: 15px;
    }

    .btn-card-action {
        flex: 1;
        padding: 8px;
        border-radius: 8px;
        border: 1px solid #eee;
        background: white;
        font-size: 13px;
        cursor: pointer;
        transition: all 0.2s;
    }

    .btn-card-action:hover {
        background-color: #f9f9f9;
        border-color: #ddd;
    }
</style>
@endpush

@section('content')
    <div class="employees-header">
        <div class="page-header" style="margin-bottom: 0;">
            <h1>إدارة الموظفين</h1>
            <p>إدارة فريق العمل والصلاحيات والمهام المسندة.</p>
        </div>
        <button class="btn-add-employee">
            <i class="fas fa-user-plus"></i> إضافة موظف جديد
        </button>
    </div>

    <div class="employees-grid">
        <div class="employee-card">
            <img src="https://ui-avatars.com/api/?name=Ahmed+Mansour&background=random" alt="Avatar" class="employee-avatar">
            <span class="employee-name">أحمد المنصور</span>
            <span class="employee-role">مدير النظام</span>
            <div class="employee-stats">
                <div class="stat-item">
                    <span class="stat-label">المهام</span>
                    <span class="stat-value">12</span>
                </div>
                <div class="stat-item">
                    <span class="stat-label">المكتملة</span>
                    <span class="stat-value">10</span>
                </div>
            </div>
            <div class="card-actions">
                <button class="btn-card-action">عرض الملف</button>
                <button class="btn-card-action">تعديل</button>
            </div>
        </div>

        <div class="employee-card">
            <img src="https://ui-avatars.com/api/?name=Sara+Ali&background=random" alt="Avatar" class="employee-avatar">
            <span class="employee-name">سارة علي</span>
            <span class="employee-role">موظفة استقبال</span>
            <div class="employee-stats">
                <div class="stat-item">
                    <span class="stat-label">المهام</span>
                    <span class="stat-value">25</span>
                </div>
                <div class="stat-item">
                    <span class="stat-label">المكتملة</span>
                    <span class="stat-value">22</span>
                </div>
            </div>
            <div class="card-actions">
                <button class="btn-card-action">عرض الملف</button>
                <button class="btn-card-action">تعديل</button>
            </div>
        </div>

        <div class="employee-card">
            <img src="https://ui-avatars.com/api/?name=Khaled+Mohamed&background=random" alt="Avatar" class="employee-avatar">
            <span class="employee-name">خالد محمد</span>
            <span class="employee-role">فني صيانة</span>
            <div class="employee-stats">
                <div class="stat-item">
                    <span class="stat-label">المهام</span>
                    <span class="stat-value">08</span>
                </div>
                <div class="stat-item">
                    <span class="stat-label">المكتملة</span>
                    <span class="stat-value">05</span>
                </div>
            </div>
            <div class="card-actions">
                <button class="btn-card-action">عرض الملف</button>
                <button class="btn-card-action">تعديل</button>
            </div>
        </div>
    </div>
@endsection
