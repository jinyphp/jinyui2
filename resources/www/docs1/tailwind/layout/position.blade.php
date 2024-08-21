<x-www_layout2>
  @livewire('WidgetTitle', [
  'filename' => 'utility/layout/position/title',
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
          static</td>
        <td translate="no" class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 dark:text-indigo-300">position:
          static;
        </td>
      </tr>
      <tr>
        <td translate="no"
          class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
          fixed</td>
        <td translate="no"
          class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
          position: fixed;
        </td>
      </tr>
      <tr>
        <td translate="no"
          class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
          absolute</td>
        <td translate="no"
          class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
          position: absolute;
        </td>
      </tr>
      <tr>
        <td translate="no"
          class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
          relative</td>
        <td translate="no"
          class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
          position: relative;
        </td>
      </tr>
      <tr>
        <td translate="no"
          class="py-2 pr-2 font-mono font-medium text-xs leading-6 text-sky-500 whitespace-nowrap dark:text-sky-400 border-t border-slate-100 dark:border-slate-400/10">
          sticky</td>
        <td translate="no"
          class="py-2 pl-2 font-mono text-xs leading-6 text-indigo-600 dark:text-indigo-300 border-t border-slate-100 dark:border-slate-400/10">
          position: sticky;
        </td>
      </tr>
    </tbody>
  </table>
  @livewire('WidgetCode-Component', [
  'filename' => 'utility/layout/position/basic_static',
  ])
  @livewire('WidgetCode-Component', [
  'filename' => 'utility/layout/position/basic_relative',
  ])
  @livewire('WidgetCode-Component', [
  'filename' => 'utility/layout/position/basic_absolute',
  ])
  @livewire('WidgetCode-Component', [
  'filename' => 'utility/layout/position/basic_fixed',
  ])
  @livewire('WidgetCode-Component', [
  'filename' => 'utility/layout/position/basic_sticky',
  ])
  @livewire('WidgetCode-Component', [
  'filename' => 'utility/layout/position/apply',
  ])

</x-www_layout2>