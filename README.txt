SEWA TECH WEBSITE (PHP)

How to run locally (XAMPP):
1) Copy the folder to: C:\xampp\htdocs\sewatech_full
2) Start Apache in XAMPP
3) Open: http://localhost/sewatech_full/

Contact form:
- Edit includes/config.php and set SITE_EMAIL_TO to your email.
- On localhost, PHP mail() usually won't send. On hosting it may work.
- For guaranteed email sending, use SMTP (PHPMailer).

Deploy:
- Upload all files to your hosting public_html.
- Make sure PHP is enabled.
