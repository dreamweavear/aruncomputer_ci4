# Code Citations

## License: unknown
https://github.com/arghadeep25/arghadeep25.github.io/blob/82a73ad68bfa844775bd10c1f5f03c642535ca2e/pixworm/nature.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0
```


## License: GPL-3.0
https://github.com/AnLaVN/AChat/blob/7024350292fcaa0ea4fda09483b5c0bda2004d3b/AChatWeb/Client/index.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
```


## License: unknown
https://github.com/arghadeep25/arghadeep25.github.io/blob/82a73ad68bfa844775bd10c1f5f03c642535ca2e/pixworm/nature.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0
```


## License: GPL-3.0
https://github.com/AnLaVN/AChat/blob/7024350292fcaa0ea4fda09483b5c0bda2004d3b/AChatWeb/Client/index.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
```


## License: unknown
https://github.com/AlexisCariqueo/dulcessaludable/blob/e70872ee4ed52d0fde27bbf9b94dd5a724efeef2/resources/views/layouts/tienda-plantilla.blade.php

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com
```


## License: unknown
https://github.com/recife-lagoadaprata/recife-lagoadaprata.github.io/blob/566732aa268d838897a459a8a2dfb1154c8c15d1/index.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com
```


## License: unknown
https://github.com/arghadeep25/arghadeep25.github.io/blob/82a73ad68bfa844775bd10c1f5f03c642535ca2e/pixworm/nature.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0
```


## License: GPL-3.0
https://github.com/AnLaVN/AChat/blob/7024350292fcaa0ea4fda09483b5c0bda2004d3b/AChatWeb/Client/index.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
```


## License: unknown
https://github.com/AlexisCariqueo/dulcessaludable/blob/e70872ee4ed52d0fde27bbf9b94dd5a724efeef2/resources/views/layouts/tienda-plantilla.blade.php

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com
```


## License: unknown
https://github.com/recife-lagoadaprata/recife-lagoadaprata.github.io/blob/566732aa268d838897a459a8a2dfb1154c8c15d1/index.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com
```


## License: unknown
https://github.com/AlphaIndiaMike/AlphaIndiaMike.github.io/blob/9c1801828a1236616384c155670ad9192cbeaf97/index.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome
```


## License: unknown
https://github.com/arghadeep25/arghadeep25.github.io/blob/82a73ad68bfa844775bd10c1f5f03c642535ca2e/pixworm/nature.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0
```


## License: GPL-3.0
https://github.com/AnLaVN/AChat/blob/7024350292fcaa0ea4fda09483b5c0bda2004d3b/AChatWeb/Client/index.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
```


## License: unknown
https://github.com/AlexisCariqueo/dulcessaludable/blob/e70872ee4ed52d0fde27bbf9b94dd5a724efeef2/resources/views/layouts/tienda-plantilla.blade.php

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com
```


## License: unknown
https://github.com/recife-lagoadaprata/recife-lagoadaprata.github.io/blob/566732aa268d838897a459a8a2dfb1154c8c15d1/index.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com
```


## License: unknown
https://github.com/AlphaIndiaMike/AlphaIndiaMike.github.io/blob/9c1801828a1236616384c155670ad9192cbeaf97/index.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome
```


## License: unknown
https://github.com/ZinHoang/Haukai-Web-App/blob/2e68570d27517d17c104c37b6a6341f035035352/contact.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel
```


## License: unknown
https://github.com/arghadeep25/arghadeep25.github.io/blob/82a73ad68bfa844775bd10c1f5f03c642535ca2e/pixworm/nature.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0
```


## License: GPL-3.0
https://github.com/AnLaVN/AChat/blob/7024350292fcaa0ea4fda09483b5c0bda2004d3b/AChatWeb/Client/index.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
```


## License: unknown
https://github.com/AlexisCariqueo/dulcessaludable/blob/e70872ee4ed52d0fde27bbf9b94dd5a724efeef2/resources/views/layouts/tienda-plantilla.blade.php

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com
```


## License: unknown
https://github.com/recife-lagoadaprata/recife-lagoadaprata.github.io/blob/566732aa268d838897a459a8a2dfb1154c8c15d1/index.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com
```


## License: unknown
https://github.com/AlphaIndiaMike/AlphaIndiaMike.github.io/blob/9c1801828a1236616384c155670ad9192cbeaf97/index.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome
```


## License: unknown
https://github.com/ZinHoang/Haukai-Web-App/blob/2e68570d27517d17c104c37b6a6341f035035352/contact.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel
```


## License: unknown
https://github.com/arghadeep25/arghadeep25.github.io/blob/82a73ad68bfa844775bd10c1f5f03c642535ca2e/pixworm/nature.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
```


## License: GPL-3.0
https://github.com/AnLaVN/AChat/blob/7024350292fcaa0ea4fda09483b5c0bda2004d3b/AChatWeb/Client/index.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
```


## License: unknown
https://github.com/AlexisCariqueo/dulcessaludable/blob/e70872ee4ed52d0fde27bbf9b94dd5a724efeef2/resources/views/layouts/tienda-plantilla.blade.php

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com
```


## License: unknown
https://github.com/recife-lagoadaprata/recife-lagoadaprata.github.io/blob/566732aa268d838897a459a8a2dfb1154c8c15d1/index.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com
```


## License: unknown
https://github.com/AlphaIndiaMike/AlphaIndiaMike.github.io/blob/9c1801828a1236616384c155670ad9192cbeaf97/index.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome
```


## License: unknown
https://github.com/ZinHoang/Haukai-Web-App/blob/2e68570d27517d17c104c37b6a6341f035035352/contact.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel
```


## License: unknown
https://github.com/Rohan-Thapa/bookself/blob/f787c7df315a07264041ddbfe6d715cc0a7bf9a9/bookself/message.php

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
```

---

## 💡 **
```


## License: unknown
https://github.com/arghadeep25/arghadeep25.github.io/blob/82a73ad68bfa844775bd10c1f5f03c642535ca2e/pixworm/nature.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com
```


## License: GPL-3.0
https://github.com/AnLaVN/AChat/blob/7024350292fcaa0ea4fda09483b5c0bda2004d3b/AChatWeb/Client/index.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com
```


## License: unknown
https://github.com/AlexisCariqueo/dulcessaludable/blob/e70872ee4ed52d0fde27bbf9b94dd5a724efeef2/resources/views/layouts/tienda-plantilla.blade.php

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com
```


## License: unknown
https://github.com/recife-lagoadaprata/recife-lagoadaprata.github.io/blob/566732aa268d838897a459a8a2dfb1154c8c15d1/index.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com
```


## License: unknown
https://github.com/AlphaIndiaMike/AlphaIndiaMike.github.io/blob/9c1801828a1236616384c155670ad9192cbeaf97/index.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome
```


## License: unknown
https://github.com/ZinHoang/Haukai-Web-App/blob/2e68570d27517d17c104c37b6a6341f035035352/contact.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel
```


## License: unknown
https://github.com/Rohan-Thapa/bookself/blob/f787c7df315a07264041ddbfe6d715cc0a7bf9a9/bookself/message.php

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
```

---

## 💡 **
```


## License: unknown
https://github.com/arghadeep25/arghadeep25.github.io/blob/82a73ad68bfa844775bd10c1f5f03c642535ca2e/pixworm/nature.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com
```


## License: GPL-3.0
https://github.com/AnLaVN/AChat/blob/7024350292fcaa0ea4fda09483b5c0bda2004d3b/AChatWeb/Client/index.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com
```


## License: unknown
https://github.com/AlexisCariqueo/dulcessaludable/blob/e70872ee4ed52d0fde27bbf9b94dd5a724efeef2/resources/views/layouts/tienda-plantilla.blade.php

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com
```


## License: unknown
https://github.com/recife-lagoadaprata/recife-lagoadaprata.github.io/blob/566732aa268d838897a459a8a2dfb1154c8c15d1/index.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com
```


## License: unknown
https://github.com/AlphaIndiaMike/AlphaIndiaMike.github.io/blob/9c1801828a1236616384c155670ad9192cbeaf97/index.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome
```


## License: unknown
https://github.com/ZinHoang/Haukai-Web-App/blob/2e68570d27517d17c104c37b6a6341f035035352/contact.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel
```


## License: unknown
https://github.com/Rohan-Thapa/bookself/blob/f787c7df315a07264041ddbfe6d715cc0a7bf9a9/bookself/message.php

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
```

---

## 💡 **
```


## License: unknown
https://github.com/AlphaIndiaMike/AlphaIndiaMike.github.io/blob/9c1801828a1236616384c155670ad9192cbeaf97/index.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome
```


## License: unknown
https://github.com/arghadeep25/arghadeep25.github.io/blob/82a73ad68bfa844775bd10c1f5f03c642535ca2e/pixworm/nature.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome
```


## License: GPL-3.0
https://github.com/AnLaVN/AChat/blob/7024350292fcaa0ea4fda09483b5c0bda2004d3b/AChatWeb/Client/index.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome
```


## License: unknown
https://github.com/AlexisCariqueo/dulcessaludable/blob/e70872ee4ed52d0fde27bbf9b94dd5a724efeef2/resources/views/layouts/tienda-plantilla.blade.php

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome
```


## License: unknown
https://github.com/recife-lagoadaprata/recife-lagoadaprata.github.io/blob/566732aa268d838897a459a8a2dfb1154c8c15d1/index.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome
```


## License: unknown
https://github.com/ZinHoang/Haukai-Web-App/blob/2e68570d27517d17c104c37b6a6341f035035352/contact.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel
```


## License: unknown
https://github.com/Rohan-Thapa/bookself/blob/f787c7df315a07264041ddbfe6d715cc0a7bf9a9/bookself/message.php

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
```

---

## 💡 **
```


## License: unknown
https://github.com/AlphaIndiaMike/AlphaIndiaMike.github.io/blob/9c1801828a1236616384c155670ad9192cbeaf97/index.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel
```


## License: unknown
https://github.com/arghadeep25/arghadeep25.github.io/blob/82a73ad68bfa844775bd10c1f5f03c642535ca2e/pixworm/nature.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel
```


## License: GPL-3.0
https://github.com/AnLaVN/AChat/blob/7024350292fcaa0ea4fda09483b5c0bda2004d3b/AChatWeb/Client/index.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel
```


## License: unknown
https://github.com/ZinHoang/Haukai-Web-App/blob/2e68570d27517d17c104c37b6a6341f035035352/contact.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel
```


## License: unknown
https://github.com/AlexisCariqueo/dulcessaludable/blob/e70872ee4ed52d0fde27bbf9b94dd5a724efeef2/resources/views/layouts/tienda-plantilla.blade.php

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel
```


## License: unknown
https://github.com/recife-lagoadaprata/recife-lagoadaprata.github.io/blob/566732aa268d838897a459a8a2dfb1154c8c15d1/index.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel
```


## License: unknown
https://github.com/Rohan-Thapa/bookself/blob/f787c7df315a07264041ddbfe6d715cc0a7bf9a9/bookself/message.php

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
```

---

## 💡 **
```


## License: unknown
https://github.com/AlphaIndiaMike/AlphaIndiaMike.github.io/blob/9c1801828a1236616384c155670ad9192cbeaf97/index.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
```

---

## 💡 **
```


## License: unknown
https://github.com/arghadeep25/arghadeep25.github.io/blob/82a73ad68bfa844775bd10c1f5f03c642535ca2e/pixworm/nature.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
```

---

## 💡 **
```


## License: unknown
https://github.com/Rohan-Thapa/bookself/blob/f787c7df315a07264041ddbfe6d715cc0a7bf9a9/bookself/message.php

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
```

---

## 💡 **
```


## License: GPL-3.0
https://github.com/AnLaVN/AChat/blob/7024350292fcaa0ea4fda09483b5c0bda2004d3b/AChatWeb/Client/index.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
```

---

## 💡 **
```


## License: unknown
https://github.com/ZinHoang/Haukai-Web-App/blob/2e68570d27517d17c104c37b6a6341f035035352/contact.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
```

---

## 💡 **
```


## License: unknown
https://github.com/AlexisCariqueo/dulcessaludable/blob/e70872ee4ed52d0fde27bbf9b94dd5a724efeef2/resources/views/layouts/tienda-plantilla.blade.php

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
```

---

## 💡 **
```


## License: unknown
https://github.com/recife-lagoadaprata/recife-lagoadaprata.github.io/blob/566732aa268d838897a459a8a2dfb1154c8c15d1/index.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
```

---

## 💡 **
```


## License: unknown
https://github.com/AlphaIndiaMike/AlphaIndiaMike.github.io/blob/9c1801828a1236616384c155670ad9192cbeaf97/index.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
```

---

## 💡 **
```


## License: unknown
https://github.com/arghadeep25/arghadeep25.github.io/blob/82a73ad68bfa844775bd10c1f5f03c642535ca2e/pixworm/nature.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
```

---

## 💡 **
```


## License: unknown
https://github.com/Rohan-Thapa/bookself/blob/f787c7df315a07264041ddbfe6d715cc0a7bf9a9/bookself/message.php

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
```

---

## 💡 **
```


## License: GPL-3.0
https://github.com/AnLaVN/AChat/blob/7024350292fcaa0ea4fda09483b5c0bda2004d3b/AChatWeb/Client/index.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
```

---

## 💡 **
```


## License: unknown
https://github.com/ZinHoang/Haukai-Web-App/blob/2e68570d27517d17c104c37b6a6341f035035352/contact.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
```

---

## 💡 **
```


## License: unknown
https://github.com/AlexisCariqueo/dulcessaludable/blob/e70872ee4ed52d0fde27bbf9b94dd5a724efeef2/resources/views/layouts/tienda-plantilla.blade.php

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
```

---

## 💡 **
```


## License: unknown
https://github.com/recife-lagoadaprata/recife-lagoadaprata.github.io/blob/566732aa268d838897a459a8a2dfb1154c8c15d1/index.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
```

---

## 💡 **
```


## License: unknown
https://github.com/AlphaIndiaMike/AlphaIndiaMike.github.io/blob/9c1801828a1236616384c155670ad9192cbeaf97/index.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
```

---

## 💡 **
```


## License: unknown
https://github.com/arghadeep25/arghadeep25.github.io/blob/82a73ad68bfa844775bd10c1f5f03c642535ca2e/pixworm/nature.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
```

---

## 💡 **
```


## License: unknown
https://github.com/Rohan-Thapa/bookself/blob/f787c7df315a07264041ddbfe6d715cc0a7bf9a9/bookself/message.php

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
```

---

## 💡 **
```


## License: GPL-3.0
https://github.com/AnLaVN/AChat/blob/7024350292fcaa0ea4fda09483b5c0bda2004d3b/AChatWeb/Client/index.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
```

---

## 💡 **
```


## License: unknown
https://github.com/ZinHoang/Haukai-Web-App/blob/2e68570d27517d17c104c37b6a6341f035035352/contact.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
```

---

## 💡 **
```


## License: unknown
https://github.com/AlexisCariqueo/dulcessaludable/blob/e70872ee4ed52d0fde27bbf9b94dd5a724efeef2/resources/views/layouts/tienda-plantilla.blade.php

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
```

---

## 💡 **
```


## License: unknown
https://github.com/recife-lagoadaprata/recife-lagoadaprata.github.io/blob/566732aa268d838897a459a8a2dfb1154c8c15d1/index.html

```
Based on my analysis of your three header files, I found **significant duplicate CSS styles**. Here's a detailed report:

## 📊 **Duplicate Styles Analysis**

### **Files Analyzed:**
1. [headerdash1.php](app/Views/templates/headerdash1.php) (~150 lines)
2. [headeradmin.php](app/Views/templates/headeradmin.php) (~400+ lines)
3. [headerchapters.php](app/Views/templates/headerchapters.php) (~300+ lines)

---

## 🔴 **DUPLICATE CSS STYLES FOUND:**

### **1. Dropdown Menu Styling** (appears in ALL 3 files)
```css
.dropdown-menu {
  border-radius: 8px;
  background-color: #f8f9fa;
}

.dropdown-item {
  transition: all 0.2s;
  font-weight: 500;
}

.dropdown-item:hover {
  background: linear-gradient(90deg, rgba(0,120,215,0.1) 0%, rgba(255,255,255,0) 100%);
  color: #0078D7 !important;
  padding-left: 20px !important;
}

.dropdown-item:active {
  background-color: #0078D7 !important;
  color: white !important;
}

.dropdown-header {
  font-size: 0.75rem;
  letter-spacing: 1px;
}
```

### **2. Navbar Navigation Links** (in headeradmin.php & headerchapters.php)
```css
.navbar-nav .nav-link {
  transition: all 0.3s ease;
  font-weight: 500;
  position: relative;
}

.navbar-nav .nav-link:hover {
  background-color: rgba(255, 255, 255, 0.15);
  transform: translateY(-2px);
}

.navbar-nav .nav-link.active {
  background: linear-gradient(90deg, rgba(0,120,215,0.3) 0%, rgba(0,180,255,0.2) 100%);
  border-bottom: 2px solid white;
}

.navbar-nav .bi {
  font-size: 1.1rem;
}
```

### **3. Sidebar Styling** (in headeradmin.php & headerchapters.php)
```css
.sidebar {
  width: 280px;
  transition: all 0.3s;
  min-height: calc(100vh - 112px);
  background-color: #f8f9fa;
}

.sidebar.collapsed {
  margin-left: -280px;
}

.sidebar-link {
  border-radius: 5px;
  margin-bottom: 5px;
}

.sidebar-link:hover,
.sidebar-link.active {
  background-color: rgba(13, 110, 253, 0.2);
}

.main-content {
  transition: all 0.3s;
  flex: 1;
  padding: 10px 15px;
  min-width: 0;
}

.content-wrapper {
  display: flex;
  flex-wrap: nowrap;
}
```

### **4. Font Links** (appears in ALL 3 files)
```html
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari:wght@400;500;600;700&family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
```

### **5. Bootstrap & Icon CDN Links** (appears in ALL 3 files)
```html
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
```

---

## 💡 **
```

