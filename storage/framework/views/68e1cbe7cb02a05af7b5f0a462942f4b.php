<?php $__env->startSection('title', 'الملف الشخصي - لوحة التحكم'); ?>

<?php $__env->startSection('content'); ?>
    <div class="page-header">
        <h1>الملف الشخصي</h1>
        <p>قم بتحديث معلوماتك الشخصية والمهنية لضمان دقة البيانات في النظام السيادي للمحرك الذكي.</p>
    </div>

    <div class="profile-card">
        <div class="profile-top">
            <div class="profile-info">
                <div class="profile-avatar-wrapper">
                    <img src="https://ui-avatars.com/api/?name=Ahmed+Mansour&background=0D8ABC&color=fff" alt="Profile">
                    <div class="edit-avatar-btn">
                        <i class="fas fa-pen"></i>
                    </div>
                </div>
                <div style="text-align: right;">
                    <span class="user-badge">إداري سيادي</span>
                    <h2 class="user-name">أحمد المنصور</h2>
                    <div class="user-position">كبير محرري السياسات الرقمية</div>
                    <div class="join-date">تاريخ الانضمام : أكتوبر 2023</div>
                </div>
            </div>
            <div class="profile-top">
                <button class="btn-edit-profile" id="edit-btn" onclick="enableEditing()">تعديل</button>
            </div>
        </div>

        <div style="margin-top: 40px;">
            <div class="section-title">المعلومات الشخصية</div>
            <div class="info-grid">
                <div class="info-item">
                    <label>الاسم بالكامل</label>
                    <input type="text" class="profile-input" value="كمال اسعد سعد سعيد" readonly>
                </div>
                <div class="info-item">
                    <label>المسمى الوظيفي</label>
                    <input type="text" class="profile-input" value="إداري سيادي" readonly>
                </div>
                <div class="info-item">
                    <label>رقم الجوال</label>
                    <div class="phone-input-wrapper">
                        <input type="text" class="profile-input" value=" " readonly placeholder="رقم الجوال">
                        <div class="country-code">
                            <i class="fas fa-chevron-down" style="font-size: 10px; color: #999;"></i>
                            <span>+966</span>
                            <img src="https://flagcdn.com/w40/sa.png" alt="SA" style="width: 20px; border-radius: 2px;">
                        </div>
                    </div>
                </div>
                <div class="info-item">
                    <label>البريد الإلكتروني</label>
                    <input type="email" class="profile-input" value="ahmed.mohammed@example.com" readonly>
                </div>
            </div>

            <!-- Edit Actions at the bottom -->
            <div id="edit-actions" style="display: none; justify-content: center; gap: 15px; margin-top: 30px;">
                <button class="btn-save" onclick="saveChanges()">حفظ التغييرات</button>
                <button class="btn-cancel" onclick="disableEditing()">إلغاء</button>
            </div>
        </div>
    </div>

    <div class="security-summary">
        <div class="security-card">
            <div class="security-icon-wrapper">
                <i class="fas fa-shield-alt"></i>
            </div>
            <div>
                <h3>حماية البيانات</h3>
                <p>يتم تشفير كافة البيانات الشخصية وفقاً للمحاير السيادية المعتمدة.</p>
            </div>
        </div>
        <div class="security-card">
            <div class="security-icon-wrapper">
                <i class="fas fa-history"></i>
            </div>
            <div>
                <h3>أخر دخول</h3>
                <p>تم تسجيل أخر دخول ناجح في 24 يناير 2024 من مدينة الرياض.</p>
            </div>
        </div>
        <div class="security-card">
            <div class="security-icon-wrapper">
                <i class="fas fa-user-check"></i>
            </div>
            <div>
                <h3>توثيق الحساب</h3>
                <p>حسابك موثق عبر النفاذ الوطني الموحد برقم الهوية المنتهي بـ 4331.</p>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
    function enableEditing() {
        document.getElementById('edit-btn').style.display = 'none';
        document.getElementById('edit-actions').style.display = 'flex';
        
        const inputs = document.querySelectorAll('.profile-input');
        inputs.forEach(input => {
            input.removeAttribute('readonly');
            input.style.borderColor = '#bb1f24';
            input.style.backgroundColor = '#fff';
        });
    }

    function disableEditing() {
        document.getElementById('edit-btn').style.display = 'block';
        document.getElementById('edit-actions').style.display = 'none';
        
        const inputs = document.querySelectorAll('.profile-input');
        inputs.forEach(input => {
            input.setAttribute('readonly', true);
            input.style.borderColor = '#eeeeee';
            input.style.backgroundColor = 'transparent';
        });
    }

    function saveChanges() {
        alert('تم حفظ التغييرات بنجاح');
        disableEditing();
    }
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/resources/views/dashboard.blade.php ENDPATH**/ ?>