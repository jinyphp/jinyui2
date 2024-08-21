<x-www_layout2>
  @livewire('WidgetTitle', [
  'filename' => 'utility/layout/borderStyle/title',
  ])
  <table class="w-full text-left border-collapse mx-10">
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
          border-solid</td>
        <td translate="no" class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 dark:text-indigo-300">
          border-style: solid;
        </td>
      </tr>
      <tr>
        <td translate="no"
          class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
          border-dashed</td>
        <td translate="no"
          class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
          border-style: dashed;
        </td>
      </tr>
      <tr>
        <td translate="no"
          class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
          border-dotted</td>
        <td translate="no"
          class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
          border-style: dotted;
        </td>
      </tr>
      <tr>
        <td translate="no"
          class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
          border-double</td>
        <td translate="no"
          class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
          border-style: double;
        </td>
      </tr>
      <tr>
        <td translate="no"
          class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
          border-hidden</td>
        <td translate="no"
          class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
          border-style: hidden;
        </td>
      </tr>
      <tr>
        <td translate="no"
          class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
          border-none</td>
        <td translate="no"
          class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
          border-style: none;
        </td>
      </tr>
    </tbody>
  </table>
  @livewire('WidgetCode-Component', [
  'filename' => 'utility/borders/borderStyle/basic_setting',
  ])
  @livewire('WidgetCode-Component', [
  'filename' => 'utility/borders/borderStyle/basic_no',
  ])
  @livewire('WidgetCode-Component', [
  'filename' => 'utility/borders/borderStyle/apply',
  ])

</x-www_layout2>