<script>
    function getCookieValue(cookieName) {
        const match = document.cookie.match(new RegExp('(^| )' + cookieName + '=([^;]+)'));
        if (!match) return null;
        return decodeURIComponent(match[2]);
    }

    function getCookie(name) {
        let match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
        if (match) return decodeURIComponent(match[2]);
        return null;
    }

    function setCookie(name, value, days = 30) {
        const d = new Date();
        d.setTime(d.getTime() + (days * 24 * 60 * 60 * 1000));
        document.cookie = name + "=" + encodeURIComponent(value) + ";expires=" + d.toUTCString() + ";path=/";
    }

    document.addEventListener('DOMContentLoaded', () => {
        const userName = getCookie('studentName');
        const userClass = getCookie('studentClass');

        if (!userName || !userClass) {
            document.getElementById('userModal').classList.remove('hidden');
            document.getElementById('userModal').classList.add('flex');
        } else {
            updateNavbar(userName, userClass);
        }
    });

    document.getElementById('skipButton').addEventListener('click', (e) => {
        e.preventDefault();
        document.cookie = `studentName=Guest; path=/; max-age=31536000`;
        document.cookie = `studentClass=Guest; path=/; max-age=31536000`;
        document.getElementById('userModal').classList.add('hidden');
        document.getElementById('userModal').classList.remove('flex');
    });
    document.getElementById('saveButton').addEventListener('click', (e) => {
        e.preventDefault();
        const name = document.getElementById('studentName').value.trim();
        const userClass = document.getElementById('studentClass').value.trim();

        if (name && userClass) {
            setCookie('studentName', name);
            setCookie('studentClass', userClass);
            updateNavbar(name, userClass);
            document.getElementById('userModal').classList.add('hidden');
            document.getElementById('userModal').classList.remove('flex');
        } else {
            if (!name && !userClass) {
                document.getElementById('alertStudentName').classList.remove('hidden');
                document.getElementById('alertStudentClass').classList.remove('hidden');
            } else if (!name) {
                document.getElementById('alertStudentName').classList.remove('hidden');
                document.getElementById('alertStudentClass').classList.add('hidden');
            } else if (!userClass) {
                document.getElementById('alertStudentClass').classList.remove('hidden');
                document.getElementById('alertStudentName').classList.add('hidden');
            }
        }
    });

    function updateNavbar(name, userClass) {
        const navUserSection = document.getElementById('navUserSection');
        if (navUserSection) {
            navUserSection.innerHTML = `
            Hello, ${name} (${userClass})
            <button onclick="changeUser()" class="ml-2 underline text-blue-600">Change</button>
        `;
        }
    }

    function changeUser() {
        document.getElementById('userModal').classList.remove('hidden');
        document.getElementById('userModal').classList.add('flex');
    }
</script>
