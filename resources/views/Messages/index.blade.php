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

        /* Brand primary color */
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

        .bg-error-custom {
            background-color: #ba1a1a;
            color: white;
        }
    </style>
</head>

<body class="bg-slate-50 text-gray-900 antialiased overflow-hidden">

    @include('layouts.navbar')
    @include('layouts.notification')
    @include('layouts.notificationError')
    
    <main class="pt-20 h-screen flex">

        <div class="flex-1 flex flex-col p-6 gap-6 bg-gray-100 border-r border-gray-200">

            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-extrabold tracking-tight text-gray-900">Mentoring Session with {{$participants->teachername}}</h1>
                </div>
                <div class="flex gap-3">
                    @role('learner')
                    <button id="review"
                        class="flex items-center gap-2 bg-error-custom px-6 py-2 rounded-lg font-bold hover:opacity-90 transition-all shadow-sm">
                        End Session
                    </button>
                    
                    @endrole
                    @role('teacher')
                    <form method="POST" action="{{Route('leave.season')}}">
                        @csrf
                        <input name="sessionid" type="hidden" value="{{ $sessionid }}">
                        <button type="submit"
                            class="flex items-center gap-2 bg-error-custom px-6 py-2 rounded-lg font-bold hover:opacity-90 transition-all shadow-sm">
                            End Session
                        </button>
                    </form>
                    <button id="review"
                        class="flex hidden items-center gap-2 bg-error-custom px-6 py-2 rounded-lg font-bold hover:opacity-90 transition-all shadow-sm">
                        End Session
                    </button>
                    @endrole
                </div>
            </div>

            <div class="flex-1 bg-white rounded-lg shadow-sm border border-gray-200 flex flex-col overflow-hidden">

                <div class="p-4 border-b border-gray-200 flex justify-between items-center">
                    <h2 class="font-bold text-lg text-gray-900">Session Chat</h2>
                    <div class="flex gap-2">
                        <span class="bg-blue-100 text-blue-700 text-[10px] font-bold px-2 py-1 rounded-full uppercase tracking-wider">
                            Live
                        </span>
                    </div>
                </div>

                <div id="chat-box" class="flex-1 overflow-y-auto p-6 space-y-6">
                </div>

                <div class="p-6 bg-white border-t border-gray-200">

                    <div class="relative flex items-center">

                        <input id="messageInput"
                            class="w-full bg-gray-50 border border-gray-300 rounded-lg py-4 pl-4 pr-24 text-sm focus:ring-2 focus:ring-blue-500 focus:border-transparent placeholder:text-gray-500"
                            placeholder="Type your message..." type="text" />

                        <div class="absolute right-2 flex gap-1">
                            <button id="sendBtn"
                                class="p-2 btn-primary rounded-lg shadow-sm hover:opacity-90 transition-all">
                                <span class="material-symbols-outlined text-sm">send</span>
                            </button>

                        </div>
                    </div>

                </div>

            </div>
        </div>

        <!-- Review Popup Modal -->
        <div id="reviewPopup" class="fixed inset-0 bg-black/40 hidden flex items-center justify-center z-50">
            <div class="bg-white p-6 rounded-xl w-full max-w-md relative shadow-lg">
                
                <button id="closeReview" class="absolute top-2 right-3 text-xl text-gray-500 hover:text-gray-700">✕</button>

                <h2 class="text-xl font-bold mb-4 text-gray-900">Leave a Review</h2>

                <form method="POST" action="{{Route('submit.review')}}" class="space-y-4">
                    @csrf
                    <input type="hidden" value="{{ $sessionid }}" name="connectsessionid">
                    
                    <input type="hidden" value="{{ $participants->teacherid }}" name="teacherid">
                    <select name="revieew" class="w-full border border-gray-300 p-2 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
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
                        class="w-full border border-gray-300 p-2 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        required
                    ></textarea>

                    <button type="submit" class="btn-primary w-full py-2 rounded-lg font-semibold">
                        Submit Review
                    </button>
                </form>
            </div>
        </div>

        <!-- Participants Sidebar -->
        <aside class="w-96 bg-slate-50 flex flex-col border-l border-gray-200">

            <div class="flex-1 overflow-y-auto p-6 space-y-6">
                <h3 class="text-xs font-bold text-gray-500 uppercase tracking-widest pt-4">Participants (2)</h3>
                <div class="space-y-4">
                    <!-- Teacher -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="relative">
                                <img alt="Sarah J." class="w-10 h-10 rounded-full object-cover"
                                    src="{{$participants->teacherprofile}}" />
                                <div class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 border-2 border-white rounded-full">
                                </div>
                            </div>
                            <div>
                                <p class="text-sm font-bold text-gray-900">{{$participants->teachername}}</p>
                                <p class="text-[10px] text-gray-500">Teacher</p>
                            </div>
                        </div>
                    </div>
                    <!-- Student -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="relative">
                                <img alt="You" class="w-10 h-10 rounded-full object-cover"
                                    src="{{$participants->learnerprofile}}" />
                                <div class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 border-2 border-white rounded-full">
                                </div>
                            </div>
                            <div>
                                <p class="text-sm font-bold text-gray-900">{{$participants->learnername}}</p>
                                <p class="text-[10px] text-gray-500">Student</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </main>

    <input id="sessionid" type="hidden" value="{{ $sessionid }}">

    <script>

        // Review Popup Logic
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

        let lastMessageId = 0;
        const chatBox = document.getElementById("chat-box");

        // Load all messages initially
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

        // Refresh and load new messages
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

        // Render individual message
        function renderMessage(message) {
            const isMine = message.sender_id === {{ auth()->id() }};

            const div = document.createElement("div");

            div.className = isMine ?
                "flex flex-row-reverse gap-3" :
                "flex gap-3";

            div.innerHTML = `
                <div class="space-y-1 ${isMine ? 'text-right' : ''}">
                    
                    <div class="flex ${isMine ? 'flex-row-reverse' : ''} items-center gap-2">
                        <span class="text-xs font-bold text-gray-900">
                            ${isMine ? 'You' : (message.sender?.name ?? 'User')}
                        </span>

                        ${
                            !isMine 
                            ? \`
                            <form method="POST" action="{{ Route('report.message')}}">
                                <input type="hidden" name="_token" value="\${document.querySelector('meta[name="csrf-token"]').content}">
                                <input type="hidden" name="message_id" value="\${message.id}">
                                <input type="hidden" name="sessionid" value="{{ $sessionid }}">

                                <button type="submit"
                                    class="text-red-500 text-xs hover:underline">
                                    Report
                                </button>
                            </form>
                            \`
                            : ''
                        }
                    </div>

                    <div class="\${isMine 
                        ? 'bg-blue-500 text-white' 
                        : 'bg-gray-200 text-gray-900'
                    } p-4 rounded-lg max-w-xl">
                        \${message.content}
                    </div>

                </div>
            `;

            chatBox.appendChild(div);
        }

        // Scroll to bottom of chat
        function scrollToBottom() {
            chatBox.scrollTop = chatBox.scrollHeight;
        }

        // Send message
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

        // Send button click
        document.querySelector("button.btn-primary").addEventListener("click", sendMessage);

        // Enter key to send
        document.getElementById('messageInput').addEventListener("keypress", function(e) {
            if (e.key === "Enter") sendMessage();
        });

        // Load messages on page load
        loadMessages();

        // Refresh messages every 1 second
        setInterval(refreshMessages, 1000);
    </script>
</body>

</html>