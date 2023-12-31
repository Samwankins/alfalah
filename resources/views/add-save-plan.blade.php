<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            إضافة خطة حفظ
        </h2>
    </x-slot>

    <div class="flex mt-2">
        @if ($errors->any())
            <div class="bg-red-500 mx-auto my-0.5 rounded px-3 py-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-white">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>


    @if (session('success'))
        <div class="flex mt-2">
            <div class="bg-green-900 mx-auto my-0.5 rounded px-3 py-4">
                <p class="text-white">{{ session('success') }}</p>
            </div>
        </div>
    @endif


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('create-save-plan') }}" method="POST">
                        @csrf
                        <div>اسم الخطة على الموقع: <input type="text" name="name" required></div>
                        <div>اسم الخطة في الملف: <input type="text" name="juz_text" required></div>
                        <div>عدد الأيام في الملف: <input type="text" name="day_text" required></div>
                        <div>المحفوظ الأسبوعي في الملف: <input type="text" name="face_text" required></div>
                        <div>اتجاه الحفظ:
                            <select name="direction" required>
                                <option selected value="1">من الفاتحة إلى الناس</option>
                                <option value="0">من الناس إلى الفاتحة</option>
                            </select>
                        </div>
                        <div>رقم الجزء: <input type="number" name="juz" min="1" max="30"
                                value="1" required>
                        </div>
                        <div>عدد أوجه الحفظ اليومي: <input type="number" name="save_faces" step="0.5"
                                min="0.5" max="1208" value="0.5" required>
                        </div>
                        <div>عدد أوجه التثبيت (إن وجد): <input type="number" name="confirm_faces" step="0.5"
                                min="0" max="1208" value="0">
                        </div>
                        <div>عدد أيام التسميع في كل أسبوع: <input type="number" name="days" step="1"
                                min="1" max="7" value="1" required>
                        </div>
                        <div>تكرار مقدار الحفظ نفسه في الأسبوع الواحد <input type="checkbox" name="is_same"
                                value="1"></div>
                        <div style="margin-top: 5px">
                            <input type="submit" value="إضافة الخطة">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
