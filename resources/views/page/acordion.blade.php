<x-app>
    <div class="py-40 h-screen">
        <h1 class="text-center font-semibold text-slate-900 text-3xl mb-10">Accordion Tailwind Css with Javascript</h1>
        <div class="max-w-2xl mx-auto" x-data="{ accord: false }">
            <div class="bg-white rounded-xl border-2">
                <div class="accordion-header flex items-center gap-2" @click="accord = !accord" >
                    <box-icon name="chevron-down" :class="{'rotate-90': accord,' -translate-y-0.0': !accord }"></box-icon>
                    <h2 class="font-semibold text-lg">What is Web Depelopment</h2>
                </div>

                <div x-cloak x-show="accord" x-collapse x-collapse.duration.500ms>
                    <p class="p-4 border-t">
                        Web development is the work involved in developing a website for the Internet or an intranet.
                        Web development can range from developing a simple single static page of plain text to complex
                        web applications, electronic businesses, and social network services.

                    </p>
                </div>
            </div>
        </div>

        <div class="max-w-2xl mx-auto" x-data="{ accord: false }">
            <div class="bg-white rounded-xl border-2">
                <div class="accordion-header flex items-center gap-2" @click="accord = !accord" >
                    <box-icon name="chevron-down" :class="{'rotate-90': accord,' -translate-y-0.0': !accord }"></box-icon>
                    <h2 class="font-semibold text-lg">What is Web Depelopment</h2>
                </div>

                <div x-cloak x-show="accord" x-collapse x-collapse.duration.500ms>
                    <p class="p-4 border-t">
                        Web development is the work involved in developing a website for the Internet or an intranet.
                        Web development can range from developing a simple single static page of plain text to complex
                        web applications, electronic businesses, and social network services.

                    </p>
                </div>
            </div>
        </div>


    </div>
</x-app>
