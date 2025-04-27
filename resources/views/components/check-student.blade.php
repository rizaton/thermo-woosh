<div id="userModal" class="fixed inset-0 rounded-lg bg-information-prompt hidden items-center justify-center z-50">
    <div class="bg-white p-6 rounded shadow-md w-full max-w-md mx-auto">
        <h2 class="text-xl font-bold mb-4 text-center">Masukkan Informasi Siswa</h2>
        @csrf
        <form id="userForm" class="flex flex-col gap-4">
            <input type="text" id="studentName" placeholder="Masukkan Nama Lengkap" class="border p-2 rounded">
            <div id="alertStudentName" class="hidden text-red-500 text-sm">Nama tidak boleh kosong</div>
            <input type="text" id="studentClass" placeholder="Masukkan Kelas" class="border p-2 rounded">
            <div id="alertStudentClass" class="hidden text-red-500 text-sm">Kelas tidak boleh kosong</div>
            <div class="flex justify-end space-x-2">
                <button type="submit" id="skipButton"
                    class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">Lewati</button>
                <button type="submit" id="saveButton"
                    class="px-4 py-2 bg-quiz-light-button hover:bg-quiz-light-button-hover text-quiz-light-text">Simpan
                    Data</button>
            </div>
        </form>
    </div>
</div>
