# University Printing Department - Course Material Ordering System

## Project Overview

A web-based ordering system for the University Printing Department allowing students to order course materials with automatic pricing calculation and discount application.

## Tech Stack

- **Frontend:** HTML5, CSS3
- **Backend:** PHP 7.x+
- **Server:** Apache (XAMPP)
- **Database:** Ready for MySQL integration

## Features

✅ Student order form with validation
✅ Multiple material types (Study Guide, Tutorial Workbook, Practical Manual, Revision Pack)
✅ Printing options (B&W, Colour, Premium Binding)
✅ Dynamic price calculation
✅ 10% discount for orders with quantity ≥ 5
✅ Professional order summary with CSS styling
✅ Responsive design

## Project Structure

```
multimedia-assignment/
├── home.html              # Homepage
├── Order material.html    # Order form page
├── About us.html          # About page
├── process.php            # Order processing & summary
├── style.css              # All styling
├── .vscode/               # VSCode configuration
│   ├── settings.json      # Editor settings
│   ├── extensions.json    # Recommended extensions
│   ├── launch.json        # Debug configuration
│   └── tasks.json         # Build/run tasks
└── README.md              # This file
```

## Setup Instructions

### 1. Install XAMPP

- Download from: https://www.apachefriends.org/
- Install to default location (C:\xampp)

### 2. Start Services

Open XAMPP Control Panel and start:

- Apache
- MySQL (if needed for future features)

### 3. Open in VSCode

```bash
# Option A: Open the workspace file
Open: multimedia-assignment.code-workspace in VSCode

# Option B: Open folder
File > Open Folder > Select multimedia-assignment folder
```

### 4. Install Recommended Extensions

When VSCode prompts, click "Install" for the recommended extensions:

- PHP IntelliSense
- Prettier (code formatter)
- Live Server
- PHP Debugger (Xdebug)

### 5. Run the Project

Navigate to: **http://localhost/multimedia-assignment/home.html**

## How to Use

1. **View Home Page:** Click Home in navigation
2. **Place Order:** Fill out the order form
   - Enter student details
   - Select material type
   - Choose quantity
   - Select printing option
3. **Review Summary:** Automatically generated order summary with costs
4. **Calculate:** System auto-calculates total including discounts

## Pricing Guide

| Material Type     | Price |
| ----------------- | ----- |
| Study Guide       | R120  |
| Tutorial Workbook | R80   |
| Practical Manual  | R100  |
| Revision Pack     | R60   |

| Printing Option | Price |
| --------------- | ----- |
| Black & White   | R20   |
| Colour          | R50   |
| Premium Binding | R80   |

**Discount:** 10% off when quantity ≥ 5

## File Descriptions

| File                    | Purpose                                              |
| ----------------------- | ---------------------------------------------------- |
| **home.html**           | Landing page with navigation and welcome message     |
| **Order material.html** | Form for students to submit orders                   |
| **About us.html**       | Information about the printing department            |
| **process.php**         | Backend processing & order summary display           |
| **style.css**           | All CSS styling (forms, summary, navigation, footer) |

## VSCode Configuration

### Settings (settings.json)

- PHP executable path pointed to XAMPP
- Auto-formatting on save
- Tab size: 2 spaces

### Debug (launch.json)

- Configured for Xdebug
- Set breakpoints and step through code

### Tasks (tasks.json)

- Quick access to run PHP dev server

## Common Issues

### Apache Won't Start

- Check if port 80 is in use
- Try alternate port (80→8080) in XAMPP config
- Run as Administrator

### PHP Not Running

- Verify Apache is running (green in XAMPP)
- Check error logs in XAMPP Control Panel
- Ensure PHP is enabled in Apache

### Styles Not Loading

- Clear browser cache (Ctrl+Shift+Delete)
- Check CSS file path is correct
- Verify style.css exists in project folder

## Future Enhancements

- [ ] Database integration for order history
- [ ] Email confirmation system
- [ ] Student login/authentication
- [ ] Order tracking
- [ ] Payment gateway integration
- [ ] Admin dashboard

## Support

For issues or questions, contact the University Printing Department IT Support.

---

**Project:** University Printing System  
**Version:** 1.0  
**Last Updated:** 2026
