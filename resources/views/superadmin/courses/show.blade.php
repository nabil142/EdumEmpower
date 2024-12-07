<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Courses Details') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <!-- Tambahkan overflow-auto ke container utama -->
            <div class="bg-white overflow-auto p-10 shadow-sm sm:rounded-lg" style="max-height: 80vh;">
                
                <!-- Error messages -->
                @if($errors->any())
                    <div class="overflow-auto">
                        @foreach($errors->all() as $error)
                            <div class="py-3 w-full rounded-3xl bg-red-500 text-white">
                                {{ $error }}
                            </div>
                        @endforeach
                    </div>
                @endif

                <!-- Course Information -->
                <div class="flex flex-col gap-y-5">
                    <div class="item-card flex flex-row gap-y-10 justify-between items-center">
                        <div class="flex flex-row items-center gap-x-3">
                            <img src="{{ Storage::url($course->thumbnail) }}" alt="" class="rounded-2xl object-cover w-[200px] h-[150px]">
                            <div class="flex flex-col">
                                <h3 class="text-indigo-950 text-xl font-bold">{{ $course->name }}</h3>
                                <p class="text-slate-500 text-sm">{{ $course->category->name }}</p>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <p class="text-slate-500 text-sm">Students</p>
                            <h3 class="text-indigo-950 text-xl font-bold">{{ $course->users->count() }}</h3>
                        </div>
                        <div class="flex flex-row items-center gap-x-3">
                            <a href="{{ route('superadmin.courses.edit', $course) }}" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                                Edit Course
                            </a>
                            <form action="{{ route('superadmin.courses.destroy', $course) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="font-bold py-4 px-6 bg-red-700 text-white rounded-full">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <hr class="my-5">

                <!-- Course Videos Section -->
                <div class="flex flex-col gap-y-5">
                    <div class="flex flex-row justify-between items-center">
                        <div class="flex flex-col">
                            <h3 class="text-indigo-950 text-xl font-bold">Course Videos</h3>
                            <p class="text-slate-500 text-sm">{{ $course->course_videos->count() }} Total Videos</p>
                        </div>
                        <a href="{{ route('superadmin.course.add_video', $course->id) }}" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                            Add New Video
                        </a>
                    </div>

                    <!-- Video List -->
                    <div class="flex flex-col gap-y-5 overflow-auto" style="max-height: 60vh;">
                        @forelse($course->course_videos as $video)
                            <div class="item-card flex flex-row gap-y-10 justify-between items-center">
                                <div class="flex flex-row items-center gap-x-3">
                                    <iframe width="560" class="rounded-2xl object-cover w-[120px] h-[90px]" height="315" src="https://www.youtube.com/embed/{{ $video->path_video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    <div class="flex flex-col">
                                        <h3 class="text-indigo-950 text-xl font-bold">{{ $video->name }}</h3>
                                        <p class="text-slate-500 text-sm">{{ $video->course->name }}</p>
                                    </div>
                                </div>
                                <div class="flex flex-row items-center gap-x-3">
                                    <a href="{{ route('superadmin.course_videos.edit', $video) }}" class="font-bold py-4 px-6 bg-indigo-700 text-white rounded-full">
                                        Edit Video
                                    </a>
                                    <form action="{{ route('superadmin.course_videos.destroy', $video) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="font-bold py-4 px-6 bg-red-700 text-white rounded-full">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @empty
                            <p>No videos yet</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
