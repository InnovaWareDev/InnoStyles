<div x-data="{ modelOpen: false }">
    @isset($openSidepanel)
        {{ $openSidepanel }}
    @endisset
    <div x-cloak x-show="modelOpen" @click="modelOpen = false" class="fixed inset-0 bg-gray-500 bg-opacity-40 z-20" aria-hidden="true"></div>
    <div x-cloak x-show="modelOpen">

        <div class="fixed right-0 top-0 flex justify-center items-center w-4/5 h-screen bg-white z-30">
            <div class="flex justify-start items-start flex-col w-full h-full">
                <div class="flex justify-between items-center h-14 min-h-14 border-b border-gray-200 w-full px-4">
                    <h2 class="text-primary-950 font-bold md:text-xl text-sm">Titel</h2>
                    <x-icons.cross @click="modelOpen = false" class="size-6 cursor-pointer" />
                </div>
                <div class="p-4 w-full overflow-y-scroll [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar] [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-slate-700 dark:[&::-webkit-scrollbar-thumb]:bg-slate-500">
                    @isset($content)
                        {{ $content }}
                    @endisset
                </div>
            </div>
        </div>

    </div>
</div>
