<x-www-app>
    <x-www-layout>
        <div class="max-w-3xl mx-auto pt-10 xl:max-w-none xl:ml-0 xl:mr-[15.5rem] xl:pr-16">
            <header id="header" class="relative z-20">
                <div>
                    <p class="mb-2 text-sm leading-6 font-semibold text-sky-500 dark:text-sky-400">Accessibility</p>
                    <div class="flex items-center">
                        <h1
                            class="inline-block text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight dark:text-slate-200">
                            Forced Color Adjust</h1>
                    </div>
                </div>
                <p class="mt-2 text-lg text-slate-700 dark:text-slate-400">Utilities for opting in and out of forced
                    colors.</p>
            </header>
            <div class="mt-10 relative">
                <h2 class="flex whitespace-pre-wrap not-prose relative scroll-mt-[var(--scroll-mt)]"
                    id="class-reference"><a class="group relative border-none lg:-ml-2 lg:pl-2"
                        href="#class-reference"><span
                            class="absolute -ml-8 hidden items-center border-0 opacity-0 group-hover:opacity-100 group-focus:opacity-100 lg:flex">​<span
                                class="flex h-6 w-6 items-center justify-center rounded-md text-slate-400 shadow-sm ring-1 ring-slate-900/5 hover:text-slate-700 hover:shadow hover:ring-slate-900/10 dark:bg-slate-800 dark:text-slate-400 dark:shadow-none dark:ring-0 dark:hover:bg-slate-700 dark:hover:text-slate-200"><svg
                                    width="12" height="12" fill="none" aria-hidden="true">
                                    <path d="M3.75 1v10M8.25 1v10M1 3.75h10M1 8.25h10" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round"></path>
                                </svg></span></span><span class="sr-only">Quick reference</span></a></h2>
                <div class="overflow-x-auto flex -mx-4 sm:-mx-6 md:mx-0">
                    <div id="class-table"
                        class="flex-none min-w-full px-4 sm:px-6 md:px-0 overflow-hidden lg:overflow-auto scrollbar:!w-1.5 scrollbar:!h-1.5 scrollbar:bg-transparent scrollbar-track:!bg-slate-100 scrollbar-thumb:!rounded scrollbar-thumb:!bg-slate-300 scrollbar-track:!rounded dark:scrollbar-track:!bg-slate-500/[0.16] dark:scrollbar-thumb:!bg-slate-500/50">
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
                                        <div class="py-2 pl-2 border-b border-slate-200 dark:border-slate-400/20">
                                            Properties</div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="align-baseline">
                                <tr>
                                    <td translate="no"
                                        class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400">
                                        forced-color-adjust-auto</td>
                                    <td translate="no"
                                        class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300">
                                        forced-color-adjust: auto;
                                    </td>
                                </tr>
                                <tr>
                                    <td translate="no"
                                        class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                                        forced-color-adjust-none</td>
                                    <td translate="no"
                                        class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                                        forced-color-adjust: none;
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="sticky bottom-0 h-px -mt-px bg-slate-200 dark:bg-slate-400/20"></div>
                    </div>
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
                <h3 class="flex whitespace-pre-wrap not-prose" id="opting-out-of-forced-colors"><a
                        class="group relative border-none lg:-ml-2 lg:pl-2" href="#opting-out-of-forced-colors"><span
                            class="absolute -ml-8 hidden items-center border-0 opacity-0 group-hover:opacity-100 group-focus:opacity-100 lg:flex">​<span
                                class="flex h-6 w-6 items-center justify-center rounded-md text-slate-400 shadow-sm ring-1 ring-slate-900/5 hover:text-slate-700 hover:shadow hover:ring-slate-900/10 dark:bg-slate-800 dark:text-slate-400 dark:shadow-none dark:ring-0 dark:hover:bg-slate-700 dark:hover:text-slate-200"><svg
                                    width="12" height="12" fill="none" aria-hidden="true">
                                    <path d="M3.75 1v10M8.25 1v10M1 3.75h10M1 8.25h10" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round"></path>
                                </svg></span></span>Opting out of forced colors</a></h3>
                <p>Use <code>forced-color-adjust-none</code> to opt an element out the colors enforced by <a
                        href="/docs/hover-focus-and-other-states#forced-colors-mode">forced colors mode</a>. This is
                    useful in
                    situations where enforcing a limited color palette will degrade usability.</p>
                <div class="mt-4 -mb-3">
                    <div class="not-prose mb-4">
                        <div class="flex space-x-2"><svg class="flex-none w-5 h-5" viewBox="0 0 20 20" fill="none"
                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path
                                    d="m9.813 9.25.346-5.138a1.276 1.276 0 0 0-2.54-.235L6.75 11.25 5.147 9.327a1.605 1.605 0 0 0-2.388-.085.018.018 0 0 0-.004.019l1.98 4.87a5 5 0 0 0 4.631 3.119h3.885a4 4 0 0 0 4-4v-1a3 3 0 0 0-3-3H9.813Z"
                                    class="stroke-slate-400 dark:stroke-slate-300"></path>
                                <path d="M3 5s.35-.47 1.25-.828m9.516-.422c2.078.593 3.484 1.5 3.484 1.5"
                                    class="stroke-slate-400 dark:stroke-sky-400"></path>
                            </svg>
                            <p class="text-slate-700 text-sm font-medium dark:text-slate-200">Try emulating
                                `forced-colors: active` in
                                your developer tools to see the changes</p>
                        </div>
                    </div>
                    <div class="not-prose relative bg-slate-50 rounded-xl overflow-hidden dark:bg-slate-800/25">
                        <div class="absolute inset-0 bg-grid-slate-100 [mask-image:linear-gradient(0deg,#fff,rgba(255,255,255,0.6))] dark:bg-grid-slate-700/25 dark:[mask-image:linear-gradient(0deg,rgba(255,255,255,0.1),rgba(255,255,255,0.5))]"
                            style="background-position: 10px 10px;"></div>
                        <div class="relative rounded-xl overflow-auto p-8">
                            <div class="mx-auto max-w-sm overflow-clip rounded-lg bg-white shadow">
                                <div class="aspect-h-3 aspect-w-3 overflow-hidden">
                                    <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-01-product-02.jpg"
                                        alt="Two each of gray, white, and black shirts laying flat."
                                        class="h-full w-full object-cover object-center">
                                </div>
                                <div class="grid grid-cols-[1fr_auto] items-center gap-4 p-4">
                                    <div>
                                        <h3 class="font-medium text-gray-900">Basic Tee</h3>
                                        <h3 class="text-sm font-medium text-gray-900">$35</h3>
                                    </div>
                                    <fieldset>
                                        <legend class="sr-only">Choose a color</legend>
                                        <div class="forced-color-adjust-none grid grid-flow-col items-center gap-3">
                                            <label
                                                class="has-[:checked]:ring-gray-400 has-[:checked]:ring-1 has-[:checked]:ring-offset-1 relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 ring-0 focus:outline-none">
                                                <input type="radio" name="color-choice" value="White" class="sr-only"
                                                    aria-labelledby="color-choice-0-label">
                                                <span id="color-choice-0-label" class="sr-only">White</span>
                                                <span aria-hidden="true"
                                                    class="size-6 rounded-full border border-black border-opacity-10 bg-white"></span>
                                            </label>
                                            <label
                                                class="has-[:checked]:ring-gray-400 has-[:checked]:ring-1 has-[:checked]:ring-offset-1 relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 ring-0 focus:outline-none">
                                                <input type="radio" checked="" name="color-choice" value="Gray"
                                                    class="sr-only">
                                                <span id="color-choice-1-label" class="sr-only">Gray</span>
                                                <span aria-hidden="true"
                                                    class="size-6 rounded-full border border-black border-opacity-10 bg-gray-200"></span>
                                            </label>
                                            <label
                                                class="has-[:checked]:ring-gray-900 has-[:checked]:ring-1 has-[:checked]:ring-offset-1 relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 ring-0 focus:outline-none">
                                                <input type="radio" name="color-choice" value="Black" class="sr-only"
                                                    aria-labelledby="color-choice-2-label">
                                                <span id="color-choice-2-label" class="sr-only">Black</span>
                                                <span aria-hidden="true"
                                                    class="size-6 rounded-full border border-black border-opacity-10 bg-gray-900"></span>
                                            </label>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        <div
                            class="absolute inset-0 pointer-events-none border border-black/5 rounded-xl dark:border-white/5">
                        </div>
                    </div>
                </div>
                <pre
                    class="language-html"><code class="language-html"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>form</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>img</span> <span class="token attr-name">src</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>...<span class="token punctuation">"</span></span> <span class="token punctuation">/&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>h3</span><span class="token punctuation">&gt;</span></span>Basic Tee<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>h3</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>h3</span><span class="token punctuation">&gt;</span></span>$35<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>h3</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>fieldset</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>legend</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>sr-only<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Choose a color<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>legend</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span><span class="code-highlight bg-code-highlight">forced-color-adjust-none</span> ...<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>sr-only<span class="token punctuation">"</span></span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>radio<span class="token punctuation">"</span></span> <span class="token attr-name">name</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>color-choice<span class="token punctuation">"</span></span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>White<span class="token punctuation">"</span></span> <span class="token punctuation">/&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>span</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>sr-only<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>White<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>span</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>span</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>size-6 rounded-full border border-black border-opacity-10 bg-white<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>span</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
        <span class="token comment">&lt;!-- ... --&gt;</span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>fieldset</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>form</span><span class="token punctuation">&gt;</span></span></code></pre>
                <p>You can also use the <a
                        href="/docs/hover-focus-and-other-states#forced-colors-mode"><code>forced-colors</code>
                        modifier</a> to conditionally add styles when the user has enabled a forced color mode.</p>
                <h3 class="flex whitespace-pre-wrap not-prose" id="restoring-forced-colors"><a
                        class="group relative border-none lg:-ml-2 lg:pl-2" href="#restoring-forced-colors"><span
                            class="absolute -ml-8 hidden items-center border-0 opacity-0 group-hover:opacity-100 group-focus:opacity-100 lg:flex">​<span
                                class="flex h-6 w-6 items-center justify-center rounded-md text-slate-400 shadow-sm ring-1 ring-slate-900/5 hover:text-slate-700 hover:shadow hover:ring-slate-900/10 dark:bg-slate-800 dark:text-slate-400 dark:shadow-none dark:ring-0 dark:hover:bg-slate-700 dark:hover:text-slate-200"><svg
                                    width="12" height="12" fill="none" aria-hidden="true">
                                    <path d="M3.75 1v10M8.25 1v10M1 3.75h10M1 8.25h10" stroke="currentColor"
                                        stroke-width="1.5" stroke-linecap="round"></path>
                                </svg></span></span>Restoring forced colors</a></h3>
                <p>Use <code>forced-color-adjust-auto</code> to undo <code>forced-color-adjust-none</code>, making an
                    element
                    adhere to colors enforced by forced colors mode.</p>
                <p>This can be useful if you use a different control on a larger screen size for example:</p>
                <pre
                    class="language-html"><code class="language-html"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>form</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>fieldset</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>forced-color-adjust-none lg:<span class="code-highlight bg-code-highlight">forced-color-adjust-auto</span> ...<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>legend</span><span class="token punctuation">&gt;</span></span>Choose a color:<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>legend</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>select</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>hidden lg:block<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>option</span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>White<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>White<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>option</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>option</span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>Gray<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Gray<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>option</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>option</span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>Black<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Black<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>option</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>select</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>lg:hidden<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>sr-only<span class="token punctuation">"</span></span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>radio<span class="token punctuation">"</span></span> <span class="token attr-name">name</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>color-choice<span class="token punctuation">"</span></span> <span class="token attr-name">value</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>White<span class="token punctuation">"</span></span> <span class="token punctuation">/&gt;</span></span>
        <span class="token comment">&lt;!-- ... --&gt;</span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
      <span class="token comment">&lt;!-- ... --&gt;</span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>fieldset</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>form</span><span class="token punctuation">&gt;</span></span></code></pre>
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
                <p>Tailwind lets you conditionally apply utility classes in different states using variant modifiers.
                    For example,
                    use <code>focus:forced-color-adjust-none</code> to only apply the
                    <code>forced-color-adjust-none</code> utility
                    on focus.</p>
                <pre
                    class="language-html"><code class="language-html"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>a</span> <span class="token attr-name">href</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>#content<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>forced-color-adjust-none <span class="code-highlight bg-code-highlight">focus:forced-color-adjust-auto</span><span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
  Skip to content
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>a</span><span class="token punctuation">&gt;</span></span></code></pre>
                <p>For a complete list of all available state modifiers, check out the <a
                        href="/docs/hover-focus-and-other-states">Hover, Focus, &amp; Other States</a> documentation.
                </p>
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
                    prefers-reduced-motion, and more. For example, use <code>md:forced-color-adjust-auto</code> to apply
                    the
                    <code>forced-color-adjust-auto</code> utility at only medium screen sizes and above.
                </p>
                <pre class="language-html"><code class="language-html"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>forced-color-adjust-none <span class="code-highlight bg-code-highlight">md:forced-color-adjust-auto</span><span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
  <span class="token comment">&lt;!-- ... --&gt;</span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
</code></pre>
                <p>To learn more, check out the documentation on <a href="/docs/responsive-design">Responsive
                        Design</a>, <a href="/docs/dark-mode">Dark Mode</a> and <a
                        href="/docs/hover-focus-and-other-states#media-and-feature-queries">other media query
                        modifiers</a>.</p>
            </div>
            <footer class="text-sm leading-6 mt-12">
                <div class="mb-10 text-slate-700 font-semibold flex items-center dark:text-slate-200"><a
                        class="group flex items-center hover:text-slate-900 dark:hover:text-white"
                        href="/docs/screen-readers"><svg viewBox="0 0 3 6"
                            class="mr-3 w-auto h-1.5 text-slate-400 overflow-visible group-hover:text-slate-600 dark:group-hover:text-slate-300">
                            <path d="M3 0L0 3L3 6" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>Screen Readers</a><a
                        class="group ml-auto flex items-center hover:text-slate-900 dark:hover:text-white"
                        href="https://github.com/tailwindlabs/tailwindcss-typography">Typography<svg viewBox="0 0 3 6"
                            class="ml-3 w-auto h-1.5 text-slate-400 overflow-visible group-hover:text-slate-600 dark:group-hover:text-slate-300">
                            <path d="M0 0L3 3L0 6" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg></a></div>
                <div
                    class="pt-10 pb-28 border-t border-slate-200 sm:flex justify-between text-slate-500 dark:border-slate-200/5">
                    <div class="mb-6 sm:mb-0 sm:flex">
                        <p>Copyright © 2024 Tailwind Labs Inc.</p>
                        <p class="sm:ml-4 sm:pl-4 sm:border-l sm:border-slate-200 dark:sm:border-slate-200/5"><a
                                class="hover:text-slate-900 dark:hover:text-slate-400" href="/brand">Trademark
                                Policy</a></p>
                    </div><a class="hover:text-slate-900 dark:hover:text-slate-400"
                        href="https://github.com/tailwindlabs/tailwindcss.com/edit/master/src/pages/docs/forced-color-adjust.mdx">Edit
                        this page on GitHub</a>
                </div>
            </footer>
            <div
                class="fixed z-20 top-[3.8125rem] bottom-0 right-[max(0px,calc(50%-45rem))] w-[19.5rem] py-10 overflow-y-auto hidden xl:block">
                <div class="px-8">
                    <h5 class="text-slate-900 font-semibold mb-4 text-sm leading-6 dark:text-slate-100">On this page
                    </h5>
                    <ul class="text-slate-700 text-sm leading-6">
                        <li><a href="#class-reference"
                                class="block py-1 font-medium font-medium text-sky-500 dark:text-sky-400">Quick
                                reference</a></li>
                        <li><a href="#basic-usage"
                                class="block py-1 font-medium hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300">Basic
                                usage</a></li>
                        <li class="ml-4"><a href="#opting-out-of-forced-colors"
                                class="group flex items-start py-1 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300"><svg
                                    width="3" height="24" viewBox="0 -9 3 24"
                                    class="mr-2 text-slate-400 overflow-visible group-hover:text-slate-600 dark:text-slate-600 dark:group-hover:text-slate-500">
                                    <path d="M0 0L3 3L0 6" fill="none" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round">
                                    </path>
                                </svg>Opting out of forced colors</a></li>
                        <li class="ml-4"><a href="#restoring-forced-colors"
                                class="group flex items-start py-1 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300"><svg
                                    width="3" height="24" viewBox="0 -9 3 24"
                                    class="mr-2 text-slate-400 overflow-visible group-hover:text-slate-600 dark:text-slate-600 dark:group-hover:text-slate-500">
                                    <path d="M0 0L3 3L0 6" fill="none" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round">
                                    </path>
                                </svg>Restoring forced colors</a></li>
                        <li><a href="#applying-conditionally"
                                class="block py-1 font-medium hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300">Applying
                                conditionally</a></li>
                        <li class="ml-4"><a href="#hover-focus-and-other-states"
                                class="group flex items-start py-1 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300"><svg
                                    width="3" height="24" viewBox="0 -9 3 24"
                                    class="mr-2 text-slate-400 overflow-visible group-hover:text-slate-600 dark:text-slate-600 dark:group-hover:text-slate-500">
                                    <path d="M0 0L3 3L0 6" fill="none" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round">
                                    </path>
                                </svg>Hover, focus, and other states</a></li>
                        <li class="ml-4"><a href="#breakpoints-and-media-queries"
                                class="group flex items-start py-1 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300"><svg
                                    width="3" height="24" viewBox="0 -9 3 24"
                                    class="mr-2 text-slate-400 overflow-visible group-hover:text-slate-600 dark:text-slate-600 dark:group-hover:text-slate-500">
                                    <path d="M0 0L3 3L0 6" fill="none" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round">
                                    </path>
                                </svg>Breakpoints and media queries</a></li>
                    </ul>
                </div>
                <div class="mt-8 overflow-hidden">
                    <div class="p-8"><a href="https://www.refactoringui.com/?ref=sidebar"
                            class="relative block pt-80 -m-6 p-6 rounded-lg focus:outline-none focus:bg-slate-50 dark:focus:bg-slate-800/25"><img
                                class="pointer-events-none h-[673px] w-[536px] max-w-none absolute -top-[112px] -right-6"
                                src="/img/refactoring-ui-sidebar.png"
                                alt="Refactoring UI by Adam Wathan and Steve Schoger" decoding="async">
                            <div>
                                <p class="text-[0.8125rem] font-semibold leading-5 text-sky-500 dark:text-sky-400">From
                                    the creators of
                                    Tailwind CSS</p>
                                <p
                                    class="mt-1 text-base font-bold tracking-tight leading-[1.375] text-slate-900 dark:text-slate-200">
                                    Make
                                    your ideas look awesome, without relying on a designer.</p>
                                <figure class="mt-6 pl-4 border-l border-slate-100 dark:border-slate-700">
                                    <blockquote class="text-sm leading-5 text-slate-600 dark:text-slate-400">“This is
                                        the survival kit I
                                        wish I had when I started building apps.”</blockquote>
                                    <figcaption class="mt-3 text-xs leading-5 text-slate-500">Derrick Reimer, <span
                                            class="">SavvyCal</span>
                                    </figcaption>
                                </figure>
                            </div>
                        </a></div>
                </div>
            </div>
        </div>
    </x-www-layout>
</x-www-app>