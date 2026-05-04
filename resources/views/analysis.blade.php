@extends('layouts.app')

@section('title', 'الإحصائيات والتقارير | نظام المركبات')

@push('styles')
<style>
    .analysis-filters {
        background-color: #f9f9f9;
        border-radius: 15px;
        padding: 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        margin-bottom: 30px;
    }

    .filter-item {
        display: flex;
        flex-direction: column;
        gap: 8px;
        flex: 1;
    }

    .filter-label {
        font-size: 13px;
        color: #999;
        font-weight: 500;
    }

    .filter-input-wrapper {
        position: relative;
        background: white;
        border: 1px solid #eee;
        border-radius: 10px;
        display: flex;
        align-items: center;
        padding: 10px 15px;
        gap: 10px;
    }

    .filter-input-wrapper input, .filter-input-wrapper select {
        border: none;
        background: transparent;
        width: 100%;
        font-size: 14px;
        color: var(--text-dark);
        outline: none;
        text-align: right;
    }

    .time-toggle {
        display: flex;
        background: #f0f0f0;
        padding: 5px;
        border-radius: 12px;
        gap: 5px;
        width: fit-content;
    }

    .time-toggle button {
        padding: 10px 25px;
        border: none;
        border-radius: 10px;
        background: transparent;
        cursor: pointer;
        font-size: 15px;
        font-weight: 500;
        transition: all 0.3s;
        color: #777;
    }

    .time-toggle button.active {
        background: white;
        color: var(--primary-red);
        font-weight: 700;
        box-shadow: 0 4px 10px rgba(0,0,0,0.05);
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        margin-bottom: 30px;
    }

    .stat-card {
        background: white;
        border: 1px solid #f0f0f0;
        border-radius: 15px;
        padding: 20px;
        position: relative;
        transition: all 0.3s;
    }

    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.05);
    }

    .stat-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 15px;
    }

    .stat-icon-wrapper {
        width: 40px;
        height: 40px;
        background: #f9f9f9;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #999;
        font-size: 18px;
    }

    .trend-badge {
        padding: 4px 10px;
        border-radius: 6px;
        font-size: 11px;
        font-weight: 700;
    }

    .trend-up {
        background-color: #e8f5e9;
        color: #2e7d32;
    }

    .trend-neutral {
        background-color: #f5f5f5;
        color: #757575;
    }

    .trend-status {
        background-color: #fff5f5;
        color: #c62828;
    }

    .stat-body {
        text-align: right;
    }

    .stat-label {
        font-size: 13px;
        color: #999;
        margin-bottom: 5px;
        display: block;
    }

    .stat-value {
        font-size: 24px;
        font-weight: 800;
        color: #444;
    }

    .details-row {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 20px;
        margin-bottom: 30px;
    }

    .details-panel {
        background: white;
        border: 1px solid #f0f0f0;
        border-radius: 20px;
        padding: 30px;
    }

    .performance-panel {
        background-color: #fcfcfc;
    }

    .panel-title {
        font-size: 20px;
        font-weight: 700;
        color: #334155;
        margin-bottom: 15px;
        display: block;
    }

    .panel-subtitle {
        font-size: 13px;
        color: #94a3b8;
        line-height: 1.6;
        margin-bottom: 25px;
        display: block;
    }

    .info-box {
        background: #f8fafc;
        border: 1px solid #f1f5f9;
        border-radius: 12px;
        padding: 15px;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        gap: 15px;
        margin-bottom: 15px;
    }

    .info-box-content {
        text-align: right;
    }

    .info-box-label {
        font-size: 11px;
        color: #94a3b8;
        display: block;
        margin-bottom: 2px;
    }

    .info-box-value {
        font-size: 14px;
        font-weight: 700;
        color: #334155;
    }

    .info-box i {
        color: #94a3b8;
        font-size: 20px;
        width: 40px;
        height: 40px;
        background: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 2px 5px rgba(0,0,0,0.02);
    }

    /* Support Panel Styles */
    .support-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
    }

    .view-all {
        color: #2563eb;
        font-size: 13px;
        text-decoration: none;
        font-weight: 600;
    }

    .ticket-item {
        margin-bottom: 25px;
    }

    .ticket-info {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
    }

    .ticket-label {
        font-size: 14px;
        font-weight: 700;
        color: #334155;
    }

    .ticket-percentage {
        font-size: 11px;
        color: #94a3b8;
    }

    .progress-container {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .progress-bar-bg {
        flex: 1;
        height: 10px;
        background: #f1f5f9;
        border-radius: 5px;
        position: relative;
        overflow: hidden;
    }

    .progress-bar-fill {
        height: 100%;
        border-radius: 5px;
    }

    .ticket-count {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        font-weight: 700;
    }

    .bg-blue { background-color: #eff6ff; color: #1e40af; }
    .bg-orange { background-color: #fff7ed; color: #7c2d12; }
    .bg-grey { background-color: #f8fafc; color: #334155; }

    .fill-blue { background-color: #1e3a8a; width: 26%; }
    .fill-orange { background-color: #f97316; width: 62%; }
    .fill-grey { background-color: #64748b; width: 12%; }

    /* Chart Styles */
    .chart-container {
        background: white;
        border: 1px solid #f0f0f0;
        border-radius: 20px;
        padding: 30px;
        margin-bottom: 30px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    }

    .chart-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
    }

    .chart-title {
        font-size: 20px;
        font-weight: 700;
        color: #1e3a8a;
        margin: 0;
    }

    .chart-legend {
        display: flex;
        gap: 20px;
    }

    .legend-item {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .legend-dot {
        width: 12px;
        height: 12px;
        border-radius: 50%;
    }

    .legend-text {
        font-size: 13px;
        color: #94a3b8;
        font-weight: 500;
    }
</style>
@endpush

@section('content')
    <div class="page-header">
        <h1>الإحصائيات والتقارير</h1>
        <p>قم بمتابعة أداء النظام والتقارير التحليلية بدقة.</p>
    </div>

    <!-- Analysis Filters -->
    <div class="analysis-filters">
        <div class="filter-item" style="flex: 1.5;">
            <label class="filter-label">فلتر حسب براند السيارة</label>
            <div class="filter-input-wrapper">
                <i class="fas fa-chevron-down" style="font-size: 10px; color: #999;"></i>
                <select>
                    <option>جميع الماركات</option>
                    <option>تويوتا</option>
                    <option>هيونداي</option>
                </select>
                <i class="fas fa-car" style="color: var(--primary-red);"></i>
            </div>
        </div>

        <div class="filter-item" style="flex: 1.5;">
            <label class="filter-label">فلتر حسب التاريخ</label>
            <div class="filter-input-wrapper">
                <input type="text" placeholder="mm/dd/yyyy">
                <i class="fas fa-calendar-alt" style="color: var(--primary-red);"></i>
            </div>
        </div>

        <div class="filter-item" style="flex: none; align-items: flex-end;">
            <div class="time-toggle" style="margin-top: 22px;">
                <button>يوم</button>
                <button class="active">شهر</button>
                <button>سنة</button>
            </div>
        </div>
    </div>

    <!-- Stats Grid -->
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-header">
                <span class="trend-badge trend-up">12%+ <i class="fas fa-arrow-up"></i></span>
                <div class="stat-icon-wrapper">
                    <i class="fas fa-users-viewfinder"></i>
                </div>
            </div>
            <div class="stat-body">
                <span class="stat-label">إجمالي عدد المستخدمين</span>
                <div class="stat-value">2,842</div>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-header">
                <span class="trend-badge trend-neutral">0%</span>
                <div class="stat-icon-wrapper">
                    <i class="fas fa-car"></i>
                </div>
            </div>
            <div class="stat-body">
                <span class="stat-label">إجمالي عدد السيارات</span>
                <div class="stat-value">156</div>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-header">
                <span class="trend-badge trend-up">8%+ <i class="fas fa-arrow-up"></i></span>
                <div class="stat-icon-wrapper">
                    <i class="fas fa-calendar-check"></i>
                </div>
            </div>
            <div class="stat-body">
                <span class="stat-label">إجمالي الحجوزات</span>
                <div class="stat-value">1,120</div>
            </div>
        </div>

        <div class="stat-card">
            <div class="stat-header">
                <span class="trend-badge trend-status">نشط</span>
                <div class="stat-icon-wrapper">
                    <i class="fas fa-headset"></i>
                </div>
            </div>
            <div class="stat-body">
                <span class="stat-label">طلبات الدعم الفني</span>
                <div class="stat-value">45</div>
            </div>
        </div>
    </div>

    <!-- Details Row (Support on Right, Performance on Left) -->
    <div class="details-row">
        <!-- Support Tickets Panel (Right Side in RTL) -->
        <div class="details-panel">
            <div class="support-header">
                <span class="panel-title" style="margin-bottom: 0;">تفاصيل طلبات الدعم الفني</span>
                <a href="#" class="view-all">عرض الكل <i class="fas fa-chevron-left" style="font-size: 10px; margin-right: 5px;"></i></a>
            </div>

            <div class="ticket-item">
                <div class="ticket-info">
                    <span class="ticket-label">الطلبات الجديدة</span>
                    <span class="ticket-percentage">26% من الإجمالي</span>
                </div>
                <div class="progress-container">
                    <div class="ticket-count bg-blue">12</div>
                    <div class="progress-bar-bg">
                        <div class="progress-bar-fill fill-blue"></div>
                    </div>
                </div>
            </div>

            <div class="ticket-item">
                <div class="ticket-info">
                    <span class="ticket-label">الطلبات التي تم الرد عليها</span>
                    <span class="ticket-percentage">62% من الإجمالي</span>
                </div>
                <div class="progress-container">
                    <div class="ticket-count bg-orange">28</div>
                    <div class="progress-bar-bg">
                        <div class="progress-bar-fill fill-orange"></div>
                    </div>
                </div>
            </div>

            <div class="ticket-item" style="margin-bottom: 0;">
                <div class="ticket-info">
                    <span class="ticket-label">الطلبات المغلقة</span>
                    <span class="ticket-percentage">12% من الإجمالي</span>
                </div>
                <div class="progress-container">
                    <div class="ticket-count bg-grey">05</div>
                    <div class="progress-bar-bg">
                        <div class="progress-bar-fill fill-grey"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Booking Performance Panel (Left Side in RTL) -->
        <div class="details-panel performance-panel">
            <span class="panel-title">أداء الحجوزات</span>
            <span class="panel-subtitle">نلاحظ زيادة بنسبة 15% في الحجوزات في منطقة الرياض خلال الأسبوع الماضي. ينصح بزيادة عدد السيارات المتوفرة هناك.</span>
            
            <div class="info-box">
                <i class="fas fa-map-marker-alt"></i>
                <div class="info-box-content">
                    <span class="info-box-label">أعلى منطقة</span>
                    <span class="info-box-value">الرياض، حي النخيل</span>
                </div>
            </div>

            <div class="info-box">
                <i class="far fa-clock"></i>
                <div class="info-box-content">
                    <span class="info-box-label">أعلى وقت</span>
                    <span class="info-box-value">6:00 م - 10:00 م</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Chart Section -->
    <div class="chart-container">
        <div class="chart-header">
            <div class="chart-legend">
                <div class="legend-item">
                    <span class="legend-dot" style="background-color: #f97316;"></span>
                    <span class="legend-text">حجوزات ملغاة</span>
                </div>
                <div class="legend-item">
                    <span class="legend-dot" style="background-color: #64748b;"></span>
                    <span class="legend-text">حجوزات مكتملة</span>
                </div>
            </div>
            <h2 class="chart-title">تطور الحجوزات خلال الشهر</h2>
        </div>
        <div style="height: 350px; position: relative;">
            <canvas id="mainChart"></canvas>
        </div>
    </div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('mainChart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['1 يوليو', '5 يوليو', '10 يوليو', '15 يوليو', '20 يوليو', '25 يوليو', '30 يوليو'],
            datasets: [
                {
                    label: 'حجوزات مكتملة',
                    data: [65, 85, 70, 95, 80, 75, 90],
                    backgroundColor: '#64748b',
                    borderRadius: 6,
                    barThickness: 25,
                },
                {
                    label: 'حجوزات ملغاة',
                    data: [20, 35, 25, 45, 30, 20, 40],
                    backgroundColor: '#f97316',
                    borderRadius: 6,
                    barThickness: 25,
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    rtl: true,
                    titleAlign: 'right',
                    bodyAlign: 'right'
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: '#f8fafc',
                        drawBorder: false
                    },
                    ticks: {
                        color: '#94a3b8',
                        font: { size: 11 }
                    }
                },
                x: {
                    grid: {
                        display: false
                    },
                    ticks: {
                        color: '#94a3b8',
                        font: { size: 11 }
                    }
                }
            }
        }
    });
</script>
@endpush