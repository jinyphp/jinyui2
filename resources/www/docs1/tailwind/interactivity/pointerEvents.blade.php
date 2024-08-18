<x-www-app>
  <div class="max-w-3xl mx-auto pt-10 xl:max-w-none xl:ml-0 xl:mr-[15.5rem] xl:pr-16">
    <header id="header" class="relative z-20">
      <div>
        <p class="mb-2 text-sm leading-6 font-semibold text-sky-500 dark:text-sky-400">Interactivity</p>
        <div class="flex items-center">
          <h1
            class="inline-block text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight dark:text-slate-200">
            Pointer Events</h1>
        </div>
      </div>
      <p class="mt-2 text-lg text-slate-700 dark:text-slate-400">Utilities for controlling whether an element responds
        to pointer events.</p>
    </header>
    <div class="mt-10 relative">
      <h2 class="flex whitespace-pre-wrap not-prose relative scroll-mt-[var(--scroll-mt)]" id="class-reference"><a
          class="group relative border-none lg:-ml-2 lg:pl-2" href="#class-reference"><span
            class="absolute -ml-8 hidden items-center border-0 opacity-0 group-hover:opacity-100 group-focus:opacity-100 lg:flex">​<span
              class="flex h-6 w-6 items-center justify-center rounded-md text-slate-400 shadow-sm ring-1 ring-slate-900/5 hover:text-slate-700 hover:shadow hover:ring-slate-900/10 dark:bg-slate-800 dark:text-slate-400 dark:shadow-none dark:ring-0 dark:hover:bg-slate-700 dark:hover:text-slate-200"><svg
                width="12" height="12" fill="none" aria-hidden="true">
                <path d="M3.75 1v10M8.25 1v10M1 3.75h10M1 8.25h10" stroke="currentColor" stroke-width="1.5"
                  stroke-linecap="round"></path>
              </svg></span></span><span class="sr-only">Quick reference</span></a></h2>
      <div class="overflow-x-auto flex -mx-4 sm:-mx-6 md:mx-0">
        <div id="class-table"
          class="flex-none min-w-full px-4 sm:px-6 md:px-0 overflow-hidden lg:overflow-auto scrollbar:!w-1.5 scrollbar:!h-1.5 scrollbar:bg-transparent scrollbar-track:!bg-slate-100 scrollbar-thumb:!rounded scrollbar-thumb:!bg-slate-300 scrollbar-track:!rounded dark:scrollbar-track:!bg-slate-500/[0.16] dark:scrollbar-thumb:!bg-slate-500/50">
          <table class="w-full text-left border-collapse">
            <thead>
              <tr>
                <th
                  class="sticky z-10 top-0 text-sm leading-6 font-semibold text-slate-700 bg-white p-0 dark:bg-slate-900 dark:text-slate-300">
                  <div class="py-2 pr-2 border-b border-slate-200 dark:border-slate-400/20">Class</div>
                </th>
                <th
                  class="sticky z-10 top-0 text-sm leading-6 font-semibold text-slate-700 bg-white p-0 dark:bg-slate-900 dark:text-slate-300">
                  <div class="py-2 pl-2 border-b border-slate-200 dark:border-slate-400/20">Properties</div>
                </th>
              </tr>
            </thead>
            <tbody class="align-baseline">
              <tr>
                <td translate="no"
                  class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400">
                  pointer-events-none</td>
                <td translate="no"
                  class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300">
                  pointer-events: none;
                </td>
              </tr>
              <tr>
                <td translate="no"
                  class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                  pointer-events-auto</td>
                <td translate="no"
                  class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                  pointer-events: auto;
                </td>
              </tr>
            </tbody>
          </table>
          <div class="sticky bottom-0 h-px -mt-px bg-slate-200 dark:bg-slate-400/20"></div>
        </div>
      </div>
    </div>
    <div id="content-wrapper" class="relative z-20 prose prose-slate mt-12 dark:prose-dark">
      <h2
        class="flex whitespace-pre-wrap not-prose mb-2 text-sm leading-6 text-sky-500 font-semibold tracking-normal dark:text-sky-400"
        id="basic-usage"><a class="group relative border-none lg:-ml-2 lg:pl-2" href="#basic-usage"><span
            class="absolute -ml-8 hidden items-center border-0 opacity-0 group-hover:opacity-100 group-focus:opacity-100 lg:flex">​<span
              class="flex h-6 w-6 items-center justify-center rounded-md text-slate-400 shadow-sm ring-1 ring-slate-900/5 hover:text-slate-700 hover:shadow hover:ring-slate-900/10 dark:bg-slate-800 dark:text-slate-400 dark:shadow-none dark:ring-0 dark:hover:bg-slate-700 dark:hover:text-slate-200"><svg
                width="12" height="12" fill="none" aria-hidden="true">
                <path d="M3.75 1v10M8.25 1v10M1 3.75h10M1 8.25h10" stroke="currentColor" stroke-width="1.5"
                  stroke-linecap="round"></path>
              </svg></span></span>Basic usage</a></h2>
      <h3 class="flex whitespace-pre-wrap not-prose" id="controlling-pointer-event-behavior"><a
          class="group relative border-none lg:-ml-2 lg:pl-2" href="#controlling-pointer-event-behavior"><span
            class="absolute -ml-8 hidden items-center border-0 opacity-0 group-hover:opacity-100 group-focus:opacity-100 lg:flex">​<span
              class="flex h-6 w-6 items-center justify-center rounded-md text-slate-400 shadow-sm ring-1 ring-slate-900/5 hover:text-slate-700 hover:shadow hover:ring-slate-900/10 dark:bg-slate-800 dark:text-slate-400 dark:shadow-none dark:ring-0 dark:hover:bg-slate-700 dark:hover:text-slate-200"><svg
                width="12" height="12" fill="none" aria-hidden="true">
                <path d="M3.75 1v10M8.25 1v10M1 3.75h10M1 8.25h10" stroke="currentColor" stroke-width="1.5"
                  stroke-linecap="round"></path>
              </svg></span></span>Controlling pointer event behavior</a></h3>
      <p>Use <code>pointer-events-auto</code> to revert to the default browser behavior for pointer events (like
        <code>:hover</code> and <code>click</code>).</p>
      <p>Use <code>pointer-events-none</code> to make an element ignore pointer events. The pointer events will still
        trigger on child elements and pass-through to elements that are “beneath” the target.</p>
      <div class="mt-4 -mb-3">
        <div class="not-prose mb-4">
          <div class="flex space-x-2"><svg class="flex-none w-5 h-5" viewBox="0 0 20 20" fill="none" stroke-width="1.5"
              stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path
                d="m9.813 9.25.346-5.138a1.276 1.276 0 0 0-2.54-.235L6.75 11.25 5.147 9.327a1.605 1.605 0 0 0-2.388-.085.018.018 0 0 0-.004.019l1.98 4.87a5 5 0 0 0 4.631 3.119h3.885a4 4 0 0 0 4-4v-1a3 3 0 0 0-3-3H9.813Z"
                class="stroke-slate-400 dark:stroke-slate-300"></path>
              <path d="M3 5s.35-.47 1.25-.828m9.516-.422c2.078.593 3.484 1.5 3.484 1.5"
                class="stroke-slate-400 dark:stroke-sky-400"></path>
            </svg>
            <p class="text-slate-700 text-sm font-medium dark:text-slate-200">Try clicking the search icons to see the
              expected behaviour</p>
          </div>
        </div>
        <div class="not-prose relative bg-slate-50 rounded-xl overflow-hidden dark:bg-slate-800/25">
          <div
            class="absolute inset-0 bg-grid-slate-100 [mask-image:linear-gradient(0deg,#fff,rgba(255,255,255,0.6))] dark:bg-grid-slate-700/25 dark:[mask-image:linear-gradient(0deg,rgba(255,255,255,0.1),rgba(255,255,255,0.5))]"
            style="background-position: 10px 10px;"></div>
          <div class="relative rounded-xl overflow-auto p-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-10 px-0 sm:px-10 font-mono font-bold">
              <div class="flex flex-col">
                <p class="font-medium text-sm text-slate-500 font-mono mb-3 dark:text-slate-400">pointer-events-auto</p>
                <div class="relative rounded-lg shadow-sm w-full">
                  <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-auto">
                    <svg class="absolute text-slate-400 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                        clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <input type="text" placeholder="Search"
                    class="font-sans block text-sm w-full pl-10 py-2 px-3 ring-1 ring-slate-900/10 text-slate-500 rounded-lg dark:bg-slate-800 dark:ring-0 dark:highlight-white/5 dark:text-slate-400">
                </div>
              </div>
              <div class="flex flex-col">
                <p class="font-medium text-sm text-slate-500 font-mono mb-3 dark:text-slate-400">pointer-events-none</p>
                <div class="relative rounded-lg shadow-sm w-full">
                  <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="absolute text-slate-400 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                        clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <input type="text" placeholder="Search"
                    class="font-sans block text-sm w-full pl-10 py-2 px-3 ring-1 ring-slate-900/10 text-slate-500 rounded-lg dark:bg-slate-800 dark:ring-0 dark:highlight-white/5 dark:text-slate-400">
                </div>
              </div>
            </div>
          </div>
          <div class="absolute inset-0 pointer-events-none border border-black/5 rounded-xl dark:border-white/5"></div>
        </div>
      </div>
      <pre
        class="language-html"><code class="language-html"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>relative ...<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>absolute <span class="code-highlight bg-code-highlight">pointer-events-auto</span> ...<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>svg</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>absolute text-slate-400 h-5 w-5<span class="token punctuation">"</span></span> <span class="token attr-name">viewBox</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>0 0 20 20<span class="token punctuation">"</span></span> <span class="token attr-name">fill</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>currentColor<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>path</span> <span class="token attr-name">fill-rule</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>evenodd<span class="token punctuation">"</span></span> <span class="token attr-name">d</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z<span class="token punctuation">"</span></span> <span class="token attr-name">clip-rule</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>evenodd<span class="token punctuation">"</span></span> <span class="token punctuation">/&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>svg</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>text<span class="token punctuation">"</span></span> <span class="token attr-name">placeholder</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>Search<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>...<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>

<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>relative ...<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>absolute <span class="code-highlight bg-code-highlight">pointer-events-none</span> ...<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>svg</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>absolute text-slate-400 h-5 w-5<span class="token punctuation">"</span></span> <span class="token attr-name">viewBox</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>0 0 20 20<span class="token punctuation">"</span></span> <span class="token attr-name">fill</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>currentColor<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>path</span> <span class="token attr-name">fill-rule</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>evenodd<span class="token punctuation">"</span></span> <span class="token attr-name">d</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z<span class="token punctuation">"</span></span> <span class="token attr-name">clip-rule</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>evenodd<span class="token punctuation">"</span></span> <span class="token punctuation">/&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>svg</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>text<span class="token punctuation">"</span></span> <span class="token attr-name">placeholder</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>Search<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>...<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span></code></pre>
      <h2
        class="flex whitespace-pre-wrap not-prose mb-2 text-sm leading-6 text-sky-500 font-semibold tracking-normal dark:text-sky-400"
        id="applying-conditionally" data-docsearch-ignore=""><a class="group relative border-none lg:-ml-2 lg:pl-2"
          href="#applying-conditionally"><span
            class="absolute -ml-8 hidden items-center border-0 opacity-0 group-hover:opacity-100 group-focus:opacity-100 lg:flex">​<span
              class="flex h-6 w-6 items-center justify-center rounded-md text-slate-400 shadow-sm ring-1 ring-slate-900/5 hover:text-slate-700 hover:shadow hover:ring-slate-900/10 dark:bg-slate-800 dark:text-slate-400 dark:shadow-none dark:ring-0 dark:hover:bg-slate-700 dark:hover:text-slate-200"><svg
                width="12" height="12" fill="none" aria-hidden="true">
                <path d="M3.75 1v10M8.25 1v10M1 3.75h10M1 8.25h10" stroke="currentColor" stroke-width="1.5"
                  stroke-linecap="round"></path>
              </svg></span></span>Applying conditionally</a></h2>
      <h3 class="flex whitespace-pre-wrap not-prose" id="hover-focus-and-other-states" data-docsearch-ignore=""><a
          class="group relative border-none lg:-ml-2 lg:pl-2" href="#hover-focus-and-other-states"><span
            class="absolute -ml-8 hidden items-center border-0 opacity-0 group-hover:opacity-100 group-focus:opacity-100 lg:flex">​<span
              class="flex h-6 w-6 items-center justify-center rounded-md text-slate-400 shadow-sm ring-1 ring-slate-900/5 hover:text-slate-700 hover:shadow hover:ring-slate-900/10 dark:bg-slate-800 dark:text-slate-400 dark:shadow-none dark:ring-0 dark:hover:bg-slate-700 dark:hover:text-slate-200"><svg
                width="12" height="12" fill="none" aria-hidden="true">
                <path d="M3.75 1v10M8.25 1v10M1 3.75h10M1 8.25h10" stroke="currentColor" stroke-width="1.5"
                  stroke-linecap="round"></path>
              </svg></span></span>Hover, focus, and other states</a></h3>
      <p>Tailwind lets you conditionally apply utility classes in different states using variant modifiers. For example,
        use <code>focus:pointer-events-auto</code> to only apply the <code>pointer-events-auto</code> utility on focus.
      </p>
      <pre class="language-html"><code class="language-html"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>pointer-events-none <span class="code-highlight bg-code-highlight">focus:pointer-events-auto</span><span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
  <span class="token comment">&lt;!-- ... --&gt;</span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
</code></pre>
      <p>For a complete list of all available state modifiers, check out the <a
          href="/docs/hover-focus-and-other-states">Hover, Focus, &amp; Other States</a> documentation.</p>
      <h3 class="flex whitespace-pre-wrap not-prose" id="breakpoints-and-media-queries" data-docsearch-ignore=""><a
          class="group relative border-none lg:-ml-2 lg:pl-2" href="#breakpoints-and-media-queries"><span
            class="absolute -ml-8 hidden items-center border-0 opacity-0 group-hover:opacity-100 group-focus:opacity-100 lg:flex">​<span
              class="flex h-6 w-6 items-center justify-center rounded-md text-slate-400 shadow-sm ring-1 ring-slate-900/5 hover:text-slate-700 hover:shadow hover:ring-slate-900/10 dark:bg-slate-800 dark:text-slate-400 dark:shadow-none dark:ring-0 dark:hover:bg-slate-700 dark:hover:text-slate-200"><svg
                width="12" height="12" fill="none" aria-hidden="true">
                <path d="M3.75 1v10M8.25 1v10M1 3.75h10M1 8.25h10" stroke="currentColor" stroke-width="1.5"
                  stroke-linecap="round"></path>
              </svg></span></span>Breakpoints and media queries</a></h3>
      <p>You can also use variant modifiers to target media queries like responsive breakpoints, dark mode,
        prefers-reduced-motion, and more. For example, use <code>md:pointer-events-auto</code> to apply the
        <code>pointer-events-auto</code> utility at only medium screen sizes and above.</p>
      <pre class="language-html"><code class="language-html"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>pointer-events-none <span class="code-highlight bg-code-highlight">md:pointer-events-auto</span><span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
  <span class="token comment">&lt;!-- ... --&gt;</span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
</code></pre>
      <p>To learn more, check out the documentation on <a href="/docs/responsive-design">Responsive Design</a>, <a
          href="/docs/dark-mode">Dark Mode</a> and <a
          href="/docs/hover-focus-and-other-states#media-and-feature-queries">other media query modifiers</a>.</p>
    </div>
    <footer class="text-sm leading-6 mt-12">
      <div class="mb-10 text-slate-700 font-semibold flex items-center dark:text-slate-200"><a
          class="group flex items-center hover:text-slate-900 dark:hover:text-white" href="/docs/caret-color"><svg
            viewBox="0 0 3 6"
            class="mr-3 w-auto h-1.5 text-slate-400 overflow-visible group-hover:text-slate-600 dark:group-hover:text-slate-300">
            <path d="M3 0L0 3L3 6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round"></path>
          </svg>Caret Color</a><a class="group ml-auto flex items-center hover:text-slate-900 dark:hover:text-white"
          href="/docs/resize">Resize<svg viewBox="0 0 3 6"
            class="ml-3 w-auto h-1.5 text-slate-400 overflow-visible group-hover:text-slate-600 dark:group-hover:text-slate-300">
            <path d="M0 0L3 3L0 6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round"></path>
          </svg></a></div>
      <div class="pt-10 pb-28 border-t border-slate-200 sm:flex justify-between text-slate-500 dark:border-slate-200/5">
        <div class="mb-6 sm:mb-0 sm:flex">
          <p>Copyright © 2024 Tailwind Labs Inc.</p>
          <p class="sm:ml-4 sm:pl-4 sm:border-l sm:border-slate-200 dark:sm:border-slate-200/5"><a
              class="hover:text-slate-900 dark:hover:text-slate-400" href="/brand">Trademark Policy</a></p>
        </div><a class="hover:text-slate-900 dark:hover:text-slate-400"
          href="https://github.com/tailwindlabs/tailwindcss.com/edit/master/src/pages/docs/pointer-events.mdx">Edit this
          page on GitHub</a>
      </div>
    </footer>
    <div
      class="fixed z-20 top-[3.8125rem] bottom-0 right-[max(0px,calc(50%-45rem))] w-[19.5rem] py-10 overflow-y-auto hidden xl:block">
      <div class="px-8">
        <h5 class="text-slate-900 font-semibold mb-4 text-sm leading-6 dark:text-slate-100">On this page</h5>
        <ul class="text-slate-700 text-sm leading-6">
          <li><a href="#class-reference" class="block py-1 font-medium font-medium text-sky-500 dark:text-sky-400">Quick
              reference</a></li>
          <li><a href="#basic-usage"
              class="block py-1 font-medium hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300">Basic
              usage</a></li>
          <li class="ml-4"><a href="#controlling-pointer-event-behavior"
              class="group flex items-start py-1 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300"><svg
                width="3" height="24" viewBox="0 -9 3 24"
                class="mr-2 text-slate-400 overflow-visible group-hover:text-slate-600 dark:text-slate-600 dark:group-hover:text-slate-500">
                <path d="M0 0L3 3L0 6" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round">
                </path>
              </svg>Controlling pointer event behavior</a></li>
          <li><a href="#applying-conditionally"
              class="block py-1 font-medium hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300">Applying
              conditionally</a></li>
          <li class="ml-4"><a href="#hover-focus-and-other-states"
              class="group flex items-start py-1 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300"><svg
                width="3" height="24" viewBox="0 -9 3 24"
                class="mr-2 text-slate-400 overflow-visible group-hover:text-slate-600 dark:text-slate-600 dark:group-hover:text-slate-500">
                <path d="M0 0L3 3L0 6" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round">
                </path>
              </svg>Hover, focus, and other states</a></li>
          <li class="ml-4"><a href="#breakpoints-and-media-queries"
              class="group flex items-start py-1 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300"><svg
                width="3" height="24" viewBox="0 -9 3 24"
                class="mr-2 text-slate-400 overflow-visible group-hover:text-slate-600 dark:text-slate-600 dark:group-hover:text-slate-500">
                <path d="M0 0L3 3L0 6" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round">
                </path>
              </svg>Breakpoints and media queries</a></li>
        </ul>
      </div>
      <div class="mt-8 overflow-hidden">
        <div class="p-8"><a href="https://www.refactoringui.com/?ref=sidebar"
            class="relative block pt-80 -m-6 p-6 rounded-lg focus:outline-none focus:bg-slate-50 dark:focus:bg-slate-800/25"><img
              class="pointer-events-none h-[673px] w-[536px] max-w-none absolute -top-[112px] -right-6"
              src="/img/refactoring-ui-sidebar.png" alt="Refactoring UI by Adam Wathan and Steve Schoger"
              decoding="async">
            <div>
              <p class="text-[0.8125rem] font-semibold leading-5 text-sky-500 dark:text-sky-400">From the creators of
                Tailwind CSS</p>
              <p class="mt-1 text-base font-bold tracking-tight leading-[1.375] text-slate-900 dark:text-slate-200">Make
                your ideas look awesome, without relying on a designer.</p>
              <figure class="mt-6 pl-4 border-l border-slate-100 dark:border-slate-700">
                <blockquote class="text-sm leading-5 text-slate-600 dark:text-slate-400">“This is the survival kit I
                  wish I had when I started building apps.”</blockquote>
                <figcaption class="mt-3 text-xs leading-5 text-slate-500">Derrick Reimer, <span class="">SavvyCal</span>
                </figcaption>
              </figure>
            </div>
          </a></div>
      </div>
    </div>
  </div>
</x-www-app>