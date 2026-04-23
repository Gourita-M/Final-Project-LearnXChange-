<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Luminary Live Session</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/laravel-echo@1.15.0/dist/echo.iife.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "on-secondary-fixed": "#0d1c2e",
                        "surface-container-low": "#f2f4f6",
                        "on-secondary-container": "#57657a",
                        "on-primary-fixed-variant": "#003ea8",
                        "primary-container": "#2563eb",
                        "tertiary-fixed-dim": "#89ceff",
                        "surface-bright": "#f7f9fb",
                        "surface": "#f7f9fb",
                        "error": "#ba1a1a",
                        "error-container": "#ffdad6",
                        "inverse-surface": "#2d3133",
                        "on-tertiary": "#ffffff",
                        "surface-dim": "#d8dadc",
                        "secondary-fixed-dim": "#b9c7df",
                        "surface-container-highest": "#e0e3e5",
                        "outline-variant": "#c3c6d7",
                        "secondary-fixed": "#d5e3fc",
                        "on-primary-fixed": "#00174b",
                        "on-primary-container": "#eeefff",
                        "secondary": "#515f74",
                        "primary-fixed-dim": "#b4c5ff",
                        "on-secondary-fixed-variant": "#3a485b",
                        "on-primary": "#ffffff",
                        "on-tertiary-fixed": "#001e2f",
                        "on-background": "#191c1e",
                        "secondary-container": "#d5e3fc",
                        "surface-container-lowest": "#ffffff",
                        "on-surface-variant": "#434655",
                        "surface-variant": "#e0e3e5",
                        "on-secondary": "#ffffff",
                        "inverse-on-surface": "#eff1f3",
                        "tertiary-fixed": "#c9e6ff",
                        "background": "#f7f9fb",
                        "on-error": "#ffffff",
                        "on-error-container": "#93000a",
                        "inverse-primary": "#b4c5ff",
                        "on-tertiary-fixed-variant": "#004c6e",
                        "surface-tint": "#0053db",
                        "primary": "#2563eb",
                        "on-surface": "#191c1e",
                        "primary-fixed": "#dbe1ff",
                        "surface-container-high": "#e6e8ea",
                        "outline": "#737686",
                        "tertiary-container": "#0074a6",
                        "on-tertiary-container": "#e4f2ff",
                        "tertiary": "#005a82",
                        "surface-container": "#eceef0"
                    },
                    fontFamily: {
                        "headline": ["Manrope"],
                        "body": ["Inter"],
                        "label": ["Inter"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "2xl": "0.5rem",
                        /* Matching the 8px roundness request */
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        body {
            font-family: 'Inter', sans-serif;
        }

        h1,
        h2,
        h3 {
            font-family: 'Manrope', sans-serif;
        }
    </style>
</head>

<body class="bg-surface text-on-surface antialiased overflow-hidden">

    @include('layouts.navbar')
    @include('layouts.notification')
    @include('layouts.notificationError')
    
    <main class="pt-20 h-screen flex">

        <div class="flex-1 flex flex-col p-6 gap-6 bg-surface-container-low border-r border-outline-variant/10">

            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-extrabold tracking-tight text-on-surface">Advanced UI Architecture</h1>
                    <p class="text-on-surface-variant text-sm">Mentoring Session with {{$participants->teachername}}</p>
                </div>
                <div class="flex gap-3">
                    @role('learner')
                    <button id="review"
                        class="flex items-center gap-2 bg-error text-on-error px-6 py-2 rounded-lg font-bold hover:opacity-90 transition-all shadow-sm">
                        End Session
                    </button>
                    
                    @endrole
                    @role('teacher')
                    <form method="POST" action="{{Route('leave.season')}}">
                        @csrf
                        <input name="sessionid" type="hidden" value="{{ $sessionid }}">
                        <button type="submit"
                            class="flex items-center gap-2 bg-error text-on-error px-6 py-2 rounded-lg font-bold hover:opacity-90 transition-all shadow-sm">
                            End Session
                        </button>
                    </form>
                    <button id="review"
                        class="flex hidden items-center gap-2 bg-error text-on-error px-6 py-2 rounded-lg font-bold hover:opacity-90 transition-all shadow-sm">
                        End Session
                    </button>
                    @endrole
                </div>
            </div>

            <div
                class="flex-1 bg-surface-container-lowest rounded-lg shadow-sm border border-outline-variant/10 flex flex-col overflow-hidden">

                <div class="p-4 border-b border-outline-variant/10 flex justify-between items-center">
                    <h2 class="font-headline font-bold text-lg text-on-surface">Session Chat</h2>
                    <div class="flex gap-2">
                        <span
                            class="bg-primary/10 text-primary text-[10px] font-bold px-2 py-1 rounded-full uppercase tracking-wider">
                            Live
                        </span>
                    </div>
                </div>

                <div id="chat-box" class="flex-1 overflow-y-auto p-6 space-y-6">


                </div>

                <div class="p-6 bg-white border-t border-outline-variant/10">

                    <div class="relative flex items-center">

                        <input id="messageInput"
                            class="w-full bg-surface-container-low border-none rounded-lg py-4 pl-4 pr-24 text-sm focus:ring-2 focus:ring-primary/20 placeholder:text-on-surface-variant"
                            placeholder="Type your message..." type="text" />

                        <div class="absolute right-2 flex gap-1">

                            <button class="p-2 text-on-surface-variant hover:text-primary transition-colors">
                                <span class="material-symbols-outlined">sentiment_satisfied</span>
                            </button>

                            <button id="sendBtn"
                                class="p-2 bg-primary text-on-primary rounded-lg shadow-sm hover:opacity-90 transition-all">
                                <span class="material-symbols-outlined text-sm">send</span>
                            </button>

                        </div>
                    </div>

                </div>

            </div>
        </div>

<div id="reviewPopup" class="fixed inset-0 bg-black/40 hidden flex items-center justify-center">
    <div class="bg-white p-6 rounded-xl w-full max-w-md relative">
        
        <button id="closeReview" class="absolute top-2 right-3 text-xl">✕</button>

        <h2 class="text-xl font-bold mb-4">Leave a Review</h2>

        <form method="POST" action="{{Route('submit.review')}}" class="space-y-4">
            @csrf
            <input type="hidden" value="{{ $sessionid }}" name="connectsessionid">
            
            <input type="hidden" value="{{ $participants->teacherid }}" name="teacherid">
            <select name="revieew" class="w-full border p-2 rounded-lg" required>
                <option value="">Select Rating</option>
                <option value="5">⭐⭐⭐⭐⭐</option>
                <option value="4">⭐⭐⭐⭐</option>
                <option value="3">⭐⭐⭐</option>
                <option value="2">⭐⭐</option>
                <option value="1">⭐</option>
            </select>

            <textarea 
                name="comment"
                placeholder="Write your review..." 
                class="w-full border p-2 rounded-lg"
                required
            ></textarea>

            <button type="submit" class="bg-primary text-white w-full py-2 rounded-lg">
                Submit Review
            </button>
        </form>
    </div>
</div>
        <aside class="w-96 bg-surface flex flex-col">

            <div class="flex-1 overflow-y-auto p-6 space-y-6">
                <h3 class="text-xs font-bold text-on-surface-variant uppercase tracking-widest pt-4">Participants (2)
                </h3>
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="relative">
                                <img alt="Sarah J." class="w-10 h-10 rounded-full"
                                    src="{{$participants->teacherprofile}}" />
                                <div
                                    class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 border-2 border-white rounded-full">
                                </div>
                            </div>
                            <div>
                                <p class="text-sm font-bold">{{$participants->teachername}}</p>
                                <p class="text-[10px] text-on-surface-variant">Teacher</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="relative">
                                <img alt="You" class="w-10 h-10 rounded-full"
                                    src="{{$participants->learnerprofile}}" />
                                <div
                                    class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 border-2 border-white rounded-full">
                                </div>
                            </div>
                            <div>
                                <p class="text-sm font-bold">{{$participants->learnername}}</p>
                                <p class="text-[10px] text-on-surface-variant">Student</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </main>
    <input id="sessionid" type="hidden" value="{{ $sessionid }}">

    <script>

        // logic dyal Messages i may add Something new or edit it
        const reviewPopup = document.getElementById('reviewPopup');
        const review = document.getElementById('review');
        const closeReview = document.getElementById('closeReview');
        
        review.addEventListener('click', ()=> {
            reviewPopup.classList.remove('hidden');
        })

        closeReview.addEventListener('click', ()=> {
            reviewPopup.classList.add('hidden');
        })

        const sessionid = document.getElementById('sessionid').value;

        //     document.getElementById('sendBtn').onclick = () => {
        //     const message = document.getElementById('messageInput').value;

        //     fetch('/api/send-message', {
        //         method: 'POST',
        //         headers: {
        //             'Content-Type': 'application/json',
        //             'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        //         },
        //         body: JSON.stringify({
        //             "content": message,
        //             "connect_sessions_id": sessionid,
        //             "sender_id": 3
        //         })
        //     });

        //     document.getElementById('messageInput').value = '';
        // };

        let lastMessageId = 0;
        const chatBox = document.getElementById("chat-box");


        async function loadMessages() {
            const res = await fetch(`/api/sessions/${sessionid}/messages`);
            const data = await res.json();

            chatBox.innerHTML = "";

            data.messages.forEach(message => {
                renderMessage(message);
                lastMessageId = Math.max(lastMessageId, message.id);
            });

            scrollToBottom();
        }

        async function refreshMessages() {
            const res = await fetch(`/api/sessions/${sessionid}/messages`);
            const data = await res.json();

            let hasNew = false;

            data.messages.forEach(message => {
                if (message.id > lastMessageId) {
                    renderMessage(message);
                    lastMessageId = message.id;
                    hasNew = true;
                }
            });

            if (hasNew) {
                scrollToBottom();
            }
        }

        function renderMessage(message) {
            const isMine = message.sender_id === {{ auth()->id() }};

            const div = document.createElement("div");

            div.className = isMine ?
                "flex flex-row-reverse gap-3" :
                "flex gap-3";

            div.innerHTML = `
    <div class="space-y-1 ${isMine ? 'text-right' : ''}">
        
        <div class="flex ${isMine ? 'flex-row-reverse' : ''} items-center gap-2">
            <span class="text-xs font-bold">
                ${isMine ? 'You' : (message.sender?.name ?? 'User')}
            </span>

            ${
                !isMine 
                ? `
                <form method="POST" action="{{ Route('report.message')}}">
                    <input type="hidden" name="_token" value="${document.querySelector('meta[name="csrf-token"]').content}">
                    <input type="hidden" name="message_id" value="${message.id}">
                    <input type="hidden" name="sessionid" value="{{ $sessionid }}">

                    <button type="submit"
                        class="text-red-500 text-xs hover:underline">
                        Report
                    </button>
                </form>
                `
                : ''
            }
        </div>

        <div class="${isMine 
            ? 'bg-blue-500 text-white' 
            : 'bg-gray-200 text-black'
        } p-4 rounded-lg max-w-xl">
            ${message.content}
        </div>

    </div>
`;

            chatBox.appendChild(div);
        }

        function scrollToBottom() {
            chatBox.scrollTop = chatBox.scrollHeight;
        }

        async function sendMessage() {

            const senderid = {{ auth()->id() }};
            const input = document.querySelector("input[type=text]");
            const message = document.getElementById('messageInput').value;

            if (!message.trim()) return;

            fetch('/api/send-message', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({
                    "content": message,
                    "connect_sessions_id": sessionid,
                    "sender_id": senderid
                })
            });
            
            document.getElementById('messageInput').value = '';

            refreshMessages();
        }
        document.querySelector("button.bg-primary").addEventListener("click", sendMessage);

        document.getElementById('messageInput').addEventListener("keypress", function(e) {
            if (e.key === "Enter") sendMessage();
        });

        loadMessages();

        setInterval(refreshMessages, 1000);
    </script>
</body>

</html>
