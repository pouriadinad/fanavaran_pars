// نمونه ساده اعتبارسنجی فرم تماس
document.getElementById('contactForm').addEventListener('submit', function(event) {
  event.preventDefault(); // جلوگیری از ارسال فرم پیش‌فرض

  // اعتبارسنجی فیلدها
  const name = document.getElementById('name').value.trim();
  const email = document.getElementById('email').value.trim();
  const message = document.getElementById('message').value.trim();

  if (name === "" || email === "" || message === "") {
      alert("لطفاً تمامی فیلدها را پر کنید.");
      return;
  }

  // اگر همه فیلدها پر باشند
  alert('پیام شما ارسال شد!');

  // بازنشانی فرم
  this.reset();
});