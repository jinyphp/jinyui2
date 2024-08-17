<x-www-app>
    <x-www_layout-component>

        <header id="header" class="relative z-20">
            <div>
                <p class="mb-2 text-sm leading-6 font-semibold text-sky-500 dark:text-sky-400">Flexbox &amp; Grid</p>
                <div class="flex items-center">
                    <h1
                        class="inline-block text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight dark:text-slate-200">
                        Flex Basis</h1>
                </div>
            </div>
            <p class="mt-2 text-lg text-slate-700 dark:text-slate-400">
                Utilities for controlling the initial size of flex
                items.</p>
        </header>

        <div class="mt-10 relative">
            <h2 class="flex whitespace-pre-wrap not-prose relative scroll-mt-[var(--scroll-mt)]" id="class-reference"><a
                    class="group relative border-none lg:-ml-2 lg:pl-2" href="#class-reference"><span
                        class="absolute -ml-8 hidden items-center border-0 opacity-0 group-hover:opacity-100 group-focus:opacity-100 lg:flex">​<span
                            class="flex h-6 w-6 items-center justify-center rounded-md text-slate-400 shadow-sm ring-1 ring-slate-900/5 hover:text-slate-700 hover:shadow hover:ring-slate-900/10 dark:bg-slate-800 dark:text-slate-400 dark:shadow-none dark:ring-0 dark:hover:bg-slate-700 dark:hover:text-slate-200"><svg
                                width="12" height="12" fill="none" aria-hidden="true">
                                <path d="M3.75 1v10M8.25 1v10M1 3.75h10M1 8.25h10" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round"></path>
                            </svg></span></span><span class="sr-only">Quick reference</span></a></h2>
            <div class="overflow-x-auto flex -mx-4 sm:-mx-6 md:mx-0">
                <div id="class-table"
                    class="flex-none min-w-full px-4 sm:px-6 md:px-0  scrollbar:!w-1.5 scrollbar:!h-1.5 scrollbar:bg-transparent scrollbar-track:!bg-slate-100 scrollbar-thumb:!rounded scrollbar-thumb:!bg-slate-300 scrollbar-track:!rounded dark:scrollbar-track:!bg-slate-500/[0.16] dark:scrollbar-thumb:!bg-slate-500/50 max-h-96 lg:supports-scrollbars:pr-2 lg:max-h-96">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr>
                                <th
                                    class="sticky z-10 top-0 text-sm leading-6 font-semibold text-slate-700 bg-white p-0 dark:bg-slate-900 dark:text-slate-300">
                                    <div class="py-2 pr-2 border-b border-slate-200 dark:border-slate-400/20">Class
                                    </div>
                                </th>
                                <th
                                    class="sticky z-10 top-0 text-sm leading-6 font-semibold text-slate-700 bg-white p-0 dark:bg-slate-900 dark:text-slate-300">
                                    <div class="py-2 pl-2 border-b border-slate-200 dark:border-slate-400/20">Properties
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="align-baseline">
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400">
                                    basis-0</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300">
                                    flex-basis: 0px;
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-1</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 0.25rem;<span class="text-indigo-400"> /* 4px */</span>
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-2</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 0.5rem;<span class="text-indigo-400"> /* 8px */</span>
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-3</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 0.75rem;<span class="text-indigo-400"> /* 12px */</span>
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-4</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 1rem;<span class="text-indigo-400"> /* 16px */</span>
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-5</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 1.25rem;<span class="text-indigo-400"> /* 20px */</span>
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-6</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 1.5rem;<span class="text-indigo-400"> /* 24px */</span>
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-7</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 1.75rem;<span class="text-indigo-400"> /* 28px */</span>
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-8</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 2rem;<span class="text-indigo-400"> /* 32px */</span>
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-9</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 2.25rem;<span class="text-indigo-400"> /* 36px */</span>
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-10</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 2.5rem;<span class="text-indigo-400"> /* 40px */</span>
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-11</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 2.75rem;<span class="text-indigo-400"> /* 44px */</span>
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-12</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 3rem;<span class="text-indigo-400"> /* 48px */</span>
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-14</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 3.5rem;<span class="text-indigo-400"> /* 56px */</span>
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-16</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 4rem;<span class="text-indigo-400"> /* 64px */</span>
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-20</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 5rem;<span class="text-indigo-400"> /* 80px */</span>
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-24</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 6rem;<span class="text-indigo-400"> /* 96px */</span>
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-28</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 7rem;<span class="text-indigo-400"> /* 112px */</span>
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-32</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 8rem;<span class="text-indigo-400"> /* 128px */</span>
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-36</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 9rem;<span class="text-indigo-400"> /* 144px */</span>
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-40</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 10rem;<span class="text-indigo-400"> /* 160px */</span>
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-44</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 11rem;<span class="text-indigo-400"> /* 176px */</span>
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-48</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 12rem;<span class="text-indigo-400"> /* 192px */</span>
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-52</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 13rem;<span class="text-indigo-400"> /* 208px */</span>
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-56</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 14rem;<span class="text-indigo-400"> /* 224px */</span>
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-60</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 15rem;<span class="text-indigo-400"> /* 240px */</span>
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-64</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 16rem;<span class="text-indigo-400"> /* 256px */</span>
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-72</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 18rem;<span class="text-indigo-400"> /* 288px */</span>
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-80</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 20rem;<span class="text-indigo-400"> /* 320px */</span>
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-96</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 24rem;<span class="text-indigo-400"> /* 384px */</span>
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-auto</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: auto;
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-px</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 1px;
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-0.5</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 0.125rem;<span class="text-indigo-400"> /* 2px */</span>
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-1.5</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 0.375rem;<span class="text-indigo-400"> /* 6px */</span>
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-2.5</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 0.625rem;<span class="text-indigo-400"> /* 10px */</span>
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-3.5</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 0.875rem;<span class="text-indigo-400"> /* 14px */</span>
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-1/2</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 50%;
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-1/3</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 33.333333%;
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-2/3</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 66.666667%;
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-1/4</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 25%;
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-2/4</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 50%;
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-3/4</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 75%;
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-1/5</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 20%;
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-2/5</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 40%;
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-3/5</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 60%;
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-4/5</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 80%;
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-1/6</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 16.666667%;
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-2/6</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 33.333333%;
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-3/6</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 50%;
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-4/6</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 66.666667%;
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-5/6</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 83.333333%;
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-1/12</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 8.333333%;
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-2/12</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 16.666667%;
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-3/12</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 25%;
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-4/12</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 33.333333%;
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-5/12</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 41.666667%;
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-6/12</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 50%;
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-7/12</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 58.333333%;
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-8/12</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 66.666667%;
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-9/12</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 75%;
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-10/12</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 83.333333%;
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-11/12</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 91.666667%;
                                </td>
                            </tr>
                            <tr>
                                <td translate="no"
                                    class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                    basis-full</td>
                                <td translate="no"
                                    class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                    flex-basis: 100%;
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="sticky bottom-0 h-px -mt-px bg-slate-200 dark:bg-slate-400/20"></div>
                </div>
            </div>
            <div class="inset-x-0 flex justify-center pointer-events-none lg:hidden -mt-9 relative">
                <div class="absolute inset-x-0 bg-gradient-to-t from-white dark:from-slate-900 -top-8 bottom-0"></div>
                <button type="button"
                    class="pointer-events-auto relative text-sm font-semibold text-slate-900 bg-white py-2 px-4 rounded-full ring-1 ring-slate-900/10 shadow-sm dark:bg-slate-800 dark:text-slate-200 dark:highlight-white/5">Show
                    all classes</button>
            </div>
        </div>

        <div id="content-wrapper" class="relative z-20 prose prose-slate mt-12 dark:prose-dark">
            <h2 class="flex whitespace-pre-wrap not-prose mb-2 text-sm leading-6 text-sky-500 font-semibold tracking-normal dark:text-sky-400"
                id="basic-usage"><a class="group relative border-none lg:-ml-2 lg:pl-2" href="#basic-usage"><span
                        class="absolute -ml-8 hidden items-center border-0 opacity-0 group-hover:opacity-100 group-focus:opacity-100 lg:flex">​<span
                            class="flex h-6 w-6 items-center justify-center rounded-md text-slate-400 shadow-sm ring-1 ring-slate-900/5 hover:text-slate-700 hover:shadow hover:ring-slate-900/10 dark:bg-slate-800 dark:text-slate-400 dark:shadow-none dark:ring-0 dark:hover:bg-slate-700 dark:hover:text-slate-200"><svg
                                width="12" height="12" fill="none" aria-hidden="true">
                                <path d="M3.75 1v10M8.25 1v10M1 3.75h10M1 8.25h10" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round"></path>
                            </svg></span></span>Basic usage</a></h2>
            <h3 class="flex whitespace-pre-wrap not-prose" id="setting-the-flex-basis"><a
                    class="group relative border-none lg:-ml-2 lg:pl-2" href="#setting-the-flex-basis"><span
                        class="absolute -ml-8 hidden items-center border-0 opacity-0 group-hover:opacity-100 group-focus:opacity-100 lg:flex">​<span
                            class="flex h-6 w-6 items-center justify-center rounded-md text-slate-400 shadow-sm ring-1 ring-slate-900/5 hover:text-slate-700 hover:shadow hover:ring-slate-900/10 dark:bg-slate-800 dark:text-slate-400 dark:shadow-none dark:ring-0 dark:hover:bg-slate-700 dark:hover:text-slate-200"><svg
                                width="12" height="12" fill="none" aria-hidden="true">
                                <path d="M3.75 1v10M8.25 1v10M1 3.75h10M1 8.25h10" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round"></path>
                            </svg></span></span>Setting the flex basis</a></h3>
            <p>Use the <code>basis-*</code> utilities to set the initial size of flex items.</p>
            <div class="mt-4 -mb-3">
                <div class="not-prose relative bg-slate-50 rounded-xl overflow-hidden dark:bg-slate-800/25">
                    <div class="absolute inset-0 bg-grid-slate-100 [mask-image:linear-gradient(0deg,#fff,rgba(255,255,255,0.6))] dark:bg-grid-slate-700/25 dark:[mask-image:linear-gradient(0deg,rgba(255,255,255,0.1),rgba(255,255,255,0.5))]"
                        style="background-position: 10px 10px;"></div>
                    <div class="relative rounded-xl overflow-auto p-8">
                        <div class="flex flex-row space-x-4 font-mono text-white text-sm font-bold leading-6">
                            <div
                                class="basis-1/4 h-14 rounded-lg flex items-center justify-center bg-fuchsia-500 shadow-lg">
                                01</div>
                            <div
                                class="basis-1/4 h-14 rounded-lg flex items-center justify-center bg-fuchsia-500 shadow-lg">
                                02</div>
                            <div
                                class="basis-1/2 h-14 rounded-lg flex items-center justify-center bg-fuchsia-500 shadow-lg">
                                03</div>
                        </div>
                    </div>
                    <div
                        class="absolute inset-0 pointer-events-none border border-black/5 rounded-xl dark:border-white/5">
                    </div>
                </div>
            </div>
            <pre class="language-html"><code class="language-html"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>flex flex-row<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span><span class="code-highlight bg-code-highlight">basis-1/4</span><span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>01<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span><span class="code-highlight bg-code-highlight">basis-1/4</span><span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>02<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span><span class="code-highlight bg-code-highlight">basis-1/2</span><span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>03<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span></code></pre>
            <hr>
            <h2 class="flex whitespace-pre-wrap not-prose mb-2 text-sm leading-6 text-sky-500 font-semibold tracking-normal dark:text-sky-400"
                id="applying-conditionally" data-docsearch-ignore=""><a
                    class="group relative border-none lg:-ml-2 lg:pl-2" href="#applying-conditionally"><span
                        class="absolute -ml-8 hidden items-center border-0 opacity-0 group-hover:opacity-100 group-focus:opacity-100 lg:flex">​<span
                            class="flex h-6 w-6 items-center justify-center rounded-md text-slate-400 shadow-sm ring-1 ring-slate-900/5 hover:text-slate-700 hover:shadow hover:ring-slate-900/10 dark:bg-slate-800 dark:text-slate-400 dark:shadow-none dark:ring-0 dark:hover:bg-slate-700 dark:hover:text-slate-200"><svg
                                width="12" height="12" fill="none" aria-hidden="true">
                                <path d="M3.75 1v10M8.25 1v10M1 3.75h10M1 8.25h10" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round"></path>
                            </svg></span></span>Applying conditionally</a></h2>
            <h3 class="flex whitespace-pre-wrap not-prose" id="hover-focus-and-other-states"
                data-docsearch-ignore=""><a class="group relative border-none lg:-ml-2 lg:pl-2"
                    href="#hover-focus-and-other-states"><span
                        class="absolute -ml-8 hidden items-center border-0 opacity-0 group-hover:opacity-100 group-focus:opacity-100 lg:flex">​<span
                            class="flex h-6 w-6 items-center justify-center rounded-md text-slate-400 shadow-sm ring-1 ring-slate-900/5 hover:text-slate-700 hover:shadow hover:ring-slate-900/10 dark:bg-slate-800 dark:text-slate-400 dark:shadow-none dark:ring-0 dark:hover:bg-slate-700 dark:hover:text-slate-200"><svg
                                width="12" height="12" fill="none" aria-hidden="true">
                                <path d="M3.75 1v10M8.25 1v10M1 3.75h10M1 8.25h10" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round"></path>
                            </svg></span></span>Hover, focus, and other states</a></h3>
            <p>Tailwind lets you conditionally apply utility classes in different states using variant modifiers. For
                example, use <code>hover:basis-1/2</code> to only apply the <code>basis-1/2</code> utility on hover.</p>
            <pre class="language-html"><code class="language-html"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>basis-1/3 <span class="code-highlight bg-code-highlight">hover:basis-1/2</span><span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
  <span class="token comment">&lt;!-- ... --&gt;</span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
</code></pre>
            <p>For a complete list of all available state modifiers, check out the <a
                    href="/docs/hover-focus-and-other-states">Hover, Focus, &amp; Other States</a> documentation.</p>
            <h3 class="flex whitespace-pre-wrap not-prose" id="breakpoints-and-media-queries"
                data-docsearch-ignore=""><a class="group relative border-none lg:-ml-2 lg:pl-2"
                    href="#breakpoints-and-media-queries"><span
                        class="absolute -ml-8 hidden items-center border-0 opacity-0 group-hover:opacity-100 group-focus:opacity-100 lg:flex">​<span
                            class="flex h-6 w-6 items-center justify-center rounded-md text-slate-400 shadow-sm ring-1 ring-slate-900/5 hover:text-slate-700 hover:shadow hover:ring-slate-900/10 dark:bg-slate-800 dark:text-slate-400 dark:shadow-none dark:ring-0 dark:hover:bg-slate-700 dark:hover:text-slate-200"><svg
                                width="12" height="12" fill="none" aria-hidden="true">
                                <path d="M3.75 1v10M8.25 1v10M1 3.75h10M1 8.25h10" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round"></path>
                            </svg></span></span>Breakpoints and media queries</a></h3>
            <p>You can also use variant modifiers to target media queries like responsive breakpoints, dark mode,
                prefers-reduced-motion, and more. For example, use <code>md:basis-1/3</code> to apply the
                <code>basis-1/3</code> utility at only medium screen sizes and above.
            </p>
            <pre class="language-html"><code class="language-html"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>flex flex-row<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>basis-1/4 <span class="code-highlight bg-code-highlight">md:basis-1/3</span><span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>01<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>basis-1/4 <span class="code-highlight bg-code-highlight">md:basis-1/3</span><span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>02<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>basis-1/2 <span class="code-highlight bg-code-highlight">md:basis-1/3</span><span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>03<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span></code></pre>
            <p>To learn more, check out the documentation on <a href="/docs/responsive-design">Responsive Design</a>,
                <a href="/docs/dark-mode">Dark Mode</a> and <a
                    href="/docs/hover-focus-and-other-states#media-and-feature-queries">other media query
                    modifiers</a>.
            </p>
            <hr>
            <h2 class="flex whitespace-pre-wrap not-prose mb-2 text-sm leading-6 text-sky-500 font-semibold tracking-normal dark:text-sky-400"
                id="using-custom-values"><a class="group relative border-none lg:-ml-2 lg:pl-2"
                    href="#using-custom-values"><span
                        class="absolute -ml-8 hidden items-center border-0 opacity-0 group-hover:opacity-100 group-focus:opacity-100 lg:flex">​<span
                            class="flex h-6 w-6 items-center justify-center rounded-md text-slate-400 shadow-sm ring-1 ring-slate-900/5 hover:text-slate-700 hover:shadow hover:ring-slate-900/10 dark:bg-slate-800 dark:text-slate-400 dark:shadow-none dark:ring-0 dark:hover:bg-slate-700 dark:hover:text-slate-200"><svg
                                width="12" height="12" fill="none" aria-hidden="true">
                                <path d="M3.75 1v10M8.25 1v10M1 3.75h10M1 8.25h10" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round"></path>
                            </svg></span></span>Using custom values</a></h2>
            <h3 class="flex whitespace-pre-wrap not-prose" id="customizing-your-theme"><a
                    class="group relative border-none lg:-ml-2 lg:pl-2" href="#customizing-your-theme"><span
                        class="absolute -ml-8 hidden items-center border-0 opacity-0 group-hover:opacity-100 group-focus:opacity-100 lg:flex">​<span
                            class="flex h-6 w-6 items-center justify-center rounded-md text-slate-400 shadow-sm ring-1 ring-slate-900/5 hover:text-slate-700 hover:shadow hover:ring-slate-900/10 dark:bg-slate-800 dark:text-slate-400 dark:shadow-none dark:ring-0 dark:hover:bg-slate-700 dark:hover:text-slate-200"><svg
                                width="12" height="12" fill="none" aria-hidden="true">
                                <path d="M3.75 1v10M8.25 1v10M1 3.75h10M1 8.25h10" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round"></path>
                            </svg></span></span>Customizing your theme</a></h3>
            <p>The default flex basis scale is a combination of the <a
                    href="/docs/customizing-spacing#default-spacing-scale">default spacing scale</a> as well as a set
                of percentage based values.</p>
            <p>You can customize your spacing scale by editing <code>theme.spacing</code> or
                <code>theme.extend.spacing</code> in your <code>tailwind.config.js</code> file.
            </p>
            <div class="mt-5 mb-8 first:mt-0 last:mb-0 relative overflow-hidden rounded-2xl">
                <div class="pt-2 bg-slate-800 shadow-lg group">
                    <div class="flex text-slate-400 text-xs leading-6">
                        <div
                            class="flex-none text-sky-300 border-t border-b border-t-transparent border-b-sky-300 px-4 py-1 flex items-center">
                            tailwind.config.js</div>
                        <div class="flex-auto flex items-center bg-slate-700/50 border border-slate-500/30 rounded-tl">
                        </div>
                    </div>
                    <div class="children:my-0 children:!shadow-none children:bg-transparent">
                        <pre class="language-diff-js"><code class="language-diff-js"><span class="token language-js unchanged"><span class="token plain">module</span><span class="token punctuation">.</span><span class="token property-access">exports</span><span class="token plain"> </span><span class="token operator">=</span><span class="token plain"> </span><span class="token punctuation">{</span><span class="token plain"></span>
</span><span class="token language-js unchanged"><span class="token plain">  </span><span class="token literal-property property">theme</span><span class="token operator">:</span><span class="token plain"> </span><span class="token punctuation">{</span><span class="token plain"></span>
</span><span class="token language-js unchanged"><span class="token plain">    </span><span class="token literal-property property">extend</span><span class="token operator">:</span><span class="token plain"> </span><span class="token punctuation">{</span><span class="token plain"></span>
</span><span class="token language-js inserted"><span class="token plain">      </span><span class="token literal-property property">spacing</span><span class="token operator">:</span><span class="token plain"> </span><span class="token punctuation">{</span><span class="token plain"></span>
</span><span class="token language-js inserted"><span class="token plain">        </span><span class="token string-property property">'112'</span><span class="token operator">:</span><span class="token plain"> </span><span class="token string">'28rem'</span><span class="token punctuation">,</span><span class="token plain"></span>
</span><span class="token language-js inserted"><span class="token plain">        </span><span class="token string-property property">'128'</span><span class="token operator">:</span><span class="token plain"> </span><span class="token string">'32rem'</span><span class="token punctuation">,</span><span class="token plain"></span>
</span><span class="token language-js inserted"><span class="token plain">      </span><span class="token punctuation">}</span><span class="token plain"></span>
</span><span class="token language-js unchanged"><span class="token plain">    </span><span class="token punctuation">}</span><span class="token plain"></span>
</span><span class="token language-js unchanged"><span class="token plain">  </span><span class="token punctuation">}</span><span class="token plain"></span>
</span><span class="token language-js unchanged"><span class="token plain"></span><span class="token punctuation">}</span>
</span></code></pre>
                    </div>
                </div>
                <div class="pointer-events-none absolute inset-0 rounded-2xl dark:ring-1 dark:ring-white/10 dark:ring-inset"
                    aria-hidden="true"></div>
            </div>
            <p>Alternatively, you can customize just the flex basis scale by editing <code>theme.flexBasis</code> or
                <code>theme.extend.flexBasis</code> in your <code>tailwind.config.js</code> file.
            </p>
            <div class="mt-5 mb-8 first:mt-0 last:mb-0 relative overflow-hidden rounded-2xl">
                <div class="pt-2 bg-slate-800 shadow-lg group">
                    <div class="flex text-slate-400 text-xs leading-6">
                        <div
                            class="flex-none text-sky-300 border-t border-b border-t-transparent border-b-sky-300 px-4 py-1 flex items-center">
                            tailwind.config.js</div>
                        <div class="flex-auto flex items-center bg-slate-700/50 border border-slate-500/30 rounded-tl">
                        </div>
                    </div>
                    <div class="children:my-0 children:!shadow-none children:bg-transparent">
                        <pre class="language-diff-js"><code class="language-diff-js"><span class="token language-js unchanged"><span class="token plain">module</span><span class="token punctuation">.</span><span class="token property-access">exports</span><span class="token plain"> </span><span class="token operator">=</span><span class="token plain"> </span><span class="token punctuation">{</span><span class="token plain"></span>
</span><span class="token language-js unchanged"><span class="token plain">  </span><span class="token literal-property property">theme</span><span class="token operator">:</span><span class="token plain"> </span><span class="token punctuation">{</span><span class="token plain"></span>
</span><span class="token language-js unchanged"><span class="token plain">    </span><span class="token literal-property property">extend</span><span class="token operator">:</span><span class="token plain"> </span><span class="token punctuation">{</span><span class="token plain"></span>
</span><span class="token language-js inserted"><span class="token plain">      </span><span class="token literal-property property">flexBasis</span><span class="token operator">:</span><span class="token plain"> </span><span class="token punctuation">{</span><span class="token plain"></span>
</span><span class="token language-js inserted"><span class="token plain">        </span><span class="token string-property property">'1/7'</span><span class="token operator">:</span><span class="token plain"> </span><span class="token string">'14.2857143%'</span><span class="token punctuation">,</span><span class="token plain"></span>
</span><span class="token language-js inserted"><span class="token plain">        </span><span class="token string-property property">'2/7'</span><span class="token operator">:</span><span class="token plain"> </span><span class="token string">'28.5714286%'</span><span class="token punctuation">,</span><span class="token plain"></span>
</span><span class="token language-js inserted"><span class="token plain">        </span><span class="token string-property property">'3/7'</span><span class="token operator">:</span><span class="token plain"> </span><span class="token string">'42.8571429%'</span><span class="token punctuation">,</span><span class="token plain"></span>
</span><span class="token language-js inserted"><span class="token plain">        </span><span class="token string-property property">'4/7'</span><span class="token operator">:</span><span class="token plain"> </span><span class="token string">'57.1428571%'</span><span class="token punctuation">,</span><span class="token plain"></span>
</span><span class="token language-js inserted"><span class="token plain">        </span><span class="token string-property property">'5/7'</span><span class="token operator">:</span><span class="token plain"> </span><span class="token string">'71.4285714%'</span><span class="token punctuation">,</span><span class="token plain"></span>
</span><span class="token language-js inserted"><span class="token plain">        </span><span class="token string-property property">'6/7'</span><span class="token operator">:</span><span class="token plain"> </span><span class="token string">'85.7142857%'</span><span class="token punctuation">,</span><span class="token plain"></span>
</span><span class="token language-js inserted"><span class="token plain">      </span><span class="token punctuation">}</span><span class="token plain"></span>
</span><span class="token language-js unchanged"><span class="token plain">    </span><span class="token punctuation">}</span><span class="token plain"></span>
</span><span class="token language-js unchanged"><span class="token plain">  </span><span class="token punctuation">}</span><span class="token plain"></span>
</span><span class="token language-js unchanged"><span class="token plain"></span><span class="token punctuation">}</span>
</span></code></pre>
                    </div>
                </div>
                <div class="pointer-events-none absolute inset-0 rounded-2xl dark:ring-1 dark:ring-white/10 dark:ring-inset"
                    aria-hidden="true"></div>
            </div>
            <p>Learn more about customizing the default theme in the <a
                    href="/docs/theme#customizing-the-default-theme">theme customization</a> documentation.</p>
            <h3 class="flex whitespace-pre-wrap not-prose" id="arbitrary-values"><a
                    class="group relative border-none lg:-ml-2 lg:pl-2" href="#arbitrary-values"><span
                        class="absolute -ml-8 hidden items-center border-0 opacity-0 group-hover:opacity-100 group-focus:opacity-100 lg:flex">​<span
                            class="flex h-6 w-6 items-center justify-center rounded-md text-slate-400 shadow-sm ring-1 ring-slate-900/5 hover:text-slate-700 hover:shadow hover:ring-slate-900/10 dark:bg-slate-800 dark:text-slate-400 dark:shadow-none dark:ring-0 dark:hover:bg-slate-700 dark:hover:text-slate-200"><svg
                                width="12" height="12" fill="none" aria-hidden="true">
                                <path d="M3.75 1v10M8.25 1v10M1 3.75h10M1 8.25h10" stroke="currentColor"
                                    stroke-width="1.5" stroke-linecap="round"></path>
                            </svg></span></span>Arbitrary values</a></h3>
            <p>If you need to use a one-off <code>flex-basis</code> value that doesn’t make sense to include in your
                theme, use square brackets to generate a property on the fly using any arbitrary value.</p>
            <pre class="language-html"><code class="language-html"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span><span class="code-highlight bg-code-highlight">basis-[14.2857143%]</span><span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
  <span class="token comment">&lt;!-- ... --&gt;</span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
</code></pre>
            <p>Learn more about arbitrary value support in the <a
                    href="/docs/adding-custom-styles#using-arbitrary-values">arbitrary values</a> documentation.</p>
        </div>

    </x-www_layout-component>
</x-www-app>
