# Navbar Timing Configuration Guide

## 🕐 **Quick Configuration**

To adjust how long subpages appear in the navbar, edit these values in:
**`user/themes/quark/templates/partials/base.html.twig`**

### **Current Settings (Lines 2-4):**
```javascript
const PRIMARY_DROPDOWN_DELAY = 800;    // Main dropdowns (e.g., "Услуги")
const CHILD_DROPDOWN_DELAY = 600;      // Sub-dropdowns (e.g., "Разработка и строительство...")
```

## ⚙️ **How to Adjust**

### **For Faster Response (Shorter Delays):**
```javascript
const PRIMARY_DROPDOWN_DELAY = 300;    // 300ms - Very fast
const CHILD_DROPDOWN_DELAY = 200;      // 200ms - Very fast
```

### **For Slower Response (Longer Delays):**
```javascript
const PRIMARY_DROPDOWN_DELAY = 1200;   // 1.2 seconds - Very slow
const CHILD_DROPDOWN_DELAY = 1000;     // 1 second - Very slow
```

### **Recommended Settings:**

| Use Case | Primary Delay | Child Delay | Description |
|----------|---------------|-------------|-------------|
| **Fast Navigation** | 300ms | 200ms | Quick, responsive feel |
| **Balanced** | 500ms | 400ms | Good balance of speed and comfort |
| **Comfortable** | 800ms | 600ms | Current setting - comfortable navigation |
| **Very Comfortable** | 1000ms | 800ms | Lots of time to navigate |
| **Slow & Steady** | 1500ms | 1200ms | Maximum comfort for careful navigation |

## 🎯 **What Each Setting Controls**

### **PRIMARY_DROPDOWN_DELAY**
- Controls main menu dropdowns (like "Услуги" → "Разработка и строительство выставочных стендов")
- Time before dropdown closes when you move mouse away
- **Higher value** = More time to move mouse to submenu
- **Lower value** = Faster response, but requires more precise mouse movement

### **CHILD_DROPDOWN_DELAY**
- Controls secondary dropdowns (like "Разработка и строительство..." → sub-items)
- Time before sub-dropdown closes when you move mouse away
- **Higher value** = More time to navigate to final subpage
- **Lower value** = Faster response for sub-navigation

## 🔧 **Step-by-Step Instructions**

1. **Open the file:**
   ```bash
   nano user/themes/quark/templates/partials/base.html.twig
   ```

2. **Find the configuration section (around line 2-4):**
   ```javascript
   // ===== NAVBAR TIMING CONFIGURATION =====
   const PRIMARY_DROPDOWN_DELAY = 800;    // Change this value
   const CHILD_DROPDOWN_DELAY = 600;      // Change this value
   ```

3. **Adjust the values** to your preference

4. **Save the file** and clear the cache:
   ```bash
   php bin/grav clearcache
   ```

## 💡 **Tips for Choosing the Right Timing**

### **Choose Faster Timing (300-500ms) if:**
- You have a fast mouse and good coordination
- You want snappy, responsive navigation
- Your users are tech-savvy

### **Choose Slower Timing (800-1200ms) if:**
- You want to give users more time to navigate
- You have complex multi-level menus
- Your users include older people or those with motor difficulties

### **Test Different Values:**
- Start with the current settings (800ms/600ms)
- Try faster settings (500ms/400ms) for more responsive feel
- Try slower settings (1000ms/800ms) if you need more time

## 🚀 **Quick Presets**

### **Gaming/Fast Navigation:**
```javascript
const PRIMARY_DROPDOWN_DELAY = 200;
const CHILD_DROPDOWN_DELAY = 150;
```

### **Standard Web Navigation:**
```javascript
const PRIMARY_DROPDOWN_DELAY = 500;
const CHILD_DROPDOWN_DELAY = 400;
```

### **Accessibility-Friendly:**
```javascript
const PRIMARY_DROPDOWN_DELAY = 1200;
const CHILD_DROPDOWN_DELAY = 1000;
```

## 🔄 **After Making Changes**

1. **Clear the cache:**
   ```bash
   php bin/grav clearcache
   ```

2. **Test the navigation** on your website

3. **Adjust further** if needed

## 📝 **Notes**

- **Values are in milliseconds** (1000ms = 1 second)
- **Lower values** = Faster response but less forgiving
- **Higher values** = Slower response but more forgiving
- **Changes take effect immediately** after clearing cache
- **Click-to-expand functionality** is not affected by these timing settings 