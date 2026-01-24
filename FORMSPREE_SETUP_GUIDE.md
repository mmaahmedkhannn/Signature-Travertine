# Formspree Setup Guide for Hostinger

This guide will help you set up Formspree forms after uploading your website to Hostinger.

---

## 📋 **Step 1: Create Formspree Account**

1. **Go to Formspree website:**
   - Visit: https://formspree.io/
   - Click **"Sign Up"** or **"Get Started"**

2. **Create your account:**
   - Sign up with your email (use: `support@signaturetravertineandmarble.com`)
   - Verify your email address

3. **Choose a plan:**
   - **Free Plan:** 50 submissions/month (perfect for testing)
   - **Starter Plan:** $10/month for 200 submissions (recommended for business)

---

## 📝 **Step 2: Create Forms in Formspree**

You need to create **TWO forms** in Formspree:

### **Form 1: Main Contact Form**

1. In Formspree dashboard, click **"New Form"**
2. **Form Name:** `Main Contact Form`
3. **Email to receive submissions:** `support@signaturetravertineandmarble.com`
4. Click **"Create Form"**
5. **Copy the Form ID** - It will look like: `xrgkqjpn` or `abc123xyz`
6. **Save this Form ID** - You'll need it for `index.html`

### **Form 2: Product Enquiry Form**

1. Click **"New Form"** again
2. **Form Name:** `Product Enquiry Form`
3. **Email to receive submissions:** `support@signaturetravertineandmarble.com`
4. Click **"Create Form"**
5. **Copy the Form ID** - It will look like: `yrgkqjpn` or `def456uvw`
6. **Save this Form ID** - You'll need it for all product pages

---

## 🔧 **Step 3: Update Your HTML Files**

After uploading to Hostinger, you need to replace `YOUR_FORM_ID` with your actual Formspree Form IDs.

### **For Main Contact Form (`index.html`):**

1. Open `index.html` in a text editor
2. Find this line (around line 3448):
   ```html
   <form id="contactForm" name="contact" method="POST" action="https://formspree.io/f/YOUR_FORM_ID">
   ```
3. Replace `YOUR_FORM_ID` with your **Main Contact Form ID**
   - Example: `action="https://formspree.io/f/xrgkqjpn"`

### **For Product Enquiry Forms (All Product Pages):**

You need to update these files:
- `products/travertine.html`
- `products/marble.html`
- `products/granite.html`
- `products/limestone.html`
- `products/onyx.html`
- `products/quartzite.html`

1. Open each product HTML file
2. Find this line (around line 940):
   ```html
   <form id="enquiryForm" name="product-enquiry" method="POST" action="https://formspree.io/f/YOUR_FORM_ID">
   ```
3. Replace `YOUR_FORM_ID` with your **Product Enquiry Form ID**
   - Example: `action="https://formspree.io/f/yrgkqjpn"`

---

## 📤 **Step 4: Upload to Hostinger**

1. **Log into Hostinger:**
   - Go to hpanel.hostinger.com
   - Log in with your credentials

2. **Access File Manager:**
   - Click **"File Manager"** or **"FTP"**
   - Navigate to `public_html` folder (or your domain's root folder)

3. **Upload all files:**
   - Upload all HTML files
   - Upload all folders (`assets/`, `products/`, etc.)
   - Make sure `.htaccess` file is uploaded

4. **Verify file structure:**
   ```
   public_html/
   ├── index.html
   ├── .htaccess
   ├── assets/
   ├── products/
   └── ... (other files)
   ```

---

## ✅ **Step 5: Test Your Forms**

1. **Test Main Contact Form:**
   - Visit your website: `https://yourdomain.com`
   - Scroll to the contact section
   - Fill out the form and submit
   - Check your email (`support@signaturetravertineandmarble.com`) for the submission

2. **Test Product Enquiry Form:**
   - Visit any product page: `https://yourdomain.com/products/travertine.html`
   - Click **"Enquire Now"** button
   - Choose **"Email"** option
   - Fill out the form and submit
   - Check your email for the submission

3. **Check Formspree Dashboard:**
   - Log into Formspree
   - Go to **"Submissions"** tab
   - You should see your test submissions there

---

## ⚙️ **Step 6: Configure Formspree Settings (Optional)**

### **Email Notifications:**
1. Go to Formspree dashboard
2. Click on your form
3. Go to **"Settings"** → **"Notifications"**
4. Enable email notifications (should be enabled by default)

### **Auto-Reply Messages:**
1. In form settings, go to **"Auto-Responder"**
2. Enable **"Send auto-reply to submitters"**
3. Customize the message:
   ```
   Thank you for contacting Signature Travertine & Marble. 
   We have received your message and will get back to you shortly.
   ```

### **Spam Protection:**
1. Formspree automatically includes spam protection
2. The `_gotcha` field in your forms helps prevent spam
3. For additional protection, consider upgrading to a paid plan

---

## 🔍 **Troubleshooting**

### **Forms not submitting:**
1. **Check Form ID:** Make sure you replaced `YOUR_FORM_ID` with actual Form ID
2. **Check email:** Verify the email address in Formspree settings
3. **Check browser console:** Press F12 → Console tab → Look for errors
4. **Check Formspree dashboard:** See if submissions appear there

### **Not receiving emails:**
1. **Check spam folder:** Emails might be filtered as spam
2. **Verify email in Formspree:** Make sure email is correct
3. **Check Formspree dashboard:** Submissions should appear there even if email fails

### **CORS Errors:**
- Formspree handles CORS automatically
- If you see CORS errors, check your `.htaccess` file
- Make sure CSP headers allow `formspree.io`

---

## 📊 **Formspree Form IDs Reference**

After creating your forms, fill this out for reference:

- **Main Contact Form ID:** `_________________`
- **Product Enquiry Form ID:** `_________________`

---

## 📝 **Quick Checklist**

- [ ] Created Formspree account
- [ ] Created Main Contact Form
- [ ] Created Product Enquiry Form
- [ ] Updated `index.html` with Main Contact Form ID
- [ ] Updated all 6 product pages with Product Enquiry Form ID
- [ ] Uploaded all files to Hostinger
- [ ] Tested main contact form
- [ ] Tested product enquiry form
- [ ] Verified emails are being received
- [ ] Configured auto-reply messages (optional)

---

## 🆘 **Need Help?**

- **Formspree Support:** https://help.formspree.io/
- **Formspree Documentation:** https://help.formspree.io/hc/en-us
- **Hostinger Support:** Contact Hostinger support for hosting issues

---

**Last Updated:** January 2025
