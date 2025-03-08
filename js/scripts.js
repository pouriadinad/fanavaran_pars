// نمونه ساده اعتبارسنجی فرم تماس
document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // جلوگیری از ارسال فرم پیش‌فرض
    alert('پیام شما ارسال شد!');
    this.reset();
  });