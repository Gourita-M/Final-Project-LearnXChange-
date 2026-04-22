# 🎓 Skill Learning & Teaching Platform

A web platform that allows users to **learn or teach skills**, communicate through **real-time chat sessions**, earn **XP**, unlock **badges**, and receive **certificates**.

---

## 📌 Overview

This platform connects **learners** and **trainers** in an interactive environment where knowledge is exchanged through structured sessions and gamified engagement.

---

## 🚀 Features

### 🔐 Authentication & Profile
- Secure registration (email & password)
- OAuth login (Google, Facebook, Microsoft)
- Unique email validation
- Role selection:
  - Learner
  - Trainer *(only one role per user)*
- Profile management:
  - Learners: add skills to learn
  - Trainers: add skills to teach (Beginner / Intermediate / Advanced)

---

### 📚 Learning (Learner)
- Create learning requests
- Browse trainers by:
  - Skill
  - Rating
- Join chat sessions after approval
- Leave reviews (1–5 stars + optional comment)
- Earn XP from participation

---

### 🧑‍🏫 Teaching (Trainer)
- Offer skills with defined levels
- Manage availability
- Accept / reject learning requests
- Conduct real-time chat sessions
- Earn XP based on:
  - Sessions completed
  - Reviews received

---

### 💬 Real-Time Chat
- Live messaging between learner and trainer
- Secure communication
- Core feature of the platform

---

### 🎮 Gamification System
- Earn XP by:
  - Participating in sessions
  - Teaching skills
  - Receiving positive feedback
- Level progression system
- Badges displayed on user profiles

---

### 🏆 Certificates
- Trainers can request certificates
- Requirements:
  - Minimum XP
  - Verified activity
- Admin approval required

---

### 🛠️ Admin Panel
- Manage users and skills
- Validate or reject certificate requests
- Monitor platform activity

---

## 🧩 System Architecture

- **Frontend:** Blade + TailwindCSS
- **Backend:** Laravel (MVC)
- **Database:** MySQL
- **Real-time:** Pusher / Laravel Echo

---

## ⚙️ Installation

```bash
git clone https://github.com/your-username/your-project.git
cd your-project
composer install
npm install
cp .env.example .env
php artisan key:generate