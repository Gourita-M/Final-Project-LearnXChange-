<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Settings - LearnXChange</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        h1, h2, h3, h4 {
            font-family: 'Manrope', sans-serif;
        }

        .tonal-layering {
            background: linear-gradient(to bottom, #f8fafc, #f1f5f9);
        }

        /* Brand colors */
        .btn-primary {
            background-color: #2563eb;
            color: white;
        }

        .btn-primary:hover {
            opacity: 0.9;
        }

        .text-primary {
            color: #2563eb;
        }

        .ring-primary {
            --tw-ring-color: rgba(37, 99, 235, 0.2);
        }

        .border-top-cyan {
            border-top: 4px solid #06b6d4;
        }

        .skill-tag-cyan {
            background-color: #ecf9fd;
            color: #0891b2;
            border-color: #cffafe;
        }

        .skill-tag-cyan:hover {
            color: #164e63;
        }
    </style>
</head>

<body class="bg-slate-50 mt-16 font-body text-gray-900 antialiased">

    @include('layouts.navbar')
    @include('layouts.notification')
    @include('layouts.notificationError')

    <main class="flex-1 md:ml-40 bg-slate-50 p-6 md:p-10 lg:p-12">
        <div class="max-w-4xl mx-auto space-y-8">

            <!-- Profile Header -->
            <div class="flex flex-col md:flex-row items-start md:items-center gap-6 pb-8 border-b border-gray-200">
                <div class="relative">
                    <div class="w-24 h-24 md:w-32 md:h-32 rounded-full overflow-hidden border-4 border-white shadow-xl bg-gray-100">

                        @if ($user->profilepic)
                            <img src="{{ $user->profilepic }}" alt="profile" class="w-full h-full object-cover" />
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-blue-100 text-blue-600 text-3xl font-bold">
                                {{ strtoupper(substr($user->firstname, 0, 1)) }}
                            </div>
                        @endif

                    </div>
                    <button id="profilepicbtn"
                        class="absolute bottom-0 right-0 btn-primary p-2 rounded-full shadow-lg hover:opacity-90 transition-all active:scale-90 flex items-center justify-center">
                        <span class="material-symbols-outlined text-sm">photo_camera</span>
                    </button>
                </div>
                <div class="space-y-1">
                    <h1 class="text-3xl font-extrabold tracking-tight text-gray-900">
                        {{ $user->firstname }} {{ $user->lastname }}
                    </h1>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                <!-- Main Content -->
                <div class="lg:col-span-2 space-y-8">

                    <!-- Personal Information Section -->
                    <section class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 space-y-6">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="material-symbols-outlined text-primary">badge</span>
                            <h3 class="text-xl font-bold text-gray-900">Personal Information</h3>
                        </div>
                        <form method="POST" action="{{ Route('edit.info') }}">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                                <div class="flex flex-col gap-1.5">
                                    <label class="text-xs font-bold text-gray-500 uppercase tracking-wide">First Name</label>
                                    <input name="firstname"
                                        class="w-full bg-gray-50 border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                                        type="text" value="{{ $user->firstname }}" />
                                </div>

                                <div class="flex flex-col gap-1.5">
                                    <label class="text-xs font-bold text-gray-500 uppercase tracking-wide">Last Name</label>
                                    <input name="lastname"
                                        class="w-full bg-gray-50 border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                                        type="text" value="{{ $user->lastname }}" />
                                </div>

                                <div class="flex flex-col gap-1.5 md:col-span-2">
                                    <label class="text-xs font-bold text-gray-500 uppercase tracking-wide">Bio</label>
                                    <textarea name="bio"
                                        class="w-full bg-gray-50 border border-gray-300 rounded-lg px-4 py-2.5 text-sm focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all resize-none"
                                        rows="4">{{ $user->Bio }}</textarea>
                                </div>

                            </div>

                            <div class="mt-6 flex justify-end">
                                <button type="submit"
                                    class="px-6 py-2.5 btn-primary text-sm font-bold rounded-lg shadow-sm hover:opacity-90 transition-all">
                                    Edit Profile
                                </button>
                            </div>
                        </form>
                    </section>

                    <!-- Account Settings Section -->
                    <section class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 space-y-6">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="material-symbols-outlined text-primary">settings_account_box</span>
                            <h3 class="text-xl font-bold text-gray-900">Account Settings</h3>
                        </div>
                        <div class="space-y-4">
                            <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg border border-gray-100">
                                <div class="flex items-center gap-4">
                                    <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-primary">
                                        <span class="material-symbols-outlined">lock_reset</span>
                                    </div>
                                    <div>
                                        <p class="font-bold text-sm text-gray-900">Change Password</p>
                                        <p class="text-[11px] text-gray-500">Update your security credentials</p>
                                    </div>
                                </div>
                                <button id="managepass"
                                    class="text-primary font-bold text-xs hover:underline uppercase tracking-wider">Manage</button>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- Sidebar -->
                <div class="space-y-8">
                    @role('learner')
                        <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 space-y-4">
                            <div class="flex items-center justify-between">
                                <h4 class="font-bold text-gray-900 text-sm uppercase tracking-wide">Skills Learning</h4>
                                <a href="skills"
                                    class="text-primary hover:bg-blue-50 p-1 rounded-full transition-colors">
                                    <span class="material-symbols-outlined text-sm">add</span>
                                </a>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-blue-50 text-blue-600 rounded-full text-[11px] font-bold flex items-center gap-2 border border-blue-100">
                                    UI Design
                                    <span class="material-symbols-outlined text-[14px] cursor-pointer hover:text-blue-800">close</span>
                                </span>
                                <span class="px-3 py-1 bg-blue-50 text-blue-600 rounded-full text-[11px] font-bold flex items-center gap-2 border border-blue-100">
                                    React
                                    <span class="material-symbols-outlined text-[14px] cursor-pointer hover:text-blue-800">close</span>
                                </span>
                                <span class="px-3 py-1 bg-blue-50 text-blue-600 rounded-full text-[11px] font-bold flex items-center gap-2 border border-blue-100">
                                    Framer
                                    <span class="material-symbols-outlined text-[14px] cursor-pointer hover:text-blue-800">close</span>
                                </span>
                            </div>
                        </div>
                        <input id="popupbtn" type="hidden">
                    @endrole

                    @role('teacher')
                        <div class="bg-white p-6 rounded-xl shadow-sm border-top-cyan border border-gray-200 space-y-4">
                            <div class="flex items-center justify-between">
                                <h4 class="font-bold text-gray-900 text-sm uppercase tracking-wide">Skills Teaching</h4>
                                <button id="popupbtn"
                                    class="text-cyan-600 hover:bg-cyan-50 p-1 rounded-full transition-colors">
                                    <span class="material-symbols-outlined text-sm">add</span>
                                </button>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                @foreach ($userskills as $userskill)
                                    <form method="POST" action="{{ Route('remove.skill') }}">
                                        @csrf
                                        <input name="skillid" type="hidden" value="{{ $userskill->skillid }}">
                                        <span class="px-3 py-1 skill-tag-cyan rounded-full text-[11px] font-bold flex items-center gap-2 border border-cyan-100">
                                            {{ $userskill->name }}
                                            <button type="submit"
                                                class="material-symbols-outlined text-[14px] cursor-pointer hover:text-cyan-900">close</button>
                                        </span>
                                    </form>
                                @endforeach
                            </div>
                        </div>
                    @endrole

                </div>
            </div>

        </div>
    </main>
    <!-- Add Skill Popup -->
    <div id="skillpopup" class="fixed inset-0 bg-black/40 backdrop-blur-sm hidden flex items-center justify-center z-50">
        <div class="bg-white w-full max-w-lg rounded-3xl p-8 shadow-xl relative">
            <button class="closepopup absolute top-4 right-4 text-gray-400 hover:text-red-500 text-xl cursor-pointer">
                ✕
            </button>

            <h2 class="text-2xl font-extrabold mb-2 text-gray-900">
                Add New Skill
            </h2>
            <p class="text-sm text-gray-500 mb-6">
                Let learners discover what you can teach
            </p>

            <form method="POST" action="{{ Route('create.skill') }}" class="space-y-5">
                @csrf
                <div>
                    <label class="block text-sm font-medium text-gray-900 mb-1">Skill Name</label>
                    <input name="name" type="text"
                        class="w-full rounded-xl border border-gray-300 bg-white px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-900 mb-1">Category</label>
                    <select name="categories_id" required
                        class="w-full rounded-xl border border-gray-300 bg-white px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none">
                        <option value="" disabled selected>Select</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-900 mb-1">Level</label>
                    <select name="level"
                        class="w-full rounded-xl border border-gray-300 bg-white px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none">
                        <option value="Beginner">Beginner</option>
                        <option value="Intermediate">Intermediate</option>
                        <option value="Advanced">Advanced</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-900 mb-1">Years of Experience</label>
                    <input name="years" type="number"
                        class="w-full rounded-xl border border-gray-300 bg-white px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-900 mb-1">Description</label>
                    <textarea name="description" rows="3"
                        class="w-full rounded-xl border border-gray-300 bg-white px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none"></textarea>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-900 mb-1">Skill Icon</label>
                    <input name="icon_url" type="text"
                        class="w-full rounded-xl border border-gray-300 bg-white px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none">
                </div>

                <div class="flex gap-3 pt-4">
                    <button type="button"
                        class="closepopup flex-1 py-3 rounded-xl bg-gray-100 text-gray-600 font-bold hover:bg-gray-200 cursor-pointer transition-colors">
                        Cancel
                    </button>
                    <button type="submit" class="flex-1 py-3 rounded-xl btn-primary font-bold hover:opacity-90 transition-all">
                        Save Skill
                    </button>
                </div>

            </form>
        </div>
    </div>

    <!-- Change Password Popup -->
    <div id="passwordPopup" class="fixed inset-0 bg-black/40 backdrop-blur-sm hidden flex items-center justify-center z-50">
        <div class="bg-white w-full max-w-md rounded-3xl p-8 shadow-xl relative">

            <button class="closePasswordPopup absolute top-4 right-4 text-gray-400 hover:text-red-500 text-xl cursor-pointer">
                ✕
            </button>

            <h2 class="text-2xl font-extrabold mb-2 text-gray-900">
                Change Password
            </h2>
            <p class="text-sm text-gray-500 mb-6">
                Update your account password securely
            </p>

            <form method="POST" action="{{ route('password.change') }}" class="space-y-5">
                @csrf
                <div>
                    <label class="block text-sm font-medium text-gray-900 mb-1">Current Password</label>
                    <input name="current_password" type="password" required
                        class="w-full rounded-xl border border-gray-300 bg-gray-50 px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-900 mb-1">New Password</label>
                    <input name="new_password" type="password" required
                        class="w-full rounded-xl border border-gray-300 bg-gray-50 px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-900 mb-1">Confirm Password</label>
                    <input name="new_password_confirmation" type="password" required
                        class="w-full rounded-xl border border-gray-300 bg-gray-50 px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none">
                </div>

                <div class="flex gap-3 pt-4">
                    <button type="button"
                        class="closePasswordPopup flex-1 py-3 rounded-xl bg-gray-100 text-gray-600 font-bold hover:bg-gray-200 cursor-pointer transition-colors">
                        Cancel
                    </button>
                    <button type="submit" class="flex-1 py-3 rounded-xl btn-primary font-bold hover:opacity-90 transition-all">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Update Profile Picture Popup -->
    <div id="profilePicPopup" class="fixed inset-0 bg-black/40 backdrop-blur-sm hidden flex items-center justify-center z-50">
        <div class="bg-white w-full max-w-md rounded-3xl p-8 shadow-xl relative">

            <button class="closeProfilePopup absolute top-4 right-4 text-gray-400 hover:text-red-500 text-xl cursor-pointer">
                ✕
            </button>

            <h2 class="text-2xl font-extrabold mb-2 text-gray-900">
                Update Profile Picture
            </h2>
            <p class="text-sm text-gray-500 mb-6">
                Paste your image URL below
            </p>

            <form method="POST" action="{{ route('change.profilepic') }}" class="space-y-5">
                @csrf

                <div>
                    <label class="block text-sm font-medium text-gray-900 mb-1">Image URL</label>
                    <input name="profilepic" type="text" placeholder="https://example.com/avatar.jpg"
                        value="{{ $user->profilepic }}"
                        class="w-full rounded-xl border border-gray-300 bg-gray-50 px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none">
                </div>

                <div class="flex gap-3 pt-4">
                    <button type="button"
                        class="closeProfilePopup flex-1 py-3 rounded-xl bg-gray-100 text-gray-600 font-bold hover:bg-gray-200 cursor-pointer transition-colors">
                        Cancel
                    </button>
                    <button type="submit" class="flex-1 py-3 rounded-xl btn-primary font-bold hover:opacity-90 transition-all">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Profile Picture Popup Logic
        const profilePicPopup = document.getElementById('profilePicPopup');
        const closeProfilePopup = document.querySelectorAll('.closeProfilePopup');
        const profilepicbtn = document.getElementById('profilepicbtn');

        profilepicbtn.addEventListener('click', () => {
            profilePicPopup.classList.remove('hidden');
        })

        closeProfilePopup.forEach((u) => {
            u.addEventListener('click', () => {
                profilePicPopup.classList.add('hidden');
            })
        })

        // Skill Popup Logic
        const skillpopup = document.getElementById('skillpopup');
        const popupbtn = document.getElementById('popupbtn');
        const closepopup = document.querySelectorAll('.closepopup');

        popupbtn.addEventListener('click', () => {
            skillpopup.classList.remove('hidden');
        })

        closepopup.forEach(btn => {
            btn.addEventListener('click', () => {
                skillpopup.classList.add('hidden');
            })
        })

        // Password Popup Logic
        const passwordPopup = document.getElementById('passwordPopup');
        const managepass = document.getElementById('managepass');
        const closePasswordPopup = document.querySelectorAll('.closePasswordPopup');

        managepass.addEventListener('click', () => {
            passwordPopup.classList.remove('hidden');
        })

        closePasswordPopup.forEach(u => {
            u.addEventListener('click', () => {
                passwordPopup.classList.add('hidden');
            })
        })
    </script>
</body>

</html>