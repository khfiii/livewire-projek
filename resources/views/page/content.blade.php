<x-app>
    <div class="w-full h-screen flex justify-center items-center">
        <div x-data="{tab : 'author'}">
           <nav>
            <div class="tabs tabs-boxed">
                <a class="tab" @click="tab = 'author'"
                :class = "{'tab-active' : tab == 'author'}"

                >Author</a>
                <a class="tab" @click="tab= 'reviewer'"
                :class = "{'tab-active' : tab == 'reviewer'}"
                >Reviewer</a>

                <a class="tab" @click="tab= 'editor'"
                :class = "{'tab-active' : tab == 'editor'}"
                >Editor</a>
            </div>
           </nav>

           <main>
            <div class="h-[300px] w-[300px] debug mt-4 space-y-2 flex flex-col p-2"
            x-show = "tab == 'author'"
            >
                <h2 class="font-semibold">Ini adalah author</h2>
                <p>Ini adalah teks untuk author.</p>
            </div>

            <div class="h-[300px] w-[300px] debug mt-4 space-y-2 flex flex-col p-2"
            x-show = "tab == 'reviewer'"
            >
                <h2 class="font-semibold">Ini adalah reviewer</h2>
                <p>Ini adalah teks untuk reviewer.</p>
            </div>

            <div class="h-[300px] w-[300px] debug mt-4 space-y-2 flex flex-col p-2"
            x-show = "tab == 'editor'"
            >
                <h2 class="font-semibold">Ini adalah editors</h2>
                <p>Ini adalah teks untuk editor.</p>
            </div>
           </main>

        </div>
    </div>
</x-app>
