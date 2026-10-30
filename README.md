<div align="center">

# 📚 My Reading List

**Track the books you want to read, are reading, and have finished.**

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![SQLite](https://img.shields.io/badge/SQLite-003B57?style=for-the-badge&logo=sqlite&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)

[Features](#-features) · [Screenshots](#-screenshots) · [Run it](#-how-to-run) · [Routes](#-routes) · [Database](#-database) · [AI usage](#-ai-usage)

</div>

---

## ✨ About

A small Laravel app for keeping track of books. You can add, edit and delete books, filter the list by status, and search by title or author. No login is needed.

## 🚀 Features

| | Feature | Details |
|---|---------|---------|
| 📖 | **List books** | Title, author and a coloured status badge |
| ➕ | **Add a book** | Form with title, author and status |
| ✏️ | **Edit a book** | Same form, pre-filled with current values |
| 🗑️ | **Delete a book** | Asks "Are you sure?" before deleting |
| 🏷️ | **Filter by status** | All, To read, Reading, Finished (`/books?status=reading`) |
| ✅ | **Validation** | Error messages shown, typed input kept |
| 🔍 | **Search (extra)** | By title or author, works together with the filter |
| 🎨 | **Clean design (extra)** | Responsive layout in plain CSS, no npm needed |


## ⚙️ How to run

You need **PHP**, **Composer** and **Git** installed.

```bash
# 1. Get the code
git clone https://github.com/YOURNAME/reading-list.git
cd reading-list

# 2. Install dependencies
composer install

# 3. Set up the environment file and app key
cp .env.example .env
php artisan key:generate

# 4. Create the SQLite database file
#    Mac/Linux:
touch database/database.sqlite
#    Windows (PowerShell):
New-Item database/database.sqlite -ItemType File

# 5. Create the tables
php artisan migrate

# 6. Start the app
php artisan serve
```

Then open **http://127.0.0.1:8000** in your browser.

> The default `.env.example` already uses SQLite, so no database settings need changing.

## 🛣️ Routes

| Method | URL | What it does |
|--------|-----|--------------|
| `GET` | `/books` | List books (supports `?status=` and `?search=`) |
| `GET` | `/books/create` | Show the add form |
| `POST` | `/books` | Save a new book |
| `GET` | `/books/{book}/edit` | Show the edit form |
| `PUT` | `/books/{book}` | Save changes to a book |
| `DELETE` | `/books/{book}` | Delete a book |

`/` redirects to `/books`. The routes come from `Route::resource('books', BookController::class)`, without the unused `show` route.

## 🗄️ Database

One table, `books`:

| Column | Type | Notes |
|--------|------|-------|
| `id` | integer | primary key |
| `title` | string | required |
| `author` | string | required |
| `status` | string | `to-read`, `reading` or `finished` (default `to-read`) |
| `created_at`, `updated_at` | timestamps | added by Laravel |

## 🛡️ Validation

- `title`: required, max 255 characters
- `author`: required, max 255 characters
- `status`: required, one of `to-read`, `reading`, `finished`

Adding and editing share the same rules through one `validated()` method in `BookController`.

## 📁 Project structure

```
app/
├── Models/Book.php                      model + allowed statuses
└── Http/Controllers/BookController.php  index, create, store, edit, update, destroy
database/migrations/                     create_books_table
routes/web.php                           resource routes
resources/views/
├── layout.blade.php                     page layout + CSS
└── books/
    ├── index.blade.php                  list, filter, search
    ├── create.blade.php                 add page
    ├── edit.blade.php                   edit page
    └── form.blade.php                   fields shared by add and edit
```

## 🪜 How I built it

I built the app one step at a time and committed after each one: project setup, books table and model, list page, add form, edit, delete, status filter, design, search, and this README. The commit history shows the order.

## 🤖 AI usage

- I used Claude to get a step-by-step plan and to draft the controller, Blade views and CSS.
- I used it to explain git and GitHub, and to fix errors while setting up.
- I read and tested every part in the browser (add, edit, delete with confirmation, validation errors, filter and search).

---

<div align="center">

Made by **Shaunak Joshi** · Ramdeobaba University

</div>
