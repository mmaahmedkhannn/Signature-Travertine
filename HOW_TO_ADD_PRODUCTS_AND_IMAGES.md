# How to Add New Products and Images to Your Website

This guide will help you add new products or update images on your Signature Travertine & Marble website.

---

## 📁 **Understanding the Folder Structure**

Your website has the following important folders:

```
Signature Tervatine And Marble/
├── assets/
│   ├── Gallery Images/          (Gallery images for each stone type)
│   │   ├── Granite/
│   │   ├── Limestone/
│   │   ├── Marble/
│   │   ├── Onyx/
│   │   ├── Quartize/
│   │   └── Trevartine/
│   └── Products Images/         (Product card images for homepage)
├── products/                    (Individual product pages)
│   ├── granite.html
│   ├── limestone.html
│   ├── marble.html
│   ├── onyx.html
│   ├── quartzite.html
│   └── travertine.html
└── index.html                   (Homepage)
```

---

## 🖼️ **How to Add New Images**

### **Option 1: Add Images to Existing Product Gallery**

1. **Navigate to the gallery folder:**
   - Go to: `assets/Gallery Images/[Product Name]/`
   - For example: `assets/Gallery Images/Marble/` for marble images

2. **Add your new images:**
   - Copy your image files into the appropriate folder
   - **Naming convention:** Follow the existing pattern:
     - `Marble 1.jpeg`, `Marble 2.jpeg`, `Marble 3.jpeg`, etc.
     - Or: `Granite Image 1.jpg`, `Granite Image 2.jpg`, etc.

3. **Image formats supported:**
   - `.jpg`, `.jpeg`, `.png`, `.webp`
   - **Recommended:** Use `.jpg` or `.jpeg` for photos, `.webp` for better compression

4. **Image optimization tips:**
   - **Size:** Keep images under 2MB each for faster loading
   - **Dimensions:** Recommended 1200x800px or larger (will be automatically resized)
   - **Quality:** Use high quality (80-90%) for best appearance

5. **Add images to the product page HTML:**
   - Open the product page HTML file (e.g., `products/marble.html`)
   - Find the "Thumbnail Gallery" section (around line 849)
   - Add new thumbnail items following this pattern:

   ```html
   <div class="thumbnail-item" data-image="../assets/Gallery Images/Marble/Marble 10.jpg">
       <img src="../assets/Gallery Images/Marble/Marble 10.jpg" alt="Marble 10" class="thumbnail-image">
   </div>
   ```

   **Important:** 
   - The `data-image` attribute should match the `src` attribute
   - Update the path to match your folder structure
   - The first thumbnail should have `class="thumbnail-item active"` (others don't need "active")

---

### **Option 2: Update Product Card Image on Homepage**

1. **Navigate to:** `assets/Products Images/`

2. **Replace or add product images:**
   - For example, to update Marble product card:
     - Replace: `Marble Product Image 1.png`
     - Or add: `Marble Product Image 2.png`, `Marble Product Image 3.png`

3. **Update the CSS in `index.html`:**
   - Open `index.html` in a text editor
   - Find the section around line 1300-1400 (look for `.marble-img`, `.granite-img`, etc.)
   - Update the `background-image` URL to point to your new image

   **Example:**
   ```css
   .marble-img {
       background-image: url('assets/Products Images/Marble Product Image 1.png');
   }
   ```

---

## 🆕 **How to Add a Completely New Product**

### **Step 1: Create the Product Page**

1. **Copy an existing product page:**
   - Go to `products/` folder
   - Copy `marble.html` (or any existing product page)
   - Rename it to `[your-product-name].html`
   - Example: `slate.html` or `quartz.html`

2. **Edit the new product page:**
   - Open the new file in a text editor
   - **Update the SEO meta tags** (lines 8-27):
     - Change the `<title>` tag
     - Update `<meta name="description">`
     - Update `<meta name="keywords">`
     - Update `<link rel="canonical">`
     - Update Open Graph and Twitter Card tags

   **Example for a new "Slate" product:**
   ```html
   <title>Premium Slate Stone | Natural Slate Slabs Dubai | Signature Travertine & Marble</title>
   <meta name="description" content="Premium slate stone supplier in Dubai, UAE...">
   <link rel="canonical" href="https://www.signaturetervatineandmarble.com/products/slate.html">
   ```

3. **Update the product content:**
   - Find and replace all instances of the old product name with your new product name
   - Update the product description
   - Update image paths to point to your new product images

4. **Update breadcrumbs:**
   - Find the breadcrumb section and update the product name

---

### **Step 2: Create Gallery Images Folder**

1. **Create a new folder:**
   - Go to: `assets/Gallery Images/`
   - Create a new folder with your product name (e.g., `Slate/`)

2. **Add gallery images:**
   - Copy your product images into this new folder
   - Name them: `Slate 1.jpg`, `Slate 2.jpg`, `Slate 3.jpg`, etc.

---

### **Step 3: Create Product Card Image**

1. **Add product card image:**
   - Go to: `assets/Products Images/`
   - Add your product card image: `Slate Product Image 1.png`

---

### **Step 4: Add Product to Homepage**

1. **Open `index.html` in a text editor**

2. **Find the Products Section** (around line 2880-2928)

3. **Add a new product card** after the existing products:

   ```html
   <a class="product-card" href="products/slate.html">
       <div class="product-image slate-img"></div>
       <div class="product-info">
           <h3>Slate</h3>
           <p>Your product description here. Highlight the unique features and benefits of this stone type.</p>
       </div>
   </a>
   ```

4. **Add CSS for the product image** (find the CSS section around line 1300-1400):

   ```css
   .slate-img {
       background-image: url('assets/Products Images/Slate Product Image 1.png');
       background-size: cover;
       background-position: center;
   }
   ```

---

### **Step 5: Add to Navigation and Footer**

1. **Update Footer Links** (around line 3465-3470):
   - Add your new product link in the "Products" section of the footer

2. **Update Sitemap** (if you have one):
   - Add your new product page URL to `sitemap.xml`

---

## 📝 **Quick Reference: File Locations**

| What You Want to Do | File/Folder to Edit |
|---------------------|---------------------|
| Add gallery images | `assets/Gallery Images/[Product Name]/` |
| Update product card image | `assets/Products Images/` + CSS in `index.html` |
| Add new product page | Create `products/[product-name].html` |
| Add product to homepage | Edit `index.html` (Products Section) |
| Update navigation | Edit `index.html` (Header & Footer) |

---

## ⚠️ **Important Notes**

1. **Image Naming:**
   - Use consistent naming (e.g., `Marble 1.jpg`, `Marble 2.jpg`)
   - Avoid spaces in filenames (use hyphens: `marble-image-1.jpg`)
   - Keep file extensions consistent (`.jpg` or `.jpeg`)

2. **Image Sizes:**
   - Gallery images: 1200x800px or larger
   - Product card images: 800x600px recommended
   - Keep file sizes under 2MB for faster loading

3. **Testing:**
   - After adding images, refresh your browser (Ctrl+F5 to clear cache)
   - Check that all images load correctly
   - Test on mobile devices too

4. **Backup:**
   - Always backup your files before making changes
   - Keep a copy of the original files

---

## 🆘 **Need Help?**

If you get stuck:
1. Check the existing product pages for reference
2. Make sure file paths are correct (case-sensitive on some servers)
3. Verify image file names match exactly in the HTML/CSS
4. Clear your browser cache if images don't appear

---

## 📋 **Checklist for Adding a New Product**

- [ ] Created product page HTML file (`products/[name].html`)
- [ ] Updated SEO meta tags in product page
- [ ] Created gallery images folder (`assets/Gallery Images/[Name]/`)
- [ ] Added gallery images to the folder
- [ ] Created product card image (`assets/Products Images/[Name] Product Image 1.png`)
- [ ] Added product card to homepage (`index.html`)
- [ ] Added CSS for product card image
- [ ] Updated footer links
- [ ] Tested all links and images
- [ ] Updated sitemap.xml (if applicable)

---

**Last Updated:** January 2025

