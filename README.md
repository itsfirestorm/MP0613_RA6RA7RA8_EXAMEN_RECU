# 🏏 MP0613 Cricket Management System

A full-featured Cricket Club Management web application built with **Laravel 9** and the **Eloquent ORM**. The system supports three distinct user roles — Admin, Club Manager, and Player — each with their own dashboard and feature set.

Home page
<img width="1380" height="728" alt="image" src="https://github.com/user-attachments/assets/eec2d696-585e-4b30-af96-af51cf0fd545" />

Club dashboard
<img width="1279" height="651" alt="image" src="https://github.com/user-attachments/assets/3f097ae2-c9fc-4bc5-af01-88ab3db2c412" />

Admin dashboard
<img width="1474" height="595" alt="image" src="https://github.com/user-attachments/assets/907ee2c5-3365-4a6a-9abc-a4091d4b4b46" />


---

## 📋 Table of Contents

- [Features](#features)
- [Tech Stack](#tech-stack)
- [Roles](#roles)
- [Database Schema](#database-schema)
- [Installation](#installation)
- [Seeded Credentials](#seeded-credentials)
- [Folder Structure](#folder-structure)
- [Image Upload Paths](#image-upload-paths)

---

## ✨ Features

### 🌐 Public Front-end
- Home page with latest **Events** and **News**
- Browse all events and individual event detail pages
- Contact page

### 🛡️ Admin Panel (`/admin`)
- Secure login with dedicated `admin` auth guard
- Manage **Grounds** (add, edit, delete, toggle status)
- Manage **Player Categories** (Batsman, Bowler, All-Rounder, etc.)
- Manage **Club Managers** (add, edit)
- Browse **Club Members**, **Teams**, **Team Players**, and **Coaches** per club
- Manage **Events** and **News**
- View all **Matches**, assign grounds, announce winning team

### 👔 Club Manager Panel
- Secure login with dedicated `clubManager` auth guard
- Manage **Club Members** (register, edit, delete with image upload)
- Manage **Teams** (Home / Tournament categories)
- Assign **Team Players** by player category
- Manage **Coaches**
- Manage **Events & News** for the club
- Send and receive **Match Requests** (Super Six, T20, One Day, Test)
- Accept match requests and track results
- Add **Player Match Details** (overs, runs, wickets, awards)
- Edit **Club Profile**
- **Change Password**

### 👤 Player (User) Panel
- Login with `web` guard
- Personal **Dashboard** showing team memberships and match history
- View match details and personal stats

---

## 🛠 Tech Stack

| Layer | Technology |
|---|---|
| Framework | Laravel 9 |
| ORM | Eloquent |
| Auth | Laravel multi-guard (`admin` / `clubManager` / `web`) |
| Frontend | Bootstrap 5, SB Admin 2 theme, Font Awesome 6 |
| Database | MySQL |
| PHP | ≥ 8.0.2 |
| Packages | laravel/ui ^4.1, laravel/sanctum ^3.0 |

---

## 👥 Roles

| Role | Guard | Login URL | Home after login |
|---|---|---|---|
| Admin | `admin` | `/admin/login` | `/admin/` |
| Club Manager | `clubManager` | `/login` | `/dashboard` |
| Player | `web` | `/userLogin` | `/user_dashboard` |

---

### Enum Reference

| Column | Values | Meaning |
|---|---|---|
| `event_type` | `E` / `N` | Event / News |
| `team_category` | `H` / `T` | Home / Tournament |
| `match_request_category` | `H` / `T` | Home / Tournament |
| `match_request_overs` | `SS` / `T20` / `1D` / `T` | Super Six / T20 / One Day / Test |
| `match_request_status` | `P` / `A` / `R` / `C` | Pending / Accepted / Rejected / Cancelled |
| `status` (users / club managers) | `A` / `B` / `P` | Active / Blocked / Pending |
| `match_detail_player_out_status` | `O` / `NO` / `NP` | Out / Not Out / Not Played |
| `match_detail_player_award` | `MOM` / `SOM` / `COM` | Man / Star / Comeback of the Match |

---

## 🚀 Installation

### Prerequisites
- PHP ≥ 8.0.2
- Composer
- MySQL
- XAMPP (or any local server)

### Steps

## Setup
1. Clone the repository:

```bash
   git clone https://github.com/Stucom-Pelai/MP0613_RA6RA7RA8_Eloquent-Cricket.git
```

2. Install Composer dependencies:

```bash
composer install
```

3. Copy the example enviroment file:

```bash
cp .env.example .env
```

4. Generate an application key

```bash
php artisan key:generate
```

5. Create a symbolic link from 'public/storage' to 'storage/app/public'

```bash
php artisan storage:link
```

6. Clear compiled view files

```bash
php artisan view:clear
```

7. Create mp0613_cricket database


8. Run migrations and seed the database

```bash
php artisan migrate:fresh --seed
```

9. Start the Laravel development server 

```bash
php artisan serve
```

10. You are all set

---


## 📄 License

This project is open-sourced under the [MIT license](https://opensource.org/licenses/MIT).
