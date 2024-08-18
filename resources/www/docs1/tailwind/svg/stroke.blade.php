<x-www-app>
  <div class="max-w-3xl mx-auto pt-10 xl:max-w-none xl:ml-0 xl:mr-[15.5rem] xl:pr-16">
    <header id="header" class="relative z-20">
      <div>
        <p class="mb-2 text-sm leading-6 font-semibold text-sky-500 dark:text-sky-400">SVG</p>
        <div class="flex items-center">
          <h1
            class="inline-block text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight dark:text-slate-200">
            Stroke Width</h1>
        </div>
      </div>
      <p class="mt-2 text-lg text-slate-700 dark:text-slate-400">Utilities for styling the stroke width of SVG elements.
      </p>
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
                  stroke-0</td>
                <td translate="no"
                  class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300">
                  stroke-width: 0;
                </td>
              </tr>
              <tr>
                <td translate="no"
                  class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                  stroke-1</td>
                <td translate="no"
                  class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                  stroke-width: 1;
                </td>
              </tr>
              <tr>
                <td translate="no"
                  class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
                  stroke-2</td>
                <td translate="no"
                  class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 whitespace-pre dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
                  stroke-width: 2;
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
      <h3 class="flex whitespace-pre-wrap not-prose" id="setting-the-stroke-width"><a
          class="group relative border-none lg:-ml-2 lg:pl-2" href="#setting-the-stroke-width"><span
            class="absolute -ml-8 hidden items-center border-0 opacity-0 group-hover:opacity-100 group-focus:opacity-100 lg:flex">​<span
              class="flex h-6 w-6 items-center justify-center rounded-md text-slate-400 shadow-sm ring-1 ring-slate-900/5 hover:text-slate-700 hover:shadow hover:ring-slate-900/10 dark:bg-slate-800 dark:text-slate-400 dark:shadow-none dark:ring-0 dark:hover:bg-slate-700 dark:hover:text-slate-200"><svg
                width="12" height="12" fill="none" aria-hidden="true">
                <path d="M3.75 1v10M8.25 1v10M1 3.75h10M1 8.25h10" stroke="currentColor" stroke-width="1.5"
                  stroke-linecap="round"></path>
              </svg></span></span>Setting the stroke width</a></h3>
      <p>Use the <code>stroke-*</code> utilities to set the stroke width of an SVG.</p>
      <div class="mt-4 -mb-3">
        <div class="not-prose relative bg-slate-50 rounded-xl overflow-hidden dark:bg-slate-800/25">
          <div
            class="absolute inset-0 bg-grid-slate-100 [mask-image:linear-gradient(0deg,#fff,rgba(255,255,255,0.6))] dark:bg-grid-slate-700/25 dark:[mask-image:linear-gradient(0deg,rgba(255,255,255,0.1),rgba(255,255,255,0.5))]"
            style="background-position: 10px 10px;"></div>
          <div class="relative rounded-xl overflow-auto p-8">
            <div class="flex items-center justify-center space-x-8">
              <svg class="stroke-indigo-500 stroke-1" width="48" height="48" viewBox="0 0 48 48" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <circle cx="24" cy="24" r="23" stroke-linejoin="round"></circle>
                <path d="M23 1C23 1 15 10.4901 15 24C15 37.5099 23 47 23 47" stroke-linejoin="round"></path>
                <path d="M25 1C25 1 33 10.4901 33 24C33 37.5099 25 47 25 47" stroke-linejoin="round"></path>
                <path d="M1 24H47"></path>
              </svg>
              <svg class="stroke-indigo-500 stroke-2" width="48" height="48" viewBox="0 0 48 48" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <circle cx="24" cy="24" r="23" stroke-linejoin="round"></circle>
                <path d="M23 1C23 1 15 10.4901 15 24C15 37.5099 23 47 23 47" stroke-linejoin="round"></path>
                <path d="M25 1C25 1 33 10.4901 33 24C33 37.5099 25 47 25 47" stroke-linejoin="round"></path>
                <path d="M1 24H47"></path>
              </svg>
            </div>
          </div>
          <div class="absolute inset-0 pointer-events-none border border-black/5 rounded-xl dark:border-white/5"></div>
        </div>
      </div>
      <pre
        class="language-html"><code class="language-html"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>svg</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span><span class="code-highlight bg-code-highlight">stroke-1</span> ...<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>svg</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>svg</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span><span class="code-highlight bg-code-highlight">stroke-2</span> ...<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>svg</span><span class="token punctuation">&gt;</span></span></code></pre>
      <p>This can be useful for styling icon sets like <a href="https://heroicons.com">Heroicons</a>.</p>
      <hr>
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
        use <code>hover:stroke-2</code> to only apply the <code>stroke-2</code> utility on hover.</p>
      <pre class="language-html"><code class="language-html"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>svg</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>stroke-1 <span class="code-highlight bg-code-highlight">hover:stroke-2</span><span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
  <span class="token comment">&lt;!-- ... --&gt;</span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>svg</span><span class="token punctuation">&gt;</span></span>
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
        prefers-reduced-motion, and more. For example, use <code>md:stroke-2</code> to apply the <code>stroke-2</code>
        utility at only medium screen sizes and above.</p>
      <pre class="language-html"><code class="language-html"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>svg</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span>stroke-1 <span class="code-highlight bg-code-highlight">md:stroke-2</span><span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
  <span class="token comment">&lt;!-- ... --&gt;</span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>svg</span><span class="token punctuation">&gt;</span></span>
</code></pre>
      <p>To learn more, check out the documentation on <a href="/docs/responsive-design">Responsive Design</a>, <a
          href="/docs/dark-mode">Dark Mode</a> and <a
          href="/docs/hover-focus-and-other-states#media-and-feature-queries">other media query modifiers</a>.</p>
      <hr>
      <h2
        class="flex whitespace-pre-wrap not-prose mb-2 text-sm leading-6 text-sky-500 font-semibold tracking-normal dark:text-sky-400"
        id="using-custom-values"><a class="group relative border-none lg:-ml-2 lg:pl-2"
          href="#using-custom-values"><span
            class="absolute -ml-8 hidden items-center border-0 opacity-0 group-hover:opacity-100 group-focus:opacity-100 lg:flex">​<span
              class="flex h-6 w-6 items-center justify-center rounded-md text-slate-400 shadow-sm ring-1 ring-slate-900/5 hover:text-slate-700 hover:shadow hover:ring-slate-900/10 dark:bg-slate-800 dark:text-slate-400 dark:shadow-none dark:ring-0 dark:hover:bg-slate-700 dark:hover:text-slate-200"><svg
                width="12" height="12" fill="none" aria-hidden="true">
                <path d="M3.75 1v10M8.25 1v10M1 3.75h10M1 8.25h10" stroke="currentColor" stroke-width="1.5"
                  stroke-linecap="round"></path>
              </svg></span></span>Using custom values</a></h2>
      <h3 class="flex whitespace-pre-wrap not-prose" id="customizing-your-theme"><a
          class="group relative border-none lg:-ml-2 lg:pl-2" href="#customizing-your-theme"><span
            class="absolute -ml-8 hidden items-center border-0 opacity-0 group-hover:opacity-100 group-focus:opacity-100 lg:flex">​<span
              class="flex h-6 w-6 items-center justify-center rounded-md text-slate-400 shadow-sm ring-1 ring-slate-900/5 hover:text-slate-700 hover:shadow hover:ring-slate-900/10 dark:bg-slate-800 dark:text-slate-400 dark:shadow-none dark:ring-0 dark:hover:bg-slate-700 dark:hover:text-slate-200"><svg
                width="12" height="12" fill="none" aria-hidden="true">
                <path d="M3.75 1v10M8.25 1v10M1 3.75h10M1 8.25h10" stroke="currentColor" stroke-width="1.5"
                  stroke-linecap="round"></path>
              </svg></span></span>Customizing your theme</a></h3>
      <p>By default, Tailwind provides three <code>stroke-width</code> utilities. You change, add, or remove these by
        editing the <code>theme.strokeWidth</code> section of your Tailwind config.</p>
      <div class="mt-5 mb-8 first:mt-0 last:mb-0 relative overflow-hidden rounded-2xl">
        <div class="pt-2 bg-slate-800 shadow-lg group">
          <div class="flex text-slate-400 text-xs leading-6">
            <div
              class="flex-none text-sky-300 border-t border-b border-t-transparent border-b-sky-300 px-4 py-1 flex items-center">
              tailwind.config.js</div>
            <div class="flex-auto flex items-center bg-slate-700/50 border border-slate-500/30 rounded-tl"></div>
          </div>
          <div class="children:my-0 children:!shadow-none children:bg-transparent">
            <pre class="language-diff-js"><code class="language-diff-js"><span class="token language-js unchanged"><span class="token plain">module</span><span class="token punctuation">.</span><span class="token property-access">exports</span><span class="token plain"> </span><span class="token operator">=</span><span class="token plain"> </span><span class="token punctuation">{</span><span class="token plain"></span>
</span><span class="token language-js unchanged"><span class="token plain">  </span><span class="token literal-property property">theme</span><span class="token operator">:</span><span class="token plain"> </span><span class="token punctuation">{</span><span class="token plain"></span>
</span><span class="token language-js unchanged"><span class="token plain">    </span><span class="token literal-property property">extend</span><span class="token operator">:</span><span class="token plain"> </span><span class="token punctuation">{</span><span class="token plain"></span>
</span><span class="token language-js inserted"><span class="token plain">      </span><span class="token literal-property property">strokeWidth</span><span class="token operator">:</span><span class="token plain"> </span><span class="token punctuation">{</span><span class="token plain"></span>
</span><span class="token language-js inserted"><span class="token plain">        </span><span class="token string-property property">'2'</span><span class="token operator">:</span><span class="token plain"> </span><span class="token string">'2px'</span><span class="token punctuation">,</span><span class="token plain"></span>
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
      <p>Learn more about customizing the default theme in the <a href="/docs/theme#customizing-the-default-theme">theme
          customization</a> documentation.</p>
      <h3 class="flex whitespace-pre-wrap not-prose" id="arbitrary-values"><a
          class="group relative border-none lg:-ml-2 lg:pl-2" href="#arbitrary-values"><span
            class="absolute -ml-8 hidden items-center border-0 opacity-0 group-hover:opacity-100 group-focus:opacity-100 lg:flex">​<span
              class="flex h-6 w-6 items-center justify-center rounded-md text-slate-400 shadow-sm ring-1 ring-slate-900/5 hover:text-slate-700 hover:shadow hover:ring-slate-900/10 dark:bg-slate-800 dark:text-slate-400 dark:shadow-none dark:ring-0 dark:hover:bg-slate-700 dark:hover:text-slate-200"><svg
                width="12" height="12" fill="none" aria-hidden="true">
                <path d="M3.75 1v10M8.25 1v10M1 3.75h10M1 8.25h10" stroke="currentColor" stroke-width="1.5"
                  stroke-linecap="round"></path>
              </svg></span></span>Arbitrary values</a></h3>
      <p>If you need to use a one-off <code>stroke-width</code> value that doesn’t make sense to include in your theme,
        use square brackets to generate a property on the fly using any arbitrary value.</p>
      <pre class="language-html"><code class="language-html"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>svg</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation attr-equals">=</span><span class="token punctuation">"</span><span class="code-highlight bg-code-highlight">stroke-[2px]</span><span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
  <span class="token comment">&lt;!-- ... --&gt;</span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>svg</span><span class="token punctuation">&gt;</span></span>
</code></pre>
      <p>Learn more about arbitrary value support in the <a
          href="/docs/adding-custom-styles#using-arbitrary-values">arbitrary values</a> documentation.</p>
    </div>
    <footer class="text-sm leading-6 mt-12">
      <div class="mb-10 text-slate-700 font-semibold flex items-center dark:text-slate-200"><a
          class="group flex items-center hover:text-slate-900 dark:hover:text-white" href="/docs/stroke"><svg
            viewBox="0 0 3 6"
            class="mr-3 w-auto h-1.5 text-slate-400 overflow-visible group-hover:text-slate-600 dark:group-hover:text-slate-300">
            <path d="M3 0L0 3L3 6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round"></path>
          </svg>Stroke</a><a class="group ml-auto flex items-center hover:text-slate-900 dark:hover:text-white"
          href="/docs/screen-readers">Screen Readers<svg viewBox="0 0 3 6"
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
          href="https://github.com/tailwindlabs/tailwindcss.com/edit/master/src/pages/docs/stroke-width.mdx">Edit this
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
          <li class="ml-4"><a href="#setting-the-stroke-width"
              class="group flex items-start py-1 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300"><svg
                width="3" height="24" viewBox="0 -9 3 24"
                class="mr-2 text-slate-400 overflow-visible group-hover:text-slate-600 dark:text-slate-600 dark:group-hover:text-slate-500">
                <path d="M0 0L3 3L0 6" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round">
                </path>
              </svg>Setting the stroke width</a></li>
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
          <li><a href="#using-custom-values"
              class="block py-1 font-medium hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300">Using
              custom values</a></li>
          <li class="ml-4"><a href="#customizing-your-theme"
              class="group flex items-start py-1 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300"><svg
                width="3" height="24" viewBox="0 -9 3 24"
                class="mr-2 text-slate-400 overflow-visible group-hover:text-slate-600 dark:text-slate-600 dark:group-hover:text-slate-500">
                <path d="M0 0L3 3L0 6" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round">
                </path>
              </svg>Customizing your theme</a></li>
          <li class="ml-4"><a href="#arbitrary-values"
              class="group flex items-start py-1 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300"><svg
                width="3" height="24" viewBox="0 -9 3 24"
                class="mr-2 text-slate-400 overflow-visible group-hover:text-slate-600 dark:text-slate-600 dark:group-hover:text-slate-500">
                <path d="M0 0L3 3L0 6" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round">
                </path>
              </svg>Arbitrary values</a></li>
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