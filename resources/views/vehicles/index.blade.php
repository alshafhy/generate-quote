@extends('layouts.app')

@section('title', 'ادارة المركبات | نظام المركبات')

@push('styles')
<style>
    .vehicles-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
    }

    .btn-add-vehicle {
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

    .btn-add-vehicle:hover {
        background-color: #a01a1f;
        transform: translateY(-2px);
    }

    .vehicles-table-container {
        background: white;
        border: 1px solid #f0f0f0;
        border-radius: 20px;
        overflow: hidden;
    }

    .vehicles-table {
        width: 100%;
        border-collapse: collapse;
        text-align: right;
    }

    .vehicles-table th {
        background-color: #f9f9f9;
        padding: 18px 25px;
        font-size: 14px;
        color: #999;
        font-weight: 600;
        border-bottom: 1px solid #f0f0f0;
    }

    .vehicles-table td {
        padding: 20px 25px;
        border-bottom: 1px solid #f9f9f9;
        font-size: 14px;
        color: #444;
    }

    .vehicle-info {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .vehicle-image {
        width: 45px;
        height: 45px;
        background: #f1f5f9;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #94a3b8;
    }

    .vehicle-details {
        display: flex;
        flex-direction: column;
    }

    .vehicle-name {
        font-weight: 700;
        color: #334155;
    }

    .vehicle-plate {
        font-size: 12px;
        color: #94a3b8;
    }

    .status-badge {
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
    }

    .status-available { background-color: #e8f5e9; color: #2e7d32; }
    .status-rented { background-color: #fff3e0; color: #e65100; }
    .status-maintenance { background-color: #ffebee; color: #c62828; }

    .action-btns {
        display: flex;
        gap: 10px;
    }

    .btn-action {
        width: 32px;
        height: 32px;
        border-radius: 8px;
        border: 1px solid #eee;
        background: white;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #999;
        cursor: pointer;
        transition: all 0.2s;
    }

    .btn-action:hover {
        border-color: var(--primary-red);
        color: var(--primary-red);
    }
</style>
@endpush

@section('content')
    <div class="vehicles-header">
        <div class="page-header" style="margin-bottom: 0;">
            <h1>إدارة المركبات</h1>
            <p>عرض وتحديث أسطول المركبات الخاص بالنظام.</p>
        </div>
        <button class="btn-add-vehicle">
            <i class="fas fa-plus"></i> إضافة مركبة جديدة
        </button>
    </div>

    <div class="vehicles-table-container">
        <table class="vehicles-table">
            <thead>
                <tr>
                    <th>المركبة</th>
                    <th>النوع / الموديل</th>
                    <th>رقم اللوحة</th>
                    <th>الحالة</th>
                    <th>السعر اليومي</th>
                    <th>العمليات</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="vehicle-info">
                            <div class="vehicle-image"><i class="fas fa-car"></i></div>
                            <div class="vehicle-details">
                                <span class="vehicle-name">تويوتا كامري</span>
                                <span class="vehicle-plate">أ ب ج 1234</span>
                            </div>
                        </div>
                    </td>
                    <td>سيدان / 2024</td>
                    <td>1234 ABC</td>
                    <td><span class="status-badge status-available">متاحة</span></td>
                    <td>250 ر.س</td>
                    <td>
                        <div class="action-btns">
                            <button class="btn-action"><i class="fas fa-eye"></i></button>
                            <button class="btn-action"><i class="fas fa-edit"></i></button>
                            <button class="btn-action"><i class="fas fa-trash"></i></button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="vehicle-info">
                            <div class="vehicle-image"><i class="fas fa-car-side"></i></div>
                            <div class="vehicle-details">
                                <span class="vehicle-name">هيونداي إلنترا</span>
                                <span class="vehicle-plate">د هـ و 5678</span>
                            </div>
                        </div>
                    </td>
                    <td>سيدان / 2023</td>
                    <td>5678 DEF</td>
                    <td><span class="status-badge status-rented">مؤجرة</span></td>
                    <td>180 ر.س</td>
                    <td>
                        <div class="action-btns">
                            <button class="btn-action"><i class="fas fa-eye"></i></button>
                            <button class="btn-action"><i class="fas fa-edit"></i></button>
                            <button class="btn-action"><i class="fas fa-trash"></i></button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="vehicle-info">
                            <div class="vehicle-image"><i class="fas fa-truck-pickup"></i></div>
                            <div class="vehicle-details">
                                <span class="vehicle-name">فورد إكسبلورر</span>
                                <span class="vehicle-plate">س ع ص 9012</span>
                            </div>
                        </div>
                    </td>
                    <td>دفع رباعي / 2024</td>
                    <td>9012 XYZ</td>
                    <td><span class="status-badge status-maintenance">في الصيانة</span></td>
                    <td>450 ر.س</td>
                    <td>
                        <div class="action-btns">
                            <button class="btn-action"><i class="fas fa-eye"></i></button>
                            <button class="btn-action"><i class="fas fa-edit"></i></button>
                            <button class="btn-action"><i class="fas fa-trash"></i></button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
