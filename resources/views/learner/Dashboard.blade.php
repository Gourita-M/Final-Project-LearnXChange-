
    <div id="learningpopup" class="fixed inset-0 bg-black/50 backdrop-blur-sm hidden z-50 flex items-center justify-center">
    <div class="bg-surface-container-lowest rounded-3xl shadow-2xl w-full max-w-lg p-8 relative">
        <button id="closeModalBtn" class="absolute top-4 right-4 text-on-surface hover:text-primary text-2xl">&times;</button>
        <h2 class="text-2xl font-bold text-on-surface mb-6">Request a Learning Session</h2>
        <form method="POST" action="{{ Route('request.learning') }}" id="learningRequestForm" class="space-y-4">
        @csrf
            <div>
                <label class="block text-sm font-medium text-on-surface mb-1">Description</label>
                <textarea name="description" required
                    class="w-full border border-outline rounded-xl p-3 text-sm focus:ring-2 focus:ring-primary/40 focus:border-transparent"></textarea>
            </div>
            <div>
                <label class="block text-sm font-medium text-on-surface mb-1">Goal Description (optional)</label>
                <textarea name="goal_description"
                    class="w-full border border-outline rounded-xl p-3 text-sm focus:ring-2 focus:ring-primary/40 focus:border-transparent"></textarea>
            </div>
            <div>
                <label class="block text-sm font-medium text-on-surface mb-1">Preferred Session Type</label>
                <select name="preferred_session_type" required
                    class="w-full border border-outline rounded-xl p-3 text-sm focus:ring-2 focus:ring-primary/40 focus:border-transparent">
                    <option value="">Select session type</option>
                    <option value="online">Online</option>
                    <option value="offline">Offline</option>
                    <option value="hybrid">Hybrid</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-on-surface mb-1">Teacher</label>
                <select name="teacher_id" required
                    class="w-full border border-outline rounded-xl p-3 text-sm focus:ring-2 focus:ring-primary/40 focus:border-transparent">
                    <option value="">Select a teacher</option>
                    <option value="1">Sarah Mitchell</option>
                    <option value="2">David Chen</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-on-surface mb-1">Skill</label>
                <select name="skill_id" required
                    class="w-full border border-outline rounded-xl p-3 text-sm focus:ring-2 focus:ring-primary/40 focus:border-transparent">
                    <option value="">Select a skill</option>
                    <option value="1">UI Design</option>
                    <option value="2">Growth Marketing</option>
                </select>
            </div>
            <button type="submit"
                class="w-full py-3 bg-primary text-on-primary rounded-xl font-bold hover:bg-primary-container transition-all">Submit
                Request</button>
        </form>
    </div>
</div>

<script src="{{ asset('js/learnerDashboard.js') }}"></script>
</body>

</html>
